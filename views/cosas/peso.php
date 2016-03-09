<HTML>
    <BODY>

        <meta charset="utf-8"> 

        <?php
        require_once("PesoClass.php");

//Creamos un objeto de la clase randomTable
        $rand = new RandomTable();
//insertamos un valor aleatorio
//$rand->insertRandom();
//obtenemos toda la información de la tabla random
        $rawdata = $rand->getAllInfo();

//nos creamos dos arrays para almacenar el tiempo y el valor numérico
        $valoresArray;
        $timeArray;
//en un bucle for obtenemos en cada iteración el valor númerico y 
//el TIMESTAMP del tiempo y lo almacenamos en los arrays 
        for ($i = 0; $i < count($rawdata); $i++) {
            $valoresArray[$i] = $rawdata[$i][1];
            //OBTENEMOS EL TIMESTAMP
            $time = $rawdata[$i][0];
            //  $timeArray[$i] = $rawdata[$i][0];
            $date = new DateTime($time);
            //ALMACENAMOS EL TIMESTAMP EN EL ARRAY
            $timeArray[$i] = $date->getTimestamp() * 1000;
            error_log('DEBUG: PESO ' . $valoresArray[$i] . ' ' . $timeArray[$i]);
        }
        ?>
        <div id="contenedor"></div>
        <!-- el jquery del framework -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <!-- Importo el archivo Javascript de Highcharts directamente desde su servidor -->
        <script src="https://code.highcharts.com/stock/highstock.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script>
            Highcharts.setOptions({
                lang: {
                    months: ['Enero', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
                    weekdays: ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
                    shortMonths: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dec"]
                }
            });
            chartCPU = new Highcharts.StockChart({
                chart: {
                    renderTo: 'contenedor',
                    zoomType: 'x',
                    panning: true,
                    panKey: 'shift'

                },
                rangeSelector: {
                    enabled: true
                },
                title: {
                    text: 'Peso'
                },
                xAxis: {
                    type: 'datetime'
                            //tickPixelInterval: 150,
                            //maxZoom: 20 * 1000
                },
                yAxis: {
                    minPadding: 0.2,
                    maxPadding: 0.2,
                    title: {
                        text: 'Valores',
                        margin: 10
                    }
                },
                series: [{
                        name: 'valor',
                        data: (function () {
                            var data = [];
                                    <?php
                                    for ($i = 0; $i < count($rawdata); $i++) {
                                        ?>
                                data.push([<?php echo $timeArray[$i]; ?>,<?php echo $valoresArray[$i]; ?>]);
                                    <?php } ?>
                            return data;
                        })()
                    }],
                credits: {
                    enabled: false
                },
            });

        </script>   
    </BODY>

</html>