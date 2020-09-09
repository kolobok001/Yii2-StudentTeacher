<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StudentGroupe */

$this->title = 'Create Student Groupe';
$this->params['breadcrumbs'][] = ['label' => 'Student Groupes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-groupe-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
