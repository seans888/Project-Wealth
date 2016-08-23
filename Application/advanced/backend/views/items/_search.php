<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ItemsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="items-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'item_id') ?>

    <?= $form->field($model, 'category_id') ?>

    <?= $form->field($model, 'item_name') ?>

    <?= $form->field($model, 'item_selling_price') ?>

    <?= $form->field($model, 'item_unit_cost') ?>

    <?php // echo $form->field($model, 'item_date_created') ?>

    <?php // echo $form->field($model, 'item_description') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
