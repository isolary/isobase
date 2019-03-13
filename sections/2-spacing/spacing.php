<section id="<?php echo basename(__FILE__, '.php'); ?>">
    <div class="grid">
        <div class="col--md-3">
            <nav class="sidebar text-component">
                <ul class="sidebar__list">
                    <li class="sidebar__list-item">
                        <a href="#<?php echo basename(__FILE__, '.php'); ?>" class="text--xl">Spacing</a>
                    </li>
                    <li class="sidebar__list-item">
                        <a href="#values" class="text--md">Values</a>
                    </li>
                    <li class="sidebar__list-item">
                        <a href="#rules" class="text--md">Rules</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col--md-8">
            <section class="section-lead text-component">
                <p class="lead text--md">The spacing system is generated from the sizes of the type per context.</p>
            </section>
            <section id="values" class="text-component">
                <h3>Values</h3>
                <h4>Vertical</h4>
                <p>Vertical spacing units are derived from the lineheight of the body type.</p>
                <p>Body, 16px/1.5 (24px)</p>
                <div class="demo demo--light">
                    <div class="app">
                        <div class="spacer" style="height: var(--space-xs); width: var(--space-xs);"></div>
                        <div class="spacer" style="height: var(--space-sm); width: var(--space-sm);"></div>
                        <div class="spacer" style="height: var(--space-md); width: var(--space-md);"></div>
                        <div class="spacer" style="height: var(--space-lg); width: var(--space-lg);"></div>
                        <div class="spacer" style="height: var(--space-xl); width: var(--space-xl);"></div>
                        <div class="spacer" style="height: var(--space-xxl); width: var(--space-xxl);"></div>
                    </div>
                </div>
                <h4>Horizontal</h4>
                <p>Horizontal spacing units are derived from the pre-defined gutter size (typically 2rem).</p>
                <p>Body, 16px/1.5; $gutter: 2rem (32px)</p>
                <div class="demo demo--light">
                    <div class="app">
                        <div class="spacer" style="height: var(--space-xs); width: var(--space-xs);"></div>
                        <div class="spacer" style="height: var(--space-sm); width: var(--space-sm);"></div>
                        <div class="spacer" style="height: var(--space-md); width: var(--space-md);"></div>
                        <div class="spacer" style="height: var(--space-lg); width: var(--space-lg);"></div>
                        <div class="spacer" style="height: var(--space-xl); width: var(--space-xl);"></div>
                        <div class="spacer" style="height: var(--space-xxl); width: var(--space-xxl);"></div>
                    </div>
                </div>
            </section>
            <section id="rules" class="text-component">
                <h3>Rules</h3>
            </section>
        </div>
    </div>
</section>