<?php
$errorMessage = $errorMessage ?? false;
$data = $data ?? ['email' => ''];
?>
<div class="container">
    <form action="/experience" method="post">
        <?php if ($errorMessage): ?>
            <div class="alert alert-danger">
                <?php echo $errorMessage ?>
            </div>
        <?php endif; ?>
        <div class="form-group">
            <label>Job</label>
            <input type="text" class="form-control" name="job"/>
        </div>
        <div class="form-group">
            <label>Position</label>
            <input type="text" class="form-control" name="position"/>
        </div>
        <div class="form-group">
            <label>Year</label>
            <input type="text" class="form-control" name="year"/>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
