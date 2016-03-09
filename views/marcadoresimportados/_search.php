<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MarcadoresimportadoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="marcadoresimportados-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idMarcador') ?>

    <?= $form->field($model, 'urlMarcador') ?>

    <?= $form->field($model, 'conceptoMarcador') ?>

    <?= $form->field($model, 'usoMarcador') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
