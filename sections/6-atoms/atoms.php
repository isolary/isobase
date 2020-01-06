<section id="<?php echo basename(__FILE__, '.php'); ?>">
    <div class="grid">
        <div class="col--md-4">
            <nav class="sidebar text-component">
                <ul class="sidebar__list">
                    <li class="sidebar__list-item">
                        <a href="#<?php echo basename(__FILE__, '.php'); ?>" class="text--xl">Atoms</a>
                    </li>
                    <li class="sidebar__list-item">
                        <a href="#buttons" class="text--md">Buttons</a>
                    </li>
                    <li class="sidebar__list-item">
                        <a href="#forms" class="text--md">Form Elements</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col--md-8">
            <section class="section-lead text-component explain">
                <p class="lead text--md">Atoms define decisions being made after choices (tokens) are established.</p>
            </section>
            <section id="buttons" class="text-component explain">
                <h3>Buttons</h3>
                <h4>App & Mobile</h4>
                <p>Styles and sizes for App & Mobile contexts.</p>
                <h5>Styles</h5>
                <div class="demo demo--light">
                    <div class="app">
                        <button data-sketch-symbol="App/Button/Base/Regular" class="btn">Base</button>
                        <button data-sketch-symbol="App/Button/Primary/Regular" class="btn btn--primary">Simple</button>
                        <button data-sketch-symbol="App/Button/Subtle/Regular" class="btn btn--subtle">Subtle</button>
                        <button data-sketch-symbol="App/Button/Accent/Regular" class="btn btn--accent">Accent</button>
                        <button data-sketch-symbol="App/Button/Primary/Disabled/Regular" class="btn btn--primary btn--disabled">Disabled</button>
                    </div>
                </div>
                <h5>Sizes</h5>
                <div class="demo demo--light">
                    <div class="app">
                        <button data-sketch-symbol="App/Button/Primary/Small" class="btn btn--primary btn--sm">Small</button>
                        <button class="btn btn--primary">Regular</button>
                        <button data-sketch-symbol="App/Button/Primary/Medium" class="btn btn--primary btn--md">Medium</button>
                        <button data-sketch-symbol="App/Button/Primary/Large" class="btn btn--primary btn--lg">Large</button>
                    </div>
                </div>
                <h4>Desktop</h4>
                <p>Styles and sizes for Desktop contexts.</p>
                <h5>Styles</h5>
                <div class="demo demo--light">
                    <div class="desktop">
                        <button data-sketch-symbol="Desktop/Button/Base/Regular" class="btn">Base</button>
                        <button data-sketch-symbol="Desktop/Button/Primary/Regular" class="btn btn--primary">Simple</button>
                        <button data-sketch-symbol="Desktop/Button/Subtle/Regular" class="btn btn--subtle">Subtle</button>
                        <button data-sketch-symbol="Desktop/Button/Accent/Regular" class="btn btn--accent">Accent</button>
                        <button data-sketch-symbol="Desktop/Button/Primary/Disabled/Regular" class="btn btn--primary btn--disabled">Disabled</button>
                    </div>
                </div>
                <h5>Sizes</h5>
                <div class="demo demo--light">
                    <div class="desktop">
                        <button data-sketch-symbol="Desktop/Button/Primary/Small" class="btn btn--primary btn--sm">Small</button>
                        <button class="btn btn--primary">Regular</button>
                        <button data-sketch-symbol="Desktop/Button/Primary/Medium" class="btn btn--primary btn--md">Medium</button>
                        <button data-sketch-symbol="Desktop/Button/Primary/Large" class="btn btn--primary btn--lg">Large</button>
                    </div>
                </div>
            </section>
            <section id="forms" class="text-component explain">
                <h3>Form Elements</h3>
                <h4>App & Mobile</h4>
                <p>Styles and sizes for App & Mobile contexts.</p>
                <div class="demo demo--light">
                    <div class="app">
                        <form action="">
                            <fieldset>
                                <legend data-sketch-text="App/Form/Legend" class="form-legend">Form Legend</legend>
                                <div data-sketch-symbol="App/Form/Field/Regular, Label" class="margin-bottom">
                                    <label data-sketch-text="App/Form/Label" class="form-label" for="">Name:</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="margin-bottom">
                                    <label class="form-label" for="">Email:</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div data-sketch-symbol="App/Form/Field/Disabled" class="margin-bottom">
                                    <label class="form-label" for="">API Key (disabled, readonly)</label>
                                    <input type="text" class="form-control" disabled>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="form-legend">Checkboxes</legend>
                                    <div class="margin-bottom">
                                        <div class="checkbox-list checkbox-list--custom">
                                            <div data-sketch-symbol="App/Form/Checkbox/Inline, Checked">
                                                <input checked type="checkbox" name="" id="checkbox1">
                                                <label for="checkbox1">Option 1</label>
                                            </div>
                                            <div data-sketch-symbol="App/Form/Checkbox/Inline, Regular">
                                                <input type="checkbox" name="" id="checkbox2">
                                                <label for="checkbox2">Option 2</label>
                                            </div>
                                        </div>
                                    </div>
                            </fieldset>
                            <fieldset>
                                <legend class="form-legend">Radios</legend>
                                    <div class="margin-bottom">
                                        <div class="radio-list radio-list--custom">
                                            <div data-sketch-symbol="App/Form/Radio/Inline, Checked">
                                                <input checked type="radio" name="" id="radio1">
                                                <label for="radio1">Option 1</label>
                                            </div>
                                            <div data-sketch-symbol="App/Form/Radio/Inline, Regular">
                                                <input type="radio" name="" id="radio2">
                                                <label for="radio2">Option 2</label>
                                            </div>
                                        </div>
                                    </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <h4>Desktop</h4>
                <p>Styles and sizes for Desktop contexts.</p>
                <div class="demo demo--light">
                    <div class="desktop">
                        <form action="#">
                            <fieldset>
                                <legend data-sketch-text="Desktop/Form/Legend" class="form-legend">Form Legend</legend>
                                <div data-sketch-symbol="Desktop/Form/Field/Regular, Label" class="margin-bottom">
                                    <label data-sketch-text="Desktop/Form/Label" class="form-label" for="">Name:</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="margin-bottom">
                                    <label class="form-label" for="">Email:</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div data-sketch-symbol="Desktop/Form/Field/Disabled" class="margin-bottom">
                                    <label class="form-label" for="">API Key (disabled, readonly)</label>
                                    <input type="text" class="form-control" disabled>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="form-legend">Checkboxes</legend>
                                    <div class="margin-bottom">
                                        <div class="checkbox-list checkbox-list--custom">
                                            <div data-sketch-symbol="Desktop/Form/Checkbox/Inline, Checked">
                                                <input checked type="checkbox" name="" id="checkbox-lg-1">
                                                <label for="checkbox-lg-1">Option 1</label>
                                            </div>
                                            <div data-sketch-symbol="Desktop/Form/Checkbox/Inline, Regular">
                                                <input type="checkbox" name="" id="checkbox-lg-2">
                                                <label for="checkbox-lg-2">Option 2</label>
                                            </div>
                                        </div>
                                    </div>
                            </fieldset>
                            <fieldset>
                                <legend class="form-legend">Radios</legend>
                                    <div class="margin-bottom">
                                        <div class="radio-list radio-list--custom">
                                            <div data-sketch-symbol="Desktop/Form/Radio/Inline, Checked">
                                                <input checked type="radio" name="" id="radio-lg-1">
                                                <label for="radio-lg-1">Option 1</label>
                                            </div>
                                            <div data-sketch-symbol="Desktop/Form/Radio/Inline, Regular">
                                                <input type="radio" name="" id="radio-lg-2">
                                                <label for="radio-lg-2">Option 2</label>
                                            </div>
                                        </div>
                                    </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>