<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StudentGroupeCourseWithTeacher */
$courseName=$model->getCourseTitleName();
$this->title = 'Редактирование записи на курс: ' . $courseName;
$this->params['breadcrumbs'][] = ['label' => 'Записи на курс', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $courseName, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="student-groupe-course-with-teacher-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
