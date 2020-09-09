<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\StudentGroupeCourseWithTeacher */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-groupe-course-with-teacher-form">

    <?php $form = ActiveForm::begin();
    $courses=\app\models\Course::find()->all();
    $teachers=\app\models\Teacher::find()->all();
    $groups=\app\models\StudentGroupe::find()->all();
    $itemsCourse=ArrayHelper::map($courses,'id','name');
    $itemsTeachers=ArrayHelper::map($teachers,'id','name');
    $itemsGroups=ArrayHelper::map($groups,'id','number');
    $itemsStatus=[
        '1' => 'На согласовании',
        '2' => 'Согласовано',
        '3'=>'Отклонено'
    ];
    $paramsCourse = [
        'prompt' => 'Выберите курс...'
    ];
    $paramsGroup = [
        'prompt' => 'Выберите группу...'
    ];
    $paramsTeacher = [
        'prompt' => 'Выберите преподавателя...'
    ];
    $paramsStatus = [
        'prompt' => 'Выберите статус...'
    ];
    ?>



    <?= $form->field($model, 'groupe_id')->dropDownList($itemsGroups,$paramsGroup); ?>
    <?= $form->field($model, 'teacher_id')->dropDownList($itemsTeachers,$paramsTeacher); ?>
    <?= $form->field($model, 'course_id')->dropDownList($itemsCourse,$paramsCourse); ?>
    <?= $form->field($model, 'status')->dropDownList($itemsStatus,$paramsStatus); ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
