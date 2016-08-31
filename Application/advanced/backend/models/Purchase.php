<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "purchase".
 *
 * @property integer $purchase_id
 * @property integer $supplier
 * @property integer $item
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
            [['supplier', 'item', 'qty'], 'required'],
            [['supplier', 'item', 'qty'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'purchase_id' => 'Purchase ID',
            'supplier' => 'Supplier',
            'item' => 'Item',
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
        return $this->hasOne(Supplier::className(), ['item_id' => 'item_id']);
    }
}
