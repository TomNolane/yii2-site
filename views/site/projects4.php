<?php
use yii\helpers\Html;
use yii\helpers\Url; 
use yii\widgets\Breadcrumbs;
 

$this->title = 'Главная - "НАЦИОНАЛЬНОЕ ОБЩЕСТВО КАЧЕСТВА"';
?>
	<div id="start"></div>
	<!-- Header -->
	<header id="head6">
		<div class="container">
			<div class="row">
				<h1 class="lead">Информационная поддержка, IT развитие и полезная информация</h1>
				<p class="tagline" style="font-size: 1.4em;">наши предложения</p>
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
					<li>Всё, что касается сайтов<p class="text-muted">Краткое описание</p></li>
					<li>Социальные сети<p class="text-muted">Краткое описание</p></li>  
                    <li>Программное обеспечение<p class="text-muted">Краткое описание</p></li> 
                    <li>Помощь<p class="text-muted">Краткое описание</p></li> 
                    <li>Полезное<p class="text-muted">Краткое описание</p></li> 
				</ul> 
			</div>
			<div class="col-lg-1"></div>
		</div>
	</div> 
	<!-- /container -->

    <div class="jumbotron top-space">
			<h4><center>Для более детальной информации напишите нам письмо по ссылке ниже. Мы с вами обязательно свяжемся и ответим на все вопросы,
				а также предоставим всю необходимую информацию.</center></h4>
			<p class="text-center"><?php echo Html::tag('a','Написать',['class' => 'btn btn-primary btn-large', 'role'=> 'button', 'href'=>'#sendemail']); ?></p>
		</div>

		<div class="container">
			<div class="row">
				<!-- Article main content -->
			<article class="col-sm-12 maincontent">
				<header class="page-header">
					<h1 class="page-title" id="sendemail">Получите консультацию!</h1>
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
 