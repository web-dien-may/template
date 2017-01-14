<!DOCTYPE html>
<html>
<head>
    <title>Dien may xanh</title>
    <link href="css/bootstrap.min.css" media="all" rel="stylesheet">
    <link href="css/style.css" media="all" rel="stylesheet">
    <script src="js/jquery/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php include_once("header.php") ?>
<div id="main-content" class="container">
    <div class="row">
        <div class="col-md-4">
            <div id="side_bar">
                <div id="feedback">
                    <img src="img/sidebarimg.jpg">
                    <ul>
                        <li>Honor</li>
                        <li>History</li>
                        <li>Compnay Profile</li>
                        <li>Message from Chairman</li>
                    </ul>
                </div>
                <div id="feedback_member">
                    <img src="img/member_center.jpg" alt="Member Center Feedback">
                </div>
                <!--End Feedback Member-->
                <div>
                    <img src="img/Contactus_feedback.jpg" alt="Contact Us FeedBack">

                </div>
                <!--End Contact us Member-->


            </div>
        </div>
        <div class="col-md-8">
            <div id="feedback_content">
                <img src="img/navigation.jpg"> <br>
                Comment category
                <select>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select> <br>
                Content
                <textarea rows="4" cols="50">
        At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies.
        </textarea>
                Enter character 0  <br>
                Less than or equal 500<br>
                Posted by:
                <input type="text">
                Less than or equal to 20 characters (including A-Z, a-z ,0-9, Chinese characters, excluding special characters)<br>
                Your e-mail:
                <input type="text">
                Example: example@mail.com <br>
                Cellphone number:
                <input type="text">
                By digital ,"+", in the bars "-" the composition, the maximum allowable 20 characters <br>
                Company name:
                <input type="text"> <br>
                Veritification Code:
                <input type="text">
                <a href="#">Can't see clearly ? Change an image ?</a>


            </div>

        </div>
    </div>

</div>
<!--End Content-->

<?php include_once("footer.php") ?>

</body>
</html>