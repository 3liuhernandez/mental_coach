@extends('layouts.master')

@section('body')
    <section id="home" class="banner-carousel">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div id="myCarousel" class="carousel slide carousel-fade" data-bs-interval="1110000" data-bs-ride="carousel">
                    <div class="carousel-indicators d-none d-lg-block" style="z-index: 2;margin-bottom:2rem;">
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="5" aria-label="Slide 5"></button>
                    </div>
                    <div class="carousel-inner">
                        <!-- caption 1 -->
                        <div class="carousel-item active" id="item-carusel">
                            <img src="{{ asset('images/events/1.jpg') }}" alt="...">
                            <div class="carousel-caption mb-lg-3 m-0">
                                <h2>Another example headline.</h2>
                                <p class="small lh-1 m-0 mx-auto w-75">
                                    Some representative placeholder content for the
                                    second slide of the carousel. 
                                </p>
                            </div>
                        </div>
                        <!-- caption 2 -->
                        <div class="carousel-item" id="item-carusel">
                            <img src="{{ asset('images/events/1.jpg') }}" alt="...">
                            <div class="carousel-caption mb-lg-3 text-start m-0">
                                <h2>Example headline.</h2>
                                <p class="small lh-1 m-0 w-75 ">
                                    Some representative placeholder content for the first slide
                                    of the carousel.
                                </p>
                            </div>
                        </div>
                        <!-- caption 3 -->
                        <div class="carousel-item" id="item-carusel">
                            <img src="{{ asset('images/events/1.jpg') }}" alt="...">
                            <div class="carousel-caption mb-lg-3 text-end d-flex flex-column align-items-end m-0">
                                <h2>One more for good measure.</h2>
                                <p class="small lh-1 m-0 w-75 ">
                                    Some representative placeholder content for the third slide
                                    of this carousel.
                                </p>
                            </div>
                        </div>
                        <!-- caption 4 -->
                        <div class="carousel-item" id="item-carusel">
                            <img src="{{ asset('images/events/1.jpg') }}" alt="...">
                            <div class="carousel-caption mb-lg-3 text-start m-0">
                                <h2>Example headline.</h2>
                                <p class="small lh-1 m-0 w-75 ">
                                    Some representative placeholder content for the first slide
                                    of the carousel.
                                </p>
                            </div>
                        </div>
                        <!-- caption 5 -->
                        <div class="carousel-item" id="item-carusel">
                            <img src="{{ asset('images/events/1.jpg') }}" alt="...">
                            <div class="carousel-caption mb-lg-3 text-end d-flex flex-column align-items-end m-0">
                                <h2>One more for good measure.</h2>
                                <p class="small lh-1 m-0 w-75 ">
                                    Some representative placeholder content for the third slide
                                    of this carousel.
                                </p>
                            </div>
                        </div>
                        <!-- caption 6 -->
                        <div class="carousel-item" id="item-carusel">
                            <img src="{{ asset('images/events/1.jpg') }}" alt="...">
                            <div class="carousel-caption mb-lg-3 m-0">
                                <h2>Another example headline.</h2>
                                <p class="small lh-1 m-0 mx-auto w-75 ">
                                    Some representative placeholder content for the
                                    second slide of the carousel.
                                </p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    {{-- ========== Hero section start ========== --}}
    <section id="hero" class="hero hero__padding overflow-hidden position-relative bg-one">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 m-0px-b md-m-30px-b">
                    <div class="hero__content position-relative">
                        <div class="badge-text mb-2" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                            Tengamos la mejor visíon
                        </div>
                        {{-- <h1 class="display-4 mb-4" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">EL ATLETA</h1> --}}
                        <h3 class="display-4 mb-4" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                            SUPERANDO LA FRUSTRACION
                        </h3>
                        <p class="mb-5" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                            En este curso podrás obtener técnicas para el manejo de la FRUSTRACIÓN
                            antes resultados no deseados, fortaleciendo tu mentalidad ganadora
                        </p>
                        <!-- subscription form start -->
                        <form id="subscribe">
                            <div class="input-group" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                                <input type="email" name="email" placeholder="Email" id="subscriber-email" />
                                <button class="button button__primary" id="subscribe-button">
                                    <span>Subscribe</span>
                                </button>
                            </div>
                            <div class="result">
                                <p class="success-msg" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                                    <i class="icofont-check"></i>
                                    Your email has been stored!
                                </p>
                                <p class="error-msg" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                                    <i class="icofont-close"></i>
                                    Sorry! Something went wrong!
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                    <div class="hero__images text-center">
                        <img class="img-fluid" src="{{ asset('images/photo_author.png') }}" alt="" />
                        <div class="hero__images--badge">
                            <span>
                                <span class="hero__images--badge--text1">W.M.T</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========== Author section start ========== --}}
    <section id="instructors" class="section-padding authorv3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 offset-xl-3 col-lg-10 offset-lg-1">
                    <div class="section-title-center text-center">
                        <span data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">SOBRE NUESTROS
                            COACHS</span>
                        <h2 class="display-6" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                            Aprende sobre nuestros coachs
                        </h2>
                        <div class="section-divider divider-traingle" data-aos="fade-up" data-aos-duration="100"
                            data-aos-delay="100"></div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="100" data-aos-delay="100">
                    <div class="author-image">
                        {{-- <img class="img-fluid" src="{{ asset("images/about.webp") }}" alt="Authors Image" /> --}}
                        <img class="img-fluid" src="{{ asset('images/authorv3.png') }}" alt="" />
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="100" data-aos-delay="100">
                    <div class="authorv3__content">
                        <p>
                            Desde el principio <span style="font-weight:bold;color:#3ab5c2">W.M.T</span> nació para ayudar,
                            para ser un desestresante que baje los niveles de ansiedad por medio de la reflexión para
                            auto-motivarte
                            dado segun las investigaciones muestra que la mentalidad juega un papel importante en la
                            determinación de los resultados de la vida.{{--  Al comprender, adaptar y cambiar su forma de pensar, 
                            puede mejorar su salud, disminuir su estrés y volverse más resistente a los desafíos que la vida nos 
                            presenta diariamente. --}}
                        </p>
                        <div class="authorv2__content">
                            <div class="authorv2__list">
                                <div class="row">
                                    <div class="col-6 mb-3">
                                        <h4>Nombre:</h4>
                                        <p class="mb-0">Dario Ortega</p>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h4>F. Nacimiento:</h4>
                                        <p class="mb-0">05. 16. 1992</p>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h4>País:</h4>
                                        <p class="mb-0">Vnzla</p>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h4>Email:</h4>
                                        <p class="mb-0">contacto@coachwmt.com</p>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h4>Idiomas:</h4>
                                        <p class="mb-0">Espanish, English</p>
                                    </div>
                                    <div class="col-6">
                                        <h4>Dirección:</h4>
                                        <p class="mb-0">Etowah, TN 37331 EEUU</p>
                                    </div>
                                </div>
                            </div>
                            <ul class="social-icon mt-3">
                                <li>
                                    <a href="#"><i class="icofont-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-youtube-play"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-whatsapp"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ========== Author v3 section end ========== --}}

    <section id="timeline" class="section-padding bg-one">
        <div class="container">
            <div class="section-title-center text-center">
                <span data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">NUESTRO RECORRIDO</span>
                <h2 class="display-6" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                    Nuestros logros optenidos
                </h2>
                <div class="section-divider divider-traingle" data-aos="fade-up" data-aos-duration="100"
                    data-aos-delay="100"></div>
            </div>
            <div class="cd-horizontal-timeline">
                <div class="timeline">
                    <div class="events-wrapper">
                        <div class="events">
                            <ol class="">
                                <li><a href="#0" data-date="16/01/2014" class="selected">16 Jan</a></li>
                                <li><a href="#0" data-date="28/02/2014">28 Feb</a></li>
                                <li><a href="#0" data-date="20/04/2014">20 Mar</a></li>
                                <li><a href="#0" data-date="20/05/2014">20 May</a></li>
                                <li><a href="#0" data-date="09/07/2014">09 Jul</a></li>
                                <li><a href="#0" data-date="30/08/2014">30 Aug</a></li>
                                <li><a href="#0" data-date="15/09/2014">15 Sep</a></li>
                                <li><a href="#0" data-date="01/11/2014">01 Nov</a></li>
                                <li><a href="#0" data-date="10/12/2014">10 Dec</a></li>
                                <li><a href="#0" data-date="19/01/2015">29 Jan</a></li>
                                <li><a href="#0" data-date="03/03/2015">3 Mar</a></li>
                            </ol>
                            <span class="filling-line" aria-hidden="true"></span>
                        </div> <!-- .events -->
                    </div> <!-- .events-wrapper -->
                    <ul class="cd-timeline-navigation">
                        <li><a href="#0" class="prev inactive">Prev</a></li>
                        <li><a href="#0" class="next">Next</a></li>
                    </ul> <!-- .cd-timeline-navigation -->
                </div> <!-- .timeline -->
                <div class="events-content">
                    <ol class="">
                        <li class="selected" data-date="16/01/2014">
                            <div class="col">
                                <h2>Horizontal Timeline</h2>
                                <em>January 16th, 2014</em>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                                    fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic
                                    repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                    reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae,
                                    temporibus dolores porro doloribus.
                                </p>
                            </div>
                            <div class="col">
                                <img class="img-fluid" src="{{ asset('images/achive.png') }}" alt="">
                            </div>
                        </li>
                        <li data-date="28/02/2014">
                            <div class="col">
                                <h2>Event title here</h2>
                                <em>February 28th, 2014</em>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                                    fugit
                                    recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic
                                    repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                    reiciendis
                                    eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus
                                    dolores porro doloribus.
                                </p>
                            </div>
                            <div class="col">
                                <img class="img-fluid" src="{{ asset('images/achive.png') }}" alt="">
                            </div>
                        </li>
                        <li data-date="20/04/2014">
                            <div class="col">
                                <h2>Event title here</h2>
                                <em>March 20th, 2014</em>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                                    fugit
                                    recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic
                                    repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                    reiciendis
                                    eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus
                                    dolores porro doloribus.
                                </p>
                            </div>
                            <div class="col">
                                <img class="img-fluid" src="{{ asset('images/achive.png') }}" alt="">
                            </div>
                        </li>
                        <li data-date="20/05/2014">
                            <div class="col">
                                <h2>Event title here</h2>
                                <em>May 20th, 2014</em>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                                    fugit
                                    recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic
                                    repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                    reiciendis
                                    eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus
                                    dolores porro doloribus.
                                </p>
                            </div>
                            <div class="col">
                                <img class="img-fluid" src="{{ asset('images/achive.png') }}" alt="">
                            </div>
                        </li>
                        <li data-date="09/07/2014">
                            <div class="col">
                                <h2>Event title here</h2>
                                <em>July 9th, 2014</em>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                                    fugit
                                    recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic
                                    repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                    reiciendis
                                    eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus
                                    dolores porro doloribus.
                                </p>
                            </div>
                            <div class="col">
                                <img class="img-fluid" src="{{ asset('images/achive.png') }}" alt="">
                            </div>
                        </li>
                        <li data-date="30/08/2014">
                            <div class="col">
                                <h2>Event title here</h2>
                                <em>August 30th, 2014</em>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                                    fugit
                                    recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic
                                    repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                    reiciendis
                                    eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus
                                    dolores porro doloribus.
                                </p>
                            </div>
                            <div class="col">
                                <img class="img-fluid" src="{{ asset('images/achive.png') }}" alt="">
                            </div>
                        </li>
                        <li data-date="15/09/2014">
                            <div class="col">
                                <h2>Event title here</h2>
                                <em>September 15th, 2014</em>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                                    fugit
                                    recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic
                                    repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                    reiciendis
                                    eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus
                                    dolores porro doloribus.
                                </p>
                            </div>
                            <div class="col">
                                <img class="img-fluid" src="{{ asset('images/achive.png') }}" alt="">
                            </div>
                        </li>
                        <li data-date="01/11/2014">
                            <div class="col">
                                h2>Event title here</h2>
                                <em>November 1st, 2014</em>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                                    fugit
                                    recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic
                                    repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                    reiciendis
                                    eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus
                                    dolores porro doloribus.
                                </p>
                            </div>
                            <div class="col">
                                <img class="img-fluid" src="{{ asset('images/achive.png') }}" alt="">
                            </div>
                        </li>
                        <li data-date="10/12/2014">
                            <div class="col">
                                <h2>Event title here</h2>
                                <em>December 10th, 2014</em>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                                    fugit
                                    recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic
                                    repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                    reiciendis
                                    eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus
                                    dolores porro doloribus.
                                </p>
                            </div>
                            <div class="col">
                                <img class="img-fluid" src="{{ asset('images/achive.png') }}" alt="">
                            </div>
                        </li>
                        <li data-date="19/01/2015">
                            <div class="col">
                                <h2>Event title here</h2>
                                <em>January 19th, 2015</em>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                                    fugit
                                    recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic
                                    repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                    reiciendis
                                    eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus
                                    dolores porro doloribus.
                                </p>
                            </div>
                            <div class="col">
                                <img class="img-fluid" src="{{ asset('images/achive.png') }}" alt="">
                            </div>
                        </li>
                        <li data-date="03/03/2015">
                            <div class="col">
                                <h2>Event title here</h2>
                                <em>March 3rd, 2015</em>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                                    fugit
                                    recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic
                                    repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                    reiciendis
                                    eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus
                                    dolores porro doloribus.
                                </p>
                            </div>
                            <div class="col">
                                <img class="img-fluid" src="{{ asset('images/achive.png') }}" alt="">
                            </div>
                        </li>
                    </ol>
                </div> <!-- .events-content -->
            </div>
        </div>
    </section>

    {{-- ========== Achieve section start ========== --}}
    <section id="benefits" class="achieve section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-10 offset-lg-1">
                    <div class="section-title-center text-center">
                        <span data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">¿POR QUÉ
                            W.M.T?</span>
                        <h2 class="display-6" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                            Lo que lograrás con nosotros
                        </h2>
                        <div class="section-divider divider-traingle" data-aos="fade-up" data-aos-duration="100"data-aos-delay="100"></div>
                    </div>
                </div>
            </div>
            <div class="row gx-5">
                <div class="col-lg-6 mb-3 mb-lg-0" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="achieve__image">
                                <img class="img-fluid" src="{{ asset('images/achive2.jpg') }}" alt="Achive Image" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="achieve__content">
                        <div class="row">
                            <!-- achieve item start -->
                            <div class="col-sm-6 mb-4" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                                <div class="achieve__content__item h-100 translateEffect2">
                                    {{-- <div class="achieve__icon m-20px-b">
                                        <i class="icofont-ebook"></i>
                                    </div> --}}
                                    <h3 class="m-15px-b">1ª Sesion</h3>
                                    {{-- <p>
                                        Lorem ipsum dolor sit amet ametus conso tetur ading
                                        elitor fugit piatur iusto provid.
                                    </p> --}}
                                    <li class="nav-item">
                                        Optimizar el rendimiento deportivo y psicologico
                                    </li>
                                </div>
                            </div>
                            <!-- achieve item end -->
                            <!-- achieve item start -->
                            <div class="col-sm-6 mb-4" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                                <div class="achieve__content__item h-100 translateEffect2">
                                    {{-- <div class="achieve__icon m-20px-b">
                                        <i class="icofont-dice-multiple"></i>
                                    </div> --}}
                                    <h3 class="m-15px-b">2ª Sesion</h3>
                                    {{-- <p>
                                        Lorem ipsum dolor sit amet ametus conso tetur ading
                                        elitor fugit piatur iusto provid.
                                    </p> --}}
                                    <li class="nav-item">
                                        Mejorar la concentración
                                    </li>
                                </div>
                            </div>
                            <!-- achieve item end -->
                            <!-- achieve item start -->
                            <div class="col-sm-6 mb-4" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                                <div class="achieve__content__item h-100 translateEffect2">
                                    {{-- <div class="achieve__icon m-20px-b">
                                        <i class="icofont-goal"></i>
                                    </div> --}}
                                    <h3 class="m-15px-b">3ª Sesion</h3>
                                    {{-- <p>
                                        Lorem ipsum dolor sit amet ametus conso tetur ading
                                        elitor fugit piatur iusto provid.
                                    </p> --}}
                                    <li class="nav-item">
                                        Aumentar la seguridad
                                    </li>
                                </div>
                            </div>
                            <!-- achieve item end -->
                            <!-- achieve item start -->
                            <div class="col-sm-6 mb-4" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                                <div class="achieve__content__item h-100 translateEffect2">
                                    {{-- <div class="achieve__icon m-20px-b">
                                        <i class="icofont-brand-target"></i>
                                    </div> --}}
                                    <h3 class="m-15px-b">4ª Sesion</h3>
                                    {{-- <p>
                                        Lorem ipsum dolor sit amet ametus conso tetur ading
                                        elitor fugit piatur iusto provid.
                                    </p> --}}
                                    <li class="list-style-none">
                                        Control del estrés y la ansiedad
                                    </li>
                                </div>
                            </div>
                            <!-- achieve item end -->
                            <!-- achieve item start -->
                            <div class="col-sm-6 mb-4" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                                <div class="achieve__content__item h-100 translateEffect2">
                                    {{-- <div class="achieve__icon m-20px-b">
                                        <i class="icofont-brand-target"></i>
                                    </div> --}}
                                    <h3 class="m-15px-b">5ª Sesion</h3>
                                    {{-- <p>
                                        Lorem ipsum dolor sit amet ametus conso tetur ading
                                        elitor fugit piatur iusto provid.
                                    </p> --}}
                                    <li class="list-style-none">
                                        Mejora la motivación
                                    </li>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-4" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                                <div class="achieve__content__item h-100 translateEffect2">
                                    {{-- <div class="achieve__icon m-20px-b">
                                        <i class="icofont-brand-target"></i>
                                    </div> --}}
                                    <h3 class="m-15px-b">6ª Sesion</h3>
                                    {{-- <p>
                                        Lorem ipsum dolor sit amet ametus conso tetur ading
                                        elitor fugit piatur iusto provid.
                                    </p> --}}
                                    <li class="list-style-none">
                                        Mejora la motivación
                                    </li>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-4" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                                <div class="achieve__content__item h-100 translateEffect2">
                                    {{-- <div class="achieve__icon m-20px-b">
                                        <i class="icofont-brand-target"></i>
                                    </div> --}}
                                    <h3 class="m-15px-b">7ª Sesion</h3>
                                    {{-- <p>
                                        Lorem ipsum dolor sit amet ametus conso tetur ading
                                        elitor fugit piatur iusto provid.
                                    </p> --}}
                                    <li class="list-style-none">
                                        Mejora la motivación
                                    </li>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-4" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                                <div class="achieve__content__item h-100 translateEffect2">
                                    {{-- <div class="achieve__icon m-20px-b">
                                        <i class="icofont-brand-target"></i>
                                    </div> --}}
                                    <h3 class="m-15px-b">5ª Sesion</h3>
                                    {{-- <p>
                                        Lorem ipsum dolor sit amet ametus conso tetur ading
                                        elitor fugit piatur iusto provid.
                                    </p> --}}
                                    <li class="list-style-none">
                                        Mejora la motivación
                                    </li>
                                </div>
                            </div>
                            <!-- achieve item end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ========== Achieve section end ========== --}}

    {{-- ========== Sessions section start ========== --}}
    <section id="sessions" class="section-padding bg-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-10 offset-lg-1">
                    <div class="section-title-center text-center">
                        <span data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">SESIONES</span>
                        <h2 class="display-6" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                            Sesiones que hemos cubierto
                        </h2>
                        <div class="section-divider divider-traingle" data-aos="fade-up" data-aos-duration="100"
                            data-aos-delay="100"></div>
                    </div>
                </div>
            </div>
            <div class="row gx-5">
                <div class="col-lg-6 mb-4 mb-lg-0 d-flex justify-content-center align-items-center" data-aos="fade-right"
                    data-aos-duration="100" data-aos-delay="100">
                    <img src="{{ asset('images/image_sesions.webp') }}" alt="" class="img-fluid d-block" />
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="100" data-aos-delay="100">
                    <div class="accordion accordion-flush faqs-accordion mt-4 mt-lg-0" id="accordionFlushExample">
                        <!-- accordion start -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="true"
                                    aria-controls="flush-collapseOne">
                                    Un Espacio Seguro, Tranquilo y de Autoreflexión.
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <p class="accordion-body text-secondary">
                                    Con nuestras <span style="font-weight:bold;color:#3ab5c2">SESIONES
                                        ONLINE</span>
                                    conseguirás procesar emocionalmente lo que estás viviendo. Ya sea por lidiar con
                                    el
                                    estrés o las migrañas,
                                    por rebajar la ansiedad o por atar cabos sueltos emocionales, escribir 20
                                    minutos al día
                                    en tu diario
                                    personal desde el punto de vista emocional te ayudará a ganar perspectiva sobre
                                    tu
                                    experiencia vital.
                                </p>
                            </div>
                        </div>
                        <!-- accordion end -->
                        <!-- accordion start -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    Necesitas Calma
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <p class="accordion-body text-secondary">
                                    <span style="font-weight:bold;color:#3ab5c2">W.M.T</span> Es un espacio
                                    diseñado para
                                    reflexionar,
                                    para escribir tus vivencias y tus pensamientos. Usa el tiempo que dedicas en tus
                                    esfuerzos para renovarte
                                    y respirar profundo. Si incorporas este lapso de tiempo a tus rutinas te ayudará
                                    a
                                    entrar en estado de calma.
                                </p>
                            </div>
                        </div>
                        <!-- accordion end -->
                        <!-- accordion start -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Tienes que Valorarte
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <p class="accordion-body text-secondary">
                                    En <span style="font-weight:bold;color:#3ab5c2">W.M.T</span> te ayudamos a
                                    atesorar
                                    todas las
                                    frases de ánimo que creas que te pueden ayudar. Con nuestras sesiones convierte
                                    tus
                                    pensamientos
                                    negativos y pon afirmaciones positivas. Como tips escribir sobre todo lo que
                                    haces va a
                                    evidenciar
                                    todo lo que haces bien.
                                </p>
                            </div>
                        </div>
                        <!-- accordion end -->
                        <!-- accordion start -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Disminuye tu estrés
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <p class="accordion-body text-secondary">
                                    <span style="font-weight:bold;color:#3ab5c2">W.M.T</span> Te va a ayudar a
                                    manejar el
                                    nivel
                                    de ansiedad porque te va a ayudar a aclarar tus ideas durante situaciones
                                    difíciles.
                                    El uso de nuestras sesiones en todos los ámbitos de tu vida te ayudará a
                                    identificar el
                                    significado, el contexto y el impacto de los eventos que te afectan.
                                </p>
                            </div>
                        </div>
                        <!-- accordion end -->
                        {{-- <!-- accordion start -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                    Sesion 05
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <p class="accordion-body text-secondary">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Temporibus ea dolore amet laudantium quibusdam nobis
                                    labore molestiae odit voluptas velit!
                                </p>
                            </div>
                        </div>
                        <!-- accordion end -->
                        <!-- accordion start -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                    Sesion 06
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <p class="accordion-body text-secondary">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Temporibus ea dolore amet laudantium quibusdam nobis
                                    labore molestiae odit voluptas velit!
                                </p>
                            </div>
                        </div>
                        <!-- accordion end -->
                        <!-- accordion start -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                    Sesion 07
                                </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                <p class="accordion-body text-secondary">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Temporibus ea dolore amet laudantium quibusdam nobis
                                    labore molestiae odit voluptas velit!
                                </p>
                            </div>
                        </div>
                        <!-- accordion end --> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ========== Chapters section end ========== --}}

    {{-- ========== Chapter preview section start ========== --}}
    <section id="preview" class="section-padding chapter-preview">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-10 offset-lg-1">
                    <div class="section-title-center text-center">
                        <span data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                            VISTA PREVIA DE LAS SESIONES ONLINE
                        </span>
                        <h2 class="display-6" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                            Vea unas Sesiones gratis.
                        </h2>
                        <div class="section-divider divider-traingle" data-aos="fade-up" data-aos-duration="100"
                            data-aos-delay="100"></div>
                    </div>
                </div>
            </div>
            <div class="row testi-row">
                <div class="col-12 p-80px-b">
                    <div class="chapter-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide p-5px-lr translateEffect2" data-aos="fade-up"
                                data-aos-duration="100" data-aos-delay="100">
                                <a href="{{ asset('images/chapter-preview/1.jpg') }}" class="glightbox2"
                                    data-glightbox=" description: .custom-desc1; descPosition: right;">
                                    <img class="chapter-img img-fluid" src="{{ asset('images/chapter-preview/1.jpg') }}"
                                        alt="image" />
                                </a>
                                <div class="glightbox-desc custom-desc1">
                                    <h3 class="mb-4 text-center">The Beginning</h3>
                                    <p class="first-letter">
                                        Dpsum vehicula eros ultrices lacinia Vestibulum ante
                                        ipsum primis in faucibus orci luctus et ultrices posuere
                                        cubilia Curae Duis quis ipsum vehicula eros ultrices
                                        lacinia. Vestibulum ante ipsum primis in faucibus orci
                                        luctus et ultrices posuere
                                    </p>
                                    <p>
                                        Primis pharetra facilisis lorem quis penatibus ad nulla
                                        inceptos, dui per tempor taciti aliquet consequat
                                        sodales, curae tristique gravida auctor interdum
                                        malesuada sagittis. Felis pretium eros ligula natoque ad
                                        ante rutrum himenaeos, adipiscing urna mauris porta quam
                                        efficitur odio, sagittis morbi tellus nisi molestie mus
                                        faucibus.
                                    </p>
                                    <p>
                                        Primis pharetra facilisis lorem quis penatibus ad nulla
                                        inceptos, dui per tempor taciti aliquet consequat
                                        sodales, curae tristique gravida auctor interdum
                                        malesuada sagittis. Felis pretium eros ligula natoque ad
                                        ante rutrum himenaeos, adipiscing urna mauris porta quam
                                        efficitur odio, sagittis morbi tellus nisi molestie mus
                                        faucibus.
                                    </p>
                                    <p>
                                        Primis pharetra facilisis lorem quis penatibus ad nulla
                                        inceptos, dui per tempor taciti aliquet consequat
                                        sodales, curae tristique gravida auctor interdum
                                        malesuada sagittis. Felis pretium eros ligula natoque ad
                                        ante rutrum himenaeos, adipiscing urna mauris porta quam
                                        efficitur odio, sagittis morbi tellus nisi molestie mus
                                        faucibus.
                                    </p>
                                    <p>
                                        Primis pharetra facilisis lorem quis penatibus ad nulla
                                        inceptos, dui per tempor taciti aliquet consequat
                                        sodales, curae tristique gravida auctor interdum
                                        malesuada sagittis. Felis pretium eros ligula natoque ad
                                        ante rutrum himenaeos, adipiscing urna mauris porta quam
                                        efficitur odio, sagittis morbi tellus nisi molestie mus
                                        faucibus.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide p-5px-lr" data-aos="fade-up" data-aos-duration="100"
                                data-aos-delay="100">
                                <a href="{{ asset('images/chapter-preview/2.jpg') }}" class="glightbox2"
                                    data-glightbox=" description: .custom-desc2; descPosition: right;">
                                    <img class="chapter-img img-fluid" src="{{ asset('images/chapter-preview/2.jpg') }}"
                                        alt="image" />
                                </a>
                                <div class="glightbox-desc custom-desc2">
                                    <h3 class="mb-4 text-center">Main Story</h3>
                                    <p class="first-letter">
                                        Bpsum vehicula eros ultrices lacinia Vestibulum ante
                                        ipsum primis in faucibus orci luctus et ultrices posuere
                                        cubilia Curae Duis quis ipsum vehicula eros ultrices
                                        lacinia. Vestibulum ante ipsum primis in faucibus orci
                                        luctus et ultrices posuere
                                    </p>
                                    <p>
                                        Primis pharetra facilisis lorem quis penatibus ad nulla
                                        inceptos, dui per tempor taciti aliquet consequat
                                        sodales, curae tristique gravida auctor interdum
                                        malesuada sagittis. Felis pretium eros ligula natoque ad
                                        ante rutrum himenaeos, adipiscing urna mauris porta quam
                                        efficitur odio, sagittis morbi tellus nisi molestie mus
                                        faucibus.
                                    </p>
                                    <p>
                                        Primis pharetra facilisis lorem quis penatibus ad nulla
                                        inceptos, dui per tempor taciti aliquet consequat
                                        sodales, curae tristique gravida auctor interdum
                                        malesuada sagittis. Felis pretium eros ligula natoque ad
                                        ante rutrum himenaeos, adipiscing urna mauris porta quam
                                        efficitur odio, sagittis morbi tellus nisi molestie mus
                                        faucibus.
                                    </p>
                                    <p>
                                        Primis pharetra facilisis lorem quis penatibus ad nulla
                                        inceptos, dui per tempor taciti aliquet consequat
                                        sodales, curae tristique gravida auctor interdum
                                        malesuada sagittis. Felis pretium eros ligula natoque ad
                                        ante rutrum himenaeos, adipiscing urna mauris porta quam
                                        efficitur odio, sagittis morbi tellus nisi molestie mus
                                        faucibus.
                                    </p>
                                    <p>
                                        Primis pharetra facilisis lorem quis penatibus ad nulla
                                        inceptos, dui per tempor taciti aliquet consequat
                                        sodales, curae tristique gravida auctor interdum
                                        malesuada sagittis. Felis pretium eros ligula natoque ad
                                        ante rutrum himenaeos, adipiscing urna mauris porta quam
                                        efficitur odio, sagittis morbi tellus nisi molestie mus
                                        faucibus.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide p-5px-lr" data-aos="fade-up" data-aos-duration="100"
                                data-aos-delay="100">
                                <a href="{{ asset('images/chapter-preview/3.jpg') }}" class="glightbox2"
                                    data-glightbox=" description: .custom-desc3; descPosition: right;">
                                    <img class="chapter-img img-fluid" src="{{ asset('images/chapter-preview/3.jpg') }}"
                                        alt="image" />
                                </a>
                                <div class="glightbox-desc custom-desc3">
                                    <h3 class="mb-4 text-center">Story Part-03</h3>
                                    <p class="first-letter">
                                        Apsum vehicula eros ultrices lacinia Vestibulum ante
                                        ipsum primis in faucibus orci luctus et ultrices posuere
                                        cubilia Curae Duis quis ipsum vehicula eros ultrices
                                        lacinia. Vestibulum ante ipsum primis in faucibus orci
                                        luctus et ultrices posuere
                                    </p>
                                    <p>
                                        Primis pharetra facilisis lorem quis penatibus ad nulla
                                        inceptos, dui per tempor taciti aliquet consequat
                                        sodales, curae tristique gravida auctor interdum
                                        malesuada sagittis. Felis pretium eros ligula natoque ad
                                        ante rutrum himenaeos, adipiscing urna mauris porta quam
                                        efficitur odio, sagittis morbi tellus nisi molestie mus
                                        faucibus.
                                    </p>
                                    <p>
                                        Primis pharetra facilisis lorem quis penatibus ad nulla
                                        inceptos, dui per tempor taciti aliquet consequat
                                        sodales, curae tristique gravida auctor interdum
                                        malesuada sagittis. Felis pretium eros ligula natoque ad
                                        ante rutrum himenaeos, adipiscing urna mauris porta quam
                                        efficitur odio, sagittis morbi tellus nisi molestie mus
                                        faucibus.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide p-5px-lr" data-aos="fade-up" data-aos-duration="100"
                                data-aos-delay="100">
                                <a href="{{ asset('images/chapter-preview/4.jpg') }}" class="glightbox2"
                                    data-glightbox=" description: .custom-desc4; descPosition: right;">
                                    <img class="chapter-img img-fluid" src="{{ asset('images/chapter-preview/4.jpg') }}"
                                        alt="image" />
                                </a>
                                <div class="glightbox-desc custom-desc4">
                                    <h3 class="mb-4 text-center">Description-04</h3>
                                    <p class="first-letter">
                                        Mpsum vehicula eros ultrices lacinia Vestibulum ante
                                        ipsum primis in faucibus orci luctus et ultrices posuere
                                        cubilia Curae Duis quis ipsum vehicula eros ultrices
                                        lacinia. Vestibulum ante ipsum primis in faucibus orci
                                        luctus et ultrices posuere
                                    </p>
                                    <p>
                                        Primis pharetra facilisis lorem quis penatibus ad nulla
                                        inceptos, dui per tempor taciti aliquet consequat
                                        sodales, curae tristique gravida auctor interdum
                                        malesuada sagittis. Felis pretium eros ligula natoque ad
                                        ante rutrum himenaeos, adipiscing urna mauris porta quam
                                        efficitur odio, sagittis morbi tellus nisi molestie mus
                                        faucibus.
                                    </p>
                                    <p>
                                        Primis pharetra facilisis lorem quis penatibus ad nulla
                                        inceptos, dui per tempor taciti aliquet consequat
                                        sodales, curae tristique gravida auctor interdum
                                        malesuada sagittis. Felis pretium eros ligula natoque ad
                                        ante rutrum himenaeos, adipiscing urna mauris porta quam
                                        efficitur odio, sagittis morbi tellus nisi molestie mus
                                        faucibus.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide p-5px-lr" data-aos="fade-up" data-aos-duration="100"
                                data-aos-delay="100">
                                <a href="{{ asset('images/chapter-preview/5.jpg') }}" class="glightbox2"
                                    data-glightbox="description: .custom-desc5; descPosition: right;">
                                    <img class="chapter-img img-fluid" src="{{ asset('images/chapter-preview/5.jpg') }}"
                                        alt="image" />
                                </a>
                                <div class="glightbox-desc custom-desc5">
                                    <h3 class="mb-4 text-center">Story No:05</h3>
                                    <p class="first-letter">
                                        Tpsum vehicula eros ultrices lacinia Vestibulum ante
                                        ipsum primis in faucibus orci luctus et ultrices posuere
                                        cubilia Curae Duis quis ipsum vehicula eros ultrices
                                        lacinia. Vestibulum ante ipsum primis in faucibus orci
                                        luctus et ultrices posuere
                                    </p>
                                    <p>
                                        Primis pharetra facilisis lorem quis penatibus ad nulla
                                        inceptos, dui per tempor taciti aliquet consequat
                                        sodales, curae tristique gravida auctor interdum
                                        malesuada sagittis. Felis pretium eros ligula natoque ad
                                        ante rutrum himenaeos, adipiscing urna mauris porta quam
                                        efficitur odio, sagittis morbi tellus nisi molestie mus
                                        faucibus.
                                    </p>
                                    <p>
                                        Primis pharetra facilisis lorem quis penatibus ad nulla
                                        inceptos, dui per tempor taciti aliquet consequat
                                        sodales, curae tristique gravida auctor interdum
                                        malesuada sagittis. Felis pretium eros ligula natoque ad
                                        ante rutrum himenaeos, adipiscing urna mauris porta quam
                                        efficitur odio, sagittis morbi tellus nisi molestie mus
                                        faucibus.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== Chapter preview section end ========== -->

    {{-- ========== Events section end ========== --}}
    <section id="events" class="section-padding event bg-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-10 offset-lg-1">
                    <div class="section-title-center text-center">
                        <span data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">EVENTOS</span>
                        <h2 class="display-6" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                            Próximos
                            Eventos y Programas</h2>
                        <div class="section-divider divider-traingle" data-aos="fade-up" data-aos-duration="100"
                            data-aos-delay="100"></div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                    <article class="events__single-event h-100 translateEffect1">
                        <div class="events__single-event__image">
                            <a href="single-event.html">
                                <img class="img-fluid" src="{{ asset('images/events/1.jpg') }}" alt="events 01" />
                            </a>
                        </div>
                        <div class="events__single-event__body">
                            <div class="events__single-event__content">
                                <h2 class="fs-4">
                                    <a href="single-event.html">Discussion On Horror Thriller</a>
                                </h2>
                                <p class="m-0">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Maxime provident, in tempore incidunt laudantium.
                                </p>
                            </div>
                            <div class="events__single-event__meta">
                                <div><i class="icofont-calendar"></i> 3 June, 2021</div>
                                <div><i class="icofont-location-pin"></i> Milan</div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- End single event -->
                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                    <article class="events__single-event h-100 translateEffect1">
                        <div class="events__single-event__image">
                            <a href="single-event.html">
                                <img class="img-fluid" src="{{ asset('images/events/2.jpg') }}" alt="events 01" />
                            </a>
                        </div>
                        <div class="events__single-event__body">
                            <div class="events__single-event__content">
                                <h2 class="fs-4">
                                    <a href="single-event.html">Discussion On Horror Thriller</a>
                                </h2>
                                <p class="m-0">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Maxime provident, in tempore incidunt laudantium.
                                </p>
                            </div>
                            <div class="events__single-event__meta">
                                <div><i class="icofont-calendar"></i> 3 June, 2021</div>
                                <div><i class="icofont-location-pin"></i> Boston</div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- End single event -->
                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                    <article class="events__single-event h-100 translateEffect1">
                        <div class="events__single-event__image">
                            <a href="single-event.html">
                                <img class="img-fluid" src="{{ asset('images/events/3.jpg') }}" alt="events 02" />
                            </a>
                        </div>
                        <div class="events__single-event__body">
                            <div class="events__single-event__content">
                                <h2 class="fs-4">
                                    <a href="single-event.html">Discussion On Horror Thriller</a>
                                </h2>
                                <p class="m-0">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Maxime provident, in tempore incidunt laudantium.
                                </p>
                            </div>
                            <div class="events__single-event__meta">
                                <div><i class="icofont-calendar"></i> 3 June, 2021</div>
                                <div><i class="icofont-location-pin"></i> Juventus</div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- End single event -->
            </div>
        </div>
    </section>
    {{-- ========== Events section end ========== --}}

    {{-- ========== Achievement section start ========== --}}
    <section id="achivements" class="section-padding achievement bg-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-10 offset-lg-1">
                    <div class="section-title-center text-center">
                        <span data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">LOGROS</span>
                        <h2 class="display-6" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                            Premios obtenidos por este curso
                        </h2>
                        <div class="section-divider divider-traingle" data-aos="fade-up" data-aos-duration="100"
                            data-aos-delay="100"></div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col m-30px-b" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                    <div class="achievement__item h-100 translateEffect1">
                        <div class="row row-cols-2">
                            <div class="col mt-0">
                                <img class="img-fluid" src="assets/images/awards/1.jpg" alt="" />
                            </div>
                            <div class="col mt-0">
                                <div class="achievement__content">
                                    <div class="achievement__content__icon">
                                        <i class="icofont-award"></i>
                                    </div>
                                    <h3>Nominated</h3>
                                    <p>
                                        International Thriller Writers Award for Best Novel
                                        (These Toxic Things)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col m-30px-b" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                    <div class="achievement__item h-100 translateEffect1">
                        <div class="row row-cols-2">
                            <div class="col mt-0">
                                <img class="img-fluid" src="assets/images/awards/2.jpg" alt="" />
                            </div>
                            <div class="col mt-0">
                                <div class="achievement__content">
                                    <div class="achievement__content__icon">
                                        <i class="icofont-award"></i>
                                    </div>
                                    <h3>Winner</h3>
                                    <p>
                                        International Thriller Writers Award for Best Novel
                                        (These Toxic Things)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col m-30px-b" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                    <div class="achievement__item h-100 translateEffect1">
                        <div class="row row-cols-2">
                            <div class="col mt-0">
                                <img class="img-fluid" src="assets/images/awards/3.jpg" alt="" />
                            </div>
                            <div class="col mt-0">
                                <div class="achievement__content">
                                    <div class="achievement__content__icon">
                                        <i class="icofont-award"></i>
                                    </div>
                                    <h3>Guest of Honor</h3>
                                    <p>
                                        International Thriller Writers Award for Best Novel
                                        (These Toxic Things)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col m-30px-b" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                    <div class="achievement__item h-100 translateEffect1">
                        <div class="row row-cols-2">
                            <div class="col mt-0">
                                <img class="img-fluid" src="assets/images/awards/4.jpg" alt="" />
                            </div>
                            <div class="col mt-0">
                                <div class="achievement__content">
                                    <div class="achievement__content__icon">
                                        <i class="icofont-award"></i>
                                    </div>
                                    <h3>Finalist</h3>
                                    <p>
                                        International Thriller Writers Award for Best Novel
                                        (These Toxic Things)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col m-30px-b" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                    <div class="achievement__item h-100 translateEffect1">
                        <div class="row row-cols-2">
                            <div class="col mt-0">
                                <img class="img-fluid" src="assets/images/awards/5.jpg" alt="" />
                            </div>
                            <div class="col mt-0">
                                <div class="achievement__content">
                                    <div class="achievement__content__icon">
                                        <i class="icofont-award"></i>
                                    </div>
                                    <h3>Winner</h3>
                                    <p>
                                        International Thriller Writers Award for Best Novel
                                        (These Toxic Things)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col m-30px-b" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                    <div class="achievement__item h-100 translateEffect1">
                        <div class="row row-cols-2">
                            <div class="col mt-0">
                                <img class="img-fluid" src="assets/images/awards/1.jpg" alt="" />
                            </div>
                            <div class="col mt-0">
                                <div class="achievement__content">
                                    <div class="achievement__content__icon">
                                        <i class="icofont-award"></i>
                                    </div>
                                    <h3>Nominated</h3>
                                    <p>
                                        International Thriller Writers Award for Best Novel
                                        (These Toxic Things)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ========== Achievement section end ========== --}}

    {{-- ========== Fun facts section start ========== --}}
    <section class="section-padding counters">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-10 offset-lg-1">
                    <div class="section-title-center text-center">
                        <span data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">ESTADÍSTICAS
                            IMPRESIONANTES</span>
                        <h2 class="display-6" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                            Todos los hitos alcanzados
                        </h2>
                        <div class="section-divider divider-traingle" data-aos="fade-up" data-aos-duration="100"
                            data-aos-delay="100"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="counters__stats m-0 p-0 d-flex flex-wrap align-items-center justify-content-center">
                        <li data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                            <div class="counters__stats-box h-100 translateEffect1">
                                <div class="counters__stats-icon">
                                    <i class="icofont-page"></i>
                                </div>
                                <div class="counters__stats-box__number">
                                    <span class="odometer" data-count="35"></span>+
                                </div>
                                <h5>Logros</h5>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                            <div class="counters__stats-box h-100 translateEffect1">
                                <div class="counters__stats-icon">
                                    <i class="icofont-read-book"></i>
                                </div>
                                <div class="counters__stats-box__number">
                                    <span class="odometer" data-count="9999"></span>+
                                </div>
                                <h5>Usuarios activos</h5>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                            <div class="counters__stats-box h-100 translateEffect1">
                                <div class="counters__stats-icon">
                                    <i class="icofont-hour-glass"></i>
                                </div>
                                <div class="counters__stats-box__number">
                                    <span class="odometer" data-count="41"></span>k
                                </div>
                                <h5>Horas de curso</h5>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                            <div class="counters__stats-box h-100 translateEffect1">
                                <div class="counters__stats-icon">
                                    <i class="icofont-cart-alt"></i>
                                </div>
                                <div class="counters__stats-box__number">
                                    <span class="odometer" data-count="992"></span>k
                                </div>
                                <h5>Ventas totales</h5>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                            <div class="counters__stats-box h-100 translateEffect1">
                                <div class="counters__stats-icon">
                                    <i class="icofont-award"></i>
                                </div>
                                <div class="counters__stats-box__number">
                                    <span class="odometer" data-count="13"></span>
                                </div>
                                <h5>Premios</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- ========== Fun facts section end ========== --}}

    {{-- ========== CTA v5 section start ========== --}}
    <section class="section-padding ctav5">
        <div class="container">
            <div class="row">
                <div class="ctav5__content">
                    <h2 class="display-3" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                        El curso tiene 90900+ usuarios
                    </h2>
                    <ul>
                        <li data-aos="fade-up" data-aos-duration="100" data-aos-delay="100"><i class="icofont-star"></i>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="100" data-aos-delay="100"><i class="icofont-star"></i>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="100" data-aos-delay="100"><i class="icofont-star"></i>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="100" data-aos-delay="100"><i class="icofont-star"></i>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="100" data-aos-delay="100"><i class="icofont-star"></i>
                        </li>
                    </ul>
                    <p class="fs-5" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                        Las reseñas <br />
                        de los usuarios se explican por sí mismas – 5/5
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- ========== CTA v5 section end ========== --}}

    {{-- ========== Testimonial section start ========== --}}
    <section id="reviews" class="section-padding testimonial testimonialv2 bg-one">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-6 mx-auto">
                    <div class="section-title-center text-center">
                        <span data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">COMENTARIOS DE NESTROS
                            USUARIOS</span>
                        <h3 class="display-6" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                            Las mejores críticas y comentarios de los famosos de hoy en dia
                        </h3>
                        <div class="section-divider divider-traingle" data-aos="fade-up" data-aos-duration="100"
                            data-aos-delay="100"></div>
                    </div>
                </div>
            </div>
            <div class="row testi-row">
                <div class="col-12">
                    <div class="clients-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide p-5px-lr" data-aos="fade-up" data-aos-duration="100"
                                data-aos-delay="100">
                                <div class="testi-card card">
                                    <div class="card-body text-center p-4">
                                        <img src="assets/images/user-2.png" alt="User Image" />
                                        <h2 class="testimonialv2__card-title">Brightlight books</h2>
                                        <h4 class="testimonialv2__card-subtitle">Ubold Customer</h4>
                                        <p class="pt-2 lh-base">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Saepe, aliquid quo eligendi voluptates veritatis
                                            odit suscipit similique iure architecto autem.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide p-5px-lr" data-aos="fade-up" data-aos-duration="100"
                                data-aos-delay="100">
                                <div class="testi-card card">
                                    <div class="card-body text-center p-4">
                                        <img src="assets/images/user-1.png" alt="User Image" />
                                        <h2 class="testimonialv2__card-title">Brightlight books</h2>
                                        <h4 class="testimonialv2__card-subtitle">Ubold Customer</h4>
                                        <p class="pt-2 lh-base">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Saepe, aliquid quo eligendi voluptates veritatis
                                            odit suscipit similique iure architecto autem.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide p-5px-lr" data-aos="fade-up" data-aos-duration="100"
                                data-aos-delay="100">
                                <div class="testi-card card">
                                    <div class="card-body text-center p-4">
                                        <img src="assets/images/user-2.png" alt="User Image" />
                                        <h2 class="testimonialv2__card-title">Brightlight books</h2>
                                        <h4 class="testimonialv2__card-subtitle">Ubold Customer</h4>
                                        <p class="pt-2 lh-base">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Saepe, aliquid quo eligendi voluptates veritatis
                                            odit suscipit similique iure architecto autem.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide p-5px-lr" data-aos="fade-up" data-aos-duration="100"
                                data-aos-delay="100">
                                <div class="testi-card card">
                                    <div class="card-body text-center p-4">
                                        <img src="assets/images/user-1.png" alt="User Image" />
                                        <h2 class="testimonialv2__card-title">Brightlight books</h2>
                                        <h4 class="testimonialv2__card-subtitle">Ubold Customer</h4>
                                        <p class="pt-2 lh-base">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Saepe, aliquid quo eligendi voluptates veritatis
                                            odit suscipit similique iure architecto autem.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination p-20px-t"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ========== Testimonial section end ========== --}}

    {{-- ========== CTA v4 section start ========== --}}
    <section class="section-padding ctav4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 ctav4__content">
                    <h3 class="display-3" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                        Ver el vídeo
                    </h3>
                    <h3 data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                        Entrevista de nuestro coach Dr. Dario Ortega
                    </h3>
                    <p data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                        ¿Todavía tienes dudas? Consulta la sesiones gratuitas para hacerte una idea.
                    </p>
                    <a href="#preview" class="smooth button button__primary" data-aos="fade-up" data-aos-duration="100"
                        data-aos-delay="100"><span>Sesiones gratis</span></a>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                    <div class="ctav4__video-btn">
                        <a href="{{ asset('video/entrevista.webm') }}" class="glightbox3 video-btn">
                            <i class="icofont-play"></i>
                        </a>
                        <div class="promo-video">
                            <div class="waves-block">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ========== CTA v4 section end ========== --}}

    {{-- ========== Contact section start ========== --}}
    <section id="contact" class="p-80px-tb bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-10 offset-lg-1">
                    <div class="section-title-center text-center">
                        <span data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">CONTACTO</span>
                        <h2 class="display-6" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                            Escríbeme cualquier cosa
                        </h2>
                        <div class="section-divider divider-traingle" data-aos="fade-up" data-aos-duration="100"
                            data-aos-delay="100"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--  contact form area start -->
                <div class="col-lg-8 col-md-6 col-sm-12 m-25px-b" data-aos="fade-right" data-aos-duration="100"
                    data-aos-delay="100">
                    <div class="contact-form-box">
                        <form id="contact-form" action="{{route('email.send')}}" method="post">
                            @csrf
                            <div class="message col">
                                <p class="email-loading alert alert-warning">
                                    <img src="assets/images/loading.gif" alt="" />&nbsp;&nbsp;&nbsp;Enviando...
                                </p>
                                <p class="email-success alert alert-success">
                                    <i class="icofont-check-circled"></i> Su presupuesto enviado correctamente.
                                </p>
                                <p class="email-failed alert alert-danger">
                                    <i class="icofont-close-circled"></i>¡Algo salió mal!
                                </p>
                            </div>
                            <div class="mb13">
                                <input name="name" class="contact-name" id="contact-name" type="text"
                                    placeholder="Tu nombre" required="" />
                            </div>
                            <div class="mb13">
                                <input name="email" class="contact-email" id="contact-email" type="email"
                                    placeholder="Tu correo electronico" required="" />
                            </div>
                            <div class="mb13">
                                <input name="subject" class="contact-subject" id="contact-subject" type="text"
                                    placeholder="Asunto" required="" />
                            </div>
                            <div class="mb30">
                                <textarea name="message" class="contact-message" id="contact-message" placeholder="Su mensaje" required=""></textarea>
                            </div>
                            <button class="button button__primary align-items-center">
                                <span>Enviar ahora</span>
                            </button>
                        </form>
                    </div>
                </div>
                <!--  contact form area end -->
                <!-- contact information start -->
                <div class="col-lg-4 col-md-6 col-sm-12 m-25px-b" data-aos="fade-left" data-aos-duration="100"
                    data-aos-delay="100">
                    <div class="contact__address">
                        <ul class="contact__address__content">
                            <li>
                                <span>DIRECCIÓN:</span>16, Lankaway <br />
                                Florida, USA 99544
                            </li>
                            <li>
                                <span>TELÉFONO:</span><a href="tel:1124447900">112 444 7900</a>
                            </li>
                            <li>
                                <span>CORREO ELECTRÓNICO:</span><a href="#">support@support.com</a>
                            </li>
                        </ul>
                        <h4>Conectar con nuestras redes</h4>
                        <ul class="social-icon mt-3">
                            <li>
                                <a href="#"><i class="icofont-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icofont-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icofont-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icofont-youtube-play"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icofont-whatsapp"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- contact information end -->
            </div>
        </div>
    </section>
    {{-- ========== Contact section end ========== --}}

    {{-- ========== CTA v3 section start ========== --}}
    <section id="ctav3" class="ctav3 bg-one p-80px-t">
        <div class="container bg-one">
            <div class="row">
                <div class="ctav3__content">
                    <h2 class="m-25px-b" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                        ¿Tienes alguna pregunta? <br />
                        No dude en ponerse en contacto conmigo.
                    </h2>
                    <h2 class="display-4 m-25px-b" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                        <a href="tel:+584144731968">+58 (414) 437 19 68</a>
                    </h2>
                    <a href="#contact" class="smooth button button__primary" data-aos="fade-up"
                        data-aos-duration="100" data-aos-delay="100"><span>Enviame un mensaje</span></a>
                    <div class="ctav3__content__icon">
                        <i class="icofont-id-card"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ========== CTA v3 section end ========== --}}
@endsection
