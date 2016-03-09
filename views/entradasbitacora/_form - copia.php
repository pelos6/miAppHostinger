<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Tipoentradasbitacora;

/* @var $this yii\web\View */
/* @var $model app\models\Entradasbitacora */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="entradasbitacora-form">

    <?php $form = ActiveForm::begin(); 
    echo '<pre>';
    print_r($model);
    echo '</pre>'
    ?>


    <?= $form->field($model, 'idtipoentradabitacora')->textInput(['maxlength' => true]) ?>

<?= Html::activeDropDownList($model, 'idtipoentradabitacora',
      ArrayHelper::map(Tipoentradasbitacora::find()->all(), 'idtipoentradabitacora', 'tipoentradabitacora')) ?>
    <?= $form->field($model, 'fechaentrada')->textInput() ?>

    <?= $form->field($model, 'entrada')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
