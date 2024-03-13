<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin</title>
  <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
  <div class="app">
    <?php include 'header.php' ?>
    <div class="wrap">
      <?php include 'sidebar.php' ?>
      <div class="admin-content">
        <?php
        if (isset($_GET['act'])) {
          $act = $_GET['act'];
          switch ($act) {
            case 'add-category':
              include 'category/add.php';
              break;
            case 'add-product':
              include 'product/add.php';
              break;
            default:
              include 'home.php';
              break;
          }
        } else {
          include 'home.php';
        }
        ?>
      </div>
    </div>
  </div>
</body>

</html>