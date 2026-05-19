<?php
$activePage = $activePage ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Furniture | <?php echo htmlspecialchars($pageTitle ?? 'Home'); ?></title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="script.js" defer></script>
</head>
<body>
    <nav>
        <h1>ELITE.</h1>
        <ul>
            <li><a href="index.php" class="<?php echo $activePage === 'home' ? 'active' : ''; ?>">Home</a></li>
            <li><a href="product.php" class="<?php echo $activePage === 'product' ? 'active' : ''; ?>">Collection</a></li>
            <li><a href="order.php" class="<?php echo $activePage === 'order' ? 'active' : ''; ?>">Order</a></li>
            <li><a href="contact.php" class="<?php echo $activePage === 'contact' ? 'active' : ''; ?>">Contact</a></li>
        </ul>
    </nav>
