<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,500&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href={{ asset('assets/css/all.min.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/slick.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/aos.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/animate.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/style.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/media-query.css') }}>
</head>

<body>

    <div class="site_content">

        <!-- Header Section Start -->
        <header id="header_sec">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <div class="logo_section">
                            <a href="#hero_section_slider"><img src="assets/images/header/imagelogos.png"
                                    class="site_logo" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-10 d-flex justify-content-end">
                        <nav class="navbar navbar-expand-lg navbar-light" id="#navbar-example2">
                            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon sidebar_open_icon"><svg width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16 18V20H5V18H16ZM21 11V13H3V11H21ZM19 4V6H8V4H19Z" fill="white" />
                                    </svg></span>
                            </button>
                            <div class="offcanvas offcanvas-end" id="navbarNav">
                                <div class="offcanvas-header">
                                    <button type="button" class="btn-close text-reset sidebar_close_btn"
                                        data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#hero_section_slider">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#about_sec">ABOUT</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="#services_sec">SERVICES</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="#skills_sec">SKILL</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                            <a class="nav-link " href="#testimonial">TESTIMONIAL</a>
                                        </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link " href="#portfolio_sec">PORTFOLIO</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                            <a class="nav-link " href="#pricing_sec">PRICING</a>
                                        </li> -->
                                    <!-- <li class="nav-item">
                                            <a class="nav-link " href="#team_sec">TEAM</a>
                                        </li> -->
                                    <!-- <li class="nav-item">
                                            <a class="nav-link" href="#news_Section">NEWS</a>
                                        </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link " href="#contact_sec">CONTACT</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Section End  -->

        <!-- Hero Section Start -->
        <section id="hero_section_slider">
            <div class="hero_full_sec">
                <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="item">
                                <div class="img-fill">
                                    <img src="assets/images/hero/hero-1.jpg" class="img-fluid w-100" alt="">
                                    <div class="contain-wrapper carousel-caption">
                                        <div class="info ">
                                            <div>
                                                <h1>WE ARE <span class="bold_txt">SYSTECH</span> STUDIO</h1>
                                                <div class="business_button slider_button">
                                                    <a class="slider_button_link" href="#contact_sec">
                                                        <span>have a project?</span>
                                                        <p>We Can Help<i
                                                                class="greater_than fa-solid fa-angle-right"></i></p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="item">
                                <div class="img-fill">
                                    <img src="assets/images/hero/hero-2.jpg" class="img-fluid w-100" alt="">
                                    <div class="contain-wrapper carousel-caption">
                                        <div class="info">
                                            <div>
                                                <h1 data-bs-animation="slide-out-right">A <span
                                                        class="bold_txt">CREATIVE</span> TEAMS</h1>
                                                <div class="business_button slider_button">
                                                    <a class="slider_button_link" href="#contact_sec">
                                                        <span>have a project?</span>
                                                        <p>We Can Help<i
                                                                class="greater_than fa-solid fa-angle-right"></i></p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="item">
                                <div class="img-fill">
                                    <img src="assets/images/hero/hero-3.jpg" class="img-fluid w-100" alt="">
                                    <div class="contain-wrapper carousel-caption">
                                        <div class="info">
                                            <div>
                                                <h1>WITH <span class="bold_txt"> UNIQUE </span> IDEAS </h1>
                                                <div class="business_button slider_button">
                                                    <a class="slider_button_link" href="#contact_sec">
                                                        <span>have a project?</span>
                                                        <p>We Can Help<i
                                                                class="greater_than fa-solid fa-angle-right"></i></p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev hero_prev left-arrow" type="button"
                        data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next hero_next right-arrow" type="button"
                        data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
        </section>
        <!-- Hero Section End -->

        <!--About Section Start -->
        <section id="about_sec" class="reveal">
            <div class="container">
                <div class="about_top_sec">
                    <p class="orange_box d-flex align-items-center justify-content-center">ABOUT</p>
                </div>
                <div class="row about_first_sec">
                    <div class="col-lg-6 col-12">
                        <h2 class="ult_txt" data-aos="fade-right" data-aos-duration="1000">Transforming businesses
                            through innovative and tailored software solutions.</h2>
                    </div>
                    <div class="col-lg-6 col-12">
                        <p class="comm_txt" data-aos="fade-left" data-aos-duration="1000">SysTech is a dynamic
                            software agency dedicated to revolutionizing businesses through innovative and tailored
                            software solutions. With a passionate team of experts, we bring together creativity,
                            technical expertise, and unwavering dedication to deliver exceptional results. Our
                            collaborative approach ensures that we deeply understand your goals and challenges, allowing
                            us to create user-friendly mobile applications, robust web platforms, and advanced data
                            analytics solutions. As a reliable and client-centric agency, we prioritize open
                            communication, transparency, and quality in every project. </p>
                    </div>
                </div>
                <div class="row about_second_sec ">
                    <div class="col-lg-6 col-12  about_middle_img" data-aos="fade-down" data-aos-duration="1000">
                        <div class="about_middle_img_sec text-center">
                            <div class="pbmit-animation-style1 reveal">
                                <img src="assets/images/about/beCreative.jpg" class="img-fluid text-center "
                                    alt="about_img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 d-flex align-items-center" data-aos="fade-down"
                        data-aos-duration="1000">
                        <div class="about_middle_second_Sec" data-aos="fade-left" data-aos-duration="1000">
                            <h3 class="our_mission">“ <span class="orange_txt">Our mission</span> is to produce the
                                highest quality work for every clients, on every project with full of energy we have ”
                            </h3>
                            <p class="direc_txt">DIRECTOR</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Section End -->

        <!-- Services Section Start -->
        <section id="services_sec">
            <div class="container">
                <div class="service_top_sec">
                    <p class="orange_box d-flex align-items-center justify-content-center">SERVICES</p>
                </div>
                <div class="row">
                    @foreach ($services as $key => $service)
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="services_top_section">
                                <div class="services_img_sec {{ $service['svg_variant'] }}">
                                    <img src="{{ asset($service['svg_path']) }}" alt="">

                                </div>
                                <h3 class="services_sec_heading" data-aos="fade-down" data-aos-duration="1000">
                                    {{ $service['title'] }}</h3>
                                <p class="services_sec_txt ellipsis-text"
                                    data-aos="fade-up"id="ellipsis-text-{{ $key }}"
                                    data-aos-duration="1000">{{ $service['description'] }}</p>
                                <button class="more_btn"
                                    data-id={{$service['id']}}>More</button>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="services_top_section">
                            <div class="services_img_sec bulb">
                                <img src="{{ asset('assets/svg/service-bulb.svg') }}" alt="">

                            </div>
                            <h3 class="services_sec_heading" data-aos="fade-down" data-aos-duration="1000">Web
                                Development and Design</h3>
                            <p class="services_sec_txt ellipsis-text" data-aos="fade-up"id="ellipsis-text"
                                data-aos-duration="1000">Our agency excels in crafting visually stunning and functional
                                web platforms. From responsive websites to complex web applications, we combine elegant
                                design with robust development techniques to deliver seamless user experiences and drive
                                online success.</p>
                            <button class="more_btn" data-bs-toggle="modal"
                                data-bs-target="#service_modal_1">More</button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 ">
                        <div class="services_top_section">
                            <div class="services_img_sec ring mt-ser">
                                <svg width="120" height="120" viewBox="0 0 120 120" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_26_34)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M57.96 0.276355C55.7394 1.09812 53.8987 3.42478 53.8987 5.41011C53.8987 6.28366 53.8893 6.29237 52.7846 6.43691C43.3135 7.67603 33.6926 11.7959 26.115 17.8574C15.2963 26.5113 7.94524 39.5447 6.16858 53.2226C6.02903 54.2967 5.99338 54.3407 5.26278 54.3407C3.39793 54.3407 1.06259 56.2453 0.264916 58.4168C-0.0883052 59.3787 -0.0883052 61.308 0.264916 62.2698C1.06259 64.4413 3.39793 66.3459 5.26278 66.3459C5.99338 66.3459 6.02903 66.3899 6.16858 67.4641C6.8694 72.8603 8.757 79.1173 11.1962 84.1306C19.1536 100.484 34.7295 111.768 52.7562 114.238C53.7945 114.381 53.848 114.426 53.9829 115.271C54.0603 115.757 54.4435 116.639 54.8347 117.232C56.9395 120.421 61.3105 120.945 63.9955 118.33C64.9939 117.357 65.8463 115.799 65.8552 114.929C65.8596 114.491 66.0766 114.398 67.6781 114.147C73.5008 113.236 78.5027 111.679 83.5683 109.201C99.8932 101.214 111.108 85.6204 113.583 67.4641C113.734 66.3612 113.748 66.3459 114.601 66.3407C117.103 66.3259 119.568 63.9075 119.953 61.0914C120.397 57.8418 117.62 54.3407 114.599 54.3407C114.109 54.3407 113.707 54.248 113.707 54.1348C113.707 54.0215 113.486 52.6181 113.215 51.0158C111.712 42.1232 107.486 32.8102 101.877 26.0343C100.715 24.6302 100.467 24.4454 99.7466 24.4454C99.2435 24.4454 98.7509 24.626 98.4618 24.9162C97.6134 25.7676 97.8552 26.548 99.7236 28.9909C101.717 31.5979 103.953 35.0199 103.777 35.1962C103.711 35.2623 100.087 36.3054 95.7237 37.5141L87.7901 39.7118L86.7459 38.4931C85.4287 36.956 83.2256 34.7489 81.646 33.3841L80.4273 32.3312L82.6215 24.3687C83.8282 19.9894 84.8721 16.3497 84.9413 16.2802C85.1301 16.0907 89.3819 18.9536 91.7613 20.8728C92.924 21.8102 94.0843 22.5622 94.3685 22.5622C95.2516 22.5622 96.1163 21.6873 96.1163 20.7935C96.1163 20.1214 95.9064 19.8154 94.7389 18.7837C88.1492 12.9621 78.7374 8.54158 69.3198 6.84461L65.8603 6.22128V5.37527C65.8603 4.07282 64.7831 2.14093 63.5806 1.28738C62.2156 0.318255 61.3008 0 59.8795 0C59.2345 0 58.3707 0.124289 57.96 0.276355ZM61.5448 4.29551C61.9834 4.7357 62.3422 5.3183 62.3422 5.59019C62.3422 6.06098 62.2249 6.08452 59.8795 6.08452C57.5341 6.08452 57.4168 6.06098 57.4168 5.59019C57.4168 5.3183 57.7757 4.7357 58.2143 4.29551C59.3236 3.18208 60.4354 3.18208 61.5448 4.29551ZM68.2058 10.1945C71.3864 10.7411 75.4201 11.8498 78.0331 12.8959C81.1002 14.1238 81.5747 14.3587 81.5747 14.6494C81.5747 15.0093 77.5577 29.7623 77.382 30.0476C77.2941 30.1907 76.3451 29.848 75.0073 29.1898C65.5031 24.5144 54.1808 24.5356 44.635 29.2466C43.359 29.8765 42.4668 30.1933 42.3777 30.0488C42.1997 29.76 38.1843 15.0081 38.1843 14.6438C38.1843 14.369 39.873 13.5593 42.5234 12.5626C44.725 11.7347 48.8227 10.6564 51.5533 10.1863C56.1714 9.39136 63.5529 9.39513 68.2058 10.1945ZM35.1247 17.0893C35.2579 17.5749 36.2578 21.2028 37.3468 25.1516L39.3268 32.3312L37.9932 33.5009C36.3054 34.9815 34.6237 36.6684 33.1344 38.3743L31.969 39.7092L24.0346 37.512C19.6705 36.3035 16.0412 35.2555 15.9692 35.1835C15.8974 35.1112 16.7399 33.6984 17.8415 32.0438C21.502 26.5468 26.1319 21.8909 31.6171 18.1912C33.2296 17.1036 34.624 16.2122 34.7157 16.2101C34.8076 16.2082 34.9915 16.6039 35.1247 17.0893ZM66.0705 29.8546C75.5507 31.7935 83.4302 37.927 87.6864 46.6809C89.2374 49.871 90.0661 52.5204 90.5736 55.9127C90.9949 58.7264 91.064 58.9152 91.8012 59.2523C92.6186 59.6258 92.9146 59.5901 93.622 59.0315C94.1391 58.6233 94.24 58.3559 94.24 57.3922C94.24 54.4459 92.6946 48.8011 90.8588 45.0426C90.2898 43.8774 89.8648 42.8828 89.9146 42.8324C90.0417 42.7041 105.06 38.5692 105.399 38.5692C106.04 38.5692 108.62 45.8283 109.46 49.9958C110.21 53.7197 110.43 56.0596 110.433 60.3433C110.436 65.124 110.001 68.758 108.916 73.002C107.81 77.3281 105.966 82.1177 105.407 82.1172C105.077 82.117 90.0379 77.9787 89.915 77.8544C89.8651 77.8041 90.2898 76.8093 90.8588 75.6441C92.4673 72.3506 94.0054 67.231 94.0054 65.1706C94.0054 64.3921 93.0736 63.5212 92.2408 63.5212C91.2003 63.5212 90.762 64.2142 90.2345 66.6941C87.6348 78.9163 78.2949 88.2429 66.0325 90.8615C62.6356 91.587 57.1234 91.587 53.7265 90.8615C41.4173 88.233 32.0909 78.8728 29.472 66.5187C28.7492 63.1095 28.7492 57.5772 29.472 54.1679C30.6271 48.7192 33.0966 43.7599 36.626 39.8008C41.9842 33.7906 48.6107 30.3663 56.9477 29.3002C58.6909 29.0773 63.783 29.3866 66.0705 29.8546ZM57.1823 32.8326C52.988 33.4354 50.1664 34.2784 47.2557 35.7983C43.7915 37.6071 39.5916 41.1769 39.5916 42.3122C39.5916 42.8616 40.4925 43.9416 40.9988 43.9991C41.872 44.0984 42.26 43.9058 43.5223 42.7468C45.4483 40.9782 46.9468 39.9305 49.0906 38.8538C60.779 32.9821 74.89 37.476 81.008 49.0187C83.0056 52.7876 83.7993 56.0073 83.7993 60.3433C83.7993 64.6793 83.0056 67.8991 81.008 71.668C77.6048 78.0887 71.7129 82.4595 64.3358 84.0357C63.5618 84.2012 61.5565 84.3365 59.8795 84.3365C56.7521 84.3365 55.1579 84.1011 52.4914 83.2462C44.4469 80.6669 38.1862 73.691 36.4138 65.3316C35.3574 60.348 36.0212 54.4059 38.0945 50.2879C39.1345 48.2223 38.6701 46.808 36.9516 46.808C35.8732 46.808 35.3989 47.3937 34.4089 49.9466C30.9761 58.7998 31.9202 67.9268 37.0719 75.693C43.5042 85.3899 55.476 89.9623 66.821 87.0549C74.9226 84.9789 82.2197 78.5465 85.3299 70.7389C87.5938 65.0564 87.9843 59.2334 86.4942 53.3765C84.1131 44.0165 76.1554 36.0137 66.8764 33.6482C63.7499 32.8512 59.5261 32.4957 57.1823 32.8326ZM22.1121 40.6082C26.2433 41.7296 29.6948 42.7096 29.7821 42.7856C29.8693 42.8616 29.4723 43.8774 28.8995 45.0426C26.5088 49.9061 25.4372 54.6366 25.4332 60.3433C25.4294 65.9719 26.5273 70.8182 28.8995 75.6441C29.4723 76.8093 29.8693 77.825 29.7821 77.901C29.6027 78.0578 14.7397 82.1175 14.3457 82.1175C13.7788 82.1175 11.7378 76.7492 10.7246 72.5936C9.73504 68.5356 9.32342 64.9361 9.32342 60.3433C9.32342 55.734 9.73504 52.1506 10.7372 48.0411C11.7371 43.94 13.7713 38.5692 14.3246 38.5692C14.4765 38.5692 17.9808 39.4868 22.1121 40.6082ZM5.81747 60.3433C5.81747 63.1862 5.63406 63.3842 4.26949 62.0146C3.16011 60.9012 3.16011 59.7854 4.26949 58.672C5.63406 57.3025 5.81747 57.5004 5.81747 60.3433ZM115.724 58.672C116.344 59.2937 116.522 59.6666 116.522 60.3433C116.522 61.0201 116.344 61.393 115.724 62.0146C115.285 62.4548 114.705 62.815 114.434 62.815C113.965 62.815 113.942 62.6973 113.942 60.3433C113.942 57.9894 113.965 57.8717 114.434 57.8717C114.705 57.8717 115.285 58.2318 115.724 58.672ZM35.4798 84.8318C36.1288 85.4832 37.2602 86.5424 37.9944 87.1858L39.3289 88.3555L37.1362 96.318C35.9301 100.697 34.8846 104.339 34.8125 104.412C34.5996 104.626 29.5689 101.146 27.1411 99.1058C24.7443 97.0915 22.2408 94.512 20.2233 91.9782C18.6791 90.039 15.8087 85.6644 15.9725 85.5001C16.0393 85.4328 19.666 84.386 24.0316 83.1737L31.969 80.9697L33.1344 82.3086C33.7754 83.0449 34.8308 84.1805 35.4798 84.8318ZM97.8299 83.7605C101.03 84.6407 103.706 85.4196 103.778 85.4914C103.926 85.6404 101.171 89.9335 99.9004 91.5333C98.0051 93.9197 95.6329 96.4415 93.4191 98.4238C91.1302 100.473 85.2038 104.67 84.9533 104.418C84.8459 104.311 83.1764 98.3605 81.0308 90.4375L80.447 88.2825L82.4549 86.5535C83.5592 85.6025 85.1892 83.9592 86.0772 82.9016L87.6913 80.9786L89.8517 81.5695C91.0397 81.8943 94.63 82.8804 97.8299 83.7605ZM44.7745 91.4782C49.5695 93.8616 54.2587 94.9294 59.8795 94.9174C65.5189 94.9051 70.323 93.8093 75.1241 91.4401C76.4 90.8102 77.2922 90.4933 77.3813 90.6379C77.5593 90.9267 81.5747 105.678 81.5747 106.043C81.5747 106.612 76.2259 108.66 72.0853 109.677C68.0421 110.67 64.4557 111.083 59.8795 111.083C55.1061 111.083 51.4754 110.643 47.2668 109.554C42.9566 108.438 38.1843 106.59 38.1843 106.036C38.1843 105.765 41.7543 92.4961 42.2004 91.1091C42.3381 90.6816 42.5196 90.3643 42.6043 90.4039C42.6887 90.4434 43.6654 90.9269 44.7745 91.4782ZM62.1175 115.055C61.7183 115.803 60.6812 116.485 59.9426 116.485C59.0593 116.485 57.9982 115.861 57.6765 115.152L57.4269 114.602H59.8929C62.2528 114.602 62.3483 114.622 62.1175 115.055Z"
                                            fill="#706DF9" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_26_34">
                                            <rect width="120" height="120" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <h3 class="services_sec_heading" data-aos="fade-down" data-aos-duration="1000">Custom
                                Business specific software</h3>
                            <p class="services_sec_txt ellipsis-text" id="ellipsis-text3" data-aos="fade-up"
                                data-aos-duration="1000">We understand that every business has unique requirements. Our
                                agency specializes in developing custom software solutions tailored to your specific
                                needs. Whether it's a CRM system, inventory management software, or enterprise resource
                                planning (ERP) solution, we create powerful and scalable applications that streamline
                                your business processes and enhance overall efficiency. Our team works closely with you
                                to ensure that the software aligns perfectly with your workflows, empowering your
                                organization to achieve optimal productivity and growth</p>
                            <button class="more_btn" data-bs-toggle="modal"
                                data-bs-target="#service_modal_1">More</button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="services_top_section">
                            <div class="services_img_sec media mt-ser">
                                <svg width="120" height="120" viewBox="0 0 120 120" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_26_36)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M57.7188 0.305445C53.9932 1.52185 51.7289 4.58068 51.7076 8.42628C51.6996 9.86747 51.8179 10.4531 52.3618 11.6602C53.1933 13.5059 55.251 15.4957 56.9519 16.0994L58.1213 16.5143V19.7106V22.9069L56.4225 23.0646C49.3759 23.719 42.282 26.6103 36.7212 31.0946L34.9296 32.5393L30.9767 28.5844L27.0237 24.6295L27.5549 23.7432C29.0611 21.2304 29.7065 18.959 29.7065 16.1696C29.7065 12.2303 28.4858 9.27123 25.7345 6.54114C22.8026 3.63177 19.9609 2.47122 15.8513 2.5043C12.1245 2.53457 8.99648 3.86032 6.37479 6.52119C3.70027 9.23604 2.43992 12.2287 2.40986 15.9349C2.37675 20.0412 3.53824 22.8806 6.44994 25.8102C9.25057 28.628 12.0416 29.7712 16.1326 29.7762C18.7623 29.7794 21.3105 29.1065 23.198 27.91C23.8159 27.5184 24.3962 27.1979 24.487 27.1979C24.5782 27.1979 26.4132 28.9547 28.5649 31.1019L32.477 35.0062L31.1098 36.6747C29.5066 38.6314 27.1233 42.3548 27.1233 42.9027C27.1233 43.4623 27.7956 44.3263 28.4135 44.5611C29.4479 44.9539 29.9105 44.5677 31.7481 41.7757C33.0439 39.8072 34.3012 38.2919 36.2632 36.3345C41.1971 31.4119 46.5717 28.5002 53.4247 27.0374C56.2596 26.4322 63.7404 26.4322 66.5753 27.0374C73.4318 28.5009 78.809 31.4147 83.7328 36.3345C87.7162 40.3145 90.2384 44.3359 91.9099 49.3718C93.2104 53.2892 93.4638 55.0308 93.4638 60.0482C93.4638 65.0656 93.2104 66.8071 91.9099 70.7245C90.2384 75.7605 87.7162 79.7818 83.7328 83.7619C79.7495 87.7422 75.7249 90.2623 70.6849 91.9325C66.7644 93.2319 65.0214 93.4851 60 93.4851C54.9785 93.4851 53.2356 93.2319 49.3151 91.9325C44.2767 90.2627 40.2517 87.7426 36.2658 83.7619C31.0922 78.5955 27.9654 72.616 26.7856 65.6334C26.0635 61.3596 26.3718 55.0294 27.4854 51.265C28.0072 49.5016 27.9344 48.6684 27.209 48.0984C25.846 47.027 24.7336 47.8497 24.0601 50.4277C23.4942 52.594 22.8984 56.1092 22.8972 57.2911L22.8963 58.171H19.6638H16.4311L16.0159 57.0025C15.4117 55.303 13.4203 53.247 11.5731 52.4161C10.3651 51.8727 9.77894 51.7544 8.33659 51.7624C4.95006 51.7812 2.25886 53.4594 0.770489 56.4802C0.0824266 57.8765 0 58.2578 0 60.0433C0 61.7179 0.101448 62.259 0.624658 63.3743C1.87209 66.033 4.08939 67.737 6.99851 68.2727C8.6144 68.5703 10.452 68.2666 12.1155 67.4268C13.5598 66.6978 15.503 64.5362 16.0189 63.085L16.4311 61.9254H19.63H22.8286L22.9839 63.7438C23.5742 70.6609 26.7029 78.145 31.3238 83.6931L32.4829 85.0846L28.5677 88.9917C26.4143 91.1403 24.5782 92.8985 24.487 92.8985C24.3962 92.8985 23.8159 92.578 23.198 92.1863C21.3105 90.9899 18.7623 90.3169 16.1326 90.3202C14.88 90.3216 13.2787 90.4763 12.5742 90.6635C8.12383 91.8471 4.32188 95.4944 2.90701 99.9379C2.23092 102.061 2.22975 105.786 2.90466 107.916C4.61683 113.319 9.75875 117.386 15.1371 117.592C17.0574 117.666 17.7299 117.246 17.7299 115.975C17.7299 114.836 17.0891 114.318 15.4596 114.14C13.8547 113.964 11.5672 113.216 10.5675 112.541C3.81205 107.976 4.52102 98.1752 11.8591 94.6811C13.2916 93.9992 13.5518 93.9544 16.0861 93.9544C18.6387 93.9544 18.8738 93.9957 20.3775 94.7074C22.4672 95.6964 24.3231 97.5508 25.313 99.6389C26.0252 101.141 26.0665 101.376 26.0665 103.927C26.0665 106.491 26.028 106.706 25.2939 108.255C24.7179 109.471 24.0761 110.313 22.7695 111.569C20.8434 113.42 20.5489 114.252 21.4873 115.19C22.5135 116.215 23.9291 115.598 26.1807 113.142C28.5717 110.535 29.7065 107.569 29.7065 103.927C29.7065 101.137 29.0611 98.866 27.5549 96.3532L27.0237 95.4669L30.9835 91.5052L34.9435 87.5432L36.3757 88.7371C39.6984 91.5059 43.869 93.7977 48.2482 95.2607C50.8887 96.1427 55.6631 97.1221 57.3227 97.1221H58.1213V100.352V103.582L56.9519 103.997C55.251 104.601 53.1933 106.59 52.3618 108.436C51.8179 109.643 51.6996 110.229 51.7076 111.67C51.7263 115.054 53.4059 117.743 56.4291 119.23C57.8266 119.918 58.2082 120 59.9951 120C61.6711 120 62.2126 119.899 63.3288 119.376C65.9897 118.129 67.695 115.914 68.2312 113.007C68.5289 111.393 68.2251 109.556 67.3846 107.894C66.655 106.451 64.4917 104.509 63.0392 103.994L61.8787 103.582V100.352V97.1221H62.6773C64.3364 97.1221 69.1111 96.1427 71.7501 95.2611C76.2073 93.7721 80.953 91.133 84.0124 88.4424L85.0462 87.5329L89.0114 91.5L92.9763 95.4669L92.4451 96.3532C90.9522 98.8435 90.2935 101.138 90.2935 103.847C90.2935 107.917 91.4675 110.789 94.2615 113.555C97.2012 116.466 100.041 117.625 104.149 117.592C107.876 117.562 111.004 116.236 113.625 113.575C116.3 110.86 117.56 107.868 117.59 104.161C117.623 100.055 116.462 97.2157 113.55 94.2862C110.748 91.4676 107.959 90.3251 103.864 90.3202C101.234 90.3169 98.8713 90.9411 96.8816 92.1645C96.225 92.5681 95.6111 92.8985 95.5177 92.8985C95.424 92.8985 93.5833 91.138 91.4271 88.9865L87.5068 85.0743L88.4541 84.0003C91.0781 81.0245 93.7738 76.1744 95.2412 71.7889C96.1235 69.1519 97.1037 64.3811 97.1037 62.7234V61.9254H100.336H103.569L103.984 63.0939C104.588 64.7934 106.58 66.8494 108.427 67.6803C109.635 68.2237 110.221 68.342 111.663 68.334C115.05 68.3152 117.741 66.637 119.23 63.6162C119.918 62.2189 120 61.8392 120 60.0482C120 58.2571 119.918 57.8775 119.23 56.4802C117.739 53.4554 115.053 51.7826 111.65 51.7608C110.145 51.7509 109.645 51.8579 108.362 52.4642C106.174 53.4983 104.257 55.6197 103.787 57.5258L103.628 58.171H100.366H97.1037V57.373C97.1037 55.7152 96.1235 50.9444 95.2412 48.3075C93.7738 43.922 91.0781 39.0719 88.4541 36.0961L87.5068 35.0221L91.4271 31.1099C93.5833 28.9584 95.424 27.1979 95.5177 27.1979C95.6111 27.1979 96.225 27.5283 96.8816 27.9319C99.5537 29.5748 104.239 30.3764 105.169 29.3498C105.695 28.7695 105.671 27.3732 105.128 26.8816C104.87 26.6483 103.956 26.3984 102.848 26.2581C99.1912 25.7949 96.2142 23.6789 94.687 20.4575C93.9748 18.955 93.9335 18.7202 93.9335 16.1696C93.9335 13.619 93.9748 13.3841 94.687 11.8817C96.984 7.03624 102.721 4.73836 107.671 6.68122C114.733 9.45355 116.334 18.7664 110.617 23.8134C109.793 24.5405 109.053 25.3996 108.971 25.7222C108.79 26.4433 109.349 27.3678 110.149 27.6719C111.04 28.0102 111.799 27.5869 113.641 25.7245C116.457 22.8785 117.623 19.9884 117.59 15.9349C117.56 12.2287 116.3 9.23604 113.625 6.52119C110.922 3.77749 107.863 2.5158 103.914 2.5158C99.8238 2.5158 96.7414 3.84483 93.933 6.81896C91.4538 9.4444 90.3013 12.3742 90.2964 16.0616C90.2926 18.9567 90.9196 21.1985 92.4451 23.7432L92.9763 24.6295L89.0114 28.5964L85.0462 32.5635L84.0124 31.654C80.953 28.9634 76.2073 26.3243 71.7501 24.8352C69.1111 23.9537 64.3364 22.9743 62.6773 22.9743H61.8787V19.7444V16.5143L63.0481 16.0994C64.749 15.4957 66.8067 13.5059 67.6382 11.6602C68.9408 8.76886 68.3622 5.22173 66.1952 2.81333C64.1286 0.516861 60.4265 -0.578697 57.7188 0.305445ZM62.6764 4.36973C65.0445 6.03243 65.5014 9.17104 63.6944 11.3612C61.2178 14.3635 56.2772 13.2494 55.3259 9.47443C54.7362 7.13409 56.2201 4.46007 58.517 3.72375C59.705 3.34269 61.6429 3.64374 62.6764 4.36973ZM18.9041 6.36304C21.6721 7.17984 24.05 9.24308 25.3393 11.946C26.0217 13.3773 26.0665 13.6373 26.0665 16.1696C26.0665 18.7202 26.0252 18.955 25.313 20.4575C24.3231 22.5456 22.4672 24.4 20.3775 25.389C18.8738 26.1007 18.6387 26.142 16.0861 26.142C13.5518 26.142 13.2916 26.0972 11.8591 25.4153C6.91162 23.0594 4.62411 17.4158 6.59014 12.4152C8.49417 7.57287 13.9376 4.89768 18.9041 6.36304ZM70.9014 35.7432C69.7076 36.2627 68.4373 37.5417 67.781 38.8848L67.1624 40.1515L58.1563 43.8816L49.1504 47.612H45.801C43.9587 47.612 41.9115 47.7143 41.2511 47.8394C39.6625 48.1404 38.2774 49.0898 37.5011 50.4094C36.8799 51.4649 36.8675 51.5667 36.7893 56.2291C36.6805 62.722 37.0582 64.2047 39.1479 65.491L40.0265 66.0316L40.0384 71.8978C40.045 75.1241 40.1465 78.1785 40.2641 78.6851C40.7981 80.9858 43.1352 82.8111 45.5411 82.8064C47.0841 82.8036 48.9353 81.9479 49.7732 80.8502C50.9037 79.3693 51.0763 78.2874 51.0763 72.6817C51.0763 69.8629 51.1557 67.5545 51.2524 67.5514C51.3492 67.5486 55.0478 69.0475 59.4716 70.8827C64.3895 72.9227 67.5147 74.3416 67.5147 74.5345C67.5147 75.1856 68.4709 76.6859 69.3835 77.4664C70.8803 78.7466 72.8315 79.1319 74.9119 78.5582C76.1749 78.2097 78.1761 76.2101 78.5249 74.9482C78.6674 74.4319 78.7867 72.3729 78.79 70.3726L78.7961 66.7356L80.4695 65.9497C83.4641 64.5438 85.5342 61.7909 86.0698 58.503C86.7412 54.3803 84.2532 49.8871 80.3598 48.1925L78.8233 47.5235L78.7461 43.4029C78.6831 40.0517 78.5934 39.1444 78.2649 38.5444C77.678 37.4723 76.4698 36.3411 75.3868 35.8495C74.2629 35.3394 71.9556 35.2847 70.9014 35.7432ZM74.5778 39.616L75.2642 40.3019V57.1151V73.9284L74.5778 74.6143C73.6943 75.497 72.5209 75.5437 71.5787 74.7339L70.9198 74.1675V57.1151V40.0628L71.5787 39.4963C72.5209 38.6866 73.6943 38.7333 74.5778 39.616ZM67.2798 57.0802V70.3026L59.2368 66.9594L51.1937 63.6162V57.0959V50.5753L59.1781 47.242C63.5695 45.4087 67.189 43.8973 67.2211 43.8833C67.2533 43.8692 67.2798 49.8078 67.2798 57.0802ZM47.4991 57.0565L47.562 62.8639H44.424C40.1544 62.8639 40.4123 63.2159 40.3195 57.2569C40.2512 52.877 40.2728 52.6043 40.7352 52.017C41.3441 51.2434 41.6647 51.1812 44.8532 51.2187L47.4364 51.249L47.4991 57.0565ZM80.0052 51.9837C81.1919 52.8052 82.2268 54.4151 82.541 55.9276C83.0783 58.5131 81.7611 61.3392 79.4663 62.5249L78.7867 62.8759V57.1212C78.7867 53.9561 78.8602 51.3663 78.9501 51.3663C79.0401 51.3663 79.5149 51.6441 80.0052 51.9837ZM10.0774 55.5822C12.4619 56.4882 13.6861 59.6451 12.5887 62.0593C11.0407 65.4652 6.43726 65.7942 4.23029 62.6565C3.61057 61.7754 3.5225 61.4509 3.5225 60.0482C3.5225 58.6455 3.61057 58.321 4.23029 57.4399C5.61652 55.4691 7.88384 54.7487 10.0774 55.5822ZM114.119 55.9069C114.63 56.1843 115.369 56.869 115.763 57.4286C116.39 58.3217 116.477 58.6422 116.477 60.0482C116.477 61.4509 116.389 61.7754 115.77 62.6565C114.058 65.0893 110.946 65.568 108.726 63.7396C104.252 60.0545 109.015 53.1355 114.119 55.9069ZM47.4364 72.2899V78.0788L46.8672 78.6839C45.9353 79.6744 44.5017 79.4407 43.8348 78.19C43.5332 77.624 43.4334 66.8245 43.7272 66.531C43.8183 66.4402 44.69 66.396 45.6646 66.4333L47.4364 66.5009V72.2899ZM108.141 94.6874C110.333 95.7222 111.952 97.2781 112.962 99.3191C116.134 105.732 112.321 113.015 105.264 114.023C100.997 114.632 96.5791 112.206 94.687 108.215C93.9748 106.712 93.9335 106.477 93.9335 103.927C93.9335 101.376 93.9748 101.141 94.687 99.6389C95.5491 97.8204 97.4168 95.8104 99 94.9974C100.879 94.0323 101.806 93.8401 104.266 93.9049C106.326 93.9591 106.802 94.0551 108.141 94.6874ZM62.0128 107.421C65.4214 108.968 65.7506 113.568 62.6104 115.773C61.7286 116.392 61.4038 116.48 60 116.48C58.5962 116.48 58.2714 116.392 57.3896 115.773C54.9548 114.063 54.4758 110.953 56.3056 108.735C57.1994 107.652 58.6032 106.988 60 106.988C60.5812 106.988 61.487 107.183 62.0128 107.421Z"
                                            fill="#2BF06E" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_26_36">
                                            <rect width="120" height="120" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </div>
                            <h3 class="services_sec_heading" data-aos="fade-down" data-aos-duration="1000">Mobile
                                Applications</h3>
                            <p class="services_sec_txt ellipsis-text" data-aos="fade-up"id="ellipsis-text2"
                                data-aos-duration="1000">We specialize in creating bespoke mobile applications that
                                cater to your unique business needs. Our expert team leverages the latest technologies
                                to build user-friendly and high-performing mobile apps for iOS and Android platforms</p>
                            <button class="more_btn" data-bs-toggle="modal"
                                data-bs-target="#service_modal_1">More</button>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        <!-- Services Section End -->

        <!-- Services Modal Start -->
        <div class="modal fade modal-fullscreen" id="service_modal_1">
            <div class="modal-dialog service_modal_dialog">
                <div class="modal-content service_modal_content">
                    <button type="button" class="service_btn_close" data-bs-dismiss="modal" aria-label="Close">
                        <svg width="20" height="20" viewBox="0 0 14 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.99999 5.586L11.95 0.636002L13.364 2.05L8.41399 7L13.364 11.95L11.95 13.364L6.99999 8.414L2.04999 13.364L0.635986 11.95L5.58599 7L0.635986 2.05L2.04999 0.636002L6.99999 5.586Z"
                                fill="white"></path>
                        </svg>
                    </button>
                    <div class="modal-body service_modal_body">
                        <div class="services-popup_img_Sec">
                            <div class="row">
                                <div class="col-xl-8 col-lg-12">
                                    <div class="services_img_sec modalClass m-0">
                                        <img src="" alt="" id="service-img">
                                    </div>
                                    <div class="sevices-pop-details">
                                        <h3 class="cre_txt" id="service-title"></h3>
                                        <p id="service-description"></p>
                                    </div>
                                    {{-- <div class="services_overview_sec">
                                        <h3>Service Overview</h3>
                                        <div class="servi_img_popup">
                                            <img src="assets/images/services/popup-1.jpg"
                                                class="img-fluid ser_pop_img1" alt="service_img">
                                            <img src="assets/images/services/popup-2.jpg"
                                                class="img-fluid ser_pop_img2" alt="service_img">
                                        </div>
                                        <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro
                                            est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto
                                            beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed
                                            efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply
                                            dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                            the ndustry standard dummy text ever since the 1500s, when an unknown
                                            printer took a galley of type and scrambled it to make</p>
                                    </div>
                                    <div class="services">
                                        <h2 class="result_txt"> Services Results</h2>
                                        <div class="row popup_counter_ser">
                                            <div class="col-xl-4 col-md-4">
                                                <div class="counterBox">
                                                    <h3><span class="timer appeared"
                                                            data-count="90">90</span><span>%</span></h3>
                                                    <h4>Prodcut Sales Growing Per Month</h4>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-4">
                                                <div class="counterBox">
                                                    <h3><span class="timer appeared"
                                                            data-count="80">80</span><span>%</span></h3>
                                                    <h4>Prodcut Sales Growing Per Month</h4>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-4">
                                                <div class="counterBox">
                                                    <h3><span class="timer appeared"
                                                            data-count="8">8</span><span>K</span></h3>
                                                    <h4>Prodcut Sales Growing Per Month</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="col-xl-4 col-lg-12">
                                    <div class="sidebar">
                                        {{-- <aside class="sevices_widget serviceMenu">
                                            <h3 class="widgetTitle">Services</h3>
                                            <ul>
                                                <li class="current_menu"><a href="javascript:void(0)">Digital
                                                        Marketing</a></li>
                                                <li><a href="javascript:void(0)">SEO</a></li>
                                                <li><a href="javascript:void(0)">Web Design</a></li>
                                            </ul>
                                        </aside> --}}
                                        <aside class="sevices_widget serviceform">
                                            <h3 class="widgetTitle">Get A Quote</h3>
                                            <div class="widgetForm">
                                                <form method="post" action="#" id="contact_form">
                                                    <input class="required ser_popup_form_txt" type="text"
                                                        placeholder="Your name">
                                                    <input class="required ser_popup_form_txt" type="email"
                                                        placeholder="Your email">
                                                    <textarea class="required ser_textarea" placeholder="Write your message"></textarea>
                                                    <button type="submit" class="services_form_popup">Submit
                                                        Now</button>
                                                </form>
                                            </div>
                                        </aside>
                                        {{-- <aside class="sevices_widget servicprofile">
                                            <h3 class="widgetTitle">Company Profile</h3>
                                            <div class="companyProfileBtns">
                                                <a href="javascript:void(0);" class="Ser_popup_btn">Download PDF
                                                </a>
                                                <a href="javascript:void(0);" class="Ser_popup_btn">Download Word File
                                                </a>
                                            </div>
                                        </aside> --}}
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services Modal  End -->

            <!-- Skills Section Start -->
            <section id="skills_sec" class="reveal active">
                <div class="container">
                    <div class="skills_top_sec">
                        <p class="orange_box d-flex align-items-center justify-content-center">SKILLS</p>
                    </div>
                    <div class="row" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                        <div class="col-md-6 col-12" data-aos="fade-down-right">
                            <div class="skill_img_section text-center">
                                <img src="assets/images/skill/mordernDesign.jpg"
                                    class="tilt-img img-fluid text-center" alt="skill_img">
                            </div>
                        </div>
                        <div class="col-md-6 col-12" data-aos="fade-down-left">
                            <div class="skill_deatils_sec">
                                <p class="our_skill_txt">OUR SKILL</p>
                                <h2 class="modern_txt" data-aos="fade-down" data-aos-duration="1000">Modern Digital
                                    Creative Agency</h2>
                                <p class="our_skill_desc" data-aos="fade-up" data-aos-duration="1000">Our team of
                                    skilled
                                    developers, designers, and strategists harnesses the latest technologies and
                                    industry
                                    best practices to bring your software dreams to life. Whether it's creating
                                    user-friendly mobile applications, building robust web platforms, or implementing
                                    advanced data analytics solutions, we thrive on pushing the boundaries of what's
                                    possible.</p>
                                <div class="skill-bars" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="progresbar-counter position-relative">
                                        <h3 class="progress-title">product development</h3>
                                        <div class="progress-value"><span class="count c-counter"
                                                data-number="80">80</span>%
                                        </div>
                                        <div class="skil-progressbar"><span style="width:80%;"></span></div>
                                    </div>
                                    <div class="progresbar-counter position-relative">
                                        <h3 class="progress-title">digital marketing</h3>
                                        <div class="progress-value"><span class="count c-counter"
                                                data-number="90">90</span>%
                                        </div>
                                        <div class="skil-progressbar"><span style="width:90%;"></span></div>
                                    </div>
                                    <div class="progresbar-counter position-relative">
                                        <h3 class="progress-title">business consulting</h3>
                                        <div class="progress-value"><span class="count c-counter"
                                                data-number="75">75</span>%
                                        </div>
                                        <div class="skil-progressbar"><span style="width:75%;"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Skills Section End -->

            <!-- Counter Section Start -->
            <section id="counter_sec">
                <div class="container">
                    <div class="row counter_full_sec" data-aos="fade-up" data-aos-duration="1000">
                        <div class="col-md-3 col-sm-6">
                            <div class="counter_details">
                                <h3 class="counter_txt" data-number="256" id="number1">256</h3>
                                <p class="counter_heading">PROJECT COMPLETED</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mt-counter1">
                            <div class="counter_details">
                                <h3 class="counter_txt" data-number="860" id="number2">860</h3>
                                <p class="counter_heading">CUPS CONSUMED</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mt-counter">
                            <div class="counter_details">
                                <h3 class="counter_txt" data-number="200" id="number3">200</h3>
                                <p class="counter_heading">SATISFIED CLIENTS</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mt-counter">
                            <div class="counter_details">
                                <h3 class="counter_txt" data-number="80" id="number4">80</h3>
                                <p class="counter_heading">EXPERT AVAILABEL</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Counter Section End -->

            <!-- Idea Section Start -->
            <section id="idea_sec">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-12">
                            <h3 class="idea_sec_txt" data-aos="fade-right" data-aos-duration="1000">Do you have any
                                ideas?</h3>
                        </div>
                        <div class="col-lg-5 col-md-5 col-12 idea_mt">
                            <div class="contact_btn_sec d-flex justify-content-end" data-aos="fade-left"
                                data-aos-duration="3000">
                                <div class="contact_button">
                                    <a href="#contact_sec" class="btn contact_btn p-0 button_design">CONTACT US</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Idea Section End -->

            <!--Portfolio Section Start -->
            <section id="portfolio_sec">
                <div class="container">
                    <div class="portfolio_top_sec">
                        <p class="orange_box d-flex align-items-center justify-content-center">PORTFOLIO</p>
                    </div>
                    <div class="row portfolio-_mt">
                        <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-right" data-aos-duration="1000">
                            <div class="portfolio_sec_full position-relative portfolio_box portfolio_box1 ">
                                <div class="portfolio_image">
                                    <img class="img-fluid" src="assets/images/portfolio/portfolio-4.jpg"
                                        alt="portfolio-image">
                                </div>
                                <div class="portfolio_overlay"></div>
                                <div class="portfolio_content" data-bs-toggle="modal"
                                    data-bs-target="#portfolio_modal_3">
                                    <div class="portfolio-title">
                                        <h4>LEADERSHIP</h4>
                                    </div>
                                    <div class="portfolio_middle_content d-flex ">
                                        <div class="portfolio_name">
                                            <h5>Businesses Growth
                                            </h5>
                                        </div>
                                        <!-- <div class="portfolio_icon d-flex align-items-end">
                                            <a href="javascript:void(0)" class="portfolio_button position-relative">
                                                <svg width="36" height="24" viewBox="0 0 36 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M28.172 11.0002L22.808 5.63617L24.222 4.22217L32 12.0002L24.222 19.7782L22.808 18.3642L28.172 13.0002H4V11.0002H28.172Z" fill="white" />
                                                </svg>
                                            </a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                            <div class="portfolio_sec_full position-relative portfolio_box portfolio_box2">
                                <div class="portfolio_image">
                                    <img class="img-fluid" src="assets/images/portfolio/portfolio-5.jpg"
                                        alt="portfolio-image">
                                </div>
                                <div class="portfolio_overlay"></div>
                                <div class="portfolio_content" data-bs-toggle="modal"
                                    data-bs-target="#portfolio_modal_3">
                                    <div class="portfolio-title">
                                        <h4>management</h4>
                                    </div>
                                    <div class="portfolio_middle_content d-flex ">
                                        <div class="portfolio_name">
                                            <h5>marketing
                                                advice</h5>
                                        </div>
                                        <!-- <div class="portfolio_icon d-flex align-items-end">
                                            <a href="javascript:void(0)" class="portfolio_button position-relative">
                                                <svg width="36" height="24" viewBox="0 0 36 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M28.172 11.0002L22.808 5.63617L24.222 4.22217L32 12.0002L24.222 19.7782L22.808 18.3642L28.172 13.0002H4V11.0002H28.172Z" fill="white" />
                                                </svg>
                                            </a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-left" data-aos-duration="1000">
                            <div class="portfolio_sec_full position-relative portfolio_box portfolio_box3 ">
                                <div class="portfolio_image">
                                    <img class="img-fluid " src="assets/images/portfolio/portfolio-6.jpg"
                                        alt="portfolio-image">
                                    <div class="portfolio_overlay"></div>
                                </div>
                                <div class="portfolio_content" data-bs-toggle="modal"
                                    data-bs-target="#portfolio_modal_3">
                                    <div class="portfolio-title">
                                        <h4>STRATEGY</h4>
                                    </div>
                                    <div class="portfolio_middle_content d-flex">
                                        <div class="portfolio_name">
                                            <h5>Website Design
                                            </h5>
                                        </div>
                                        <!-- <div class="portfolio_icon d-flex align-items-end">
                                            <a href="javascript:void(0)" class="portfolio_button position-relative"  >
                                                <svg width="36" height="24" viewBox="0 0 36 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M28.172 11.0002L22.808 5.63617L24.222 4.22217L32 12.0002L24.222 19.7782L22.808 18.3642L28.172 13.0002H4V11.0002H28.172Z" fill="white" />
                                                </svg>
                                            </a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Portfolio Section End -->

            <!--Portfolio Modal Start -->
            <div class="modal fade modal-fullscreen portfolio_modal" id="portfolio_modal_3">
                <div class="modal-dialog portfolio_modal_dialog">
                    <div class="modal-content portfolio_modal_content">
                        <button type="button" class="btn-close portfolio_btn_close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <svg width="20" height="20" viewBox="0 0 14 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.99999 5.586L11.95 0.636002L13.364 2.05L8.41399 7L13.364 11.95L11.95 13.364L6.99999 8.414L2.04999 13.364L0.635986 11.95L5.58599 7L0.635986 2.05L2.04999 0.636002L6.99999 5.586Z"
                                    fill="white"></path>
                            </svg>
                        </button>
                        <div class="modal-body portfolio_modal_body">
                            <div class="porfolio_popup_img_sec position-relative">
                                <img src="assets/images/portfolio/popup-1.jpg" class="img-fluid"
                                    alt="portfolio-image">
                                <div class="overlay-box">
                                    <div class="content">
                                        <ul>
                                            <li><span>Client: </span>Rasalina De Willam (USA)</li>
                                            <li><span>Date: </span>March 21, 2020</li>
                                            <li><span>Category: </span>Technology</li>
                                            <li>
                                                <span>Share: </span>
                                                <a href="https://www.facebook.com/" target="_blank"
                                                    class="fa fa-facebook-f"></a>
                                                <a href="https://www.instagram.com/" target="_blank"
                                                    class="fa fa-instagram"></a>
                                                <a href="https://twitter.com/" target="_blank"
                                                    class="fa fa-twitter"></a>
                                                <a href="https://in.pinterest.com/" target="_blank"
                                                    class="fa fa-pinterest-p"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio_popup_second">
                                <h3>Developing A Small Finance Framework</h3>
                                <p>Business growth is a phenomenon that occurs when business owners, employees and
                                    outside
                                    factors influence the success of a company. A business grows when it expands a
                                    customer
                                    base, increases revenue or produces more product.
                                    Growth is the goal of most businesses and is the reason behind many decisions that
                                    affect the daily workings of a company both internally and externally. Business
                                    growth
                                    is impacted by consumer trends, market opportunities and decisions made by company
                                    leadership.</p>
                                <div class="row portfolio_img_sec_pop">
                                    <div class="col-6">
                                        <img src="assets/images/portfolio/popup-2.jpg" class="img-fluid"
                                            alt="portfolio-image">
                                    </div>
                                    <div class="col-6">
                                        <img src="assets/images/portfolio/popup-3.jpg" class="img-fluid"
                                            alt="portfolio-image">
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio_popup_third">
                                <h4>Finance Growth Strategies:</h4>
                                <ul class="growth_details">
                                    <li>Market Penetration</li>
                                    <li>Product Development</li>
                                    <li>Market Expansion</li>
                                    <li>New Business Models</li>
                                    <li>Market Segmentation</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Portfolio Modal  End -->

            <!-- Pricing Section Start -->
            <!-- <section id="pricing_sec">
                <div class="container">
                    <div class="pricing_top_sec">
                        <p class="orange_box d-flex align-items-center justify-content-center">PRICING</p>
                    </div>
                    <div class="pricing_middle_sec">
                        <h2 class="we_offer_txt" data-aos="fade-down" data-aos-duration="1000">We offer the best pricing plan for you</h2>
                    </div>
                    <div class="row price_full_sec">
                        <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                            <div class="pricing_table">
                                <h3 class="basic_txt">Basic</h3>
                                <p class="lince_txt">LICENCE</p>
                                <h3 class="price_digit">$29</h3>
                                <p class="per_txt">PER MONTH</p>
                                <ul class="price_deatails">
                                    <li>High Quality Logo</li>
                                    <li>Premium Stock Photos</li>
                                    <li>Premium Stock Icons</li>
                                    <li class="color_price">Unlimited Revision</li>
                                    <li class="color_price">PNG, SVG Format Readyn</li>
                                    <li class="color_price">Live Chat Support</li>
                                </ul>
                                <div class="price_bottom">
                                    <button class="plan_btn button_design1"  data-bs-toggle="modal" data-bs-target="#price_modal" type="button">CHOOSE PLAN</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 price_mt1" data-aos="fade-up" data-aos-duration="1000">
                            <div class="pricing_table">
                                <h3 class="basic_txt">Standard</h3>
                                <p class="lince_txt">LICENCE</p>
                                <h3 class="price_digit">$59</h3>
                                <p class="per_txt">PER MONTH</p>
                                <ul class="price_deatails">
                                    <li>High Quality Logo</li>
                                    <li>Premium Stock Photos</li>
                                    <li>Premium Stock Icons</li>
                                    <li>Unlimited Revision</li>
                                    <li class="color_price">PNG, SVG Format Readyn</li>
                                    <li class="color_price">Live Chat Support</li>
                                </ul>
                                <div class="price_bottom">
                                    <button class="plan_btn button_design1"  data-bs-toggle="modal" data-bs-target="#price_modal"  type="button">CHOOSE PLAN</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 price_mt2" data-aos="fade-up" data-aos-duration="1000">
                            <div class="pricing_table">
                                <h3 class="basic_txt">Premium</h3>
                                <p class="lince_txt">LICENCE</p>
                                <h3 class="price_digit">$99</h3>
                                <p class="per_txt">PER MONTH</p>
                                <ul class="price_deatails">
                                    <li>High Quality Logo</li>
                                    <li>Premium Stock Photos</li>
                                    <li>Premium Stock Icons</li>
                                    <li>Unlimited Revision</li>
                                    <li>PNG, SVG Format Readyn</li>
                                    <li>Live Chat Support</li>
                                </ul>
                                <div class="price_bottom">
                                    <button class="plan_btn button_design1" data-bs-toggle="modal" data-bs-target="#price_modal" type="button">CHOOSE PLAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- Pricing Section End -->

            <!-- Pricing Section Modal Start -->
            <div class="modal fade modal-fullscreen" id="price_modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog price_modal_dialog">
                    <div class="modal-content price_modal_content">
                        <button type="button" class="price_btn_close" data-bs-dismiss="modal" aria-label="Close">
                            <svg width="20" height="20" viewBox="0 0 14 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.99999 5.586L11.95 0.636002L13.364 2.05L8.41399 7L13.364 11.95L11.95 13.364L6.99999 8.414L2.04999 13.364L0.635986 11.95L5.58599 7L0.635986 2.05L2.04999 0.636002L6.99999 5.586Z"
                                    fill="white"></path>
                            </svg>
                        </button>
                        <div class="modal-body price_modal_body">
                            <div class="price_modal_heading text-center">
                                <h3>select your pricing plan</h3>
                            </div>
                            <form id="price_form" action="#" method="get" autocomplete="on">
                                <div class="row price_popup_row">
                                    <div class="col-12 price_username price_popup_column">
                                        <label class="price_label" for="username">name</label>
                                        <input class="price_field text_form" type="text" name="username"
                                            id="username" placeholder="enter your name" required>
                                    </div>
                                    <div class="col-12 price_email price_popup_column price_upper_space">
                                        <label class="price_label" for="email">email</label>
                                        <input class="price_field text_form" type="text" name="email"
                                            id="email" placeholder="enter your email" required>
                                    </div>
                                    <div class="col-12 price_number price_popup_column price_upper_space">
                                        <label class="price_label" for="number">phone number:</label>
                                        <input class="price_field" type="tel" name=number id="number"
                                            placeholder="+00 (000) 000 000 " required>
                                    </div>
                                    <div class="col-12 price_plan price_popup_column price_upper_space">
                                        <label class="price_label" for="plan">select plan:</label>
                                        <select class="price_field custom-select" name="plans" id="plan">
                                            <option class="price_option" value="basic">Basic - $29</option>
                                            <option class="price_option" value="optimal">Standard - $59</option>
                                            <option class="price_option" value="premium">Premium - $99</option>
                                        </select>
                                    </div>
                                    <div class="col-12 price_message price_popup_column price_upper_space">
                                        <label class="price_label" for="message">message:</label>
                                        <textarea class="price_textarea text_form" name="message" id="message" placeholder="Write your message here"></textarea>
                                    </div>
                                </div>
                                <div class="price_popup_button text-center">
                                    <button class="button_design send_message_button" type="submit">send
                                        message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pricing Section Modal End -->

            <!-- Map Section Start -->
            <section id="map_section">
                <h2 class="d-none">None</h2>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.0516820423622!2d72.86432791540423!3d21.229799086259437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f8b88954ca5%3A0x21fa8939798dde5d!2sUPSQODE!5e0!3m2!1sen!2sin!4v1680591615385!5m2!1sen!2sin"
                    width="1920" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>
            <!-- Map Section End -->

            <!-- Contact Section Start -->
            <section id="contact_sec">
                <div class="container">
                    <div class="contactt_top_sec">
                        <p class="orange_box d-flex align-items-center justify-content-center">Contact</p>
                    </div>
                    <div class="row contact_top" data-aos="fade-up" data-aos-duration="1000">
                        <div class="col-lg-6 col-12 text-center" data-aos="fade-right" data-aos-duration="1000">
                            <img src="assets/images/contact/contact-2.jpg" class="contact_imgg tilt-img"
                                alt="contact_img">
                        </div>
                        <div class="col-lg-6 col-12" data-aos="fade-left" data-aos-duration="1000">
                            <div class="contact_second_section">
                                <h2>Let’s start Working</h2>
                                <p>Join us on the exciting journey of digital transformation, where your business can
                                    thrive
                                    and achieve remarkable success. Contact SysTech today to unlock the power of
                                    technology
                                    and experience excellence in software solutions.</p>
                                <form class="form" autocomplete="on">
                                    <div class="form_name position-relative">
                                        <input class="form_field" type="text" placeholder="NAME" required="">
                                        <span class="border-bottom"></span>
                                        <svg class="svg_position name_svg" width="18" height="18"
                                            viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2 18C2 16.1814 2.72245 14.4372 4.00841 13.1513C5.29437 11.8653 7.03852 11.1429 8.85714 11.1429C10.6758 11.1429 12.4199 11.8653 13.7059 13.1513C14.9918 14.4372 15.7143 16.1814 15.7143 18H14C14 16.636 13.4582 15.3279 12.4937 14.3635C11.5292 13.399 10.2211 12.8571 8.85714 12.8571C7.49317 12.8571 6.18507 13.399 5.22059 14.3635C4.25612 15.3279 3.71429 16.636 3.71429 18H2ZM8.85714 10.2857C6.01571 10.2857 3.71429 7.98429 3.71429 5.14286C3.71429 2.30143 6.01571 0 8.85714 0C11.6986 0 14 2.30143 14 5.14286C14 7.98429 11.6986 10.2857 8.85714 10.2857ZM8.85714 8.57143C10.7514 8.57143 12.2857 7.03714 12.2857 5.14286C12.2857 3.24857 10.7514 1.71429 8.85714 1.71429C6.96286 1.71429 5.42857 3.24857 5.42857 5.14286C5.42857 7.03714 6.96286 8.57143 8.85714 8.57143Z"
                                                fill="#141414"></path>
                                        </svg>
                                    </div>
                                    <div class="form_email position-relative upper-space">
                                        <input class="form_field" type="email" placeholder="EMAIL" required="">
                                        <span class="border-bottom"></span>
                                        <svg class="svg_position email_svg" width="18" height="18"
                                            viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.9 1H17.1C17.3387 1 17.5676 1.09482 17.7364 1.2636C17.9052 1.43239 18 1.66131 18 1.9V16.3C18 16.5387 17.9052 16.7676 17.7364 16.9364C17.5676 17.1052 17.3387 17.2 17.1 17.2H0.9C0.661305 17.2 0.432387 17.1052 0.263604 16.9364C0.0948211 16.7676 0 16.5387 0 16.3V1.9C0 1.66131 0.0948211 1.43239 0.263604 1.2636C0.432387 1.09482 0.661305 1 0.9 1ZM16.2 4.8142L9.0648 11.2042L1.8 4.7944V15.4H16.2V4.8142ZM2.2599 2.8L9.0549 8.7958L15.7518 2.8H2.2599Z"
                                                fill="#141414"></path>
                                        </svg>
                                    </div>
                                    <div class="form_message position-relative upper-space">
                                        <textarea class="message_textarea" placeholder="MESSAGE"></textarea>
                                        <span class="border-bottom"></span>
                                        <svg class="svg_position message_svg" width="18" height="18"
                                            viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_59_44)">
                                                <path
                                                    d="M12.7487 6.66761L11.3324 5.25131L2.00325 14.5805V15.9967H3.41955L12.7487 6.66761ZM14.165 5.25131L15.5813 3.83501L14.165 2.41871L12.7487 3.83501L14.165 5.25131ZM4.2489 18H0V13.7501L13.4568 0.293263C13.6447 0.105487 13.8994 0 14.165 0C14.4306 0 14.6853 0.105487 14.8731 0.293263L17.7067 3.12686C17.8945 3.31469 18 3.56942 18 3.83501C18 4.10061 17.8945 4.35533 17.7067 4.54316L4.2499 18H4.2489Z"
                                                    fill="#141414"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_59_44">
                                                    <rect width="18" height="18" fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="form_button">
                                        <button class="button_design send_button" type="submit">SEND</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row contact_bottom_second_Sec" data-aos="fade-up" data-aos-duration="1000">
                        <h3 class="d-none">none</h3>
                        <div class="col-md-4 col-sm-6">
                            <div class="detail_box detail_box1">
                                <div class="detail_info d-flex">
                                    <div class="detail_icon detail_icon_1 position-relative">
                                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_61_51)">
                                                <path
                                                    d="M40.25 7.5C39.9148 9.14982 39.9148 10.8502 40.25 12.5H11.2775L30.1525 29.155L42.775 17.855C43.84 19.1725 45.17 20.27 46.6825 21.0675L30.18 35.845L10 18.04V47.5H50V22.25C51.6498 22.5852 53.3502 22.5852 55 22.25V50C55 50.663 54.7366 51.2989 54.2678 51.7678C53.7989 52.2366 53.163 52.5 52.5 52.5H7.5C6.83696 52.5 6.20107 52.2366 5.73223 51.7678C5.26339 51.2989 5 50.663 5 50V10C5 9.33696 5.26339 8.70107 5.73223 8.23223C6.20107 7.76339 6.83696 7.5 7.5 7.5H40.25ZM52.5 17.5C51.5151 17.5 50.5398 17.306 49.6299 16.9291C48.7199 16.5522 47.8931 15.9997 47.1967 15.3033C46.5003 14.6069 45.9478 13.7801 45.5709 12.8701C45.194 11.9602 45 10.9849 45 10C45 9.01509 45.194 8.03982 45.5709 7.12987C45.9478 6.21993 46.5003 5.39314 47.1967 4.6967C47.8931 4.00026 48.7199 3.44781 49.6299 3.0709C50.5398 2.69399 51.5151 2.5 52.5 2.5C54.4891 2.5 56.3968 3.29018 57.8033 4.6967C59.2098 6.10322 60 8.01088 60 10C60 11.9891 59.2098 13.8968 57.8033 15.3033C56.3968 16.7098 54.4891 17.5 52.5 17.5Z"
                                                    fill="#FD8558" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_61_51">
                                                    <rect width="60" height="60" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                    </div>
                                    <div class="detail_content">
                                        <div class="detail_title detail_title_1">
                                            <h4>let's talk</h4>
                                        </div>
                                        <div class="detail_contact_number">
                                            <h5>Phone:&nbsp;<span class="mob_no"><a
                                                        href="tel:+254798702075">+254798702075</a></span></h5>

                                            <h5>Email:&nbsp;<span class="con_email"><a
                                                        href="mailto:info@reecesoftwares.xyz">info@reecesoftwares.xyz</a></span>
                                            </h5>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="detail_box detail_box2">
                                <div class="detail_info d-flex">
                                    <div class="detail_icon detail_icon_2 position-relative">
                                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_61_59)">
                                                <path
                                                    d="M30 55C16.1925 55 5 43.8075 5 30C5 16.1925 16.1925 5 30 5C43.8075 5 55 16.1925 55 30C55 43.8075 43.8075 55 30 55ZM24.275 49.1675C21.8085 43.9358 20.3797 38.2755 20.0675 32.5H10.155C10.6415 36.3472 12.2348 39.9704 14.7414 42.9293C17.248 45.8881 20.56 48.0553 24.275 49.1675V49.1675ZM25.075 32.5C25.4525 38.5975 27.195 44.325 30 49.38C32.8808 44.1914 34.5636 38.4237 34.925 32.5H25.075V32.5ZM49.845 32.5H39.9325C39.6203 38.2755 38.1915 43.9358 35.725 49.1675C39.44 48.0553 42.752 45.8881 45.2586 42.9293C47.7652 39.9704 49.3585 36.3472 49.845 32.5V32.5ZM10.155 27.5H20.0675C20.3797 21.7245 21.8085 16.0642 24.275 10.8325C20.56 11.9447 17.248 14.1119 14.7414 17.0707C12.2348 20.0296 10.6415 23.6528 10.155 27.5V27.5ZM25.0775 27.5H34.9225C34.5619 21.5765 32.8799 15.8088 30 10.62C27.1192 15.8086 25.4364 21.5763 25.075 27.5H25.0775ZM35.725 10.8325C38.1915 16.0642 39.6203 21.7245 39.9325 27.5H49.845C49.3585 23.6528 47.7652 20.0296 45.2586 17.0707C42.752 14.1119 39.44 11.9447 35.725 10.8325V10.8325Z"
                                                    fill="#706DF9" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_61_59">
                                                    <rect width="60" height="60" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                    </div>
                                    <div class="detail_content">
                                        <div class="detail_title detail_title_2">
                                            <h4>VISITING HERE</h4>
                                        </div>
                                        <div class="detail_contact_number">
                                            <p>1870 Get away drive,
                                                Nairobi, Kenya</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="detail_box detail_box3">
                                <div class="detail_info d-flex">
                                    <div class="detail_icon detail_icon_3 position-relative">
                                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_61_64)">
                                                <path
                                                    d="M30 55C16.1925 55 5 43.8075 5 30C5 16.1925 16.1925 5 30 5C43.8075 5 55 16.1925 55 30C55 43.8075 43.8075 55 30 55ZM30 50C35.3043 50 40.3914 47.8929 44.1421 44.1421C47.8929 40.3914 50 35.3043 50 30C50 24.6957 47.8929 19.6086 44.1421 15.8579C40.3914 12.1071 35.3043 10 30 10C24.6957 10 19.6086 12.1071 15.8579 15.8579C12.1071 19.6086 10 24.6957 10 30C10 35.3043 12.1071 40.3914 15.8579 44.1421C19.6086 47.8929 24.6957 50 30 50V50ZM32.5 30H42.5V35H27.5V17.5H32.5V30Z"
                                                    fill="#2BF06E" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_61_64">
                                                    <rect width="60" height="60" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                    </div>
                                    <div class="detail_content">
                                        <div class="detail_title detail_title_3">
                                            <h4>TIMING</h4>
                                        </div>
                                        <div class="detail_contact_number">
                                            <h5>Mon - Fri:&nbsp;<span>8 am to 5 pm</span></h5>
                                            <h5>Sat:&nbsp;<span>9 am to 2 pm</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer Section Start -->
            <footer id="footer_section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer_top_section">
                                <div class="footer_heading text-center">
                                    <h4 data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000"><a
                                            href="mailto:info@reecesoftwares.xyz">info@reecesoftwares.xyz</a></h4>
                                    <div class="footer_line position-relative">
                                        <hr class="footer_divider">
                                    </div>
                                </div>
                                <div class="footer_social_icon d-flex justify-content-center ">
                                    <div class="social_icon d-flex justify-content-center align-items-center">
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_65_98)">
                                                    <path
                                                        d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47 14 5.5 16 5.5H17.5V2.14C17.174 2.097 15.943 2 14.643 2C11.928 2 10 3.657 10 6.7V9.5H7V13.5H10V22H14V13.5Z"
                                                        fill="#808080" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_65_98">
                                                        <rect width="24" height="24" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="social_icon d-flex justify-content-center align-items-center">
                                        <a href="https://twitter.com/" target="_blank">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_65_103)">
                                                    <path
                                                        d="M22.162 5.65593C21.3986 5.99362 20.589 6.2154 19.76 6.31393C20.6337 5.79136 21.2877 4.96894 21.6 3.99993C20.78 4.48793 19.881 4.82993 18.944 5.01493C18.3146 4.34151 17.4804 3.89489 16.5709 3.74451C15.6615 3.59413 14.7279 3.74842 13.9153 4.18338C13.1026 4.61834 12.4564 5.30961 12.0771 6.14972C11.6978 6.98983 11.6067 7.93171 11.818 8.82893C10.1551 8.74558 8.52832 8.31345 7.04328 7.56059C5.55823 6.80773 4.24812 5.75097 3.19799 4.45893C2.82628 5.09738 2.63095 5.82315 2.63199 6.56193C2.63199 8.01193 3.36999 9.29293 4.49199 10.0429C3.828 10.022 3.17862 9.84271 2.59799 9.51993V9.57193C2.59819 10.5376 2.93236 11.4735 3.54384 12.221C4.15532 12.9684 5.00647 13.4814 5.95299 13.6729C5.33661 13.84 4.6903 13.8646 4.06299 13.7449C4.32986 14.5762 4.85 15.3031 5.55058 15.824C6.25117 16.3449 7.09712 16.6337 7.96999 16.6499C7.10247 17.3313 6.10917 17.8349 5.04687 18.1321C3.98458 18.4293 2.87412 18.5142 1.77899 18.3819C3.69069 19.6114 5.91609 20.264 8.18899 20.2619C15.882 20.2619 20.089 13.8889 20.089 8.36193C20.089 8.18193 20.084 7.99993 20.076 7.82193C20.8949 7.23009 21.6016 6.49695 22.163 5.65693L22.162 5.65593Z"
                                                        fill="#808080" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_65_103">
                                                        <rect width="24" height="24" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="social_icon d-flex justify-content-center align-items-center">
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_65_108)">
                                                    <path
                                                        d="M12 9C11.2044 9 10.4413 9.31607 9.87868 9.87868C9.31607 10.4413 9 11.2044 9 12C9 12.7956 9.31607 13.5587 9.87868 14.1213C10.4413 14.6839 11.2044 15 12 15C12.7956 15 13.5587 14.6839 14.1213 14.1213C14.6839 13.5587 15 12.7956 15 12C15 11.2044 14.6839 10.4413 14.1213 9.87868C13.5587 9.31607 12.7956 9 12 9ZM12 7C13.3261 7 14.5979 7.52678 15.5355 8.46447C16.4732 9.40215 17 10.6739 17 12C17 13.3261 16.4732 14.5979 15.5355 15.5355C14.5979 16.4732 13.3261 17 12 17C10.6739 17 9.40215 16.4732 8.46447 15.5355C7.52678 14.5979 7 13.3261 7 12C7 10.6739 7.52678 9.40215 8.46447 8.46447C9.40215 7.52678 10.6739 7 12 7ZM18.5 6.75C18.5 7.08152 18.3683 7.39946 18.1339 7.63388C17.8995 7.8683 17.5815 8 17.25 8C16.9185 8 16.6005 7.8683 16.3661 7.63388C16.1317 7.39946 16 7.08152 16 6.75C16 6.41848 16.1317 6.10054 16.3661 5.86612C16.6005 5.6317 16.9185 5.5 17.25 5.5C17.5815 5.5 17.8995 5.6317 18.1339 5.86612C18.3683 6.10054 18.5 6.41848 18.5 6.75ZM12 4C9.526 4 9.122 4.007 7.971 4.058C7.187 4.095 6.661 4.2 6.173 4.39C5.739 4.558 5.426 4.759 5.093 5.093C4.78001 5.3954 4.53935 5.76458 4.389 6.173C4.199 6.663 4.094 7.188 4.058 7.971C4.006 9.075 4 9.461 4 12C4 14.474 4.007 14.878 4.058 16.029C4.095 16.812 4.2 17.339 4.389 17.826C4.559 18.261 4.759 18.574 5.091 18.906C5.428 19.242 5.741 19.443 6.171 19.609C6.665 19.8 7.191 19.906 7.971 19.942C9.075 19.994 9.461 20 12 20C14.474 20 14.878 19.993 16.029 19.942C16.811 19.905 17.338 19.8 17.826 19.611C18.259 19.442 18.574 19.241 18.906 18.909C19.243 18.572 19.444 18.259 19.61 17.829C19.8 17.336 19.906 16.809 19.942 16.029C19.994 14.925 20 14.539 20 12C20 9.526 19.993 9.122 19.942 7.971C19.905 7.189 19.8 6.661 19.61 6.173C19.4593 5.765 19.2191 5.39596 18.907 5.093C18.6047 4.77985 18.2355 4.53917 17.827 4.389C17.337 4.199 16.811 4.094 16.029 4.058C14.925 4.006 14.539 4 12 4ZM12 2C14.717 2 15.056 2.01 16.122 2.06C17.187 2.11 17.912 2.277 18.55 2.525C19.21 2.779 19.766 3.123 20.322 3.678C20.8305 4.1779 21.224 4.78259 21.475 5.45C21.722 6.087 21.89 6.813 21.94 7.878C21.987 8.944 22 9.283 22 12C22 14.717 21.99 15.056 21.94 16.122C21.89 17.187 21.722 17.912 21.475 18.55C21.2247 19.2178 20.8311 19.8226 20.322 20.322C19.822 20.8303 19.2173 21.2238 18.55 21.475C17.913 21.722 17.187 21.89 16.122 21.94C15.056 21.987 14.717 22 12 22C9.283 22 8.944 21.99 7.878 21.94C6.813 21.89 6.088 21.722 5.45 21.475C4.78233 21.2245 4.17753 20.8309 3.678 20.322C3.16941 19.8222 2.77593 19.2175 2.525 18.55C2.277 17.913 2.11 17.187 2.06 16.122C2.013 15.056 2 14.717 2 12C2 9.283 2.01 8.944 2.06 7.878C2.11 6.812 2.277 6.088 2.525 5.45C2.77524 4.78218 3.1688 4.17732 3.678 3.678C4.17767 3.16923 4.78243 2.77573 5.45 2.525C6.088 2.277 6.812 2.11 7.878 2.06C8.944 2.013 9.283 2 12 2Z"
                                                        fill="#808080" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_65_108">
                                                        <rect width="24" height="24" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="social_icon d-flex justify-content-center align-items-center">
                                        <a href="https://www.youtube.com/" target="_blank">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_65_113)">
                                                    <path
                                                        d="M21.543 6.498C22 8.28 22 12 22 12C22 12 22 15.72 21.543 17.502C21.289 18.487 20.546 19.262 19.605 19.524C17.896 20 12 20 12 20C12 20 6.107 20 4.395 19.524C3.45 19.258 2.708 18.484 2.457 17.502C2 15.72 2 12 2 12C2 12 2 8.28 2.457 6.498C2.711 5.513 3.454 4.738 4.395 4.476C6.107 4 12 4 12 4C12 4 17.896 4 19.605 4.476C20.55 4.742 21.292 5.516 21.543 6.498ZM10 15.5L16 12L10 8.5V15.5Z"
                                                        fill="#808080" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_65_113">
                                                        <rect width="24" height="24" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="social_icon d-flex justify-content-center align-items-center">
                                        <a href="https://in.linkedin.com/" target="_blank">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_65_131)">
                                                    <path
                                                        d="M6.94 5.00002C6.93974 5.53046 6.72877 6.03906 6.35351 6.41394C5.97825 6.78883 5.46944 6.99929 4.939 6.99902C4.40857 6.99876 3.89997 6.78779 3.52508 6.41253C3.1502 6.03727 2.93974 5.52846 2.94 4.99802C2.94027 4.46759 3.15124 3.95899 3.5265 3.5841C3.90176 3.20922 4.41057 2.99876 4.941 2.99902C5.47144 2.99929 5.98004 3.21026 6.35492 3.58552C6.72981 3.96078 6.94027 4.46959 6.94 5.00002ZM7 8.48002H3V21H7V8.48002ZM13.32 8.48002H9.34V21H13.28V14.43C13.28 10.77 18.05 10.43 18.05 14.43V21H22V13.07C22 6.90002 14.94 7.13002 13.28 10.16L13.32 8.48002Z"
                                                        fill="#808080" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_65_131">
                                                        <rect width="24" height="24" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="social_icon d-flex justify-content-center align-items-center">
                                        <a href="https://www.behance.net/" target="_blank">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_65_134)">
                                                    <path
                                                        d="M7.443 5.34961C8.082 5.34961 8.673 5.39961 9.213 5.54761C9.70301 5.63765 10.1708 5.82244 10.59 6.09161C10.984 6.33861 11.279 6.68561 11.475 7.13061C11.672 7.57561 11.77 8.12061 11.77 8.71361C11.77 9.40661 11.623 9.99961 11.279 10.4446C10.984 10.8906 10.492 11.2856 9.902 11.5826C10.738 11.8306 11.377 12.2756 11.77 12.8686C12.164 13.4626 12.41 14.2046 12.41 15.0456C12.41 15.7386 12.262 16.3316 12.016 16.8266C11.77 17.3216 11.377 17.7666 10.934 18.0636C10.4528 18.382 9.92084 18.616 9.361 18.7556C8.771 18.9046 8.181 19.0036 7.591 19.0036H1V5.34961H7.443ZM7.049 10.8896C7.59 10.8896 8.033 10.7416 8.377 10.4946C8.721 10.2476 8.869 9.80161 8.869 9.25761C8.869 8.96061 8.819 8.66361 8.721 8.46661C8.623 8.26861 8.475 8.11961 8.279 7.97161C8.082 7.87261 7.885 7.77361 7.639 7.72461C7.393 7.67461 7.148 7.67461 6.852 7.67461H4V10.8906H7.05L7.049 10.8896ZM7.197 16.7276C7.492 16.7276 7.787 16.6776 8.033 16.6286C8.28137 16.5814 8.51628 16.48 8.721 16.3316C8.92138 16.1868 9.08903 16.0015 9.213 15.7876C9.311 15.5406 9.41 15.2436 9.41 14.8976C9.41 14.2046 9.213 13.7096 8.82 13.3636C8.426 13.0666 7.885 12.9186 7.246 12.9186H4V16.7286H7.197V16.7276ZM16.689 16.6776C17.082 17.0736 17.672 17.2716 18.459 17.2716C19 17.2716 19.492 17.1236 19.885 16.8766C20.279 16.5796 20.525 16.2826 20.623 15.9856H23.033C22.639 17.1726 22.049 18.0136 21.263 18.5576C20.475 19.0526 19.541 19.3496 18.41 19.3496C17.6864 19.3518 16.9688 19.2175 16.295 18.9536C15.6887 18.7262 15.148 18.3524 14.721 17.8656C14.2643 17.4102 13.9267 16.8494 13.738 16.2326C13.492 15.5896 13.393 14.8976 13.393 14.1056C13.393 13.3636 13.492 12.6716 13.738 12.0276C13.9745 11.4077 14.3245 10.8373 14.77 10.3456C15.213 9.90061 15.754 9.50561 16.344 9.25761C17.0007 8.99367 17.7022 8.8592 18.41 8.86161C19.246 8.86161 19.984 9.01061 20.623 9.35661C21.263 9.70261 21.754 10.0986 22.148 10.6926C22.5499 11.2631 22.8494 11.8993 23.033 12.5726C23.131 13.2646 23.18 13.9576 23.131 14.7486H16C16 15.5406 16.295 16.2826 16.689 16.6786V16.6776ZM19.787 11.4836C19.443 11.1376 18.902 10.9396 18.262 10.9396C17.82 10.9396 17.475 11.0386 17.18 11.1866C16.885 11.3356 16.689 11.5336 16.492 11.7316C16.311 11.9229 16.1912 12.1638 16.148 12.4236C16.098 12.6716 16.049 12.8686 16.049 13.0666H20.475C20.377 12.3246 20.131 11.8306 19.787 11.4836ZM15.459 6.28961H20.967V7.62561H15.46V6.28961H15.459Z"
                                                        fill="#808080" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_65_134">
                                                        <rect width="24" height="24" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="social_icon d-flex justify-content-center align-items-center">
                                        <a href="https://dribbble.com/" target="_blank">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_65_137)">
                                                    <path
                                                        d="M19.989 11.572C19.907 9.99791 19.3596 8.4836 18.416 7.221C18.1285 7.53063 17.8212 7.82124 17.496 8.091C16.4969 8.92085 15.3805 9.59819 14.183 10.101C14.35 10.451 14.503 10.79 14.638 11.11V11.113C14.6761 11.2024 14.7128 11.2924 14.748 11.383C16.262 11.213 17.858 11.275 19.405 11.484C19.611 11.512 19.805 11.542 19.989 11.572ZM10.604 4.122C11.5785 5.49517 12.4772 6.92064 13.296 8.392C14.519 7.91 15.53 7.302 16.344 6.625C16.6266 6.39213 16.8925 6.13985 17.14 5.87C15.701 4.65972 13.8803 3.99733 12 4C11.532 3.99968 11.0649 4.04017 10.604 4.121V4.122ZM4.253 9.997C4.93423 9.97981 5.61464 9.93878 6.293 9.874C7.93264 9.72734 9.55828 9.4525 11.155 9.052C10.3205 7.60221 9.41955 6.19171 8.455 4.825C7.42472 5.3354 6.51626 6.06141 5.79124 6.95379C5.06623 7.84617 4.54162 8.88404 4.253 9.997ZM5.783 17.035C6.171 16.468 6.681 15.83 7.358 15.136C8.812 13.646 10.528 12.486 12.514 11.846L12.576 11.828C12.411 11.464 12.256 11.139 12.1 10.833C10.264 11.368 8.33 11.702 6.403 11.875C5.463 11.96 4.62 11.997 4 12.003C3.99823 13.8356 4.62829 15.6128 5.784 17.035H5.783ZM15.005 19.415C14.6194 17.4703 14.0735 15.5607 13.373 13.706C11.371 14.433 9.776 15.496 8.543 16.764C8.0454 17.2664 7.60382 17.8213 7.226 18.419C8.60481 19.4478 10.2797 20.0025 12 20C13.0299 20.0015 14.0504 19.8035 15.005 19.417V19.415ZM16.878 18.34C18.4393 17.1398 19.5028 15.4057 19.865 13.47C19.525 13.385 19.094 13.3 18.62 13.234C17.5661 13.0822 16.4968 13.0711 15.44 13.201C16.0351 14.8798 16.5155 16.5971 16.878 18.341V18.34ZM12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22Z"
                                                        fill="#808080" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_65_137">
                                                        <rect width="24" height="24" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="footer_copyright">
                                    <p>© 2023 SysTech by reecesoftwares</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer Section End -->

            <!--Scroll Top to Bottom Section Start -->
            <div class="scroll-top" data-scroll="up" style="">
                <svg class="border-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
                    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
                </svg>
            </div>
            <!--Scroll Top to Bottom Section End -->

        </div>


        <script src={{ asset('assets/js/jquery-min-3.6.0.js') }}></script>
        <script src={{ asset('assets/js/slick.min.js') }}></script>
        <script src={{ asset('assets/js/aos.js') }}></script>
        <script src={{ asset('assets/js/wow.min.js') }}></script>
        <script src={{ asset('assets/js/tilt.min.js') }}></script>
        <script src={{ asset('assets/js/bootstrap.bundle.min.js') }}></script>
        <script src={{ asset('assets/js/custom.js') }}></script>

        <script>
            $(document).ready(function() {
                $('.more_btn').on('click', function() {
                    var id = $(this).data('id');
                    //define url
                    var url = "{{ route('services.show', ':id') }}";
                    $.ajax({
                        url: url.replace(':id', id),
                        type: "GET",
                        success: function(response) {
                            console.log(response);
                            $('#service-img').attr('src', response.svg_path);
                            $('#service-title').text(response.title);
                            $('#service-description').text(response.description);
                            $('.modalClass').addClass(response.svg_variant);

                            //show modal
                            $('#service_modal_1').modal('show');
                        }
                    });
                })
            });
        </script>

</body>

</html>
