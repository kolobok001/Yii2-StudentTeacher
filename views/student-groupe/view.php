<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\StudentGroupe */
/* @var $students yii\data\ActiveDataProvider */

$this->title = $model->number;
$this->params['breadcrumbs'][] = ['label' => 'Группы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="student-groupe-view">

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
            'number',
            'department',
        ],
    ]) ?>
    <?= GridView::widget([
        'dataProvider' => $students,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            [
                'format' => 'html',
                'label' => 'ФИО',
                'value' => function($data){
                    return $data->GetStudentLink();
                }
            ],
            
            [
                'format' => 'html',
                'label' => 'Изображение',
                'value' => function($data){
                    return Html::img($data->getImage(), ['width'=>100]);
                }
            ],


        ],
    ]); ?>

</div>
