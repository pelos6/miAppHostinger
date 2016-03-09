<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Marcadoresimportados */

$this->title = 'Update Marcadoresimportados: ' . ' ' . $model->idMarcador;
$this->params['breadcrumbs'][] = ['label' => 'Marcadoresimportados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idMarcador, 'url' => ['view', 'id' => $model->idMarcador]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="marcadoresimportados-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
