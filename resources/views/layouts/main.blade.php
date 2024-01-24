<!DOCTYPE html>
<html lang="RU-ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="../assets/img/favicon.png" type="image/png" />
    {{-- <title>@yield('title')</title> --}}
    <title>VALWeb: Веб Студия - По созданию Дизайнов, Разработке, Продвижению и Адаптивности сайтов.</title>
    <meta name="description" content="VALWeb">
    <meta name="keywords" content="">
    
    <!-- SEO -->
    <meta name="description" content="VALWeb - веб студия, предлагающая качественные услуги по созданию дизайнов сайтов, разработке, продвижению и адаптивности под все устройства. Индивидуальные решения для вашего бизнеса.">
    <meta name="keywords" content="веб студия, создание дизайнов, разработка сайтов, продвижение сайтов, адаптивность, веб-дизайн, веб-разработка">
    <link rel="canonical" href="https://www.valweb.ru/">

    <meta property="og:title" content="VALWeb: Веб Студия - Создание Дизайнов, Разработка, Продвижение и Адаптивность">
    <meta property="og:description" content="VALWeb - веб студия, предлагающая качественные услуги по созданию дизайнов сайтов, разработке, продвижению и адаптивности под все устройства. Индивидуальные решения для вашего бизнеса.">
    <meta property="og:url" content="https://www.valweb.ru/">
    <meta property="og:image" content="ссылка на изображение, представляющее ваш сайт">


    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="./assets/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="./assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">

    <!-- Links -->
    <link href="https://fonts.cdnfonts.com/css/gilroy-bold" rel="stylesheet">

    <!-- Animated -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/mainPage.css">
    <link rel="stylesheet" href="./assets/css/admin/admin.css">
</head>

<body>
    <!-- Header -->
    @include('includes.main.header')

    <!-- Main -->
    @yield('content')

    <!-- Fooret -->
    @include('includes.main.footer')

    <!-- JS -->
    <script src="./assets/js/links.js"></script>
    <script src="./assets/js/burger.js"></script>
    <script src="./assets/js/modal.js"></script>
    <script src="./assets/js/question.js"></script>
    <script src="./assets/js/sticky.js"></script>
    <script src="./assets/js/curse.js"></script>

    <!-- JS WOW -->
    <script src="./assets/js/wow.min.js"></script>
    <script>new WOW().init();</script>

    <!-- SEO -->
    <script type="application/ld+json">
        {   
            "@context": "http://schema.org",
            "@type": "LocalBusiness",
            "name": "VALWeb",
            "url": "https://www.valweb.ru/",
            "description": "Веб студия в Архангельске, предоставляющая услуги по разработке и продвижению сайтов.",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Архангельск",
                "addressRegion": "Архангельская область"
            }
        }
    </script>
</body>

</html>