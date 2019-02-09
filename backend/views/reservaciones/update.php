<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reservaciones */

$this->title = Yii::t('app', 'Update Reservaciones: {name}', [
    'name' => $model->idReserva,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Reservaciones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idReserva, 'url' => ['view', 'id' => $model->idReserva]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="reservaciones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
