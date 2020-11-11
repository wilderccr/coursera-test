<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Datos historicos de accidentalidad en Medellín</title>
  </head>
  <link rel="stylesheet" href="style.css" />
  <body>
  
  <div class="externo cabecera-menu">
    <div class="interno interno-cabecera-menu">
      <nav id="caja-nav">
        <ul class="menu">
          <li class="active"><a href="index.html" title="Home"><span class="title">Inicio</span><span class="after"></span></a></li>
          <li><a href="historico.php" title="historico"><span class="title">Datos de accidentalidad historicos</span><span class="after"></span></a></li>
          <li><a href="fonendos.html" title="Fonendos"><span class="title">Predicción de accidentalidad</span><span class="after"></span></a></li>
          <li><a href="agrupamiento.html" title="Agrupamiento"><span class="title">Agrupamiento de accidentes</span><span class="after"></span></a></li>
        </ul>
      </nav>
    </div>
  </div>

<h1>Datos historicos de accidentalidad en Medellín</h1>

<h3>A continuación, usted podrá elegir una ventana temporal donde se visualizaran los datos de accidentalidad por tipo de accidente.<br> El periodo elegido
debes estar comprendido entre el 01/01/2014 al 31/12/2018.<br><br>Los tipos de accidentes que se pueden contabilizar son:</h3>

<h3>
<ul>
<li type="square">Atropello</li><br>
<li type="square">Caida de ocupante</li><br>
<li type="square">Choque</li><br>
<li type="square">Incendio</li><br>
<li type="square">Volcamiento</li><br>
<li type="square">Otro</li><br><br>
</ul>
</h3>

<form name="formulario" method="GET" action="datos.php">
<div class="contiene">
  <label class="input-group-addon" id="basic-addon1">Fecha inicial:</label>
  <input type="date" id="start" name="inicio" value="2014-01-01" min="2014-01-01" max="2018-12-31">
  <label class="input-group-addon" id="basic-addon1">Fecha final:</label>
  <input type="date" id="end" name="fin" value="2018-12-31" min="2014-01-01" max="2018-12-31">
  <br><br>
  <div class="boton">
  <input type="submit" value="Consultar">
  </div>
</div>
</form>
  <br><br>
  


<div id="pagina">
  <header class="header">
    <div class="header-area">
      <section>
        <!--  <h2>Titilo de contenido</h2>
					   <p class="sub-header"> Contenido </p> -->
      </section>
    </div>
  </header>

  <!--		<section>
			<article>
			<br>
				<h2>Titulo del articulo</h2>
				<p>Aqui va el artículo</p>
				<img src="images/logo.png">				
			</article>
		</section>
		<aside>
			<h2>ASIDE</h2>
			<p>Puede haber mas de uno y se les da formato diferente asignándoles ID o CLASS con CSS</p>
		</aside>-->
</div>
<footer class="footer">
  <div class="post-footer">

    Elaborado por: <br>
	Wilder Camilo Castro Ramos<br>
	Facultad de Minas<br>
	Universidad Nacional de Colombia<br>
	Sede Medellín<br>
	Todos los derechos reservados<br>
	2020

  </div>
</footer>

</body>
</html>