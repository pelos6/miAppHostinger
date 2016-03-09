<?php

use yii\helpers\Html;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Peso */
$this->title = 'Nuevo Peso';
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



    <h1><?= Html::encode($this->title) ?></h1>
<?= $form->field($model, 'fecha')->widget(DatePicker::classname(), [
    //'language' => 'ru',
    //'dateFormat' => 'yyyy-MM-dd',
]) ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

