<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "item_category".
 *
 * @property integer $item_id
 * @property integer $category_id
 */
class item_category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id', 'category_id'], 'required'],
            [['item_id', 'category_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'item_id' => 'Item ID',
            'category_id' => 'Category ID',
        ];
    }
}
