<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Items;
use backend\models\Categories;
use backend\models\User;

/* @var $this yii\web\View */
/* @var $model frontend\models\Orders */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="orders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'item_id')->dropDownList(
        ArrayHelper::map(Items::find()->all(),'item_id','item_name'),
        ['prompt'=>'Select Item']
    ) ?>

    <?= $form->field($model, 'qty')->textInput() ?>

    <?= $form->field($model, 'cus_fname')->textInput(['readonly' => true, 'value' => Yii::$app->user->first_name]) ?>

    <?= $form->field($model, 'cus_lname')->textInput(['readonly' => true, 'value' => Yii::$app->user->last_name]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
