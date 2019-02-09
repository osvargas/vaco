<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Aerolineas */

$this->title = Yii::t('app', 'Create Aerolineas');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Aerolineas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aerolineas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
