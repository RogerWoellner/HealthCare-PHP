<link rel="stylesheet" href="style.css">

<header id="head">
	<nav class="container">
		<h1 class="text">Saiba como está a sua saúde!</h1>
			<div>
			</div>
	</nav>
</header>

<body>
  <div>
    <a id="link" href="./imc.php">IMC</a> | 
    <a id="link" href="./rcq.php">RCQ</a> | 
    <a id="link" href="./pace.php">PACE</a>
  </div>
    <section>
      <div class="imc">
        <h2>Cálculo de IMC</h2>
        <p>IMC é a sigla para Índice de Massa Corpórea, parâmetro adotado pela Organização Mundial de Saúde para calcular o peso ideal de cada pessoa. O índice é calculado da seguinte maneira: divide-se o peso do paciente pela sua altura elevada ao quadrado. Diz-se que o indivíduo tem peso normal quando o resultado do IMC está entre 18,5 e 24,9.</p>
        <br>
      <img src="./IMC.png" alt="Tabela IMC">
      <br>
      <h3>Verifique o seu IMC!</h3>
      <br>
        <form class="form" method="get" action="./imc.php">
          <input class="field" name="altura" placeholder="Altura" /> <br />
          <input class="field" name="peso" placeholder="Peso" /> <br />
          <input id="enviar" class="field" type="submit" value="Enviar" />
        </form>
      </div>
    </section>
  </body>

<?php

$altura = 0;
$peso = 0;

if (isset($_GET["altura"])){

  echo "<hr> Altura: ".$_GET["altura"]." m <br>";
}

if(isset($_GET["peso"])){

  echo "<hr> Peso: ".$_GET["peso"]." kg <br>";
}

if(isset($_GET["altura"])) {
$altura = ($_GET["altura"]);
}

if(isset($_GET["peso"])) {
$peso = ($_GET["peso"]);
}

if($peso == 0) {
  return ' ';
} else {
$calc = $peso/($altura * $altura);
$resultado = number_format($calc,2);

echo "<hr> Seu IMC é: $resultado";

if ($resultado < 18.5){
  echo "<hr> Classificação: Abaixo do Peso.";
} elseif ($resultado > 24.9 & $resultado < 29.9){
  echo "<hr> Classificação: Sobrepeso.";
} elseif ($resultado > 29.9){
  echo "<hr>Classificação: Obesidade.";
}else {
  echo "<hr>Classificação: Peso Normal."; 
}

}
?>
<br><br>
<a id="link" href="./imc.php">IMC</a> | 
<a id="link" href="./rcq.php">RCQ</a> | 
<a id="link" href="./pace.php">PACE</a>
<br><br><br><br><br><br><br><br><br><br>