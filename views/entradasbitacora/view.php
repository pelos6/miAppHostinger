<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Entradasbitacora */

$this->title = $model->fechaentrada;
$this->params['breadcrumbs'][] = ['label' =>  'Entradasbitacoras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entradasbitacora-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            //'tipoentradabitacora_id',
            'tipoentradabitacora.tipoentradabitacora',
            'fechaentrada',
            'entrada:ntext',
        ],
    ]) ?>

</div>
