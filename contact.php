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
    <title>Tea Nest - contact page</title>
</head>
<body>
    <?php include 'C:\xampp\htdocs\WebSemesterProject/header.php'; ?>
    <div class="main">
        <section class="contact">
        <div class="banner">
            <h1>Contact Us</h1>
        </div>
            <div class="container-contact">
                <div class="contactInfo">
                    <div class="box-contact">
                        <div class="icon-contact"><i class='bx bx-map'></i></div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>I-8 Markaz,<br>Islamabad, Pakistan</p>
                        </div>
                    </div>
                    <div class="box-contact">
                        <div class="icon-contact"><i class='bx bx-phone' ></i></div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>051-44231</p>
                        </div>
                    </div>
                    <div class="box-contact">
                        <div class="icon-contact"><i class='bx bx-envelope' ></i></div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>teanest@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="contactForm">
                    <form>
                        <h2>Send Message</h2>
                        <div class="inputBox">
                            <input type="text" name="" required="required">
                            <span>Full Name</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="" required="required">
                            <span>Email</span>
                        </div>
                        <div class="inputBox">
                            <textarea required="required"></textarea>
                            <span>Type Your Message...</span>
                        </div>
                            <button class="btn">Send</button>
                    </form>
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