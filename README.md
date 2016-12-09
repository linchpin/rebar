# Rebar by Linchpin is WordPress theme scaffold based on Foundation

The project is a grunt-init scaffold *YOU MUST HAVE GRUNT-INIT installed*

In order for this to work properly you will need to clone this repo into your local ```.grunt-init``` folder (typically within your user ```~``` folder if you're on a mac)

*This is a WordPress starter theme based on [Foundation 6](http://foundation.zurb.com) by Zurb.*

The purpose of our version of this project is to act as a small and handy toolbox that contains the essentials needed to a responsive theme based on Foundation 6.x. This theme is meant to be a starting point not a parent theme.

*Please fork, copy, modify, delete, share or do whatever you like with this.*

All contributions are welcome!

## Requirements

*You'll need to have the following items installed before continuing.*
  * [Node.js](http://nodejs.org): Use the installer provided on the NodeJS website.
  * [Gulp](http://gulpjs.com/): Run `[sudo] npm install -g gulp-cli`
  * [Bower](http://bower.io): Run `[sudo] npm install -g bower`
  * [grunt-init](http://gruntjs.com/project-scaffolding): Run `[sudo] npm install -g grunt-init`
  
## Quickstart / Installation

Once grunt-init is installed, place this template (either manually or cloned from github) into your `~/.grunt-init/` directory. It's recommended that you use git to clone this template into that directory, as follows:

### Linux/Mac Users

```
git clone https://github.com/linchpinagency/hatch.git ~/.grunt-init/rebar
```
This will create a folder named 'rebar' within your .grunt-init the name of the folder is utilized later on when using the project scaffold.

### Windows Users

```
git clone https://github.com/linchpinagency/hatch.git %USERPROFILE%/.grunt-init/rebar
```

## Usage

At the command-line, ```cd``` into an empty directory, run the following command and follow the prompts.

```
grunt-init rebar
```

## Once grunt init completes ##

While you're working on your project you might need to run:

`npm install && bower install`

Lastly just run the gulp command

`gulp` You might need to install other dependencies as well. Install them as needed by using `npm install yadda yadda`

You can also check for Foundation updates. Run: ```foundation update``` (this requires the foundation gem to be installed in order to work. Please see the [docs](http://foundation.zurb.com/docs/sass.html) for details.)

**If you're having issues with Gulp after an update, run the following commands in terminal**
```
sudo npm cache clean -f
sudo npm install -g n
sudo n stable

bower update
```

## How to get started with Foundation

* [Zurb Foundation Docs](http://foundation.zurb.com/docs/)

## Learn how to use WordPress

* [WordPress Codex](http://codex.wordpress.org/)