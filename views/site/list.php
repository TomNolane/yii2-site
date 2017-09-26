<?php
use yii\helpers\Html;
use yii\helpers\Url; 
use yii\widgets\Breadcrumbs; 

$this->title = 'Список разработанных проектов и грантов - НП "НОК"';
?>

<!-- Header -->
	<header id="head2">
		<div class="container">
			<div class="row">
				<h1 class="lead">Список разработанных проектов и грантов<br>НП "НОК"</h1>
				<!-- <p class="tagline">раздел новости</p> -->
				<br><br><br><br><br><br>
				<p>
					<?php echo Html::tag('a','Читать',['class' => 'btn btn-action btn-lg', 'role'=> 'button', 'href'=>'#more']); ?>
				</p>
			</div>
		</div>
	</header>
	<!-- /Header -->

<div class="container">
        <?= Breadcrumbs::widget([ 'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],]) ?>
		<!--<ol class="breadcrumb">
			<li><a href="index.html">Домашняя</a></li>
			<li class="active">Новости</li>
		</ol>-->

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-md-8 maincontent">
				<header class="page-header">
				<h1 class="page-title" id="more">Выборочный список за последние 5 лет</h1>
                </header> 
                <h2>Заголовок</h2><br>
                <p>текст текст текст текст текст текст текст текст текст текст текст текст текст текст тексттекст текст текст текст текст</p><br> 
 
			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-md-4 sidebar sidebar-right">

				<div class="row widget">
					<div class="col-xs-12">
						<h4>Lorem ipsum dolor sit</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, ratione delectus reiciendis nulla nisi pariatur molestias animi eos repellat? Vel.</p>
					</div>
				</div>
				<div class="row widget">
					<div class="col-xs-12">
						<h4>Lorem ipsum dolor sit</h4>
						<p><img src="assets/images/1.jpg" alt=""></p>
					</div>
				</div>
				<div class="row widget">
					<div class="col-xs-12">
						<h4>Lorem ipsum dolor sit</h4>
						<p><img src="assets/images/2.jpg" alt=""></p>
						<p>Qui, debitis, ad, neque reprehenderit laborum soluta dolor voluptate eligendi enim consequuntur eveniet recusandae rerum? Atque eos corporis provident tenetur.</p>
					</div>
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->