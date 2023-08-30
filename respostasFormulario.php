<html>
  <head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
  </head>
  <body>
		<h2>É um prazer ter você conosco</h2>
		<p>Estamos te encaminhando para uma de nossas vendedoras...</p></body>


		<?php 
			$nome = $_GET['nome'];
			$email = $_GET['email'];
			$whatsapp = $_GET['whatsapp'];
			$estado = $_GET['estado'];

			if ($nome != "" && $whatsapp != "" && $estado != "") {
				echo "Nome: $nome<br>Email: $email<br>Whatsapp: $whatsapp<br>Estado: $estado<br><br>";
				echo "<a id=redirect href='https://wa.me/5521993121066?text=Ol%C3%A1+Lidiane%21+Meu+nome+%C3%A9+$nome%2C+meu+email+%C3%A9+$email+e+sou+de+$estado.+Gostaria+de+mais+informa%C3%A7%C3%B5es+sobre+compras+no+atacado.'>Clique aqui para falar com uma consultora no WhatsApp.</a>";
			} else {
				echo "Alguns campos ficaram em branco";
			}
		?>
		<script>
				document.onload(document.querySelector("#redirect").click())				
		</script>
</html>