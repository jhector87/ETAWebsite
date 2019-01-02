function processOrder(item_id) {
    $.post('../mail/mail_handler.php', function(data) {
        $.post("../ajax/processOrderJson.php", {prodSt: item_id},function(data ) {
            var process = JSON.parse(data);
            console.log(process);
        });
        alert("Order was processed! " + item_id);
        window.location.reload();
    });
}

function logout() {
    $.post("../../handlers/logout_handler.php", function() {
        alert("You are now logged out");
        window.location.replace("../../../pages/index.php?id=login&lang=en");
    });
}