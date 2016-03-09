<?php
use yii\bootstrap\Carousel;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
     <div  align="center">
<?php    echo Carousel::widget([
    'items' => [
        // the item contains only the image
        ['content' => '<img src="https://lh3.googleusercontent.com/-NdAY9l0EHVA/TyQC8Fi62TI/AAAAAAAABIg/UYJ57AaUhoA/s800-Ic42/Snapshot_20080609_3.jpg"/>',
        'caption' => '<h4>La foto con Ric</h4><p>This is the caption text</p>',
        ],
        // equivalent to the above
        ['content' => '<img src="https://lh3.googleusercontent.com/-7TlWAXK3tBI/TyQDPjJCARI/AAAAAAAAC2Y/9M2N8OgJlnY/s640-Ic42/IMG_0613.JPG"/>'
        ],
        // the item contains both the image and the caption
        ['content' => '<img src="https://lh3.googleusercontent.com/-NdAY9l0EHVA/TyQC8Fi62TI/AAAAAAAABIg/UYJ57AaUhoA/s800-Ic42/Snapshot_20080609_3.jpg"/>',
            'caption' => '<h4>La foto con Ric segunda</h4><p>This is the caption text</p>',
        ],               
    ],  
    'options' => ['style'=>'width:640px', 'height' => '480px'],
  //  'options' => ['style'=>'heigth:480px'],
]);
?>
</div>
    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
