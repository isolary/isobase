<section id="<?php echo basename(__FILE__, '.php'); ?>">
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