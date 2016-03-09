<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Collapse;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrdenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ordens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orden-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <!--el formulario de busqueda que se despliega -->
    <?php echo Collapse::widget([
        'items' => [
            [
                'label' => 'Buscar',
                'content' => $this->render('_search', ['model' => $searchModel]) ,
                'options' => [ 'style'=>'color: blue'],
                'contentOptions'=>[ 'style'=>'background-color: orange'],
            ],
        ]
    ]);
    ?>
    <p>
        <?= Html::a('Create Orden', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cliente_id',
            'fecha',
            'estado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
