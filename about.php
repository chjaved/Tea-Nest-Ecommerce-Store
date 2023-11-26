<?php 
    include 'C:\xampp\htdocs\WebSemesterProject/connection.php';
?>
<style type="text/css">
 <?php include 'Web.css'; ?>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <title>Tea Nest - about us page</title>
</head>
<body>
    <?php include 'C:\xampp\htdocs\WebSemesterProject/header.php'; ?>
    <div class="main">
        <div class="banner">
            <h1>about us</h1>
        </div>
        <div class="about">
            <div class="row">
                <div class="img-boxx">
                    <img src="img/3.png" alt="">
                </div>
                <div class="detail">
                    <h1>Welcome to Tea Nest</h1>
                    <p>where passion for tea meets a commitment to excellence. Our story is steeped in a love for the artistry of tea-making, and we invite you to explore the rich tapestry of flavors and experiences we've crafted for tea enthusiasts like you.</p>
                    <a href="view_product.php" class="btn">shop now</a>
                </div>

            </div>
        </div>
        <div class="about-category">
            <div class="box">
                <img src="img/3.webp" alt="">
            
            <div class="detail">
                <span>Coffee</span>
                <h1>lemon green</h1>
                <a href="view_product.php" class="btn">Shop now</a>
            </div>
            </div>
            <div class="box">
                <img src="img/about.png" alt="">
            <div class="detail">
                <span>Coffee</span>
                <h1>lemon Tea</h1>
                <a href="view_product.php" class="btn">Shop now</a>
            </div>
            </div>
            <div class="box">
                <img src="img/1.webp" alt="">
            
            <div class="detail">
                <span>Coffee</span>
                <h1>lemon green</h1>
                <a href="view_product.php" class="btn">Shop now</a>
            </div>
            </div>
            <div class="box">
                <img src="img/2.webp" alt="">
            
            <div class="detail">
                <span>Coffee</span>
                <h1>lemon green</h1>
                <a href="view_product.php" class="btn">Shop now</a>
            </div>
            </div>
        </div>
        <section class="services">
            <div class="title">
                <img src="img/download.png" class="logo">
                <h1>why choose us</h1>
                <p>Choose Tea Nest – where excellence meets your tea cup, enriching your tea experience one sip at a time.</p>
            </div>
            <div class="box-container">
                <div class="box">
                    <img src="img/icon2.png">
                    <div class="detail">
                        <h3>great saving</h3>
                        <p>Experience Great Taste Even Greater Savings</p>
                    </div>
                </div>
                <div class="box">
                    <img src="img/icon1.png">
                    <div class="detail">
                        <h3>24*7 customer support</h3>
                        <p>Exceptional Teas Exceptional Support</p>
                    </div>
                </div>
                <div class="box">
                    <img src="img/icon0.png">
                    <div class="detail">
                        <h3>gift vouchers</h3>
                        <p>Unwrap Joy with Tea Nest Gift Vouchers</p>
                    </div>
                </div>
                <div class="box">
                    <img src="img/icon.png">
                    <div class="detail">
                        <h3>All Pakistan Delivery</h3>
                        <p>From North to South, We Bring the Taste to Every Corner</p>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'C:\xampp\htdocs\WebSemesterProject/footer.php'; ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="Script.js"></script>
    <?php include 'C:\xampp\htdocs\WebSemesterProject/alert.php'; ?>
</body>
</html>