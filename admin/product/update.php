<?php
if (is_array($category)) {
  extract($category);
}
?>
<h1>Cập nhật sản phẩm</h1>
<form action="index.php?act=update-product" method="post" class="add-category" enctype="multipart/form-data">
  <div class="form-group">
    <label for="">Mã sản phẩm</label>
    <input type="text" name="code" class="input-code" disabled />
  </div>
  <div class="form-group">
    <label for="">Tên sản phẩm</label>
    <input type="text" name="name" class="input-kind" />
  </div>
  <div class="form-group">
    <label for="">Giá</label>
    <input type="text" name="price" class="input-kind" />
  </div>
  <div class="form-group">
    <label for="">Hình ảnh</label>
    <input type="file" name="image" class="input-kind" />
  </div>
  <div class="form-group">
    <label for="">Mô tả</label>
    <textarea name="description" id="" cols="30" rows="10"></textarea>
  </div>
  <div class="btn">
    <a href="">
      <button type="submit" name="addnew" class="update">Cập nhật</button>
      <button type="button" name="reset" class="reset">Nhập lại</button>
    </a>
    <a href="index.php?act=list-product">
      <button type="button" name="" class="list">Danh sách</button>
    </a>
  </div>
  <?php
  if (isset($noti) && $noti != '') {
    echo $noti;
  }
  ?>
</form>