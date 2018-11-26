<?php
    include_once("render.php");
?>

<!DOCTYPE html>
<html><head> /*...*/ </head> <body>
<nav><span>Navigation</span>
<?php render_navigation($language, $pageId); ?>
<div><?php render_languages($language, $pageId); ?></div> </nav>
<main>
  <span>Main Area</span>
<?php render_content($pageId); ?> </main>
</body>
</html>