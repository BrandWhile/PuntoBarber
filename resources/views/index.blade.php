@extends('layout')
<!--Se llama al layout-->

@section('content')

<div id="site-wrapper" class="site-wrapper home-automotive-service">

    <header id="header" class="main-header header-float header-sticky header-sticky-smart header-light header-style-03 font-normal light-color">
        <div class="header-wrapper sticky-area">
            <div class="container">
                <nav class="navbar navbar-expand-xl">
                    <div class="header-mobile d-flex d-xl-none flex-fill justify-content-between align-items-center">
                        <div class="navbar-toggler toggle-icon" data-toggle="collapse" data-target="#navbar-main-menu">
                            <span></span>
                        </div>
                        <a class="navbar-brand navbar-brand-mobile" href="home-automotive-services.html">
                            <img src="pagina/img/L-barber-large.png" alt="Punto Barber">
                        </a>
                        <a class="mobile-button-search" href="#search-popup" data-gtf-mfp="true" data-mfp-options='{"type":"inline","mainClass":"mfp-move-from-top mfp-align-top search-popup-bg","closeOnBgClick":false,"showCloseBtn":false}'><i class="far fa-search"></i></a>
                    </div>
                    <!--Logo-->
                    <div class="collapse navbar-collapse d-xl-flex align-items-center" id="navbar-main-menu">
                        <a class="navbar-brand d-none d-xl-block" href="home-automotive-services.html">
                            <img src="pagina/img/L-barber-large.png" alt="Punto Barber">
                        </a>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Inicio</a>


                            <li class="nav-item">
                                <a class="nav-link" href="#">Servicios
                                </a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="explore-half-map-list.html">¿Quiénes somos?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href=" "> + Agregar barberia</a>
                            </li>

                        </ul>
                        <div class="header-customize justify-content-end align-items-center d-none d-xl-flex ml-auto">
                            <div class="header-customize-item">
                                <a href="file:///C:/Users/jenny/Desktop/Proyecto_P_B/PuntoBarber/demo/Barber/login3/index.html" class="link">
                                    <svg class="icon icon-user-circle-o">

                                    </svg>
                                    Iniciar sesión</a>
                            </div>




    </header>

    <div class="content-wrap">
        <section class="banner">
            <div class="container">
                <div class="banner-content">
                    <div class="heading" data-animate="fadeInLeft">
                        <h1 class="mb-0 text-white">
                            <span class="d-block lh-1">Encuentra profesionales cerca de ti para cambiar tu look</span>

                        </h1>
                    </div>
                    <div class="form-search" data-animate="fadeInRight">
                        <form>
                            <div class="row align-items-end">
                                <div class="col-xl-6 mb-4 mb-xl-0">
                                    <label for="key-word" class="text-white font-weight-bold text-uppercase">Servicios</label>
                                    <div class="input-group dropdown bg-white rounded">
                                        <input type="text" autocomplete="off" id="key-word" class="form-control border-0 form-control-lg" placeholder="Ej: Barba, Corte" data-toggle="dropdown" aria-haspopup="true">
                                        <a href="#" class="input-group-append text-decoration-none">
                                            <i class="fal fa-chevron-down"></i>
                                        </a>
                                        <ul class="dropdown-menu form-search-ajax" aria-labelledby="key-word">
                                            <li class="dropdown-item item">
                                                <a href="#" class="link-hover-dark-white">
                                                    <svg class="icon icon-pizza">

                                                    </svg>
                                                    <span class="font-size-md">Barba</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item item">
                                                <a href="#" class="link-hover-dark-white">
                                                    <svg class="icon icon-bed">

                                                    </svg>
                                                    <span class="font-size-md">Base</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item item">
                                                <a href="#" class="link-hover-dark-white">
                                                    <svg class="icon icon-pharmaceutical">

                                                    </svg>
                                                    <span class="font-size-md">Cejas</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item item">
                                                <a href="#" class="link-hover-dark-white">
                                                    <svg class="icon icon-cog">

                                                    </svg>
                                                    <span class="font-size-md">Manicure</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item item">
                                                <a href="#" class="link-hover-dark-white">
                                                    <svg class="icon icon-car">

                                                    </svg>
                                                    <span class="font-size-md">Pedicure</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                    </div>
                    <div class=" col-xl-2">
                        <button type="submit" class="btn btn-dark font-weight-bold font-size-h5 btn-block btn-icon-left btn-lg lh-16">
                            Buscar
                        </button>
                    </div>

                </div>

        </section>


        <section id="section-02" class="py-12">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-4 mb-4 mb-lg-0 px-0 px-lg-4" data-animate="fadeInUp">
                        <div class="media icon-box-style-02">
                            <div class="d-flex flex-column align-items-center mr-6 color-primary">
                                <svg class="icon icon-checkmark-circle">
                                    <use xlink:href="#icon-checkmark-circle"></use>
                                </svg>
                                <span class="number h1 font-weight-bold">1</span>
                            </div>
                            <div class="media-body lh-14">
                                <h4 class="mb-3 font-weight-bold">
                                    Encuentre barberías cercanas a su ubicación.
                                </h4>
                                <p class="font-size-md text-gray mb-0 text-muted">
                                    Encuentre el lugar ideal con los servicios desaeados cerca a su ubicación.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0 px-0 px-lg-4" data-animate="fadeInUp">
                        <div class="media icon-box-style-02">
                            <div class="d-flex flex-column align-items-center mr-6 color-primary">
                                <svg class="icon icon-checkmark-circle">
                                    <use xlink:href="#icon-checkmark-circle"></use>
                                </svg>
                                <span class="number h1 font-weight-bold">2</span>
                            </div>
                            <div class="media-body lh-14">
                                <h4 class="mb-3 font-weight-bold">
                                    Encuentre reseñas reales de clientes
                                </h4>
                                <p class="font-size-md text-gray mb-0 text-muted">
                                    Encuentre reseñas reales o escriba una reseña de una barbería para que otros conozcan su experiencia.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0 px-0 px-lg-4" data-animate="fadeInUp">
                        <div class="media icon-box-style-02">
                            <div class="d-flex flex-column align-items-center mr-6 color-primary">
                                <svg class="icon icon-checkmark-circle">
                                    <use xlink:href="#icon-checkmark-circle"></use>
                                </svg>
                                <span class="number h1 font-weight-bold">3</span>
                            </div>
                            <div class="media-body lh-14">
                                <h4 class="mb-3 font-weight-bold">
                                    Elija el mejor servicio
                                </h4>
                                <p class="font-size-md text-gray mb-0 text-muted">
                                    Encuentre excelenetes barberias con buenos servicios al mejor precio.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-03" class="pt-12 pb-13 bg-pattern-01 ">
            <div class="container">
                <div class="mb-9 text-center main-header">
                    <h2 class="mb-0 font-weight-normal letter-spacing-50">Los mejores lugares para lo que necesita </h2>
                </div>
                <div class="listing-image-card">
                    <div class="mb-7">
                        <h3 class="font-weight-normal mb-0 letter-spacing-50">Barber Club</h3>
                    </div>
                    <div class="slick-slider arrow-top" data-slick-options='{"slidesToShow": 4, "autoplay":false,"dots":false,"responsive":[{"breakpoint": 992,"settings": {"slidesToShow": 3}},{"breakpoint": 768,"settings": {"slidesToShow": 2}},{"breakpoint": 400,"settings": {"slidesToShow": 1,"arrows":false}}]}'>
                        <div class="box">
                            <div class="card border-0 image-box-style-card box-shadow-hover">
                                <a href="listing-details-image.html">
                                    <img src="https://image.freepik.com/free-photo/stylish-man-sitting-barbershop_1157-20488.jpg" alt="Furniture assembly">
                                </a>
                                <div class="card-body lh-1">
                                    <a href="listing-details-image.html" class="card-text text-dark font-size-md lh-11">
                                        Corte
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="card border-0 image-box-style-card box-shadow-hover">
                                <a href="listing-details-image.html">
                                    <img src="https://img.freepik.com/free-photo/stylish-man-sitting-barbershop_1157-21506.jpg?size=626&ext=jpg&ga=GA1.2.1467202214.1596135906" alt="Carpet installation">
                                </a>

                                <div class="card-body lh-1">
                                    <a href="explore-half-map-list.html" class="card-text text-dark font-size-md lh-11">
                                        Tratamiento capilar
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="card border-0 image-box-style-card box-shadow-hover">
                                <a href="listing-details-image.html">
                                    <img src="https://img.freepik.com/free-photo/man-cuts-his-beard-barbershop_1157-16045.jpg?size=626&ext=jpg&ga=GA1.2.1467202214.1596135906" alt="Local removal">
                                </a>
                                <div class="card-body lh-1">
                                    <a href="explore-half-map-list.html" class="card-text text-dark font-size-md lh-11">
                                        Barba
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="card border-0 image-box-style-card box-shadow-hover">
                                <a href="listing-details-image.html">
                                    <img src="https://img.freepik.com/free-photo/stylish-man-sitting-barbershop_1157-24980.jpg?size=626&ext=jpg&ga=GA1.2.1467202214.1596135906" alt="Television repair">
                                </a>
                                <div class="card-body lh-1">
                                    <a href="explore-half-map-list.html" class="card-text text-dark font-size-md lh-11">
                                        Tinte
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="card border-0 image-box-style-card box-shadow-hover">
                                <a href="listing-details-image.html">
                                    <img src="https://img.freepik.com/free-photo/man-cuts-his-beard-barbershop_1157-16204.jpg?size=626&ext=jpg&ga=GA1.2.1467202214.1596135906" alt="Furniture assembly">
                                </a>
                                <div class="card-body lh-1">
                                    <a href="listing-details-image.html" class="card-text text-dark font-size-md lh-11">
                                        Tratamiento barba
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="card border-0 image-box-style-card box-shadow-hover">
                                <a href="listing-details-image.html">
                                    <img src="https://img.freepik.com/free-photo/man-cuts-his-beard-barbershop_1157-16062.jpg?size=626&ext=jpg&ga=GA1.2.1467202214.1596135906" alt="Carpet installation">
                                </a>
                                <div class="card-body lh-1">
                                    <a href="explore-half-map-list.html" class="card-text text-dark font-size-md lh-11">
                                        6
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="listing-image-card">
                    <div class="mb-7">
                        <h3 class="font-weight-normal mb-0 letter-spacing-50">Boca del lobo </h3>
                    </div>
                    <div class="slick-slider arrow-top" data-slick-options='{"slidesToShow": 4, "autoplay":false,"dots":false,"responsive":[{"breakpoint": 992,"settings": {"slidesToShow": 3}},{"breakpoint": 768,"settings": {"slidesToShow": 2}},{"breakpoint": 400,"settings": {"slidesToShow": 1,"arrows":false}}]}'>
                        <div class="box">
                            <div class="card border-0 image-box-style-card box-shadow-hover">
                                <a href="listing-details-image.html">
                                    <img src="https://img.freepik.com/free-photo/woman-using-spray-man-barbershop_23-2147737065.jpg?size=626&ext=jpg&ga=GA1.2.1467202214.1596135906" alt="Wedding & Event Makeup">
                                </a>
                                <div class="card-body lh-1">
                                    <a href="explore-half-map-list.html" class="card-text text-dark font-size-md lh-11">
                                        Tratamiento capilar
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="box">
                            <div class="card image-box-style-card border-0 box-shadow-hover">
                                <a href="listing-details-image.html">
                                    <img src="https://img.freepik.com/free-photo/man-barbershop_1303-5414.jpg?size=626&ext=jpg&ga=GA1.2.1467202214.1596135906" alt="Wedding DJ">
                                </a>
                                <div class="card-body lh-1">
                                    <a href="explore-half-map-list.html" class="card-text text-dark font-size-md lh-11">
                                        Lavado
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="card image-box-style-card border-0 box-shadow-hover">
                                <a href="listing-details-image.html">
                                    <img src="https://img.freepik.com/free-photo/woman-wiping-face-client-barbershop_23-2147736959.jpg?size=626&ext=jpg&ga=GA1.2.1467202214.1596135906" alt="Wedding Catering (Buffet)">
                                </a>
                                <div class="card-body lh-1">
                                    <a href="explore-half-map-list.html" class="card-text text-dark font-size-md lh-11">
                                        Tinte de barba
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="card image-box-style-card border-0 box-shadow-hover">
                                <a href="listing-details-image.html">
                                    <img src="https://image.freepik.com/free-photo/customer-hairdresser-barbershop_23-2147737050.jpg" alt="Wedding & Event Makeup">
                                </a>
                                <div class="card-body lh-1">
                                    <a href="explore-half-map-list.html" class="card-text text-dark font-size-md lh-11">
                                        Tratamieto barba
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="card image-box-style-card border-0 box-shadow-hover">
                                <a href="listing-details-image.html">
                                    <img src="https://img.freepik.com/free-photo/pretty-woman-preparing-client-barbershop_23-2147736967.jpg?size=626&ext=jpg&ga=GA1.2.1467202214.1596135906" alt="Event Videography">
                                </a>
                                <div class="card-body lh-1">
                                    <a href="explore-half-map-list.html" class="card-text text-dark font-size-md lh-11">

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="listing-image-card">
                    <div class="mb-7">
                        <h3 class="font-weight-normal mb-0 letter-spacing-50">Mostacho</h3>
                    </div>
                    <div class="slick-slider arrow-top" data-slick-options='{"slidesToShow": 4, "autoplay":true,"dots":false,"responsive":[{"breakpoint": 992,"settings": {"slidesToShow": 3}},{"breakpoint": 768,"settings": {"slidesToShow": 2}},{"breakpoint": 400,"settings": {"slidesToShow": 1,"arrows":false}}]}'>
                        <div class="box">
                            <div class="card image-box-style-card border-0 box-shadow-hover">
                                <a href="listing-details-image.html">
                                    <img src="https://img.freepik.com/free-photo/guy-barbershop_1157-7706.jpg?size=626&ext=jpg&ga=GA1.2.1467202214.1596135906" alt="Afforable Plumbing Services">
                                </a>
                                <div class="card-body lh-1">
                                    <a href="explore-half-map-list.html" class="card-text text-dark font-size-md lh-11">
                                        Tratamiento facial
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="card image-box-style-card border-0 box-shadow-hover">
                                <a href="listing-details-image.html">
                                    <img src="https://img.freepik.com/free-photo/guy-barbershop_1157-7709.jpg?size=626&ext=jpg&ga=GA1.2.1467202214.1596135906" alt="image box">
                                </a>
                                <div class="card-body lh-1">
                                    <a href="explore-half-map-list.html" class="card-text text-dark font-size-md lh-11">
                                        Corte barba
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="card image-box-style-card border-0 box-shadow-hover">
                                <a href="listing-details-image.html">
                                    <img src="https://img.freepik.com/free-photo/guy-barbershop_1157-7714.jpg?size=626&ext=jpg&ga=GA1.2.1467202214.1596135906" alt="Image box">
                                </a>
                                <div class="card-body lh-1">
                                    <a href="explore-half-map-list.html" class="card-text text-dark font-size-md lh-11">
                                        Tinte de barba
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="card image-box-style-card border-0 box-shadow-hover">
                                <a href="listing-details-image.html">
                                    <img src="https://image.freepik.com/free-photo/guy-barbershop_1157-7715.jpg" alt="Image box">
                                </a>
                                <div class="card-body lh-1">
                                    <a href="explore-half-map-list.html" class="card-text text-dark font-size-md lh-11">
                                        Corte
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="box">
                            <div class="card image-box-style-card border-0 box-shadow-hover">
                                <a href="listing-details-image.html">
                                    <img src="https://img.freepik.com/free-photo/guy-barbershop_1157-7721.jpg?size=626&ext=jpg&ga=GA1.2.1467202214.1596135906" alt="Image box">
                                </a>
                                <div class="card-body lh-1">
                                    <a href="explore-half-map-list.html" class="card-text text-dark font-size-md lh-11">
                                        Spa
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>


    <section id="section-04" class="pt-12 pb-10 text-center categories">
        <div class="container">
            <div class="heading text-center mb-9">
                <h3 class="mb-6 font-weight-bold">
                    ¿Qué tipos de servicio busca?
                </h3>

            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4" data-animate="pulse">
                    <a class="btn btn-hero text-capitalize rounded-0" title="Category" href="explore-half-map-grid.html">
                        Manicure y Pedicure</a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4" data-animate="pulse">
                    <a class="btn btn-hero text-capitalize rounded-0" title="Category" href="explore-half-map-grid.html">
                        Corte barba</a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4" data-animate="pulse">
                    <a class="btn btn-hero text-capitalize rounded-0" title="Category" href="explore-half-map-grid.html">
                        Corte cejas </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4" data-animate="pulse">
                    <a class="btn btn-hero text-capitalize rounded-0" title="Category" href="explore-half-map-grid.html">
                        Corte cabello </a>
                </div>

            </div>
        </div>
    </section>


    <section id="section-05" class="pt-12 pb-13 bg-pattern-01 ">
        <div class="container">
            <div class="text-center mb-8">
                <div class="text-center mb-9">
                    <h3 class="mb-0 font-weight-normal letter-spacing-50">
                        Los servicios más populares
                    </h3>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8 mb-6">
                        <div class="image-box card rounded-0 border-0 hover-scale" data-animate="zoomIn">
                            <a href="explore-half-map-grid.html" class="image position-relative card-img">
                                <img src="https://image.freepik.com/free-photo/stylish-man-sitting-barbershop_1157-20482.jpg" alt="Image box">
                            </a>
                            <div class="text-white content-box px-4 pb-3 card-img-overlay">
                                <p class="mb-1 text-capitalize">
                                    Corte</p>
                                <a href="explore-half-map-grid.html" class="font-size-h4 font-weight-normal text-white">

                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-6">
                        <div class="image-box card mb-6 rounded-0 border-0 hover-scale" data-animate="zoomIn">
                            <a href="explore-half-map-grid.html" class="image position-relative card-img">
                                <img src="https://depilacion.me/wp-content/uploads/2019/05/Depilaci%C3%B3n-cejas-principal.jpg" alt="Image box">
                            </a>
                            <div class="text-white content-box px-4 pb-3 card-img-overlay">
                                <p class="mb-1 text-capitalize">
                                    Depilación
                                </p>
                                <a href="explore-half-map-grid.html" class="font-weight-normal  text-white font-size-lg">

                                </a>
                            </div>
                        </div>
                        <div class="image-box card rounded-0 border-0 hover-scale" data-animate="zoomIn">
                            <a href="explore-half-map-grid.html" class="image position-relative card-img">
                                <img src="https://image.freepik.com/free-photo/close-up-beautician-painting-woman-s-nails-with-brush-nail-salon_1139-1703.jpg" alt="Image box">
                            </a>
                            <div class="text-white content-box px-4 pb-3 card-img-overlay">
                                <p class="mb-1 text-capitalize">
                                    Manicure</p>
                                <a href="explore-half-map-grid.html" class="font-weight-normal  text-white font-size-lg">

                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-6">
                        <div class="image-box card rounded-0 border-0 hover-scale" data-animate="zoomIn">
                            <a href="explore-half-map-grid.html" class="image position-relative card-img">
                                <img src="https://image.freepik.com/free-photo/young-man-doing-pedicure-salon-beauty-concept_1301-3370.jpg" alt="Image box">
                            </a>
                            <div class="text-white content-box px-4 pb-3 card-img-overlay">
                                <p class="mb-1 text-capitalize">
                                    Pedicure</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 mb-6">
                        <div class="image-box card rounded-0 border-0 hover-scale" data-animate="zoomIn">
                            <a href="explore-half-map-grid.html" class="image position-relative card-img">
                                <img src="https://image.freepik.com/free-photo/stylish-man-sitting-barbershop_1157-24980.jpg" alt="Image box">
                            </a>
                            <div class="text-white content-box px-4 pb-3 card-img-overlay">
                                <p class="mb-1 text-capitalize">
                                    Barba</p>
                                <a href="explore-half-map-grid.html" class="font-size-h4 font-weight-normal text-white">

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <section class="section-01 py-12" id="section-06">
        <div class="container">
            <h2 class="text-center mb-11">
                ¿Qué dicen los clientes sobre Punto Barber?
            </h2>
            <div class="row">
                <div class="col col-md-12">
                    <div class="slick-slider arrow-center equal-height testimonials-slider" data-slick-options='{"slidesToShow": 3, "autoplay":false,"dots":false,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow": 2}},{"breakpoint": 768,"settings": {"slidesToShow": 1,"arrows":false}}]}'>
                        <div class="box">
                            <div class="card testimonial-item h-100 border-0">
                                <div class="card-title text-uppercase font-weight-medium text-gray mb-3">
                                    Marco dice:
                                </div>
                                <div class="card-body h5 font-weight-normal px-0 mb-0 lh-15 letter-spacing-35">

                                    Estoy muy satisfecho, pude encontrar un buen precio y además ver que tan lejos queda e mi casa. Excelente aplicación.

                                </div>
                                <div class="card-footer bg-transparent px-0 pt-6 pb-0">
                                    <div class="media">

                                        <div class="media-body lh-14">

                                            <div class="author-rate align-items-end mt-1">


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="card testimonial-item h-100 border-0">
                                <div class="card-title text-uppercase font-weight-medium text-gray mb-3">
                                    Valeria dice:
                                </div>
                                <div class="card-body h5 font-weight-normal px-0 mb-0 lh-15 letter-spacing-35">
                                    Estoy satisfecha, ésta página me ayudó a encontrar un buen establecimiento y a un excelente precio.
                                </div>
                                <div class="card-footer bg-transparent px-0 pt-6 pb-0">
                                    <div class="media">

                                        <div class="media-body lh-14">

                                            <div class="author-rate align-items-end mt-1">
                                                <span class="rate-item checked">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="card testimonial-item h-100 border-0">
                                <div class="card-title text-uppercase font-weight-medium text-gray mb-3">
                                    Marlon dice:
                                </div>
                                <div class="card-body h5 font-weight-normal px-0 mb-0 lh-15 letter-spacing-35">

                                    Es una buena opción para ver sitios cerca de mi ubicación con buenos precios y excelentes servicios.
                                </div>
                                <div class="card-footer bg-transparent px-0 pt-6 pb-0">
                                    <div class="media">

                                        <div class="media-body lh-14">

                                            <div class="author-rate align-items-end mt-1">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="card testimonial-item h-100 border-0">
                                <div class="card-title text-uppercase font-weight-medium text-gray mb-3">
                                    Luis dice:
                                </div>
                                <div class="card-body h5 font-weight-normal px-0 mb-0 lh-15 letter-spacing-35">

                                    Estoy muy satisfecho con el servicio del barbero, su trabajo es de primera categoría y tiene una actitud incomparable, muy trabajador, agradable, puntual y respetuoso.
                                </div>
                                <div class="card-footer bg-transparent px-0 pt-6 pb-0">
                                    <div class="media">

                                        <div class="media-body lh-14">

                                            <div class="author-rate align-items-end mt-1">


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!----->
                    </div>
                </div>
            </div>
    </section>




    <center>
        <footer class="pt-4 pb-1 bg-pattern-01">




            <!-- Footer -->

            <!-- Footer Text -->
            <!--  <div class="pt-12 pb-13 bg-pattern-01 container-fluid text-center text-md-left">-->


            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020
                <a href=""> Punto Barber</a>
            </div>

</div>
</footer>


</footer>
</center>



<div id="login-popup" class="mfp-hide">
    <div class="form-login-register">
        <div class="tabs mb-8">
            <ul class="nav nav-pills tab-style-01 text-capitalize justify-content-center" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">
                        <h3>Log In</h3>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">
                        <h3>Register</h3>
                    </a>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                <div class="form-login">
                    <form>
                        <div class="font-size-md text-dark mb-5">Log In Your Account</div>
                        <div class="form-group mb-2">
                            <label for="username" class="sr-only">Username</label>
                            <input id="username" type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group flex-nowrap align-items-center">
                                <label for="password" class="sr-only">Password</label>
                                <input id="password" type="text" class="form-control" placeholder="Password">
                                <a href="#" class="input-group-append text-decoration-none">Forgot?</a>
                            </div>
                        </div>
                        <div class="form-group mb-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="check">
                                <label class="custom-control-label text-dark" for="check">Remember</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block font-weight-bold text-uppercase font-size-lg rounded-sm mb-8">
                            Log In
                        </button>
                    </form>
                    <div class="font-size-md text-dark mb-5">Or Log In With</div>
                    <div class="social-icon origin-color si-square">
                        <ul class="row no-gutters list-inline text-center">
                            <li class="list-inline-item si-facebook col-3">
                                <a target="_blank" title="Facebook" href="#">
                                    <i class="fab fa-facebook-f">
                                    </i>
                                    <span>Facebook</span>
                                </a>
                            </li>
                            <li class="list-inline-item si-twitter col-3">
                                <a target="_blank" title="Twitter" href="#">
                                    <i class="fab fa-twitter">
                                    </i>
                                    <span>Twitter</span>
                                </a>
                            </li>
                            <li class="list-inline-item si-google col-3">
                                <a target="_blank" title="Google plus" href="#">
                                    <svg class="icon icon-google-plus-symbol">
                                        <use xlink:href="#icon-google-plus-symbol"></use>
                                    </svg>
                                    <span>Google plus</span>
                                </a>
                            </li>
                            <li class="list-inline-item si-rss col-3">
                                <a target="_blank" title="RSS" href="#">
                                    <i class="fas fa-rss"></i>
                                    <span>RSS</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade " id="register" role="tabpanel" aria-labelledby="register-tab">
                <div class="form-register">
                    <form>
                        <div class="font-size-md text-dark mb-5">Create Your Account</div>
                        <div class="form-group mb-2">
                            <label for="username-rt" class="sr-only">Username</label>
                            <input id="username-rt" type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group mb-2">
                            <label for="email" class="sr-only">Email</label>
                            <input id="email" type="text" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="form-group mb-2">
                            <label for="password-rt" class="sr-only">Username</label>
                            <input id="password-rt" type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group mb-3">
                            <label for="r-password" class="sr-only">Username</label>
                            <input id="r-password" type="password" class="form-control" placeholder="Retype password">
                        </div>
                        <div class="form-group mb-8">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="check-term">
                                <label class="custom-control-label text-dark" for="check-term">You agree with our
                                    Terms Privacy Policy and</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block font-weight-bold text-uppercase font-size-lg rounded-sm">
                            Create an
                            account
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <form>
        </form>
    </div>
</div>
@endsection
