<html>
		<form name="form1" id="form1" method="POST" action="index.php">
		Altura: <input name="altura" type="text" id="altura" size="10" maxlength="10"> 
		Peso: <input name="peso" type="text" id="peso" size="12" maxlength="152"> 
		<input name="Submit" type="submit" id="calcular" value="Calcular">
		</form>
		


			if(isset($_POST["peso"]) and isset($_POST["altura"])){
			
			$altura = $_POST["altura"];
			$peso = $_POST["peso"];
			$imc = $peso / ($altura * $altura);
 
			if ($imc < 17){
				$msg = "Muito abaixo do peso!";
				echo "<b>IMC: </b>".$imc."<b> Mensagem: </b>".$msg;
			}
			if (($imc >= 17)  &&($imc <= 18.49)){
				$msg = "Abaixo do peso";
				echo "<b>IMC: </b>".$imc."<b> Mensagem: </b>".$msg;
            }
			if (($imc >= 18.5)&&($imc <= 24.99)){
				$msg = "Peso normal";
				echo "<b>IMC: </b>".$imc."<b> Mensagem: </b>".$msg;
			}
			if (($imc >= 25)  &&($imc <= 29.99)){
				$msg = "Acima do peso";
				echo "<b>IMC: </b>".$imc."<b> Mensagem: </b>".$msg;
			}
			if (($imc >= 30)  &&($imc <= 34.99)){
				$msg = "Obesidade I";
				echo "<b>IMC: </b>".$imc."<b> Mensagem: </b>".$msg;
			}
			if (($imc >= 35)  &&($imc <= 39.99)){
				$msg = "Obesidade II (severa)";
				echo "<b>IMC: </b>".$imc."<b> Mensagem: </b>".$msg;
			}
			if ($imc > 40){
				$msg = "Obesidade III (m�rbida)";
				echo "<b>IMC: </b>".$imc."<b> Mensagem: </b>".$msg;
            }
}
?>
</html>
