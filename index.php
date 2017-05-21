<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

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
                        <a class="nav-link" href="#">About</a>
                        <a class="nav-link" href="#">Contact</a>
                    </nav>
                </div>
            </div>

            <div class="inner cover">
                <h1 class="cover-heading"><span class="typedElement"></span></h1>
                <p class="lead">Based on the Space Coast, Florida.</p>
                <p>Check back soon, more to come!</p>

            </div>

            <div class="mastfoot">
                <div class="inner">
                    <footer>
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






