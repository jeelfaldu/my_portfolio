<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $profile['pagetitle']; ?></title>
  <meta name="description" content="<?php echo $profile['metadescription']; ?>">
  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="<?php echo $profile['logo']; ?>" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/toast.css">
  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<?php include "config/db.php"; ?>

<body>

  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #SIDEBAR
    -->

    <?php include "components/sidebar.php" ?>

    <!--
      - #main-content
    -->

    <div class="main-content">

      <!--
        - #NAVBAR
      -->

      <?php include "components/navbar.php" ?>

      <!--
        - #ABOUT
      -->

      <?php include "pages/about.php" ?>

      <!--
        - #RESUME
      -->

      <?php include "pages/resume.php" ?>

      <!--
        - #PORTFOLIO
      -->

      <?php include "pages/portfolio.php" ?>

      <!--
        - #BLOG
      -->

      <?php include "pages/blog.php" ?>

      <!--
        - #CONTACT
      -->

      <?php include "pages/contact.php" ?>

    </div>

  </main>






  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>


  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>