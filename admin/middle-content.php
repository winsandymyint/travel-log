<div class="banner-bottom">
            <!-- container -->
            <div class="container">
                <div class="faqs-top-grids">
                    <div class="book-grids">
                        <div class="col-md-6 book-left">
                            <div class="book-left-info">
                                <h3>Create Your Account</h3>
                            </div>
                            <div class="book-left-form">
                                <form method="post" action="reg_db.php">
                                    <p>Username</p>
                                    <input type="text" name="uname" id="uname" required  onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                                    <p>Password</p>
                                    <input type="password" name="pwd" id="pwd" required pattern="[a-z\d]{8}" >
                                    <p>Confirm Password</p>
                                    <input type="password" name="cpwd" id="cpwd" required onBlur="CheckPwd(this.value)" pattern="[a-z\d]{8}">
                                    <p id="error"></p>
                                    <p>Full Name</p>
                                    <input type="text" name="fullname" id="fullname" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                                    <p>Phone Number</p>
                                    <input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                                    <p>Gender</p>
                                    <span class="col-md-2"><input type="radio" name="gender" value="Male" id="m"/><p for="m" class="font">Male</p></span>
                                    <span class="col-md-3"><input type="radio" name="gender" value="Male" id="f"/><p for="f" class="font">Female</p></span>
                                    <div class="clearfix"> </div>
                                    <p>Email Address</p>
                                    <input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                                    <p>Country</p>
                                    <input type="text" name="country" id="country" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                                    <p for="date" class="lbl">Date of Birth</p>
                                    <input type="date" name="date" id="date" class="col-md-12"/>
                                    <div class="clearfix"> </div><br />
                                    <p>IsNewsLetter</p>
                                    <span class="col-md-2"><input type="radio" name="letter" value="1" id="y"/><p for="y" class="font">Yes</p></span>
                                    <span class="col-md-3"><input type="radio" name="letter" value="0"  id="n"/><p for="n" class="font">No</p></span>
                                    <div class="clearfix"> </div>
                                    <input type="submit" id="Register" value="Register">
                                </form>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <!-- //container -->
        </div>