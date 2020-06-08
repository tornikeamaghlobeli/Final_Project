<?php

$user = getCurrentUser();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Resume - Tornike Amaghlobeli</title>
    <link rel="icon" type="image/x-icon" href="../public/img/assets/img/favicon.ico"/>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet"
          type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../public/img/css/styles.css" rel="stylesheet"/>
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a><span class="d-block d-lg-none">Tornike Amaghlobeli</span><span class="d-none d-lg-block"><img
                class="img-fluid img-profile rounded-circle mx-auto mb-2" src="../public/img/assets/img/img/profile.jpg"
                alt=""/></span></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
            class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/about">About</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/experience">Experience</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/education">Education</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/skills">Skills</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/contact">contact</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/registration_form">Register</a></li>

            <?php if (!$user): ?>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/login">login</a></li>
            <?php else: ?>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/logout"><?php $user['full_name']; ?>
                        loguot</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
</body>
</nav>
<?php echo $content ?>
<footer>TORNIKE AMAGHLOBELI
</footer>
</html>
