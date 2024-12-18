<!DOCTYPE html>
<html>
  <head>
    <title>IEEE at UCLA</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- BOOTSTRAP -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
      crossorigin="anonymous"
    />
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
      integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
      crossorigin="anonymous"
    ></script>

    <!-- FONT AWESOME -->
    <script
      src="https://kit.fontawesome.com/2fb39e755e.js"
      crossorigin="anonymous"
    ></script>

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="/public/css/footer.css?v=1.0.0" />
    <link rel="stylesheet" href="/public/css/style.css?v=1.0.0" />
    <link rel="stylesheet" href="/public/css/navbar.css?v=2023.12.1" />
    <link rel="stylesheet" href="/public/css/lab.css?v=1.2.2" />
    <link rel="stylesheet" href="/public/css/main.css?v=1.2.0" />

    <style>
        #announcement {
            position: fixed;
            max-width: 1280px;
            z-index: 20;
            padding: 20px 50px;
            background-color: #191A1B;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            color: white;
        }
        #announcement #close {
            position: absolute;
            top: 15px;
            right: 15px;
        }
        #announcement p {
            font-size: 20px;
            text-align: center;
        }
        #announcement strong {
            color: #619B83;
        }
    </style>

    <!-- SCRIPTS -->
    <script src="/public/js/key.js"></script>
    <script src="/public/js/main.js?v=2023.12"></script>
    <script src="/public/js/lab.js?v=2024.01"></script>
    <script src="/public/js/blog.js"></script>

    <!--Favicon -->
    <link rel="icon" href="/public/favicon.ico" />
  </head>
  <body>
    <!-- NAVBAR -->
    <?php include "./includes/navbar.html"; ?>
    
    <!-- ANNOUNCEMENT -->
    <div id="announcement" class="container-fluid" style="">
            <span id="close" onclick="$(this).parent().hide()">
                <span class="glyphicon glyphicon-remove"></span>
            </span>
            <p>
                Check out our new website by clicking this <strong><a href="https://ieeebruins-com-sveltekit.vercel.app">link</a></strong>!

            </p>
        </div>

    <!-- BACKGROUND -->
    <div class="main-billboard">
      <div class="billboard-content">
        <div class="billboard-logo">
          <img src="/public/images/IEEE_full_logo_white.png" />
          <p class="ucla">at ucla</p>
        </div>
        <h1 class="billboard-subtext text-center">Hands-On Engineering</h1>
      </div>
    </div>

    <!-- DESCRIPTION AND MAILING LIST -->
    <div class="container-fluid background-grey">
      <div class="row description">
        <div class="col-sm-6 left-column">
          <h1>ABOUT US</h1>
          <p class="aboutus">
            IEEE at UCLA is a professional student-run engineering organization.
            We devote our time and energy towards bringing hands-on, practical
            experiences to engineering students throughout UCLA, as well as
            create opportunities for students to interact with industry
            professionals and more. Every year we lead several projects for our
            members to participate in, where dedicated leads provide fundamental
            knowledge and skills to students, which helps them complete
            challenging and interesting projects throughout the year.
          </p>
        </div>
        <div class="col-sm-6 text-center mailing-title">
          <h1>
            JOIN OUR <br />
            <span class="ieee-blue"> MAILING LIST </span>
          </h1>
          <h2 class="mailing-subtext">
            Keep up with all our upcoming events, workshops, and socials.
          </h2>
          <button class="button">
            <a
              class="button-join"
              target="blank"
              href="https://uclaieeenewsletter.substack.com/"
              >Join</a
            >
          </button>
        </div>
      </div>
    </div>

    <!-- EVENTS -->
    <div class="container-fluid background-ieee-blue container-padding">
      <div class="row events" style="vertical-align: bottom">
        <div class="col-sm-6 col-md-3 events-column">
          <h1>EVENTS</h1>
          <p class="events-subtext">
            Here are some upcoming events that you will not want to miss out on.
            Remember to save the date!
            <br /><br />
            We also have a Google Calendar that is constantly being updated with
            our latest events. Click
            <a
              href="https://calendar.google.com/calendar/u/0?cid=ZnBlaG5tczY1NTkxYjJhYXE2ZTc1MDN2dWNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ"
              target="_blank"
              >here</a
            >
            to add it to your calendar!
          </p>
        </div>
        <div class="col-sm-6 col-md-9 events-column events-slider"></div>
      </div>
    </div>

    <!-- LAB HOURS -->

    <div class="container-fluid background-grey container-pad">
      <div class="row lab-hours">
        <h1 class="ieee-blue">Lab Hours</h1>
        <?php include "./includes/lab_hours.html"; ?>
      </div>
    </div>

    <!-- BLOG -->

    <!-- <div class='container-fluid background-ieee-blue container-padding'>
        <div class='row blog'>
            <div class='col-sm-5 col-lg-3 info'>
                <h1> BLOG </h1>
                <p>
                    The freshest takes on UCLA, IEEE, or anything else, straight
                    from our officers! See more at our <a href="/blog">blog page.</a>
                </p>
            </div>
            <div class="col-sm-7 col-lg-9 blog-wrapper">
            </div>
        </div>
    </div> -->

    <!-- FOOTER -->
    <?php include "./includes/footer.html"; ?>
  </body>
</html>
