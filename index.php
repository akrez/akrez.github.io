<?php require_once('boot.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>AliAkbar Rezaei Resume</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="favicon.png">

	<link rel="stylesheet" href="assets/plugins/sahel/css/sahel.css">
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/bootstrap-icons/bootstrap-icons.min.css">
	<link rel="stylesheet" href="assets/css/shine.css">
	<link rel="stylesheet" href="assets/css/custom.css">
</head>


<body class="light-mode">

	<div class="container-fluid">

		<div class="main-content-wrapper">
			<div class="container-fluid">
				<div class="resume-wrapper mx-auto rounded-2 pt-0 m-4">
					<?= $table ?>
					<div class="resume-header p-4 pb-0 p-lg-5 pb-lg-0">
						<div class="resume-profile-holder text-center">
							<h2 class="resume-name">AliAkbar Rezaei</h2>
							<div class="resume-role-title text-uppercase">PHP Backend Developer</div>
							<div class="resume-contact mt-3">
								<ul class="resume-contact-list list-unstyled list-inline mb-0 justify-content-between">
									<?php foreach ($i['contacts'] as $contact) { ?>
										<li class="list-inline-item mx-3">
											<i class="resume-contact-icon me-2 <?= $contact['i'] ?>"></i>
											<a href="<?= $contact['href'] ?>"><?= $contact['content'] ?></a>
										</li>
									<?php } ?>
								</ul>
							</div><!--//resume-contact-->
						</div><!--//profile-holder-->
					</div><!--//resume-header-->

					<div class="resume-body p-5 pt-3">
						<div class="row">
							<div class="col-main col-12 col-md-8 pe-lg-4">
								<section class="resume-summary-section resume-section">
									<h3 class="resume-section-heading text-uppercase py-2 py-lg-3 py-2 py-lg-3">
										<i class="resume-section-heading-icon bi bi-person me-2"></i>
										About Me
									</h3>
									<div class="resume-summary-desc">
										6 years of experience as PHP Developer in analysis, design, development and management of web using JavaScript, MySQL, PHP
									</div>
								</section><!--//resume-section-->

								<section class="resume-experience-section resume-section">
									<h3 class="resume-section-heading text-uppercase py-2 py-lg-3 py-3">
										<i class="resume-section-heading-icon bi bi-briefcase me-2"></i>
										Work Experience
									</h3>
									<div class="resume-timeline position-relative">

										<article class="resume-timeline-item position-relative mb-4">
											<div class="resume-timeline-item-header mb-2">
												<div class="resume-position-meta d-flex justify-content-between mb-1">
													<div class="resume-position-time">January 2021 – Present</div>
													<a class="resume-company-name small" href="https://bpm.pspexpress.com/login" target="_blank">
														Favin Tejarat
													</a>
												</div>
												<h3 class="resume-position-title d-flex justify-content-between mb-1">
													FullStack Developer
												</h3>
											</div><!--//resume-timeline-item-header-->
											<div class="resume-timeline-item-desc">
												<ul class="resume-timeline-list">
													<li>
														Developing a huge shipping system which is used in 6 countries and 15+ branches in 4 languages
													</li>
													<li>
														Writing and optimizing the complicated MySql queries for handling 22,000+ users with 70,000+ orders and 500,000+ invoices
													</li>
												</ul>
												<div class="row">
													<div class="col-sm-12 col-md-3">
														<a href="assets/images/f.png" target="_blank">
															<img class="img-fluid" src="assets/images/f.png">
														</a>
													</div>
												</div>
											</div><!--//resume-timeline-item-desc-->
										</article><!--//resume-timeline-item-->

										<article class="resume-timeline-item position-relative mb-4">
											<div class="resume-timeline-item-header mb-2">
												<div class="resume-position-meta d-flex justify-content-between mb-1">
													<div class="resume-position-time">January 2018 – February 2019</div>
													<a class="resume-company-name small" href="https://setarehvanak.com" target="_blank">
														Setareh Vanak Travel Agency
													</a>
												</div>
												<h3 class="resume-position-title d-flex justify-content-between mb-1">
													FullStack Developer
												</h3>
											</div><!--//resume-timeline-item-header-->
											<div class="resume-timeline-item-desc">
												<ul class="resume-timeline-list">
													<li>
														Built modular and maintainable applications using Symfony
													</li>
													<li>
														Built GUI using Saman Insuranse XML SOAP
													</li>
													<li>
														Worked with international online hotel reservation providers json API
													</li>
													<li>
														Implemented admin panel using Bootstrap 3
													</li>
													<li>
														Used TWIG templating engine for rendering dynamic views

													</li>
												</ul>
												<div class="row">
													<div class="col-sm-12 col-md-3">
														<a href="assets/images/s.png" target="_blank">
															<img class="img-fluid" src="assets/images/s.png">
														</a>
													</div>
												</div>
											</div><!--//resume-timeline-item-desc-->
										</article><!--//resume-timeline-item-->

										<article class="resume-timeline-item position-relative mb-4">
											<div class="resume-timeline-item-header mb-2">
												<div class="resume-position-meta d-flex justify-content-between mb-1">
													<div class="resume-position-time">October 2016 – June 2017</div>
													<div class="resume-company-name small">
														Travia Online Reservation System
													</div>
												</div>
												<h3 class="resume-position-title d-flex justify-content-between mb-1">
													Backend Developer
												</h3>
											</div><!--//resume-timeline-item-header-->
											<div class="resume-timeline-item-desc">
												<ul class="resume-timeline-list">
													<li>
														Worked primarily as a backend developer on the company's main system using Yii2 framework
													</li>
													<li>
														Developed online flight reservation system using combination and merge some international online services such as Amadeus Ticketing Platform
													</li>
												</ul>
											</div><!--//resume-timeline-item-desc-->
										</article><!--//resume-timeline-item-->

										<article class="resume-timeline-item position-relative mb-4">
											<div class="resume-timeline-item-header mb-2">
												<div class="resume-position-meta d-flex justify-content-between mb-1">
													<div class="resume-position-time">February 2016 – September 2016</div>
													<div class="resume-company-name small">
														Farzan Clinical Research Organization
													</div>
												</div>
												<h3 class="resume-position-title d-flex justify-content-between mb-1">
													Junior Backend Developer
												</h3>
											</div><!--//resume-timeline-item-header-->
											<div class="resume-timeline-item-desc">
												<ul class="resume-timeline-list">
													<li>
														Developed web backend user interfaces to new and existing databases using Codeigniter PHP framework
													</li>
													<li>
														Worked on hub module for implementing single sign-on service (SSO)
													</li>
												</ul>
											</div><!--//resume-timeline-item-desc-->
										</article><!--//resume-timeline-item-->

									</div><!--//resume-timeline-->
								</section><!--//resume-experience-section-->

								<section class="resume-experience-section resume-section">
									<h3 class="resume-section-heading text-uppercase py-2 py-lg-3 py-3">
										<i class="resume-section-heading-icon bi bi-code-slash me-2"></i>
										Projects
									</h3>
									<div class="resume-timeline position-relative">
										<article class="resume-timeline-item position-relative mb-5">
											<div class="resume-timeline-item-header mb-2">
												<h3 class="resume-position-title d-flex justify-content-between mb-1">
													Akrez eCommerce Platform
													<a class="resume-company-name small" href="https://akrez.ir/" target="_blank">
														akrez.ir
													</a>
												</h3>
											</div><!--//resume-timeline-item-header-->
											<div class="resume-timeline-item-desc">
												<ul class="resume-timeline-list">
													<li>
														Dynamic eCommerce Platform that empowers small and medium businesses to build their own shopping website in a separate domain
													</li>
													<li>
														Used Laravel framework
													</li>
													<li>
														Built user frontend by bootstrap, fully by json API
													</li>
													<li>
														Uses different visual tools such as Chart.js to show visit stats
													</li>
													<li>
														Customers may have different profiles for each shop
													</li>
													<li>
														Website builder can utilize various filters for each category of her/his shopping site
													</li>
													<li>
														Used full ajax datagrid to show, create and edit items
													</li>
													<li>
														Sends data to the Telegram channel of the website owner just by one click using Telegram API automatically
													</li>
												</ul>
												<div class="row">
													<div class="col-sm-12 col-md-3">
														<a href="assets/images/a1.png" target="_blank">
															<img class="img-fluid" src="assets/images/a1.png">
														</a>
													</div>
													<div class="col-sm-12 col-md-3">
														<a href="assets/images/a2.png" target="_blank">
															<img class="img-fluid" src="assets/images/a2.png">
														</a>
													</div>
													<div class="col-sm-12 col-md-3">
														<a href="assets/images/a3.png" target="_blank">
															<img class="img-fluid" src="assets/images/a3.png">
														</a>
													</div>
													<div class="col-sm-12 col-md-3">
														<a href="assets/images/a4.png" target="_blank">
															<img class="img-fluid" src="assets/images/a4.png">
														</a>
													</div>
												</div>
											</div><!--//resume-timeline-item-desc-->
										</article><!--//resume-timeline-item-->

										<article class="resume-timeline-item position-relative mb-5">
											<div class="resume-timeline-item-header mb-2">
												<h3 class="resume-position-title d-flex justify-content-between mb-1">
													Cv Manager
													<a class="resume-company-name small" href="https://cvmanager.ir/home/" target="_blank">
														cvmanager.ir
													</a>
												</h3>
											</div><!--//resume-timeline-item-header-->
											<div class="resume-timeline-item-desc">
												<ul class="resume-timeline-list">
													<li>
														The ultimate web application for efficient resume management. Designed specifically for companies, CV Manager allows you to effortlessly create and organize projects, positions, and resumes, all in one centralized platform
														using Node.js, MongoDB, JSON Web Token (JWT), Express.js, REST APIs, Docker, Swagger API, Redis, Jest, JS
													</li>
												</ul>
												<div class="row">
													<div class="col-sm-12 col-md-3">
														<a href="assets/images/c1.png" target="_blank">
															<img class="img-fluid" src="assets/images/c1.png">
														</a>
													</div>
												</div>
											</div>
										</article>

										<article class="resume-timeline-item position-relative mb-5">
											<div class="resume-timeline-item-header mb-2">
												<h3 class="resume-position-title d-flex justify-content-between mb-1">
													Akrez Youtube Streamer
													<a class="resume-company-name small" href="https://youtube.akrezing.ir" target="_blank">
														youtube.akrezing.ir
													</a>
												</h3>
											</div><!--//resume-timeline-item-header-->
											<div class="resume-timeline-item-desc">
												<ul class="resume-timeline-list">
													<li>
														A lightweight GUI to stream and download YouTube videos
														using Guzzle Curl and PSR-7
													</li>
												</ul>
												<div class="row">
													<div class="col-sm-12 col-md-3">
														<a href="assets/images/y.png" target="_blank">
															<img class="img-fluid" src="assets/images/y.png">
														</a>
													</div>
												</div>
											</div>
										</article>

										<article class="resume-timeline-item position-relative mb-5">
											<div class="resume-timeline-item-header mb-2">
												<h3 class="resume-position-title mb-1">Boursia</h3>
											</div><!--//resume-timeline-item-header-->
											<div class="resume-timeline-item-desc">
												<ul class="resume-timeline-list">
													<li>
														Lightweight project for analyzing Tehran stock exchange using Laravel
													</li>
													<li>
														Getting data from tsetmc.com using API in csv format, storing in the database and retrieving using Eloquent
													</li>
													<li>
														Using Blade template engine to show user’s dynamic customized charts by Highcharts
													</li>
												</ul>
												<div class="row">
													<div class="col-sm-12 col-md-3">
														<a href="assets/images/b1.png" target="_blank">
															<img class="img-fluid" src="assets/images/b1.png">
														</a>
													</div>
													<div class="col-sm-12 col-md-3">
														<a href="assets/images/b2.png" target="_blank">
															<img class="img-fluid" src="assets/images/b2.png">
														</a>
													</div>
													<div class="col-sm-12 col-md-3">
														<a href="assets/images/b3.png" target="_blank">
															<img class="img-fluid" src="assets/images/b3.png">
														</a>
													</div>
												</div>
											</div><!--//resume-timeline-item-desc-->
										</article><!--//resume-timeline-item-->




										<article class="resume-timeline-item position-relative mb-5">
											<div class="resume-timeline-item-header mb-2">
												<h3 class="resume-position-title d-flex justify-content-between mb-1">
													Akrez Trade Bot
													<a class="resume-company-name small" href="https://t.me/akrezTradeBot" target="_blank">
														@akrezTradeBot
													</a>
												</h3>
											</div><!--//resume-timeline-item-header-->
											<div class="resume-timeline-item-desc">
												<ul class="resume-timeline-list">
													<li>
														Telegram bot that announces the highest or lowest price of a crypto currency pair within an hour with a chartTelegram bot that announces the highest or lowest price of a crypto currency pair within an hour with a chart
														using Telegram bot and PHP GD
													</li>
												</ul>
												<div class="row">
													<div class="col-sm-12 col-md-3">
														<a href="assets/images/t1.png" target="_blank">
															<img class="img-fluid" src="assets/images/t1.png">
														</a>
													</div>
												</div>
											</div>
										</article>

									</div><!--//resume-timeline-->
								</section><!--//resume-experience-section-->
							</div><!--//col-8-->
							<div class="col-12 col-md-4 ps-lg-4">

								<section class="resume-educate-section resume-section">
									<h3 class="resume-section-heading text-uppercase py-2 py-lg-3 py-3">
										<i class="resume-section-heading-icon bi bi-book me-2"></i>
										Education
									</h3>
									<ul class="list-unstyled">
										<li class="mb-2">
											<div class="resume-degree font-weight-bold">Bachelor in Software Engineer</div>
											<div class="resume-degree-org">Qom University</div>
											<div class="resume-degree-time">2011 - 2015</div>
										</li>
									</ul>
								</section><!--//resume-section-->

								<section class="resume-skills-section resume-section">
									<h3 class="resume-section-heading text-uppercase py-2 py-lg-3 py-3">
										<i class="resume-section-heading-icon bi bi-person-gear me-2"></i>
										Skills
									</h3>
									<ul class="list-inline">
										<li class="list-inline-item"><span class="badge resume-skill-badge">PSR-7</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">SSO</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">JWT</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">Swagger API</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">Telegram bot</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">PHP GD</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">Codeigniter</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">Symfony</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">Yii2</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">Laravel</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">Json</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">REST APIs</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">XML</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">SOAP</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">Csv</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">Guzzle</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">Twig</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">Blade</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">Eloquent</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">Docker</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">Redis</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">Jira</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">Git</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">Gitlab</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">Gitflow</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">Bootstrap</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">JQuery</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">Ajax</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">Select2</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">Highcharts</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">ChartJs</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">JavaScript</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">SQL</span></li>
										<li class="list-inline-item"><span class="badge resume-skill-badge">PHP</span></li>
									</ul>
								</section>

							</div><!--//col-side-->
						</div><!--//row-->
					</div><!--//resume-body-->
				</div><!--//resume-wrapper-->
			</div><!--//container-fluid-->
		</div><!--//main-content-wrapper-->

	</div><!--//container-->
	<script </body>