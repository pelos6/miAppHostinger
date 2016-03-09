<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="wrap">
            <?php
            NavBar::begin([
                'brandLabel' => 'Mi App',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Home', 'url' => ['/site/index']],
                    ['label' => 'About', 'url' => ['/site/about']],
                    ['label' => 'Contact', 'url' => ['/site/contact']],
                    ['label' => 'GraficaPesos', 'url' => ['/peso/grafica']],
                    Yii::$app->user->isGuest ?
                            ['label' => 'Visitas', 'url' => ['/site/visitas'], 'visible' => false] :
                            ['label' => 'Visitas', 'url' => ['/site/visitas'], 'visible' => true],
                    Yii::$app->user->isGuest ?
                            ['label' => 'Pesado', 'url' => ['/peso/pesado'], 'visible' => false] :
                            ['label' => 'Pesado', 'url' => ['/peso/pesado'], 'visible' => true],
                    Yii::$app->user->isGuest ?
                            ['label' => 'Marcadores', 'url' => ['/marcadoresimportados/index'], 'visible' => false] :
                            ['label' => 'Marcadores', 'url' => ['/marcadoresimportados/index'], 'visible' => true],
                    Yii::$app->user->isGuest ?
                            ['label' => 'Pesos', 'url' => ['/peso/index'], 'visible' => false] :
                            ['label' => 'Pesos', 'url' => ['/peso/index'], 'visible' => true],
                    Yii::$app->user->isGuest ?
                            ['label' => 'Peso', 'url' => ['/cosas/peso'], 'visible' => false] :
                            ['label' => 'Peso', 'url' => ['/cosas/peso'], 'visible' => true],
                    Yii::$app->user->isGuest ?
                            ['label' => 'Login', 'url' => ['/site/login']] :
                            [
                        'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                        'url' => ['/site/logout'],
                        'linkOptions' => ['data-method' => 'post']
                            ],
                ],
            ]);
            NavBar::end();
            ?>

            <div class="container">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                <?= $content ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
              <p class="pull-left">&copy; Mi App  <?= Yii::$app->params["version"] .' '. date('Y')?></p>

                <p class="pull-right"><?= Yii::powered() ?></p>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
