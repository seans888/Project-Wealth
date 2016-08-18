<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "item".
 *
 * @property integer $item_id
 * @property integer $item_name
 * @property integer $selling_price
 * @property integer $unit_cost
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_name', 'selling_price', 'unit_cost'], 'required'],
            [['item_name', 'selling_price', 'unit_cost'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'item_id' => 'Item ID',
            'item_name' => 'Item Name',
            'selling_price' => 'Selling Price',
            'unit_cost' => 'Unit Cost',
        ];
    }
}
