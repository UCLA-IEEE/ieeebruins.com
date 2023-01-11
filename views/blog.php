<!DOCTYPE html>
<html>
  <head>
    <title>Blog - IEEE at UCLA</title>
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

    <!-- FAVICON -->
    <link rel="icon" href="/public/favicon.ico" />

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="/public/css/footer.css?v=1.0.0" />
    <link rel="stylesheet" href="/public/css/navbar.css?v=1.0.1" />
    <link rel="stylesheet" href="/public/css/style.css?v=1.0.0" />
    <link rel="stylesheet" href="/public/css/blog.css?v=1.0.0" />

    <!-- SCRIPTS -->
    <script src="/public/js/key.js"></script>
    <script src="/public/js/blog.js"></script>
  </head>
  <body>
    <!-- NAVBAR -->
    <?php include "./includes/navbar.html"; ?>

    <div class="blog-wrapper content-wrapper">
      <div class="container-fluid page-title text-center">
        <h1>Blog</h1>
        <p>
          Our blog is the place for our officers (and the occasional general
          member) to leave their thoughts, whether about UCLA, IEEE,
          engineering, or something entirely unrelated. Browse the posts and see
          what's on our officers' minds!
        </p>
      </div>

      <!-- Blog posts added here -->
    </div>

    <div class="img-modal"></div>

    <!-- FOOTER -->
    <?php include "./includes/footer.html"; ?>
  </body>
</html>
