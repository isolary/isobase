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
            <section id="typography">
                <grid columns="12" columns-s="4">
                    <c span="1-4" span-s="1..">
                        <nav>
                            <h2>Typography</h2>
                            <h4>Typefaces</h4>
                            <h4>Sizes</h4>
                        </nav>
                        <ul>
<?php 

function createMenuHTML($dir){
    $html = "";
    if(is_dir($dir)){
        //Directory - add sub menu
        $html .= "<li><a href='#'>Sub Menu Name</a><ul>";
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                $html .= createMenuHTML($dir.$file);
            }
            closedir($dh);
        }
        $html .= "</ul>"
    } 
    else {
        //File so  just add list item
        $html .= "<li><a href='#'>".basename($dir)."</a></li>"
    }
    return $html;
}

    function createMenu($dir) {
        if(is_dir($dir)) {
            echo "<li><a href='#$dir'>".basename($dir)."</a><ul>";
            foreach(glob("$dir/*") as $path) {
                createMenuHTML($path);
            }
            echo "</ul></li>";
        }
        else {
            $extension = pathinfo($dir);
            $extension = $extension['extension'];
            echo "<li><a href='#$dir'>".basename($dir, ".".$extension)."</a></li>";
        }
    }
    
    createMenu("/sections");

?> 
                    </ul>
                    </c>
                    <c span="5-12" span-s="1..">
                        <?php
                            $dir = "sections/";
                            $dh  = opendir($dir);
                            $dir_list = array($dir);
                            while (false !== ($filename = readdir($dh))) {
                                if($filename!="."&&$filename!=".."&&is_dir($dir.$filename))
                                    array_push($dir_list, $dir.$filename."/");
                            }
                            foreach ($dir_list as $dir) {
                                foreach (glob($dir."*.php") as $filename)
                                    require_once $filename;
                            }
                        ?>
                    </c>
                </grid>
            </section>
            <section id="spacing">
                <grid columns="12" columns-s="4">
                    <c span="1-4" span-s="1..">
                        <nav>
                            <h2>Spacing</h2>
                            <h4>Values</h4>
                            <h4>Rules</h4>
                        </nav>
                    </c>
                    <c span="5-12" span-s="1..">
                        <h3>Values</h3>
                        <grid columns="12" columns-s="4">
                            <c span="1-6" span-s="1..">
                                <h4>Vertical</h4>
                                <p>Vertical spacing units are derived from the lineheight of the body type.</p>
                                <p>Body, 16px/1.5 (24px)</p>
                            </c>
                            <c span="7-12" span-s="1..">
                                <h4>Horizontal</h4>
                                <p>Horizontal spacing units are derived from the pre-defined gutter size (typically 2rem).</p>
                                <p>Body, 16px/1.5; $gutter: 2rem (32px)</p>
                            </c>
                        </grid>
                    </c>
                </grid>
            </section>
            <section id="colors">
                <grid columns="12" columns-s="4">
                    <c span="1-4" span-s="1..">
                        <nav>
                            <h2>Colors</h2>
                            <h4>Base</h4>
                            <h4>Core</h4>
                        </nav>
                    </c>
                </grid>
            </section>
            <section id="icons">
                <grid columns="12" columns-s="4">
                    <c span="1-4" span-s="1..">
                        <nav>
                            <h2>Icons</h2>
                            <h4>Sets</h4>
                        </nav>
                    </c>
                    <c span="5-12" span-s="1..">
                        <h3>Sets</h3>
                        <h4>Selection</h4>
                        <p>Icon sets should be chosen based on the scope/depth of the project. Icons should be built and exported in the SVG format.</p>
                    </c>
                </grid>
            </section>
            <section id="grid">
                <grid columns="12" columns-s="4">
                    <c span="1-4" span-s="1..">
                        <nav>
                            <h2>Grid</h2>
                            <h4>Definitions</h4>
                        </nav>
                    </c>
                    <c span="5-12" span-s="1..">
                        <h3>Definitions</h3>
                        <h4>Philosophy</h4>
                        <p>The grid system should be flexible enough to accomodate spacing rules derived from the type. It should be easy for designers/devs to understand and use. </p>
                    </c>
                </grid>
            </section>
            <section id="atoms">
                <grid columns="12" columns-s="4">
                    <c span="1-4" span-s="1..">
                        <nav>
                            <h2>Atoms</h2>
                            <h4>Elements</h4>
                        </nav>
                    </c>
                    <c span="5-12" span-s="1..">
                        <h3>Elements</h3>
                        <h4>Philosophy</h4>
                        <p>Atoms represent the common web elements that make up pages and applications. Every project will likely use these elements in some fashion or another. All elements should be designed/built in an accessible and inclusive manner from the get-go. </p>
                    </c>
                </grid>
            </section>




        </article>
    </main>
</body>

</html>