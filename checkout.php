<?php include 'db.php'; ?>

<?php
$uid = $_SESSION['user_id'];

$result = $conn->query("SELECT p.price 
FROM cart c JOIN products p ON c.product_id=p.id 
WHERE c.user_id=$uid");

$total = 0;
while ($row = $result->fetch_assoc()) {
    $total += $row['price'];
}

$conn->query("INSERT INTO orders (user_id,total) VALUES ($uid,$total)");
$conn->query("DELETE FROM cart WHERE user_id=$uid");

echo "Order placed successfully!";
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>