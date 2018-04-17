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

    <!-- SCRIPTS -->
    <script src='/public/js/key.js'></script>
    <script src = "/public/js/lab.js"></script>

    <!--Favicon -->
    <link rel='icon' href='/public/favicon.ico'/>
</head>
<body>
    <!-- NAVBAR -->
    <?php include('./includes/navbar.html'); ?>

    <div class='info-page'>
        <h1>THE IEEE <span class='ieee-blue'>LAB</span></h1>
        <p class='details'>
            Here at UCLA, we've been given a lab space that we use as our center of operations.
            The IEEE Lab is an open space for all general members to come in, work on their projects,
            meet new people, talk to present officers, or even just to chill and eat lunch.
        </p>
        <div class='lab-map'>
            <a href='/public/images/lab/map.png' target='_blank'><img width="100%" src="/public/images/lab/map.png"></a>
        </div>
        <p id="location">Our lab is located at <b>Boelter 2825</b>. Come find us! The easiest way to find it is to go to
        the west side of 2nd floor Boelter (the lowest balcony). We are the second door down from the bridge to E-IV.
        The IEEE logo is posted on our door for easy locating.</p>
    </div>

    <div class="background-grey lab-hours" id='hours'>
        <h1 class='ieee-blue'>LAB HOURS</h1>
        <div class = "pbox">
            <p>
                Need to know when the lab’s open? Looking for your project leads? Need help on your homework?
                Check out the table below to find out when your favorite officers will be in the lab.
            </p>
        </div>

        <!-- FULL LAB HOURS TABLE -->
        <div class = "table-wrapper">
            <table class = "table1">
                <tr id = "top">
                    <th></th>
                    <th id = "date">MONDAY</th>
                    <th id = "date">TUESDAY</th>
                    <th id = "date">WEDNESDAY</th>
                    <th id = "date">THURSDAY</th>
                    <th id = "date">FRIDAY</th>
                    <th id = "date">SAT / SUN</th>
                </tr>
                 <tr>
                    <td id = "time">8:00 AM</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td id = "time">9:00 AM</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td id = "time">10:00 AM</td>
                    <td>Minh</td>
                    <td></td>
                    <td>Minh</td>
                    <td>Jiwan</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td id = "time">11:00 AM</td>
                    <td>Minh</td>
                    <td></td>
                    <td>Minh</td>
                    <td>Jiwan</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td id = "time">12:00 PM</td>
                    <td>Jeffrey Chan <br> Sahil Gandhi</td>
                    <td>Kathleen (12:15)</td>
                    <td>Minh <br> Jeffrey Chan</td>
                    <td>Jeffrey Chan <br> Kathleen </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td id = "time">1:00 PM</td>
                    <td>Jeffrey Chan <br> Sahil Gandhi </td>
                    <td>Alex</td>
                    <td>Minh <br> Jeffrey Chan</td>
                    <td>Kathleen</td>
                    <td>Ted</td>
                    <td></td>
                </tr>
                <tr>
                    <td id = "time">2:00 PM</td>
                    <td>Nihar Tamhankar <br> Natasha Sarkar</td>
                    <td>Alex <br> Sahil Gandhi</td>
                    <td>Officer 3</td>
                    <td>Officer 4</td>
                    <td>Officer 5</td>
                    <td>Officer 6</td>
                </tr>
                <tr>
                    <td id = "time">3:00 PM</td>
                    <td>Nihar Tamhankar <br> Natasha Sarkar</td>
                    <td>Jeffrey Chan <br> Liz <br> Alex <br> Jiwan</td>
                    <td>Officer 3</td>
                    <td>Officer 4</td>
                    <td>Officer 5</td>
                    <td>Officer 6</td>
                </tr>
                <tr>
                    <td id = "time">4:00 PM</td>
                    <td>Alex <br> Jim <br> Kyle</td>
                    <td>Jeffrey Chan <br> Nihar Tamhankar <br> Kathleen</td>
                    <td>Officer 3</td>
                    <td>Officer 4</td>
                    <td>Officer 5</td>
                    <td>Officer 6</td>
                </tr>
                <tr>
                    <td id = "time">5:00 PM</td>
                    <td>Jim <br> Serene <br> Kyle</td>
                    <td>Officer 2</td>
                    <td>Officer 3</td>
                    <td>Officer 4</td>
                    <td>Officer 5</td>
                    <td>Officer 6</td>
                </tr>
                <tr>
                    <td id = "time">6:00 PM</td>
                    <td>Jim</td>
                    <td>Officer Meeting</td>
                    <td>Officer 3</td>
                    <td>Officer 4</td>
                    <td>Officer 5</td>
                    <td>Officer 6</td>
                </tr>
                <tr>
                    <td id = "time">After Hours</td>
                    <td></td>
                    <td>Jeffrey Chen</td>
                    <td>Officer 3</td>
                    <td>Officer 4</td>
                    <td>Officer 5</td>
                    <td>Officer 6</td>
                </tr>
            </table>
        </div>

        <!-- SMALLER LAB HOURS TABLE -->
        <div class = table-wrapper>
            <table class = "table2">
                <tr id = "top">
                    <th ></th>
                    <th id = "date">FRIDAY</th>
                    <th id = "date" >SATURDAY / SUNDAY</th>
                </tr>
                 <tr>
                    <td id = "time">8:00 AM</td>
                    <td ></td>
                    <td ></td>
                </tr>
                <tr>
                    <td id = "time">9:00 AM</td>
                    <td ></td>
                    <td ></td>
                </tr>
                <tr>
                    <td id = "time">10:00 AM</td>
                    <td >Minh</td>
                    <td >Jiwan</td>
                </tr>
                <tr>
                    <td id = "time" >11:00 AM</td>
                    <td >Minh</td>
                    <td >Jiwan</td>
                </tr>
                <tr>
                    <td id = "time">12:00 PM</td>
                    <td >Minh <br> Jeffrey Chan</td>
                    <td >Jeffrey Chan <br> Kathleen </td>
                </tr>
                <tr>
                    <td id = "time">1:00 PM</td>
                    <td >Officer 1 <br> Officer 2/td>
                    <td >Officer 3</td>
                </tr>
                <tr>
                    <td id = "time">2:00 PM</td>
                    <td >Officer 1</td>
                    <td >Officer 2</td>
                </tr>
                <tr>
                    <td id = "time">3:00 PM</td>
                    <td >Officer 1</td>
                    <td >Officer 2</td>
                </tr>
                <tr>
                    <td id = "time">4:00 PM</td>
                    <td >Officer 1</td>
                    <td >Officer 2</td>
                </tr>
                <tr>
                    <td id = "time">5:00 PM</td>
                    <td >Officer 1</td>
                    <td >Officer 2</td>
                </tr>
                <tr>
                    <td id = "time">6:00 PM</td>
                    <td >Officer 1</td>
                    <td >Officer 2</td>
                </tr>
                <tr>
                    <td id = "time">After Hours</td>
                    <td >Officer 1</td>
                    <td >Officer 2</td>
                </tr>
            </table>
        </div>
    </div>

    <div class='resources' id='resources'>
        <div class='title'>
            <h1 class='black'>Resources</h1>
        </div>
        <div class='resources-info black'>
            <div class='resource'>
                <h2 class='ieee-blue thin'>GENERAL TOOLS</h2>
                <p class='black'>
                    We've stocked up on various tools that members can use in our labs.
                    <br /><br />
                    Some of the heavier tools we have include: soldering stations, oscilloscops, power supplies,
                    3D printers, a drill press, DMM's, a big whiteboard, etc. Mostly popular tools used to complete hardware related
                    projects.
                    <br /><br />
                    We also have smaller, general tools such as: scissors, wire cutters, pliers, rulers, screwdrivers, etc.
                </p>
            </div>
            <div class='resource'>
                <h2 class='ieee-blue thin'>Slack Workspace</h2>
                <p class='black'>
                    <a href='https://slack.com/' target='_blank'>Slack</a> is a team communication application,
                    and is one of our primary means of communication within our organization. Our Slack workspace
                    is free to join to all general members at <a href='https://uclaieee.slack.com/' target='_blank'>https://uclaieee.slack.com/</a>.
                    Within our Slack workspace, you can directly message officers, communicate with fellow project members,
                    and ask if the lab is open.
                </p>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include('./includes/footer.html'); ?>
</body>
</html>
