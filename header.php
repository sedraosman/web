<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include 'action.php';

$host = "localhost";
$username = "root";
$password = "";
$database = "ecommercedb";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$searchResults = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['q'])) {
    $term = trim($_POST['q']);
    if (!empty($term)) {
        $term = $conn->real_escape_string($term);
        $query = "SELECT id, name, img, description, price FROM products WHERE name LIKE '%$term%' OR description LIKE '%$term%'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $searchResults[] = $row;
            }
        }
    }
}

$conn->close();
?>

<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="css/style04.css" rel="stylesheet">
    
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style01.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>H&S</title>

    <style>
        .card{
            height: 450px;
        }
    
  
    </style>
</head>

<body>
    <div class="container-fluid div01">
        <div class="row">
            <div class="col-sm-7">
                <ul>
                    <li>
                        <a href="index.php"
                            style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-style: italic; font-size:22px;">H&S</a>
                    </li>
                    <li>
                        <form method="POST" action="index.php">
                            <div style="padding-left: 70px;" class="input-group">
                                <input style="width: 480px; padding-left: 10px;" type="text" name="q"
                                    placeholder="Search..." id="searchInput" required>
                                <button type="submit" class="btn btn-primary"><span
                                        class="material-symbols-outlined">search</span></button>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
            <div class="col-sm-5">
                <ul>
                    <li>
                        <span class="material-symbols-outlined" style="color: aliceblue;">account_circle</span>
                        <?php
                        if (isset($_SESSION['username'])) {
                            echo "<span style='color: aliceblue; padding-left: 5px;'>Welcome, " . $_SESSION['username'] . "</span>";
                            echo " <a href='logout.php' style='color: aliceblue; padding-left: 10px;'>Logout</a>";
                        } else {
                            echo "<a href='login.php' style='color: aliceblue; padding-left: 5px; text-decoration: none;'>Login</a>";
                            echo "<a href='register.php' style='color: aliceblue; padding-left: 5px; text-decoration: none;'>Register</a>";
                        }
                        ?>
                    </li>
                    <li>
                        <a href="cart.php"><span class="material-symbols-outlined"
                                style="color: aliceblue;">shopping_cart</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid div20">
        <div class="row">
            <div class="col-sm-8">
                <ul>
                    <li>
                        <select style="color:rgb(32, 34, 72);">
                            <option selected>Shop By Category</option>
                            <option>MOBILES & ACCS</option>
                            <option>TABLETS & ACCS</option>
                            <option>COMPUTING & ACCS</option>
                            <option>TV, AUDIO & VIDEO</option>
                            <option>GAMING & ACCS</option>
                            <option>SMART WATCHES</option>
                            <option>CAMERAS</option>
                        </select>
                    </li>
                    <li><a style="color:rgb(32, 34, 72);" href="index.php">Home</a></li>
                    <li><a style="color:rgb(32, 34, 72);" href="Discounts.php">Discounts</a></li>
                    <li><a style="color:rgb(32, 34, 72);" href="aboutus.php">About Us</a></li>
                    <li><a style="color:rgb(32, 34, 72);" href="Help.php">Help</a></li>
                </ul>
            </div>
        </div>
    </div>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <div class="modal fade show" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true"
            style="display: block; background: rgba(0,0,0,0.5);">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="searchModalLabel">Search Results</h5>
                        <a href="index.php" class="btn-close" aria-label="Close"></a>
                    </div>
                    <div class="modal-body">
                        <?php if (!empty($searchResults)): ?>
                            <div class="row">
                                <?php foreach ($searchResults as $result): ?>
                                    <div class="col-md-4 mb-4">
                                        <div class="card">
                                            <img class="imgb1" src="http://localhost/e-commerce/dashboard/pages/<?= htmlspecialchars($result['img']); ?>"
                                                class="card-img-top" alt="<?= htmlspecialchars($result['name']); ?>"
                                                style="width:100%; height:auto;">
                                            <div class="card-body">
                                                <h5 class="card-title"><?= htmlspecialchars($result['name']); ?></h5>
                                                <p class="card-text"><?= htmlspecialchars($result['description']); ?></p>
                                                <p><strong>Price:</strong> <?= htmlspecialchars($result['price']); ?> $</p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                            </div>
                        <?php else: ?>
                            <p class="text-danger">No results found.</p>
                        <?php endif; ?>
                    </div>
                    <div class="modal-footer">
                        <a href="index.php" class="btn btn-secondary">Close</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</body>

</html>