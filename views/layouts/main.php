<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\models\User;
use app\assets\AppAsset;

AppAsset::register($this);
$asset = \app\assets\AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?= $asset->baseUrl ?>/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?= $asset->baseUrl ?>/favicon.ico" type="image/x-icon">
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
                    ['label' => 'Control Peso',
                             'items' => 
                                [ Yii::$app->user->isGuest ?
                                ['label' => 'Pesos index', 'url' => ['/peso/index'], 'visible' => false] :
                                ['label' => 'Pesos index', 'url' => ['/peso/index'], 'visible' => User::isUserSimple(Yii::$app->user->identity->id)],
                                Yii::$app->user->isGuest ?
                                ['label' => 'Grafica Peso 1', 'url' => ['/cosas/peso'], 'visible' => false] :
                                ['label' => 'Grafica Peso 1', 'url' => ['/cosas/peso'], 'visible' => User::isUserSimple(Yii::$app->user->identity->id)],
                                //['label' => 'Grafica Peso 2', 'url' => ['/peso/grafica']],
                                 Yii::$app->user->isGuest ?
                                ['label' => 'Grafica Peso 2', 'url' => ['/cosas/peso'], 'visible' => false] :
                                ['label' => 'Grafica Peso 2', 'url' => ['/cosas/peso'], 'visible' => User::isUserSimple(Yii::$app->user->identity->id)],
                                Yii::$app->user->isGuest ?
                                ['label' => 'Pesado ?', 'url' => ['/peso/pesado'], 'visible' => false] :
                                ['label' => 'Pesado ?', 'url' => ['/peso/pesado'], 'visible' => User::isUserSimple(Yii::$app->user->identity->id)],
                                     /*   ['label' => 'Level 2 - 2', 'url' => '#'],
                                        ['label' => 'Level 2 - 3',
                                                    'items' => [['label' => 'Level 3 - 1', 'url' => '#'],
                                                        ['label' => 'Level 3 - 2', 'url' => '#'],
                                                    ],
                                                ],*/
                                ]
                        ],
                    ['label' => 'Bitacora',
                             'items' => 
                                [ Yii::$app->user->isGuest ?
                                ['label' => 'Entrada', 'url' => ['/entradasbitacora/index'], 'visible' => false] :
                                ['label' => 'Entrada', 'url' => ['/entradasbitacora/index'], 'visible' => User::isUserCurro(Yii::$app->user->identity->id)],
                                Yii::$app->user->isGuest ?
                                ['label' => 'Tipo Entrada', 'url' => ['/tipoentradasbitacora/index'], 'visible' => false] :
                                ['label' => 'Tipo Entrada', 'url' => ['/tipoentradasbitacora/index'], 'visible' => User::isUserCurro(Yii::$app->user->identity->id)],
                                ]
                        ],
                    ['label' => 'About', 'url' => ['/site/about']],
                    ['label' => 'Contact', 'url' => ['/site/contact']],
                    Yii::$app->user->isGuest ?
                            ['label' => 'Salidas', 'url' => ['/prueba/a'], 'visible' => false] :
                            ['label' => 'Salidas', 'url' => ['/prueba/a'], 'visible' => User::isUserSimple(Yii::$app->user->identity->id)], 
                    Yii::$app->user->isGuest ?
                            ['label' => 'Salidas', 'url' => ['/salidas/index'], 'visible' => false] :
                            ['label' => 'Salidas', 'url' => ['/salidas/index'], 'visible' => User::isUserSimple(Yii::$app->user->identity->id)],                    
                    Yii::$app->user->isGuest ?
                            ['label' => 'Visitas', 'url' => ['/site/visitas'], 'visible' => false] :
                            ['label' => 'Visitas', 'url' => ['/site/visitas'], 'visible' => User::isUserSimple(Yii::$app->user->identity->id)],
                    Yii::$app->user->isGuest ?
                            ['label' => 'Marcadores', 'url' => ['/marcadoresimportados/index'], 'visible' => false] :
                            ['label' => 'Marcadores', 'url' => ['/marcadoresimportados/index'], 'visible' => User::isUserSimple(Yii::$app->user->identity->id)],
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
