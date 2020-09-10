<?php
use yii\helpers\Html;
use yii\bootstrap\BootstrapAsset;
/* @var $this yii\web\View */

$this->title = 'Курсы для студентов';
?>



<div class="site-index">



    <div class="body-content">

        <div class="row">
            <div class="col">
                <div class="col-sm-2"> <?= Html::a('Студенты', ['student/index'], ['class' => 'btn btn-info btn-lg','style'=>'width:100%']) ?></div>
            </div>
            <div class="col">
                <div class="col-sm-2"><?= Html::a('Группы', ['student-groupe/index'], ['class' => 'btn btn-info btn-lg','style'=>'width:100%']) ?></div>
            </div>
            <div class="col">
                <div class="col-sm-4"><?= Html::a('Преподаватели', ['teacher/index'], ['class' => 'btn btn-info btn-lg' ,'style'=>'width:100%']) ?></div>
            </div>
            <div class="col">
                <div class="col-sm-2"><?= Html::a('Курсы', ['course/index'], ['class' => 'btn btn-info btn-lg','style'=>'width:100%']) ?></div>
            </div>
            <div class="col">
                <div class="col-sm-2"><?= Html::a('Записи на курс', ['record/index'], ['class' => 'btn btn-info btn-lg','style'=>'width:100%']) ?></div>
            </div>
        </div>

    </div>
</div>

