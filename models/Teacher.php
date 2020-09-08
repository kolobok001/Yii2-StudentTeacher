<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teacher".
 *
 * @property int $id
 * @property string $name
 * @property string|null $academic_degree
 *
 * @property Studentgroupecoursewithteacher[] $studentgroupecoursewithteachers
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teacher';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name', 'academic_degree'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'academic_degree' => 'Academic Degree',
        ];
    }

    /**
     * Gets query for [[Studentgroupecoursewithteachers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudentgroupecoursewithteachers()
    {
        return $this->hasMany(Studentgroupecoursewithteacher::className(), ['teacher_id' => 'id']);
    }
}
