<?php
session_start();
include 'action.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $total_amount = $_POST['total_amount'];

    $stmt = $conn->prepare("INSERT INTO orders (name, email, address, city, phone, total_amount) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssd", $name, $email, $address, $city, $phone, $total_amount);
    $stmt->execute();

    header("Location: success.php");
    exit();
}

$total_amount = isset($_SESSION['total_amount']) ? $_SESSION['total_amount'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">Checkout</h2>
    <form action="checkout.php" method="POST">
        <div class="row">
            <div class="col-md-6">
                <h5>Shipping Information</h5>
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" id="address" required>
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" name="city" id="city" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" required>
                </div>
            </div>
            <div class="col-md-6">
                <h5>Order Summary</h5>
                <div class="p-3 border bg-light">
                    <p class="mb-2">TOTAL AMOUNT: <strong>$<?php echo number_format($total_amount, 2); ?></strong></p>
                    <input type="hidden" name="total_amount" value="<?php echo $total_amount; ?>">
                </div>
                <button type="submit" class="btn btn-success w-100 mt-3">Place Order</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
