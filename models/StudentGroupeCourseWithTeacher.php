<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

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
            'id' => 'Номер',
            'groupe_id' => 'Группа',
            'teacher_id' => 'Преподаватель',
            'course_id' => 'Курс',
            'status' => 'Статус',
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

    public function getCourseTitleName()
    {
        return Course::findOne($this->course_id)->name . ' у группы ' . \app\models\StudentGroupe::findOne($this->groupe_id)->number;
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

    public function getStatusStyle()
    {
        return  ArrayHelper::getValue(self::getStatusesStyleArray(), $this->status);
    }

    public function getGroupeName()
    {
        return StudentGroupe::findOne($this->groupe_id)->number;
    }

    public function getGroupeLink()
    {
        return Html::a($this->getGroupeName(), ['student-groupe/view', 'id' => $this->course_id], ['class' => 'profile-link']);
    }

    public function getCourseName()
    {
        return Course::findOne($this->course_id)->name;
    }

    public function getCourseLink()
    {
        return Html::a($this->getCourseName(), ['course/view', 'id' => $this->course_id], ['class' => 'profile-link']);
    }

    public function getTeacherName()
    {
        return Teacher::findOne($this->teacher_id)->name;
    }

    public function getTeacherLink()
    {
        return Html::a($this->getTeacherName(), ['teacher/view', 'id' => $this->course_id], ['class' => 'profile-link']);
    }

    public static function getStatusesArray()
    {
        return [
            self::STATUS_NEW => 'На согласовании',
            self::STATUS_OK => 'Согласовано',
            self::STATUS_CANCEL => 'Отклонено',
        ];


    }
    public static function getStatusesStyleArray()
    {
        return [
            self::STATUS_NEW => '#ffff66',
            self::STATUS_OK => '#00ff00',
            self::STATUS_CANCEL => '#cc0000',
        ];


    }
}
