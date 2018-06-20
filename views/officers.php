<!-- OFFICER DATA -->

<?php
    $IMAGE_PATH = "/public/images/officers/";
    $officer_data = array(
        "Executive Board" => array(
            "Jiwan Kang" => array(
                "position" => "President",
                "major" => "Computer Engineering",
                "class" => "4th Year",
                "picture" => $IMAGE_PATH . "jiwan.jpg"
            ),
            "Sadaf Dadafshar" => array(
                "position" => "Internal Vice President",
                "major" => "Electrical Engineering",
                "class" => "3rd Year",
                "picture" => $IMAGE_PATH . "sadaf.jpg"
            ),
            "Serene Kamal" => array(
                "position" => "External Vice President",
                "major" => "Electrical Engineering",
                "class" => "3rd Year",
                "picture" => $IMAGE_PATH . "serene.jpg"
            ),
            "Nihar Tamhankar" => array(
                "position" => "External Vice President",
                "major" => "Electrical Engineering",
                "class" => "4th Year",
                "picture" => $IMAGE_PATH . "nihar.jpg"
            ),
        ),

        "Administrative Board" => array(
            "Shalin Shah" => array(
                "position" => "Treasurer",
                "major" => "Electrical Engineering",
                "class" => "2nd Year",
                "picture" => $IMAGE_PATH . "shalin.jpg"
            ),
            "Erica Xie" => array(
                "position" => "Secretary",
                "major" => "Undeclared Engineering",
                "class" => "2nd Year",
                "picture" => $IMAGE_PATH . "erica.jpg"
            ),
            "Michelle Lam" => array(
                "position" => "Publicity",
                "major" => "Electrical Engineering",
                "class" => "2nd Year",
                "picture" => $IMAGE_PATH . "michelle.jpg"
            ),
            "Michelle Tan" => array(
                "position" => "Events Coordinator",
                "major" => "Electrical Engineering",
                "class" => "2nd Year",
                "picture" => $IMAGE_PATH . "michelleT.jpg"
            )
        ),

        "Projects Board" => array(
            "Kaleb Cole-Wood" => array(
                "position" => "OPS Lead",
                "major" => "Electrical Engineering",
                "class" => "2nd Year",
                "picture" => $IMAGE_PATH . "kaleb.jpg"
            ),
            "Bruno Bombassaro" => array(
                "position" => "OPS Lead",
                "major" => "Electrical Engineering",
                "class" => "2nd Year",
                "picture" => $IMAGE_PATH . "bruno.jpg"
            ),
            "Robert Zalog" => array(
                "position" => "Micromouse Lead",
                "major" => "Computer Science",
                "class" => "4th Year",
                "picture" => $IMAGE_PATH . "robert.jpg"
            ),
            "David Baum" => array(
                "position" => "Micromouse Lead",
                "major" => "Electrical Engineering",
                "class" => "2nd Year",
                "picture" => $IMAGE_PATH . "david.jpg"
            ),
            "Natasha Sarkar" => array(
                "position" => "Advanced Projects Lead",
                "major" => "Computer Science and Engineering",
                "class" => "3rd Year",
                "picture" => $IMAGE_PATH . "natasha.jpg"
            ),
            "Kenny Chan" => array(
                "position" => "Advanced Projects Lead",
                "major" => "Computer Engineering",
                "class" => "3rd Year",
                "picture" => $IMAGE_PATH . "kenny.jpg"
            ),
            "Liz Xue" => array(
                "position" => "Workshops Board",
                "major" => "Electrical Engineering",
                "class" => "4th Year",
                "picture" => $IMAGE_PATH . "liz.jpg"
            ),
            "Arti Patankar" => array(
                "position" => "Workshops Board",
                "major" => "Computer Science and Engineering",
                "class" => "4th Year",
                "picture" => $IMAGE_PATH . "arti.jpg"
            ),
            "Alexander Graening" => array(
                "position" => "Projects Manager",
                "major" => "Electrical Engineering",
                "class" => "3rd Year",
                "picture" => $IMAGE_PATH . "alex.jpg"
            ),
            "Sahil Gandhi " => array(
                "position" => "Projects Manager",
                "major" => "Computer Science and Engineering",
                "class" => "4th Year",
                "picture" => $IMAGE_PATH . "sahil.jpg"
            ),
            "Kathy Daniels" => array(
                "position" => "Webmaster",
                "major" => "Electrical Engineering",
                "class" => "2nd Year",
                "picture" => $IMAGE_PATH . "kathy.jpg"
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
