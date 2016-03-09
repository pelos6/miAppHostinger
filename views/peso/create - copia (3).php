<?php

use yii\helpers\Html;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Peso */

$this->title = 'Nuevo Peso';
$this->params['breadcrumbs'][] = ['label' => 'Pesos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= DatePicker::widget([
    'model' => $model,
    'attribute' => 'fecha',
    'template' => '{addon}{input}',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
]);

?>
<div class="peso-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

