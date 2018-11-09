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
					<!-- /responsive nav button -->
					
					<!-- logo -->

						<a class="navbar-brand" href="index.php"><span class="fa fa-arrow-left" style="font-size:36px;color:#293260;"></span>
                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<h1 class="navbar-brand"style="font-size:24px;color:#293260">
							<b>PELANGGAN</b></h1></a>
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
                <th width="150px">Nomor KTP/SIM</th>
                <th width="200px">Nama Pelanggan</th>
                <th width="150px">Nomor HP</th>
                <th width="100px">Plat Kendaraan</th>
                <th width="50px">Jenis Kendaraan</th>
                <th width="250px">Merk Kendaraan</th>
                <th width="150px">Warna Kendaraan</th>
                <th width="50px"></th>
                <th width="50px"></th> 
                <th width="50px"></th>
            </tr>
            <tr>
                <td width="150px"><?php echo $data1['no_ktp']; ?></td>
                <td width="200px"><?php echo $data1['nama_pelanggan']; ?></td>
                <td width="150px"><?php echo $data1['no_hp']; ?></td>
                <td width="100px"><?php echo $data1['plat']; ?></td>
                <td width="150px"><?php echo $data1['j_kendaraan']; ?></td>
                <td width="250px"><?php echo $data1['merk_kendaraan']; ?></td>
                <td width="150px"><?php echo $data1['warna_kendaraan']; ?></td>
                <td width="50px"><a href="#">Edit</a></td>
                <td width="50px"><a href="#">Update</a></td>
                <td width="50px"><a href="">Delete</a></td>
            </tr>
            <?php
                }?>
        </table>
        <div class="btn-box">
            <button class="btn btn-submit" onclick="document.getElementById('id01').style.display='block'" type="submit"><b>Tambah Data Pelanggan</b></button>
        </div>
    <div>
    <div id="id01" class="modal">
                <form class="modal-content animate">
                    <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>
                    
                    <form action="" method="POST">
                        <div class="center">
                            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<h1 class="navbar-brand"style="font-size:24px;color:#293260">
							<b>Pelanggan</b></h1></a>
                                <div class="group">
                                    <input type="text" name="no_ktp" required="required"/><span class="highlight"></span><span class="bar"></span>
                                    <label><b>Nomor KTP/SIM</b></label>
                                </div>
                                <div class="group">
                                    <input type="text" name="nama_pelanggan" required="required"/><span class="highlight"></span><span class="bar"></span>
                                    <label><b>Nama Pelanggan</b></label>
                                </div>
                                <div class="group">
                                    <input type="text" name="no_hp" required="required"/><span class="highlight"></span><span class="bar"></span>
                                    <label><b>Nomor Handphone</b></label>
                                </div>
                                <div class="group">
                                    <input type="text" name="plat" required="required"/><span class="highlight"></span><span class="bar"></span>
                                    <label><b>Nomor Plat Kendaraan</b></label>
                                </div>
                                <div class="group">
                                    <select id="jeniskendaraan" name="j_kendaraan">
                                        <option value="j_kendaraan">Jenis Kendaraan</option>
                                        <option value="suv">SUV</option>
                                        <option value="puv">PUV</option>
                                        <option value="sedan">Sedan</option>
                                        <option value="pickup">Pick Up</option>
                                        <option value="truk">Truck</option>
                                        <option value="bus">Bus</option>
                                    </select>
                                </div>
                                <div class="group">
                                    <input type="text" name="merk_kendaraan" required="required"/><span class="highlight"></span><span class="bar"></span>
                                    <label><b>Merk Kendaraan</b></label>
                                </div>
                                <div class="group">
                                    <input type="text" name="warna_kendaraan" required="required"/><span class="highlight"></span><span class="bar"></span>
                                    <label><b>Warna Kendaraan</b></label>
                                </div>
                                <div class="btn-box">
                                    <button class="btn btn-submit" name="submit" type="submit"><b>submit</b></button>
                                </div>
                                <div class="btn-box">
                                <button class="btn btn-submit" type="reset" value="reset"><b>Reset</b></button>
                            </div>
                            </div>
                        </form>
                    </form>
        </div>
        <?php
                
                $no_ktp = @$_GET['no_ktp'];
                $nama_pelanggan = @$_GET['nama_pelanggan'];
                $no_hp = @$_GET['no_hp'];
                $plat = @$_GET['plat'];
                $j_kendaraan = @$_GET['j_kendaraan'];
                $merk_kendaraan = @$_GET['merk_kendaraan'];
                $warna_kendaraan = @$_GET['warna_kendaraan'];

                                    if($no_ktp == "" || $nama_pelanggan == "" || $no_hp == "" || $plat == "" ||
                                    $j_kendaraan == "" || $merk_kendaraan == "" || $warna_kendaraan == "" ) {
                                   ?>
                                   <script type="text/javascript">
                                    alert("Inputan tidak boleh ada yang kosong");
                                   </script>
                                   <?php
                                }   else {
                                    mysql_query("INSERT INTO pelanggan values('$no_ktp',
                                    '$nama_pelanggan','$no_hp','$plat','$j_kendaraan',
                                    '$merk_kendaraan','$warna_kendaraan')") or die (mysql_error());
                                    ?>
                                    <script type="text/javascript">
                                    alert("Data Berhasil di Tambahkan");
                                   </script>
                                   <?php
                                }

        ?>
<?php require_once 'template/footer.php'; ?>
