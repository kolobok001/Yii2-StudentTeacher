<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "studentgroupecoursewithteacher".
 *
 * @property int $id
 * @property int $groupe_id
 * @property int $teacher_id
 * @property int $course_id
 * @property int $status
 *
 * @property Course $course
 * @property Studentgroupe $groupe
 * @property Teacher $teacher
 */
class StudentGroupeCourseWithTeacher extends \yii\db\ActiveRecord
{
    const STATUS_NEW = 1;
    const STATUS_OK = 2;
    const STATUS_CANCEL = 3;


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'studentgroupecoursewithteacher';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['groupe_id', 'teacher_id', 'course_id', 'status'], 'required'],
            [['groupe_id', 'teacher_id', 'course_id', 'status'], 'integer'],
            [['course_id'], 'exist', 'skipOnError' => true, 'targetClass' => Course::className(), 'targetAttribute' => ['course_id' => 'id']],
            [['groupe_id'], 'exist', 'skipOnError' => true, 'targetClass' => Studentgroupe::className(), 'targetAttribute' => ['groupe_id' => 'id']],
            [['teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Teacher::className(), 'targetAttribute' => ['teacher_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'groupe_id' => 'Groupe ID',
            'teacher_id' => 'Teacher ID',
            'course_id' => 'Course ID',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Course]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCourse()
    {
        return $this->hasOne(Course::className(), ['id' => 'course_id']);
    }

    /**
     * Gets query for [[Groupe]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGroupe()
    {
        return $this->hasOne(Studentgroupe::className(), ['id' => 'groupe_id']);
    }

    /**
     * Gets query for [[Teacher]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(Teacher::className(), ['id' => 'teacher_id']);
    }
    public function getStatusName()
    {
        return ArrayHelper::getValue(self::getStatusesArray(), $this->status);
    }

    public static function getStatusesArray()
    {
        return [
            self::STATUS_NEW => 'На согласовании',
            self::STATUS_OK => 'Согласовано',
            self::STATUS_CANCEL => 'Отклонено',
        ];
    }
}
