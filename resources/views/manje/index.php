<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Foodie Restauarants</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <!-- <link href="css/font-awesome.min.css" rel="stylesheet"> -->

    <!-- <link href="css/animsition.min.css" rel="stylesheet"> -->
    <!-- <link href="css/animate.css" rel="stylesheet"> -->
    <!-- Custom styles for this template -->
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <script src="js/index.js" defer></script>
    <!-- <link href="footer.css" rel="stylesheet">  -->
</head>

<body class="home">
    <!--header starts-->
    <?php
    include("header.php")
    ?>
    <!-- data-image-src="images/img/main.jpg" -->
    <section class="hero">
        <div class="hero-inner">
            <div class="container text-center hero-text font-white">
                <h1>Food Order Website</h1>
                <h3 class="font-white space-xs">Top restaurants and specials in town</h3>
                <div class="banner-form">
                    <form class="form-inline">
                        <input type="text" class="input form-control form-control-lg" id="exampleInputAmount" placeholder="I would like to eat....">
                        <button onclick="location.href='dishes.php'" type="button" class="btn input ">Search food</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="popular">
        <div class="container">
            <div class="title m-b-30">
                <h2 class="title">Best Seller</h2>
                <p class="subTitle">Our top selling dishes this month</p>
            </div>
            <div class="row">
                <?php
                $query = "SELECT * FROM dishes";
                $result = mysqli_query($db, $query);
                if ($result) {
                    while ($r = mysqli_fetch_assoc($result)) {

                        echo '  <div class="col-xs-12 col-sm-6 col-md-4 food-item">
                        <div class="food-item-wrap box">
                            <div class="figure-wrap bg-image" data-image-src="admin/Res_img/dishes/' . $r['img'] . '">
                                <div class="distance"><i class="fa fa-pin"></i>190m</div>
                                <div class="stars rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                <div class="review"><a href="#">107 reviews</a> </div>
                            </div>
                            <div class="content">
                                <h5><a href="dishes.php?res_id=' . $r['rs_id'] . '">' . $r['title'] . '</a></h5>
                                <div class="product-name">' . $r['slogan'] . '</div>
                                <div class="price-btn-block"> <span class="price">$' . $r['price'] . '</span> <a href="dishes.php?res_id=' . $r['rs_id'] . '" class="btn ctaBtn  pull-right">Order Now</a> </div>
                            </div>
                            
                        </div>
                </div>';
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <section class="section aboutSection" id="about">
        <div class="sectionContent container">
            <div class="sectionIntro">
                <div class="headerInfo">
                    <h2 class="title">Our unique story since 1996</h2>
                    <p class="subTitle">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias eaque fugiat recusandae suscipit, ipsam ullam, voluptatum odio itaque quo perferendis cupiditate modi alias tempore harum.</p>
                </div>
            </div>
            <div class="sectionData">
                <div class="leftImg">
                    <img src="./images/img10.jpg" alt="Food Image">
                </div>
                <div class="rightImgs">
                    <div class="rightImg">
                        <img src="./images/img4.jpg" alt="Food Image">
                    </div>
                    <div class="rightImg">
                        <img src="./images/img1.jpg" alt="Food Image">
                    </div>
                    <div class="rightImg">
                        <img src="./images/img12.jpg" alt="Food Image">
                    </div>
                    <div class="rightImg">
                        <img src="./images/img5.jpg" alt="Food Image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="featured-restaurants">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="title-block pull-left">
                        <h4 class="title">Featured restaurants</h4>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="restaurants-filter pull-right">
                        <nav class="primary pull-left">
                            <ul>
                                <li><a href="#" class="active" data-filter="*">all</a> </li>
                                <?php
                                $query = "SELECT * FROM restaurant INNER JOIN res_category WHERE restaurant.c_id=res_category.c_id";
                                $result = mysqli_query($db, $query);
                                if (!$result) {
                                    exit(1);
                                }
                                while ($row = mysqli_fetch_assoc($result)) {;
                                    echo '<li><a href="#" data-filter=".' . $row['c_name'] . '"> ' . $row['c_name'] . '</a> </li>';
                                }
                                ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="restaurant-listing">

                    <?php
                    $result = mysqli_query($db, $query);
                    if (!$result) {
                        exit(1);
                    }
                    while ($rows = mysqli_fetch_assoc($result)) {
                        echo
                        '<div class="single-restaurant all ' . $rows['c_name'] . '">
                            <div class="restaurant-wrap">
                                <div class="row">
                                    <div class="row-head">
                                        <a class="restaurant-logo" href="dishes.php?res_id=' . $rows['rs_id'] . '"> <img src="admin/Res_img/' . $rows['image'] . '" alt="Restaurant logo"> </a>
                                    </div>
                                    <div class="row-content">
                                        <h5><a href="dishes.php?res_id=' . $rows['rs_id'] . '">' . $rows['title'] . '</a></h5> <span>' . $rows['address'] . '</span>
                                        <div class="bottom-part">
                                            <div class="cost"><i class="fa fa-check"></i> Min $ 10,00</div>
                                            <div class="mins"><i class="fa fa-motorcycle"></i> 30 min</div>
                                            <div class="ratings">
                                                <span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span> (122)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    }
                    ?>
                </div>
                <!-- end:Right Sidebar -->
            </div>
            <!-- end:row -->
        </div>
    </section>
    <!-- end:Container -->
    <!-- Featured restaurants ends -->
    <section class="app-section">
        <div class="app-wrap">
            <!-- <divs class="container"> -->
            <!-- <divs class="row text-img-block text-xs-left"> -->
            <div class="container">
                <div class="col-xs-12 col-sm-5 right-image text-center">
                    <figure> <img src="images/4.png" alt="Right Image" class="img-fluid"> </figure>
                </div>
                <div class="col-xs-12 col-sm-7 left-text">
                    <h3>Download Foodie App</h3>
                    <p>You can now find our menu on our mobile applition wherever you are. Make your orders we will find you!</p>
                    <div class="social-btns">
                        <a href="#" class="app-btn apple-button clearfix">
                            <div class="pull-left"><i class="fa fa-apple"></i> </div>
                            <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">App Store</span> </div>
                        </a>
                        <a href="#" class="app-btn android-button clearfix">
                            <div class="pull-left"><i class="fa fa-android"></i> </div>
                            <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">Play store</span> </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- </divs> -->
            <!-- </divs> -->
        </div>
    </section>

    <!-- FOOTER SECTION ----------------------- -->
    <section class="footerSection">
        <div class="contentContainer container">
            <div class="footerIntro">
                <div class="footerLogoDiv">
                    <h3 class="hotelName">
                        Foodie<span>..</span>
                    </h3>
                </div>
                <p>We are a trusted company in unity to provide quality service and food solution to the world around us.</p>

                <div class="footContactDetails">
                    <div class="info">
                        <div class="iconDiv"><i class='bx bx-mail-send'></i></div>
                        <span>support@gmail.com</span>
                    </div>

                    <div class="info">
                        <div class="iconDiv"><i class='bx bxs-phone-outgoing'></i></div>
                        <span>+234 (0) 345589000</span>
                    </div>

                    <div class="info">
                        <div class="iconDiv"><i class='bx bx-current-location'></i></div>
                        <span>Level 14 Willisn Street floor No.41 - Dubai.</span>
                    </div>
                </div>
            </div>

            <div class="linksDiv">
                <div class="footersectionTitle">
                    <h5>USEFUL LINKS</h5>
                </div>
                <ul>
                    <span>Careers</span>
                    <span>Offers</span>
                    <span>Stuff</span>
                    <span>Outlets</span>
                    <span>Affiliation</span>
                    <span>FAQs</span>
                </ul>
            </div>

            <div class="linksDiv">
                <div class="footersectionTitle">
                    <h5>OUR SERVICES</h5>
                </div>
                <ul>
                    <span>Online shopping</span>
                    <span>Free Home Delivery</span>
                    <span>Return Money</span>
                    <span>Delivery On Place</span>
                    <span>Wishlist</span>
                    <span>Discount</span>
                </ul>
            </div>

            <div class="linksDiv footerForm">
                <div class="footersectionTitle">
                    <h5> OUR NEWSLETTER</h5>
                </div>

                <form action="">
                    <label> Subscribe To Our Newsletter...</label>
                    <input type="text" placeholder="Name" required>
                    <input type="email" placeholder="Email" required>
                    <button type="submit">Submit</button>
                </form>
            </div>

        </div>
        <div class="copyrightDiv">
            &copy; Copyright 2022 - IsraTech
        </div>
    </section>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- <script src="js/jquery.min.js"></script> -->
    <!-- <script src="js/tether.min.js"></script> -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <!-- <script src="js/animsition.min.js"></script> -->
    <!-- <script src="js/bootstrap-slider.min.js"></script> -->
    <!-- <script src="js/jquery.isotope.min.js"></script> -->
    <!-- <script src="js/headroom.js"></script> -->
    <!-- <script src="js/foodpicky.min.js"></script> -->
    <!-- <script src="js/isratech.js"></script> -->

</body>

</html>