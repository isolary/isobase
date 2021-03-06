> Isobase is a proof of concept of an internal tool we decided to build for ourselves to streamline our design and development process. Early versions were used to kickstart a few projects as we distilled how and why things should be built. 
> 
> Over time, we took these underlying concepts and baked them into our process in evaluating tooling on a per-project basis. 

![isobase](/assets/images/isobase-title.png)

# Isobase

_A tokenized design/development framework kit starter with code as the source of truth. Opinionated, just enough to get started, not enough to get overwhelmed._

1. Isobase is heavily inspired by Ether (by we the scenery). Ether is an opinionated design system that is built with typography at it’s core. Sizes and spacing are derived mathematically from the schematics of the typeface itself. We will build on these core principles for extending Isobase. [More on Ether](https://ether.thescenery.co/)

2. Isobase is meant to be extendable/configurable.
- Can alternatively use an 8px grid 
- Can be extended to included react components (for example)
- Can utilize 3rd party libraries

3. Isobase is meant to build design systems with code as the source of truth.
- Can be exported to a sketch file via [html-sketchapp-cli](https://github.com/seek-oss/html-sketchapp-cli) and [html-sketchapp](https://github.com/brainly/html-sketchapp)
- Provides the structure for documenting tokens, decisions, and usage gudelines

-------

### How to compile CSS:

1. Make sure you're in the root
2. Install dependencies `npm i`
3. `npm run gulp watch`
4. CSS files will be added to the dist/css folder


-------

### How to open/convert .asketch files:

1. `npm i` (if you didn't already), then run `html-sketchapp install` to install the Sketch plugin (if you intend to create a Sketch file)
2. Run `html-sketchapp` in the root of the project
3. Check the `dist/sketch` folder for files
4. Open Sketch, go to Plugins > From *Almost* Sketch To Sketch
5. Select "Import File(s)", select both generated files from the `dist/sketch` folder


-------

### Options:

- Append `?gen` to the URL (local or otherwise) for the generator view