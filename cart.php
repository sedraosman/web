<?php
session_start();
include 'action.php';

$result = $conn->query("
    SELECT p.name, p.price, c.quantity, (p.price * c.quantity) AS total
    FROM cart c
    JOIN products p ON c.product_id = p.id
");

$total_amount = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">Your Shopping Cart</h2>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['name']); ?></td>
                    <td>$<?php echo number_format($row['price'], 2); ?></td>
                    <td><?php echo $row['quantity']; ?></td>
                    <td>$<?php echo number_format($row['total'], 2); ?></td>
                </tr>
                <?php $total_amount += $row['total']; ?>
                <?php $_SESSION['total_amount'] = $total_amount; ?>

            <?php endwhile; ?>
        </tbody>
    </table>
    <h4 class="text-end">Total Amount: $<?php echo number_format($total_amount, 2); ?></h4>
    <a href="index.php" class="btn btn-secondary mt-3">Continue Shopping</a>
    <a href="checkout.php" class="btn btn-success mt-3">CheckOut</a>

</div>
</body>
</html>






?>