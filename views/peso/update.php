<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Peso */

$this->title = 'Update Peso: ' . ' ' . $model->fecha;
$this->params['breadcrumbs'][] = ['label' => 'Pesos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fecha, 'url' => ['view', 'id' => $model->fecha]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="peso-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
