<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Entradasbitacora */
$this->title = 'Update Entradas : ' . ' ' . $model->fechaentrada;
$this->params['breadcrumbs'][] = ['label' => 'Entradasbitacoras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fechaentrada, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="entradasbitacora-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
