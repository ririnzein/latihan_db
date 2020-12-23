<?php
    // memanggil berkas konfigurasi.php
    require 'konfigurasi.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>KONEKSI DUA DATABASE</title>
    </head>
    <body>
        <div class="wrap">
            <div class="container">
                <center>
                    <div class="table">
                       
                            <center><b>DATABASE PERTAMA</b></center>
                            <table border="1">
                                <tr>
                                    <td>Nama</td>
                                    <td>Tempat Lahir</td>
                                    <td>Tanggal Lahir</td>
                                </tr>
                                <?php
									$conn = koneksi1_buka();
									$sql = "SELECT * FROM koneksi1;";
									$query = mysqli_query($conn , $sql);

									if(mysqli_num_rows($query)>0){ 
										while ($data = mysqli_fetch_array($query)) { ?>
			                                <tr>
			                                    <td><?php echo $data['nama']?></td>
			                                    <td><?php echo $data['tempat_lahir']?></td>
			                                    <td><?php echo $data['tanggal_lahir']?></td>
			                                </tr>
		                                <?php
										}
									} 
									koneksi1_tutup();
								?>
                            </table>

                            <center><b>DATABASE KEDUA</b></center>
                            <table border="1">
                                <tr>
                                    <td>Nama</td>
                                    <td>Tempat lahir</td>
                                    <td>Tanggal Lahir</td>
                                </tr>
                                <?php
								    $conn = koneksi2_buka();
								    $sql = "SELECT * FROM koneksi2";
                                    $query = mysqli_query($conn, $sql);
                                    
                                    if(mysqli_num_rows($query)>0){
                                        while ($data = mysqli_fetch_array($query)) { ?>
                                         <tr>
		                                    <td><?php echo $data['nama']?></td>
		                                    <td><?php echo $data['tempat_lahir']?></td>
		                                    <td><?php echo $data['tanggal_lahir']?></td>
		                                </tr>
                                    <?php
                                    }
                                }
                                koneksi2_tutup();
								?>
                            </table>
                    </div>
                </center>
            </div>
        </div>
    </body>
</html>
