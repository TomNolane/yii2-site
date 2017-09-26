<?php
use yii\helpers\Html;
use yii\helpers\Url; 
use yii\widgets\Breadcrumbs; 

$this->title = 'Главная - "НАЦИОНАЛЬНОЕ ОБЩЕСТВО КАЧЕСТВА"';
?>
	<div id="start"></div>
	<!-- Header -->
	<header id="head5">
		<div class="container">
			<div class="row">
				<h1 class="lead">Здоровый образ жизни и ЗОЖ</h1>
				<p class="tagline" style="font-size: 1.4em;">группа проектов</p>
				<p>
					<?php echo Html::tag('a','Подробнее',['class' => 'btn btn-action btn-lg', 'role'=> 'button', 'href'=>'#more']); ?>
				</p>
			</div>
		</div>
	</header>
	<!-- /Header -->
 
<!-- container -->
	<div class="container text-center" id="more">
		<?= Breadcrumbs::widget([ 'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],]) ?>
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-10">
				<h2 class="thin">Проекты:</h2>
				<p class="text-muted"> </p>
				<ul class="lead text-left">
					<li>Качество-ЗОЖ<p class="text-muted">Краткое описание</p></li>  
				</ul> 
			</div>
			<div class="col-lg-1"></div>
		</div>
	</div> 
	<!-- /container -->
 