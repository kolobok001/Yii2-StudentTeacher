<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-form">

    <?php $form = ActiveForm::begin();
    $groups=\app\models\StudentGroupe::find()->all();
    $itemsGroups=ArrayHelper::map($groups,'id','number');
    $paramsGroup = [
        'prompt' => 'Выберите группу...'
    ];?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'groupe_id')->dropDownList($itemsGroups,$paramsGroup); ?>

    <?= $form->field($model, 'photo')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>


    <?php ActiveForm::end(); ?>


</div>
