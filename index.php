<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Hello, World.</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<div class="site-wrapper">

    <div class="site-wrapper-inner">

        <div class="cover-container">

            <div class="masthead clearfix">
                <div class="inner">
                    <h3 class="masthead-brand">Yarr!</h3>
                    <nav class="nav nav-masthead">
                        <a class="nav-link active" href="#">Home</a>
<!--                        <a class="nav-link" href="#">About</a>-->
<!--                        <a class="nav-link" href="#">Contact</a>-->
                    </nav>
                </div>
            </div>

            <div class="inner cover">
                <h1 class="cover-heading"><span class="typedElement"></span></h1>
                <p class="lead">Based on Florida's Space Coast.</p>
                <p>Check back soon, more to come!</p>

            </div>

            <div class="mastfoot">
                <div class="inner">
                    <footer>
                        <div>
                            <ul class="socialMediaList" style="">
                                <li><a class="button social" href="https://www.linkedin.com/in/richard-hall-990777127/"><i class="fa fa-linkedin social"></i></a></li>
                                <li><a href="https://github.com/rhall91" target="_blank"><i class="fa fa-github social" aria-hidden="true"></i></a></li>
                                <li><a href="mailto:rich@rdhall.tech" target="_blank"><i class="fa fa-envelope social" aria-hidden="true"></i></a></li>
<!--                                <li><a class="button social" href="https://twitter.com/hallaathrad"><i class="fa fa-fw fa-twitter"></i></a></li>-->
                            </ul>
                        </div>


                        &copy;<?= date('Y');?> Richard Hall


                    </footer>
                </div>
            </div>



        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--<script src="js/jquery-3.2.1.slim.min.js" ></script>-->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>

<script src="assets/js/typed.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function(){
        Typed.new(".typedElement", {
            strings: ["Nerd.", "Tech Enthusiast.", "Web Developer."],
            typeSpeed: 50,
            backDelay: 1000
        });
    });
</script>


</body>
</html>






