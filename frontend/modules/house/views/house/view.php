<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\house\models\House */

$this->title = $model->house_id;
$this->params['breadcrumbs'][] = ['label' => 'Houses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="house-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('แก้ไขพิกัดบ้าน', ['update', 'id' => $model->house_id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'house_id',
            'address',
			[
				'attribute' => 'village_id',
				'filter' => FALSE,
				'value' => function($model){return  $model->vill->villname ;},
			],
            'latitude',
            'longitude',
        ],
    ]) ?>

</div>
