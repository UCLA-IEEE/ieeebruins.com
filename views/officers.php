<!-- OFFICER DATA -->

<?php
    $IMAGE_PATH = "/public/images/officers/";
    $officer_data = array(
        "Executive Board" => array(
            "Kathleen Chan" => array(
                "position" => "President",
                "major" => "Electrical Engineering",
                "class" => "4th Year",
                "picture" => $IMAGE_PATH . "kathleen.jpg"
            ),
            "Jiwan Kang" => array(
                "position" => "Internal Vice President",
                "major" => "Computer Engineering",
                "class" => "3rd Year",
                "picture" => $IMAGE_PATH . "jiwan.jpg"
            ),
            "Wenlong Xiong" => array(
                "position" => "External Vice President",
                "major" => "Computer Science",
                "class" => "4th Year",
                "picture" => $IMAGE_PATH . "wenlong.jpg"
            ),
            "Ted Akiyama" => array(
                "position" => "External Vice President",
                "major" => "Electrical Engineering",
                "class" => "4th Year",
                "picture" => $IMAGE_PATH . "ted.jpg"
            ),
            "Nihar Tamhankar" => array(
                "position" => "Treasurer",
                "major" => "Electrical Engineering",
                "class" => "3rd Year",
                "picture" => $IMAGE_PATH . "nihar.jpg"
            ),
            "Serene Kamal" => array(
                "position" => "Secretary",
                "major" => "Electrical Engineering",
                "class" => "2nd Year",
                "picture" => $IMAGE_PATH . "serene.jpg"
            ),
            "Christine Chen" => array(
                "position" => "Publicity",
                "major" => "Electrical Engineering",
                "class" => "3rd Year",
                "picture" => $IMAGE_PATH . "christine.jpg"
            ),
            "Sadaf Dadafshar" => array(
                "position" => "Events Coordinator",
                "major" => "Electrical Engineering",
                "class" => "2nd Year",
                "picture" => $IMAGE_PATH . "sadaf.jpg"
            )
        ),

        "Projects Board" => array(
            "Kyle Liang" => array(
                "position" => "OPS Lead",
                "major" => "Computer Science and Engineering",
                "class" => "3rd Year",
                "picture" => $IMAGE_PATH . "kyle.jpg"
            ),
            "Natasha Sarkar" => array(
                "position" => "OPS Lead",
                "major" => "Computer Science and Engineering",
                "class" => "3rd Year",
                "picture" => $IMAGE_PATH . "natasha.jpg"
            ),
            "Alex Graening" => array(
                "position" => "Micromouse Lead",
                "major" => "Electrical Engineering",
                "class" => "2nd Year",
                "picture" => $IMAGE_PATH . "alex.jpg"
            ),
            "Jim Xu" => array(
                "position" => "Micromouse Lead",
                "major" => "Electrical Engineering",
                "class" => "4th Year",
                "picture" => $IMAGE_PATH . "jim.jpg"
            ),
            "Thomas Garcia" => array(
                "position" => "Advanced Projects Lead",
                "major" => "Electrical Engineering",
                "class" => "3rd Year",
                "picture" => $IMAGE_PATH . "thomas.jpg"
            ),
            "Arti Patankar" => array(
                "position" => "Advanced Projects Lead",
                "major" => "Computer Science and Engineering",
                "class" => "3rd Year",
                "picture" => $IMAGE_PATH . "arti.jpg"
            ),
            "Sahil Gandhi" => array(
                "position" => "Workshops Board",
                "major" => "Computer Science and Engineering",
                "class" => "3rd Year",
                "picture" => $IMAGE_PATH . "sahil.jpg"
            ),
            "Liz Xue" => array(
                "position" => "Workshops Board",
                "major" => "Electrical Engineering",
                "class" => "3rd Year",
                "picture" => $IMAGE_PATH . "liz.jpg"
            ),
            "Minh Le" => array(
                "position" => "Projects Manager",
                "major" => "Computer Science",
                "class" => "4th Year",
                "picture" => $IMAGE_PATH . "minh.jpg"
            ),
            "Jeffrey Chen" => array(
                "position" => "Projects Manager",
                "major" => "Electrical Engineering",
                "class" => "4th Year",
                "picture" => $IMAGE_PATH . "jeffrey-chen.jpg"
            ),
            "Jeffrey Chan" => array(
                "position" => "Webmaster",
                "major" => "Computer Science and Engineering",
                "class" => "3rd Year",
                "picture" => $IMAGE_PATH . "jeffrey-chan.jpg"
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
                    print("<p>" . $officer_data["position"] . "</p>");
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
