<?php

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Imagen con Botón en Yii2</title>
    
</head>
<body>
<H1>Laboratorio de Sistemas y Computación</H1>
<div class="image-container">
    <?= Html::img('@web/images/laboratorio_hd.jpeg', ['alt' => 'Mi Imagen']); ?>
 <!--?= Html::button('LC1', ['class' =>'button_lc1']); ?-->
   
    <?= Html::button('LC1', ['class' => 'button_lc1', 'onclick' => "location.href='" . \yii\helpers\Url::to(['site/lc1']) . "';"]) ?>
    <?= Html::button('LC2', ['class' => 'button_lc2', 'onclick' => "location.href='" . \yii\helpers\Url::to(['site/lc2']) . "';"]) ?>
    <?= Html::button('LC3', ['class' => 'button_lc3', 'onclick' => "location.href='" . \yii\helpers\Url::to(['site/lc3']) . "';"]) ?>
    <?= Html::button('LC4', ['class' => 'button_lc4', 'onclick' => "location.href='" . \yii\helpers\Url::to(['site/lc4']) . "';"]) ?>
    <?= Html::button('LC5', ['class' => 'button_lc5', 'onclick' => "location.href='" . \yii\helpers\Url::to(['site/lc5']) . "';"]) ?>
    <?= Html::button('LC6', ['class' => 'button_lc6', 'onclick' => "location.href='" . \yii\helpers\Url::to(['site/lc6']) . "';"]) ?>
    
    


    <!--Crear otros tres botones para las salas LC4, LC5 Y LC6 -->
</div>

</body>
</html>
