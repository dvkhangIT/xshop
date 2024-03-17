<h1>Danh sách sản phẩm</h1>
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