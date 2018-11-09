<?php require_once 'template/header.php'; ?>
<div class="bg-image w3-display-container w3-animate-opacity w3-text-white">
</div>
<div class="w3-display-middle">
                <br>
                <br>
                <br>
                <br>
                <BR>
                <br>
                <h1 style="color:#293260;text-align:center"><b>REGISTER</b></h1>
            <form action="register.php" method="POST">
                <div class="group">
                    <input type="text" name="name" required="required"/><span class="highlight"></span><span class="bar"></span>
                    <label for="name"><b>Input Your Name here</b></label>
                </div>
                <div class="group">
                    <input type="text" name="username" required="required"/><span class="highlight"></span><span class="bar"></span>
                    <label for="username"><b>Input Your Username here</b></label>
                </div>
                <div class="group">
                    <input type="text" name="email" required="required"/><span class="highlight"></span><span class="bar"></span>
                    <label for="email"><b>Input Your Email here</b></label>
                </div>
                <div class="group">
                    <input type="password" name="password" required="required"/><span class="highlight"></span><span class="bar"></span>
                    <label for="password"><b>Input Your Password here</b></label>
                </div>
                <div class="btn-box">
                    <button class="btn btn-submit" name="register" type="submit" value="Register sekarang"><b>register</b></button>
                </div>
            </div>
        </form>
</div>
<?php require_once 'template/footer.php'; ?>