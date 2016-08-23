<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property integer $category_id
 * @property string $category_type
 * @property string $category_date_created
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_type', 'category_date_created'], 'required'],
            [['category_date_created'], 'safe'],
            [['category_type'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'category_id' => 'Category ID',
            'category_type' => 'Category Type',
            'category_date_created' => 'Category Date Created',
        ];
    }
}
