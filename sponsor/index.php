<?php

$page_title = 'Sponsor';

//HOME
$n_menu_home = '';
$menu_home = '';
//ABOUT
$n_menu_about = '';
$menu_about = '';
//SCHEDULE
$n_menu_schedule = '';
$menu_schedule = '';
//GALLERY
$n_menu_gallery = '';
$menu_gallery = '';
//PERFORMANCE
$n_menu_performance = '';
$menu_performance = '';
//SHOP
$n_menu_shop = '';
$menu_shop = '';

require("../assets/page/main.php");
require("../assets/database/condb.php");
?>
<!DOCTYPE html>
<html lang="en">

<?php echo $head; ?>

<body>
    <?php echo $navbar; ?>
    <section class="section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="nene-font-color-2 mb-4 text-center">Signature Set</h1>
                    <div class="gallery-list">
                        <?php
                        $sql = mysqli_query($condb, "SELECT * FROM gallery WHERE picture_category='signature' ORDER BY id DESC LIMIT 3");
                        if(mysqli_num_rows($sql) == 0){
                            echo '<div class="mt-5 mb-5"><h3 class="nene-font-color">Photo not found</h3></div>';
                        } else {
                            while ($row = mysqli_fetch_assoc($sql)) {
                                echo '
                                <div class="card card-color card-margin" style="width: 18rem;">
                                    <img src="/assets/images/gallery/signature/'.$row['picture_filename'].'.jpg" class="card-img-top" alt="'.$row['picture_name'].'">
                                    <div class="card-body text-center">
                                        <h5 class="card-title nene-font-color-2">'.$row['picture_name'].'</h5>
                                        <p class="card-text nene-font-color">'.$row['picture_detail'].'</p>
                                    </div>
                                    <ul class="list-group card-color text-center">
                                        <li class="list-group-item nene-font-color"></i><i class="lni-user"></i> '.$row['picture_owner'].' <i class="lni-user"></i></li>
                                </ul>
                                </div>
                                ';
                            }
                            echo '    
                            </div>                
                            <div class="text-center">
                            <button class="btn btn-menu" id="seemore1">Load more</button>
                            </div>';
                        }
                        ?>

                    
                </div>
            </div>
        </div>
    </section>
    <section class="section-margin section-blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="nene-font-color-2 mb-4 text-center">Photo Set</h1>
                    <div class="gallery-list">
                    <?php
                        $sql = mysqli_query($condb, "SELECT * FROM gallery WHERE picture_category='photo' ORDER BY id DESC LIMIT 3");
                        if(mysqli_num_rows($sql) == 0){
                            echo '<div class="mt-5 mb-5"><h3 class="nene-font-color">Photo not found</h3></div>';
                        } else {
                            while ($row = mysqli_fetch_assoc($sql)) {
                                echo '
                                <div class="card card-color card-margin" style="width: 18rem;">
                                    <img src="/assets/images/gallery/photo/'.$row['picture_filename'].'.jpg" class="card-img-top" alt="'.$row['picture_name'].'">
                                    <div class="card-body text-center">
                                        <h5 class="card-title nene-font-color-2">'.$row['picture_name'].'</h5>
                                        <p class="card-text nene-font-color">'.$row['picture_detail'].'</p>
                                    </div>
                                    <ul class="list-group card-color text-center">
                                        <li class="list-group-item nene-font-color"></i><i class="lni-user"></i> '.$row['picture_owner'].' <i class="lni-user"></i></li>
                                </ul>
                                </div>
                                ';
                                echo '       
                                </div>             
                                <div class="text-center">
                                <button class="btn btn-menu" id="seemore2">Load more</button>
                                </div>';
                            }
                        }
                        ?>
                    
                </div>
            </div>
        </div>
    </section>
    <section class="section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="nene-font-color-2 mb-4 text-center">Item Set</h1>
                    <div class="gallery-list">
                    <?php
                        $sql = mysqli_query($condb, "SELECT * FROM gallery WHERE picture_category='item' ORDER BY id DESC LIMIT 3");
                        if(mysqli_num_rows($sql) == 0){
                            echo '<div class="mt-5 mb-5"><h3 class="nene-font-color">Item not found</h3></div>';
                        } else {
                            while ($row = mysqli_fetch_assoc($sql)) {
                                echo '
                                <div class="card card-color card-margin" style="width: 18rem;">
                                    <img src="/assets/images/gallery/photo/'.$row['picture_filename'].'.jpg" class="card-img-top" alt="'.$row['picture_name'].'">
                                    <div class="card-body text-center">
                                        <h5 class="card-title nene-font-color-2">'.$row['picture_name'].'</h5>
                                        <p class="card-text nene-font-color">'.$row['picture_detail'].'</p>
                                    </div>
                                    <ul class="list-group card-color text-center">
                                        <li class="list-group-item nene-font-color"></i><i class="lni-user"></i> '.$row['picture_owner'].' <i class="lni-user"></i></li>
                                </ul>
                                </div>
                                ';
                            }
                        echo ' 
                        </div>                  
                        <div class="text-center">
                        <button class="btn btn-menu" id="seemore3">Load more</button>
                        </div>';
                        }
                        ?>
                    

                </div>
            </div>
        </div>
    </section>
    <?php echo $footer; ?>
    <?php echo $script; ?>
</body>

</html>