<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "course".
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 *
 * @property Studentgroupecoursewithteacher[] $studentgroupecoursewithteachers
 */
class Course extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required','message'=>'Введите наименование курса'],
            [['name', 'description'], 'string', 'max' => 255],
            [['description'],'default','value'=>'Без описания']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'name' => 'Наименование',
            'description' => 'Описание',
        ];
    }

    /**
     * Gets query for [[Studentgroupecoursewithteachers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudentgroupecoursewithteachers()
    {
        return $this->hasMany(Studentgroupecoursewithteacher::className(), ['course_id' => 'id']);
    }
}
