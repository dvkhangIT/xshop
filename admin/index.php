<?php
include '../model/pdo.php';
?>
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
              if (isset($_POST['addnew'])) {
                $kind = $_POST['kind'];
                $sql = "INSERT INTO `categories`( `name`) VALUES ('$kind')";
                pdo_execute($sql);
                $noti = 'Thêm thành công!';
              }
              include 'category/add.php';
              break;
            case 'list-category':
              $sql = "SELECT * FROM `categories` ORDER BY id DESC";
              $listCategory = pdo_query($sql);
              include 'category/list.php';
              break;
            case 'delete-category':
              if ($_GET['id'] && $_GET['id'] > 0) {
                $sql = "DELETE FROM `categories` WHERE id =" . $_GET['id'];
                pdo_execute($sql);
              }
              $sql = "SELECT * FROM `categories` ORDER BY name";
              $listCategory = pdo_query($sql);
              include 'category/list.php';
              break;
            case 'edit-category':
              if (isset($_GET['id']) && $_GET['id'] > 0) {
                $sql = "SELECT `id`, `name` FROM `categories` WHERE id = " . $_GET['id'];
                $category = pdo_query_one($sql);
              }
              include 'category/update.php';
              break;
            case 'update-category':
              if (isset($_POST['update'])) {
                $id = $_POST['id'];
                $kind = $_POST['kind'];
                $sql = "UPDATE `categories` SET `name`='$kind' WHERE id=" . $id;
                pdo_execute($sql);
                $noti = 'Cập nhật thành công!';
              }
              $sql = "SELECT * FROM `categories` ORDER BY name";
              $listCategory = pdo_query($sql);
              include 'category/list.php';
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