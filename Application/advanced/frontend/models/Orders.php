<?php

namespace frontend\models;

use Yii;
use backend\models\Items;
use backend\models\Categories;
use backend\models\User;

/**
 * This is the model class for table "orders".
 *
 * @property integer $order_id
 * @property integer $item_id
 * @property integer $qty
 * @property string $cus_fname
 * @property string $cus_lname
 * @property string $order_date_created
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id', 'qty', 'cus_fname', 'cus_lname', 'order_date_created'], 'required'],
            [['item_id', 'qty'], 'integer'],
            [['order_date_created'], 'safe'],
            [['cus_fname', 'cus_lname'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'item_id' => 'Item Name',
            'qty' => 'Qty',
            'cus_fname' => 'Cus Fname',
            'cus_lname' => 'Cus Lname',
            'order_date_created' => 'Order Date Created',
        ];
    }

     /**
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasOne(Items::className(), ['item_id' => 'item_id']);
    }



}
