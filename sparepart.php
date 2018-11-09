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
							<b>SUKU CADANG</b></h1></a>
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
                <th width="100px">Nomor Invoice</th>
                <th width="150px">Tanggal Pembelian</th>
                <th width="200px">Supplier</th>
                <th width="50px">Kode Barang</th>
                <th width="200px">Nama Barang</th>
                <th width="150px">Kategori Barang</th>
                <th width="50px">Sisa Stok</th>
                <th width="100px">Satuan</th>
                <th width="100px">Harga Beli</th>
                <th width="100px">Harga Jual</th>
                <th width="50px"></th>
                <th width="50px"></th> 
                <th width="50px"></th>
            </tr>
            <?php
                $sql = mysql_query("SELECT * FROM sparepart") or die(mysql_error());
                $data = mysql_fetch_array($sql);
            ?>
            <tr>
                <td width="100px"><?php echo $data['no_ivoice']; ?></td>
                <td width="150px"><?php echo $data['tanggal_beli']; ?></td>
                <td width="200px"><?php echo $data['nama_supplier']; ?></td>
                <td width="50px"><?php echo $data['kode_barang']; ?></td>
                <td width="200px"><?php echo $data['nama_barang']; ?></td>
                <td width="150px"><?php echo $data['kategori_barang']; ?></td>
                <td width="50px"><?php echo $data['sisa_stok']; ?></td>
                <td width="100px"><?php echo $data['satuan']; ?></td>
                <td width="100px"><?php echo $data['harga_beli']; ?></td>
                <td width="100px"><?php echo $data['harga_jual']; ?></td>
                <td width="50px"><a href="#">Edit</a></td>
                <td width="50px"><a href="#">Update</a></td>
                <td width="50px"><a href="#">Delete</a></td>
            </tr>
        </table>
        <div class="btn-box">
            <button class="btn btn-submit" onclick="document.getElementById('id01').style.display='block'" type="submit"><b>Tambah Data Sparepart</b></button>
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
							<b>Pembelian Suku Cadang</b></h1></a>
                            <div class="group">
                                <input type="text" name="no_invoice" required="required"/><span class="highlight"></span><span class="bar"></span>
                                <label><b>Nomor Invoice</label>
                            </div>
                            <div class="group">
                                <input type="date" name="tanggal_beli" required="required"/><span class="highlight"></span><span class="bar"></span>
                                <label><b>Tanggal Pembelian</b></label>
                            </div>
                            <div class="group">
                                <input type="text" name="nama_supplier" required="required"/><span class="highlight"></span><span class="bar"></span>
                                <label><b>Supplier</b></label>
                            </div>
                            <div class="group">
                                <input type="text" name="kode_barang" required="required"/><span class="highlight"></span><span class="bar"></span>
                                <label><b>Kode Barang</b></label>
                            </div>
                            <div class="group">
                                <input type="text" name="nama_barang" required="required"/><span class="highlight"></span><span class="bar"></span>
                                <label><b>Nama Barang</b></label>
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
                                <table width="450px">
                                    <tr>
                                        <td width="250px" class="jumlah">
                                            <input type="text" name="sisa_stok" required="required"/>
                                            <label><b>Qty</b></label>
                                        </td>
                                        <td width="200px">
                                        <select id="satuan" name="satuan">
                                            <option value="kg">KG</option>
                                            <option value="bh">Buah</option>
                                            <option value="pcs">Pcs</option>
                                            <option value="unit">Unit</option>
                                            <option value="lusin">Lusin</option>
                                            <option value="meter">Meter</option>
                                            <option value="kodi">Kodi</option>
                                        </select>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="group">
                                <input type="text" name="harga_beli" required="required"/><span class="highlight"></span><span class="bar"></span>
                                <label><b>Harga Beli</b></label>
                            </div>
                            <div class="group">
                                <input type="text" name="harga_jual" required="required"/><span class="highlight"></span><span class="bar"></span>
                                <label><b>Harga Jual</b></label>
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