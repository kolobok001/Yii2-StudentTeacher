<?php

namespace app\models;

use Yii;

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
            [['name'], 'string', 'max' => 255],
            [['photo'], 'file', 'extensions' => 'png, jpg'],
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
        return $this->hasOne(Studentgroupe::className(), ['id' => 'groupe_id']);
    }
    public function getImage()
    {
        return ($this->photo) ? '/uploads/' . $this->photo : '/no-image.png';
    }


}
