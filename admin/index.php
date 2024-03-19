<?php
include '../model/pdo.php';
include '../model/category.php';
include '../model/product.php';
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
              // category
            case 'add-category':
              if (isset($_POST['addCategory'])) {
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
              // product
            case 'add-product':
              if (isset($_POST['addProduct'])) {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $description = $_POST['description'];
                $idCategory = $_POST['idCategory'];
                $fileName = $_FILES['image']['name'];
                $target_dir = '../upload/';
                $target_file = $target_dir . basename($fileName);
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                } else {
                }
                add_product($name, $price, $description, $fileName, $idCategory);
                $noti = 'Thêm thành công!';
              }
              $listCategory = loadAll_category();
              include 'product/add.php';
              break;
            case 'list-product':
              if (isset($_POST['search'])) {
                $keyWord = $_POST['input-search'];
                $idCategory = $_POST['idCategory'];
              } else {
                $keyWord = '';
                $idCategory = 0;
              }
              $listProduct = loadAll_product($keyWord, $idCategory);
              $listCategory = loadAll_category();
              include 'product/list.php';
              break;
            case 'delete-product':
              if ($_GET['id'] && $_GET['id'] > 0) {
                delete_product($_GET['id']);
              }
              $listProduct = loadAll_product();
              include 'product/list.php';
              break;
            case 'edit-product':
              if (isset($_GET['id']) && $_GET['id'] > 0) {
                $product = loadOne_product($_GET['id']);
              }
              include 'product/update.php';
              break;
            case 'update-product':
              if (isset($_POST['update'])) {
                $id = $_POST['id'];
                $kind = $_POST['kind'];
                update_product($id, $kind);
                $noti = 'Cập nhật thành công!';
              }
              $listProduct = loadAll_product();
              include 'product/list.php';
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