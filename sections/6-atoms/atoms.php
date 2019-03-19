<section id="<?php echo basename(__FILE__, '.php'); ?>">
    <div class="grid">
        <div class="col--md-3">
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
                <p class="lead text--md">Atoms define decisions being made after choices (toekns) are established.</p>
            </section>
            <section id="buttons" class="text-component explain">
                <h3>Buttons</h3>
                <h4>App & Mobile</h4>
                <p>Styles and sizes for App & Mobile contexts.</p>
                <h5>Styles</h5>
                <div class="demo demo--light">
                    <div class="app">
                        <button data-sketch-symbol="App/Button/Regular/Base" class="btn">Base</button>
                        <button data-sketch-symbol="App/Button/Regular/Primary" class="btn btn--primary">Simple</button>
                        <button data-sketch-symbol="App/Button/Regular/Subtle" class="btn btn--subtle">Subtle</button>
                        <button data-sketch-symbol="App/Button/Regular/Accent" class="btn btn--accent">Accent</button>
                        <button data-sketch-symbol="App/Button/Regular/Primary/Disabled" class="btn btn--primary btn--disabled">Disabled</button>
                    </div>
                </div>
                <h5>Sizes</h5>
                <div class="demo demo--light">
                    <div class="app">
                        <button data-sketch-symbol="App/Button/Small/Primary" class="btn btn--primary btn--sm">Small</button>
                        <button data-sketch-symbol="App/Button/Regular/Primary" class="btn btn--primary">Regular</button>
                        <button data-sketch-symbol="App/Button/Medium/Primary" class="btn btn--primary btn--md">Medium</button>
                        <button data-sketch-symbol="App/Button/Large/Primary" class="btn btn--primary btn--lg">Large</button>
                    </div>
                </div>
                <h4>Desktop</h4>
                <p>Styles and sizes for Desktop contexts.</p>
                <h5>Styles</h5>
                <div class="demo demo--light">
                    <div class="desktop">
                        <button data-sketch-symbol="Desktop/Button/Regular/Base" class="btn">Base</button>
                        <button data-sketch-symbol="Desktop/Button/Regular/Primary" class="btn btn--primary">Simple</button>
                        <button data-sketch-symbol="Desktop/Button/Regular/Subtle" class="btn btn--subtle">Subtle</button>
                        <button data-sketch-symbol="Desktop/Button/Regular/Accent" class="btn btn--accent">Accent</button>
                        <button data-sketch-symbol="Desktop/Button/Regular/Primary/Disabled" class="btn btn--primary btn--disabled">Disabled</button>
                    </div>
                </div>
                <h5>Sizes</h5>
                <div class="demo demo--light">
                    <div class="desktop">
                        <button data-sketch-symbol="App/Button/Small/Primary" class="btn btn--primary btn--sm">Small</button>
                        <button data-sketch-symbol="App/Button/Regular/Primary" class="btn btn--primary">Regular</button>
                        <button data-sketch-symbol="App/Button/Medium/Primary" class="btn btn--primary btn--md">Medium</button>
                        <button data-sketch-symbol="App/Button/Large/Primary" class="btn btn--primary btn--lg">Large</button>
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
                                <legend class="form-legend">Form Legend</legend>
                                <div class="margin-bottom">
                                    <label class="form-label" for="">Name:</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="margin-bottom">
                                    <label class="form-label" for="">Email:</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="margin-bottom">
                                    <label class="form-label" for="">API Key (disabled, readonly)</label>
                                    <input type="text" class="form-control" disabled>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="form-legend">Checkboxes</legend>
                                    <div class="margin-bottom">
                                        <div class="checkbox-list checkbox-list--custom">
                                            <div>
                                                <input checked type="checkbox" name="" id="checkbox1">
                                                <label for="checkbox1">Option 1</label>
                                            </div>
                                            <div>
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
                                            <div>
                                                <input checked type="radio" name="" id="radio1">
                                                <label for="radio1">Option 1</label>
                                            </div>
                                            <div>
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
                                <legend class="form-legend">Form Legend</legend>
                                <div class="margin-bottom">
                                    <label class="form-label" for="">Name:</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="margin-bottom">
                                    <label class="form-label" for="">Email:</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="margin-bottom">
                                    <label class="form-label" for="">API Key (disabled, readonly)</label>
                                    <input type="text" class="form-control" disabled>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="form-legend">Checkboxes</legend>
                                    <div class="margin-bottom">
                                        <div class="checkbox-list checkbox-list--custom">
                                            <div>
                                                <input checked type="checkbox" name="" id="checkbox-lg-1">
                                                <label for="checkbox-lg-1">Option 1</label>
                                            </div>
                                            <div>
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
                                            <div>
                                                <input checked type="radio" name="" id="radio-lg-1">
                                                <label for="radio-lg-1">Option 1</label>
                                            </div>
                                            <div>
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