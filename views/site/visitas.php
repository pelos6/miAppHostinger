<?php
use miloschuman\highcharts\Highcharts;
echo Highcharts::widget( array(
   'options' => array(
      'exporting' => array('enabled' => true),
      'title' => array('text' => 'Mes'),
      'theme' => 'grid',
      'rangeSelector' => array('selected' => 1),
      'xAxis' => array(
         'categories' => $mes
      ),
      'yAxis' => array(
         'title' => array('text' => 'Cantidad')
      ),
      'series' => array(
         array('name' => 'Total', 'data' => $total),
      )
   )
));
?>
