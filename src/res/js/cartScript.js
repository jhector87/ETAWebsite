var itemCount = 0;
// Provides a suggestion if the amount of clicks is over the limit.
function moreThanLim(clicked_id) {
    itemCount++;
    if (itemCount > 5 && clicked_id === "student")
        alert("You added more than 5 subscriptions in your basket, you might want to consider an Enterprise version!");
    else if (itemCount > 10 && clicked_id === "business")
        alert("You added more than 10 subscriptions in your basket, you might want to consider an Enterprise Edition");
}

function addToCart(clicked_id) {
const image = document.getElementById('itemIcon');
var currentTotal = 0;

    switch (clicked_id) {
        case 'student':
            currentTotal = 1;
            // image.getAttribute('src').src = '../../res/education_icon.png';
            document.getElementById('itemName').innerText = 'Student-Teacher Edition';
            document.getElementById('itemAmount').innerText = 'Quantity: ' + this.itemCount;
            currentTotal = (this.itemCount * 20.00).toFixed(2);
            document.getElementById('itemTotal').innerText = 'CHF ' + currentTotal;
            document.getElementById('itemDescription').innerText = 'The Student-Teacher Edition is mainly built for students working in groups, teachers doing class assignments and demonstrations. The file-sharing provides in-time production meaning that everything is sync in actual time.';
            break;

            case 'business':
                currentTotal = 1;
                // image.getAttribute('src').src = '../res/icons/education_icon.png';
                document.getElementById('itemName').innerText = 'Business Edition';
                document.getElementById('itemAmount').innerText = 'Quantity: ' + this.itemCount;
                currentTotal = (this.itemCount * 30.00).toFixed(2);
                document.getElementById('itemTotal').innerText = 'CHF ' + currentTotal;
                document.getElementById('itemDescription').innerText = 'The Business Edition provides that extra help in bringing productivity into your business whether you are on the go or needs constant access to the different files.';
            break;

            case 'enterprise':
                currentTotal = 1;
                // image.getAttribute('src').src = '../res/icons/education_icon.png';
                // document.getElementById('itemName').innerText = 'Enterprise Edition';
                document.getElementById('itemAmount').innerText = 'Quantity: ' + this.itemCount;
                currentTotal = (this.itemCount * 15.00).toFixed(2);
                document.getElementById('itemTotal').innerText = 'CHF ' + currentTotal;
                document.getElementById('itemDescription').innerText = 'The Enterprise Edition is what makes ETA renown. Providing the Optimum performance with unlimited file-sharing, file-storage and full team collaboration synchronisation.';
                break;

            break;

            default:
                document.getElementById('itemName').innerText = 'Student-Teacher Edition'; break;
    }
}
