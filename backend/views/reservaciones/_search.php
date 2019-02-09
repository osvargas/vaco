<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReservacionesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reservaciones-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'idReserva') ?>

    <?= $form->field($model, 'servicio') ?>

    <?= $form->field($model, 'fllegada') ?>

    <?= $form->field($model, 'adulto') ?>

    <?= $form->field($model, 'nino') ?>

    <?php // echo $form->field($model, 'bebe') ?>

    <?php // echo $form->field($model, 'pax') ?>

    <?php // echo $form->field($model, 'hotel') ?>

    <?php // echo $form->field($model, 'localizado') ?>

    <?php // echo $form->field($model, 'cliente') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'telefono') ?>

    <?php // echo $form->field($model, 'celulaar') ?>

    <?php // echo $form->field($model, 'pais') ?>

    <?php // echo $form->field($model, 'direccion') ?>

    <?php // echo $form->field($model, 'ciudad') ?>

    <?php // echo $form->field($model, 'aerolineallegada') ?>

    <?php // echo $form->field($model, 'vuelollegada') ?>

    <?php // echo $form->field($model, 'horallegada') ?>

    <?php // echo $form->field($model, 'aerolineasalida') ?>

    <?php // echo $form->field($model, 'vuelosalida') ?>

    <?php // echo $form->field($model, 'comentarios') ?>

    <?php // echo $form->field($model, 'idproveedor') ?>

    <?php // echo $form->field($model, 'Activo') ?>

    <?php // echo $form->field($model, 'fsalida') ?>

    <?php // echo $form->field($model, 'idApoyo') ?>

    <?php // echo $form->field($model, 'Amenidades') ?>

    <?php // echo $form->field($model, 'fecha_captura') ?>

    <?php // echo $form->field($model, 'customer_service') ?>

    <?php // echo $form->field($model, 'costo') ?>

    <?php // echo $form->field($model, 'tipo_unidad') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
