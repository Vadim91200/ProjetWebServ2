<!-- //banner-->
<!--/register -->
<section class="banner-bottom py-5">
    <div class="container">
        <div class="content-grid">
            <div class="text-center icon">
                <span class="fa fa-user-circle-o"></span>
            </div>
            <div class="content-bottom">
                <form action="index.php?controller=register&action=process" method="post">
                    <div class="field-group">
                        
                        <div class="content-input-field">
                            <input name="LastName" id="text1" type="text" value="" placeholder="User LastName" required="">
                        </div>
                    </div>
                    <div class="field-group">
                        
                        <div class="content-input-field">
                            <input name="FirstName" id="text2" type="text" value="" placeholder="User FirstName" required="">
                        </div>
                    </div>
                    <div class="field-group">
                        <div class="content-input-field">
                            <input name="username" id="text3" type="email" value="" placeholder="User Email" required="">
                        </div>
                    </div>
                    <div class="field-group">
                        <div class="content-input-field">
                            <input name="userphone" id="text4" type="text" value="" placeholder="UserPhone" required="">
                        </div>
                    </div>
                    <div class="field-group">
                        <div class="content-input-field">
                            <input name="password" id="myInput" type="Password" placeholder="Password">
                        </div>
                    </div>
                    <div class="content-input-field">
                        <button type="submit" class="btn">Sign Up</button>
                    </div>
                    <div class="list-login-bottom text-center mt-lg-5 mt-4">
                        <a href="#" class="">By clicking Signup, I agree to your terms</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
