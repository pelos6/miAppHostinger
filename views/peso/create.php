<?php

use yii\helpers\Html;
use yii\jui\DatePicker;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\ListaPesos;


/* @var $this yii\web\View */
/* @var $model app\models\Peso */
$this->title = 'Nuevo Peso';
$this->params['breadcrumbs'][] = ['label' => 'Pesos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peso-create">

<?php $form = ActiveForm::begin([
    "method" => "post",
 'enableClientValidation' => true,
]);
?>

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="form-group">
<?php echo $form->field($model, 'fecha')->widget(DatePicker::classname(), [
    'language' => 'es',
    'dateFormat' => 'yyyy-MM-dd',
]) 
?>


  <?=
$form->field($model, 'peso')
     ->dropDownList(
            ArrayHelper::map(ListaPesos::find()->all(), 'pesos', 'pesos')
            )
?>
 
</div>
<?= Html::submitButton("Crear", ["class" => "btn btn-primary"]) ?>

<?php $form->end() ?>

</div>