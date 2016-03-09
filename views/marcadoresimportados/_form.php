<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Marcadoresimportados */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="marcadoresimportados-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'urlMarcador')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'conceptoMarcador')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usoMarcador')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
