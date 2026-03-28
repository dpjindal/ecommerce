<?php include 'db.php'; ?>

<form method="POST">
    Name: <input type="text" name="name"><br>
    Price: <input type="text" name="price"><br>
    Image URL: <input type="text" name="image"><br>
    <button name="add">Add Product</button>
</form>

<?php
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $conn->query("INSERT INTO products (name,price,image) VALUES ('$name','$price','$image')");
    echo "Product Added!";
}
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