<div class="row">
            <div class="row formthemsp mb">
                <h1>DANH SACH HÀNG HÓA</h1>
            </div>
            <form action="index.php?act=listsp" method="POST">
                        <input type="text" name="kyw" id="">
                        <select name="iddm" >
                            <option value="0" selected>Tất Cả</option>
                                <?php 
                                    foreach ($listdanhmuc as $danhmuc) {
                                        extract($danhmuc);
                                        echo '<option value="'.$id.'">'.$name.'</option>';
                                    }                            
                                ?>                
                        </select>
                        <input type="submit" name="listok" value="Go">
                    </form>
            <div class="row formcontent">
                <div class="row mb10 formdsloai">
                   
                   <table>
                    <tr>
                        <th></th>
                        <th>Mã Loại</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>HÌNH</th>
                        <th>GIÁ</th>
                        <th>LƯỢT XEM</th>
                        <th></th>
                    </tr>
                    <?php 
                        foreach ($listsanpham as $sanpham) {
                            extract($sanpham);
                            $suasp="index.php?act=suasp&id=".$id;
                            $xoasp="index.php?act=xoasp&id=".$id;
                            $hinhpath="../upload/".$img;
                            if(is_file($hinhpath)){
                                    $hinh="<img src='".$hinhpath."' height='80'>";
                            }else{
                                $hinh="no photo";
                            }
                            

                             echo  ' <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$name.'</td>
                                    <td>'.$hinh.'</td>                                  
                                    <td>'.$price.'</td>
                                    <td>'.$luotxem.'</td>
                                    <td><a href="'. $suasp.'"><input type="button" value="Sửa"></a> <a href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>
                                    </tr>';
                                   
                        }
  
                    ?>
                 </table>
                </div>
                <div class="row mb20">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa mục đã chọn ">
                    <a href="index.php?act=addsp"><input type="button" value="Nhập thêm "></a>
                    
                </div>
            </div>
         </div>