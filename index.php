<!DOCTYPE HTML>
<html>
<head>
    <title>IEEE at UCLA</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <!-- jQuery -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <!-- FONT AWESOME -->
    <script src="https://use.fontawesome.com/348865e609.js"></script>
    
    <!-- STYLESHEETS -->
    <link rel='stylesheet' href='./css/index.css' />
    <link rel='stylesheet' href='./css/footer.css' />
    <link rel='stylesheet' href='./css/navbar.css' />
</head>
<body>
    <!-- NAVBAR -->
    <?php include('./includes/navbar.html'); ?>
    
    <!-- HOME BILLBOARD -->
    <div class='home-billboard'>
        <p>IEEE at UCLA</p>
        <p>Hands on Engineering</p>
    </div>
    
    <!-- DESCRIPTION -->
    <div class='container-fluid description-wraper'>
        <div class='row description-container'>
            <div class='description col-md-6'>
                <h1>Who are we?</h1>
                <p>IEEE at UCLA is a professional student-run engineering organization. We devote our time and energy towards bringing hands-on, practical experiences to engineering students throughout UCLA, as well as create opportunities for the students to interact with industry professionals and more. Every year we lead several projects for our memebers to partipate in, as well as host various workshops and socials that contribute to our unique club culture. Sign-up for our mailing list and start getting hands on with engineering!</p>
            </div>
            <div class='col-md-6 descrip-img'></div>
        </div>
    </div>
    
    <!-- PROJECT QUICK LOOK -->
    <div class='projects container-fluid'>
        <div class='row'>
            <!-- OPS -->
            <div class='project project1 col-md-3 col-sm-6'>
                <a href='#'><span class='link'></span></a>
                <div class='project-description text-center'>
                    <p>The IEEE OPS program at UCLA allows students to get hands on experience on fundamental electrical engineering skills within a fun and collaborative environment.</p>
                    <a href='mailto:ops@ieee.ucla.edu'>ops@ieee.ucla.edu</a>
                </div>
                <h2 class='project-title'>Open Project Space</h2>
            </div>
            <!-- AP -->
            <div class='project project2 col-md-3 col-sm-6'>
                <a href='#'><span class='link'></span></a>
                <div class='project-description text-center'>
                    <p>The Advanced Projects program allows students to expand on their skills with hardware and software by building upon more advanced topics.</p>
                    <a href='mailto:advprojects@ieee.ucla.edu'>advprojects@ieee.ucla.edu</a>
                </div>
                <h2 class='project-title'>Advanced Projects</h2>
            </div>
            <!-- MICROMOUSE -->
            <div class='project project3 col-md-3 col-sm-6'>
                <a href='#'><span class='link'></span></a>
                <div class='project-description'>
                    <p>The Micromouse program is designed for those with moderate experience in EE and CS, where the objective is to design an autonomous mouse that can solve a maze on its own.</p>
                    <a href='mailto:micromouse@ieee.ucla.edu'>micromouse@ieee.ucla.edu</a>
                </div>
                <h2 class='project-title'>Micromouse</h2>
            </div>
            <!-- C3 -->
            <div class='project project4 col-md-3 col-sm-6'>
                <a href='#'><span class='link'></span></a>
                <div class='project-description text-center'>
                    <p>IEEE at UCLA’s software based project group in which students have the opportunity to explore topics in software and coding not emphasized within their usual coursework.</p>
                    <a href='mailto:c3@ieee.ucla.edu'>c3@ieee.ucla.edu</a>
                </div>
                <h2 class='project-title'>Code Create Compete</h2>
            </div>
        </div>
    </div>

    <!-- MAILING LIST -->
    <!-- TODO: wire up form and implement some sort of confirmation system -->
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-md-6'></div>
            <div class='mailing-list col-md-6'>
                <h1>Join our mailing list!</h1>
                <p>Subscribe to receive weekly newsletters to stay updated on all our projects, socials, and workshops!</p>
                <form>
                    <div>
                        <input type='email' class='form-control email-address' placeholder='Email'/>
                    </div>
                    <button type='submit' class='subscribe'>Subscribe</button>
                </form>
            </div>
        </div>
    </div>
    
    <!-- CONTACT INFO -->
    <div class='container contact-info text-center'>
        <h1>Contact Us</h1>
        <div class='row'>
            <div class='col-sm-6'>
                <h3>Mailing Address</h3>
                <h4>56-125B Engineering IV UCLA</h4>
                <h4>420 Westwood Plaza</h4>
                <h4>Los Angeles, CA 90095</h4>
                <h4>United States</h4>
            </div>
            <div class='col-sm-6'>
                <h3>Contacts and Inqueries</h3>
                <h4><a href='mailto:president@ieee.ucla.edu'>president@ieee.ucla.edu</a></h4>
                <h3>Website Bugs and Suggestions</h3>
                <h4><a href='mailto:president@ieee.ucla.edu'>webmaster@ieee.ucla.edu</a></h4>
            </div>
        </div>
    </div>  

    <!-- PHOTO QUICK LOOK -->
    <div class='photo-reel'>
        <div class='photo photo1 col-md-3 col-xs-6'></div>
        <div class='photo photo2 col-md-3 col-xs-6'></div>
        <div class='photo photo3 col-md-3 col-xs-6'></div>
        <div class='photo photo4 col-md-3 col-xs-6'></div>
    </div>
    
    <!-- FOOTER -->
    <?php include('./includes/footer.html'); ?>
</body>
</html>