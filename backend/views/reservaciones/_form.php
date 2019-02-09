<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Reservaciones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reservaciones-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idReserva')->textInput() ?>

    <?= $form->field($model, 'servicio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fllegada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adulto')->textInput() ?>

    <?= $form->field($model, 'nino')->textInput() ?>

    <?= $form->field($model, 'bebe')->textInput() ?>

    <?= $form->field($model, 'pax')->textInput() ?>

    <?= $form->field($model, 'hotel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'localizado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cliente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'celulaar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pais')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ciudad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aerolineallegada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vuelollegada')->textInput() ?>

    <?= $form->field($model, 'horallegada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aerolineasalida')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vuelosalida')->textInput() ?>

    <?= $form->field($model, 'comentarios')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idproveedor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Activo')->textInput() ?>

    <?= $form->field($model, 'fsalida')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idApoyo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Amenidades')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_captura')->textInput() ?>

    <?= $form->field($model, 'customer_service')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'costo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_unidad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
