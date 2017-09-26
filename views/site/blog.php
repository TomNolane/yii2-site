<?php
use yii\helpers\Html;
use yii\helpers\Url;
use app\components\SliderWidget;
use yii\widgets\Breadcrumbs;
use yii\data\Pagination;
 

$this->title = 'Новости - "НАЦИОНАЛЬНОЕ ОБЩЕСТВО КАЧЕСТВА"';
?>

<!-- Header -->
	<header id="head3">
		<div class="container">
			<div class="row">
				<h1 class="lead">Блог НОК</h1>
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
				<h1 class="page-title" id="more">Наши последние публикации</h1>
				</header> 
				<?php 
				$i = 0; 
				foreach ($models as $model) { 
					echo "<h2 id='next".$i."'>".$model['header']."</h2><br>";
					if($model['image']) { echo Html::tag('img','',['src' => Url::to($model['image']), 'alt'=> 'Источник: '.$model['source'], 'class' => 'img-responsive'])."<br><br>"; }
					echo Html::tag('img','',['src' => Url::to('images/avat.png'), 'alt'=> 'Источник: '.$model['source'], 'class' => 'img-responsive', 'style' => ['float' =>'left', 'width'=>' 100px !important', 'border-radius'=>'50%','margin'=>'0 15px 10px 0']])."<p>".$model['text']."</p><br>";
					//if($model['source']) { echo "<p>". Html::tag('a','Источник',['href' => $model['source'], 'target' => '_blank']) ."</p><hr>";}
                    echo '<p>Источник: НОК</p><hr>';
					++$i;
					if($i < 5 && $i < count($models))
					{
						echo '<center>';
						echo Html::tag('a','Следуящая запись',['class' => 'btn btn-action btn-lg', 'role'=> 'button', 'href'=>'#next'.$i.'']);
						echo '</center><hr>'; 
					} 
				}

				// display pagination
				echo yii\widgets\LinkPager::widget([
					'pagination' => $pages,
				]); 
				?>
 
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