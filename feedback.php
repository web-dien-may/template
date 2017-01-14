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
            <div class="panel panel-default">
                <div class="panel-heading">Panel Heading</div>
                <div class="panel-body">

                    <div id="feedback_content">
                        <form>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2">Comment category</label>
                                <div class="col-sm-10">
                                    <select class="form-control">
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                </div>


                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2">Content</label>
                                <div class="col-sm-10">
                                   <textarea rows="4" cols="50">
                                    At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies.
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="postedby" class="col-sm-2 col-form-label">Posted by: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="postedby" placeholder="Posted by">
                                    Less than or equal to 20 characters (including A-Z, a-z ,0-9, Chinese
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="youremail" class="col-sm-2 col-form-label">Your e-mail</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="youremail" placeholder="Your Email">
                                    Example: example@mail.com
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="youcellphone" class="col-sm-2 col-form-label">Cellphone number:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="yourcellphone" placeholder="Your Cellphone">
                                    By digital ,"+", in the bars "-" the composition, the maximum allowable 20 characters
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="companyname" class="col-sm-2 col-form-label">Company name:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="companyname" placeholder="Company Name">
                                    By digital ,"+", in the bars "-" the composition, the maximum allowable 20 characters
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="vertificationcode" class="col-sm-2 col-form-label">Veritification Code:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="vertificationcode" placeholder="Veritification Code">

                                </div>
                                <a href="#">Can't see clearly ? Change an image ?</a>

                            </div>
                        </form>





                    </div>
                </div>
            </div>



        </div>
    </div>

</div>
<!--End Content-->

<?php include_once("footer.php") ?>

</body>
</html>