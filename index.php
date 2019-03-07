<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Isobase</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/0.5.0/modern-normalize.min.css" />
    <link rel="stylesheet" href="dist/css/base.css" type="text/css">
</head>

<body>
    <header class="intro-wrapper">
        <grid columns="12" columns-s="4" style="max-width: 80rem; margin: 0 auto;">
            <c span="1-4" span-s="1..">
                <div class="flex">
                    <?php include("./snippets/isobase-logo.php"); ?>
                </div>
            </c>
            <c span="5-12" span-s="1..">
                <h1>Isobase</h1>
                <p class="lead">An extendable starter design/development system aimed at starting with the basics + a few common components.</p>
            </c>
        </grid>
    </header>
    <main style="max-width: 80rem; margin: 0 auto;">
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