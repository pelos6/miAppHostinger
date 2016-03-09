<?php

use yii\helpers\Html;
use yii\jui\DatePicker;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Peso */
$this->title = 'Nuevo Pesoewewewewe';
$this->params['breadcrumbs'][] = ['label' => 'Pesos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peso-create">

<?php
echo DatePicker::widget([
    'model' => $model,
    'attribute' => 'fecha',
    //'template' => '{addon}{input}',
    //'language' => 'ru',
    //'dateFormat' => 'yyyy-MM-dd',
]); ?>
<?php $form = ActiveForm::begin([
    "method" => "post",
 'enableClientValidation' => true,
]);
?>


    <h1><?= Html::encode($this->title) ?></h1>
<?= $form->field($model, 'fecha')->widget(DatePicker::classname(), [
    'language' => 'ru',
    //'dateFormat' => 'yyyy-MM-dd',
]) ?>

<div class="form-group">
 <?= $form->field($model, "peso")->input("text") ?>   


  <?php echo DatePicker::widget([
               'model' => $model,
               'attribute' => 'fecha',
              // 'language' => 'en',
               'dateFormat' => 'yyyy-MM-dd',
           ]);
        ?>
</div>
<?= Html::submitButton("Crear", ["class" => "btn btn-primary"]) ?>

<?php $form->end() ?>

</div>

