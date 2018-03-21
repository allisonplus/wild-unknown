# Wild Unknown Starter Theme:

### mu-plugins/
- In this directory there is a _must-use-plugin_ titled Starter Theme Functionality. This plugin contains useful functions that are project-related rather than theme-related.
- _Must Use Plugins_ are activated automatically before any other plugins, and cannot be disabled by the user. This is a great way to store important functionality & ensure it won't be accidentally deactivated or removed.
- **Resources:**
    - _[Must Use Plugins](https://codex.wordpress.org/Must_Use_Plugins)_ - WordPress Codex article
    - Creation of this plugin was inspired by this CSS-Tricks article: _[WordPress Functionality Plugins](https://css-tricks.com/wordpress-functionality-plugins/)_
    - _[Add Editor Style](https://codex.wordpress.org/Function_Reference/add_editor_style)_ - WordPress Codex article on setting up an `editor-style.css` stylesheet

### plugins/

Useful plugins that I use while developing a new WordPress project.

- Theme Check
- What Template Am I Using
- Regenerate Thumbnails

### Project Setup

#### 1. Renaming
* Search for: `'starter-theme'` and replace with: `'project-name'` (inside single quotations) to capture the text domain
* Search for: `starter_theme_` and replace with: `project-name_` to capture all the function names
* Search for: `Text Domain: Starter-Theme` and replace with: `Text Domain: project-name` in style.css
* Search for (and include the leading space): <code>&nbsp;_starter_theme</code> and replace with: <code>&nbsp;Project Name</code> (with a space before it) to capture DocBlocks
* Search for: `starter-theme-` and replace with: `project-name-` to capture prefixed handles
* Search for `project-name.pot` and replace with: `project-name.pot` to capture translation files
* Search for `starter-theme.dev` and replace with: `project-name.dev` to match your local development URL
* Edit the theme information in the header of style.scss to meet your needs

#### 2. Setup
- Gulp is setup for a lot of things, including uglifying JavaScript and compiling SASS
- Download the repository and type `npm install` (or `sudo npm install`) while within the `themes/starter-theme` folder to install the necessary Gulp packages

#### 3. Gulp Tasks

From the command line, type any of the following to perform an action:

`gulp watch` - Automatically handle changes to CSS, JS, SVGs, and image sprites. Also kicks off BrowserSync.

`gulp icons` - Minify, concatenate, and clean SVG icons.

`gulp i18n` - Scan the theme and create a POT file.

`gulp sass:lint` - Run Sass against WordPress code standards.

`gulp js:lint` - Run Javascript against WordPress code standards.

`gulp scripts` - Concatenate and minify javascript files.

`gulp sprites` - Generate an image sprite and the associated Sass (sprite.png).

`gulp styles` - Compile, prefix, combine media queries, and minify CSS files.

`gulp` - Runs the following tasks at the same time: i18n, icons, scripts, styles, sprites.
