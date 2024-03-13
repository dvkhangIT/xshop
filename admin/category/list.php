<h1>Danh sách loại hàng</h1>
<div class="table-kind">
  <table>
    <thead>
      <tr>
        <th></th>
        <th>Mã loại</th>
        <th>Tên loại</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($listCategory as $category) {
        extract($category);
        echo '<tr>
       <td><input type="checkbox" name="" id="" /></td>
       <td>' . $id . '</td>
       <td> ' . $name . '</td>
       <td>
         <form action="#">
           <button type="submit" class="edit" name="edit">Sửa</button>
           <button type="submit" class="delete" name="delete">Xóa</button>
         </form>
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
  <a href="index.php?act=add-category">
    <button type="button" class="add">Nhập thêm</button>
  </a>
</div>