<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\house\models\HouseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="house-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'house_id') ?>

    <?= $form->field($model, 'village_id') ?>

    <?= $form->field($model, 'address') ?>

    <?= $form->field($model, 'road') ?>

    <?= $form->field($model, 'census_id') ?>

    <?php // echo $form->field($model, 'hos_guid') ?>

    <?php // echo $form->field($model, 'location_area_id') ?>

    <?php // echo $form->field($model, 'latitude') ?>

    <?php // echo $form->field($model, 'longitude') ?>

    <?php // echo $form->field($model, 'family_count') ?>

    <?php // echo $form->field($model, 'last_update') ?>

    <?php // echo $form->field($model, 'house_type_id') ?>

    <?php // echo $form->field($model, 'house_guid') ?>

    <?php // echo $form->field($model, 'village_guid') ?>

    <?php // echo $form->field($model, 'doctor_code') ?>

    <?php // echo $form->field($model, 'head_person_id') ?>

    <?php // echo $form->field($model, 'utm_lat') ?>

    <?php // echo $form->field($model, 'utm_long') ?>

    <?php // echo $form->field($model, 'house_social_survey_staff') ?>

    <?php // echo $form->field($model, 'house_subtype_id') ?>

    <?php // echo $form->field($model, 'house_condo_roomno') ?>

    <?php // echo $form->field($model, 'house_condo_name') ?>

    <?php // echo $form->field($model, 'house_housing_development_name') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
