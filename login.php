<?php
session_start();
include 'action.php';

if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT id, password FROM users WHERE username=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION['username'] = $username;
            header("Location: index.php");
            exit;
        } else {
            echo "INVALID PASSWORD";
        }
    } else {
        header("Location: register.php");
        exit;
    }
}
?>

<?php include 'header.php'; ?>
</br>

<div style="margin-left: 520px;" class="login-container">
    <h2>Welcome</h2>
    <form action="login.php" method="post" class="login-form">
        <div class="input-group">
            <label for="username">Username</label>
            <div class="username-container">
                <input style="margin-left: -3px;margin-top: -3px;border :1px black solid;padding: 8px; width: 315px;" name="username" type="text" id="username" placeholder="username" required>
            </div>
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <div class="password-container">
                <input style="margin-left: -3px;border :1px black solid; margin-top: -3px; width: 315px;" name="password" type="password" id="password" placeholder="Password" required>
                <span class="toggle-password">&#128065;</span>
            </div>
        </div>
        <a href="#" class="forgot-password">Forgot password?</a>
        <button type="submit" class="login-button">LOGIN</button>
    </form>
    <div class="separator">
        <span>OR LOG IN WITH</span>
    </div>
    <div class="social-login">
        <button class="google-login">G</button>
    </div>
    <p class="terms">
        By signing in, you agree to H&S's <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>
    </p>
    <p class="new-account">
        New to H&S?
    </p>
    <button class="create-account"><a href="register.php">CREATE ACCOUNT</a></button>
</div>

<br /><br /><hr />
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
                        <p>Security Statement</p>
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