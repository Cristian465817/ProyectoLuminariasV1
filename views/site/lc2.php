<?php

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LC2</title>
</head>
<body>
    <h1>Sala LC2</h1>

    <div class="image-containerFull">
    <?= Html::img('@web/images/image_lc2_hd.jpeg', ['alt' => 'Mi Imagen']); ?>

   
    <?= Html::button('ON / OFF', ['class' => 'button_led_on_off_1-3', 'onclick' => "location.href='" . \yii\helpers\Url::to(['site/lc1']) . "';"]) ?>
  
    </div>

</body>
</html>