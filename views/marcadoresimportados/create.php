<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Marcadoresimportados */

$this->title = 'Create Marcadoresimportados';
$this->params['breadcrumbs'][] = ['label' => 'Marcadoresimportados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marcadoresimportados-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
