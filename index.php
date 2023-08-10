<?php
include "config.php";
$admin=new admin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Custom - Verse | Home</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

</head>

<body>
    <div class="catagories-side-menu">
        <!-- Close Icon -->
        <div id="sideMenuClose">
            <i class="ti-close"></i>
        </div>
        <!--  Side Nav  -->
        <?php include "sidenav.php" ?>
    </div>

    <div id="wrapper">

        <!-- ****** Header Area Start ****** -->
        <?php include "header.php" ?>
        <!-- ****** Header Area End ****** -->

        <!-- ****** Top Discount Area Start ****** -->
            <section class="top-discount-area d-md-flex align-items-center">
            <!-- Single Discount Area -->
            <div class="single-discount-area" style="background-color: black; color:white;">
                <h5>Free Shipping &amp; Returns</h5>
                <h6><a href="#">BUY NOW</a></h6>
            </div>
            <!-- Single Discount Area -->
            <div class="single-discount-area" style="background-image: url('img/bg-img/bggg1.AVIF');">
                <h5>20% Discount for all dresses</h5>
                <h6>USE CODE: CV100</h6>
            </div>
            <!-- Single Discount Area -->
            <div class="single-discount-area"style="background-color: black; color:white;">
                <h5>20% Discount for students</h5>
                <h6>USE CODE: CV20</h6>
            </div>
        </section>
        <!-- ****** Top Discount Area End ****** -->

        <!-- ****** Welcome Slides Area Start ****** -->
        <section class="welcome_area">
            <div class="welcome_slides owl-carousel">
                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(img/bg-img/back-img.JPG);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="bounceInDown" data-delay="0" data-duration="500ms">* Only today we offer free shipping</h6>
                                    <!-- <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Fashion Trends</h2> -->
                                    <a href="shop.php" class="btn karl-btn" data-animation="fadeInUp" data-delay="1s" data-duration="500ms">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(img/bg-img/bg-4.JPG);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Only today we offer free shipping</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Summer Collection</h2>
                                    <a href="#" class="btn karl-btn" data-animation="fadeInLeftBig" data-delay="1s" data-duration="500ms">Check Collection</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(img/bg-img/hello.JPG);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">personalize as you wish</h6>
                                    <a href="#" class="btn karl-btn" data-animation="fadeInRightBig" data-delay="1s" data-duration="500ms">Customize Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ****** Welcome Slides Area End ****** -->

        <!-- ****** Top Catagory Area Start ****** -->
        <section class="top_catagory_area d-md-flex clearfix">
            <!-- Single Catagory -->
            <div class="single_catagory_area d-flex align-items-center bg-img" style="background-image: url(img/bg-img/bg-0.JPEG);">
                <div class="catagory-content">
                    <h6>On Accesories</h6>
                    <h2>Sale 30%</h2>
                    <a href="shop.php" class="btn karl-btn">SHOP NOW</a>
                </div>
            </div>
            <!-- Single Catagory -->
            <div class="single_catagory_area d-flex align-items-center bg-img" style="background-image: url(img/bg-img/bag2.JPEG);">
                <div class="catagory-content">
                    <h6>in Bags excepting the new collection</h6>
                    <h2>Designer bags</h2>
                    <a href="shop.php" class="btn karl-btn">SHOP NOW</a>
                </div>
            </div>
        </section>
        <!-- ****** Top Catagory Area End ****** -->
       
       
        <!-- ****** New Arrivals Area Start ****** -->
        <section class="new_arrivals_area section_padding_100_0 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_heading text-center">
                            <h2>New Arrivals</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="karl-projects-menu mb-100">
                <div class="text-center portfolio-menu">

                <?php
                $st=$admin->ret("SELECT * FROM `category`");
                while($r=$st->fetch(PDO::FETCH_ASSOC)){
                    ?>

                    
                    <a href="index.php?ctid=<?php echo $r['ct_id']?>"><button class="btn active" data-filter="*"><?php echo $r['ct_name'] ?></button></a>
                   
                    <?php } ?>
                </div>
                
            </div>
            <div class="container">
                <div class="row karl-new-arrivals">
                <?php
                if(isset($_GET['ctid'])){
                    $ctid=$_GET['ctid'];
                                        $stmt=$admin->ret("SELECT * FROM `product` WHERE `ct_id`='$ctid'");
                                        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){?>



                    <!-- Single gallery Item Start -->
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig" data-wow-delay="0.2s">
                        <!-- Product Image -->
                        <div class="product-img">
                        <img src="admin/controller/<?php echo $row['p_image']?>" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview<?php echo $row['p_id'] ?>"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <h4>₹<?php echo $row['p_price']?></h4>
                            <h2><?php echo $row['p_name']?></h2>
                            <p><?php echo $row['p_description']?></p>
                            
                            <!-- Add to Cart -->
                            <a href="shop.php" class="add-to-cart-btn">ADD TO CART</a>
                        </div>
                    </div>


                    <!-- Single gallery Item Start -->
                    <!-- <div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig" data-wow-delay="0.3s"> -->
                        <!-- Product Image -->
                        <!-- <div class="product-img">
                            <img src="img/product-img/product-2.jpg" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                            </div>
                        </div> -->
                        <!-- Product Description -->
                        <!-- <div class="product-description">
                            <h4 class="product-price">$39.90</h4>
                            <p>Jeans midi cocktail dress</p> -->
                            <!-- Add to Cart -->
                            <!-- <a href="#" class="add-to-cart-btn">ADD TO CART</a>

                            
                        </div> -->
                         <!-- ****** Quick View Modal Area Start ****** -->
        
                        <div class="modal fade" id="quickview<?php echo $row['p_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                    <div class="modal-body">
                        <div class="quickview_body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-5">
                                        <div class="quickview_pro_img">
                                          <img src="admin/controller/<?php echo $row['p_image']?>" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-7">
                                        <div class="quickview_pro_des">
                                            <h4 class="title"><?php echo $row['p_name']?></h4>
                                            <div class="top_seller_product_rating mb-15">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <h4>₹<?php echo $row['p_price']?></h4>
                                            <p><?php echo $row['p_description']?></p>
                                            <a href="#">View Full Product Details</a>
                                        </div>
                                        <!-- Add to Cart Form -->
                                        <form class="cart" method="post">
                                            <div class="quantity">
                                                <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>

                                                <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">

                                                <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            </div>
                                            <a type="" href="shop.php" name="" value="5" class="cart-submit">Add to cart</a>
                                            <!-- Wishlist -->
                                            <div class="modal_pro_wishlist">
                                                <a href="wishlist.html" target="_blank"><i class="ti-heart"></i></a>
                                            </div>
                                            <!-- Compare -->
                                            <div class="modal_pro_compare">
                                                <a href="compare.html" target="_blank"><i class="ti-stats-up"></i></a>
                                            </div>
                                        </form>

                                        <div class="share_wf mt-30">
                                            <p>Share With Friend</p>
                                            <div class="_icon">
                                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- ****** Quick View Modal Area End ****** -->

        <?php } }else{ ?>
            <?php
               
                                        $stmt=$admin->ret("SELECT * FROM `product`");
                                        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){?>



                    <!-- Single gallery Item Start -->
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig" data-wow-delay="0.2s">
                        <!-- Product Image -->
                        <div class="product-img">
                        <img src="admin/controller/<?php echo $row['p_image']?>" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview<?php echo $row['p_id'] ?>"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <h4>₹<?php echo $row['p_price']?></h4>
                            <h2><?php echo $row['p_name']?></h2>
                            <p><?php echo $row['p_description']?></p>
                            
                            <!-- Add to Cart -->
                            <a href="shop.php" class="add-to-cart-btn">ADD TO CART</a>
                        </div>
                    </div>


                    <!-- Single gallery Item Start -->
                    <!-- <div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig" data-wow-delay="0.3s"> -->
                        <!-- Product Image -->
                        <!-- <div class="product-img">
                            <img src="img/product-img/product-2.jpg" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                            </div>
                        </div> -->
                        <!-- Product Description -->
                        <!-- <div class="product-description">
                            <h4 class="product-price">$39.90</h4>
                            <p>Jeans midi cocktail dress</p> -->
                            <!-- Add to Cart -->
                            <!-- <a href="#" class="add-to-cart-btn">ADD TO CART</a>

                            
                        </div> -->
                         <!-- ****** Quick View Modal Area Start ****** -->
        
                        <div class="modal fade" id="quickview<?php echo $row['p_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                    <div class="modal-body">
                        <div class="quickview_body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-5">
                                        <div class="quickview_pro_img">
                                          <img src="admin/controller/<?php echo $row['p_image']?>" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-7">
                                        <div class="quickview_pro_des">
                                            <h4 class="title"><?php echo $row['p_name']?></h4>
                                            <div class="top_seller_product_rating mb-15">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <h4>₹<?php echo $row['p_price']?></h4>
                                            <p><?php echo $row['p_description']?></p>
                                            <a href="#">View Full Product Details</a>
                                        </div>
                                        <!-- Add to Cart Form -->
                                        <form class="cart" method="post">
                                            <div class="quantity">
                                                <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>

                                                <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">

                                                <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            </div>
                                        <a href="shop.php"> <button type="submit" name="addtocart" value="5" class="cart-submit">Add to cart</button></a>
                                        </form>

                                        <div class="share_wf mt-30">
                                            <p>Share With Friend</p>
                                            <div class="_icon">
                                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- ****** Quick View Modal Area End ****** -->
<?php } } ?>
                    <!-- </div> -->

                    <!-- Single gallery Item Start -->
                    <!-- <div class="col-12 col-sm-6 col-md-4 single_gallery_item access wow fadeInUpBig" data-wow-delay="0.4s"> -->
                        <!-- Product Image -->
                        <!-- <div class="product-img">
                            <img src="img/product-img/product-3.jpg" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                            </div>
                        </div> -->
                        <!-- Product Description -->
                        <!-- <div class="product-description">
                            <h4 class="product-price">$39.90</h4>
                            <p>Jeans midi cocktail dress</p> -->
                            <!-- Add to Cart -->
                            <!-- <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                        </div> -->
                    <!-- </div> -->

                    <!-- Single gallery Item Start -->
                    <!-- <div class="col-12 col-sm-6 col-md-4 single_gallery_item shoes wow fadeInUpBig" data-wow-delay="0.5s"> -->
                        <!-- Product Image -->
                        <!-- <div class="product-img">
                            <img src="img/product-img/product-4.jpg" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                            </div>
                        </div> -->
                        <!-- Product Description -->
                        <!-- <div class="product-description">
                            <h4 class="product-price">$39.90</h4>
                            <p>Jeans midi cocktail dress</p> -->
                            <!-- Add to Cart -->
                            <!-- <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                        </div>
                    </div> -->

                    <!-- Single gallery Item Start -->
                    <!-- <div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig" data-wow-delay="0.6s"> -->
                        <!-- Product Image -->
                        <!-- <div class="product-img">
                            <img src="img/product-img/product-5.jpg" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                            </div>
                        </div> -->
                        <!-- Product Description -->
                        <!-- <div class="product-description">
                            <h4 class="product-price">$39.90</h4>
                            <p>Jeans midi cocktail dress</p> -->
                            <!-- Add to Cart -->
                            <!-- <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                        </div>
                    </div> -->

                    <!-- Single gallery Item -->
                    <!-- <div class="col-12 col-sm-6 col-md-4 single_gallery_item kids man wow fadeInUpBig" data-wow-delay="0.7s"> -->
                        <!-- Product Image -->
                        <!-- <div class="product-img"> -->
                            <!-- <img src="img/product-img/product-6.jpg" alt=""> -->
                            <!-- <div class="product-quicview"> -->
                                <!-- <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a> -->
                            <!-- </div> -->
                        <!-- </div> -->
                        <!-- Product Description -->
                        <!-- <div class="product-description"> -->
                            <!-- <h4 class="product-price">$39.90</h4> -->
                            <!-- <p>Jeans midi cocktail dress</p> -->
                            <!-- Add to Cart -->
                            <!-- <a href="#" class="add-to-cart-btn">ADD TO CART</a> -->
                        <!-- </div> -->
                    <!-- </div> -->
                </div>
            </div>
        </section>
        <!-- ****** New Arrivals Area End ****** -->

        <!-- ****** Offer Area Start ****** -->
        <section class="offer_area height-700 section_padding_100 bg-img" style="background-image: url(img/bg-img/hello.JPG);">
            <div class="container h-100">
                <div class="row h-100 align-items-end justify-content-end">
                    <div class="col-12 col-md-8 col-lg-6">
                            <a href="shop.php" class="btn karl-btn mt-30">Customize now</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ****** Offer Area End ****** -->
        
        <!-- ****** Footer Area Start ****** -->
        <?php include "footer.php" ?>
        <!-- ****** Footer Area End ****** -->
    </div>
    <!-- /.wrapper end -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>