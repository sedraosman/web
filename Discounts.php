<?php
 include 'header.php' ;
 include 'action.php';


 $sql = "SELECT * FROM products";
 $result = $conn->query($sql);
?>
   
        <div id="hot-deal" class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="hot-deal">
                            <ul class="hot-deal-countdown">
                                <li>
                                    <div>
                                        <h3>10%</h3>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <h3>20%</h3>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <h3>30%</h3>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <h3>40%</h3>
                                    </div>
                                </li>
                            </ul>
                            <h2 class="text-uppercase">hot deal this week</h2>
                            <p>New Collection Up to 30% OFF</p>
                            <a class="btn btn-primary">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php



if($result->num_rows>0){
    while ($row =$result->fetch_assoc()){
        
echo "<div class='col-sm-4'>";
echo " <div style='border: none;' class='card card05'>"  ;  
        echo " <div class='card-bodey'>" ;
        echo '<img src="http://localhost/e-commerce/dashboard/pages/' .$row["img"].'"  class="img02">'  ;
      echo "<h6 style='padding-right: 190px; color: rgb(35, 138, 222); font-weight:500;'>44% OFF</h6>"; 
           echo"   <p class='p03'>".$row['description']."</p>";
           echo "
              <div style='font-size: small; padding-left: 25px;'> 
                  <span class='fa fa-star'>
                  <span class='fa fa-star'>
                  <span class='fa fa-star'>
                  <span class='fa fa-star'>
                  <span style='color: rgb(198, 198, 198);' class='fa fa-star'></span> 3.8</div> ";
         
            echo" <h6 style='font-size:small; padding-right: 85px;' class='product-price'>AED ".$row['special_price']." <del style='color:rgb(198, 198, 198);' class='product-old-price'>".$row['price']."</del></h6>";
       echo "</div>";
 echo "</div>";
  echo "</div>";

    }
}
            ?>
    
     
        </div>
    </div>
        <br />
    <div class="container-fluid div02">
        <div class="row">
            <div class="col-sm-12">
                <ul>
                    <li>
                        <a href="#" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Customer Services</a>
                        <p>About us</p>
                        <p>Testimonials</p>
                        <p>Contact Us</p>
                    </li>
                    <li>
                        <a href="#" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Information</a>
                        <p>Payment&Shipping</p>
                        <p>Policies</p>
                        <p>FAQs</p>
                    </li>
                    <li>
                        <a href="#" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Links</a>
                        <p>Products</p>
                        <p>Brands</p>
                        <p>Shop Now</p>
                    </li>
                    <li>
                        <a href="#" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Terms&Conditions</a>
                        <p>Terms&Conditions</p>
                        <p>Privacy Policy</p>
                        <p>Secuirty Statement</p>
                    </li>
                    <li>
                        <a href="#" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Contact Us</a>
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