<?php
$errors =$errors ?? [];
$data= $data ?? [];
?>
<form action="/contact" method="post">
    <div class="form-group">
        <label for="ExampleInputMail">Email adress</label>
        <input type="email" class="form-control" id="ExampleInputMail"
        name="email">

    </div>
    <div class="form-group">
        <label for="text">Message</label>
        <input type="text"  class="form-control" id="ExampleInputMail"
               name="email">

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>