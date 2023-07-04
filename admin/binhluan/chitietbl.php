<div class="row mb ">
    <div class="boxtrai mr ">
            <div class="row mb">
                    <?php 
                        extract($onesp);
                    ?>
                    <div class="boxtitle"><?=$name?></div>
                    <div class=" row boxcontent">

                        <?php 
                            
                            $img=$img_path.$img;
                            echo'<div class="row mb spct"><img src="'.$img.'" ></div><br>';
                            echo $mota;
                        ?>
                        
                    </div>
            </div>         
            <!-- jquery của bình luận  -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script>
                $(document).ready(function(){                   
                    $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
                });
            </script>
            
            
                 
</div>