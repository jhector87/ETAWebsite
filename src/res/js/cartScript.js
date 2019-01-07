var itemCount = 0;
// Provides a suggestion if the amount of clicks is over the limit.

// AJAX CALL TO DATABASE
function addToCart(item_id) {
    $.post("../includes/handlers/ajax/getProdNameJson.php", {prodId: item_id}, function (data) {
        var item = JSON.parse(data);
        $('#itemName').text(item.prod_name);

        //
        $.post("../includes/handlers/ajax/getProdQuantityJson.php", {prodId: item_id}, function () {
            this.itemCount = item.quantity;
            $('#itemAmount').text('Quantity: ' + item.quantity);
        });

        $.post("../includes/handlers/ajax/getProdNameJson.php", {prodId: item_id}, function () {
            $('#itemTotal').text('Total amount: CHF ' + (item.quantity * item.price).toFixed(2));
        });

        $.post("../includes/handlers/ajax/getProdNameJson.php", {prodId: item_id}, function () {
            $('#itemDescription').text(item.description);
        });

        $.post("../includes/handlers/ajax/getProdNameJson.php", {prodId: item_id}, function () {
            $('.itemIcon img').attr("src", item.icon_link);
        });

        // productElement.setItem(item.prod_name);
    });
    $('.disableBtn').prop('disabled', false).css('opacity', 1);

    // DEALING LOCALLY WITH SETTING THE TEXT AND ABOVE DEALING VIRTUALLY
    // switch (item_id) {
    //     case 'student':
    //         // image.getAttribute('src').src = '../../res/student_icon.png';
    //         // document.getElementById('itemName').innerText = 'Student-Teacher Edition';
    //         // document.getElementById('itemAmount').innerText = 'Quantity: ' + (this.itemCount);
    //         // currentTotal = (this.itemCount * 20.00).toFixed(2);
    //         // document.getElementById('itemTotal').innerText = 'CHF ' + currentTotal;
    //         // document.getElementById('itemDescription').innerText = 'The Student-Teacher Edition is mainly built for students working in groups, teachers doing class assignments and demonstrations. The file-sharing provides in-time production meaning that everything is sync in actual time.';
    //         break;
    //
    //     case 'business':
    //         // image.getAttribute('src').src = '../res/icons/student_icon.png';
    //         document.getElementById('itemName').innerText = 'Business Edition';
    //         document.getElementById('itemAmount').innerText = 'Quantity: ' + this.itemCount;
    //         currentTotal = (this.itemCount * 30.00).toFixed(2);
    //         document.getElementById('itemTotal').innerText = 'CHF ' + currentTotal;
    //         document.getElementById('itemDescription').innerText = 'The Business Edition provides that extra help in bringing productivity into your business whether you are on the go or needs constant access to the different files.';
    //         break;
    //
    //     case 'enterprise':
    //         // image.getAttribute('src').src = '../res/icons/student_icon.png';
    //         // document.getElementById('itemName').innerText = 'Enterprise Edition';
    //         document.getElementById('itemAmount').innerText = 'Quantity: ' + this.itemCount;
    //         currentTotal = (this.itemCount * 15.00).toFixed(2);
    //         document.getElementById('itemTotal').innerText = 'CHF ' + currentTotal;
    //         document.getElementById('itemDescription').innerText = 'The Enterprise Edition is what makes ETA renown. Providing the Optimum performance with unlimited file-sharing, file-storage and full team collaboration synchronisation.';
    //         break;
    //
    //
    //     default:
    //         document.getElementById('itemName').innerText = 'Student-Teacher Edition'; break;
    // }

}

function removeFromCart(item_id) {
    $.post("../includes/handlers/ajax/getProdNameJson.php", {prodId: item_id}, function (data) {
        var item = JSON.parse(data);
        $('#itemName').text(item.prod_name);

        if (parseInt(item.quantity) == 0) {
            $('.disableBtn').prop('disabled', true).css('opacity', 0.5);
            alert("Cart is already empty!");
            window.location.reload();
        } else {
            $.post("../includes/handlers/ajax/removeProdQuantityJson.php", {prodId: item_id}, function () {
                this.itemCount = item.quantity;
                moreThanLim(itemCount, item_id);
                $('#itemAmount').text('Quantity: ' + item.quantity);
            });

            $.post("../includes/handlers/ajax/getProdNameJson.php", {prodId: item_id}, function () {
                $('#itemTotal').text('Total amount: CHF ' + (item.quantity * item.price).toFixed(2));
            });

            $.post("../includes/handlers/ajax/getProdNameJson.php", {prodId: item_id}, function () {
                $('#itemDescription').text(item.description);
            });

            $.post("../includes/handlers/ajax/getProdNameJson.php", {prodId: item_id}, function () {
                $('.itemIcon img').attr("src", item.icon_link);
            });

            $('.disableBtn').prop('disabled', false).css('opacity', 1);
        }
    });
}

function moreThanLim(q, item_id) {

    if (q > 5 && item_id === "student")
        alert("You added more than 5 subscriptions in your basket, you might want to consider an Enterprise version!");
    else if (q > 10 && item_id === "business")
        alert("You added more than 10 subscriptions in your basket, you might want to consider an Enterprise Edition");
}

function checkItem() {
    try {
        if (parseInt(itemCount) == 0) {
            var retVal = confirm("Basket is empty. Do you want to continue ?");
            if (retVal == true) {
                window.location.replace("index.php?id=cart&lang=en");
                return true;
            } else {
                window.location.reload();
                return false;
            }
        }
    } catch (e) {
        console.log("Item Count couldn't be retrieved!");
        console.log(e);
    }
}

