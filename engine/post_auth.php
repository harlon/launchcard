<?
//session_start();

// EL ARCHIVO DE CONECCIÓN A LA DB
require_once('conf/config.php');


// RECIBO LOS DATOS

	$email = isset($_POST['email']) ? $_POST['email'] : 0;
	$password = isset($_POST['password']) ? $_POST['password'] : 0;
	
	
	// ENCRIPTAMOS LA PASSWORD CON MD5 PARA CONSULTAR EN LA DB
	
	if($password!=0):
		$pwdEnc = md5($password); 
	endif;
	
		
	// SE CREA UNA VARIABLE USER COMO null CON EL FIN DE NO DEVOLVER NADA SI NO EXISTEN DATOS
	
	// COMPROBAMOS QUE REALMENTE ESTEMOS RECIBIENDO DATOS DESDE LA APP Y EJECUTAMOS LA CONSULTA DE PARA COMPROBAR SI EL USUARIO ESTÁ EN LA BASE DE DATOS. 
	
			$sql = 'SELECT * FROM users WHERE email=:email AND password=:password';
			$cmd = $db->prepare($sql);
			$cmd->bindParam(':email', $email, PDO::PARAM_STR);
			$cmd->bindParam(':password', $pwdEnc, PDO::PARAM_STR);
			$cmd->execute();
			
			// SI EXISTE UN MATCH EN EL RESULTADO 
			if($cmd->rowCount()>0):

				$user = $cmd->fetch(PDO::FETCH_OBJ);
				
			// SI EL USUARIO EXISTE SE ENTREGA EL SIGUIENTE ARRAY
				$response = array(
					'logged' => true,
					'firstname' => $user->firstname,
					'lastname'=> $user->lastname,
					'email' =>  $user->email,
					'id' => $user->id,
					'message' => ''
				);
				
			else:
			
			// SI EL USUARIO NO EXISTE ENTREGAMOS EL SIGUIENTE ARRAY
				$response = array(
					'logged' => false,
					'firstname' => '',
					'lastname'=> '',
					'email' =>  '',
					'id' => '',
					'message' => 'Invalid Email and/or Password'
				);
					
			endif;
	


	// SE IMPRIME EL ARRAY EN JSON
	echo json_encode($response);
?>