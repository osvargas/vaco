<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ReservacionesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Reservaciones');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reservaciones-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Reservaciones'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idReserva',
            'servicio',
            'fllegada',
            'adulto',
            'nino',
            //'bebe',
            //'pax',
            //'hotel',
            //'localizado',
            //'cliente',
            //'email:email',
            //'telefono',
            //'celulaar',
            //'pais',
            //'direccion',
            //'ciudad',
            //'aerolineallegada',
            //'vuelollegada',
            //'horallegada',
            //'aerolineasalida',
            //'vuelosalida',
            //'comentarios',
            //'idproveedor',
            //'Activo',
            //'fsalida',
            //'idApoyo',
            //'Amenidades',
            //'fecha_captura',
            //'customer_service',
            //'costo',
            //'tipo_unidad',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
