<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
$current_url = Yii::$app->request->url;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
	<meta name="yandex-verification" content="d976fadb4deea2c0" />
	
    <?php $this->head() ?>
	<?php $this->registerLinkTag(['rel' => 'shortcut icon', 'href' => yii\helpers\Url::to('images/gt_favicon.png')]); ?>
	<?php// $this->registerCssFile(yii\helpers\Url::to('https://fonts.googleapis.com/css?family=Open+Sans:300,400,700'), ['media' => 'screen']) ?>
	<?php// $this->registerCssFile('css/bootstrap.min.css', ['position'=> \yii\web\View::POS_HEAD]) ?> 
	<?php// $this->registerCssFile('css/font-awesome.min.css', ['position'=> \yii\web\View::POS_HEAD]) ?> 
	<?php// $this->registerCssFile('css/bootstrap-theme.css', ['position'=> \yii\web\View::POS_HEAD, 'media' => 'screen']) ?>
	<?php// $this->registerCssFile('css/main.css', ['position'=> \yii\web\View::POS_HEAD]) ?>
	<?php $this->registerCssFile(Url::to('https://fonts.googleapis.com/css?family=Droid+Sans'), ['position'=> \yii\web\View::POS_HEAD,'rel' => 'stylesheet', 'type'=> 'text/css']);
		$this->registerCssFile(Url::to('https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic'), ['position'=> \yii\web\View::POS_HEAD,'rel' => 'stylesheet', 'type'=> 'text/css']);
	?>	
	<?php $this->registerJsFile('js/preloader.js', ['position'=> \yii\web\View::POS_HEAD]);?>
	<?php $this->registerJsFile('js/html5shiv.js', ['condition'=>'lt IE 9','position'=> \yii\web\View::POS_HEAD]);?>
	<?php $this->registerJsFile('js/respond.min.js', ['condition'=>'lt IE 9','position'=> \yii\web\View::POS_HEAD]);?> 
	<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter45384384 = new Ya.Metrika({ id:45384384, clickmap:true, trackLinks:true, accurateTrackBounce:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/45384384" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</head>
<body class="home">
<?php $this->beginBody() ?> 
<script>
	preloaderCSS3("нп-нок.рф загружается... пожалуйста подождите...");
</script>
<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<?php
					$act = '0';
					if ($current_url == '/')
					{
						$act = '1';
					}
				?>
				 
				<?php
					$temp1 = Html::tag('img','',['src' => Url::to('images/logo_new.jpg'), 'alt'=>'НОК', 'style' => 'max-height: 60px; border-radius: 25px; margin-top: -5px;']);
					$temp2 = Html::tag('a',$temp1,['href' => Url::to(['site/index']), 'target'=>'_blank']); 
					echo $temp2;
				?>
				 
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">  

					<?php  
						if(strpos($current_url , 'site%2Findex')) { echo Html::tag('li', Html::tag('a','Главная',['class' => 'active_link', 'href'=>'#start']),['class' => 'active']); } 
						else {echo Html::tag('li', Html::a('Главная', ['site/index'], ['class' => 'not_active_link'])); }
						
						if(strpos($current_url , 'site%2Fbreaknews') ||strpos($current_url , 'site%2Fnews') || strpos($current_url , 'site%2Fnews2') || strpos($current_url , 'site%2Fnews3') || strpos($current_url , 'site%2Fnews4')) {
							echo '<li class="dropdown">'.Html::a('Новости<b class="caret"></b>', ['#'], ['class' => 'dropdown-toggle active_link', 'data-toggle' => 'dropdown']).'<ul class="dropdown-menu">'; 
						}
						else {
							echo '<li class="dropdown">'.Html::a('Новости<b class="caret"></b>', ['#'], ['class' => 'dropdown-toggle', 'data-toggle' => 'dropdown']).'<ul class="dropdown-menu">'; 
						}

						if(strpos($current_url , 'site%2Fbreaknews')) { 
							echo Html::tag('li',Html::a('Главные новости', ['site/breaknews'], ''),['class' => 'active']);}
							else { echo Html::tag('li', Html::a('Главные новости', ['site/breaknews'], ''));  }

						if(strpos($current_url , 'site%2Fnews') && !strpos($current_url , 'site%2Fnews2') && !strpos($current_url , 'site%2Fnews3') && !strpos($current_url , 'site%2Fnews4')) {
							echo Html::tag('li',Html::a('Здоровье', ['site/news'], ''),['class' => 'active']);}
							else { echo Html::tag('li', Html::a('Здоровье', ['site/news'], ''));  } 
						

						if(strpos($current_url , 'site%2Fnews2')) { 
							echo Html::tag('li',Html::a('Социальное предпринимательство', ['site/news2'], ''),['class' => 'active']);}
							else { echo Html::tag('li', Html::a('Социальное предпринимательство', ['site/news2'], ''));  }

						if(strpos($current_url , 'site%2Fnews3')) { 
							echo Html::tag('li',Html::a('Гранты и конкурсы', ['site/news3'], ''),['class' => 'active']);}
							else { echo Html::tag('li', Html::a('Гранты и конкурсы', ['site/news3'], ''));  }

						if(strpos($current_url , 'site%2Fnews4')) { 
							echo Html::tag('li',Html::a('Права человека', ['site/news4'], ''),['class' => 'active']);}
							else { echo Html::tag('li', Html::a('Права человека', ['site/news4'], ''));  }

						echo '</ul></li>'; 

						if(strpos($current_url , 'site%2Freleased') || strpos($current_url , 'site%2Flist')) {
							echo '<li class="dropdown">'.Html::a('Список грантов и программ<b class="caret"></b>', ['#'], ['class' => 'dropdown-toggle active_link', 'data-toggle' => 'dropdown']).'<ul class="dropdown-menu">'; 
						}
						else {
							echo '<li class="dropdown">'.Html::a('Список грантов и программ<b class="caret"></b>', ['#'], ['class' => 'dropdown-toggle', 'data-toggle' => 'dropdown']).'<ul class="dropdown-menu">'; 
						}

						if(strpos($current_url , 'site%2Freleased')) { 
							echo Html::tag('li',Html::a('Реализованные тендера', ['site/released'], ''),['class' => 'active']);}
							else { echo Html::tag('li', Html::a('Реализованные тендера', ['site/released'], ''));  }

						if(strpos($current_url , 'site%2Flist')) { 
							echo Html::tag('li',Html::a('Список программ', ['site/list'], ''),['class' => 'active']);}
							else { echo Html::tag('li', Html::a('Список программ', ['site/list'], ''));  }

						echo '</ul></li>'; 

						if(strpos($current_url , 'site%2Fblog')) {
							echo Html::tag('li',Html::a('Блог', ['site/blog'], ['class' => 'active_link', 'href'=>'#start']),['class' => 'active']);}
							else { echo Html::tag('li', Html::a('Блог', ['site/blog'], ['class' => 'not_active_link']));
						}

						if(strpos($current_url , 'site%2Fplan')) {
							echo Html::tag('li',Html::a('Мероприятия', ['site/plan'], ['class' => 'active_link', 'href'=>'#start']),['class' => 'active']);}
							else { echo Html::tag('li', Html::a('Мероприятия', ['site/plan'], ['class' => 'not_active_link']));
						} 

						if(strpos($current_url , 'site%2Fprojects')) {
							echo Html::tag('li',Html::a('Список проектов | услуг', ['site/projects'], ['class' => 'active_link', 'href'=>'#start']),['class' => 'active']);}
							else { echo Html::tag('li', Html::a('Список проектов | услуг', ['site/projects'], ['class' => 'not_active_link'])); 
						}

						echo '</ul></li>'; 

						// if(strpos($current_url , 'site%2Fbd_nok')) {
						//	echo Html::tag('li',Html::a('База данных', ['site/bd_nok'], ['class' => 'active_link', 'href'=>'#start']),['class' => 'active']);}
						//	else { echo Html::tag('li', Html::a('База данных', ['site/bd_nok'], ['class' => 'not_active_link']));
						//}

					?> 
  
					<!-- <li><a href="contact.html">Contact</a></li>
					<li><a class="btn" href="signin.html">SIGN IN / SIGN UP</a></li> -->
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

<!--   
<div class="container">
        <?=  Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [], ]) ?> 
</div> 
	-->

<?//= Yii::$app->request->url ?>
<div class="container">
<?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
		</div> 
<?= $content ?> 
<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->


	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Наши контакты:</h3>
						<div class="widget-body">
							<p>+7(495)915-66-57<br>
							<?= Html::mailto('Обратная связь', 'tom@tomnolane.ru') ?><br>  <br>
								г.Москва,<br>проезд.Огородный, д.5, стр.7,<br>индекс 127254
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Мы в социальных сетях:</h3>
						<div class="widget-body">
							<p class="follow-me-icons"> 
								<?php echo Html::tag('a',Html::tag('i','',['class' => 'fa fa-vk fa-2']),['target' => '_blank', 'href'=> Url::to('https://vk.com/npnok')]); ?>
								 <?php echo Html::tag('a',Html::tag('i','',['class' => 'fa fa-facebook fa-2']),['target' => '_blank', 'href'=> Url::to('https://www.facebook.com/nok.melnikov/')]); ?>
								  <?php echo Html::tag('a',Html::tag('i','',['class' => 'fa fa-instagram fa-2']),['target' => '_blank', 'href'=> Url::to('https://www.instagram.com/nolanescat/')]); ?> 
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Основная информация о нас:</h3>
						<div class="widget-body">
							<p>"Национальное Общество Качества", НП зарегистрирована по адресу:<br>Москва г, проезд.Огородный, д.5, стр.7, индекс 127254.<br>Председатель Совета директоров организации НЕКОММЕРЧЕСКОЕ ПАРТНЕРСТВО "НАЦИОНАЛЬНОЕ ОБЩЕСТВО КАЧЕСТВА" Мельников Геннадий Владимирович.<br>Основным видом деятельности компании является Консультирование по вопросам качества управления и социального парнёрства всех форм собственности.<br>Также "Национальное Общество Качества", НП работает еще по 18 направлениям.<br> 
							Основнымыми заказчикоми являются ДТСЗН и департамент культуры города Москвы.<br> 

НЕКОММЕРЧЕСКОЕ ПАРТНЕРСТВО "НАЦИОНАЛЬНОЕ ОБЩЕСТВО КАЧЕСТВА" присвоен ИНН 7715519990, КПП 771501001, ОГРН 1047796319482, ОКПО 72964531<br> 

Действует с 06.05.2004 года по настоящее время.</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<?= Html::a('Главная', ['site/index'], ['target' => '_blank'])?> | 
								<?= Html::a('About', ['site/about'], ['target' => '_blank'])?> |
								<a href="sidebar-right.html">Sidebar</a> |
								<a href="contact.html">Contact</a> |
								<b><a href="signup.html">Sign up</a></b>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Все права защищены &copy; <?= date('Y') ?>, НП НОК. Разработчик сайта <?php echo Html::tag('a','Tom Nolane',['href' => Url::to('https://vk.com/tomnolane'), 'rel' => 'designer', 'target' => '_blank']); ?> & <?php echo Html::tag('a','Kvonosan',['href' => Url::to('https://vk.com/kvonosan'), 'rel' => 'designer', 'target' => '_blank']); ?> <!-- web developer Tom Nolane tomnolane.ru and Kvonosan--> 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	
		

<!-- JavaScript libs are placed at the end of the document so the pages load faster -->  
	<?php// $this->registerJsFile(yii\helpers\Url::to('https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'), ['position'=> \yii\web\View::POS_END]) ?>
	
	<?php// $this->registerJsFile(yii\helpers\Url::to('https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js'), ['position'=> \yii\web\View::POS_END]) ?>
	<?php// $this->registerJsFile('js/headroom.min.js', ['position'=> \yii\web\View::POS_END]) ?>
	<?php// $this->registerJsFile('js/jQuery.headroom.min.js', ['position'=> \yii\web\View::POS_END]) ?>
	<?php //$this->registerJsFile('js/template.js', ['position'=> \yii\web\View::POS_END]) ?>
	<?php //$this->registerJsFile('js/ancor.js', ['position'=> \yii\web\View::POS_END]) ?>
	

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
