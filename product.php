<?php
$activePage = 'product';
$pageTitle = 'Products';
include 'header.php';
?>

    <div class="content-wrap">
        <h3 class="section-title">The Curated Collection</h3>
        <div class="products-grid">
            <div class="card">
                <div class="img-container"><img src="https://images.unsplash.com/photo-1592078615290-033ee584e267?auto=format&fit=crop&w=800&q=80" alt="Armchair"></div>
                <div class="card-info">
                    <h4>Royal Velvet Armchair</h4>
                    <p class="price">₹12,500</p>
                    <a href="order.php?item=Royal+Velvet+Armchair" class="buy-btn">Select Item</a>
                </div>
            </div>
            <div class="card">
                <div class="img-container"><img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=800&q=80" alt="Sofa"></div>
                <div class="card-info">
                    <h4>Metropolitan Sofa</h4>
                    <p class="price">₹55,000</p>
                    <a href="order.php?item=Metropolitan+Sofa" class="buy-btn">Select Item</a>
                </div>
            </div>
            <div class="card">
                <div class="img-container"><img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?auto=format&fit=crop&w=800&q=80" alt="Bed"></div>
                <div class="card-info">
                    <h4>Mahogany King Bed</h4>
                    <p class="price">₹72,000</p>
                    <a href="order.php?item=Mahogany+King+Bed" class="buy-btn">Select Item</a>
                </div>
            </div>
            <div class="card">
                <div class="img-container"><img src="https://images.unsplash.com/photo-1577140917170-285929fb55b7?auto=format&fit=crop&w=800&q=80" alt="Table"></div>
                <div class="card-info">
                    <h4>Scandinavian Oak Table</h4>
                    <p class="price">₹28,000</p>
                    <a href="order.php?item=Scandinavian+Oak+Table" class="buy-btn">Select Item</a>
                </div>
            </div>
            <div class="card">
                <div class="img-container"><img src="https://images.unsplash.com/photo-1533090161767-e6ffed986c88?auto=format&fit=crop&w=800&q=80" alt="Lamp"></div>
                <div class="card-info">
                    <h4>Modern Floor Lamp</h4>
                    <p class="price">₹4,200</p>
                    <a href="order.php?item=Modern+Floor+Lamp" class="buy-btn">Select Item</a>
                </div>
            </div>
            <div class="card">
                <div class="img-container"><img src="https://images.unsplash.com/photo-1581539250439-c96689b516dd?auto=format&fit=crop&w=800&q=80" alt="Chair"></div>
                <div class="card-info">
                    <h4>Industrial Desk Chair</h4>
                    <p class="price">₹8,000</p>
                    <a href="order.php?item=Industrial+Desk+Chair" class="buy-btn">Select Item</a>
                </div>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>
