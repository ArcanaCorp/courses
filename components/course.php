<?php

    require './config/connect.php';

    $sqlCourses = 'SELECT c.*, t.* FROM courses c INNER JOIN teachers t ON c.teacher_course = t.id_teacher';
    $stmt = $pdo->prepare($sqlCourses);
    $stmt->execute();
    $courses = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<?php foreach ($courses as $course): ?>
    <div class="card card-course">

        <div class="card-img">
            <img src="https://images.placeholders.dev/?width=100%&height=200&text=<?php echo $course['name_course'];?>&bgColor=%FF4400&textColor=%236d6e71" alt="" />
        </div>
        <div class="card-txt">
            <h3 class="title-course"><?php echo $course['name_course'];?></h3>
            <p class="parragraph"><?php echo $course['text_course'];?></p>
            <p class="teacher">Dictado: <span><?php echo $course['name_teacher'];?></span></p>
        </div>
        <div class="card-cta">
            <?php if (isset($_SESSION['user'])) { ?>
                <a class="a a-btn btn-primary" href="<?php echo $base_url;?>/c/<?php echo $course['id_course'];?>">Ver más</a>
            <?php } ?>
        </div>

    </div>

<?php endforeach; ?>