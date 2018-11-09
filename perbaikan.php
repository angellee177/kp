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
							<b>PERBAIKAN</b></h1></a>
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
                <form action="loginact.php" method="POST">
                <div class="group">
                    <input type="date" name="tglservice" required="required"/><span class="highlight"></span><span class="bar"></span>
                    <label><b>Tanggal Service</b></label>
                </div>
                <div class="group">
                    <input type="text" name="idmontir" required="required"/><span class="highlight"></span><span class="bar"></span>
                    <label><b>ID Montir</b></label>
                </div>
                <div class="group">
                    <input type="text" name="nama_montir" required="required"/><span class="highlight"></span><span class="bar"></span>
                    <label><b>Nama Montir</b></label>
                </div>
                <div class="group">
                    <input type="text" name="namapelanggan" required="required"/><span class="highlight"></span><span class="bar"></span>
                    <label><b>Nama Pelanggan</b></label>
                </div>
                <div class="group">
                    <input type="text" name="nomorplat" required="required"/><span class="highlight"></span><span class="bar"></span>
                    <label><b>Nomor Plat Kendaraan</b></label>
                </div>
                <div class="group">
                    <input type="text" name="biayaservice" required="required"/><span class="highlight"></span><span class="bar"></span>
                    <label><b>Biaya Service</b></label>
                </div>
                <div class="btn-box">
                    <button class="btn btn-submit" onclick="document.getElementById('id01').style.display='block'" type="submit"><b>simpan</b></button>
                </div>
                </form>
                <div id="id01" class="modal">
                <form class="modal-content animate">
                    <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>
                    
                    <form action="loginact.php" method="POST">
                        <div class="center">
                            <h1 class="navbar-brand"style="font-size:24px;color:#293260">
							<b>PEMBAYARAN</b></h1></a>
                            <div class="group">
                                <input type="text" name="no_nota" required="required"/><span class="highlight"></span><span class="bar"></span>
                                <label><b>Nomor Nota</label>
                            </div>
                            <div class="group">
                                <input type="date" name="tanggal_bayar" required="required"/><span class="highlight"></span><span class="bar"></span>
                                <label><b>Tanggal Pembayaran</b></label>
                            </div>
                            <div class="group">
                                <input type="text" name="id_montir" required="required"/><span class="highlight"></span><span class="bar"></span>
                                <label><b>ID Montir</b></label>
                            </div>
                            <div class="group">
                                <input type="text" name="nama_montir" required="required"/><span class="highlight"></span><span class="bar"></span>
                                <label><b>Nama Montir</b></label>
                            </div>
                            <div class="group">
                                <input type="text" name="nama_pelanggan" required="required"/><span class="highlight"></span><span class="bar"></span>
                                <label><b>Nama Pelanggan</b></label>
                            </div>
                            <div class="group">
                                <input type="text" name="nomorplat" required="required"/><span class="highlight"></span><span class="bar"></span>
                                <label><b>Nomor Plat Kendaraan</b></label>
                            </div>
                            <div class="group">
                                <select id="kategori_barang" name="kategori_barang">
                                    <option value="k_barang">Kategori Barang</option>
                                    <option value="aki">Aki</option>
                                    <option value="olidanfluida">Oli & Fluida</option>
                                    <option value="tuneup">Tune Up </option>
                                    <option value="diagnosa">Diagnosa</option>
                                    <option value="mesin">Mesin</option>
                                    <option value="AC">Air Conditioner</option>
                                    <option value="rem">Rem</option>
                                    <option value="wiper">Wiper</option>
                                    <option value="transmisidankopling">Transmisi & Kopling</option>
                                    <option value="BBM">Sistem Bahan Bakar</option>
                                    <option value="service_berkala">Service Berkala</option>
                                    <option value="suspensidansteering">Suspensi dan Steering</option>
                                    <option value="service_umum">Service Umum</option>
                                    <option value="kaca">Kaca, Wiper, Spion</option>
                                </select>
                            </div>
                            <div class="group">
                                <input type="text" name="nama_barang" required="required"/><span class="highlight"></span><span class="bar"></span>
                                <label><b>Nama Barang</b></label>
                            </div>
                            <div class="group">
                                <input type="text" name="harga_sparepart" required="required"/><span class="highlight"></span><span class="bar"></span>
                                <label><b>Harga Sparepart</b></label>
                            </div>
                            <div class="group">
                                <input type="text" name="biaya_service" required="required"/><span class="highlight"></span><span class="bar"></span>
                                <label><b>Biaya Service</b></label>
                            </div>
                            <div class="group">
                                <input type="text" name="subtotal" required="required"/><span class="highlight"></span><span class="bar"></span>
                                <label><b>Subtotal Service</b></label>
                            </div>
                            <div class="group">
                                <input type="text" name="diskon" required="required"/><span class="highlight"></span><span class="bar"></span>
                                <label><b>Diskon Harga</b></label>
                            </div>
                            <div class="group">
                                <input type="text" name="total" required="required"/><span class="highlight"></span><span class="bar"></span>
                                <label><b>Total yang Harus Dibayar</b></label>
                            </div>
                            <div class="btn-box">
                                <button class="btn btn-submit" type="submite"><b>Pembayaran</b></button>
                            </div>
                            <div class="btn-box">
                                <button class="btn btn-submit" type="reset" value="reset"><b>Reset</b></button>
                            </div>
                        </div>
                    </form>
                </form>
                </div>
            </div>

<?php require_once 'template/footer.php'; ?>
