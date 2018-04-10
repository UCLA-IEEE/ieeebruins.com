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
    <link rel='stylesheet' href='/public/css/main.css' />
    <link rel='stylesheet' href='/public/css/navbar.css' />

    <!--Favicon -->
    <link rel='icon' href='/public/favicon.ico' />
</head>
<body>
    <!-- NAVBAR -->
    <?php include('./includes/navbar.html'); ?>

    <!-- BACKGROUND -->
    <div class='main-billboard'>
       <div class='billboard-content'>
           <img src='./public/images/IEEE_logo_white.png' />
           <span class = 'ucla'> UCLA </span>
           <h1 class = 'billboard-subtext'> HANDS-ON ENGINEERING </h1>
       </div>
   </div>

   <!-- DESCRIPTION AND MAILING LIST -->
   <div class='container-fluid background-grey'>
    <div class='row description'>
        <div class='col-sm-6'>
          <h1>ABOUT US</h1>
            <p class = 'aboutus'>IEEE at UCLA is a professional student-run
            engineering organization. We devote our time and
            energy towards bringing hands-on, practical
            experiences to engineering students throughout
            UCLA, as well as create opportunities for students to
            interact with industry professionals and more. Every
            year we lead several projects for our members to
            partipate in Lorem ipsum minimum ed and dolor sit
            amet set ud do labore</p>
        </div>
        <div class='col-sm-6 text-center mailing-title'>
            <h1>JOIN OUR <br/> <span class = 'ieee-blue'> MAILING LIST </span> </h1>
            <h2 class= 'mailing-subtext'>Keep up with all our upcoming events, workshops, and socials.</h2>
            <!-- LINK THE BUTTON TO SOMETHING -->
            <input type= 'text' name= 'email'>
            <input type= 'submit' value= 'Join' class= 'join-button' >
        </div>
    </div>
</div>

   <!-- EVENTS -->
   <div class= 'container-fluid background-ieee-blue container-padding'>
     <div class= 'row events'>
      <div class= 'col-sm-2 no-padding'>
        <h1> EVENTS </h1>
          <p class= 'events-subtext'> Here are some upcoming events
           that you will not want to miss out on. Remember to
           save the date!</p>
      </div>
      <div class= 'col-sm-3 details-title1 no-padding'>
        <h3> General Meeting </h3><br>
          <h4 style= 'padding-right: 70px'> Boelter 2417 <br> March 27, 2018 <br> 6:00 PM </h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
          incididunt ut labore et </p>
      </div>
      <div class= 'col-sm-3 details-title2 no-padding'>
        <h3> Boeing Info Session </h3><br>
          <h4 style= 'padding-right: 105px'> Boelter 2417 <br> March 27, 2018 <br> 6:00 PM </h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
          incididunt ut labore et </p>
      </div>
      <div class= 'col-sm-3 details-title3 no-padding'>
        <h3> OPS Meeting </h3><br>
          <h4 style= 'padding-right: 35px'> Boelter 2417 <br> March 27, 2018 <br> 6:00 PM </h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
          incididunt ut labore et </p>
      </div>
    </div>
</div>

   <!-- LAB HOURS -->
  <div class='container-fluid background-grey container-pad'>
    <div class= 'row lab-hours'>
      <div class='col-sm-2 no-padding'>
        <h1> LAB HOURS </h1>
        <h2> UNIQUE.<br> INNOVATIVE.<br> SUPPORTIVE.</h2>
      </div>
      <div class='col-sm-9 no-padding'>
        <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQCXnPk6lo9JAXysHu7UDFgsCLNRUCfnhYyL2bngyghk5N9UegC2UCv2o0dR6EVldRtgODFRkLibzkg/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false"></iframe>
        <!-- LINK THE BUTTON TO SOMETHING -->
        <input type= 'submit' value= 'Learn More' class= 'lab-button' >
      </div>
    </div>
  </div>

   <!-- INSTAGRAM WIDGET -->

   <!-- FOOTER -->
   <?php include('./includes/footer.html'); ?>

</body>
</html>
