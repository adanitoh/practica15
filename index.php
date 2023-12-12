<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo X__</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.html">IntroPHP7</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href=basicoPhp7.php>Básico Php7</a></li>
        <li><a href=basicoPhp7.php>Cazares Carreño Adán   20091062</a></li>
      </ul>
      </nav>
    </header>
    <section id="contenedor">
        <section class="problema">
            <h2>Problema: Cálcular la densidad de Titan</h2>
            <p>Descripción:</p>
            <p>Se proporcionan los siguientes datos sobre Titan, una luna de Saturno:<br>
                Masa: 1.345 × 10^23 kg<br>
                Volumen: 7.16 × 10^19 m^3<br>
                ¿Cuál es la densidad promedio de Titan?</p>
        </section>
        <section class="formulas">
            <h2>Fórmulas</h2>
            Densidad = Masa / Volumen
        </section>
        <section class="datos">
            <h2>Datos:</h2>
            Masa = 1.345 × 10^23 kg<br>
            Volumen = 7.16 × 10^19 m^3
        </section>
        <section class="calculos">
            <h2>Solución</h2>
            <p>La densidad de Titan se calcula usando la fórmula:<br>
                Densidad = Masa / Volumen</p>
        </section>
        <?php
            function calcula_densidad_titan(){
                $masa_titan = 1.345e23;
                $volumen_titan = 7.16e19;
                $densidad_titan = $masa_titan / $volumen_titan;
                return $densidad_titan;
            }
        ?>
        <section class="resultado">
            <h2>Resultado:</h2>
            <div id="resultadoA"></div>
            <?php
                print "<h1>Resultado: Densidad de Titan = " . calcula_densidad_titan() . " kg/(metro cúbico)</h1>";
            ?>
        </section>
    </section>
    <footer class="pie">
        Creative Commons versión 3.0 SciSoft 2023
    </footer>
   </section>
</body>
</html>
