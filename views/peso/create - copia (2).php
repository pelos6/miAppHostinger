<?php

use yii\helpers\Html;
use yii\bootstrap\Modal;
use kartik\widgets\ActiveForm;
use kartik\widgets\DatePicker;


/* @var $this yii\web\View */
/* @var $model app\models\Peso */

$this->title = 'Nuevo Peso';
$this->params['breadcrumbs'][] = ['label' => 'Pesos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peso-create">

    <h1><?= Html::encode($this->title) ?></h1>

<?='<label class="control-label">Birth Date</label>';
echo DatePicker::widget([
    'model' => $model, 
    'attribute' => 'date_1',
    'options' => ['placeholder' => 'Enter birth date ...'],
    'pluginOptions' => [
        'autoclose'=>true
    ]
]);
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
