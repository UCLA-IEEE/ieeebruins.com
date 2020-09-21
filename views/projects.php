<!DOCTYPE HTML>
<html>
<head>
    <title>Projects - IEEE at UCLA</title>
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
    <link rel='stylesheet' href='/public/css/navbar.css' />
    <link rel='stylesheet' href='/public/css/projects.css' />
    <link rel='stylesheet' href='/public/css/style.css' />

    <!--Favicon -->
    <link rel='icon' href='/public/favicon.ico' />
</head>
<body>
    <!-- NAVBAR -->
    <?php include('./includes/navbar.html'); ?>
    <div class="pt-3"></div>

    <!--Page Title-->
    <div class="container-fluid text-center page-title content-wrapper" style='margin-top: 50px;'>
        <h1>Our <span class='ieee-blue'>Projects</span></h1>
        <p>
            Our primary method in achieving our mission is by getting our members involved in our project curriculums. For all projects, we have infosessions at the beginning of every academic year, and release applications around the same time.
        </p>
    </div>

    <!-- OPS section-->
    <div class="container-fluid ops background-ieee-blue">
        <div class="content-wrapper">
            <div class="row flex-container">
                <div class="col-md-4 header">
                    <h1>Open Project Space</h1>
                    <h2>Your first steps</h2>
                </div>

                <div class="col-md-8 descrip">
                    <h2 class="sub2">No fear in not knowing</h2>
                    <p>
                        Our OPS program is designed to provide hands-on foundational knowledge in the field of tech and hardware. We assume you know absolutely nothing, and build your knowledge from the ground up. Throughout the year, students will be challenged to complete 2-3 small projects per quarter that will allow you to apply the skills you have learned.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Micromouse section-->
    <div class="container-fluid background-grey micromouse">
        <div class="content-wrapper">
            <div class="row flex-container">
                <div class="col-md-8 descrip">
                    <h2 class="sub2">Head-to-head competition</h2>
                    <p>
                        A micromouse is essentially a small robot that's programmed to be able to find it's way to a goal within a maze. Within this program, our leads teach you the fundamentals of how a micromouse is designed, eventually reaching a point where you'll print your own PCB, solder the micromouse all together, and program it through a maze. We also hold annual events where students are invited to compete against each other based on their mice's performance.
                    </p>
                </div>
                <div class="col-md-4 header">
                    <h1>Micromouse</h1>
                    <h2>Autonomous Maze-Solving Robot</h2>
                </div>
            </div>
        </div>
    </div>

    <!--Aircopter Project section-->
    <div class="container-fluid background-ieee-blue adv-proj">
        <div class="content-wrapper">
            <div class="row flex-container">
                <div class="col-md-4 header">
                    <h1>Aircopter Project</h1>
                    <h2>Let's Build a Quadcopter</h2>
                </div>
                <div class="col-md-8 descrip">
                    <h2 class="sub2">Take your skills to the next level</h2>
                    <p>
                        The Aircopter Project is an opportunity for you to refine your understanding of hardware and apply it in a design project. By learning subjects such as serial communication, motors, control systems, sensor fusion, and PCB design, you will design and build a drone as a team from the ground up, starting from hardware components to a radio controlled flying machine.
                    </p>
                </div>
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
                        DAV bridges the gap between hardware and software. We’ll be teaching you about digital logic concepts, digital signal processing techniques, and the FPGA design process. By the end of the year, we’ll create a device that can calculate and visualize the frequencies of audio signals using an FPGA. If you’re wondering what digital logic is all about, DAV is the project for you.
                    </p>
                </div>
                <div class="col-md-4 header">
                    <h1>Digital Audio Visualizer</h1>
                    <h2>See Sounds on Screen</h2>
                </div>

            </div>
        </div>
    </div>

    <!--Workshops section-->
    <div class="container-fluid workshops">
        <div class="content-wrapper text-center">
            <h1>Workshops</h1>
            <p>
                For members who do not have time to dedicate a whole year for one of our competition projects, this program is for you. IEEE holds a series of workshops throughout the school year where anyone can participate and learn about new skills and technologies. These projects are aimed at teaching everyone, engineers and non-engineers, about common skills in electrical engineering such as soldering, image processing, prototyping, and electronics. To receive more information on upcoming IEEE workshops, subscribe to our mailing list to receive our newsletter.
                <br /><br /> Check out one of our past <a href='https://github.com/sahilmgandhi/IEEE_Workshops_2017_2018' target="_blank">workshop series</a>.
            </p>
            <div class='workshops-image-list'>
                <img src='/public/images/projects/workshop1.jpg' />
                <img src='/public/images/projects/workshop2.jpg' />
                <img src='/public/images/projects/workshop3.jpg' />
                <img src='/public/images/projects/workshop4.jpg' />
                <img src='/public/images/projects/workshop5.jpg' />
            </div>
        </div>
    </div>

    <!-- Student Project Initiative (SPI) section -->
    <div class="container-fluid background-grey spi">
        <div class="content-wrapper text-center">
            <h1 id="SPIheader" class="ieee-blue">Student Project Initiative (SPI)</h1>
            <p>
                SPI is a program dedicated to providing motivated students with the physical and intellectual resources they need to develop their ideal project. In this program, students are allowed to come up with their own project ideas, propose it the board, and possibly receive funding and guidance for the completion of the project. Contact our project leads for more information!
            </p>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include('./includes/footer.html'); ?>
</body>
</html>
