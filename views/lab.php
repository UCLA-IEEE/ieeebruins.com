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
    <link rel='stylesheet' href='/public/css/lab.css?v=1.1.0' />
    <link rel='stylesheet' href='/public/css/footer.css?v=1.0.0' />
    <link rel='stylesheet' href='/public/css/navbar.css?v=1.0.0' />

    <!-- SCRIPTS -->
    <script src='/public/js/key.js'></script>
    <script src="/public/js/lab.js?v=W21"></script>

    <!--Favicon -->
    <link rel='icon' href='/public/favicon.ico' />
</head>
<body>
    <!-- NAVBAR -->
    <?php include('./includes/navbar.html'); ?>

    <div class='info-page'>
        <h1>THE IEEE <span class='ieee-blue'>LAB</span></h1>
        <p class='details'>
            With access to our lab and UCLA's campus as a whole being restricted
            due to COVID-19, <b>we're now using our
                <a href="https://discord.gg/yTR6XUS" target="_blank">Discord server</a>
                as our replacement for the physical lab.</b> We encourage you to use it
            just like you'd use our regular lab: meet new people, get help with
            projects, talk to officers, or just chill! We like to think of it as
            a home away from home away from home. The officers will be holding
            their lab hours on the Discord, so feel free to stop by and see
            who's there!
            <br><br>
            Although we'll primarily be using the Discord as our lab, our physical
            lab will be available on a case-by-case basis for those on campus who
            would like to use our tools. Please contact our Project and Lab
            Managers, Caleb and Chester, on the Slack or Discord for more information.
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
                    <br /><br /> Some of the heavier tools we have include: soldering stations, oscilloscops, power supplies, 3D printers, a drill press, DMM's, a big whiteboard, etc. Mostly popular tools used to complete hardware related projects.
                    <br /><br /> We also have smaller, general tools such as: scissors, wire cutters, pliers, rulers, screwdrivers, etc.
                </p>
            </div>
            <div class='resource'>
                <h2 class='ieee-blue thin'>Discord Server</h2>
                <p class='black'>
                    Our Discord server is our replacement for the lab while
                    the COVID-19 pandemic continues. Come through to meet new
                    people, hang out with officers, get technical help, and so
                    much more! Join our Discord with this link:
                    <a href="https://discord.gg/yTR6XUS" target="_blank">https://discord.gg/yTR6XUS</a>
                </p>
            </div>
            <div class='resource'>
                <h2 class='ieee-blue thin'>Slack Workspace</h2>
                <p class='black'>
                    <a href='https://slack.com/' target='_blank'>Slack</a> is a team communication application, and is one of our primary means of communication within our organization. Our Slack workspace is free to join to all general members at <a href='https://uclaieee.slack.com/' target='_blank'>https://uclaieee.slack.com/</a>. Within our Slack workspace, you can directly message officers, communicate with fellow project members, and ask if the lab is open.
                </p>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include('./includes/footer.html'); ?>
</body>
</html>
