<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PesoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pesos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peso-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Nuevo Peso', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'fecha',
            'peso',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
