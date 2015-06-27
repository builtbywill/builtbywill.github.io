'use strict';

module.exports = function(grunt) {

    // Load grunt tasks automatically
    require('load-grunt-tasks')(grunt);

    // Time how long tasks take. Can help when optimizing build times
    require('time-grunt')(grunt);

    var config = require('./package.json');  

    var configurations = {
        debug: 'debug',
        release: 'release'
    };

    var tiers = {
        local: 'local',
        dev: 'dev',
        prod: 'prod'
    };  

    // Define the configuration for all the tasks
    grunt.initConfig({

        // Load package config
        pkg: config,

        // Watches files for changes and runs tasks based on the changed files
        watch: {
            bower: {
                files: ['bower.json'],
                tasks: ['wiredep']
            },
            js: {
                files: ['<%= pkg.src %>/app/**/*.js'],
                tasks: ['newer:jshint:all'],
                options: {
                    livereload: '<%= connect.options.livereload %>'
                }
            },
            jsTest: {
                files: ['<%= pkg.src %>/app/**/*.spec.js'],
                tasks: ['newer:jshint:test', 'karma']
            },
            styles: {
                files: ['<%= pkg.src %>/content/styles/{,*/}*.css'],
                tasks: ['newer:copy:styles', 'autoprefixer']
            },
            gruntfile: {
                files: ['gruntfile.js']
            },
            livereload: {
                options: {
                    livereload: '<%= connect.options.livereload %>'
                },
                files: [
                    '<%= pkg.src %>/**/*.html',
                    '.tmp/content/styles/{,*/}*.css',
                    '<%= pkg.src %>/content/images/{,*/}*.{png,jpg,jpeg,gif,webp,svg}'
                ]
            }
        },

        // The actual grunt server settings
        connect: {
            options: {
                port: 9000,
                // Change this to '0.0.0.0' to access the server from outside.
                hostname: 'localhost',
                livereload: 35729
            },
            livereload: {
                options: {
                    open: true,
                    middleware: function(connect) {
                        return [
                            connect.static('.tmp'),
                            connect().use(
                                '/bower_components',
                                connect.static('./<%= pkg.src %>/bower_components')
                            ),
                            connect().use(
                                '/content/styles',
                                connect.static('./<%= pkg.src %>/content/styles')
                            ),
                            connect.static('./<%= pkg.src %>')
                        ];
                    }
                }
            },
            test: {
                options: {
                    port: 9001,
                    middleware: function(connect) {
                        return [
                            connect.static('.tmp'),
                            connect.static('test'),
                            connect().use(
                                '/bower_components',
                                connect.static('./<%= pkg.src %>/bower_components')
                            ),
                            connect.static('./<%= pkg.src %>')
                        ];
                    }
                }
            },
            debug: {
                options: {
                    open: true,
                    base: '<%= pkg.src %>'
                }
            },
            release: {
                options: {
                    open: true,
                    base: '<%= pkg.output %>'
                }
            }
        },

        // Make sure code styles are up to par and there are no obvious mistakes
        jshint: {
            options: {
                jshintrc: '.jshintrc',
                reporter: require('jshint-stylish')
            },
            all: {
                src: [
                    'gruntfile.js',
                    '<%= pkg.src %>/app/**/!(*spec).js'
                ]
            },
            test: {
                options: {
                    jshintrc: '<%= pkg.test %>/.jshintrc'
                },
                src: ['<%= pkg.src %>/**/*.spec.js']
            }
        },

        // Empties folders to start fresh
        clean: {
            release: {
                files: [{
                    dot: true,
                    src: [
                        '.tmp',
                        '<%= pkg.output %>/{,*/}*',
                        '!<%= pkg.output %>/.git{,*/}*'
                    ]
                }]
            },
            server: '.tmp'
        },

        // Add vendor prefixed styles
        autoprefixer: {
            options: {
                browsers: ['last 1 version']
            },
            server: {
                options: {
                    map: true,
                },
                files: [{
                    expand: true,
                    cwd: '.tmp/content/styles/',
                    src: '{,*/}*.css',
                    dest: '.tmp/content/styles/'
                }]
            },
            release: {
                files: [{
                    expand: true,
                    cwd: '.tmp/content/styles/',
                    src: '{,*/}*.css',
                    dest: '.tmp/content/styles/'
                }]
            }
        },

        // Automatically inject Bower components into the app
        wiredep: {
            app: {
                src: ['<%= pkg.src %>/index.html'],
                ignorePath: /\.\.\//
            },
            test: {
                devDependencies: true,
                src: '<%= karma.unit.configFile %>',
                ignorePath: /\.\.\//,
                fileTypes: {
                    js: {
                        block: /(([\s\t]*)\/{2}\s*?bower:\s*?(\S*))(\n|\r|.)*?(\/{2}\s*endbower)/gi,
                        detect: {
                            js: /'(.*\.js)'/gi
                        },
                        replace: {
                            js: '\'{{filePath}}\','
                        }
                    }
                }
            }
        },

        // Renames files for browser caching purposes
        filerev: {
            release: {
                src: [
                    '<%= pkg.output %>/**/{,*/}*.js',
                    '<%= pkg.output %>/content/styles/{,*/}*.css',
                    '<%= pkg.output %>/content/images/{,*/}*.{png,jpg,jpeg,gif,webp,svg}',
                    '<%= pkg.output %>/content/fonts/*'
                ]
            }
        },

        // Reads HTML for usemin blocks to enable smart builds that automatically
        // concat, minify and revision files. Creates configurations in memory so
        // additional tasks can operate on them
        useminPrepare: {
            html: '<%= pkg.src %>/index.html',
            options: {
                dest: '<%= pkg.output %>',
                flow: {
                    html: {
                        steps: {
                            js: ['concat', 'uglifyjs'],
                            css: ['cssmin']
                        },
                        post: {}
                    }
                }
            }
        },

        // Performs rewrites based on filerev and the useminPrepare configuration
        usemin: {
            html: ['<%= pkg.output %>/**/*.html'],
            css: ['<%= pkg.output %>/content/styles/{,*/}*.css'],
            options: {
                assetsDirs: [
                    '<%= pkg.output %>',
                    '<%= pkg.output %>/content/images',
                    '<%= pkg.output %>/content/styles',
                    '<%= pkg.output %>/content/fonts'
                ]
            }
        },

        // The following *-min tasks will produce minified files in the output folder
        // By default, your `index.html`'s <!-- Usemin block --> will take care of
        // minification. These next options are pre-configured if you do not wish
        // to use the Usemin blocks.
        // cssmin: {
        //   release: {
        //     files: {
        //       '<%= pkg.output %>/styles/main.css': [
        //         '.tmp/styles/{,*/}*.css'
        //       ]
        //     }
        //   }
        // },
        // uglify: {
        //   release: {
        //     files: {
        //       '<%= pkg.output %>/scripts/scripts.js': [
        //         '<%= pkg.output %>/scripts/scripts.js'
        //       ]
        //     }
        //   }
        // },
        // concat: {
        //   release: {}
        // },

        imagemin: {
            release: {
                files: [{
                    expand: true,
                    cwd: '<%= pkg.src %>/content/images',
                    src: '{,*/}*.{png,jpg,jpeg,gif}',
                    dest: '<%= pkg.output %>/content/images'
                }]
            }
        },

        svgmin: {
            release: {
                files: [{
                    expand: true,
                    cwd: '<%= pkg.src %>/content/images',
                    src: '{,*/}*.svg',
                    dest: '<%= pkg.output %>/content/images'
                }]
            }
        },

        htmlmin: {
            release: {
                options: {
                    collapseWhitespace: true,
                    conservativeCollapse: true,
                    collapseBooleanAttributes: true,
                    removeCommentsFromCDATA: true,
                    removeOptionalTags: true,
                    removeComments: true
                },
                files: [{
                    expand: true,
                    cwd: '<%= pkg.output %>',
                    src: ['*.html', '**/*.html'],
                    dest: '<%= pkg.output %>'
                }]
            }
        },

        // ng-annotate tries to make the code safe for minification automatically
        // by using the Angular long form for dependency injection.
        ngAnnotate: {
            release: {
                files: [{
                    expand: true,
                    cwd: '.tmp/concat/scripts',
                    src: ['*.js', '!oldieshim.js'],
                    dest: '.tmp/concat/scripts'
                }]
            }
        },

        // replace variables in app code, matched variables should start with '@@'
        replace: {
            release: {
                options: {
                    patterns: [{
                        match: 'name',
                        replacement: '<%= pkg.name %>'
                    }, {
                        match: 'version',
                        replacement: '<%= pkg.version %>'
                    }, {
                        match: 'debug',
                        replacement: 'false'
                    }]
                },
                files: [{
                    expand: true,
                    src: [
                        '<%= pkg.output %>/**/*.html',
                        '<%= pkg.output %>/**/*.js'
                    ]
                }]
            }
        },

        // Copies remaining files to places other tasks can use
        copy: {
            release: {
                files: [{
                    expand: true,
                    dot: true,
                    cwd: '<%= pkg.src %>',
                    dest: '<%= pkg.output %>',
                    src: [
                        '*.{ico,png,txt}',
                        '.htaccess',
                        '*.html',
                        'app/**/{,*/}*.html',
                        'content/images/{,*/}*.{webp}',
                        'content/fonts/*.*'
                    ]
                }, {
                    expand: true,
                    cwd: '.tmp/images',
                    dest: '<%= pkg.output %>/content/images',
                    src: ['generated/*']
                }, {
                    expand: true,
                    cwd: '<%= pkg.src %>/bower_components/bootstrap/output',
                    src: 'fonts/*',
                    dest: '<%= pkg.output %>'
                }]
            },
            styles: {
                expand: true,
                cwd: '<%= pkg.src %>/content/styles',
                dest: '.tmp/content/styles/',
                src: '{,*/}*.css'
            }
        },

        // Run some tasks in parallel to speed up the build process
        concurrent: {
            server: [
                'copy:styles'
            ],
            test: [
                'copy:styles'
            ],
            release: [
                'copy:styles',
                'imagemin',
                'svgmin'
            ]
        },

        // Test settings
        karma: {
            unit: {
                configFile: '<%= pkg.test %>/karma.conf.js',
                singleRun: true
            }
        }
    });


/**
* TASKS
* ------------------------------------------------------------------------------------------------------
*/

    grunt.registerTask('test', [
        'clean:server',
        'wiredep',
        'concurrent:test',
        'autoprefixer',
        'connect:test',
        'newer:jshint:test',
        'karma'
    ]);

    grunt.registerTask('build', function(configuration, tier){

        grunt.task.run([
            'clean:release', // clear out .tmp/ and output/ folders
            'wiredep', // inject bower packages into html
            'useminPrepare', // congifure usemin, targets <!-- build --> blocks in HTML
            'concurrent:release', // start concurrent output tasks (compass, imgmin, svgmin)
            'autoprefixer',
            'concat', // concatenate JS into new files in '.tmp'
            'ngAnnotate', // JS dependency injection for safe minification, looks for /* @ngInject */ comments, adds $inject
            'copy:release', // copy all remaining files to 'output' (e.g. HTML, Fonts, .htaccess, etc.)
            'cssmin', // concatenate and minify CSS into new 'output' files
            'uglify', // minify JS files from '.tmp' and copy to 'output'
            //'replace', // replace variables, e.g. '@@foo' with 'bar'
            'filerev', // rename CSS, JS and Font files with unique hashes
            'usemin', // update references in HTML with new minified, rev-ed files
            'htmlmin' // minify HTML markup
        ]);

    });

    grunt.registerTask('serve', 'Compile then start and connect web server', function(configuration, tier) {

        if (configuration === configurations.release) {
            return grunt.task.run([
                'build', 
                'connect:release:keepalive'
            ]);
        }

        grunt.task.run([
            'clean:server',
            'wiredep',
            'concurrent:server',
            'autoprefixer:server',
            'connect:livereload',
            'watch'
        ]);
    });

    grunt.registerTask('default', [
        'newer:jshint',
        'test',
        'build'
    ]);
};
