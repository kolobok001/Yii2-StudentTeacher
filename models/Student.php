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
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'groupe_id'], 'required'],
            [['groupe_id'], 'integer'],
            [['name', 'photo'], 'string', 'max' => 255],
            [['groupe_id'], 'exist', 'skipOnError' => true, 'targetClass' => Studentgroupe::className(), 'targetAttribute' => ['groupe_id' => 'id']],
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
            'groupe_id' => 'Groupe ID',
            'photo' => 'Photo',
        ];
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
}
