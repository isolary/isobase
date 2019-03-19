<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>⬡ Isobase — A tokenized design/development framework kit starter with code as the source of truth.</title>

    <script
  src="http://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  crossorigin="anonymous"></script>

    <!-- Codyhouse Util and Generated CSS -->
    <script>document.getElementsByTagName("html")[0].className += " js";</script>
    <link rel="stylesheet" href="dist/css/style.css" type="text/css">
</head>

<body <?php if ( isset( $_GET['gen'] ) ) echo 'class="gen"' ?>>
    <header class="intro-wrapper">
        <div class="container container--xl">
            <section class="introduction">
                <div class="grid">
                    <div class="col--12">
                        <a href="/">
                            <?php include("./snippets/isobase-logo.php"); ?>
                        </a>
                    </div>
                    <div class="text-component  col--md-3">
                        <h1>Isobase</h1>
                    </div>
                    <div class="text-component col--md-8">
                        <p class="lead text--md">A tokenized design/development framework kit starter with code as the source of truth. Opinionated, just enough to get started, not enough to get overwhelmed.</p>
                    </div>
                </div>
            </section>
        </div>
    </header>
    <main class="container container--xl">
        <article class="content">
            <?php
                //Pulls in each section of the page from the "sections" folder
                $dir = "sections/";
                $dh  = opendir($dir);
                $dir_list = array($dir);
                
                while (false !== ($filename = readdir($dh))) {
                    if($filename!="."&&$filename!=".."&&is_dir($dir.$filename))
                        asort($dir_list); //Sort array of directories
                        array_push($dir_list, $dir.$filename."/");
                }
                foreach ($dir_list as $dir) {

                    foreach (glob($dir."*.php") as $filename)
                        require_once $filename;
                }
            ?>
        </article>
    </main>
<script src="assets/js/util.js"></script>
<script src="assets/js/color-grab.js"></script>
</body>

</html>