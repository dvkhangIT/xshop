<?php
include '../model/pdo.php';
include '../model/category.php'
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
                add_category($kind);
                $noti = 'Thêm thành công!';
              }
              include 'category/add.php';
              break;
            case 'list-category':
              $listCategory = loadAll_category();
              include 'category/list.php';
              break;
            case 'delete-category':
              if ($_GET['id'] && $_GET['id'] > 0) {
                delete_category($_GET['id']);
              }
              $listCategory = loadAll_category();
              include 'category/list.php';
              break;
            case 'edit-category':
              if (isset($_GET['id']) && $_GET['id'] > 0) {
                $category = loadOne_category($_GET['id']);
              }
              include 'category/update.php';
              break;
            case 'update-category':
              if (isset($_POST['update'])) {
                $id = $_POST['id'];
                $kind = $_POST['kind'];
                update_category($id, $kind);
                $noti = 'Cập nhật thành công!';
              }
              $listCategory = loadAll_category();
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