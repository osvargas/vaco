<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reservaciones */

$this->title = Yii::t('app', 'Create Reservaciones');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Reservaciones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reservaciones-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
