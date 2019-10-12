<?php


	class dbController{

		public class connect_db($server,$user,$pass,$db){
			$con = mysqli_connect($server,$user,$pass,$db) or die("Erro ao conectar");
			return $con;
		}
	}


?>