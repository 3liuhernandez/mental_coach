@extends('layouts.master')

@section('body')
    <!-- ========== Hero section start ========== -->
    <section id="hero" class="hero hero__padding overflow-hidden position-relative bg-one">
        <div class="circle x1"></div>
        <div class="circle x2"></div>
        <div class="circle x3"></div>
        <div class="circle x4"></div>
        <div class="circle x5"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 m-0px-b md-m-30px-b">
                    <div class="hero__content position-relative">
                        <div class="badge-text mb-2" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                            Tengamos la mejor visíon
                        </div>
                        {{-- <h1 class="display-4 mb-4" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">EL ATLETA</h1> --}}
                        <h3 class="display-4 mb-4" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                            SUPERANDO LA FRUSTRACION
                        </h3>
                        <p class="mb-5 fs-5" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                            En este curso podrás obtener técnicas para el manejo de la FRUSTRACIÓN
                            antes resultados no deseados, fortaleciendo tu mentalidad ganadora
                        </p>
                        <!-- subscription form start -->
                        <form action="assets/subscribe/subscribe.php" id="subscribe">
                            <div class="input-group" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                                <input type="email" name="email" placeholder="Email" id="subscriber-email" />
                                <button class="button button__primary" id="subscribe-button">
                                    <span>Subscribe</span>
                                </button>
                            </div>
                            <div class="result">
                                <p class="success-msg" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                                    <i class="icofont-check"></i>
                                    Your email has been stored!
                                </p>
                                <p class="error-msg" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                                    <i class="icofont-close"></i>
                                    Sorry! Something went wrong!
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                    <div class="hero__images text-center">
                        <img style="filter: drop-shadow(0px 8px 7px black);" class="img-fluid" src="{{ asset('images/photo_author.png') }}" alt="" />
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

    <!-- ========== Achieve section start ========== -->
    <section id="benefits" class="achieve section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-10 offset-lg-1">
                    <div class="section-title-center text-center">
                        <span data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">¿POR QUÉ W.M.T?</span>
                        <h2 class="display-6" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                            Lo que lograrás con este curso
                        </h2>
                        <div class="section-divider divider-traingle" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300"></div>
                    </div>
                </div>
            </div>
            <div class="row gx-5">
                <div class="col-lg-6 mb-3 mb-lg-0" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
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
                            <div class="col-sm-6 mb-4" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                                <div class="achieve__content__item h-100 translateEffect2">
                                    <div class="achieve__icon m-20px-b">
                                        <i class="icofont-ebook"></i>
                                    </div>
                                    <h3 class="m-15px-b">Experiencia</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet ametus conso tetur ading
                                        elitor fugit piatur iusto provid.
                                    </p>
                                </div>
                            </div>
                            <!-- achieve item end -->
                            <!-- achieve item start -->
                            <div class="col-sm-6 mb-4" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                                <div class="achieve__content__item h-100 translateEffect2">
                                    <div class="achieve__icon m-20px-b">
                                        <i class="icofont-dice-multiple"></i>
                                    </div>
                                    <h3 class="m-15px-b">Motivación</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet ametus conso tetur ading
                                        elitor fugit piatur iusto provid.
                                    </p>
                                </div>
                            </div>
                            <!-- achieve item end -->
                            <!-- achieve item start -->
                            <div class="col-sm-6 mb-4 mb-sm-0" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                                <div class="achieve__content__item h-100 translateEffect2">
                                    <div class="achieve__icon m-20px-b">
                                        <i class="icofont-goal"></i>
                                    </div>
                                    <h3 class="m-15px-b">Metas</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet ametus conso tetur ading
                                        elitor fugit piatur iusto provid.
                                    </p>
                                </div>
                            </div>
                            <!-- achieve item end -->
                            <!-- achieve item start -->
                            <div class="col-sm-6" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                                <div class="achieve__content__item h-100 translateEffect2">
                                    <div class="achieve__icon m-20px-b">
                                        <i class="icofont-brand-target"></i>
                                    </div>
                                    <h3 class="m-15px-b">Visión</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet ametus conso tetur ading
                                        elitor fugit piatur iusto provid.
                                    </p>
                                </div>
                            </div>
                            <!-- achieve item end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== Achieve section end ========== -->

    <!-- ========== Sessions section start ========== -->
    <section id="sessions" class="section-padding bg-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-10 offset-lg-1">
                    <div class="section-title-center text-center">
                        <span data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">SESIONES</span>
                        <h2 class="display-6" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                            Sesiones que hemos cubierto
                        </h2>
                        <div class="section-divider divider-traingle" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300"></div>
                    </div>
                </div>
            </div>
            <div class="row gx-5">
                <div class="col-lg-6 mb-4 mb-lg-0 d-flex justify-content-center align-items-center" data-aos="fade-right" data-aos-duration="300" data-aos-delay="300">
                    <img src="{{ asset('images/hero-2.png') }}" alt="" class="img-fluid d-block" />
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="300" data-aos-delay="300">
                    <div class="accordion accordion-flush faqs-accordion mt-4 mt-lg-0" id="accordionFlushExample">
                        <!-- accordion start -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                    Sesion 01
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
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
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Sesion 02
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
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
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Sesion 03
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
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
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    Sesion 04
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
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
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                    Sesion 05
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
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
                        <!-- accordion end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== Chapters section end ========== -->

    <!-- ========== Chapter preview section start ========== -->
    <section id="preview" class="section-padding chapter-preview">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-10 offset-lg-1">
                    <div class="section-title-center text-center">
                        <span data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                            VISTA PREVIA DE LAS SESIONES ONLINE
                        </span>
                        <h2 class="display-6" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                            Vea unas Sesiones gratis.
                        </h2>
                        <div class="section-divider divider-traingle" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300"></div>
                    </div>
                </div>
            </div>
            <div class="row testi-row">
                <div class="col-12 p-80px-b">
                    <div class="chapter-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide p-5px-lr translateEffect2" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                                <a href="{{ asset('images/chapter-preview/1.jpg') }}" class="glightbox2" data-glightbox=" description: .custom-desc1; descPosition: right;">
                                    <img class="chapter-img img-fluid" src="{{ asset('images/chapter-preview/1.jpg') }}" alt="image" />
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
                            <div class="swiper-slide p-5px-lr" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                                <a href="{{ asset('images/chapter-preview/2.jpg') }}" class="glightbox2" data-glightbox=" description: .custom-desc2; descPosition: right;">
                                    <img class="chapter-img img-fluid" src="{{ asset('images/chapter-preview/2.jpg') }}" alt="image" />
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
                            <div class="swiper-slide p-5px-lr" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                                <a href="{{ asset('images/chapter-preview/3.jpg') }}" class="glightbox2" data-glightbox=" description: .custom-desc3; descPosition: right;">
                                    <img class="chapter-img img-fluid" src="{{ asset('images/chapter-preview/3.jpg') }}" alt="image" />
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
                            <div class="swiper-slide p-5px-lr" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                                <a href="{{ asset('images/chapter-preview/4.jpg') }}" class="glightbox2" data-glightbox=" description: .custom-desc4; descPosition: right;">
                                    <img class="chapter-img img-fluid" src="{{ asset('images/chapter-preview/4.jpg') }}" alt="image" />
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
                            <div class="swiper-slide p-5px-lr" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                                <a href="{{ asset('images/chapter-preview/5.jpg') }}" class="glightbox2" data-glightbox="description: .custom-desc5; descPosition: right;">
                                    <img class="chapter-img img-fluid" src="{{ asset('images/chapter-preview/5.jpg') }}" alt="image" />
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

    <!-- ========== Pricing section start ========== -->
    <section id="pricing" class="section-padding pricing bg-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-10 offset-lg-1">
                    <div class="section-title-center text-center">
                        <span data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">PRECIOS</span>
                        <h2 class="display-6" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                            Precios basados en su versión
                        </h2>
                        <div class="section-divider divider-traingle" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300"></div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <!-- pricing table start -->
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                    <div class="pricing__item translateEffect1">
                        <h3 class="pricing__title">E-Book</h3>
                        <h3 class="pricing__price">$05</h3>
                        <ul class="pricing__list">
                            <li>Complete Book</li>
                            <li>PDF and EPUB</li>
                            <li>Hardcover Book</li>
                            <li>Access to Downloads</li>
                        </ul>
                        <a href="#" class="btn__secondary"><span>BUY NOW</span></a>
                    </div>
                </div>
                <!-- pricing table end -->
                <!-- pricing table start -->
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                    <div class="pricing__item translateEffect1 active">
                        <h3 class="pricing__title">Bundle</h3>
                        <h3 class="pricing__price">$15</h3>
                        <ul class="pricing__list">
                            <li>Complete Book</li>
                            <li>PDF and EPUB</li>
                            <li>Hardcover Book</li>
                            <li>Access to Downloads</li>
                        </ul>
                        <a href="#" class="button button__primary"><span>BUY NOW</span></a>
                    </div>
                </div>
                <!-- pricing table end -->
                <!-- pricing table start -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                    <div class="pricing__item translateEffect1">
                        <h3 class="pricing__title">Hardcover</h3>
                        <h3 class="pricing__price">$10</h3>
                        <ul class="pricing__list">
                            <li>Complete Book</li>
                            <li>PDF and EPUB</li>
                            <li>Hardcover Book</li>
                            <li>Access to Downloads</li>
                        </ul>
                        <a href="#" class="btn__secondary"><span>BUY NOW</span></a>
                    </div>
                </div>
                <!-- pricing table end -->
            </div>
        </div>
    </section>
    <!-- ========== Pricing section end ========== -->

    <!-- ========== Author section start ========== -->
    <section id="author" class="section-padding authorv2">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-10 offset-lg-1">
                    <div class="section-title-center text-center">
                        <span data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">SOBRE NUESTRO COACH</span>
                        <h2 class="display-6" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                            Aprende sobre el coach del curso
                        </h2>
                        <div class="section-divider divider-traingle" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300"></div>
                    </div>
                </div>
            </div>
            <div class="row gx-5">
                <!-- author image area start -->
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right" data-aos-duration="300" data-aos-delay="300">
                    <div class="authorv2__image">
                        <img class="img-fluid" src="assets/images/achive.png" alt="Author Image" />
                        <a href="https://youtu.be/qg0_FinB6EE" class="glightbox3 video-btn">
                            <i class="icofont-play"></i></a>
                        <div class="promo-video">
                            <div class="waves-block">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- author image area end -->
                <!-- author content area start -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="300" data-aos-delay="300">
                    <p>
                        Based on wikipedia, Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Optio aspernatur quam in nostrum aliquam
                        eligendi vel, modi cupiditate numquam officiis dicta minima
                        placeat nulla impedit voluptatum adipisci beatae. Rerum,
                        impedit.
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
                                    <p class="mb-0">info@wmt.com</p>
                                </div>
                                <div class="col-6 mb-3">
                                    <h4>Idiomas:</h4>
                                    <p class="mb-0">Espanish, English</p>
                                </div>
                                <div class="col-6">
                                    <h4>Dirección:</h4>
                                    <p class="mb-0">Etowah, TN 37331 United States</p>
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
                <!-- author content area end -->
            </div>
        </div>
    </section>
    <!-- ========== Author section end ========== -->

    <!-- ========== Achievement section start ========== -->
    <section id="achivements" class="section-padding achievement bg-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-10 offset-lg-1">
                    <div class="section-title-center text-center">
                        <span data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">LOGROS</span>
                        <h2 class="display-6" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                            Premios obtenidos por este curso
                        </h2>
                        <div class="section-divider divider-traingle" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300"></div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col m-30px-b" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
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
                <div class="col m-30px-b" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
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
                <div class="col m-30px-b" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
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
                <div class="col m-30px-b" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
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
                <div class="col m-30px-b" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
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
                <div class="col m-30px-b" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
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
    <!-- ========== Achievement section end ========== -->

    <!-- ========== Fun facts section start ========== -->
    <section class="section-padding counters">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-10 offset-lg-1">
                    <div class="section-title-center text-center">
                        <span data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">ESTADÍSTICAS IMPRESIONANTES</span>
                        <h2 class="display-6" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                            Todos los hitos alcanzados
                        </h2>
                        <div class="section-divider divider-traingle" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="counters__stats m-0 p-0 d-flex flex-wrap align-items-center justify-content-center">
                        <li data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
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
                        <li data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                            <div class="counters__stats-box h-100 translateEffect1">
                                <div class="counters__stats-icon">
                                    <i class="icofont-read-book"></i>
                                </div>
                                <div class="counters__stats-box__number">
                                    <span class="odometer" data-count="9999"></span>+
                                </div>
                                <h5>Lectores activos</h5>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                            <div class="counters__stats-box h-100 translateEffect1">
                                <div class="counters__stats-icon">
                                    <i class="icofont-hour-glass"></i>
                                </div>
                                <div class="counters__stats-box__number">
                                    <span class="odometer" data-count="41"></span>k
                                </div>
                                <h5>Writing Hours</h5>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                            <div class="counters__stats-box h-100 translateEffect1">
                                <div class="counters__stats-icon">
                                    <i class="icofont-cart-alt"></i>
                                </div>
                                <div class="counters__stats-box__number">
                                    <span class="odometer" data-count="992"></span>k
                                </div>
                                <h5>Total Sells</h5>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
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
    <!-- ========== Fun facts section end ========== -->

    <!-- ========== CTA v5 section start ========== -->
    <section class="section-padding ctav5">
        <div class="container">
            <div class="row">
                <div class="ctav5__content">
                    <h2 class="display-3" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                        El curso tiene 90900+ usuarios
                    </h2>
                    <ul>
                        <li data-aos="fade-up" data-aos-duration="300" data-aos-delay="300"><i class="icofont-star"></i></li>
                        <li data-aos="fade-up" data-aos-duration="300" data-aos-delay="300"><i class="icofont-star"></i></li>
                        <li data-aos="fade-up" data-aos-duration="300" data-aos-delay="300"><i class="icofont-star"></i></li>
                        <li data-aos="fade-up" data-aos-duration="300" data-aos-delay="300"><i class="icofont-star"></i></li>
                        <li data-aos="fade-up" data-aos-duration="300" data-aos-delay="300"><i class="icofont-star"></i></li>
                    </ul>
                    <p class="fs-5" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                        Las reseñas <br />
                        de los usuarios se explican por sí mismas – 5/5
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== CTA v5 section end ========== -->

    <!-- ========== Testimonial section start ========== -->
    <section id="reviews" class="section-padding testimonial bg-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-10 offset-lg-1">
                    <div class="section-title-center text-center">
                        <span data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">TESTIMONIOS</span>
                        <h2 class="display-6" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                            Lo que nuestros usuarios opinan
                        </h2>
                        <div class="section-divider divider-traingle" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300"></div>
                    </div>
                </div>
            </div>
            <div class="row testi-row">
                <div class="col-12">
                    <div class="clients-slider">
                        <div class="swiper-wrapper">
                            <!-- Testimonial item start -->
                            <div class="swiper-slide p-5px-lr" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                                <div class="testi-card card h-100 translateEffect1">
                                    <div class="card-body p-4">
                                        <div class="testi-card__quotation">
                                            <i class="icofont-quote-right"></i>
                                        </div>
                                        <p class="my-4">
                                            " Lorem ipsum dolor sit, amet consectetur adipisicing
                                            elit. Dolor neque molestiae distinctio, voluptatum
                                            suscipit in, reiciendis, dolores enim optio corporis
                                            maxime impedit rerum iure illum quae iusto obcaecati
                                            quod laboriosam? "
                                        </p>
                                        <div class="testi-card__user-info pt-4">
                                            <div class="testimonial__user-info__image">
                                                <img src="assets/images/user-2.png" alt="User Image" />
                                            </div>
                                            <div class="testimonial__user-info__content">
                                                <h4 class="mb-0">Brightlight books</h4>
                                                <p class="mb-0">Ubold Customer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial item end -->
                            <!-- Testimonial item start -->
                            <div class="swiper-slide p-5px-lr" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                                <div class="testi-card card h-100 translateEffect1">
                                    <div class="card-body p-4">
                                        <div class="testi-card__quotation">
                                            <i class="icofont-quote-right"></i>
                                        </div>
                                        <p class="my-4">
                                            " Lorem ipsum dolor sit, amet consectetur adipisicing
                                            elit. Dolor neque molestiae distinctio, voluptatum
                                            suscipit in, reiciendis, dolores enim optio corporis
                                            maxime impedit rerum iure illum quae iusto obcaecati
                                            quod laboriosam? "
                                        </p>
                                        <div class="testi-card__user-info pt-4">
                                            <div class="testimonial__user-info__image">
                                                <img src="assets/images/user-1.png" alt="User Image" />
                                            </div>
                                            <div class="testimonial__user-info__content">
                                                <h4 class="mb-0">Brightlight books</h4>
                                                <p class="mb-0">Ubold Customer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial item end -->
                            <!-- Testimonial item start -->
                            <div class="swiper-slide p-5px-lr" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                                <div class="testi-card card h-100 translateEffect1">
                                    <div class="card-body p-4">
                                        <div class="testi-card__quotation">
                                            <i class="icofont-quote-right"></i>
                                        </div>
                                        <p class="my-4">
                                            " Lorem ipsum dolor sit, amet consectetur adipisicing
                                            elit. Dolor neque molestiae distinctio, voluptatum
                                            suscipit in, reiciendis, dolores enim optio corporis
                                            maxime impedit rerum iure illum quae iusto obcaecati
                                            quod laboriosam? "
                                        </p>
                                        <div class="testi-card__user-info pt-4">
                                            <div class="testimonial__user-info__image">
                                                <img src="assets/images/user-2.png" alt="User Image" />
                                            </div>
                                            <div class="testimonial__user-info__content">
                                                <h4 class="mb-0">Brightlight books</h4>
                                                <p class="mb-0">Ubold Customer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial item end -->
                            <!-- Testimonial item start -->
                            <div class="swiper-slide p-5px-lr" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                                <div class="testi-card card h-100 translateEffect1">
                                    <div class="card-body p-4">
                                        <div class="testi-card__quotation">
                                            <i class="icofont-quote-right"></i>
                                        </div>
                                        <p class="my-4">
                                            " Lorem ipsum dolor sit, amet consectetur adipisicing
                                            elit. Dolor neque molestiae distinctio, voluptatum
                                            suscipit in, reiciendis, dolores enim optio corporis
                                            maxime impedit rerum iure illum quae iusto obcaecati
                                            quod laboriosam? "
                                        </p>
                                        <div class="testi-card__user-info pt-4">
                                            <div class="testimonial__user-info__image">
                                                <img src="assets/images/user-1.png" alt="User Image" />
                                            </div>
                                            <div class="testimonial__user-info__content">
                                                <h4 class="mb-0">Brightlight books</h4>
                                                <p class="mb-0">Ubold Customer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial item end -->
                        </div>
                        <div class="swiper-pagination m-30px-t"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== Testimonial section end ========== -->

    <!-- ========== CTA v4 section start ========== -->
    <section class="section-padding ctav4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 ctav4__content">
                    <h3 class="display-3" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                        Ver el vídeo
                    </h3>
                    <h3 data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                        Para ver cómo les encanta a nuestros lectores.
                    </h3>
                    <p data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                        ¿Todavía tienes dudas? Consulta la sesiones gratuitas para hacerte una idea.
                    </p>
                    <a href="#preview" class="smooth button button__primary" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300"><span>Sesiones gratis</span></a>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                    <div class="ctav4__video-btn">
                        <a href="https://youtu.be/dkxiTpwm0hs" class="glightbox3 video-btn">
                            <i class="icofont-play"></i></a>
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
    <!-- ========== CTA v4 section end ========== -->

    <!-- ========== Contact section start ========== -->
    <section id="contact" class="p-80px-tb bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-10 offset-lg-1">
                    <div class="section-title-center text-center">
                        <span data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">CONTACTO</span>
                        <h2 class="display-6" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                            Escríbeme cualquier cosa
                        </h2>
                        <div class="section-divider divider-traingle" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--  contact form area start -->
                <div class="col-lg-8 col-md-6 col-sm-12 m-25px-b" data-aos="fade-right" data-aos-duration="300" data-aos-delay="300">
                    <div class="contact-form-box">
                        <form id="contact-form">
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
                                <input name="name" class="contact-name" id="contact-name" type="text" placeholder="Tu nombre" required="" />
                            </div>
                            <div class="mb13">
                                <input name="email" class="contact-email" id="contact-email" type="email" placeholder="Tu correo electronico" required="" />
                            </div>
                            <div class="mb13">
                                <input name="subject" class="contact-subject" id="contact-subject" type="text" placeholder="Asunto" required="" />
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
                <div class="col-lg-4 col-md-6 col-sm-12 m-25px-b" data-aos="fade-left" data-aos-duration="300" data-aos-delay="300">
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
    <!-- ========== Contact section end ========== -->

    <!-- ========== CTA v3 section start ========== -->
    <section id="ctav3" class="ctav3 bg-one p-80px-t">
        <div class="container bg-one">
            <div class="row">
                <div class="ctav3__content">
                    <h2 class="m-25px-b" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                        ¿Tienes alguna pregunta? <br />
                        No dude en ponerse en contacto conmigo.
                    </h2>
                    <h2 class="display-4 m-25px-b" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                        <a href="tel:+584144731968">+58 (414) 437 19 68</a>
                    </h2>
                    <a href="#contact" class="smooth button button__primary" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300"><span>Enviame un mensaje</span></a>
                    <div class="ctav3__content__icon">
                        <i class="icofont-read-book"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== CTA v3 section end ========== -->
@endsection
