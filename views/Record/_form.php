<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StudentGroupeCourseWithTeacher */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-groupe-course-with-teacher-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'groupe_id')->textInput() ?>

    <?= $form->field($model, 'teacher_id')->textInput() ?>

    <?= $form->field($model, 'course_id')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
