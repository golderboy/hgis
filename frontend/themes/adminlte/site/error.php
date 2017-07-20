<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>
<section class="content">

    <div class="error-page">
        
        <div class="error-content">

			<h1 class="headline text-info"><i class="fa fa-warning text-yellow"></i>
			<?= Html::encode($this->title) ?>
			</h1>
			<h2 class="text-danger"><?= nl2br(Html::encode($message)) ?></h2>
			<p><?= Html::a('กลับหน้าหลัก',['ancdata/ancdata/index'],['class'=>'btn btn-default btn-md'])?></p>
        </div>
    </div>

</section>
