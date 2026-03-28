<?php include 'db.php'; ?>

<?php
if (isset($_GET['add'])) {
    $pid = $_GET['add'];
    $uid = $_SESSION['user_id'];

    $conn->query("INSERT INTO cart (user_id,product_id,quantity) VALUES ($uid,$pid,1)");
}

$result = $conn->query("SELECT p.name,p.price,c.quantity 
FROM cart c JOIN products p ON c.product_id=p.id 
WHERE c.user_id=".$_SESSION['user_id']);

$total = 0;

while ($row = $result->fetch_assoc()) {
    echo $row['name']." - ₹".$row['price']."<br>";
    $total += $row['price'];
}

echo "<h3>Total: ₹$total</h3>";
?>

<a href="checkout.php">Checkout</a>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>