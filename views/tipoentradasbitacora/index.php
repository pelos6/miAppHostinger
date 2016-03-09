<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TipoentradasbitacoraSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipoentradasbitacoras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipoentradasbitacora-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
         <?= Html::a('Nueva', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tipoentradabitacora',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
