# Isobase

_An extendable starter design/development system aimed at starting with the basics + a few common components._

1. Isobase is heavily inspired by Ether (by we the scenery). Ether is an opinionated design system that is built with typography at it’s core. Sizes and spacing are derived mathematically from the schematics of the typeface itself. We will build on these core principles for extending Isobase. [More on Ether](https://ether.thescenery.co/)

2. Isobase is meant to be extendable/configurable.

- Can alternatively use 8px grid
- Can be extended to included react components
- Can utilize 3rd party libraries

3. Isobase is meant to build design systems with code as the source of truth.

- Can be exported to a sketch file via [html-sketchapp-cli](https://github.com/seek-oss/html-sketchapp-cli) and [html-sketchapp](https://github.com/brainly/html-sketchapp)

-------

How to compile CSS:

1. Make sure you're in the root
2. `npm run gulp watch`
3. CSS files will be added to the dist/css folder


-------

How to open/convert .asketch files:

1. `npm install`, then run `html-sketchapp install` to install the Sketch plugin
2. Run `html-sketchapp` in the root of the project
3. Check the `dist/sketch` folder for files
4. Open Sketch, go to Plugins > From *Almost* Sketch To Sketch
5. Select "Import File(s)", select both generated files from the `dist/sketch` folder