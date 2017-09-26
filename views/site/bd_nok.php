<?php
use yii\helpers\Html;
use yii\helpers\Url; 
use yii\widgets\Breadcrumbs;
 

$this->title = 'Главная - "НАЦИОНАЛЬНОЕ ОБЩЕСТВО КАЧЕСТВА"';
?>
	<div id="start"></div>
	<!-- Header -->
	<header id="head7">
		<div class="container">
			<div class="row">
				<h1 class="lead">База данных</h1>
				<p class="tagline" style="font-size: 1.4em;"></p>
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
				<h2 class="thin">Список:</h2>
				<p class="text-muted"> </p>
				<!--<ul class="lead text-left">
					<li>Проект 1 (подробнее)<p class="text-muted">Краткое описание</p></li>
					<li>Проект 2 (подробнее)<p class="text-muted">Краткое описание</p></li> 
					<li>Проект 3 (подробнее)<p class="text-muted">Краткое описание</p></li>
					<li>Проект 4 (подробнее)<p class="text-muted">Краткое описание</p></li> 
				</ul> -->
			</div>
			<div class="col-lg-1"></div>
		</div>
	</div> 
	<!-- /container -->
 