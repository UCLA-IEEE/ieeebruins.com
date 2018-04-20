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
    <link rel='stylesheet' href='/public/css/footer.css' />
    <link rel='stylesheet' href='/public/css/style.css' />
    <link rel='stylesheet' href='/public/css/navbar.css' />
    <link rel='stylesheet' href='/public/css/lab.css' />
    <link rel='stylesheet' href='/public/css/main.css' />

    <!-- SCRIPTS -->
    <script src='/public/js/key.js'></script>
    <script src='/public/js/main.js'></script>
    <script src='/public/js/lab.js'></script>

    <!--Favicon -->
    <link rel='icon' href='/public/favicon.ico' />
</head>
<body>
    <!-- NAVBAR -->
    <?php include('./includes/navbar.html'); ?>

    <!-- BACKGROUND -->
    <div class='main-billboard'>
        <div class='billboard-content'>
            <div class='billboard-logo'>
                <img src='/public/images/IEEE_full_logo_white.png'/>
                <p class='ucla'>at ucla</p>
            </div>
            <h1 class='billboard-subtext text-center'>Hands-On Engineering</h1>
        </div>
    </div>

   <!-- DESCRIPTION AND MAILING LIST -->
   <div class='container-fluid background-grey'>
       <div class='row description'>
            <div class='col-sm-6 left-column'>
                <h1>ABOUT US</h1>
                <p class = 'aboutus'>
                    IEEE at UCLA is a professional student-run
                    engineering organization. We devote our time and
                    energy towards bringing hands-on, practical
                    experiences to engineering students throughout
                    UCLA, as well as create opportunities for students to
                    interact with industry professionals and more. Every
                    year we lead several projects for our members to
                    partipate in, where dedicated leads provide fundamental knowledge
                    and skills to students, which helps them complete challenging and
                    interesting projects throughout the year.
                </p>
            </div>
            <div class='col-sm-6 text-center mailing-title'>
                <h1>JOIN OUR <br/> <span class = 'ieee-blue'> MAILING LIST </span> </h1>
                <h2 class= 'mailing-subtext'>Keep up with all our upcoming events, workshops, and socials.</h2>

                <form method='POST' action='http://ieeebruins.us2.list-manage.com/subscribe/post?u=8b400a4b791a376b529c16f90&id=f7452c6f3b'>
                    <input type= 'email' name='EMAIL' style='border:none'>
                    <input type= 'submit' name='subscribe' value= 'Join' class= 'button button-join' >
                </form>
            </div>
        </div>
    </div>

   <!-- EVENTS -->
    <div class= 'container-fluid background-ieee-blue container-padding'>
        <div class= 'row events' style= 'vertical-align:bottom'>
            <div class= 'col-md-3 events-column'>
                <h1> EVENTS </h1>
                <p class= 'events-subtext'> Here are some upcoming events
                that you will not want to miss out on. Remember to
                save the date!</p>
            </div>
        </div>
    </div>

    <div class='container-fluid background-grey container-pad'>
        <div class='row lab-hours'>
            <h1 class='ieee-blue'>Lab Hours</h1>
            <?php include('./includes/lab_hours.html'); ?>
        </div>
    </div>

    <!-- INSTAGRAM WIDGET -->
    <div class='container-fluid instagram'>
        <h1>INSTAGRAM <a href="https://www.instagram.com/ieeebruins/" target= '_blank' class= 'handle'>@ieeebruins</a></h1>

        <div class='image-list'></div>
    </div>

   <!-- FOOTER -->
   <?php include('./includes/footer.html'); ?>

</body>
</html>
