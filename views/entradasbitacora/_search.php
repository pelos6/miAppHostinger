<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
//use yii\jui\DatePicker;
use kartik\date\DatePicker;
// http://demos.krajee.com/widget-details/datepicker#markup-input


/* @var $this yii\web\View */
/* @var $model app\models\EntradasbitacoraSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="entradasbitacora-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

 <?= $form->field($model, 'fechaentrada')->
    widget(DatePicker::classname(), [
    'options' => ['placeholder' => 'Fecha de entrada'],
    'pluginOptions' => [
        'id' => 'fecha1',
        'autoclose'=>true,
        'format' => 'yyyy-mm-dd',
        'todayHighlight' => true,
    ],
       'options' => ['style'=>'width:140px'],
])?>
 <?php echo $form->field($model, 'fecha_desde')->widget(DatePicker::classname(), [
    'options' => ['placeholder' => ''],
    'pluginOptions' => [
        'id' => 'fecha2',
        'autoclose'=>true,
        'format' => 'yyyy-mm-dd',
        'todayHighlight' => true,
    ],
       'options' => ['style'=>'width:140px'],
]);

echo $form->field($model, 'fecha_hasta')->widget(DatePicker::classname(), [
    'options' => ['placeholder' => ''],
    'pluginOptions' => [
        'id' => 'fecha3',
        'autoclose'=>true,
        'format' => 'yyyy-mm-dd',
        'todayHighlight' => true,
    ],
       'options' => ['style'=>'width:140px'],
]);

?>

    <?= $form->field($model, 'entrada') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Buscar'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Limpiar'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
