<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/src/inc/global-config.php';
//下記のパス「demo」を変更
include_once $_SERVER['DOCUMENT_ROOT'].'/src/inc/config.php';

//ページ用の変数
$page_title = 'Sample page';
$page_description = '';
$page_keywords = '';
$page_shareurl = 'https://'.STORE_NAME.'.co.jp/'; 

?>
<!DOCTYPE html>
<html lang="ja">
<head>

<!-- meta -->
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/src/inc/meta.php';?>

<!-- link css -->
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/src/inc/css.php';?>

</head>

<body class="<?php echo STORE_NAME; ?> content">

<div class="wrapper" id="data" v-cloak>

<?php
/**
 * Header
 */
?>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/src/inc/header.php'; ?>


<?php
/**
 * Main contents
 */
?>
<main class="main-contents">
    
    <div class="container content__page">

        <section class="housework seasonal">
            <h2  v-for="(products, id) in fitter_productType" v-bind:key="id" v-infocus="'showElement'" v-if="products.product_type =='AV家電' ">
                {{products.product_type}}
            </h2>

            <div class="count__item">{{count_avAppliances}} Items</div>

            <div class="row product__body m-30">
                <div class="count_avAppliances col-lg-4 col-md-6 col-6 hidden p-30"  
                v-for="(products, index) in convertProduct.slice().reverse()" 
                v-if="products.product_type =='AV家電'"
                v-bind:key="index" v-infocus="'showElement'" >
                    <span class="new__mask">new <i class="line-run"></i></span>
                    <a :href="products.link">
                        <div class="hover_scale"><img v-bind:src= " '/assets/images/top/' + products.image" :alt="products.title"></div>
                        <h3 v-html = "brTxt(products.title)"></h3>
                    </a>
                </div>
            </div>
        </section>
    </div>
<router-view></router-view>
</main>


<?php
/**
 * Footer
 */
?>

<?php //include_once $_SERVER['DOCUMENT_ROOT'].'/src/inc/footer.php'; ?>

</div>
<div class="container">
    
<script type="text/x-template" id="contacts">
    <div>
        <h2>Component contacts</h2>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Phone</td>
                </tr>
            </thead>
            <tbody>
                <tr v-for="contact in contacts" :key="contact.id">
                    <td><router-link :to="'/contacts/' + contact.id">{{ contact.name }}</router-link></td>
                    <td>{{ contact.phone }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</script>

<script type="text/x-template" id="contact">
    <div>
        <h2>contact detail page</h2>
        <p>{{ contact.name }}</p>
        <p>{{ contact.phone }}</p>
        <p><router-link to="/">Back</router-link></p>
    </div>
</script>

</div>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/src/inc/js.php';?>

<!-- /Javascript -->
</body>
</html>
