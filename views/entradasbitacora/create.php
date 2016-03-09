<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Entradasbitacora */

$this->title = 'Crear Entradasbitacora';
$this->params['breadcrumbs'][] = ['label' => 'Entradasbitacoras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entradasbitacora-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
