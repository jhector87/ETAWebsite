var clicks = 0;
// Provides a suggestion if the amount of clicks is over the limit.
function moreThanLim(clicked_id) {
    clicks++;
    // if (clicks > 5 && clicked_id === "student") alert(" <?php echo t('basket_alert_student') ?>");
    if (clicks > 5 && clicked_id === "student") alert("You added more than 5 subscriptions in your basket, you might want to consider an Enterprise version!");
    // else if (clicks > 10 && clicked_id === "business") alert(" <?php echo t('basket_alert_business') ?>");
    else if (clicks > 10 && clicked_id === "business") alert("You added more than 10 subscriptions in your basket, you might want to consider an Enterprise Edition!");
}

function addToCart(clicked_id) {
    if (clicked_id === "student") {
        // alert("I'm a student");
        $('.itemAmount').innerText = "Item counts";
    } else alert("i'M BUSINESS");
}

