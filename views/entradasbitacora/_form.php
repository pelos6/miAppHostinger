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
   //  echo '<pre>';
   // print_r($model);
   //  echo '</pre>'
    ?>
   <?php  $tipoentradasbitacora = Tipoentradasbitacora::find()
            ->orderBy('tipoentradabitacora')
            ->all();
    ?>


<?= $form->field($model, 'tipoentradabitacora_id')
     ->dropDownList(
            ArrayHelper::map($tipoentradasbitacora, 'id', 'tipoentradabitacora')
            )
?>

    <?= $form->field($model, 'fechaentrada')->textInput() ?>

    <?= $form->field($model, 'entrada')->textarea(['rows' => 25]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
