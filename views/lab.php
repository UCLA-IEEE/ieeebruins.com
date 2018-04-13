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

    <script src = "/public/js/lab.js"></script>

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
        <div class = "pbox">
         <p>Need to know when the lab’s open? Looking for your project leads? Need help on your homework? Check out the spreadsheet below to find out when your favorite officers will be in the lab.</p>
     </div>
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

    <div class='resources'>
        <h1 class='black'>RESOURCES</h1>
        <hr style='width: 310px; margin-bottom: 10px;'>
        <p class='black'>CREATIVITY HAS NO LIMITS</p>
    </div>
</body>
<?php include('./includes/footer.html'); ?>
</html>
