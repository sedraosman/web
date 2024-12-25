<?php
include 'header.php';
include 'action.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>




<div class="container">
    <div class="carousel slide" id="bit" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-slide-to="0" class="active" data-bs-target="#bit" class="active">
            </button>
            <button type="button" data-bs-slide-to="1" data-bs-target="#bit">
            </button>
            <button type="button" data-bs-slide-to="2" data-bs-target="#bit">
            </button>
            <button type="button" data-bs-slide-to="3" data-bs-target="#bit">
            </button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/img1.png" alt="" width="100%" height="350px">
            </div>
            <div class="carousel-item">
                <img src="img/img2.jpg" alt="" width="100%" height="350px">
            </div>
            <div class="carousel-item">
                <img src="img/img3.jpg" alt="" width="100%" height="350px">
            </div>
            <div class="carousel-item">
                <img src="img/imgs.jpg" alt="" width="100%" height="350px">
            </div>
        </div>
        <button type="button" class="carousel-control-next" data-bs-target="#bit" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
        <button type="button" class="carousel-control-prev" data-bs-target="#bit" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"> </span>
        </button>
    </div>
</div>
</div>
<br />
<br />
<div class="container div03">
    <div class="row">
        <div class="col">
            <div class="card-bodey card01">
                <div class="s01">
                    <span class="material-symbols-outlined">24fps_select</span>
                </div>
                <h6>Express Delivery</h6>
            </div>
        </div>
        <div class="col">
            <div class="card-bodey card01">
                <div class="s01">
                    <span class="material-symbols-outlined">heap_snapshot_large</span>
                </div>
                <h6>Clearance deals</h6>
            </div>
        </div>
        <div class="col">
            <div class="card-bodey card01">
                <div class="s01">
                    <span class="material-symbols-outlined">featured_seasonal_and_gifts</span>
                </div>
                <h6>Open Units</h6>
            </div>
        </div>
        <div class="col">
            <div class="card-bodey card01">
                <div class="s01">
                    <span class="material-symbols-outlined">location_on</span>
                </div>
                <h6>Locate Us</h6>
            </div>
        </div>
    </div>
</div>
<br />
<br />
<br />
<div class="container div04">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-sm-1">
                    <img class="img001" src="img/c1.jpg">
                    <span>BuyiPhones</span>
                </div>
                <div class="col-sm-1">
                    <img class="img001" src="img/c2.jpg"> <span style="margin-left: 9px;">Mobiles</span>
                </div>
                <div class="col-sm-1">
                    <img class="img001" src="img/c3.jpg"> <span style="margin-left: 8px;">Laptops</span>
                </div>
                <div class="col-sm-1">
                    <img class="img001" src="img/c4.jpg"> <span style="margin-left:-12px;">SmartWatches</span>
                </div>
                <div class="col-sm-1">
                    <img class="img001" src="img/c5.jpg"> <span style="margin-left: 12px;">Tablets</span>
                </div>
                <div class="col-sm-1">
                    <img class="img001" src="img/c6.jpg"> <span style="margin-left: 10px;">Gaming</span>
                </div>
                <div class="col-sm-1">
                    <img class="img001" src="img/c7.jpg"> <span style="margin-left: -1px;">Televisions</span>
                </div>
                <div class="col-sm-1">
                    <img class="img001" src="img/c8.jpg"> <span style="margin-left: -9px;">AudioDevices</span>
                </div>
                <div class="col-sm-1">
                    <img class="img001" src="img/c9.jpg"> <span style="margin-left: -8px;">Home&Kitchen</span>
                </div>
                <div class="col-sm-1">
                    <img class="img001" src="img/c10.jpg"> <span style="margin-left: 12px;">Kamera</span>
                </div>
                <div class="col-sm-1">
                    <img class="img001" src="img/c11.jpg"> <span style="margin-left: -2px;">PersonalCare</span>
                </div>
            </div>
        </div>
    </div>
</div>
<br />
<img class="img" src="img/cs1.png" style="height: 400px; width: 1400px; margin-left: 40px; margin-bottom: 30px;">

<h4> Top Products</h4></br>
<div style="margin-bottom: 60px;" class="container div06">
    <div class="row">


        <?php



        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                echo "<div class='col-sm-3'>";
                echo " <div style='border: none;' class='card card05'>";
                echo " <div class='card-bodey'>";
                echo '<img src="http://localhost/e-commerce/dashboard/pages/' . $row["img"] . '"  class="img02">';
                echo "<h6 style='padding-right: 190px; color: rgb(35, 138, 222); font-weight:500;'>44% OFF</h6>";
                echo "   <p class='p03'>" . $row['description'] . "</p>";
                echo "
              <div style='font-size: small; padding-left: 25px;'> 
                  <span class='fa fa-star'>
                  <span class='fa fa-star'>
                  <span class='fa fa-star'>
                  <span class='fa fa-star'>
                  <span style='color: rgb(198, 198, 198);' class='fa fa-star'></span> 3.8</div> ";

                echo " <h6 style='font-size:small; padding-right: 85px;' class='product-price'>AED " . $row['special_price'] . " <del style='color:rgb(198, 198, 198);' class='product-old-price'>" . $row['price'] . "</del></h6>";

                echo "<form method='post' action='add_to_cart.php' class='mt-2'>
            <input type='hidden' name='product_id' value='" . $row['id'] . "'>
            <input type='number' name='quantity' class='form-control mb-2' placeholder='Quantity' min='1' value='1' required>
            <button type='submit' class='btn btn-warning w-100' >Add to  Cart</button>
            
            </form>";








                echo "</div>";
                echo "</div>";
                echo "</div>";

            }
        }
        ?>





    </div>
</div>
<h4 style="padding-left: 20px;">High on demand</h4>
<div style="margin-bottom: 60px; margin-top: 60px;" class="container div06">
    <div class="row">
        <div class="col-sm-3">
            <div style="border: none;" class="card card05">
                <div class="card-bodey">
                    <img src="img/p9.png" class="img02">
                    <h6 style="padding-right: 190px; color: rgb(35, 138, 222); font-weight:500;">60% OFF</h6>
                    <p class="p03">Lenovo LP40 In-Ear True Wireless Earbuds White</p>
                    <div style="font-size: small; padding-left: 25px;">
                        <span class="fa fa-star">
                            <span class="fa fa-star">
                                <span class="fa fa-star">
                                    <span class="fa fa-star">
                                        <span style="color: rgb(198, 198, 198);" class="fa fa-star"></span> 3.7
                    </div>
                    </br>
                    <h6 style="font-size:small; padding-right: 120px;" class="product-price">AED 40.00 <del
                            style="color:rgb(198, 198, 198);" class="product-old-price">AED 99.75</del></h6>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div style="border: none;" class="card card05">
                <div class="card-bodey">
                    <img src="img/p10.png" class="img02">
                    <h6 style="padding-right: 190px; color: rgb(35, 138, 222); font-weight:500;">49% OFF</h6>
                    <p class="p03">HiFuture GOPRO Smart Watch Sliver</p>
                    <div style="font-size: small; padding-left: 25px;">
                        <span class="fa fa-star">
                            <span class="fa fa-star">
                                <span class="fa fa-star">
                                    <span class="fa fa-star">
                                        <span class="fa fa-star"></span> 4.6
                    </div>
                    </br>
                    <h6 style="font-size:small; padding-right: 105px;" class="product-price">AED 179.00 <del
                            style="color:rgb(198, 198, 198);" class="product-old-price">AED 349.00</del></h6>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div style="border: none;" class="card card05">
                <div class="card-bodey">
                    <img src="img/p11.png" class="img02">
                    <h6 style="padding-right: 190px; color: rgb(35, 138, 222); font-weight:500;">40% OFF</h6>
                    <p class="p03">Protect YCX19 WLS Power Bank 5000mAh Black</p>
                    <div style="font-size: small; padding-left: 25px;">
                        <span class="fa fa-star">
                            <span class="fa fa-star">
                                <span class="fa fa-star">
                                    <span class="fa fa-star">
                                        <span style="color: rgb(198, 198, 198);" class="fa fa-star"></span> 4.3
                    </div>
                    <br />
                    <h6 style="font-size:small; padding-right: 105px;" class="product-price">AED 149.00 <del
                            style="color:rgb(198, 198, 198);" class="product-old-price">AED 249.00</del></h6>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div style="border: none;" class="card card05">
                <div class="card-bodey">
                    <img src="img/p14.png" class="img02">
                    <h6 style="padding-right: 190px; color: rgb(35, 138, 222); font-weight:500;">33% OFF</h6>
                    <p class="p03">Apple iPhone 15 Pro Max (256GB) – Natural Titanium</p>
                    <div style="font-size: small; padding-left: 25px;">
                        <span class="fa fa-star">
                            <span class="fa fa-star">
                                <span class="fa fa-star">
                                    <span class="fa fa-star">
                                        <span style="color: rgb(198, 198, 198);" class="fa fa-star"></span> 4.2
                    </div>
                    <br />
                    <h6 style="font-size:small; padding-right: 95px;" class="product-price">AED 849.00 <del
                            style="color:rgb(198, 198, 198);" class="product-old-price">AED 1,258.95</del></h6>
                </div>
            </div>
        </div>
    </div>
</div>
<br />
<h4 style="padding-left: 20px;">Deals of the Day</h4>
<div style="margin-bottom: 60px; margin-top: 60px;" class="container div06">
    <div class="row">
        <div class="col-sm-3">
            <div style="border: none;" class="card card05">
                <div class="card-bodey">
                    <img src="img/p5.png" class="img02">
                    <h6 style="padding-right: 190px; color: rgb(35, 138, 222); font-weight:500;">56% OFF</h6>
                    <p class="p03">Microsoft Surface Go Signature Type Cover Burgundy</p>
                    <div style="font-size: small; padding-left: 25px;">
                        <span class="fa fa-star">
                            <span class="fa fa-star">
                                <span class="fa fa-star">
                                    <span class="fa fa-star">
                                        <span style="color: rgb(198, 198, 198);" class="fa fa-star"></span> 3.6
                    </div>
                    </br>
                    <h6 style="font-size:small; padding-right: 110px;" class="product-price">AED 218.00 <del
                            style="color:rgb(198, 198, 198);" class="product-old-price">AED 498.75</del></h6>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div style="border: none;" class="card card05">
                <div class="card-bodey">
                    <img src="img/p6.png" class="img02">
                    <h6 style="padding-right: 190px; color: rgb(35, 138, 222); font-weight:500;">47% OFF</h6>
                    <p class="p03">Kenwood KHealthyFry Digital Air Fryer, 1.7 KG, 1500 Watt, Black</p>
                    <div style="font-size: small; padding-left: 25px;">
                        <span class="fa fa-star">
                            <span class="fa fa-star">
                                <span class="fa fa-star">
                                    <span class="fa fa-star">
                                        <span class="fa fa-star"></span> 4.8
                    </div>
                    </br>
                    <h6 style="font-size:small; padding-right: 105px;" class="product-price">AED 227.00 <del
                            style="color:rgb(198, 198, 198);" class="product-old-price">AED 429.00</del></h6>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div style="border: none;" class="card card05">
                <div class="card-bodey">
                    <img src="img/p7.png" class="img02">
                    <h6 style="padding-right: 190px; color: rgb(35, 138, 222); font-weight:500;">27% OFF</h6>
                    <p class="p03">Tornado 55UA1410E 4K LED Smart Television 55inch (2024 Model)</p>
                    <div style="font-size: small; padding-left: 25px;">
                        <span class="fa fa-star">
                            <span class="fa fa-star">
                                <span class="fa fa-star">
                                    <span class="fa fa-star">
                                        <span style="color: rgb(198, 198, 198);" class="fa fa-star"></span> 4.7
                    </div>
                    <br />
                    <h6 style="font-size:small; padding-right: 105px;" class="product-price">AED 190.00 <del
                            style="color:rgb(198, 198, 198);" class="product-old-price">AED 262.00</del></h6>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div style="border: none;" class="card card05">
                <div class="card-bodey">
                    <img src="img/p8.png" class="img02">
                    <h6 style="padding-right: 190px; color: rgb(35, 138, 222); font-weight:500;">26% OFF</h6>
                    <p class="p03">Samsung Galaxy Tab S9 FE SM-X516BZAEMEA Tablet – WiFi+5G</p>
                    <div style="font-size: small; padding-left: 25px;">
                        <span class="fa fa-star">
                            <span class="fa fa-star">
                                <span class="fa fa-star">
                                    <span class="fa fa-star">
                                        <span style="color: rgb(198, 198, 198);" class="fa fa-star"></span> 4.4
                    </div>
                    <br />
                    <h6 style="font-size:small; padding-right: 105px;" class="product-price">AED 234.90 <del
                            style="color:rgb(198, 198, 198);" class="product-old-price">AED 319.00</del></h6>
                </div>
            </div>
        </div>
    </div>
    <br />
    <h4 style="padding-left: 20px;">Top Brands</h4>

    <div class="container div03">
        <div class="row">
            <div class="col-sm-4">
                <a href="#">
                    <img src="img/iphone.png" class="img06">
                </a>
            </div>
            <div class="col-sm-4">
                <a href="#">

                    <img src="img/SAMSUNG.png" class="img06"></a>
            </div>
            <div class="col-sm-4">
                <a href="#">

                    <img src="img/HUAWEI.jpg" class="img06"></a>
            </div>
            <div class="col-sm-4">
                <a href="#">
                    <img src="img/lg.webp" class="img06">
                </a>
            </div>
            <div class="col-sm-4">
                <a href="#">
                    <img src="img/dyson.webp" class="img06">
                </a>
            </div>
            <div class="col-sm-4">
                <a href="#">
                    <img src="img/asus.webp" class="img06">
                </a>
            </div>
        </div>
    </div>

    <div class="container divs">
        <div class="row">
            <div class="col-sm-12">
                <div class="carousel slide" id="DG01">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-slide-to="0" data-bs-target="#DG01" class="active">

                        </button>
                        <button type="button" data-bs-slide-to="1" data-bs-target="#DG01">

                        </button>


                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <ul>

                                <li>
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="img/slidc2.jpeg" class="imgs01">
                                            <p class="ps02">34 % off</p>
                                            <p>Eufy Robovac L35 Hybrid+ Robotic<br> Vacuum Cleaner Black T2182K11</p>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"> 2.3</span>
                                            <p class="ps03"> AED 2,170.00</p>
                                            <p>AED 1,170.00</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="img/slidc3.png" class="imgs01">

                                            <p class="ps02">40 % off</p>
                                            <p>Eufy Robovac L35 Hybrid+ Robotic<br> Vacuum Cleaner Black T2182K11</p>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"> 3.3</span>
                                            <p class="ps03"> AED 2,170.00</p>
                                            <p>AED 1,170.00</p>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="img/slidc5.jpeg" class="imgs01">
                                            <p class="ps02">44 % off</p>
                                            <p>Eufy Robovac L35 Hybrid+ Robotic<br> Vacuum Cleaner Black T2182K11</p>
                                            <br>
                                            <p class="ps03"> AED 2,100.00</p>
                                            <p>AED 1,000.00</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="carousel-item">
                            <ul>
                                <li>
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="img/slidc4.png" class="imgs01">
                                            <p class="ps02">54 % off</p>
                                            <p>Eufy Robovac L35 Hybrid+ Robotic<br> Vacuum Cleaner Black T2182K11</p>
                                            <br>

                                            <p class="ps03"> AED 3,170.00</p>
                                            <p>AED 1,300.00</p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="img/slidc6.jpeg" class="imgs01">
                                            <p class="ps02">34 % off</p>
                                            <p>Eufy Robovac L35 Hybrid+ Robotic<br> Vacuum Cleaner Black T2182K11</p>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"> 2.3</span>
                                            <p class="ps03"> AED 2,170.00</p>
                                            <p>AED 1,170.00</p>
                                        </div>
                                    </div>
                                </li>
                                <ul>
                                    <li>
                                        <a href="productsdetails.php">
                                            <div class="card">
                                                <div class="card-body">
                                                    <img src="img/slidc7.jpeg" class="imgs01">
                                                    <p class="ps02">54 % off</p>
                                                    <p>Eufy Robovac L35 Hybrid+ Robotic<br> Vacuum Cleaner Black
                                                        T2182K11</p>
                                                    <br>

                                                    <p class="ps03"> AED 3,170.00</p>
                                                    <p>AED 1,300.00</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>


                                </ul>

                        </div>

                    </div>
                    <button type="button" class="carousel-control-next" data-bs-target="#DG01" data-bs-slide="next">
                        <span class="carousel-control-next-icon span01"></span>
                    </button>
                    <button type="button" class="carousel-control-prev" data-bs-target="#DG01" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon span01">

                        </span>
                    </button>

                </div>
            </div>
        </div>
    </div>


    <img style="height: 400px; margin-left: 10px; width: 1300px;" src="img/g1.png">
    <hr />
    <div id="newsletter" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="newsletter">
                        <p>Sign Up for the <strong>NEWSLETTER</strong></p>
                        <form>
                            <input class="input" type="email" placeholder="Enter Your Email">
                            <button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
                        </form>
                        <br />
                    </div>
                </div>
            </div>
        </div>
        <br />
    </div>


    <div class="container-fluid div02">
        <div class="row">
            <div class="col-sm-12">
                <ul>
                    <li>
                        <a href="#"
                            style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Customer
                            Services</a>
                        <p>About us</p>
                        <p>Testimonials</p>
                        <p>Contact Us</p>
                    </li>
                    <li>
                        <a href="#"
                            style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Information</a>
                        <p>Payment&Shipping</p>
                        <p>Policies</p>
                        <p>FAQs</p>
                    </li>
                    <li>
                        <a href="#"
                            style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Links</a>
                        <p>Products</p>
                        <p>Brands</p>
                        <p>Shop Now</p>
                    </li>
                    <li>
                        <a href="#"
                            style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Terms&Conditions</a>
                        <p>Terms&Conditions</p>
                        <p>Privacy Policy</p>
                        <p>Security Statement</p>
                    </li>
                    <li>
                        <a href="#"
                            style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Contact
                            Us</a>
                        <p>Phone: +905343164664</p>
                        <p>Email: hale@info.com</p>
                        <p>Address: Istanbul</p>
                    </li>
                    <ul>
            </div>
        </div>
    </div>
    </body>

    </html>
