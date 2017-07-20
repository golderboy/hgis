<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\house\models\House */

$this->title = 'เพิ่มบ้านหลังใหม่';
$this->params['breadcrumbs'][] = ['label' => 'Houses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="house-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
<?php
$js=<<<JS
if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(loc){
    console.log(loc.coords.latitude);
    $('#house-latitude').val(loc.coords.latitude);
    console.log(loc.coords.longitude);
    $('#house-longitude').val(loc.coords.longitude);
    });
}
JS;
$this->registerJs($js);
?>