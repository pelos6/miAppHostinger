  <HTML>
    <BODY>

        <meta charset="utf-8"> 
  <div id="contenedor"></div>
<?php
use miloschuman\highcharts\Highcharts;
error_log('DEBUG: en grafica.php');
echo Highcharts::widget( array(
   'options' => array(
      'exporting' => array('enabled' => true),
      'title' => array('text' => 'Mes'),
      'credits' => array('enabled' => false),
      'chart' => array('renderTo' => 'contenedor','zoomType' => 'x', 'panning' => true, 'panKey' => 'shift'  ),
      'rangeSelector' => array('enabled' => true),
      'theme' => 'grid',
      'rangeSelector' => array('selected' => 1),
      'xAxis' => array( 'type' => 'datetime',
         'categories' => $fecha,
      ),
      'yAxis' => array(
         'title' => array('text' => 'Peso')
      ),
      'series' => array(
         array('name' => 'Total', 'data' => $peso),
      )
   )
));
?>
</div>
    </BODY>

</html>