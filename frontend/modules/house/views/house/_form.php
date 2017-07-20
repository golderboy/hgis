<?php

use yii\helpers\Html;
use kartik\widgets\Select2;
use yii\helpers\ArrayHelper;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use frontend\modules\house\models\Village;
/* @var $this yii\web\View */
/* @var $model frontend\modules\house\models\House */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="house-form">

      <?php
       $form = kartik\widgets\ActiveForm::begin(
       [
           'id' => 'House-form',
       //    'enableAjaxValidation' => true,
           'fieldConfig' => [
             'autoPlaceholder'=>true

           ]

       ]);
   ?>
	  <?php
		  echo $form->field($model, 'village_id')->widget(Select2::classname(), [
			'data' =>  ArrayHelper::map(Village::find()->all(),'village_id','villname'),
			'options' => ['placeholder' => 'ชื่อหมู่บ้าน'],
			'pluginOptions' => [
			  'allowClear' => true
			  ],
			]);
	  ?>
    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'latitude')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'longitude')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
