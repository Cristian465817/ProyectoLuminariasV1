<?php

/** @var yii\web\View $this */
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<!DOCTYPE html>
<html>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">BIENVENIDOS</h1>

        <p class="lead">Proyecto de asistenia luminarias. </br> 
        Hecho por: </br> 
        Thayly Osiris Cerecedo Vera </br> 
        Cristian Irán Hernández Gonzaga 
 </p>

        <!-- <p><a class="btn btn-lg btn-success" href="C:\xampp\htdocs\asistente\AsistenteVirtualM2.py">Asistente Virtual</a></p> -->

        <?= Html::button('ON / OFF', [
            'class' => 'button_led_on_off_1-3',
            'onclick' => "location.href='" . Url::to(['site/run-python']) . "';"
        ]) ?>

        
       

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4 mb-3">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4 mb-3">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#run-python').click(function() {
            $.ajax({
                url: 'run_python.php',
                method: 'GET',
                success: function(response) {
                    $('#output').html(response);
                },
                error: function() {
                    $('#output').html('<p>Error al ejecutar el script Python.</p>');
                }
            });
        });
    });

    $('#stop-python').click(function() {
            $.ajax({
                url: 'stop_python.php',
                method: 'GET',
                success: function(response) {
                    $('#output').html(response);
                },
                error: function() {
                    $('#output').html('<p>Error al detener el script Python.</p>');
                }
            });
        });
    });
</script>
