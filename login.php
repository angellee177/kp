<?php require_once 'template/header.php'; ?>
<div class="bg-image w3-display-container w3-animate-opacity w3-text-white">
</div>
<div class="w3-display-middle">      
<form action="loginact.php" method="POST">
    <h1 style="color:#293260;text-align:center"><b>LOGIN</b></h1>
    <div class="group">
        <input type="text" name="username" required="required"/><span class="highlight"></span><span class="bar"></span>
        <label><b>Input Your Username here</b></label>
    </div>
    <div class="group">
        <input type="password" name="password" required="required"/><span class="highlight"></span><span class="bar"></span>
        <label><b>Input Your Password here</b></label>
    </div>
    <div class="btn-box">
        <button class="btn btn-submit" type="submit"><b>submit</b></button>
    </div>
</form>
</div>
<?php require_once 'template/footer.php'; ?>