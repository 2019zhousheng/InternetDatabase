<?php
/** 
*team:数据库咸鱼，nku
*coding by 周坤 1711416，20190718
*/
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Nku100VolunteerWork */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nku100-volunteer-work-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NKU100_volunteerwork_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NKU100_volunteerwork_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NKU100_volunteerwork_task')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NKU100_volunteerwork_department')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
