<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\RecordSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Записи групп на курсы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-groupe-course-with-teacher-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Записать группу на курс', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
