<?php

use yii\helpers\Html;
use yii\grid\GridView;
//use yii\jui\DatePicker;
use kartik\date\DatePicker;
use yii\bootstrap\Collapse;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EntradasbitacoraSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = Yii::t('app', 'Entradas');
$this->title = 'Entradas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entradasbitacora-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <!--el formulario de busqueda por defecto -->
    <?php  // echo $this->render('_search', ['model' => $searchModel]); ?> 
    <!--el formulario de busqueda que se despliega -->
<?php echo Collapse::widget([
    'items' => [
        [
            'label' => 'Buscar',
            'content' => $this->render('_search', ['model' => $searchModel]) ,
          //  'options' => [ 'style'=>'color: blue'],
          //  'contentOptions'=>[ 'style'=>'background-color: orange'],
        ],
    ]
]);
?>
    <p>
        <?= Html::a('Nueva entrada de  bitacora', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel, // impide que salga la primera fila de busqueda
        'columns' => [
        //  ['class' => 'yii\grid\SerialColumn'], // el numero de serie 1,2,3,4, no parece muy interesante !!!!
        // 'identradabitacora',
        //  'fechaentrada',
        [
            'attribute' => 'fechaentrada',
            'value' => 'fechaentrada',
            'format' => 'raw',
            'options' => ['style' => 'width: 20%;'],
            'filter' => DatePicker::widget([
                'model' => $searchModel,
                'attribute' => 'fechaentrada',
                'options' => ['placeholder' => 'Fecha de entrada'],
                'pluginOptions' => [
                    'id' => 'fecha4',
                    'autoclose'=>true,
                    'format' => 'yyyy-mm-dd',
                   // 'startView' => 'year',
                ]
            ])
        ],
                'tipoentradabitacora.tipoentradabitacora:text:Tipo de Entrada',       // attribute:format:label
          //  'tipoentradabitacora',
         //   'fechaentrada',
            'entrada:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
