<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property integer $supplier_id
 * @property string $supplier_name
 * @property integer $contact_no
 * @property string $supplier_email
 */
class Supplier extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'supplier';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['supplier_name', 'contact_no', 'supplier_email'], 'required'],
            [['contact_no'], 'integer'],
            [['supplier_name'], 'string', 'max' => 100],
            [['supplier_email'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'supplier_id' => 'Supplier ID',
            'supplier_name' => 'Supplier Name',
            'contact_no' => 'Contact No',
            'supplier_email' => 'Supplier Email',
        ];
    }
}
