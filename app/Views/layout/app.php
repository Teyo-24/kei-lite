<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= isset($meta_title) ? $meta_title : 'Default Title'; ?></title>
    <meta name="title" content="<?= isset($meta_title) ? $meta_title : 'Default Title for the website.'; ?>">
    <meta name="description" content="<?= isset($meta_description) ? $meta_description : 'Default description for the website.'; ?>">

    <?= $this->renderSection('meta'); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<style>
    .language-btn {
        padding: 5px 10px;
        /* Ubah padding sesuai keinginan */
        font-size: 0.875rem;
        /* Ubah ukuran font */
        width: 70px;
        height: 30px;
    }

    .flag-icon {
        width: 20px;
        /* Ubah ukuran bendera jika perlu */
        height: auto;
        /* Mempertahankan rasio aspek */
    }

    /* hover header */
    .social-link i {
        color: white;
        font-size: 17px;
        transition: color 0.3s ease, transform 0.3s ease;
        /* Menambahkan transisi pada transform */
    }

    .social-link:hover i {
        color: #03AADE;
        transform: scale(1.1);
        /* Menambahkan efek scaling saat hover */
    }

    .language-btn {
        background-color: transparent;
        border: 1px solid white;
        transition: all 0.3s ease;
    }

    .language-btn:hover {
        background-color: #03AADE;
        border-color: #03AADE;
    }

    .language-btn img {
        transition: transform 0.3s ease;
    }

    .language-btn:hover img {
        transform: scale(1.1);
    }

    /* end */

    /* hover navbar */
    .navbar-nav .nav-link,
    .dropdown-item {
        color: white;
        font-weight: 500;
        padding: 10px 15px;
        position: relative;
        transition: color 0.3s ease-in-out;
    }

    .navbar-nav .nav-link:hover,
    .dropdown-item:hover {
        color: #FFD700;
    }

    .navbar-nav .nav-link::before,
    .dropdown-item::before {
        content: "";
        position: absolute;
        width: 0;
        height: 3px;
        bottom: 0;
        left: 0;
        background-color: #FFD700;
        visibility: hidden;
        transition: all 0.3s ease-in-out;
    }

    .navbar-nav .nav-link:hover::before,
    .dropdown-item:hover::before {
        visibility: visible;
        width: 100%;
    }

    /* Dropdown */
    .dropdown-menu .dropdown-item {
        color: black;
        position: relative;
        transition: color 0.3s ease-in-out;
    }

    .dropdown-menu .dropdown-item:hover {
        color: #FFD700;
    }

    .dropdown-menu .dropdown-item::before {
        content: "";
        position: absolute;
        width: 0;
        height: 3px;
        bottom: 0;
        left: 0;
        background-color: #FFD700;
        visibility: hidden;
        transition: all 0.3s ease-in-out;
    }

    .dropdown-menu .dropdown-item:hover::before {
        visibility: visible;
        width: 100%;
    }

    /* end */

    /* sticky navbar */
    .navbar-custom {
        transition: background-color 0.3s ease, padding 1s ease;
    }

    .navbar-custom.scrolled {
        background-color: rgba(0, 0, 0, 0.8);
        padding: 13px 0;
    }

    .nav-link {
        color: #fff;
    }

    .container {
        overflow: visible;
    }

    .header {
        overflow: visible;
    }

    .container,
    .navbar,
    .header {
        overflow: visible !important;
    }


    /* end */
    .dropdown-menu {
        position: absolute;
        z-index: 1050;
    }

    .dropdown-menu-end {
        right: 0;
        left: auto;
    }

    #languageDropdown::after {
        border-color: black transparent transparent transparent;
    }

    /* From Uiverse.io by akshayjalluri6 */
    .container2 {
        display: flex;
    }

    .Btn {
        border: none;
        border-radius: 50%;
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition-duration: 0.4s;
        cursor: pointer;
        position: relative;
        overflow: hidden;
        margin-left: 10px;
    }

    .instagram {
        background: #f09433;
        background: -moz-linear-gradient(45deg,
                #f09433 0%,
                #e6683c 25%,
                #dc2743 50%,
                #cc2366 75%,
                #bc1888 100%);
        background: -webkit-linear-gradient(45deg,
                #f09433 0%,
                #e6683c 25%,
                #dc2743 50%,
                #cc2366 75%,
                #bc1888 100%);
        background: linear-gradient(45deg,
                #f09433 0%,
                #e6683c 25%,
                #dc2743 50%,
                #cc2366 75%,
                #bc1888 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f09433', endColorstr='#bc1888', GradientType=1);
    }

    .youtube {
        background-color: #ff0000;
    }

    .twitter {
        background-color: #1da1f2;
    }

    .Btn:hover {
        width: 110px;
        transition-duration: 0.4s;
        border-radius: 30px;
    }

    .Btn:hover .text {
        opacity: 1;
        transition-duration: 0.4s;
    }

    .Btn:hover .svgIcon {
        opacity: 0;
        transition-duration: 0.3s;
    }

    .text {
        position: absolute;
        color: rgb(255, 255, 255);
        width: 120px;
        font-weight: 600;
        opacity: 0;
        transition-duration: 0.4s;
    }

    .svgIcon {
        transition-duration: 0.3s;
    }

    .svgIcon path {
        fill: white;
    }

    /* end */

    .whatsapp-float {
        position: fixed;
        width: 50px;
        height: 50px;
        bottom: 20px;
        right: 30px;
        background-color: #25d366;
        color: white;
        /* Warna ikon */
        border-radius: 50%;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        z-index: 1000;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .whatsapp-float i {
        color: white;
        /* Warna ikon tetap putih */
    }

    .whatsapp-float:hover {
        background-color: #128c7e;
        /* Warna latar belakang saat hover */
        text-decoration: none;
    }

    /* footer hover */
    .footer-link {
        color: #fff;
        text-decoration: none;
        position: relative;
        transition: color 0.3s ease;
    }

    .footer-link:hover {
        color: #FFD700;
    }

    .footer-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        background-color: #FFD700;
        bottom: -5px;
        left: 0;
        transition: width 0.3s ease;
    }

    .footer-link:hover::after {
        width: 100%;
    }

    h5 {
        font-size: 1.2rem;
    }

    p {
        margin-bottom: 10px;
    }

    /* end */

    /* jarak footer */
    .list-unstyled p {
        margin-bottom: 20px;
    }

    /* end */

    /* footer facebook */
    .Btn.facebook {
        background-color: blue;
    }

    .Btn.facebook:hover {
        background-color: darkblue;
    }

    /* end */

    @media (max-width: 768px) {
        .icon {
            font-size: 10px;
            position: relative;
            left: 20px;
        }

        .border-top {
            width: 90px !important;
            height: 1.5px !important;
            margin: 15px 0 !important;
        }

        .border-top2 {
            margin-right: 20px;
        }

        .bottom-footer p {
            margin-left: 50px;
        }

        .navbar img {
            margin-left: 20px;
        }

        .footer img {
            margin-left: 20px;
        }

        .col-md-6 p {
            margin-left: 20px;
        }

        .container2 {
            margin-left: 20px;
        }
    }

    @media (max-width: 576px) {

        .header,
        .container,
        .head {
            width: 100%;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            overflow: hidden;
        }

        .icon {
            font-size: 8px;
        }


        .bottom-footer {
            text-align: center;
        }

        .footer img {
            margin-left: 40px;
        }

        .footer p {
            margin-left: 40px;
        }

        .footer a {
            margin-left: 10px;
        }

        .footer h5 {
            margin-left: 40px;
        }

        .col-md-2 p {
            margin-left: 30px;
        }
    }


    @media (max-width: 425px) {

        .header,
        .container,
        .head {
            width: 100%;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            overflow: hidden;
        }

        .navbar-custom button {
            margin-right: 10px;
        }

        .icon-text {
            font-size: 6px;
            margin-left: 5px;
        }

        .head .dropdown {
            margin-right: 5px;
        }

        .border-top2 {
            position: relative;
            left: 10px;
        }

        .sosmed i {
            font-size: 15px;
            position: relative;
            left: 25px;
        }

        .kei {
            margin-left: 5px;
        }

        .navbar-toggler {
            margin-right: 5px;
        }

        .footer img {
            margin-left: 30px;
        }

        .footer p {
            margin-left: 35px;
            font-size: 10px;
        }

        .col-md-2 h5 {
            margin-left: 35px;
        }

        .col-md-2 p {
            margin-left: 25px;
        }

        .py-4 p {
            font-size: 11px;
            position: relative;
            left: 10px;
            top: 4px;
        }

        .bottom-footer p {
            margin-right: 60px;
        }
    }

    @media (max-width: 375px) {

        .header,
        .head {
            width: 100%;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            overflow: hidden;
        }

        .icon-text {
            font-size: 4.5px;
        }



        .head .dropdown {
            margin-right: 5px;
        }

        .sosmed i {
            font-size: 15px;
            position: relative;
            left: 25px;
        }

        .border-top2 {
            position: relative;
            left: 10px;
        }

        .kei {
            margin-left: 5px;
        }

        .navbar-toggler {
            margin-right: 5px;
        }

        .footer img {
            margin-left: 25px;
        }

        .footer p {
            margin-left: 30px;
            font-size: 13px;
        }

        .col-md-2 h5 {
            margin-left: 30px;
        }

        .col-md-2 p {
            margin-left: 20px;
        }

        .py-4 p {
            font-size: 11px;
            position: relative;
            right: 20px;
            top: 4px;
        }
    }

    @media (max-width: 320px) {

        .header,
        .container,
        .head {
            width: 100%;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            overflow: hidden;
        }

        .icon-text {
            font-size: 3, 5px;
        }

        .social-link {
            width: 2px;
            position: relative;
            right: 15px;
            margin-left: 10px;
        }

        .language-btn {
            width: 50px;
            margin-right: 5px;
        }

        .navbar-toggler {
            margin-right: 5px;
        }

        .kei {
            margin-left: 5px;
        }

        .col-md-6 p {
            margin-left: 25px;
            font-size: 10px;
        }

        .col-md-6 a {
            position: relative;
            right: 10px;
        }

        .col-md-6 img {
            margin-left: 15px;
        }

        .col-md-2 p {
            margin-left: 20px;
        }

        .col-md-2 h5 {
            margin-left: 28px;
        }

        .sosmed i {
            margin-left: 15px;
            font-size: 15px;
        }

        .login {
            width: 40px;
            height: 25px;
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            /* Dropdown muncul tepat di bawah tombol */
            left: 0;
            right: 0;
            z-index: 1060;
            /* Pastikan dropdown muncul di atas navbar */
            background-color: white;
            width: 100%;
        }

        .language-btn {
            padding: 5px 10px;
            font-size: 0.875rem;
            width: 70px;
            height: 30px;
        }
    }
</style>

<body>
    <?php
    // Ambil bahasa yang disimpan di session
    $lang = session()->get('lang') ?? 'id'; // Default ke 'en' jika tidak ada di session

    $current_url = uri_string();

    // Ambil query string (misalnya ?keyword=sukses)
    $query_string = $_SERVER['QUERY_STRING']; // Mengambil query string dari URL

    // Simpan segmen bahasa saat ini
    $lang_segment = substr($current_url, 0, strpos($current_url, '/') + 1); // Menyimpan 'id/' atau 'en/'

    // Definisikan tautan untuk setiap halaman berdasarkan bahasa
    $homeLink = ($lang_segment === 'en/') ? '/' : '/';
    $aboutLink = ($lang_segment === 'en/') ? 'about-us' : 'tentang-kami';
    $belajarEksporLink = ($lang_segment === 'en/') ? 'export-lessons' : 'materi-ekspor';
    $pendaftaranLink = ($lang_segment === 'en/') ? 'registration' : 'pendaftaran';
    $videoTutorialLink = ($lang_segment === 'en/') ? 'tutorial-video' : 'video-tutorial';
    $memberLink = ($lang_segment === 'en/') ? 'data-member' : 'data-member';
    $buyersLink = ($lang_segment === 'en/') ? 'data-buyers' : 'data-buyers';

    // Buat array untuk menggantikan segmen berdasarkan bahasa
    $replace_map = [
        'tentang-kami' => 'about-us',
        'pendaftaran' => 'registration',
        'materi-ekspor' => 'export-lessons',
        'kategori' => 'category',
        'video-tutorial' => 'tutorial-video',
    ];

    // Ambil bagian dari URL tanpa segmen bahasa
    $url_without_lang = substr($current_url, strlen($lang_segment));

    // Tentukan bahasa yang ingin digunakan
    $new_lang_segment = ($lang_segment === 'en/') ? 'id/' : 'en/';

    // Gantikan setiap segmen dalam URL berdasarkan bahasa yang aktif
    foreach ($replace_map as $indonesian_segment => $english_segment) {
        if ($lang_segment === 'en/') {
            // Jika bahasa yang dipilih adalah 'en', maka ganti segmen ID ke EN
            $url_without_lang = str_replace($english_segment, $indonesian_segment, $url_without_lang);
        } else {
            // Jika bahasa yang dipilih adalah 'id', maka ganti segmen EN ke ID
            $url_without_lang = str_replace($indonesian_segment, $english_segment, $url_without_lang);
        }
    }

    // Tautan dengan bahasa yang baru
    $clean_url = $new_lang_segment . ltrim($url_without_lang, '/');

    // Gabungkan query string jika ada
    if (!empty($query_string)) {
        $clean_url .= '?' . $query_string;
    }


    // Tautan Bahasa Inggris
    $english_url = base_url($clean_url);

    // Tautan Bahasa Indonesia
    $indonesia_url = base_url($clean_url);
    ?>


    <!-- header -->
    <header class="header" style="background-color: #F2BF02;">
        <div class="container">
            <div class="head d-flex justify-content-between align-items-center" style="width: 100%; height: 40px;">
                <!-- Alamat dan Email -->
                <div class="icon d-flex justify-content-start">
                    <div class=" d-flex align-items-center gap-2 icon-text text-light">
                        <i class="fas fa-phone" style="color: white;"></i>
                        <a href="https://wa.me/<?= $webprofile[0]['nohp_web'] ?>" target="_blank" style="color: white; text-decoration: none;">
                            <p class="mb-0"><?= $webprofile[0]['nohp_web'] ?></p>
                        </a>
                    </div>
                    <div class="d-flex align-items-center gap-2 icon-text text-light ms-2">
                        <i class="fas fa-envelope" style="color: white;"></i>
                        <p class="mb-0" style="color: white; "><?= $webprofile[0]['email_web'] ?></p>
                    </div>
                </div>
                <!-- Ikon Sosial Media dan Garis -->
                <div class="d-flex align-items-center">
                    <div class="sosmed d-flex gap-2 me-4">
                        <a href="<?= $webprofile[0]['link_ig_web'] ?>" target="_blank" class="social-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="<?= $webprofile[0]['link_yt_web'] ?>" target="_blank" class="social-link">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="<?= $webprofile[0]['link_fb_web'] ?>" target="_blank" class="social-link">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </div>
                    <div class="border-top2" style="width: 1.5px; height: 20px; background-color: white; margin-right: 20px;"></div>
                    <div class="dropdown">
                        <button class="btn text-light language-btn" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="/img/flag-<?= $lang === 'id' ? 'id' : 'en'; ?>.png" alt="<?= $lang === 'id' ? 'Indonesian' : 'English'; ?>" class="flag-icon mb-1">
                            <i class="bi bi-chevron-down ms-1"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                            <li>
                                <a class="dropdown-item <?= $lang == 'id' ? 'disabled' : '' ?>" href="<?= $english_url ?>" <?= $lang == 'id' ? 'style="pointer-events: none; opacity: 0.5;"' : '' ?>>
                                    <img src="/img/flag-id.png" alt="Indonesian" class="flag-icon" <?= $lang == 'id' ? 'style="filter: grayscale(100%);"' : '' ?>> Indonesian
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item <?= $lang == 'en' ? 'disabled' : '' ?>" href="<?= $indonesia_url ?>" <?= $lang == 'en' ? 'style="pointer-events: none; opacity: 0.5;"' : '' ?>>
                                    <img src="/img/flag-en.png" alt="English" class="flag-icon" <?= $lang == 'en' ? 'style="filter: grayscale(100%);"' : '' ?>> English
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Language Dropdown -->
            </div>
        </div>
    </header>
    <!-- header end -->


    <!-- start navbar -->
    <nav class="navbar navbar-custom navbar-expand-lg sticky-top" style="background-color: #03AADE;">
        <div class="container d-flex justify-content-between align-items-center py-1">
            <img class="kei" onclick="window.location.href='/'" style="width:140px;" src="<?= base_url('img/' . $webprofile[0]['logo_web']); ?>" alt="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto d-flex align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/') ?>"> <?php echo lang('Blog.headerBeranda'); ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url($lang .  '/' . $aboutLink) ?>"><?php echo lang('Blog.headerTentang'); ?>
                        </a>
                    </li>
                    <div id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <button class="btn dropdown-toggle text-light nav-link" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo lang('Blog.headerArtikel'); ?>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-light">
                                    <li><a class="dropdown-item nav-link" href="<?= base_url($lang .  '/' . $belajarEksporLink) ?>"><?php echo lang('Blog.headerMateri'); ?></a></li>
                                    <li><a class="dropdown-item nav-link" href="<?= base_url($lang .  '/' . $videoTutorialLink) ?>"><?php echo lang('Blog.headerVideo'); ?></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url($lang .  '/' . $memberLink) ?>"><?php echo lang('Blog.headerMember'); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url($lang .  '/' . $pendaftaranLink) ?>"><?php echo lang('Blog.headerPendaftaran'); ?></a>
                    </li>
                    <div class="border-top line " style="width: 1.5px; height: 40px; background-color: white; margin: 0 23px;"></div>
                    <?php if (session()->get('logged_in')): ?>
                        <?php if (session()->get('role') == 'admin'): ?>
                            <a href="<?= base_url('/admin-dashboard') ?>">
                                <button type="button" class="btn btn-outline-light">Tampilan Admin</button>
                            </a>
                        <?php endif; ?>
                        <a href="<?= base_url('/logout') ?>">
                            <button type="button" class="btn btn-outline-light">Logout</button>
                        </a>
                    <?php else: ?>
                        <a href="<?= base_url('/login') ?>">
                            <button type="button" class="btn btn-outline-light login">Login</button>
                        </a>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- content -->
    <div>
        <?= $this->renderSection('content'); ?>
    </div>
    <!-- end content -->

    <a href="https://wa.me/<?= $webprofile[0]['nohp_web'] ?>" target="_blank" class="whatsapp-float">
        <i class="fab fa-whatsapp whatsapp-icon"></i>
    </a>

    <!-- start footer -->
    <footer class="mt-5" style="background-color: #03AADE; color: #fff;">
        <div class="footer py-5">
            <div class="container">
                <div class="row d-flex justify-content-center gap-5">
                    <!-- Logo and Company Description -->
                    <div class="col-md-6 mb-4">
                        <img src="<?= base_url('img/' . $webprofile[0]['logo_web']); ?>" alt="logo" style="width: 180px;">
                        <p class="mt-4"><?= ($lang == 'en') ? $webprofile[0]['deskripsi_web_en'] : $webprofile[0]['deskripsi_web'] ?></p>
                        <!-- Social Media Icons -->
                        <div class="container2 gap-2 mt-3">
                            <a href="<?= $webprofile[0]['link_ig_web'] ?>" target="_blank">
                                <button class="Btn instagram">
                                    <svg
                                        class="svgIcon"
                                        viewBox="0 0 448 512"
                                        height="1.5em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                                    </svg>
                                    <span class="text">Instagram</span>
                                </button>
                            </a>

                            <a href="<?= $webprofile[0]['link_yt_web'] ?>" target="_blank">
                                <button class="Btn youtube">
                                    <svg
                                        class="svgIcon"
                                        viewBox="0 0 576 512"
                                        height="1.5em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M549.655 148.28c-6.281-23.64-24.041-42.396-47.655-48.685C462.923 85 288 85 288 85S113.077 85 74 99.595c-23.614 6.289-41.374 25.045-47.655 48.685-12.614 47.328-12.614 147.717-12.614 147.717s0 100.39 12.614 147.718c6.281 23.64 24.041 42.396 47.655 48.684C113.077 427 288 427 288 427s174.923 0 214-14.595c23.614-6.289 41.374-25.045 47.655-48.685 12.614-47.328 12.614-147.718 12.614-147.718s0-100.389-12.614-147.717zM240 336V176l144 80-144 80z"></path>
                                    </svg>
                                    <span class="text">YouTube</span>
                                </button>
                            </a>

                            <a href="<?= $webprofile[0]['link_fb_web'] ?>" target="_blank">
                                <button class="Btn facebook">
                                    <svg
                                        class="svgIcon"
                                        viewBox="0 0 512 512"
                                        height="1.5em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.5 90.7 225.9 209 240v-168h-63v-72h63v-55.2c0-62.2 37-96.8 93.6-96.8 27.1 0 55.4 4.8 55.4 4.8v61h-31.2c-30.8 0-40.4 19.1-40.4 38.7V256h68l-11 72h-57v168c118.3-14.1 209-116.5 209-240z"
                                            fill="white"></path>
                                    </svg>
                                    <span class="text">Facebook</span>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <h5 class="mt-4"><b>Menu</b></h5>
                        <div class="list-unstyled pt-2">
                            <p><a href="<?= base_url('/') ?>" class="footer-link"><?php echo lang('Blog.headerBeranda'); ?></a></p>
                            <p><a href="<?= base_url($lang .  '/' . $aboutLink) ?>" class="footer-link"><?php echo lang('Blog.headerTentang'); ?></a></p>
                            <p><a href="<?= base_url($lang .  '/' . $belajarEksporLink) ?>" class="footer-link"><?php echo lang('Blog.headerMateri'); ?></a></p>
                            <p><a href="<?= base_url($lang .  '/' . $videoTutorialLink) ?>" class="footer-link"><?php echo lang('Blog.headerVideo'); ?></a></p>
                            <p><a href="<?= base_url($lang .  '/' . $memberLink) ?>" class="footer-link"><?php echo lang('Blog.headerMember'); ?></a></p>
                            <p><a href="<?= base_url($lang .  '/' . $pendaftaranLink) ?>" class="footer-link"><?php echo lang('Blog.headerPendaftaran'); ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <!-- Bottom Footer -->
    <div class="py-4" style="background-color: #F2BF02; height: 70px;">
        <div class="container bottom-footer">
            <p class="text-light" style="text-align: center;"><?= $webprofile[0]['footer_text'] ?></p>
        </div>
    </div>

    <script>
        window.addEventListener('scroll', function() {
            var navbar = document.querySelector('.navbar-custom');
            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        window.scrollTo({
            top: targetElement.offsetTop - navbarHeight,
            behavior: 'smooth'
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>