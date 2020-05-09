<?php    
    $host_mysql = "localhost";
    $user_mysql = "root";
    $pass_mysql = "";
    $db_mysql = "edificios";
    @$mysqli = mysqli_connect($host_mysql,$user_mysql,$pass_mysql,$db_mysql) or die ("Error al conectar con la base de datos");
	
	function nombre_cliente($id_cliente){
		$mysqli = connect();

		$q = $mysqli->query("SELECT * FROM inquilino WHERE id_inquilino = '$id_cliente'");
		$r = mysqli_fetch_array($q);
		return $r['username'];
	}

	function redir($var){
		?>
		<script>
			window.location="<?=$var?>";
		</script>
		<?php
		die();
	}

	function connect(){
		$host_mysql = "localhost";
		$user_mysql = "root";
		$pass_mysql = "";
		$db_mysql = "edificios";

		$mysqli = mysqli_connect($host_mysql,$user_mysql,$pass_mysql,$db_mysql);

		return $mysqli;
	}
?>