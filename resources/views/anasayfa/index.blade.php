@extends('layouts.frontbase')
@section('scrollanasayfa', 'active')
@section('content')
<section id="home" class="main-banner parallaxie" style="background: url('uploads/kbu-bg.jpg')">
		<div class="heading">
			<h1>IEEE KBÜ Öğrenci Kolu</h1>
			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
			<h3 class="cd-headline clip is-full-width">
				<span>IEEE KBÜ</span>
				<span class="cd-words-wrapper">
					<b class="is-visible">Computer Society</b>
					<b>Women in Engineering</b>
					<b>Robotics and Automation Society</b>
				</span>
			</h3>
		</div>
	</section>

    <div id="about" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">                        
                        <h2>IEEE KBÜ Hakkında</h2>
                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vitae rutrum neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum risus. Phasellus et congue justo. </p>
						<p>Sed vitae rutrum neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum risus. Phasellus et congue justo.</p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="right-box-pro wow fadeIn">
                        <img src="{{asset('assets')}}/uploads/about_04.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	
    <div id="services" class="section lb">
        <div class="container">
            <div class="section-title text-left">
                <h3>Komiteler</h3>
            </div><!-- end title -->

            <div class="row">
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-seo"></i>
						</div>
						<h2>Computer Society</h2>
						<p>IEEE KBÜ CS komitesi, bilgisayar bilimleri, yazılım, donanım ve daha bir çok konu hakkında çeşitli eğitimler ve üyelerin ilgilerine yönelik projeler düzenler. Yapısında bulunan teknik ekip ile üyelerin kendini geliştirmek için katılabileceği çeşitli projeler geliştirerek ihtiyaç duyulan ekip halinde çalışma ve tartışma ortamının sağlanmasını üyelerine sunar.</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-process"></i>
						</div>
						<h2>Robotics and Automation Society</h2>
						<p>IEEE KBÜ RAS komitesi, üyelerine sektördeki son gelişmeleri aktarmayı ve robotik-otomasyon alanındaki bilimsel ve teknolojik bilgilerin değişimini yakından inceleyip bu alanda projeler geliştirmeyi amaçlar.</p>
					</div>
                </div><!-- end col -->
                <div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-development"></i>
						</div>
						<h2>Women In Engineering</h2>
						<p>IEEE KBÜ WIE komitesi, kadınların ve erkeklerin farklılıkları göz önüne alınarak insanlık yararı ve toplumsal gelişim için birlikte ve eşit bir şekilde çalışmalarını amaçlar, liderlik ve yönetim için kadınları teşvik eder, hem kadın hem de erkek üyelerine topluluk amacını aşılayan eğitim ve seminerler düzenleyerek onların gelişimine ve network sahalarının genişlemelerini amaçlar.</p>
					</div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	<div id="portfolio" class="section lb">
		<div class="container">
			<div class="section-title text-left">
                <h3>Etkinliklerimiz</h3>
                <p>IEEE KBÜ öğrenci kolu bünyesinde gerçekleştirdiğimiz etkinliklerimiz</p>
            </div><!-- end title -->
			
			<div class="gallery-menu row">
				<div class="col-md-12">
					<div class="button-group filter-button-group text-left">
						<button class="active" data-filter="*">Hepsi</button>
						<button data-filter=".gal_a">Webinar</button>
						<button data-filter=".gal_b">Seminer</button>
						<button data-filter=".gal_c">Bootcamp</button>
					</div>
				</div>
			</div>
			
			<div class="gallery-list row">
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_b">
					<div class="gallery-single fix">
						<img src="{{asset('assets')}}/uploads/gallery_img-01.jpg" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="{{asset('assets')}}/uploads/gallery_img-01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_c gal_b">
					<div class="gallery-single fix">
						<img src="{{asset('assets')}}/uploads/gallery_img-02.jpg" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="{{asset('assets')}}/uploads/gallery_img-02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_c">
					<div class="gallery-single fix">
						<img src="{{asset('assets')}}/uploads/gallery_img-03.jpg" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="{{asset('assets')}}/uploads/gallery_img-03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_b gal_a">
					<div class="gallery-single fix">
						<img src="{{asset('assets')}}/uploads/gallery_img-04.jpg" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="{{asset('assets')}}/uploads/gallery_img-04.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_c">
					<div class="gallery-single fix">
						<img src="{{asset('assets')}}/uploads/gallery_img-05.jpg" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="{{asset('assets')}}/uploads/gallery_img-05.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_c gal_a">
					<div class="gallery-single fix">
						<img src="{{asset('assets')}}/uploads/gallery_img-06.jpg" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="{{asset('assets')}}/uploads/gallery_img-06.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	
	<div id="blog" class="section lb">
		<div class="container">
			<div class="section-title text-left">
                <h3>Blog</h3>
                <p>IEEE KBÜ üyelerinin paylaştığı blog yazıları.</p>
            </div><!-- end title -->
			
			<div class="row">
				<div class="col-md-4 col-sm-6 col-lg-4">
					<div class="post-box">
						<div class="post-thumb">
							<img src="{{asset('assets')}}/uploads/blog-01.jpg" class="img-fluid" alt="post-img" />
							<div class="date">
								<span>06</span>
								<span>Aug</span>
							</div>
						</div>
						<div class="post-info">
							<h4>Quisque auctor lectus interdum nisl accumsan venenatis.</h4>
							<ul>
                                <li>by <a href="{{asset('assets')}}/#">CS</a></li>
                                <li>Apr 21, 2018</li>
                                <li><a href="{{asset('assets')}}/#"><b> Comments</b></a></li>
                            </ul>
							<p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-lg-4">
					<div class="post-box">
						<div class="post-thumb">
							<img src="{{asset('assets')}}/uploads/blog-02.jpg" class="img-fluid" alt="post-img" />
							<div class="date">
								<span>06</span>
								<span>Aug</span>
							</div>
						</div>
						<div class="post-info">
							<h4>Quisque auctor lectus interdum nisl accumsan venenatis.</h4>
							<ul>
                                <li>by <a href="{{asset('assets')}}/#">WIE</a></li>
                                <li>Apr 21, 2018</li>
                                <li><a href="{{asset('assets')}}/#"><b> Comments</b></a></li>
                            </ul>
							<p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-lg-4">
					<div class="post-box">
						<div class="post-thumb">
							<img src="{{asset('assets')}}/uploads/blog-03.jpg" class="img-fluid" alt="post-img" />
							<div class="date">
								<span>06</span>
								<span>Aug</span>
							</div>
						</div>
						<div class="post-info">
							<h4>Quisque auctor lectus interdum nisl accumsan venenatis.</h4>
							<ul>
                                <li>by <a href="{{asset('assets')}}/#">RAS</a></li>
                                <li>Apr 21, 2018</li>
                                <li><a href="{{asset('assets')}}/#"><b> Comments</b></a></li>
                            </ul>
							<p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>

    <div id="contact" class="section db">
        <div class="container">
            <div class="section-title text-left">
                <h3>Bize Ulaşın</h3>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactForm" name="sentMessage" novalidate="novalidate">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" id="name" type="text" placeholder="İsminiz" required="required" data-validation-required-message="Lütfen isminizi giriniz.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control" id="email" type="email" placeholder="E-posta adresiniz" required="required" data-validation-required-message="Lütfen e-posta adresinizi giriniz.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control" id="phone" type="tel" placeholder="Telefon numaranız" required="required" data-validation-required-message="Lütfen telefon numaranızı giriniz.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<textarea class="form-control" id="message" placeholder="Mesajnız" required="required" data-validation-required-message="Lütfen mesajınızı giriniz."></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button id="sendMessageButton" class="sim-btn btn-hover-new" data-text="Gönder" type="submit">Gönder</button>
								</div>
							</div>
						</form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
@endsection