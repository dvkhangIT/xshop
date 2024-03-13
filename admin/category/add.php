<h1>Thêm mới loại hàng</h1>
<form action="index.php?act=add-category" method="post" class="add-category">
  <div class="form-group">
    <label for="">Mã hàng</label>
    <input type="text" name="code" class="input-code" disabled />
  </div>
  <div class="form-group">
    <label for="">Phân loại</label>
    <input type="text" name="kind" class="input-kind" />
  </div>
  <div class="btn">
    <a href="">
      <button type="submit" name="addnew" class="addnew">Thêm mới</button>
      <button type="button" name="reset" class="reset">Nhập lại</button>
    </a>
    <a href="index.php?act=list">
      <button type="button" name="" class="list">Danh sách</button>
    </a>
  </div>
  <?php
  if (isset($noti) && $noti != '') {
    echo "<script>
    alert('$noti');
    </script>
    ";
  }
  ?>
</form>