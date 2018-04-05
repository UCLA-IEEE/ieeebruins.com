<?php
    $error_type = "500";
    $error_text = "500 Internal Server Error";
?>

<!DOCTYPE HTML>
<html>
<head>
    <title><?php print($error_text) ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- JQUERY -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- FONT AWESOME -->
    <script src="https://use.fontawesome.com/348865e609.js"></script>

    <!--Favicon -->
    <link rel='icon' href='/public/favicon.ico' />

    <!-- STYLESHEETS -->
    <link rel='stylesheet' type='text/css' href='/public/css/navbar.css' />
    <link rel='stylesheet' type='text/css' href='/public/css/footer.css' />
    <link rel='stylesheet' type='text/css' href='/public/css/style.css' />
    <link rel='stylesheet' type='text/css' href='/public/css/error.css' />
</head>
<body>
    <!-- NAVBAR -->
    <?php include('../includes/navbar.html'); ?>

    <div class='wrapper'>
        <div class='container-fluid error-message'>
            <h1>OOPS! <span class='ieee-blue'><?php print($error_type) ?> Error</span></h1>

            <p>Looks like you've encountered an error on our page. It's not you, it's us. <br /> <br /> <a href='/lab'>Take me home!</a></p>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include('../includes/footer.html'); ?>
</body>
</html>
