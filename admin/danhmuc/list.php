<div class="row">
            <div class="row formthemsp">
                <h1>DANH SACH HÀNG HÓA</h1>
            </div>
            <div class="row formcontent">
                <div class="row mb10 formdsloai">
                   <table>
                    <tr>
                        <th></th>
                        <th>Mã Loại</th>
                        <th>Tên Loại</th>
                        <th></th>
                    </tr>
                    <?php 
                      foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        $suadm="index.php?act=suadm&id=".$id;
                        $xoadm="index.php?act=xoadm&id=".$id;
                        echo ' <tr>
                                <td><input type="checkbox" name="" id=""</td>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a> <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
                                </tr>';
                                
                      }
                   
                    ?>
                   </table>
                </div>
                <div class="row mb20">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa mục đã chọn ">
                    <a href="index.php?act=adddm"><input type="button" value="Nhập thêm "></a>
                </div>
            </div>
         </div>