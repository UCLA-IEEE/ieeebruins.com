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
    <script src="https://kit.fontawesome.com/2fb39e755e.js" crossorigin="anonymous"></script>

    <!-- STYLESHEETS -->
    <link rel='stylesheet' href='/public/css/style.css?v=1.0.0' />
    <link rel='stylesheet' href='/public/css/lab.css?v=1.2.3' />
    <link rel='stylesheet' href='/public/css/footer.css?v=1.0.0' />
    <link rel='stylesheet' href='/public/css/navbar.css?v=1.0.1' />

    <!-- SCRIPTS -->
    <script src='/public/js/key.js'></script>
    <script src="/public/js/lab.js?v=F21"></script>

    <!--Favicon -->
    <link rel='icon' href='/public/favicon.ico' />
</head>
<body>
    <!-- NAVBAR -->
    <?php include('./includes/navbar.html'); ?>

    <div class='info-page'>
        <h1>THE IEEE <span class='ieee-blue'>LAB</span></h1>
        <p class='details'>
            Here at UCLA, we've been given a lab space that we use as our center
            of operations. The IEEE Lab is an open space for all general members
            to come in, work on their projects, meet new people, talk to present
            officers, or even just to chill and eat lunch.
            <br><br>
            Although we'll primarily be using our physical lab, our
            <a href="https://discord.gg/yTR6XUS" target="_blank">Discord server</a>
            is still operating as a virtual lab. Feel free to join the lab voice
            channel. Officers will be monitoring it during their lab hours.
            <br><br>
            Our lab is located at <b>Boelter 2825</b>. The easiest way to find
            it is to go to the west side of 2nd floor Boelter (the lowest balcony).
            We are the second door down from the bridge to E-IV. The IEEE logo
            is posted on our door for easy locating.
        </p>
        <div class='lab-map'>
            <a href='/public/images/lab/map.png' target='_blank'><img width="100%" src="/public/images/lab/map.png"></a>
        </div>
    </div>

    <div class="background-grey lab-hours" id='hours'>
        <h1 class='ieee-blue'>LAB HOURS</h1>
        <div class="pbox">
            <!-- <p>
                Need to know when the lab’s open? Looking for your project leads? Need help on your homework? Check out the table below to find out when your favorite officers will be in the lab.
            </p> -->
        </div>

        <?php include('./includes/lab_hours.html'); ?>

    </div>

    <div class='resources' id='resources'>
        <div class='title'>
            <h1 class='black'>Resources</h1>
        </div>
        <div class='resources-info black'>
            <div class='resource'>
                <h2 class='ieee-blue thin'>General Tools</h2>
                <p class='black'>
                    We've stocked up on various tools that members can use in our labs.
                    <br /><br /> Some of the heavier tools we have include: soldering stations, oscilloscopes, power supplies, 3D printers, a drill press, DMM's, a big whiteboard, etc. Mostly popular tools used to complete hardware related projects.
                    <br /><br /> We also have smaller, general tools such as: scissors, wire cutters, pliers, rulers, screwdrivers, etc.
                </p>
            </div>
            <div class='resource'>
                <h2 class='ieee-blue thin'>Discord Server</h2>
                <p class='black'>
                    Originally started to be a virtual lab during the COVID-19
                    pandemic, our Discord server remains the online hub for
                    connecting with IEEE. Join our Discord with this link:
                    <a href="https://discord.gg/yTR6XUS" target="_blank">https://discord.gg/yTR6XUS</a>
                </p>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include('./includes/footer.html'); ?>
</body>
</html>
