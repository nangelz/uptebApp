<?php

 class metodo{
 	
	public function mostrarDatos($sql){
		
		$c = new Conexion();
		$conexion=$c->conectar();
	
		$stmt = $conexion->prepare($sql);
		$stmt->execute();
	
		return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	}

	public function insertarDatos($datos){

		$c= new Conexion();
		$conexion=$c->conectar();
	
		$sql = "INSERT INTO users (username,role_id,user_email,user_password) VALUES (?,?,?,?)";
		$stmt = $conexion->prepare($sql);
		$stmt->bind_param("ssss", $username, $role_id, $user_email, $user_password);
	
		$username = $datos[1];
		$role_id = $datos[5];
		$user_email = $datos[4];
		$user_password = $datos[4];
	
		$stmt->execute();
	
		return $stmt->affected_rows;
	}

	public function actualizarDatos($datos){

		$c= new Conexion();
		$conexion=$c->conectar();
	
		$sql = "UPDATE users AS us JOIN info_user AS inf ON us.user_id = inf.user_id JOIN roles AS rol ON us.role_id = rol.role_id SET us.username=?, name_us=?, user_lastname=?, user_password=?, user_email=?, us.role_id=? WHERE us.user_id=?";
		$stmt = $conexion->prepare($sql);
		$stmt->bind_param("ssssssi", $username, $name_us, $user_lastname, $user_password, $user_email, $role_id, $user_id);
	
		$username = $datos[0];
		$name_us = $datos[1];
		$user_lastname = $datos[2];
		$user_password = $datos[3];
		$user_email = $datos[4];
		$role_id = $datos[5];
		$user_id = $datos[6];
	
		$stmt->execute();
	
		return $stmt->affected_rows;
	}

	public function eliminarDatos($id){

	$c= new Conexion();
	$conexion=$c->conectar();

	$id = intval($id);
	$sql = "DELETE from users where user_id=?";
	$stmt = $conexion->prepare($sql);
	$stmt->bind_param("i", $id);

	$stmt->execute();

	return $stmt->affected_rows;
		}
 	}
?>