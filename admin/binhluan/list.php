<div class="row">
            <div class="row formthemsp">
                <h1>DANH SÁCH TÀI KHOẢN BÌNH LUẬN</h1>
            </div>
            <div class="row formcontent">
                <div class="row mb10 formdsloai">
                   <table>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Nội dung bình luận</th>
                        <th>Iduser</th>
                        <th>Idpro</th>
                        <th>Ngày bình luận</th>
                        <th></th>
                    </tr>
                    <?php 
                      foreach ($listbinhluan as $binhluan) {
                        extract($binhluan);
                        $suabl="index.php?act=suabl&id=".$id;
                        $xoabl="index.php?act=xoabl&id=".$id;
                        $chitiet="index.php?act=chitietbl&idsp=".$id;
                        echo ' <tr>
                                <td><input type="checkbox" name="" id=""</td>
                                <td>'.$id.'</td>
                                <td>'.$noidung.'</td>
                                <td>'.$iduser.'</td>
                                <td>'.$idpro.'</td>
                                <td>'.$ngaybinhluan.'</td>
                                
                               
                                <td> <a href="'.$xoabl.'"><input type="button" value="Xóa"></a>  <a href="'.$chitiet.'"><input type="button" value="Chi Tiet"></a></td>
                                </tr>';
                                
                      }
                   
                    ?>
                   </table>
                </div>
                <div class="row mb20">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa mục đã chọn ">
                    
                </div>
            </div>
         </div>