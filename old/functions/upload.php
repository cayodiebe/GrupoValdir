<?php 
	

	if(isset($_POST['tipo'])){
		$file_name = $_FILES["uploadfile"]["name"];
		preg_match("/\.(gif|bmp|png|jpg|jpeg){1}", $file_name, $ext);
		$file_name = md5(uniqid(time())) . "." . $ext[1];
		$ret = move_uploaded_file($_FILES[$name]["tmp_name"],"assets/pasta/".$file_name);
		while ($ret == false) {
			$ret = move_uploaded_file($_FILES[$name]["tmp_name"],"assets/pasta/".$file_name);
		}

		$sql = $db->prepare("INSERT INTO `tabela`(`nome`, `email`, `telefone`, `arquivo`) VALUES ('".$_POST['nome']."','".$_POST['email']."','".$_POST['telefone']."','".$file_name."')");
		$sql->execute();            

		echo '<script>alert("Obrigado por enviar");location.href="home"</script>';
	}
 ?>