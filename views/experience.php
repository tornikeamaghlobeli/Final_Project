<?php

require_once ('controllers/ExperienceController.php');
$user = getCurrentUser();

?>
<section class="resume-section" id="experience">
    <div class="resume-section-content">
        <h2 class="mb-5">Experience</h2>
        <?php if($user == true){
            echo "<a class=\"btn btn-success\" style=\"color:white\" href=\"exp_form\">Add Experience</a>";
        }
        ?>
        <?php foreach (\app\controllers\ExperienceController::$row as $item) :?>
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">

            <div class="flex-grow-1">
                <h3 class="mb-0"><?php echo $item['job'];?></h3>
                <div class="subheading mb-3"><?php echo $item['position'];?></div>
            </div>
            <div class="flex-shrink-0"><span class="text-primary"><?php echo $item['year']?></span></div>
        </div>
        <?php endforeach;?>

    </div>
</section>
<hr class="m-0" />