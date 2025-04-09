<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Products | Kimia Lazeez</title>
    <!-- Stylesheets -->

    <link rel="shortcut icon" href="images/logo3.png" type="image/x-icon">
    <link rel="icon" href="images/logo3.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->


    <?php
    include('inc/header.php');
    ?>



</head>

<body class="hidden-bar-wrapper">

    <div class="page-wrapper">

        <?php
        include('inc/navbar.php');
        ?>

        <!-- Page Title -->
        <section class="page-title" style="background-image: url(images/header/product.jpg)">
            <!-- <div class="pattern-layer" style="background-image: url(images/background/pattern-7.png)"></div> -->
            <div class="auto-container">
                <h2>Products</h2>
                <ul class="page-breadcrumb">
                    <li><a href="index.php">home</a></li>
                    <li>Products</li>
                </ul>
            </div>
        </section>
        <!-- End Page Title -->



        <!-- Juice Section -->
        <!-- <section class="juice-section">
            <div class="section-text">yummy</div>
            <div class="pattern-layer" style="background-image: url(images/background/1.png)"></div>
            <div class="pattern-layer-two" style="background-image: url(images/resource/juice-glass.png)"></div>
            <div class="auto-container">
                <div class="row clearfix">

                   
                    <div class="image-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="image">
                                <img src="images/resource/juice.png" alt="" />
                            </div>
                        </div>
                    </div>

                   
                    <div class="content-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                         
                            <div class="sec-title">
                                <div class="title">Drink for Health</div>
                                <h2>Fresh Fruit <span class="theme_color">Juices</span></h2>
                                <div class="separate"></div>
                                <div class="text">Us percipit urbanitas referrentur ea. Mei at numquam molestiae intellegam. Ansed dictas accumsan. Nam sint atqui voluptatibus an, pro ne malis semper perpetua. Nam sint atqui voluptatibus an, pro ne malis semper perpetua.</div>
                            </div>
                            
                        </div>
                    </div>

                </div>
            </div>
        </section> -->
        <!-- End Juice Section -->



        <!-- News Section -->
        <section class="news-section">
            <div class="pattern-layer" style="background-image: url(images/background/Kimia-10.jpg)"></div>
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title centered">
                    <div class="title">Products</div>
                    <h2>Our Products</h2>
                    <div class="separate"></div>
                    <!-- <div class="text">Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, <br> vel scelerisque nisl consectetur et.</div> -->
                </div>
                <div class="row clearfix">

                    <!-- News Block -->
                    <div class="news-block col-lg-6 col-md-6 col-sm-12"><a href="spices.php">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image">
                                    <img style="min-height:380px;" src="images/background/bg36.jpg" alt="" />

                                </div>
                                <div class="lower-content">
                                    <a href="spices.php">
                                        <!-- <div class="category">Spices</div> -->
                                        <h6><a href="spices.php">Spices – The Essence of Flavor</a></h6>
                                        <br>
                                        <p>
                                            At Kimia Lazeez, we bring you the finest selection of spices, carefully sourced and expertly blended 
                                            to elevate the taste and aroma of your culinary creations. Spices have been at the heart of cooking 
                                            for centuries, not only enhancing flavors but also offering numerous health benefits.


                                        </p>
                                    </a>
                                    <br>
                                    <div class="button-box">
                                        <a href="spices.php" class="theme-btn btn-style-two clearfix"><span class="icon"></span>All Product</a>
                                    </div>
                                </div>


                            </div>
                        </a>
                    </div>

                    <!-- News Block -->
                    <div class="news-block col-lg-6 col-md-6 col-sm-12">

                        <a href="starch.php">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image">
                                    <img style="min-height:380px;" src="images/background/bg37.jpg" alt="" />

                                </div>
                                <div class="lower-content">
                                    <!-- <div class="category">Industrial Starch</div> -->
                                    <h6><a href="starch.php">Industrial Raw Materials – The Backbone of Food & Beverage Innovation</a></h6>
                                    <p>
                                        At Kimia Lazeez, we provide high-quality industrial raw materials for a wide range of food and industrial 
                                        applications. As a key ingredient in many processed foods, raw materials play a crucial role in texture, 
                                        stability, and functionality. Our raw materials solutions are carefully sourced and processed to meet the 
                                        highest industry standards.
                                    </p>



                                    <div class="button-box">
                                        <a href="starch.php" class="theme-btn btn-style-two clearfix"><span class="icon"></span>All Product</a>
                                    </div>

                                </div>


                            </div>
                        </a>


                    </div>

                </div>
            </div>

        </section>
        <!-- End News Section -->


        <?php
        include('inc/footer.php');
        ?>


    </div>
    <!--End pagewrapper-->

    <!-- Search Popup -->
    <!-- <div class="search-popup">
        <button class="close-search style-two"><span class="flaticon-multiply"></span></button>
        <button class="close-search"><span class="flaticon-up-arrow-1"></span></button>
        <form method="post" action="https://preview.designtone.xyz/html/foodily/blog.html">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div> -->
    <!-- End Header Search -->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/tilt.jquery.min.js"></script>
    <script src="js/jquery.paroller.min.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/nav-tool.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/script.js"></script>

</body>

<!-- Mirrored from preview.designtone.xyz/html/foodily/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Nov 2024 11:06:32 GMT -->

</html>