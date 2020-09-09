<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StudentGroupeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Student Groupes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-groupe-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Student Groupe', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'number',
            'department',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
