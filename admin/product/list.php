<h1>Danh sách sản phẩm</h1>
<form class="form-list-product" action="index.php?act=list-product" method="post">
  <input type="text" name="input-search" placeholder="Nhập tên sản phẩm">
  <div class="select">
    <select name="idCategory" id="" class="">
      <option value="0" selected>Tất cả danh mục</option>
      <?php
      foreach ($listCategory as $category) {
        extract($category);
        echo ' <option value="' . $id . '">' . $name . '</option>';
      }
      ?>
    </select>
    <button type="submit" name="search">Tìm</button>
  </div>
</form>
<div class="table-kind">
  <table>
    <thead>
      <tr>
        <th></th>
        <th>ID</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Giá</th>
        <th>Lượt xem</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($listProduct as $product) {
        extract($product);
        echo '<tr>
       <td><input type="checkbox" name="" id="" /></td>
       <td>' . $id . '</td>
       <td> ' . $name . '</td>
       <td><img src=../upload/' . $image . ' alt=""></td>
       <td> ' . $price . '</td>
       <td> ' . $view . '</td>
       <td>
         <a href="index.php?act=edit-product&id=' . $id . '"><button type="submit" class="edit" name="edit">Sửa</button></a>
         <a href="index.php?act=delete-product&id=' . $id . '"><button type="submit" class="delete" name="delete">Xóa</button></a>
       </td>
     </tr>';
      }
      ?>
    </tbody>
  </table>
</div>
<div class="btn">
  <button type="button" class="selectAll">Chọn tất cả</button>
  <button type="button" class="reset">Bỏ chọn tất cả</button>
  <button type="button" class="deleteAll">Xóa các mục chọn</button>
  <a href="index.php?act=add-product">
    <button type="button" class="add">Nhập thêm</button>
  </a>
</div>