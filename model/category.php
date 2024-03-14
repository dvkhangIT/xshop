<?php
function add_category($kind)
{
  $sql = "INSERT INTO `categories`( `name`) VALUES ('$kind')";
  pdo_execute($sql);
}
function loadAll_category()
{
  $sql = "SELECT * FROM `categories` ORDER BY id DESC";
  return pdo_query($sql);
}
function delete_category($id)
{
  $sql = "DELETE FROM `categories` WHERE id =" . $id;
  pdo_execute($sql);
}
function loadOne_category($id)
{
  $sql = "SELECT `id`, `name` FROM `categories` WHERE id = " . $id;
  $category = pdo_query_one($sql);
  return $category;
}
function update_category($id, $kind)
{
  $sql = "UPDATE `categories` SET `name`='$kind' WHERE id=" . $id;
  pdo_execute($sql);
}
