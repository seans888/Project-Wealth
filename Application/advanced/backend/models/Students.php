<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property integer $student_id
 * @property string $student_fname
 * @property string $student_mname
 * @property string $studet_lname
 * @property string $student_email
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'student_fname', 'student_mname', 'studet_lname', 'student_email'], 'required'],
            [['student_id'], 'integer'],
            [['student_fname', 'student_mname', 'studet_lname', 'student_email'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'student_id' => 'Student ID',
            'student_fname' => 'Student Fname',
            'student_mname' => 'Student Mname',
            'studet_lname' => 'Studet Lname',
            'student_email' => 'Student Email',
        ];
    }
}
