<?php
function add_product($name, $price, $description, $fileName, $idCategory)
{
  $sql = "INSERT INTO `products`(`name`, `price`, `image`, `description`,`idCategories`) VALUES ('$name','$price','$fileName','$description','$idCategory')";
  pdo_execute($sql);
}
function loadAll_product()
{
  $sql = "SELECT * FROM `products` ORDER BY id DESC";
  return pdo_query($sql);
}
function delete_product($id)
{
  $sql = "DELETE FROM `products` WHERE id =" . $id;
  pdo_execute($sql);
}
function loadOne_product($id)
{
  $sql = "SELECT `id`, `name` FROM `products` WHERE id = " . $id;
  $product = pdo_query_one($sql);
  return $product;
}
function update_product($id, $kind)
{
  $sql = "UPDATE `products` SET `name`='$kind' WHERE id=" . $id;
  pdo_execute($sql);
}
