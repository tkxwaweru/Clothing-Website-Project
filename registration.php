<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Registration page</title>
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
                        <li><a href="support_page.html"></a>Support</li>
                        <li><a href="wishlist.html"></a>Wishlist</li>
                        <li><a href="cart.html"></a>Cart</li>                      
                    </ul>
                </nav> 
            </div> 
        </div>
        <div class="register_space">
            <div class="content_container">
                <div class="title">Registration</div>
                    <form method="post" action="process_registration.php">
                        <div class="user_details">
                             <div class="input_box">
                                <span class="details">First Name</span>
                                <input class="input" type="text" placeholder="Enter your first Name" id="firstName" name="fName" required>
                            </div>
                            <div class="input_box">
                                <span class="details">Last name</span>
                                <input class="input" type="text" placeholder="Enter your Last Name" id="lastName" name="lName" required>
                            </div>
                            <div class="gender_details">
                                <span class="gender_title">Gender</span>
                                <div class="category">
                                    <br>
                                    <label class="gender" for="gender1">Male</label>
                                    <input class="radio" type="radio" id="gender1" name="sex" value="male">
                                    <span style="color: white;">_________</span>
                                    <label class="gender" for="gender2">Female</label>
                                    <input class="radio" type="radio" id="gender2" name="sex" value="female">
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
                                <span class="details">Password</span>
                                <input class="input" type="password" placeholder="Enter your Password" id="p_word" name="password" required>
                            </div>
                            </div>
                                <input class="button" type="submit" value="Register">
                            </div>
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
                            <li>Home</li>
                            <li>Shop mens</li>
                            <li>Shop womens</li>
                            <li>Shop kids</li>
                            <li>Offers</li>
                            <li>Cart</li>
                            <li>Wishlists</li>
                            <li>Coupons</li>
                        </ul>                          
                    </div>
                    <div class="column">
                        <h3>Follow us</h3>
                        <ul>
                            <li>Facebook</li>
                            <li>Twitter</li>
                            <li>Instagram</li>
                            <li>Snapchat</li>
                            <li>Linked in</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>