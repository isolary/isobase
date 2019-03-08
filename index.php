<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Isobase</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/0.5.0/modern-normalize.min.css" />
    <link rel="stylesheet" href="dist/css/style.css" type="text/css">
</head>

<body>
    <header class="intro-wrapper">
        <div class="container container--xl text-component">
            <section class="introduction">
                <div class="grid">
                    <div class="col--md-3">
                        <div class="flex">
                            <?php include("./snippets/isobase-logo.php"); ?>
                        </div>
                    </div>
                    <div class="col--md-8">
                        <h1>Isobase</h1>
                        <p class="lead">An extendable starter design/development system aimed at starting with the basics + a few common components.</p>
                    </div>
                </div>
            </section>
        </div>
    </header>
    <main class="container container--xl">
        <article>
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
</body>

</html>