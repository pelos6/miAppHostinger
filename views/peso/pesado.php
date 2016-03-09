<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Peso */

//$this->title = $model->fecha;
$this->title = 'pesado';
$this->params['breadcrumbs'][] = ['label' => 'Pesos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

//$connection = new \yii\db\Connection([
//    'dsn' => 'oci:dbname=//127.0.0.1:1521/XE',
//    'username' => 'javier',
//    'password' => 'pelos678',
//]);
//$connection->open();
//$command = $connection->createCommand('SELECT * FROM peso');
//$posts = $command->queryAll();
//echo '<pre>'; print_r($posts); exit;
?>
<div class="peso-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <h4><?= Html::encode($model->peso) ?></h4>
</div>


