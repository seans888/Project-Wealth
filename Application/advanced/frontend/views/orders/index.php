<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Orders', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                 'attribute'=>'item_id',
                'value'=>'items.item_name'
            ],

           // 'order_id',
           // 'item_id',
            'qty',
            'cus_fname',
            'cus_lname',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>



   Your username is:  <?= \Yii::$app->user->username ?> <br>
   Your id is :  <?= \Yii::$app->user->id ?> <br>
   Your First name is :  <?= \Yii::$app->user->first_name ?> <br>
   Your Last name is : <?= \Yii::$app->user->last_name ?> <br>

</div>
