<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tipoentradasbitacora */

$this->title = 'Crear Tipoentradasbitacora';
$this->params['breadcrumbs'][] = ['label' => 'Tipoentradasbitacoras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipoentradasbitacora-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
       /* 'model' => $model, 'items' => $items*/
        'model' => $model
    ]) ?>

</div>
