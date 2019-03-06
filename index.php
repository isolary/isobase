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
                    </c>
                    <c span="5-12" span-s="1..">
                        <h3>Typefaces</h3>
                        <p class="lead">Typography should change in scale and size according to context.</p>
                        <h4>Selection</h4>
                        <p>Typography should be chosen strategically based on brand style, content tone, target audience, industry, and market. Typefaces are paired and sized by the designer. The designer should start with the body text first: defining base body size and lineheight. The body type will inform the spacing for the system. </p>
                        <h4>Scale</h4>
                        <p>Type sizes should be derived using a typographic scale. This is something that will also be defined by the designer.</p>
                    </c>
                    <c span="5-12" span-s="1..">
                        <h3>Sizes</h3>
                        <h4>App</h4>
                        <p>Typography used in the context of an application or complex interface.</p>
                        <h4>Constant Sizes</h4>
                        <p data-sketch-text="App/Body/Small" class="small">Small paragraph</p>
                        <p data-sketch-text="App/Body/Regular">Body size, regular paragraph</p>
                        <p data-sketch-text="App/Body/Lead" class="lead">Lead paragraph</p>
                        <h1 data-sketch-text="App/Heading 1">Heading 1</h1>
                        <h2 data-sketch-text="App/Heading 2">Heading 2</h2>
                        <h3 data-sketch-text="App/Heading 3">Heading 3</h3>
                        <h4 data-sketch-text="App/Heading 4">Heading 4</h4>
                        <h5 data-sketch-text="App/Heading 5">Heading 5</h5>
                        <h6 data-sketch-text="App/Heading 6">Heading 6</h6>


                        <h4>Prose</h4>
                        <p>Typography used in the context of long-form content or stories.</p>
                        <grid columns="12" columns-s="4">
                            <c span="1-6" span-s="1..">
                                <h4>Mobile</h4>
                                <p data-sketch-text="Mobile/Body/Small" class="small">Small paragraph</p>
                                <p data-sketch-text="Mobile/Body/Regular">Body size, regular paragraph</p>
                                <p data-sketch-text="Mobile/Body/Lead" class="lead">Lead paragraph</p>
                                <h1 data-sketch-text="Mobile/Heading 1">Heading 1</h1>
                                <h2 data-sketch-text="Mobile/Heading 2">Heading 2</h2>
                                <h3 data-sketch-text="Mobile/Heading 3">Heading 3</h3>
                                <h4 data-sketch-text="Mobile/Heading 4">Heading 4</h4>
                                <h5 data-sketch-text="Mobile/Heading 5">Heading 5</h5>
                                <h6 data-sketch-text="Mobile/Heading 6">Heading 6</h6>
                            </c>
                            <c span="7-12" span-s="1..">
                                <h4>Desktop</h4>
                                <p data-sketch-text="Desktop/Body/Small" class="small">Small paragraph</p>
                                <p data-sketch-text="Desktop/Body/Regular">Body size, regular paragraph</p>
                                <p data-sketch-text="Desktop/Body/Lead" class="lead">Lead paragraph</p>
                                <h1 data-sketch-text="Desktop/Heading 1">Heading 1</h1>
                                <h2 data-sketch-text="Desktop/Heading 2">Heading 2</h2>
                                <h3 data-sketch-text="Desktop/Heading 3">Heading 3</h3>
                                <h4 data-sketch-text="Desktop/Heading 4">Heading 4</h4>
                                <h5 data-sketch-text="Desktop/Heading 5">Heading 5</h5>
                                <h6 data-sketch-text="Desktop/Heading 6">Heading 6</h6>
                            </c>
                        </grid>

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