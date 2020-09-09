<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "studentgroupe".
 *
 * @property int $id
 * @property string $number
 * @property string $department
 *
 * @property Student[] $students
 * @property Studentgroupecoursewithteacher[] $studentgroupecoursewithteachers
 */
class StudentGroupe extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'studentgroupe';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number', 'department'], 'required'],
            [['number', 'department'], 'string','max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'number' => 'Номер группы',
            'department' => 'Подразделение',
        ];
    }

    /**
     * Gets query for [[Students]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasMany(Student::className(), ['groupe_id' => 'id']);
    }

    /**
     * Gets query for [[Studentgroupecoursewithteachers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudentgroupecoursewithteachers()
    {
        return $this->hasMany(Studentgroupecoursewithteacher::className(), ['groupe_id' => 'id']);
    }
}
