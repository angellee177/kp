<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title>Garage</title>
        <link rel="stylesheet" href="public/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="public/css/index.css">
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="public/css/font-awesome.min.css">
        <link rel="stylesheet" href="public/css/owl.carousel.css">
        <link rel="stylesheet" href="public/css/owl.transitions.css">
		<link rel="stylesheet" href="public/css/animate.min.css">
        <link rel="stylesheet" href="public/css/lightbox.css">
        <link rel="stylesheet" href="public/css/icon.css">
		<link rel="stylesheet" href="public/css/style.css">
		<link rel="stylesheet" href="public/css/responsive.css">
		
		
    </head>
    <body id="top">
    <header id="navigation" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->

						<a class="navbar-brand" href="index.php"><span class="fa fa-arrow-left" style="font-size:36px;color:#293260;"></span>
                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<h1 class="navbar-brand"style="font-size:24px;color:#293260">
							<b>KONSULTASI</b></h1></a>
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav menu">
                        <li></li>
                        <li></li>
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
    </header>
                <div class="main">
                    <form action="" method="POST">
                                <p style="color:#293260;font-size:24px"><b>Apa masalah pada kendaraan anda?</b></p>
                                <div class="group">
                                <select id="kerusakan" name="j_kerusakan">
                                    <option value="jenis">Pilih jenis kerusakan</option>
                                    <option value="starter">Mobil Tidak Bisa di Starter</option>
                                    <option value="oli">Ganti Oli atau Cairan Lainnya</option>
                                    <option value="servis">Service Berkala</option>
                                    <option value="rem">Masalah Rem dan Kaki Kaki</option>
                                    <option value="mesin">Masalah Mesin</option>
                                    <option value="AC">Service AC</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                                </div>
                                <div class="group">
                                    <textarea class="box text" id="subject" name="detail" placeholder="Write something.." style="height:200px"></textarea>
                                </div>
                                <div class="btn-box">
                                    <button class="btn btn-submit" name="submit" type="submit"><b>submit</b></button>
                                </div>
                    </form>
                </div>
                <?php
                include ('config.php');
                $j_kerusakan = @$_POST['j_kerusakan'];
                $detail = @$_POST['detail'];
                $submit = @$_POST['submit'];
                
                if($submit) {
                                if($j_kerusakan == "" || $detail == "" )
                                {
                                   ?>
                                   <script type="text/javascript">
                                    alert("Inputan tidak boleh ada yang kosong");
                                   </script>
                                   <?php
                                }
                                else 
                                {
                                    mysql_query("INSERT INTO konsultasi values('$j_kerusakan','$detail')") or die (mysql_error());
                                }
                            }
                ?>
<?php require_once 'template/footer.php'; ?>