<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Supplier;
use backend\models\Items;

/* @var $this yii\web\View */
/* @var $model backend\models\Purchase */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="purchase-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'supplier')->textInput()->dropDownList(
        ArrayHelper::map(Supplier::find()->all(),'supplier_id','name'),
        ['prompt'=>'Select Supplier'] )?>

    <?= $form->field($model, 'item')->textInput()->textInput()->dropDownList(
        ArrayHelper::map(Items::find()->all(),'item_id','item_name'),
        ['prompt'=>'Select Item'] ) ?>

    <?= $form->field($model, 'qty')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
