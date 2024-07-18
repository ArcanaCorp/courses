<?php

    require '../config/connect.php';

    session_start();

    if (isset($_GET['c'])) {

        $courseId = $_GET['c'];
        $sqlCourse = 'SELECT c.*, t.* FROM courses c INNER JOIN teachers t ON c.teacher_course = t.id_teacher WHERE id_course = :id';
        $stmt = $pdo->prepare($sqlCourse);
        $stmt->execute([':id' => $courseId]);
        $course = $stmt->fetch(PDO::FETCH_ASSOC);

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $course['name_course'];?> | EducaOnline</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="http://localhost/courses/static/css/global.css">
    <link rel="stylesheet" href="http://localhost/courses/layout/header.css">
    <link rel="stylesheet" href="http://localhost/courses/c/course.css">
    <link rel="stylesheet" href="http://localhost/courses/layout/footer.css">

</head>
<body>

    <?php require(dirname(__DIR__) . '../layout/header.php'); ?>

    <main class="main" id="main">

        <div class="content">

            <div class="box">

                <div class="wrap wrap-video">

                    <div id="video">
                        <iframe class="iframe-video" src="https://www.youtube.com/embed/Xm0eFdBJmxE" title="¿Se quedó sin ideas? ¡Samsung vuelve a copiar descaradamente a Apple!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>

                    <div id="data">
                        <h2><?php echo $course['name_course'];?></h2>
                        <div class="row">
                            <div class="teacher-info">
                                <div class="avatar">
                                    <a href="/" class="a-avatar">
                                        <img src="https://ui-avatars.com/api/?name=<?php echo $course['name_teacher'];?>&rounded=true&background=440044&color=ffffff&size=40" alt="Foto de <?php echo $course['name_teacher'];?>" />
                                    </a>
                                </div>
                                <div class="info">
                                    <p><?php echo $course['name_teacher'];?></p>
                                </div>
                            </div>
                            <div class="actios">
                                <button class="btn btn-like">
                                    <span class="ico"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-heart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg></span>
                                    <span class="txt">0</span>
                                </button>
                                <button class="btn btn-like">
                                    <span class="ico"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-message-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 9h8" /><path d="M8 13h6" /><path d="M9 18h-3a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-3l-3 3l-3 -3z" /></svg></span>
                                    <span class="txt">0</span>
                                </button>
                                <button class="btn btn-like">
                                    <span class="ico"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-share-3"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M13 4v4c-6.575 1.028 -9.02 6.788 -10 12c-.037 .206 5.384 -5.962 10 -6v4l8 -7l-8 -7z" /></svg></span>
                                    <span class="txt">0</span>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="wrap wrap-content">
                    <div class="wrap-content-head">
                        <h3>Temario del curso</h3>
                    </div>
                    <div class="wrap-content-body">
                        <div class="wrap-card">
                            <div class="wrap-card-col">
                                <span class="ico"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg></span>
                            </div>
                            <div class="wrap-card-col">
                                <h4>¿Qué es <?php echo $course['name_course'];?>?</h4>
                                <p>Aprenderas un poco de la historia de <?php echo $course['name_course'];?>.</p>
                            </div>
                            <div class="wrap-card-col">
                                <span class="ico"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 9l6 6l6 -6" /></svg></span>
                            </div>
                        </div>
                        <div class="wrap-card">
                            <div class="wrap-card-col">
                                <span class="ico"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg></span>
                            </div>
                            <div class="wrap-card-col">
                                <h4>Clase 1: <?php echo $course['name_course'];?></h4>
                                <p>Aprenderas un poco de la historia de <?php echo $course['name_course'];?>.</p>
                            </div>
                            <div class="wrap-card-col">
                                <span class="ico"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 9l6 6l6 -6" /></svg></span>
                            </div>
                        </div>
                        <div class="wrap-card">
                            <div class="wrap-card-col">
                                <span class="ico"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg></span>
                            </div>
                            <div class="wrap-card-col">
                                <h4>Clase 2: <?php echo $course['name_course'];?></h4>
                                <p>Aprenderas un poco de la historia de <?php echo $course['name_course'];?>.</p>
                            </div>
                            <div class="wrap-card-col">
                                <span class="ico"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 9l6 6l6 -6" /></svg></span>
                            </div>
                        </div>
                        <div class="wrap-card">
                            <div class="wrap-card-col">
                                <span class="ico"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg></span>
                            </div>
                            <div class="wrap-card-col">
                                <h4>Clase 3: <?php echo $course['name_course'];?></h4>
                                <p>Aprenderas un poco de la historia de <?php echo $course['name_course'];?>.</p>
                            </div>
                            <div class="wrap-card-col">
                                <span class="ico"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 9l6 6l6 -6" /></svg></span>
                            </div>
                        </div>
                        <div class="wrap-card">
                            <div class="wrap-card-col">
                                <span class="ico"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg></span>
                            </div>
                            <div class="wrap-card-col">
                                <h4>Clase 4: <?php echo $course['name_course'];?></h4>
                                <p>Aprenderas un poco de la historia de <?php echo $course['name_course'];?>.</p>
                            </div>
                            <div class="wrap-card-col">
                                <span class="ico"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 9l6 6l6 -6" /></svg></span>
                            </div>
                        </div>
                        <div class="wrap-card">
                            <div class="wrap-card-col">
                                <span class="ico"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg></span>
                            </div>
                            <div class="wrap-card-col">
                                <h4>Clase 5: <?php echo $course['name_course'];?></h4>
                                <p>Aprenderas un poco de la historia de <?php echo $course['name_course'];?>.</p>
                            </div>
                            <div class="wrap-card-col">
                                <span class="ico"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 9l6 6l6 -6" /></svg></span>
                            </div>
                        </div>
                        <div class="wrap-card">
                            <div class="wrap-card-col">
                                <span class="ico"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg></span>
                            </div>
                            <div class="wrap-card-col">
                                <h4>Clase 6: <?php echo $course['name_course'];?></h4>
                                <p>Aprenderas un poco de la historia de <?php echo $course['name_course'];?>.</p>
                            </div>
                            <div class="wrap-card-col">
                                <span class="ico"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 9l6 6l6 -6" /></svg></span>
                            </div>
                        </div>
                        <div class="wrap-card">
                            <div class="wrap-card-col">
                                <span class="ico"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg></span>
                            </div>
                            <div class="wrap-card-col">
                                <h4>Clase 7: <?php echo $course['name_course'];?></h4>
                                <p>Aprenderas un poco de la historia de <?php echo $course['name_course'];?>.</p>
                            </div>
                            <div class="wrap-card-col">
                                <span class="ico"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 9l6 6l6 -6" /></svg></span>
                            </div>
                        </div>
                        <div class="wrap-card">
                            <div class="wrap-card-col">
                                <span class="ico"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg></span>
                            </div>
                            <div class="wrap-card-col">
                                <h4>Clase 8: <?php echo $course['name_course'];?></h4>
                                <p>Aprenderas un poco de la historia de <?php echo $course['name_course'];?>.</p>
                            </div>
                            <div class="wrap-card-col">
                                <span class="ico"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 9l6 6l6 -6" /></svg></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <?php require(dirname(__DIR__) . '../layout/footer.php'); ?>

        </div>

    </main>

</body>
</html>