<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\house\models\HouseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ระบบบันทึกพิกัดบ้าน';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="house-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เพิ่มบ้านใหม่', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'responsiveWrap' => false,
		'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
        'columns' => [
		[
				'label' => '<span class="glyphicon glyphicon-search">' ,
				'encodeLabel' => false,
				'format'=>'Html',
				//'contentOptions'=>['style'=>'min-width: 100px;'],
				'value' => function($model){
				
					  return Html::a('<span class="glyphicon glyphicon-edit">บันทึกพิกัด</span>',
								['/house/house/update',
									'id'=>$model->house_id,									
								],
								['class'=>'btn btn-info']
							);
				
				},
		],
		[
			'attribute' => 'address',
			'value' => function($model){return  $model->address ;},
		],
		[
			'attribute' => 'village_id',
			'label' => 'ชื่อหมู่บ้าน',
			'filter' => FALSE,
			'value' => function($model){return  $model->vill->villname ;},
		],/*
		[
			'attribute' => 'latitude',
			'filter' => FALSE,
		],
		[
			'attribute' => 'longitude',
			'filter' => FALSE,
		], */
        //    ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
