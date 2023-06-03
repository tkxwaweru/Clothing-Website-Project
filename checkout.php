<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Checkout</title>
        <link rel="stylesheet" href="registration_style.css">
    </head>
    <body>
        <div class="af_container1">
            <div class="navigation_bar">
                <input type="text" placeholder="Search"></li>
                <div class="logo">
                    <img src="Images/Logo.png" width="150px"> 
                </div>
                <nav>
                    <ul>
                        <li><a href="sign_in.php">Account</a></li>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="products_view.php">Products</a></li>                       
                    </ul>
                </nav> 
            </div> 
        </div>
        <div class="register_space">
            <div class="content_container">
                <div class="title">Checkout details</div>
                    <form method="post" action="process_checkout.php">
                        <div class="user_details">
                             <div class="input_box">
                                <span class="details">First Name</span>
                                <input class="input" type="text" placeholder="Enter your first Name" id="firstName" name="fName" required>
                            </div>
                            <div class="input_box">
                                <span class="details">Last name</span>
                                <input class="input" type="text" placeholder="Enter your Last Name" id="lastName" name="lName" required>
                            </div>
                            </div>
                            <div class="input_box">
                                <span class="details">Phone Number</span>
                                <input class="input" type="text" placeholder="Enter your phone number" id="phoneNumber" name="phone_number" required>
                            </div>
                            <div class="input_box">
                                <span class="details">Email</span>
                                <input class="input" type="text" placeholder="Enter your email address" id="e_mail" name="email" required>
                            </div>
                            <div class="input_box">
                                <span class="details">Residence</span>
                                <input class="input" type="text" placeholder="Enter your Residence" id="residence" name="residence" required>
                            </div>
                            <input class="button" type="submit" value="PLACE ORDER">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="f_container">
                <div class="row">
                    <div class="column">
                        <img src="Images/Logo.png" width="125PX"> 
                        <p>We here at 254 Urban aim to satisfy each and every
                            one of our valued customers.<br>We offer you high value clothing
                            items that will bestow upon you the pride of Africa.<br><br>@TRADEMARK 2022
                        </p>   
                    </div>
                    <div class="column">
                        <h3>Useful links</h3>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="order_mens.php">Shop mens</a></li>
                            <li><a href="order_womens.php">Shop womens</a></li>
                            <li><a href="order_kids.php">Shop kids</a></li> 
                        </ul>                          
                    </div>
                    <div class="column">
                        <h3>Follow us</h3>
                        <ul>
                        <li><a href="https://www.facebook.com/">Facebook</a></li>
                            <li><a href="https://twitter.com/">Twitter</a></li>
                            <li><a href="https://www.instagram.com/">Instagram</a></li>
                            <li><a href="https://www.snapchat.com/en-GB">Snapchat</a></li>
                            <li><a href="https://ke.linkedin.com/">Linked in</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>