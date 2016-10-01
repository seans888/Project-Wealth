<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "purchase".
 *
 * @property integer $purchase_id
 * @property integer $supplier_id
 * @property integer $item_id
 * @property integer $qty
 */
class Purchase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'purchase';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['supplier_id', 'item_id', 'qty'], 'required'],
            [['supplier_id', 'item_id', 'qty'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'purchase_id' => 'Purchase ID',
            'supplier_id' => 'Supplier Name',
            'item_id' => 'Item Name',
            'qty' => 'Qty',
        ];
    }
     /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplier()
    {
        return $this->hasOne(Supplier::className(), ['supplier_id' => 'supplier_id']);
    }
     public function getItems()
    {
        return $this->hasOne(Items::className(), ['item_id' => 'item_id']);
    }
}
