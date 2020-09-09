<?php

namespace app\models;

use Yii;
use yii\helpers\Html;

/**
 * This is the model class for table "student".
 *
 * @property int $id
 * @property string $name
 * @property int $groupe_id
 * @property string|null $photo
 *
 * @property Studentgroupe $groupe
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName(){
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules(){
        return [
            [['name', 'groupe_id'], 'required'],
            [['groupe_id'], 'integer'],
            [['name'], 'string', 'min'=>4,'max' => 255],
            [['photo'], 'file', 'extensions' => 'png, jpg, jpeg, img','message'=>'Неверное расширение файла фотографии'],
            [['groupe_id'], 'exist', 'skipOnError' => true, 'targetClass' => Studentgroupe::className(), 'targetAttribute' => ['groupe_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels(){
        return [
            'id' => 'ID',
            'name' => 'ФИО',
            'groupe_id' => 'Группа',
            'photo' => 'Фото',
        ];
    }

    /**
     * Gets query for [[Groupe]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGroupe(){
        return $this->hasOne(StudentGroupe::className(), ['id' => 'groupe_id']);
    }
    public function getGroupeName(){
        return StudentGroupe::findOne($this->groupe_id)->number;
    }
    public function getGroupeLink(){
        return Html::a($this->getGroupeName(), ['student-groupe/view', 'id' => $this->groupe_id], ['class' => 'profile-link']);
    }

    public function getStudentLink(){
        return Html::a($this->name, ['student/view', 'id' => $this->id], ['class' => 'profile-link']);
    }
    public function getImage()
    {
        return ($this->photo) ? '/uploads/' . $this->photo : '/no-image.png';
    }


}
