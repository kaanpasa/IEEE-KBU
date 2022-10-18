@extends('layouts.frontbase')
@section('scrollhakkimizda', 'active')
@section('content')
    <section id="home" class="main-banner parallaxie" style="background: url('{{asset('assets')}}/uploads/kbu-bg.jpg')" >
        <div class="heading" style="height: 763px;">
            <h1>IEEE KARABÜK ÖĞRENCİ KOLU</h1>
            <p></p>
            <h3 class="cd-headline clip is-full-width">
                <span class="cd-words-wrapper" style="width: 253px;">
					<b class="is-visible">IEEE NEDİR?</b>
					<b class="is-hidden">YÖNETİM KURULU</b>
                    <b class="is-hidden">İDARİ KURUL</b>
                    <b class="is-hidden">DENETİM KURULU</b>

				</span>
            </h3>
        </div>
    </section>
    <div id="about" class="section wb" style="margin-top: 50px;">>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h2>IEEE NEDİR?</h2>
                        <p></p>
                        <p> Açılımı Institute of Electrical Electronics Engineers olan IEEE (Türkçesi: Elektrik Elektronik Mühendisleri Enstitüsü) “İnsanlık Yararına Teknoloji” sloganıyla herhangi bir kâr amacı gütmeden teknolojinin gelişimi için uğraşan bir topluluktur.</p>
                        <p></p>
                        <p>1884 yılında kurulan Amerika Elektrik Mühendisleri Enstitüsü ile Radyo Mühendisleri Enstitüsü 1 Ocak 1963 yılında IEEE'yi oluşturmak için birleştiler. IEEE tüm mühendislik çalışmaların yer aldığı alanlarda faaliyet göstermesinin yanı sıra genel olarak elektrik, elektronik, telekomünikasyon, otomasyon, uzay sistemleri, bilgisayar ve biyomedikal sistemler alanlarında faaliyet göstermekte ve bu alanlarda birçok standart belirlemektedir. IEEE, 400,000’i aşkın üyesiyle 160’dan fazla ülkede bulunan dünyanın en büyük teknik topluluğudur. Üyeleri arasında akademisyenler, mühendisler, bilim insanları gibi profesyonellerin bulunmasının yanı sıra dünyadaki birçok lise ve üniversite öğrencisi yer almaktadır.</p>
                        <p>IEEE ayrıca mühendislik alanına ilgiyi güçlendirmek için üniverstelerdeki öğrenci üyelerine de hizmetlerde bulunur. IEEE hakkında daha fazla bilgi edinmek için: <a href="https://www.ieee.org/" target="_blank">IEEE.org</a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="right-box-pro wow fadeIn">
                        <img src="{{asset('assets')}}/images/ieee-hakk.jpg" alt="" class="img-fluid img-rounded" >
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->

        </div><!-- end container -->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h2>IEEE KBÜ</h2>
                        <p></p>
                        <p>IEEE Karabük Üniversitesi Öğrenci Topluluğu, IEEE Türkiye Şubesi bünyesinde 2019 yılında Türkiye’nin teknik anlamdaki en büyük öğrenci topluluğunun parçası olarak tekrardan kurulmuştur. Topluluğumuz 200 aktif olmak üzere toplamda 700’ü aşkın üyesiyle çalışmalarına ara vermeden devam etmektedir. Üyelerimiz, farklı alt birimlerimiz ve komitelerimiz aktif olarak görev almaktadır.</p>
                        <p></p>
                        <p>IEEE Karabük Üniversitesi olarak ; öğrenci arkadaşlarımızın eğitim döneminden başlayarak profesyonel iş hayatında da sürdüreceği teknik alt yapıyı oluşturmak ve araştırma ruhunu pekiştirmek, ayrıca; mühendislik ve ilgili bölümlerin sadece teorik eğitimlerle tamamlanamayacağı, bu süreç içerisinde öğrencilerin hayata karşı farklı bakış açılarının kazandırılması doğrultusunda farkındalık yaratmaları için azimle çalışmalarımızı sürdürmekteyiz.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-box-pro wow fadeIn">
                        <img src="{{asset('assets')}}/images/logo2.png" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
        <section id="officers">
            <div class="section-title text-center">
                <h3>YÖNETİM KURULU</h3>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3 text-center">
                        <img src="{{asset('assets')}}/uploads/about_04.jpg" class="rounded-circle" width="200" height="200">
                        <p></p>
                        <h2>Ad Soyad</h2>
                        <h4>Yönetim Kurulu Başkanı</h4>
                        <a href="https://mail.google.com/" target="_blank">
                            <img src="{{asset('assets')}}/uploads/mail.jpg" class="rounded-circle" style="width: 30px; height: 30px; object-fit: cover;">
                        </a>
                        <a href="https://www.linkedin.com/" target="_blank">
                            <img src="{{asset('assets')}}/uploads/linkedin.jpg" class="rounded-circle" style="width: 30px; height: 30px; object-fit: cover;">
                        </a>
                    </div>
                </div>
                <p></p>
            </div>
            <div class="row">
                <div class="col-sm-4 text-center">
                    <img src="{{asset('assets')}}/images/person.jpg" class="rounded-circle" width="200" height="200">
                    <p></p>
                    <h2>Ad Soyad</h2>
                    <h4>Dış İşlerden Sorumlu Başkan Yardımcısı</h4>
                    <a href="https://mail.google.com/" target="_blank">
                    <img src="{{asset('assets')}}/uploads/mail.jpg" class="rounded-circle" style="width: 30px; height: 30px; object-fit: cover;">
                    </a>
                    <a href="https://www.linkedin.com/" target="_blank">
                        <img src="{{asset('assets')}}/uploads/linkedin.jpg" class="rounded-circle" style="width: 30px; height: 30px; object-fit: cover;">
                    </a>
                </div>
                <div class="col-sm-4 text-center">
                    <img src="{{asset('assets')}}/images/person.jpg" class="rounded-circle" width="200" height="200">
                    <p></p>
                    <h2>Ad Soyad</h2>
                    <h4>İç İşlerden Sorumlu Başkan Yardımcısı</h4>
                    <a href="https://mail.google.com/" target="_blank">
                        <img src="{{asset('assets')}}/uploads/mail.jpg" class="rounded-circle" style="width: 30px; height: 30px; object-fit: cover;">
                    </a>
                    <a href="https://www.linkedin.com/" target="_blank">
                        <img src="{{asset('assets')}}/uploads/linkedin.jpg" class="rounded-circle" style="width: 30px; height: 30px; object-fit: cover;">
                    </a>
                </div>
                <div class="col-sm-4 text-center">
                    <img src="{{asset('assets')}}/images/person.jpg" class="rounded-circle" width="200" height="200">
                    <p></p>
                    <h2>Ad Soyad</h2>
                    <h4>Yazman</h4>
                    <a href="https://mail.google.com/" target="_blank">
                        <img src="{{asset('assets')}}/uploads/mail.jpg" class="rounded-circle" style="width: 30px; height: 30px; object-fit: cover;">
                    </a>
                    <a href="https://www.linkedin.com/" target="_blank">
                        <img src="{{asset('assets')}}/uploads/linkedin.jpg" class="rounded-circle" style="width: 30px; height: 30px; object-fit: cover;">
                    </a>
                </div>
            </div>
        </section>
        <section id="officers">
            <div class="container">
                <div class="section-title text-center">
                    <h3>İDARİ KURUL</h3>
                </div>
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <img src="{{asset('assets')}}/images/person.jpg" class="rounded-circle" width="200" height="200">
                        <h2>Ad Soyad</h2>
                        <h4>CS Komite Başkanı</h4>
                        <h5>Bilgisayar Mühendisliği</h5>
                        <a href="https://mail.google.com/" target="_blank">
                            <img src="{{asset('assets')}}/uploads/mail.jpg" class="rounded-circle" style="width: 30px; height: 30px; object-fit: cover;">
                        </a>
                        <a href="https://www.linkedin.com/" target="_blank">
                            <img src="{{asset('assets')}}/uploads/linkedin.jpg" class="rounded-circle" style="width: 30px; height: 30px; object-fit: cover;">
                        </a>
                    </div>
                    <div class="col-sm-6 text-center">
                        <img src="{{asset('assets')}}/images/person.jpg" class="rounded-circle" width="200" height="200">
                        <h2>Ad Soyad</h2>
                        <h4>ComSoc Komite Başkanı</h4>
                        <h5>Elektrik ve Elektronik Mühendisliği</h5>
                        <a href="https://mail.google.com/" target="_blank">
                            <img src="{{asset('assets')}}/uploads/mail.jpg" class="rounded-circle" style="width: 30px; height: 30px; object-fit: cover;">
                        </a>
                        <a href="https://www.linkedin.com/" target="_blank">
                            <img src="{{asset('assets')}}/uploads/linkedin.jpg" class="rounded-circle" style="width: 30px; height: 30px; object-fit: cover;">
                        </a>


                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 text-center">
                    <img src="{{asset('assets')}}/images/person.jpg" class="rounded-circle" width="200" height="200">
                    <h2>Ad Soyad</h2>
                    <h4>WIE Komite Başkanı</h4>
                    <a href="https://mail.google.com/" target="_blank">
                        <img src="{{asset('assets')}}/uploads/mail.jpg" class="rounded-circle" style="width: 30px; height: 30px; object-fit: cover;">
                    </a>
                    <a href="https://www.linkedin.com/" target="_blank">
                        <img src="{{asset('assets')}}/uploads/linkedin.jpg" class="rounded-circle" style="width: 30px; height: 30px; object-fit: cover;">
                    </a>

                </div>
                <div class="col-sm-6 text-center">
                    <img src="{{asset('assets')}}/images/person.jpg" class="rounded-circle" width="200" height="200">
                    <h2>Ad Soyad</h2>
                    <h4>RAS Komite Başkanı</h4>
                    <a href="https://mail.google.com/" target="_blank">
                        <img src="{{asset('assets')}}/uploads/mail.jpg" class="rounded-circle" style="width: 30px; height: 30px; object-fit: cover;">
                    </a>
                    <a href="https://www.linkedin.com/" target="_blank">
                        <img src="{{asset('assets')}}/uploads/linkedin.jpg" class="rounded-circle" style="width: 30px; height: 30px; object-fit: cover;">
                    </a>

                </div>
            </div>
        </section>


    </div><!-- end section -->

@endsection


