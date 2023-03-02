<!DOCTYPE html>
<html>
  <head>
    <title>Workshops - IEEE at UCLA</title>
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
    <link rel="stylesheet" href="/public/css/navbar.css?v=1.0.1" />
    <link rel="stylesheet" href="/public/css/workshops.css?v=1.0.0" />
    <link rel="stylesheet" href="/public/css/style.css?v=1.0.0" />

    <!--Favicon -->
    <link rel="icon" href="/public/favicon.ico" />
  </head>
  <body>
    <!-- NAVBAR -->
    <?php include "./includes/navbar.html"; ?>
    <div class="pt-3"></div>

    <!--Page Title-->
    <div
      class="container-fluid text-center page-title content-wrapper"
      style="margin-top: 50px"
    >
      <h1>Our <span class="ieee-blue">Workshops</span></h1>
      <p>
        For members who do not have time to dedicate a whole year for one of our
        competition projects, this program is for you. IEEE holds a series of
        workshops throughout the school year where anyone can participate and
        learn about new skills and technologies. These projects are aimed at
        teaching everyone, engineers and non-engineers, about common skills in
        electrical engineering such as soldering, image processing, prototyping,
        and electronics. To receive more information on upcoming IEEE workshops,
        subscribe to our
        <a href="https://uclaieeenewsletter.substack.com/">newsletter</a>.
      </p>
    </div>

    <!-- OPS section-->
    <div class="container-fluid ops background-ieee-blue">
      <div class="content-wrapper">
        <div class="row flex-container">
          <div class="col-md-4 header">
            <h1>Basic Circuit Workshop</h1>
          </div>

          <div class="col-md-8 descrip">
            <p>
              If you want to get started with electrical engineering, you should
              first learn a little bit about electricity! We will start from the
              beginning with how electricity works, basic rules of circuits, and
              the most common components. Whether resistors, transistors, or
              LEDs, the behavior of electronic components will be clarified as
              you work hands-on with partners to build and test simple circuits.
            </p>
          </div>
        </div>
        <div class="picture-box flex-container">
          <iframe
            width="480"
            height="315"
            src="https://www.youtube-nocookie.com/embed/5UpfCaU40ls"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
          ></iframe>
          <iframe
            src="https://docs.google.com/presentation/d/e/2PACX-1vSPyk5N3Z0ANtVTgBMLYGkNpskvD4nI35q8QsAHH-4NWEYB4ubUHDlKIegEGLR7tO5Z2fCjr2UE8wsk/embed?start=false&loop=false&delayms=3000"
            frameborder="0"
            width="480"
            height="299"
            allowfullscreen="true"
            mozallowfullscreen="true"
            webkitallowfullscreen="true"
          ></iframe>
        </div>
      </div>
    </div>

    <!-- Micromouse section-->
    <div class="container-fluid background-grey mm">
      <div class="content-wrapper">
        <div class="row flex-container">
          <div class="col-md-8 descrip">
            <h2 class="sub2">Head-to-head competition</h2>
            <p>
              The micromouse project guides students through building their own
              autonomous, maze solving robot or “mouse”. Within this program,
              our leads teach you the fundamentals of a micromouse, explaining
              every step along the way, eventually reaching a point where you’ll
              design and print your own PCB, solder it all together, and program
              it to solve an unknown maze by itself. At the end of the year,
              students are invited to compete against each other to solve a maze
              as fast as possible.
            </p>
          </div>
          <div class="col-md-4 header">
            <h1>Micromouse</h1>
            <h2>Autonomous Maze-Solving Robot</h2>
          </div>
        </div>
        <div class="picture-box flex-container">
          <img src="/public/images/projects/mm1.png" />
          <video
            src="/public/images/projects/mm2.mp4"
            autoplay
            loop
            muted
            playsinline
          ></video>
        </div>
      </div>
    </div>

    <!--Pocket Racers section-->
    <div class="container-fluid background-ieee-blue pr">
      <div class="content-wrapper">
        <div class="row flex-container">
          <div class="col-md-4 header">
            <h1>Pocket Racers</h1>
            <h2>It knows where it's going</h2>
          </div>
          <div class="col-md-8 descrip">
            <h2 class="sub2">No license required</h2>
            <p>
              The Pocket Racers project is a hands-on introduction to how
              computers see and react to the world around them. No prior
              experience is required; students will get a crash course in
              Raspberry Pis, motor control, computer vision, and elementary
              machine learning techniques by building a fully autonomous
              self-driving car using just a Raspberry Pi, some motors, and a
              camera.
            </p>
          </div>
        </div>
        <div class="picture-box flex-container">
          <img src="/public/images/projects/pr1.jpg" />
          <img src="/public/images/projects/pr2.jpg" />
        </div>
      </div>
    </div>

    <!-- Digital Audio Visualizer Section -->
    <div class="container-fluid background-grey dav">
      <div class="content-wrapper">
        <div class="row flex-container">
          <div class="col-md-8 descrip">
            <h2 class="sub2">Learn to think logically</h2>
            <p>
              DAV bridges the gap between hardware and software. We’ll be
              teaching you about digital logic concepts, digital signal
              processing techniques, and the FPGA design process. By the end of
              the year, we’ll create a device that can calculate and visualize
              the frequencies of audio signals using an FPGA. If you’re
              wondering what digital logic is all about, DAV is the project for
              you.
            </p>
          </div>
          <div class="col-md-4 header">
            <h1>Digital Audio Visualizer</h1>
            <h2>See Sounds on Screen</h2>
          </div>
        </div>
        <div class="picture-box flex-container">
          <img src="/public/images/projects/dav1.png" />
          <video
            src="/public/images/projects/dav2.mp4"
            autoplay
            loop
            muted
            playsinline
          ></video>
        </div>
      </div>
    </div>

    <!-- Wireless, RF, and Analog Project Section -->
    <div class="container-fluid background-ieee-blue wrap">
      <div class="content-wrapper">
        <div class="row flex-container">
          <div class="col-md-4 header">
            <h1>Wireless, RF, and Analog Project</h1>
            <h2>Who needs wires</h2>
          </div>
          <div class="col-md-8 descrip">
            <h2 class="sub2">Learn how the world communicates</h2>
            <p>
              WRAP is an advanced project focused on wireless digital
              communications and RF circuits. WRAP teaches students a variety of
              circuits topics used in wireless transceiver design, including
              amplifiers, mixers, and oscillators. On the signal processing
              side, WRAP covers the fundamentals of digital communication,
              digital filtering, and other techniques used in real-world
              communication systems. As the year progresses, students use this
              knowledge to design, build, and test their own physical wireless
              transceivers.
            </p>
          </div>
        </div>
        <div class="picture-box flex-container">
          <img src="/public/images/projects/wrap1.jpg" />
          <img src="/public/images/projects/wrap2.jpg" />
        </div>
      </div>
    </div>

    <!--Workshops section-->
    <div class="container-fluid workshops">
      <div class="content-wrapper text-center">
        <h1>Workshops</h1>
        <p>
          For members who do not have time to dedicate a whole year for one of
          our competition projects, this program is for you. IEEE holds a series
          of workshops throughout the school year where anyone can participate
          and learn about new skills and technologies. These projects are aimed
          at teaching everyone, engineers and non-engineers, about common skills
          in electrical engineering such as soldering, image processing,
          prototyping, and electronics. To receive more information on upcoming
          IEEE workshops, subscribe to our mailing list to receive our
          newsletter.
          <br /><br />
          Check out one of our past
          <a
            href="https://github.com/sahilmgandhi/IEEE_Workshops_2017_2018"
            target="_blank"
            >workshop series</a
          >.
        </p>
        <div class="workshops-image-list">
          <img src="/public/images/projects/workshop1.jpg" />
          <img src="/public/images/projects/workshop2.png" />
          <img src="/public/images/projects/workshop3.png" />
          <img src="/public/images/projects/workshop4.jpg" />
          <img src="/public/images/projects/workshop5.jpg" />
        </div>
      </div>
    </div>

    <!-- Student Project Initiative (SPI) section -->
    <div class="container-fluid background-grey spi">
      <div class="content-wrapper text-center">
        <h1 id="SPIheader" class="ieee-blue">
          Student Project Initiative (SPI)
        </h1>
        <p>
          SPI is a program dedicated to providing motivated students with the
          physical and intellectual resources they need to develop their ideal
          project. In this program, students are allowed to come up with their
          own project ideas, propose it the board, and possibly receive funding
          and guidance for the completion of the project. Contact our project
          leads for more information!
        </p>
      </div>
    </div>

    <!-- FOOTER -->
    <?php include "./includes/footer.html"; ?>
  </body>
</html>
