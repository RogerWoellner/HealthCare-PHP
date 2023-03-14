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
      <div class="pace">
        <h2>Cálculo do PACE</h2>
        <p>O pace é o ritmo médio de um corredor que percorre um determinado trajeto, medido em minutos por quilômetro. Ou seja, para calcular o pace basta dividir o tempo gasto para percorrer uma distância. Por exemplo, se você leva 30 minutos para concluir 5 km, então, dividindo 30 por 5, significa que seu pace é de 6 minutos por quilômetro. Outro exemplo: se você leva 50 minutos para percorrer 10 km, o ritmo, ou seja, o seu pace é de 5 minutos. </p>
        <br>
        <img src="./pace.jpg" alt="pace">
        <br>
        <br>
        <form class="form" method="get" action="./pace.php">
          <input class="field" name="tempo" placeholder="Tempo(em min)" /> <br />
          <input class="field" name="distancia" placeholder="Distância(em km)" /> <br />
          <input id="enviar" class="field" type="submit" value="Enviar" />
        </form>
      </div>
    </section>
  </body>

<?php

$tempo = 0;
$distancia = 0;


if(isset($_GET["tempo"])){

  echo "<hr> Tempo: ".$_GET["tempo"]." min <br>";
}

if(isset($_GET["distancia"])){

  echo "<hr> Distância: ".$_GET["distancia"]." km <br>";
}


if(isset($_GET["tempo"])) {
$tempo = ($_GET['tempo']);
}

if(isset($_GET["distancia"])){
$distancia = ($_GET['distancia']);
}

if($distancia == 0) {
  return ' ';
} else {  
$calc = $tempo / $distancia;
$resul = number_format($calc,2);

echo "<hr> Seu PACE é: $resul min por km";


for ($pace = 5; $pace < 15; $pace++):
  echo "<hr>Pace 5km: $pace min por km";
endfor;

}

?>
<br><br>
<a id="link" href="./imc.php">IMC</a> | 
<a id="link" href="./rcq.php">RCQ</a> | 
<a id="link" href="./pace.php">PACE</a>
<br><br><br><br><br><br><br><br><br><br>