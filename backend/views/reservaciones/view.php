<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Reservaciones */

$this->title = $model->idReserva;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Reservaciones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="reservaciones-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idReserva], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idReserva], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idReserva',
            'servicio',
            'fllegada',
            'adulto',
            'nino',
            'bebe',
            'pax',
            'hotel',
            'localizado',
            'cliente',
            'email:email',
            'telefono',
            'celulaar',
            'pais',
            'direccion',
            'ciudad',
            'aerolineallegada',
            'vuelollegada',
            'horallegada',
            'aerolineasalida',
            'vuelosalida',
            'comentarios',
            'idproveedor',
            'Activo',
            'fsalida',
            'idApoyo',
            'Amenidades',
            'fecha_captura',
            'customer_service',
            'costo',
            'tipo_unidad',
            'status',
        ],
    ]) ?>

</div>
