<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "inventory".
 *
 * @property integer $id_inventory
 * @property integer $item
 * @property integer $begQty
 * @property integer $qtyOnhand
 */
class Inventory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inventory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_inventory', 'item', 'begQty', 'qtyOnhand'], 'required'],
            [['id_inventory', 'item', 'begQty', 'qtyOnhand'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_inventory' => 'Id Inventory',
            'item' => 'Item',
            'begQty' => 'Beg Qty',
            'qtyOnhand' => 'Qty Onhand',
        ];
    }
}
