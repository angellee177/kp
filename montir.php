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
        <link rel="stylesheet" href="public/css/login.css">
        <link rel="stylesheet" href="public/css/modal.css">
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
						<a class="navbar-brand" href="index.php"><span class="fa fa-arrow-left" style="font-size:36px;color:#293260;"></span>
                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<h1 class="navbar-brand"style="font-size:24px;color:#293260">
							<b>DATA MONTIR</b></h1></a>
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
    <div class="center" style="padding-top:10px;padding-bottom:10px">
    <input id="myInput" type="text" placeholder="Search..">
    </div>
    <div class="container" style="padding-top:50px">
        <table width="1200px" align="center">
            <tr width="1200px" style="background-color:grey;">
                <th width="100px">ID Montir</th>
                <th width="200px">Nama Montir</th>
                <th width="150px">Alamat</th>
                <th width="150px">Tanggal Lahir</th>
                <th width="150px">Nomor Telepon</th>
                <th width="150px">Email</th>
                <th width="100px">Pendidikan Terakhir</th>
                <th width="250px">Skill</th>
                <th width="50px"></th>
                <th width="50px"></th> 
                <th width="50px"></th>
            </tr>
            <tr>
                <td width="100px">3214444</td>
                <td width="200px">Angel Ria Purnamasari</td>
                <td width="150px">Jl.Pemuda , Gg.Pinang, No.7.</td>
                <td width="150px">17/04/1997</td>
                <td width="150px">085760007217</td>
                <td width="150px">angelriapurnamasari17@gmail.com</td>
                <td width="100px">SLTA</td>
                <td width="250px">Kabel,mesin,jaringan</td>
                <td width="50px"><a href="#">Edit</a></td>
                <td width="50px"><a href="#">Update</a></td>
                <td width="50px"><a href="#">Delete</a></td>
            </tr>
        </table>
        <div class="btn-box">
            <button class="btn btn-submit" onclick="document.getElementById('id01').style.display='block'" type="submit"><b>Tambah Data Montir</b></button>
        </div>
    <div>
    <div id="id01" class="modal">
                <form class="modal-content animate">
                    <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>
                    
                    <form action="loginact.php" method="POST">
                        <div class="center">
                            &nbsp &nbsp &nbsp<h1 class="navbar-brand"style="font-size:24px;color:#293260">
							<b>DATA MONTIR</b></h1></a>
                            <div class="group">
                                <input type="text" name="id_montir" required="required"/><span class="highlight"></span><span class="bar"></span>
                                <label><b>ID Montir</label>
                            </div>
                            <div class="group">
                                <input type="name" name="nama_montir" required="required"/><span class="highlight"></span><span class="bar"></span>
                                <label><b>Nama Montir</b></label>
                            </div>
                            <div class="group">
                                <input type="date" name="tanggal_lahir" required="required"/><span class="highlight"></span><span class="bar"></span>
                                <label><b>Tanggal Lahir</b></label>
                            </div>
                            <div class="group">
                                <input type="text" name="alamat_montir" required="required"/><span class="highlight"></span><span class="bar"></span>
                                <label><b>Alamat</b></label>
                            </div>
                            <div class="group">
                                <input type="text" name="telp_montir" required="required"/><span class="highlight"></span><span class="bar"></span>
                                <label><b>Nomor Telepon Montir</b></label>
                            </div>
                            <div class="group">
                                <input type="email" name="email" required="required"/><span class="highlight"></span><span class="bar"></span>
                                <label><b>Email</b></label>
                            </div>
                            <div class="group">
                                <select id="pendidikan" name="pendidikan">
                                    <option value="sd">SD / Sekolah Dasar</option>
                                    <option value="smp">SMP / SLTP</option>
                                    <option value="sma">SMA / SLTA</option>
                                    <option value="smk">SMK</option>
                                    <option value="d3">D3 / Diploma</option>
                                    <option value="s1">S1 / Sarjana</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                            <div class="group">
                                    <textarea class="box text" id="subject" name="skill" placeholder="Deskripsi Skill" style="height:200px"></textarea>
                            </div>
                            <div class="btn-box">
                                <button class="btn btn-submit" type="submit"><b>Tambahkan</b></button>
                            </div>
                            <div class="btn-box">
                                <button class="btn btn-submit" type="reset" value="reset"><b>Reset</b></button>
                            </div>
                    </form>
            </div>
<?php require_once 'template/footer.php'; ?>