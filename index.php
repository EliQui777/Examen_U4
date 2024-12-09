<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>Resolución de Problema - CiTIM</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
</head>
<body>
    <section class="wrapper">
        <header>
            <h1>PROBLEMA DE PROGRAMACION WEB XC</h1>
        </header>
        <section id="contenedor">
            <section class="problema">
                <h2>Problema: Placa Fotovoltaica</h2>
                <p>Se dispone de una placa fotovoltaica de <strong>80x40 cm</strong>, cuyo rendimiento <strong>20%</strong>. Determina la cantidad de energía eléctrica KWh que generará, para acumular en una batería, si la placa fotovoltaica que opera durante 12 horas, siendo el coeficiente de radiación  con un coeficiente de radiación de <strong>0.9 cal/min.cm<sup>2</sup></strong>, se admite que no hay pérdidas ni en el transporte, ni en la carga de la betería.</p>
            </section>

            <section class="esquemaProblema">
                <h2>Esquema de referencia:</h2>
                <center>
                    <img class="imgProblema" src="images/problema.jpg" alt="Esquema del problema">
                </center>
            </section>

            <section class="formulas">
                <h2>Fórmulas</h2>
                <ul>
                    <li><strong>1-. Q = K * t * S * r en Kcal</strong></li>
                    <li><strong>2-. Convertir a KWh (base 1h)</strong></li>
                </ul>
            </section>
            <section class="datos">
                <h2>Datos:</h2>
                <ul>
                    <li><strong>K:</strong> 0.9 cal/min.cm<sup>2</sup></li>
                    <li><strong>t:</strong> 720 minutos</li>
                    <li><strong>S:</strong> 3,200 cm<sup>2</sup></li>
                    <li><strong>r:</strong> 20% (0.2)</li>
                </ul>
            </section>
            <section class="calculos">
                <h2>Solución</h2>
                <p>Aplicamos las fórmulas para calcular la energía generada y convertimos de Kcal a KWh utilizando el factor de conversión 0.00116222.</p>
            </section>
            <section class="resultado">
                <h2>Resultado:</h2>
                <div id="resultadoA">
                    <?php
                        $K = 0.9;
                        $t = 720;
                        $S = 80 * 40;
                        $r = 0.2;
                        $factorConversion = 0.00116222;

                        $Q = $K * $t * $S * $r;
                        $energiaGenerada = $Q * $factorConversion;

                        echo "<p><strong>Energía generada:</strong> " . round($energiaGenerada, 2) . " KWh</p>";
                    ?>
                </div>
            </section>
        </section>
        <footer>
            <p>Alumno: Elías Quiñonez Benítez - No. Control: 22090727</p>
            <p>Programación Web XB - Examen Unidad 4</p>
        </footer>
    </section>
</body>
</html>
