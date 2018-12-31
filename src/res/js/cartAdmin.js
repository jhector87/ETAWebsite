function processOrder() {
    $.post('../../../../SendGrid-API/send-email.php', function() {
        alert("Order was processed!");
    });
}

function logout() {
    $.post("../../../../src/includes/handlers/logout_handler.php", function() {
        alert("You are now logged out");
        window.location.replace("../../../pages/index.php?id=login&lang=en");
    });
}