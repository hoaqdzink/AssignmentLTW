<div class="main">
    <h1 style="text-align: center;">List Product</h1>

    
<table class="container">
  <thead>
    <tr>
      <th><h1>Mã ID</h1></th>
      <th><h1>Tên SP</h1></th>
      <th><h1>Giá</h1></th>
      <th><h1>Số Lượng</h1></th>
      <th><h1>Hình ảnh</h1></th>
      <th><h1>Sửa/Xóa</h1></th>
    </tr>
  </thead>
  <tbody>
    <?php
      // var_dump($kq);

      if(isset($kq)&&(count($kq)>0)){
        foreach ($kq as $sp){
          echo'<tr>
                <td>'.$sp['id'].'</td>
                <td>'.$sp['tensp'].'</td>
                <td>'.$sp['gia'].' VNĐ</td>
                <td>'.$sp['soluong'].'</td>
                <td><img src='.$sp['hinh'].' alt=""></td>
                <td>
                    <a href="">Sửa</a> |
                    <a href="admin.php?act=delsp&id='.$sp['id'].'">Xóa</a>
                </td>
              </tr>';
        }
      }
    ?>
  </tbody>
</table>
</div>