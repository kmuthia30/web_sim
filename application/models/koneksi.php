<?php 
	//mysql_connect("localhost","root","") or die ("Koneksi Gagal"); // untuk menghubungkan koneksie database
	//mysql_select_db("crud_php") or die ("Database tidak ada"); // untuk memilih databae mana yag digunakan
	//echo "Koneksi sukses";//Hanya buat ngecek aja nampilin, tapi klo hasilnya koeksi gagl koneksi sukses berarti gagal, tapi tulisan konesis sukses, betul
	$connection = mysqli_connect("localhost","root","");//untuk versi hp versi 5 kebawah; hostname, username, password
	mysqli_select_db($connection,"sim");
	//echo "Koneksi sukses";
	
	//pconnect --> 
	
?>