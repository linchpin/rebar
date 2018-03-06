/**
 * hatch grunt scaffold
 * heavily based on the grunt-wp-them
 * Copyright (c) 2015 Aaron Aaron Ware, Maxwell Morgan, Jonathan Desrosiers, Linchpin
 * Updated by aware on 6/21/15.
 *
 * Cleaned up and removed some unneeded elements
 *
 * grunt-wp-theme
 * https://github.com/10up/grunt-wp-theme
 *
 * Copyright (c) 2013 Eric Mann, 10up
 * Licensed under the MIT License
 *
 */

'use strict';

// Basic template description
exports.description = 'Create a WordPress theme based on Foundation.';

// Template-specific notes to be displayed before question prompts.
exports.notes = '_Project Classes and Namespaces_ should not contain "Hatch", "Rebar", "Linchpin" or "WordPress" and ' +
    'should be a unique ID not already in use in wordpress.org plugins or themes directory. _Theme ' +
    'name_ should be a human-readable title, and doesn\'t need to contain ' +
    'the word "WordPress", although it may. For example, a theme named "Awesome ' +
    'Theme" might have the name space "awesome-theme".' +
    '\n\n'+
    'For more information, please see the WordPress coding standards';

exports.after = 'You should now _cd to_your_base_path' +
    '_ and install project dependencies with _npm ' +
    'install && bower install_.  After that, you may execute project tasks with _gulp_. For ' +
    'more information about installing and configuring Gulp, please see ' +
    'the Getting Started guide:' +
    '\n\n' +
    'https://github.com/gulpjs/gulp/blob/master/docs/getting-started.md';

// Any existing file or directory matching this wildcard will cause a warning.
// exports.warnOn = '*';

exports.warnOn = ['*.php', '*.js'];

// The actual init template
exports.template = function( grunt, init, done ) {

    var base_path = 'wp-content/themes/'; // define our default base path

    init.process( {}, [
        // Prompt for these values.
        {
            name   : 'title',
            message: 'WordPress Theme Name / Client Name',
            default: 'My New Theme'
        },
        {
            name   : 'php_class_name',
            message: 'PHP Class name used to encapsulate our code',
            default: 'MyThemeClass'
        },
        {
            name   : 'prefix',
            message: 'PHP and JavaScript function prefix (alpha and underscore characters only)',
            default: 'mytheme_'
        },
        {
            name   : 'create_base_directories',
            message: 'Would you like to create "/wp-content/themes/" parent directories?',
            default: 'Y/n'
        },
        init.prompt( 'base_version', '1.0.0' ),
        init.prompt( 'description', 'A brief description about the theme or client.' ),
        init.prompt( 'homepage', 'http://linchpin.agency' ),
        init.prompt( 'author_name' ),
        init.prompt( 'author_email' ),
        init.prompt( 'author_url', 'http://linchpin.agency' ),
        {
            name   : 'text_domain',
            message: 'Text domain used for localization',
            default: 'mytheme'
        }
    ], function( err, props ) {
        props.keywords = [];
        props.version = '1.0.0';
        props.devDependencies = {
            "gulp": "^3.9.1",
            "gulp-autoprefixer": "^3.1.0",
            "gulp-concat": "^2.6.0",
            "gulp-imagemin": "^2.4.0",
            "gulp-sass": "^2.2.0",
            "gulp-watch": "^4.3.5",
            "imagemin-pngquant": "^4.2.2",
            "gulp-bump": "^3.1.0"
        };

        // Sanitize names where we need to for PHP/JS
        props.name               = props.title.replace( /\s+/g, '-' ).toLowerCase();

        // Development prefix (i.e. to prefix PHP function names, variables)
        props.prefix             = props.prefix.replace('/[^a-z_]/i', '').toLowerCase();

        // Development prefix in all caps (e.g. for constants)
        props.prefix_caps        = props.prefix.toUpperCase();

        // An additional value, safe to use as a JavaScript identifier.
        props.js_name            = props.php_class_name.replace( /\s+/g, '-' ).toLowerCase();
        props.js_safe_name       = props.js_name.replace(/[\W_]+/g, '_').replace(/^(\d)/, '_$1');
        props.js_object_name     = props.php_class_name.replace('/[^a-z_]/i', '').toLowerCase();

        // An additional values
        props.js_test_safe_name  = props.js_safe_name === 'hatch' ? 'MyHatch' : props.js_safe_name;
        props.js_safe_name_caps  = props.js_safe_name.toUpperCase();
        props.js_safe_name_lower = props.js_safe_name.toLowerCase();

        // Text Domain for localization
        props.text_domain        = props.text_domain.replace('/[^a-z_]/i', '').toLowerCase();

        // Files to copy and process
        var files = init.filesToCopy( props );

        base_path = base_path + props.name + '/'; // update our path and folder name

        if( 'N' == props.create_base_directories.toUpperCase() ) {
            base_path = '';
        }

        // Update the path the files correctly
        for ( var file in files ) {
            if ( file.indexOf( 'theme/' ) > -1 ) {
                var path = files[ file ],
                    newFile = file.replace( 'theme/', base_path );
                files[ newFile ] = path;
                delete files[ file ];
            }
        }

        // Actually copy and process files
        init.copyAndProcess( files, props );

        // Generate package.json file
        init.writePackageJSON( base_path + '/package.json', props );

        // Done!
        done();
    });
};