<?php 
include 'db.php'; 
include 'header.php'; ?>

<h2>Products</h2>

<?php
$result = $conn->query("SELECT * FROM products");

while ($row = $result->fetch_assoc()) {
?>
    <div>
        <h3><?php echo $row['name']; ?></h3>
        <p>₹<?php echo $row['price']; ?></p>
        <a href="cart.php?add=<?php echo $row['id']; ?>">Add to Cart</a>
    </div>
<?php } ?>

<?php 
include 'footer.php'; 
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