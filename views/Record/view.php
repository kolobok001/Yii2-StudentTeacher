<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\StudentGroupeCourseWithTeacher */
$courseName=$model->getCourseTitleName();
$this->title = $courseName;
$this->params['breadcrumbs'][] = ['label' => 'Записи на курс', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="student-groupe-course-with-teacher-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'format' => 'html',
                'label' => 'Группа',
                'value' => function($data){
                    return $data->GetGroupeLink();
                }
            ],
            [
                'format' => 'html',
                'label' => 'Преподаватель',
                'value' => function($data){
                    return $data->GetTeacherLink();
                }
            ],
            [
                'format' => 'html',
                'label' => 'Курс',
                'value' => function($data){
                    return $data->GetCourseLink();
                }
            ],
            [
                'format' => 'html',
                'label' => 'Статус',
                'value' => function($data){
                    return '<font color="'.$data->getStatusStyle().'">'.$data->getStatusName().'</font>';
                }
            ],
        ],
    ]) ?>

</div>
