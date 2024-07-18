<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EducaOnline</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="http://localhost/courses/static/css/global.css">
    <link rel="stylesheet" href="http://localhost/courses/layout/header.css">
    <link rel="stylesheet" href="http://localhost/courses/static/css/main.css">
    <link rel="stylesheet" href="http://localhost/courses/layout/footer.css">

</head>

<body>

    <?php require('./layout/header.php'); ?>

    <main class="main" id="main">

        <div class="content">

            <div class="box">

                <section class="banner banner-swiper">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src='https://i0.wp.com/academiacesarvallejo.edu.pe/wp-content/uploads/2018/03/banner-cursos-virtuales-2018-01.jpg?ssl=1' alt="Banner del curso 1" loading="lazy" /></div>
                            <div class="swiper-slide"><img src='https://i0.wp.com/academiacesarvallejo.edu.pe/wp-content/uploads/2024/06/bannesdddddddddddddddddddddddd-web-concurso-de-profesores.jpg?w=714&ssl=1' alt="Banner del curso 2" loading="lazy" /></div>
                            <div class="swiper-slide"><img src='https://i0.wp.com/academiacesarvallejo.edu.pe/wp-content/uploads/2022/10/Slider-vallejo.jpg?w=714&ssl=1' alt="Banner del curso 3" loading="lazy" /></div>
                        </div>
                    </div>
                </section>

                <section class="banner banner-title">
                    <h2>Mira los cursos que tenemos para ti</h2>
                </section>

                <section class="banner banner-courses">

                    <?php require('./components/course.php') ?>

                </section>

            </div>
            
            <?php require('./layout/footer.php'); ?>

        </div>

    </main>


    <script type="module">

        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'
        const swiper = new Swiper('.swiper', {
            direction: 'horizontal',
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });

    </script>

</body>
</html> 