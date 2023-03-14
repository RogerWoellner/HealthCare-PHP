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
      <div class="rcq">
        <h2>Cálculo de Relação Cintura x Quadril</h2>
        <p>O RCQ é excelente para identificar doenças cardiovasculares e hipertensão arterial, pois leva em consideração a localização da gordura no corpo, as gorduras localizadas principalmente na região abdominal ao redor da cintura fazem com que a pessoa seja mais propensa a desenvolver problemas de saúde do que se a maior parte da gordura estivesse localizada nas coxas e quadris.</p>
        <br>
        <img id="imagercq" src="./rcq.jpg" alt="rcq">
        <br>
        <h3>Verifique o seu RCQ!</h3>
        <br>
        <form class="form" method="get" action="./rcq.php">
          <input class="field" name="cintura" placeholder="Cintura (em cm)" /> <br />
          <input class="field" name="quadril" placeholder="Quadril (em cm)" /> <br />
          <input id="enviar" class="field" type="submit" value="Enviar" />
        </form>
      </div>
    </section>
  </body>

<?php

$cintura = 0;
$quadril = 0;

if(isset($_GET["cintura"])){

  echo "<hr> Cintura: ".$_GET["cintura"]." cm <br>";
}

if(isset($_GET["quadril"])){

  echo "<hr> Quadril: ".$_GET["quadril"]." cm <br>";
}

if(isset($_GET["cintura"])) {
$cintura = ($_GET['cintura']);
}

if(isset($_GET["quadril"])) {
$quadril = ($_GET['quadril']);
}

if($quadril == 0) {
  return ' ';
} else {
$calc = $cintura / $quadril;
$result = number_format($calc,2);

echo "<hr> Seu RCQ é: $result";

if ($result < 0.96){
  echo "<hr> Risco de doença cardíaca: Baixo.";
} elseif ($result > 1.0){
  echo "<hr> Risco de doença cardíaca: Alto.";
} else {
  echo "<hr> Risco de doença cardíaca: Moderado."; 
}

}

?>

<br><br>
<a id="link" href="./imc.php">IMC</a> | 
<a id="link" href="./rcq.php">RCQ</a> | 
<a id="link" href="./pace.php">PACE</a>

<br><br><br><br><br><br><br><br><br><br>

