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
        <div class="container container--lg">
            <section class="introduction">
                <div class="grid">
                    <div class="col--12">
                        <a href="/">
                            <?php include("./snippets/isobase-logo.php"); ?>
                        </a>
                    </div>
                    <div class="text-component  col--md-4">
                        <h1 class="text--xxxl">Isobase</h1>
                    </div>
                    <div class="text-component col--md-8">
                        <p class="lead text--md">A tokenized design/development framework kit starter with code as the source of truth. Opinionated, just enough to get started, not enough to get overwhelmed.</p>
                    </div>
                </div>
            </section>
        </div>
    </header>
    <main class="container container--lg">
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
    <a href="https://github.com/isolary/isobase" class="github-corner" aria-label="View source on GitHub"><svg width="80" height="80" viewBox="0 0 250 250" style="fill:#151513; color:#fff; position: absolute; top: 0; border: 0; right: 0;" aria-hidden="true"><path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path><path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2" fill="currentColor" style="transform-origin: 130px 106px;" class="octo-arm"></path><path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="currentColor" class="octo-body"></path></svg></a><style>.github-corner:hover .octo-arm{animation:octocat-wave 560ms ease-in-out}@keyframes octocat-wave{0%,100%{transform:rotate(0)}20%,60%{transform:rotate(-25deg)}40%,80%{transform:rotate(10deg)}}@media (max-width:500px){.github-corner:hover .octo-arm{animation:none}.github-corner .octo-arm{animation:octocat-wave 560ms ease-in-out}}</style>
<script src="assets/js/util.js"></script>
<script src="assets/js/color-grab.js"></script>
</body>

</html>