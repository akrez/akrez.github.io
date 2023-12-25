<?php $i = require_once('info.php'); ?>
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
</head>


<body class="light-mode">

	<div class="container-fluid">

		<div class="main-content-wrapper">
			<div class="container-fluid">
				<div class="resume-wrapper mx-auto rounded-2 pt-0 m-4">
					<div class="resume-header p-4 pb-0 p-lg-5 pb-lg-0">
						<div class="resume-profile-holder text-center">
							<h2 class="resume-name text-uppercase">AliAkbar Rezaei</h2>
							<div class="resume-role-title text-uppercase">PHP Backend Developer</div>
							<div class="resume-contact mt-4">
								<ul class="resume-contact-list list-unstyled list-inline mb-0 justify-content-between">
									<li class="list-inline-item me-md-3 me-lg-5">
										<i class="resume-contact-icon bi bi-telephone-inbound me-2"></i>
										<a href="tel:<?= $i['tel'] ?>"><?= $i['tel'] ?></a>
									</li>
									<li class="list-inline-item me-md-3 me-lg-5">
										<i class="resume-contact-icon bi bi-envelope me-2"></i>
										<a href="mailto:<?= $i['mailto'] ?>"><?= $i['mailto'] ?></a>
									</li>
									<li class="list-inline-item me-lg-5">
										<i class="resume-contact-icon bi bi-globe me-2"></i>
										<a href="<?= $i['href'] ?>"><?= $i['href'] ?></a>
									</li>
								</ul>
							</div><!--//resume-contact-->
						</div><!--//profile-holder-->
					</div><!--//resume-header-->

					<div class="resume-body p-4 pb-0 p-lg-5">
						<div class="row">
							<div class="col-main col-12 col-lg-8 pe-lg-4">
								<section class="resume-summary-section resume-section">
									<h3 class="resume-section-heading text-uppercase py-2 py-lg-3 py-2 py-lg-3">
										<i class="resume-section-heading-icon bi bi-person me-2"></i>
										About Me
									</h3>
									<div class="resume-summary-desc">
										5 years of experience as PHP Developer in analysis, design, development and management of web using JavaScript, MySQL, PHP
									</div>
								</section><!--//resume-section-->

								<section class="resume-experience-section resume-section">
									<h3 class="resume-section-heading text-uppercase py-2 py-lg-3 py-3">
										<i class="resume-section-heading-icon bi bi-briefcase me-2"></i>
										Work Experience
									</h3>
									<div class="resume-timeline position-relative">

										<article class="resume-timeline-item position-relative mb-5">
											<div class="resume-timeline-item-header mb-2">
												<div class="resume-position-meta d-flex justify-content-between mb-1">
													<div class="resume-position-time">January 2021 – Present</div>
													<a class="resume-company-name" href="https://bpm.pspexpress.com/login" target="_blank">
														Favin Tejarat
													</a>
												</div>
												<h3 class="resume-position-title mb-1">
													FullStack Developer
												</h3>
											</div><!--//resume-timeline-item-header-->
											<div class="resume-timeline-item-desc">
												<ul class="resume-timeline-list">
													<li>
														Developing warehouse management system using FuelPHP framework
													</li>
													<li>
														Working with Git (Gitlab) and Gitflow strategy
													</li>
												</ul>
											</div><!--//resume-timeline-item-desc-->
										</article><!--//resume-timeline-item-->

										<article class="resume-timeline-item position-relative mb-5">
											<div class="resume-timeline-item-header mb-2">
												<div class="resume-position-meta d-flex justify-content-between mb-1">
													<div class="resume-position-time">January 2018 – February 2019</div>
													<a class="resume-company-name" href="https://setarehvanak.com" target="_blank">
														Setareh Vanak Travel Agency
													</a>
												</div>
												<h3 class="resume-position-title mb-1">FullStack Developer</h3>
											</div><!--//resume-timeline-item-header-->
											<div class="resume-timeline-item-desc">
												<ul class="resume-timeline-list">
													<li>
														Built modular and maintainable applications using Symfony
													</li>
													<li>
														Built GUI using Saman Insuranse XML SOAP API
													</li>
													<li>
														Worked with international online hotel reservation providers
													</li>
													<li>
														Implemented admin panel using Bootstrap 3
													</li>
													<li>
														Used TWIG templating engine for rendering dynamic views

													</li>
												</ul>
											</div><!--//resume-timeline-item-desc-->
										</article><!--//resume-timeline-item-->

										<article class="resume-timeline-item position-relative mb-5">
											<div class="resume-timeline-item-header mb-2">
												<div class="resume-position-meta d-flex justify-content-between mb-1">
													<div class="resume-position-time">October 2016 – June 2017</div>
													<div class="resume-company-name">Travia Online Reservation System</div>
												</div>
												<h3 class="resume-position-title mb-1">Backend Developer</h3>
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

										<article class="resume-timeline-item position-relative mb-5">
											<div class="resume-timeline-item-header mb-2">
												<div class="resume-position-meta d-flex justify-content-between mb-1">
													<div class="resume-position-time">February 2016 – September 2016</div>
													<div class="resume-company-name">Farzan Clinical Research Organization</div>
												</div>
												<h3 class="resume-position-title mb-1">Junior Backend Developer</h3>
											</div><!--//resume-timeline-item-header-->
											<div class="resume-timeline-item-desc">
												<ul class="resume-timeline-list">
													<li>
														Developed web backend user interfaces to new and existing databases using Codeignite PHP framework
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
										<article class="resume-timeline-item position-relative">
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
											</div><!--//resume-timeline-item-desc-->
										</article><!--//resume-timeline-item-->
									</div>
									<div class="resume-timeline position-relative">
										<article class="resume-timeline-item position-relative">
											<div class="resume-timeline-item-header mb-2">
												<h3 class="resume-position-title mb-1">Akrez eCommerce Platform</h3>
											</div><!--//resume-timeline-item-header-->
											<div class="resume-timeline-item-desc">
												<ul class="resume-timeline-list">
													<li>
														Dynamic eCommerce Platform that empowers small and medium businesses to build their own shopping website in a separate domain
													</li>
													<li>
														Used Yii2 framework
													</li>
													<li>
														Built user frontend by bootstrap4, fully by json API
													</li>
													<li>
														Uses different visual tools such as hart.js to show visit stats
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
											</div><!--//resume-timeline-item-desc-->
										</article><!--//resume-timeline-item-->
									</div><!--//resume-timeline-->
								</section><!--//resume-experience-section-->
							</div><!--//col-8-->
							<div class="col-12 col-lg-4 ps-lg-4">

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

							</div><!--//col-side-->
						</div><!--//row-->
					</div><!--//resume-body-->
				</div><!--//resume-wrapper-->
			</div><!--//container-fluid-->
		</div><!--//main-content-wrapper-->

	</div><!--//container-->
</body>