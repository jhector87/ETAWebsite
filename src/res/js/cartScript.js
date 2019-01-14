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

        itemCount = item.quantity;
        console.log(itemCount);
    });

    $('.disableBtn').prop('disabled', false).css('opacity', 1);
    moreThanLim(itemCount, item_id);
}

function removeFromCart(item_id) {
    $.post("../includes/handlers/ajax/getProdNameJson.php", {prodId: item_id}, function (data) {
        var item = JSON.parse(data);
        $('#itemName').text(item.prod_name);

        if (parseInt(item.quantity) == 0) {
            $('.disableBtn').prop('disabled', true).css('opacity', 0.5);
            alert("Cart is already empty!");
            itemCount = 0;
            $('#itemAmount').text('Quantity: ' + itemCount);
            $('#itemTotal').text('Total amount: CHF 0.00');
        } else {
            $.post("../includes/handlers/ajax/removeProdQuantityJson.php", {prodId: item_id}, function () {
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
        itemCount = item.quantity;
        console.log(itemCount);
    });

    moreThanLim(itemCount, item_id);
}

function moreThanLim(q, item_id) {

    if (q > 5 && item_id === "student")
        alert("You added more than 5 subscriptions in your basket, you might want to consider an Enterprise version!");
    else if (q > 10 && item_id === "business")
        alert("You added more than 10 subscriptions in your basket, you might want to consider an Enterprise Edition");
}

function checkItem() {
    console.log(itemCount);
    try {
        if (this.itemCount == 0) {
            var retVal = confirm("Basket is empty. Do you want to continue ?");
            if (retVal == true) {
                window.location.replace("index.php?id=cart&lang=en");
                return true;
            } else {
                window.location.reload();
                return false;
            }
        } else if (itemCount >= 1) {
            window.location.replace("index.php?id=cart&lang=en");
        } else { alert('Please choose an item before you going to the cart!'); }
    } catch (e) {
        console.log("Item Count couldn't be retrieved!");
        console.log(e);
    }
}

