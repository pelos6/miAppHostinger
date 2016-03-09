<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Salidas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="salidas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <?php 
    $a= ['10' => '10', '11' => '11', '12' => '12']; 
    $b=array();
    $limite = 5 ;
     while ($limite < 25)
          {
          //  error_log('DEBUG: '. $limite);
            $b[$limite] = $limite .' Kms';
            $limite ++;
          };
   // echo '<pre>';
   // echo 'que no cambia'; 
   //  print_r($a); 
   //  print_r($b); 
   // echo ' </pre>';
    ?>
    <?= $form->field($model, 'distancia')->dropDownList($b); ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>