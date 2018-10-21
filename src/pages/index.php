<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ETA</title>
    <link rel="stylesheet" href="../res/css/mainStyling.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#logo-animation').fadeIn(3000).removeClass('hidden');
        });
    </script>
</head>

<body>
<nav><span>Navigation</span>
    <?php
    for ($i = 0; $i < 5; $i++)
        echo "<a href=\"index.php?id=$i\">Page $i</a>"; ?>
</nav>
<main>
    <span>Main Area</span>
    [Content of Page
    <?php echo isset($_GET[’id’]) ? $_GET[’id’] : 0; ?>]
</main>
</body>
</html>