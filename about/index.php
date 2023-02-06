<?php

$page_title = 'About';

//HOME
$n_menu_home = '';
$menu_home = '';
//ABOUT
$n_menu_about = 'nav-active';
$menu_about = 'menu-active';
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
?>
<!DOCTYPE html>
<html lang="en">

<?php echo $head; ?>

<body>
    <?php echo $navbar; ?>
    <section class="section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-pic-con">
                    <img class="about-pic" src="/assets/images/about/nene.jpg" alt="nene about">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mt-5 about-nene">
                    <h1 class="nene-font-color-2 mb-4">Thanida Akarawuthi</h1>
                    <h5 class="nene-font-color-2">Nickname : <span class="nene-font-color small-font">Nene (Form Shin-chan Cartoon)</span></h5>
                    <h5 class="nene-font-color-2">Other name : <span class="nene-font-color small-font">NaeNae, Name </span></h5>
                    <h5 class="nene-font-color-2">Date of birth : <span class="nene-font-color small-font">14 March 2001</span></h5>
                    <h5 class="nene-font-color-2">Height : <span class="nene-font-color small-font">167.5 CM</span></h5>
                    <h5 class="nene-font-color-2">Weight : <span class="nene-font-color small-font">41 KG</span></h5>
                    <h5 class="nene-font-color-2">Province : <span class="nene-font-color small-font">Bangkok, Thailand</span></h5>
                    <h5 class="nene-font-color-2">Like : <span class="nene-font-color small-font">Doraemon, Dog(Jumpu), Cat(Bolona)</span></h5>
                    <h5 class="nene-font-color-2">Blood Group : <span class="nene-font-color small-font">Type B</span></h5>
                    <h5 class="nene-font-color-2">Hobby : <span class="nene-font-color small-font">Play Game, Watch football, Listen to music</span></h5>
                    <h5 class="nene-font-color-2">Motto : <span class="nene-font-color small-font">Failure is simply the opportunity to begin again this time more intelligently.</span></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="nene-font-color">Nene BNK48 Thailand Fanclub Group</h2>
                    <div class="about-pic-con mt-5 mb-5">
                    <img class="nene-home-pic" src="/assets/images/about/" alt="OPEN CHAT">
                    </div>
                    <a class="btn btn-line" href="https://line.me/ti/g2/Hmgvo-1C6KHhuXyEXyX5K4xFfnArynMmnjPtOQ" target="_blank">Line Open Chat</a>
                </div>
            </div>
        </div>
    </section>
    <?php echo $footer; ?>
    <?php echo $script; ?>
</body>

</html>