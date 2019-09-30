<!-- OFFICER DATA -->

<?php
    $IMAGE_PATH = "/public/images/officers/";
    $officer_data = array(
        "Executive Board" => array(
            "Alexander Graening" => array(
                "position" => "President",
                "major" => "Electrical Engineering",
                "class" => "4th Year",
                "picture" => $IMAGE_PATH . "alex.png"
            ),
            "Erica Xie" => array(
                "position" => "Internal Vice President",
                "major" => "Computer Engineering",
                "class" => "3rd Year",
                "picture" => $IMAGE_PATH . "erica.png"
            ),
            "Michelle Lam" => array(
                "position" => "External Vice President",
                "major" => "Computer Engineering",
                "class" => "3rd Year",
                "picture" => $IMAGE_PATH . "michellel.png"
            ),
            "Michelle Tan" => array(
                "position" => "External Vice President",
                "major" => "Electrical Engineering",
                "class" => "3rd Year",
                "picture" => $IMAGE_PATH . "michellet.png"
            ),
        ),

        "Administrative Board" => array(
            "Justin Jianto" => array(
                "position" => "Treasurer",
                "major" => "Electrical Engineering",
                "class" => "2nd Year",
                "picture" => $IMAGE_PATH . "justin.png"
            ),
            "Roselyn Lee" => array(
                "position" => "Corporate",
                "major" => "Computer Engineering",
                "class" => "2nd Year",
                "picture" => $IMAGE_PATH . "roselyn.png"
            ),
            "Jay Park" => array(
                "position" => "Secretary",
                "major" => "Electrical Engineering",
                "class" => "2nd Year",
                "picture" => $IMAGE_PATH . "jay.png"
            ),
            "Albert Han" => array(
                "position" => "Publicity",
                "major" => "Computer Science",
                "class" => "2nd Year",
                "picture" => $IMAGE_PATH . "albert.png"
            ),
            "Fred Chu" => array(
                "position" => "Events Coordinator",
                "major" => "Electrical Engineering",
                "class" => "2nd Year",
                "picture" => $IMAGE_PATH . "fred.png"
            )
        ),

        "Projects Board" => array(
            "Bryan Wong" => array(
                "position" => "OPS Lead",
                "major" => "Electrical Engineering",
                "class" => "2nd Year",
                "picture" => $IMAGE_PATH . "bryan.png"
            ),
            "Jackie Lam" => array(
                "position" => "OPS Lead",
                "major" => "Electrical Engineering",
                "class" => "3rd Year",
                "picture" => $IMAGE_PATH . "jackie.png"
            ),
            "Caleb Terrill" => array(
                "position" => "Micromouse Lead",
                "major" => "Computer Engineering",
                "class" => "2nd Year",
                "picture" => $IMAGE_PATH . "caleb.png"
            ),
            "Chester Hulse" => array(
                "position" => "Micromouse Lead",
                "major" => "Computer Engineering",
                "class" => "3rd Year",
                "picture" => $IMAGE_PATH . "chester.png"
            ),
            "Zac Cadarette" => array(
                "position" => "Aircopter Lead",
                "major" => "Electrical Engineering",
                "class" => "3rd Year",
                "picture" => $IMAGE_PATH . "zac.png"
            ),
            "Peter Oh" => array(
                "position" => "Aircopter Lead",
                "major" => "Electrical Engineering",
                "class" => "3rd Year",
                "picture" => $IMAGE_PATH . "peter.png"
            ),
            "Evan Brown" => array(
                "position" => "Workshops Manager",
                "major" => "Electrical Engineering",
                "class" => "4th Year",
                "picture" => $IMAGE_PATH . "evan.png"
            ),
            "Henry Kou" => array(
                "position" => "Workshops Manager",
                "major" => "Electrical Engineering",
                "class" => "3rd Year",
                "picture" => $IMAGE_PATH . "henry.png"
            ),
            "David Baum" => array(
                "position" => "Projects Manager",
                "major" => "Electrical Engineering",
                "class" => "3rd Year",
                "picture" => $IMAGE_PATH . "david.png"
            ),
            "Kenny Chan" => array(
                "position" => "Projects Manager",
                "major" => "Computer Engineering",
                "class" => "4th Year",
                "picture" => $IMAGE_PATH . "kenny.png"
            ),
            "Natasha Sarkar" => array(
                "position" => "Lab Manager",
                "major" => "Computer Science",
                "class" => "4th Year",
                "picture" => $IMAGE_PATH . "natasha.png"
            ),
            "Kathy Daniels" => array(
                "position" => "Webmaster",
                "major" => "Computer Science and Engineering",
                "class" => "3rd Year",
                "picture" => $IMAGE_PATH . "kathy.png"
            )
        )
    );
?>

    <!-- OFFICER PAGE TEMPLATE -->

    <!DOCTYPE HTML>
    <html>
    <head>
        <title>Officers - IEEE at UCLA</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- JQUERY -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- FONT AWESOME -->
        <script src="https://use.fontawesome.com/348865e609.js"></script>

        <!-- FAVICON -->
        <link rel='icon' href='/public/favicon.ico' />

        <!-- STYLESHEETS -->
        <link rel='stylesheet' href='/public/css/footer.css' />
        <link rel='stylesheet' href='/public/css/navbar.css' />
        <link rel='stylesheet' href='/public/css/style.css' />
        <link rel='stylesheet' href='/public/css/officers.css' />
    </head>
    <body>
        <!-- NAVBAR -->
        <?php include('./includes/navbar.html'); ?>

        <div class='text-center officer-wrapper'>
            <?php
        foreach($officer_data as $section_name => $section) {
            print("<h1>" . $section_name . "</h1>");

            print("<div class='officer-section'>");
            foreach($section as $officer_name => $officer_data) {
                print("<div class='officer'>");
                    print("<img src='" . $officer_data["picture"] . "' />");
                    print("<div class='blue-highlight'></div>");
                    print("<div class='officer-overlay'>");
                        print("<p>" . $officer_data["class"] . "<br /><br />" . $officer_data["major"] . "</p>");
                    print("</div>");
                    print("<p>" . $officer_name . "</p>");
                    print("<p class='position'>" . $officer_data["position"] . "</p>");
                print("</div>");
            }
            print("</div>");
        }
    ?>
        </div>

        <!-- FOOTER -->
        <?php include('./includes/footer.html'); ?>
    </body>
    </html>
