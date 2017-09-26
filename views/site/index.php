<?php
use yii\helpers\Html;
use yii\helpers\Url;
use app\components\SliderWidget;
use yii\widgets\Breadcrumbs;
 

$this->title = 'Главная - "НАЦИОНАЛЬНОЕ ОБЩЕСТВО КАЧЕСТВА"';
?>
	<div id="start"></div>
	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead">НЕКОММЕРЧЕСКОЕ ПАРТНЕРСТВО </br> "НАЦИОНАЛЬНОЕ ОБЩЕСТВО КАЧЕСТВА"</h1>
				<p class="tagline" style="font-size: 1.4em;">Мы предоставляем услуги по повышению качества разработки, реализации и развития социальных проектов для бизнеса, НКО и государственных структур.
				</p>
				<p>
					<?php echo Html::tag('a','Подробнее',['class' => 'btn btn-action btn-lg', 'role'=> 'button', 'href'=>'#more']); ?>
				</p>
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->

	<div class="container text-center" id="more">
		<?= Breadcrumbs::widget([ 'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],]) ?>
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-10">
				<h2 class="thin">На этом сайте:</h2>
				<p class="text-muted"> </p>
				<ul class="lead text-left">
					<li>Мы предлагаем для гос. структур, бизнеса и НКО (наши проекты):
					<p class="text-muted"> 
					1) Диагностика и мониторинг качества социальных проектов на этапах их разработки, реализации и развития.<br>
					2) Повышения качества и отпимизации деятельности организаций всех форм собственности.<br>
					3) Проведение интерактивных курсов (очные, зачоные) дополнительной подготовки экспертов, специалистов и волонтёров сферы социального проектирования.<br>
					4) Проведение конкурсов, форумов, конференций, семинаров и выставок социальных инноваций.<br>
					5) Разработка и совместная реализация проектов и программ в социальной сфере.<br>
					6) Содействие в получении грантов, субсидий и гос.заказов.<br>
					7) Системная поддержка социальных партнёрских проектов.
					</p> 
					
					</li>
					<li>Много полезной информации и материалов для социальных проектов.</li> 
					<li>Базу данных социально ориентированных (СО) НКО.</li>
					<li>Новости из мира качества жизни.</li>
					<li>Основы международной практики социально ориентированных проектов.</li>
					<li>Консультацию экспертов и квалифицированную помощь в ваших проектах.</li>
				</ul>
				<p>
					<?php echo Html::tag('a','Фотопрезентация',['class' => 'btn btn-action btn-lg', 'role'=> 'button', 'href'=>'#photo']); ?>
				</p>
			</div>
			<div class="col-lg-1"></div>
		</div>
	</div>
	<!-- /Intro-->

	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">
			<div class="row">

				<div class="col-xs-12 col-md-12 col-lg-12" id="photo">
					<center>
						<?= SliderWidget::widget() ?>
					</center>
				</div>

			</div>
			<br> <br><br> <br>
			<center>
				<p>
					<?php echo Html::tag('a','Выгода',['class' => 'btn btn-action btn-lg', 'role'=> 'button', 'href'=>'#profit']); ?>
				</p>
			</center>
			<h3 class="text-center thin" id="profit">Преимущества сотрудничества с нами:</h3>

			<div class="row">
				<div class="col-md-4 col-sm-4 highlight">
					<div class="h-caption">
						<h4><i class="fa fa-globe"></i>Социальное партнёрство</h4>
					</div>
					<div class="h-body text-left">
						<p>Вы получаете выход на масштабные партнёрские проекты, через технологии социального партёрства в рамках сотрудничества с организациями всех форм собственности. Это позволяет оптимизировать ваши расходы, получить наибольшую выгоду, повысить качество реализации и устойчивость развития ваших проектов.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 highlight">
					<div class="h-caption">
						<h4><i class="fa fa-group fa-5"></i>Эксперты, специалисты, волонтёры</h4>
					</div>
					<div class="h-body text-left">
						<p>Вы получаете сформированную группу экспертов, специалистов и волонтёров по социальному проектированию из государственных ведомств, а также бизнеса и НКО. Это даёт возможность дать объективную и системную оценку ваших проектных преимуществ и рисков.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 highlight">
					<div class="h-caption">
						<h4><i class="fa fa-cogs fa-5"></i>Услуги</h4>
					</div>
					<div class="h-body text-left">
						<p>Вы сможете повысить качество вашей социальной проектной деятельности с помощью наших услуг. Например:<br>разработки/доработки ваших социальных проектов подаваемых на гранты, субсидии и гос.заказы.<br>Дополнительной подготовки экспертов, специалистов и волонтёров для повышения качества их профессионального мастерства в сфере социального маркетинга и менеджмента.<br>Системной поддержки и продвижения лучших социальных проектов по результатам общественной и независимой профессиональной экспертизы качества проектов.</p>
					</div>
				</div> 
			</div>
			<!-- /row  -->
			<div class="row">
				<br><br>
				<center>
					<p>
						<?php echo Html::tag('a','Как с нами связаться',['class' => 'btn btn-action btn-lg', 'role'=> 'button', 'href'=>'#napishi']); ?>
					</p>
				</center>
			</div>

		</div>
	</div>
	<!-- /Highlights -->

	<!-- container -->
	<div class="container">

		<h2 class="text-center top-space" id="napishi">Обратная связь</h2>
		<br>
		<h2  class="text-center">мы в Вконтакте и Фейсбуке</h2>
		<div class="row">
			<div class="col-sm-6">
 
				<p class="item-intro text-muted text-center">Наша группа в Вконаткте:</p>
				<!-- VK Widget -->
				<script type="text/javascript" src="//vk.com/js/api/openapi.js?124"></script>
				<center>
					<div id="vk_groups">
						<script type="text/javascript">
							VK.Widgets.Group("vk_groups", {
								redesign: 1,
								mode: 4,
								width: "360",
								height: "500",
								color1: 'FFFFFF',
								color2: '000000',
								color3: '5E81A8'
							}, 146955401);
						</script>
					</div>
				</center>
			</div>

			<div class="col-sm-6">
				<center>
					<p class="item-intro text-muted">Наша группа в Фейсбуке:</p>
					<div id="fb-root"></div> 
					<div class="fb-page" data-href="https://www.facebook.com/nok.melnikov/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true"
					    data-hide-cover="false" data-show-facepile="true">
						<blockquote cite="https://www.facebook.com/nok.melnikov/" class="fb-xfbml-parse-ignore"><?= Html::tag('a','НЕКОММЕРЧЕСКОЕ ПАРТНЕРСТВО "НАЦИОНАЛЬНОЕ ОБЩЕСТВО КАЧЕСТВА"',['href' => Url::to(['https://www.facebook.com/nok.melnikov/']), 'target'=>'_blank']); ?></blockquote>
					</div>
				</center>
			</div> 

			<!--
				<h3>Свяжитесь с нами!</h3>
				<p>Для более детальной информаци рекоменду
					<?//= Html::mailto('Напишите нам письмо', 'admin@example.com') ?> - a free to try text editor which I'm using daily. Awesome tool!</p>
			</div>
			<div class="col-sm-6">
				<h3>Nice header. Where do I find more images like that one?</h3>
				<p>
					Well, there are thousands of stock art galleries, but personally, I prefer to use photos from these sites: <a href="http://unsplash.com">Unsplash.com</a>					and <a href="http://www.flickr.com/creativecommons/by-2.0/tags/">Flickr - Creative Commons</a></p>
			</div>
			-->
		</div>
		<!-- /row --> 

		<div class="jumbotron top-space">
			<h4>Для более детальной информации напишите нам письмо по ссылке ниже. Мы с вами обязательно свяжемся и ответим на все вопросы,
				а также предоставим всю необходимую информацию.</h4>
			<p class="text-center"><?php echo Html::tag('a','Написать',['class' => 'btn btn-primary btn-large', 'role'=> 'button', 'href'=>'#sendemail']); ?></p>
		</div>

		<div class="container">
			<div class="row">
				<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="page-title" id="sendemail">Напишите нам!</h1>
				</header> 
				<p>
					
				</p>
				<br>
					<form>
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" type="text" placeholder="Ваше Имя" >
							</div>
							<div class="col-sm-4">
								<input class="form-control" type="text" placeholder="Ваш контактный Email">
							</div>
							<div class="col-sm-4">
								<input class="form-control" type="text" placeholder="Номер контактного телефона">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12">
								<textarea placeholder="Текст сообщения" class="form-control" rows="9"></textarea>
							</div>
						</div>
						<br>
						<div class="row"> 
							<div class="col-sm-12 text-right">
								<input class="btn btn-action" type="submit" value="Отправить">
							</div>
						</div>
					</form>

			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-sm-3 sidebar sidebar-right">

				<div class="widget">
					<h4>Адрес</h4>
					<address>
						индекс 127254, г. Москва, проезд.Огородный, д.5, стр.7.
					</address>
					<h4>Телефон:</h4>
					<address>
						+7(916) 694-56-88
					</address>
					<h4>Электронная почта:</h4>
					<address>
						<?= Html::mailto('Обратная связь', 'komis@spkachestvo.ru') ?>
					</address>
				</div>

			</aside>
			<!-- /Sidebar -->
			</div>
		</div>

		<blockquote>
			<p>Нет опаснее человека, которому чуждо человеческое, который равнодушен к судьбам родной страны, к судьбам ближнего, ко
				всему, кроме судеб пущенного им в оборот алтына..</p>
			<footer>Салтыков-Щедрин</footer>
		</blockquote>

	</div>
	<!-- /container -->

	<!-- Social links. @TODO: replace by link/instructions in template -->

	<!--
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				 
				<div class="addthis_toolbox addthis_default_style">
					<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
					<a class="addthis_button_tweet"></a>
					<a class="addthis_button_linkedin_counter"></a>
					<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				 
			</div>
		</div>
	</section>
	-->

	<!-- /social links -->