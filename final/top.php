
<?php
$phpSelf = htmlspecialchars($_SERVER['PHP_SELF']);
$pathParts = pathinfo($phpSelf);
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> Travel with Me! </title>
        <meta name="author" content="Tushar Asthana">
        <meta name="description" content="A personal website that takes you through life, my experiences in travelling and and learning about the world! ">
        <link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>" type="text/css">
        <!-- Side note to myself, things come and go, take a breath. -->
        <meta name ="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>" ype="text/css">
        <link rel="stylesheet" media= "(max-width: 800px)" href="css/custom-tablet.css?version=<?php print time(); ?>"type="text/css">
        <link rel="stylesheet" media=" (max-width: 600px)" href="css/custom-phone.css?version=<?php print time(); ?>" type="text/ass">
    </head>

    <?php
    print '<body class="grid-layout positioning" id=" ' . $pathParts['filename'] . '">';
    print '<!-- ##################      Start of Body Element    ################ -->';
    include 'connect-DB.php';
    include 'header.php';
    include 'nav.php'; 
    include 'footer.php';
?>


