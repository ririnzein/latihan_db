<?php
function koneksi1_buka(){
	//mysqli_select_db(DB1_NAMA, mysqli_connect(DB1_HOST, DB1_USER, DB1_PASSWORD));
	return mysqli_connect(DB1_HOST, DB1_USER ,DB1_PASSWORD, DB1_NAMA);
}
function koneksi1_tutup(){
	mysqli_close(mysqli_connect(DB1_HOST, DB1_USER, DB1_PASSWORD));
}
function koneksi2_buka(){
	return mysqli_connect(DB2_HOST, DB2_USER, DB2_PASSWORD, DB2_NAMA);
}
function koneksi2_tutup(){
	mysqli_close(mysqli_connect(DB2_HOST, DB2_USER, DB2_PASSWORD));
}
?>