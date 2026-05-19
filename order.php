<?php
$activePage = 'order';
$pageTitle = 'Order';
$message = '';
$selectedItem = isset($_GET['item']) ? trim($_GET['item']) : '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $item = trim($_POST['item'] ?? '');
    $address = trim($_POST['address'] ?? '');

    if ($name && $email && $item && $address) {
        $message = "Thank you, " . htmlspecialchars($name) . ". Your order for " . htmlspecialchars($item) . " has been received. We will contact you at " . htmlspecialchars($email) . ".";
    } else {
        $message = 'Please complete all required fields before submitting.';
    }
}

include 'header.php';
?>

    <div class="content-wrap" style="max-width: 600px;">
        <h3 class="section-title">Place Your Order</h3>
        <form id="orderForm" method="post" action="order.php">
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <select name="item" required>
                <option value="">Choose Furniture Piece</option>
                <option value="Royal Velvet Armchair"<?php echo $selectedItem === 'Royal Velvet Armchair' ? ' selected' : ''; ?>>Royal Velvet Armchair</option>
                <option value="Metropolitan Sofa"<?php echo $selectedItem === 'Metropolitan Sofa' ? ' selected' : ''; ?>>Metropolitan Sofa</option>
                <option value="Mahogany King Bed"<?php echo $selectedItem === 'Mahogany King Bed' ? ' selected' : ''; ?>>Mahogany King Bed</option>
                <option value="Scandinavian Oak Table"<?php echo $selectedItem === 'Scandinavian Oak Table' ? ' selected' : ''; ?>>Scandinavian Oak Table</option>
                <option value="Modern Floor Lamp"<?php echo $selectedItem === 'Modern Floor Lamp' ? ' selected' : ''; ?>>Modern Floor Lamp</option>
                <option value="Industrial Desk Chair"<?php echo $selectedItem === 'Industrial Desk Chair' ? ' selected' : ''; ?>>Industrial Desk Chair</option>
            </select>
            <textarea name="address" rows="4" placeholder="Delivery Address" required></textarea>
            <div class="form-message" style="display:<?php echo $message ? 'block' : 'none'; ?>;">
                <?php echo htmlspecialchars($message); ?>
            </div>
            <button type="submit" class="cta-btn" style="width: 100%;">Confirm Reservation</button>
        </form>
    </div>

<?php include 'footer.php'; ?>
