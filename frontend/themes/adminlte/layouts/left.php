<?php 
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <?= Html::img('@web/images/user.png',['class'=>'user-image']);?>
            </div>
            <div class="pull-left info">
                    <?php 
                        if(!\Yii::$app->user->isGuest){
                            echo '<p>'.\Yii::$app->user->identity->username.'</p>';
							echo '<i class="fa fa-circle text-success"></i> Online</a>';
                        }else{
                            echo "<p>Guest</p>";
							echo '<i class="fa fa-circle"></i> Offline</a>';
                        }
                    ?>

                
            </div>
        </div>
	
		<?php
				echo dmstr\widgets\Menu::widget(
					[
						'options' => ['class' => 'sidebar-menu'],
						'items' => [
							['label' => 'Menu User', 'options' => ['class' => 'header']],
							['label' => 'บันทึกพิกัดบ้าน','url' => ['/house/house/index']],
							['label' => 'แผนที่หมู่บ้าน','url' => ['/map/default/index']],	
						]
					]
				);			
		?>


    </section>

</aside>
