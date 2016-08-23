<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "items".
 *
 * @property integer $item_id
 * @property integer $category_id
 * @property string $item_name
 * @property integer $item_selling_price
 * @property integer $item_unit_cost
 * @property string $item_date_created
 * @property string $item_description
 */
class Items extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'items';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'item_name', 'item_selling_price', 'item_unit_cost', 'item_date_created', 'item_description'], 'required'],
            [['category_id', 'item_selling_price', 'item_unit_cost'], 'integer'],
            [['item_date_created'], 'safe'],
            [['item_description'], 'string'],
            [['item_name'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'item_id' => 'Item ID',
            'category_id' => 'Category Type',
            'item_name' => 'Item Name',
            'item_selling_price' => 'Item Selling Price',
            'item_unit_cost' => 'Item Unit Cost',
            'item_date_created' => 'Item Date Created',
            'item_description' => 'Item Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasOne(Categories::className(), ['category_id' => 'category_id']);
    }
}
