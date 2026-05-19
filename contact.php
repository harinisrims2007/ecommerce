<?php
$activePage = 'contact';
$pageTitle = 'Contact';
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $text = trim($_POST['message'] ?? '');

    if ($name && $email && $text) {
        $entry = sprintf("%s | %s | %s | %s\n", date('Y-m-d H:i:s'), $name, $email, str_replace(["\r\n", "\n"], ' ', $text));
        file_put_contents('messages.txt', $entry, FILE_APPEND | LOCK_EX);
        $message = "Thank you, " . htmlspecialchars($name) . ". We received your message and will reply soon.";
    } else {
        $message = 'Please complete all required fields before sending your message.';
    }
}

include 'header.php';
?>

    <div class="content-wrap">
        <h3 class="section-title">Contact Support</h3>
        <div class="contact-box">
            <h4>Elite Flagship Store</h4>
            <p style="margin: 20px 0;">21, Designer's Square, Chennai, Tamil Nadu</p>
            <p><b>Phone:</b> +91 98765 43210</p>
            <p><b>Email:</b> hello@elitefurniture.com</p>
            <hr>
            <p>Hours: Mon - Sat (9:00 AM - 8:00 PM)</p>
        </div>
        <form id="contactForm" method="post" action="contact.php">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" rows="5" placeholder="How can we help you?" required></textarea>
            <div class="form-message" style="display:<?php echo $message ? 'block' : 'none'; ?>;">
                <?php echo htmlspecialchars($message); ?>
            </div>
            <button type="submit" class="cta-btn" style="width: 100%;">Send Message</button>
        </form>
    </div>

<?php include 'footer.php'; ?>
