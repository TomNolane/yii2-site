<?php
use yii\helpers\Html;
use yii\helpers\Url; 
use yii\widgets\Breadcrumbs;
use yii\bootstrap\Modal; 

$this->title = 'Социальный маркетинг и менеджмент НП "НОК"';
?>
	<div id="start"></div>
	<!-- Header -->
	<header id="head4">
		<div class="container">
			<div class="row" style="margin-top: -150px;">
				<h1 class="lead">Социальный маркетинг и менеджмент</h1>
				<p class="tagline" style="font-size: 1.4em;">НОК оказывает системную поддержку социальным проектам организаций различных форм собственности</p>
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
				<h2 class="thin">Направления адресной поддержки:</h2>
				<p class="text-muted"> </p>
				<ul class="lead text-left">
					<li>Информационная<p class="text-muted">Информация об особенности подготовки грантов, субсидий, гос. заказов в социальной сфере и системный анализ проектов победителей. 
					<br>Оказание поддержки по разработке и наполнению сайтов, а также повышению компьютерной грамотности специалистов организации.</p></li>
					<li>Экспертная<p class="text-muted">Включает в себя внешний аудит качества управления проектами (на стадиях разработки, реализации и развития) и подготовку специалистов для внутреннего аудита.</p></li> 
					<li>Мониторинговая<p class="text-muted">Оказание диагностической и динамической системной оценки качества управления на разных стадиях социальных проектов.</p></li>
					<li>Бенчмаркинговая<p class="text-muted">Адресные рекомендации лучшего опыта и технологий с учётом особенностей и ресурсов организации</p></li> 
					<li>PR<p class="text-muted">Продвижение лучших социальных проектов по результатам тематических конкурсов</p></li> 
					<li>Треннинговая<p class="text-muted">Дополнительная подготовка экспертов, специалистов и волотнёров по качеству управления социальными проектами (повышение профессиональных компетенций и мастерства)</p></li> 
					<li>Организационно-управленческая<p class="text-muted">Внедрение технологий Системы Менеджмента Качества (СМК) в проектную деятельность СО НКО и социальных предпринимателей.</p></li> 
				</ul> 
				<h2 class="thin">Наши услуги:</h2> 
				<p class="text-muted" style="font-size: 20px;">В свере социального предпринимательства и СО НКО</p>
				<!-- <ul class="lead text-left">
					<li>1) Тренинги в сфере социального предпринимательства и СО НКО по 8-ми направлениям</li>
					<li>2) Организация и проведение инвестиционных форумов, конкурсов, выставок, конференций и круглый столов</li>
					<li>3) Разработка и сопровождение партнёрских проектов</li>
					<li>4) Социальный консалтинг</li>
					<li>5) Мониторинг готовности, возможности и рисков проектов</li>
					<li>6) Разработка и сопровождение целевых копмплексных программ для регионов</li>
					<li>7) Независимая экспертиза качества проектов (на этапах их разработки, реализации и развития)</li>
					<li>8) Системная и адресная поддержка проектов</li>
				</ul> -->
				<ol class="lead text-left">
					<li>
					<?php
					$temp1 = Html::tag('img','',['src' => Url::to('images/logo_new.jpg'), 'alt'=>'НОК', 'style' => 'max-height: 60px; border-radius: 25px; margin-top: -5px; float: left; margin-right: 10px;']);
					$temp2 = Html::tag('a',$temp1,['href' => Url::to(['site/index']), 'target'=>'_blank']); 
						Modal::begin([
							'header' => $temp2.'<h4 class="modal-title" id="myModalLabel">Тренинги в сфере социального предпринимательства и СО НКО по 8-ми направлениям</h4>',
							'toggleButton' => ['label' => 'Тренинги в сфере социального предпринимательства и СО НКО по 8-ми направлениям','tag' => 'button', 'class' => 'btn btn-success2'],
							'footer' => '<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>', 
						]);
					
						echo 'Тренинги проводяться для дополнительной подготовки лидеров, экспертов, специалистов и волонтеров работающих в социаильном предпринимательстве и в СО НКО и предпологают три уровня их подготовки (18, 36, 72 часа)<br/><br/>
						Подготовка проводится по следующим направлениям:<br/><br/>
						Культура ЗОЖ<br/>
						Радость активного долголетия<br/>
						Экологическая культура и экотуризм<br/>
						Гражданственность, патриотизм и героизм<br/>
						Технологии социального партнёрства<br/>
						Общественный мониторинг социальных проектов<br/>
						Социальные партнёрские проекты: опыт, преимущества и перспективы<br/><br/>
						
						Тренинги проводяться как для физических, так и юридических лиц.<br/>
						Кол-во участников в тренинге не менее 7 и не более 20.<br/>
						Стоимость участия для одного физ.лица от 5000 руб. (в зависимости от темы, кол-во самих треннингов в рамках курса, а также приглашенного специалиста(из какой страны)). 
						<br/>Для юридических лиц курс 18 часов, стоимость от 108 000 руб + трансфер + проживание (для регионов), курс 36 часов от 180 000 рублей, курс 72 часа от 280 000 рублей.';
						Modal::end();
					?>	
					</li>
					<li>
					<?php 
						Modal::begin([
							'header' => $temp2.'<h4 class="modal-title" id="myModalLabel2">Организация и проведение инвестиционных форумов, конкурсов, выставок, конференций и круглый столов</h4>',
							'toggleButton' => ['label' => 'Организация и проведение инвестиционных форумов, конкурсов, выставок, конференций и круглый столов','tag' => 'button', 'class' => 'btn btn-success2'],
							'footer' => '<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>', 
						]);
					
						echo 'Организация инвест.форумов, конкурсов, выставок, конференций и круглый столов проводятся в различных форматах, в зависимости от кол-во и состава участников, а также их продолжительности.<br/><br/>
						В качестве основных площадок используются: ВВЦ, в здании правительства Москвы (ул. Новый Арбат д.36), общественная палата РФ, общественная палата Москвы, МДО КОС правительства Москвы и другие.<br/>
						Стоимость по договоренности.';
						Modal::end();
					?>
					</li>
					<li>
					<?php 
						Modal::begin([
							'header' => $temp2.'<h4 class="modal-title" id="myModalLabel3">Разработка и сопровождение партнёрских проектов</h4><br/>',
							'toggleButton' => ['label' => 'Разработка и сопровождение партнёрских проектов','tag' => 'button', 'class' => 'btn btn-success2'],
							'footer' => '<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>', 
						]);
					
						echo 'Разработка и сопровождение партерских проектов включает в себя одбор партнёров от профильных коммерческих, общественных и государственных организаций.<br/><br/>
						Подбор лидеров, эксперотов, специалистов и волонтеров для формирования единой команды в методологическом, метадическом, организационном и практическом планах.<br/><br/>
						Миссия команды: повышение качества разработки и сопровождение партнерского проекта для минимизации временных и ресурсных затрат при решении социальной проблемы в рамках данного проекта.<br/>
						Стоимость по договоренности.';
						Modal::end();
					?>
					</li>
					<li>
					<?php 
						Modal::begin([
							'header' => $temp2.'<h4 class="modal-title" id="myModalLabel4">Социальный консалтинг</h4><br/>',
							'toggleButton' => ['label' => 'Социальный консалтинг','tag' => 'button', 'class' => 'btn btn-success2'],
							'footer' => '<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>', 
						]);
					
						echo 'Социальный консалтинг включает в себя индивидуальные консультации для представителей социального предпринимательства.<br/><br/>
						Стоимость от 8000 руб. (не менее 2-ух академических часов)<br/>
						Групповые консультации (для групп от 5 до 9 человек, не мнее 3-ех академ. часов) стоимость: от 35 000 руб.<br/><br/>
						В консалтинг входит - системная диагностика проблем, потребности и достижений проекта или фирмы в сфере социального предпринимательства и/или СО НКО';
						Modal::end();
					?>
					</li>
					<li>
					<?php 
						Modal::begin([
							'header' => $temp2.'<h4 class="modal-title" id="myModalLabel5">Мониторинг готовности, возможности и рисков проектов</h4><br/>',
							'toggleButton' => ['label' => 'Мониторинг готовности, возможности и рисков проектов','tag' => 'button', 'class' => 'btn btn-success2'],
							'footer' => '<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>', 
						]);
					
						echo 'Целевой адресный мониторинг основных условий для успешной реализации проектов проводят высококвалифицированные специалисты-практики (кандидаты, доктора наук). Данный мониторинг включает в себя: социалогическое, социально-психологическое, психологическое, информационно-технологическое, экономическое и юридическое тестирование в начале и по окончанию проекта.<br/>
						Стоимость по договоренности.';
						Modal::end();
					?>
					</li>
					<li>
					<?php 
						Modal::begin([
							'header' => $temp2.'<h4 class="modal-title" id="myModalLabel6">Разработка и сопровождение целевых копмплексных программ для регионов</h4>',
							'toggleButton' => ['label' => 'Разработка и сопровождение целевых копмплексных программ для регионов','tag' => 'button', 'class' => 'btn btn-success2'],
							'footer' => '<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>', 
						]);
					
						echo 'Разработка и экспертное сопровождение целевых копмплексных программ по восьми (по выбору) направления для (в т.ч. и для регионов РФ): <br/><br/>
						
						-Культура ЗОЖ<br/>
						-Радость активного долголетия<br/>
						-Экологическая культура и экотуризм<br/>
						-Гражданственность, патриотизм и героизм<br/>
						-Технологии социального партнёрства<br/>
						-Общественный мониторинг социальных проектов<br/>
						-Социальные партнёрские проекты: опыт, преимущества и перспективы<br/><br/>
						
						Стоимость по договоренности.';
						Modal::end();
					?>
					</li>
					<li>
					<?php 
						Modal::begin([
							'header' => $temp2.'<h4 class="modal-title" id="myModalLabel7">Независимая экспертиза качества проектов (на этапах их разработки, реализации и развития)</h4>',
							'toggleButton' => ['label' => 'Независимая экспертиза качества проектов (на этапах их разработки, реализации и развития)','tag' => 'button', 'class' => 'btn btn-success2'],
							'footer' => '<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>', 
						]);
					
						echo 'Полную, независимую экспертизу проводят ведущие российские и зарубежные эксперты (по выбранному направлению)<br/>
						Стоимость от 200 000 рублей за 1 год.';
						Modal::end();
					?>
					</li>
					<li>
					<?php 
						Modal::begin([
							'header' => $temp2.'<h4 class="modal-title" id="myModalLabel8">Системная и адресная поддержка проектов</h4><br/>',
							'toggleButton' => ['label' => 'Системная и адресная поддержка проектов','tag' => 'button', 'class' => 'btn btn-success2'],
							'footer' => '<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>', 
						]);
					
						echo '<h3 class="thin">Направления адресной поддержки:</h3> 
						<ul class=" text-left">
							<li>Информационная<p class="text-muted">Информация об особенности подготовки грантов, субсидий, гос. заказов в социальной сфере и системный анализ проектов победителей. 
							<br>Оказание поддержки по разработке и наполнению сайтов, а также повышению компьютерной грамотности специалистов организации.</p></li>
							<li>Экспертная<p class="text-muted">Включает в себя внешний аудит качества управления проектами (на стадиях разработки, реализации и развития) и подготовку специалистов для внутреннего аудита.</p></li> 
							<li>Мониторинговая<p class="text-muted">Оказание диагностической и динамической системной оценки качества управления на разных стадиях социальных проектов.</p></li>
							<li>Бенчмаркинговая<p class="text-muted">Адресные рекомендации лучшего опыта и технологий с учётом особенностей и ресурсов организации</p></li> 
							<li>PR<p class="text-muted">Продвижение лучших социальных проектов по результатам тематических конкурсов</p></li> 
							<li>Треннинговая<p class="text-muted">Дополнительная подготовка экспертов, специалистов и волотнёров по качеству управления социальными проектами (повышение профессиональных компетенций и мастерства)</p></li> 
							<li>Организационно-управленческая<p class="text-muted">Внедрение технологий Системы Менеджмента Качества (СМК) в проектную деятельность СО НКО и социальных предпринимателей.</p></li> 
						</ul><br/><br/>
						
						Стоимость по договоренности.';
						Modal::end();
					?>
					</li>
				</ol> 
				<!-- <p class="text-muted" style="font-size: 20px;">проведение курсов дополнительной подготовки специалистов по темам:</p>
				<ul class="lead text-left">
					<li>Культура ЗОЖ</li>
					<li>Радость активного долголетия</li>
					<li>Экологическая культура и экотуризм</li>
					<li>Гражданственность, патриотизм и героизм</li>
					<li>Технологии социального партнёрства</li>
					<li>Общественный мониторинг социальных проектов</li>
					 <li>Социальные партнёрские проекты: опыт, преимущества и перспективы</li>
				</ul> 
				<p class="text-muted" style="font-size: 20px;">по каждой теме проводится три этапа подготовки специалистов: 18,36,72 часов</p> -->
				
				<h2 class="thin">Мы предлагаем 2 формы сотрудничества с любым регионом РФ:</h2>
				
					<p class="lead text-left" style="font-size: 20px;">1) Проведение выездных клубов-школ по вышеуказанным темам курсов <br> 
						2) Разработка ряда комплексных целевых социальных программ и  экспертное сопровождение их реализации и устойчивого развития совместно со специалистами региона 
					</p>
				
			</div>
			<div class="col-lg-1"></div>
		</div>
	</div> 
	<!-- /container -->
 