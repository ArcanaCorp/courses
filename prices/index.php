<?php session_start(); ?>
<?php
    $plans = [
        [
            'name' => 'Básico',
            'price' => 'S/. 100',
            'benefits' => [
                'Acceso a todos los cursos de nivel básico',
                'Material de estudio en formato PDF',
                'Acceso a foros de discusión',
                'Certificado de participación',
                'Soporte vía correo electrónico'
            ]
        ],
        [
            'name' => 'Intermedio',
            'price' => 'S/. 200',
            'benefits' => [
                'Acceso a todos los cursos de nivel intermedio',
                'Material de estudio en formato PDF y videos',
                'Acceso a foros de discusión y grupos de estudio',
                'Certificado de participación y evaluación',
                'Soporte vía correo electrónico y chat'
            ]
        ],
        [
            'name' => 'Avanzado',
            'price' => 'S/. 300',
            'benefits' => [
                'Acceso a todos los cursos de nivel avanzado',
                'Material de estudio en formato PDF, videos y clases en vivo',
                'Acceso a foros de discusión, grupos de estudio y tutorías',
                'Certificado de participación, evaluación y proyectos',
                'Soporte vía correo electrónico, chat y teléfono'
            ]
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Precios | EducaOnline</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    </style>

    <link rel="stylesheet" href="http://localhost/courses/static/css/global.css">
    <link rel="stylesheet" href="http://localhost/courses/layout/header.css">
    <link rel="stylesheet" href="http://localhost/courses/prices/prices.css">
    <link rel="stylesheet" href="http://localhost/courses/layout/footer.css">

</head>
<body>

    <?php require(dirname(__DIR__) . '../layout/header.php'); ?>

    <main class="main" id="main">

        <div class="content">

            <div class="box">

                <div>
                    <div class="title_box">
                        <h2>Los mejores planes para ti</h2>
                        <p>Tenemos los mejores planes solo para ti y te vuelvas la excelencia.</p>
                    </div>

                    <div class="plans">

                        <?php foreach ($plans as $plan): ?>
                            <div class="plan">
                                <div class="plan-head">
                                    <h2><?php echo $plan['name']?></h2>
                                    <div class="price"><?php echo $plan['price']; ?></div>
                                </div>
                                <div class="line"></div>
                                <div class="plan-body">
                                    <ul class="items">
                                        <?php foreach ($plan['benefits'] as $benefit): ?>
                                            <li class="item"><span class="txt"><?php echo $benefit; ?></span></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <div class="plan-footer">
                                    <button class="btn btn-primary">Seleccionar plan</button>
                                </div>
                            </div>
                        <?php endforeach;?>

                    </div>
                </div>

            </div>

            <?php require(dirname(__DIR__) . '../layout/footer.php'); ?>

        </div>

    </main>

</body>
</html>