<!DOCTYPE HTML>
<html>
<head>
    <title>IEEE at UCLA</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- JQUERY -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- FONT AWESOME -->
    <script src="https://use.fontawesome.com/348865e609.js"></script>

    <!-- STYLESHEETS -->
    <link rel='stylesheet' href='/public/css/style.css' />
    <link rel='stylesheet' href='/public/css/lab.css' />
    <link rel='stylesheet' href='/public/css/footer.css' />
    <link rel='stylesheet' href='/public/css/navbar.css' />

    <!--Favicon --> 
    <link rel='icon' href='/public/favicon.ico'/>
</head>
<!-- NAVBAR -->
<?php include('./includes/navbar.html'); ?>
<body>

    <div class='info-page'>
        <h1>THE IEEE </h1><h1 class='ieee-blue'>LAB</h1>
        <hr style='width: 210px;'>
        <p class='details'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p>
        <div class='lab-map'>
            <img style="float:center; max-width:100%; padding=0; margin=0;" src="/public/images/lab/map.png">
        </div>
    </div>
     
    <div class="background-grey lab-hours ">
        <h1 class='ieee-blue'>LAB HOURS</h1>
        <hr style='width: 330px;'>
        <div class='lab-hours-table' style="height: 500px;"></div>
    </div>

    <div class='resources'>
        <h1 class='black'>RESOURCES</h1>
        <hr style='width: 310px; margin-bottom: 10px;'>
        <p class='black'>CREATIVITY HAS NO LIMITS</p>
    </div>
</body>
<?php include('./includes/footer.html'); ?>
</html>
