<?php
if (is_array($category)) {
  extract($category);
}
?>
<h1>Cập nhật loại hàng</h1>
<form action="index.php?act=update-category" method="post" class="add-category">
  <div class="form-group">
    <label for="">Mã hàng</label>
    <input type="text" name="code" class="input-code" disabled value="<?= isset($id) && $id > 0 ? $id : '' ?>" />
  </div>
  <div class="form-group">
    <label for="">Phân loại</label>
    <input type="text" name="kind" class="input-kind" value="<?= isset($name) && $name != '' ? $name : '' ?>" />
  </div>
  <div class="btn">
    <input type="hidden" name="id" value="<?= isset($id) && $id > 0 ? $id : '' ?>">
    <button type="submit" name="update" class="addnew">Cập nhật</button>
    <button type="button" name="reset" class="reset">Nhập lại</button>
    <a href="index.php?act=list-category">
      <button type="button" name="" class="list">Danh sách</button>
    </a>
  </div>
  <?php
  if (isset($noti) && $noti != '') {
    echo $noti;
  }
  ?>
</form>