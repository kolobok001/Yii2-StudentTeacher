<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StudentGroupeCourseWithTeacher */

$this->title = 'Записи на курс - создание';
$this->params['breadcrumbs'][] = ['label' => 'Записи на курс', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-groupe-course-with-teacher-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
