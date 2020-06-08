<?php
$errorMessage = $errorMessage ?? false;
$data = $data ?? ['email' => ''];
?>
<div class="container">
    <form action="/skills" method="post">
        <?php if ($errorMessage): ?>
            <div class="alert alert-danger">
                <?php echo $errorMessage ?>
            </div>
        <?php endif; ?>
        <div class="form-group">
            <label>Programming Language</label>
            <input type="text" class="form-control" name="skill"/>
        </div>
        <div class="form-group">
            <label>Level</label>
            <input type="text" class="form-control" name="level"/>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
