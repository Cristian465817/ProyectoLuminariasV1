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
    <title>LC4</title>
</head>
<body>
    <h1>Sala LC4</h1>

    <div class="image-containerFull">
    <?= Html::img('@web/images/image_lc4_hd.jpeg', ['alt' => 'Mi Imagen']); ?>

   
    <?= Html::button('ON / OFF', ['class' => 'button_led_on_off_4', 'onclick' => "location.href='" . \yii\helpers\Url::to(['site/lc1']) . "';"]) ?>
  
    </div>

</body>
</html>