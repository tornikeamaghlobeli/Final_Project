<?php
require_once ('controllers/SkillController.php');
$user = getCurrentUser();


?>

<section class="resume-section" id="skills">
    <div class="resume-section-content">
        <h2 class="mb-5">Skills</h2>
        <?php if($user == true){
            echo "<a class=\"btn btn-success\" style=\"color:white\" href=\"skills_form.php\">Add Skill</a>";
        }
        ?>

        <?php foreach (\app\controllers\SkillController::$row as $item ):?>
        <div class="subheading mb-3">Programming Languages & Tools</div>
        <ul>
            <li class="list-inline-item"><?php echo $item['skill'];?></li>
            <li class="list-inline-item"><?php echo $item['level'];?></li>
            <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
                    </ul>
    </div>
    <?php endforeach;?>

</section>
<hr class="m-0" />