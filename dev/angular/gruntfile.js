'use strict';

module.exports = function(grunt) {

    // Load grunt tasks automatically
    require('load-grunt-tasks')(grunt);

    // Time how long tasks take. Can help when optimizing build times
    require('time-grunt')(grunt);

    var config = require('./package.json');

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
                files: ['<%= pkg.dev %>/app/**/*.js'],
                tasks: ['newer:jshint:all'],
                options: {
                    livereload: '<%= connect.options.livereload %>'
                }
            },
            jsTest: {
                files: ['<%= pkg.dev %>/app/**/*.spec.js'],
                tasks: ['newer:jshint:test', 'karma']
            },
            styles: {
                files: ['<%= pkg.dev %>/content/styles/{,*/}*.css'],
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
                    '<%= pkg.dev %>/**/*.html',
                    '.tmp/content/styles/{,*/}*.css',
                    '<%= pkg.dev %>/content/images/{,*/}*.{png,jpg,jpeg,gif,webp,svg}'
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
                                connect.static('./<%= pkg.dev %>/bower_components')
                            ),
                            connect().use(
                                '/content/styles',
                                connect.static('./<%= pkg.dev %>/content/styles')
                            ),
                            connect.static(config.dev)
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
                                connect.static('./<%= pkg.dev %>/bower_components')
                            ),
                            connect.static(config.dev)
                        ];
                    }
                }
            },
            dist: {
                options: {
                    open: true,
                    base: '<%= pkg.dist %>'
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
                    '<%= pkg.dev %>/app/**/!(*spec).js'
                ]
            },
            test: {
                options: {
                    jshintrc: '<%= pkg.test %>/.jshintrc'
                },
                src: ['<%= pkg.dev %>/**/*.spec.js']
            }
        },

        // Empties folders to start fresh
        clean: {
            dist: {
                files: [{
                    dot: true,
                    src: [
                        '.tmp',
                        '<%= pkg.dist %>/{,*/}*',
                        '!<%= pkg.dist %>/.git{,*/}*'
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
            dist: {
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
                src: ['<%= pkg.dev %>/index.html'],
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
            dist: {
                src: [
                    '<%= pkg.dist %>/**/{,*/}*.js',
                    '<%= pkg.dist %>/content/styles/{,*/}*.css',
                    '<%= pkg.dist %>/content/images/{,*/}*.{png,jpg,jpeg,gif,webp,svg}',
                    '<%= pkg.dist %>/content/fonts/*'
                ]
            }
        },

        // Reads HTML for usemin blocks to enable smart builds that automatically
        // concat, minify and revision files. Creates configurations in memory so
        // additional tasks can operate on them
        useminPrepare: {
            html: '<%= pkg.dev %>/index.html',
            options: {
                dest: '<%= pkg.dist %>',
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
            html: ['<%= pkg.dist %>/**/*.html'],
            css: ['<%= pkg.dist %>/content/styles/{,*/}*.css'],
            options: {
                assetsDirs: [
                    '<%= pkg.dist %>',
                    '<%= pkg.dist %>/content/images',
                    '<%= pkg.dist %>/content/styles',
                    '<%= pkg.dist %>/content/fonts'
                ]
            }
        },

        // The following *-min tasks will produce minified files in the dist folder
        // By default, your `index.html`'s <!-- Usemin block --> will take care of
        // minification. These next options are pre-configured if you do not wish
        // to use the Usemin blocks.
        // cssmin: {
        //   dist: {
        //     files: {
        //       '<%= pkg.dist %>/styles/main.css': [
        //         '.tmp/styles/{,*/}*.css'
        //       ]
        //     }
        //   }
        // },
        // uglify: {
        //   dist: {
        //     files: {
        //       '<%= pkg.dist %>/scripts/scripts.js': [
        //         '<%= pkg.dist %>/scripts/scripts.js'
        //       ]
        //     }
        //   }
        // },
        // concat: {
        //   dist: {}
        // },

        imagemin: {
            dist: {
                files: [{
                    expand: true,
                    cwd: '<%= pkg.dev %>/content/images',
                    src: '{,*/}*.{png,jpg,jpeg,gif}',
                    dest: '<%= pkg.dist %>/content/images'
                }]
            }
        },

        svgmin: {
            dist: {
                files: [{
                    expand: true,
                    cwd: '<%= pkg.dev %>/content/images',
                    src: '{,*/}*.svg',
                    dest: '<%= pkg.dist %>/content/images'
                }]
            }
        },

        htmlmin: {
            dist: {
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
                    cwd: '<%= pkg.dist %>',
                    src: ['*.html', '**/*.html'],
                    dest: '<%= pkg.dist %>'
                }]
            }
        },

        // ng-annotate tries to make the code safe for minification automatically
        // by using the Angular long form for dependency injection.
        ngAnnotate: {
            dist: {
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
            dist: {
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
                        '<%= pkg.dist %>/**/*.html',
                        '<%= pkg.dist %>/**/*.js'
                    ]
                }]
            }
        },

        // Copies remaining files to places other tasks can use
        copy: {
            dist: {
                files: [{
                    expand: true,
                    dot: true,
                    cwd: '<%= pkg.dev %>',
                    dest: '<%= pkg.dist %>',
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
                    dest: '<%= pkg.dist %>/content/images',
                    src: ['generated/*']
                }, {
                    expand: true,
                    cwd: '<%= yeoman.dev %>/bower_components/bootstrap/dist',
                    src: 'fonts/*',
                    dest: '<%= yeoman.dist %>'
                }]
            },
            styles: {
                expand: true,
                cwd: '<%= pkg.dev %>/content/styles',
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
            dist: [
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

    grunt.registerTask('serve', 'Compile then start a connect web server', function(target) {
        if (target === 'dist') {
            return grunt.task.run(['build', 'connect:dist:keepalive']);
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

    grunt.registerTask('test', [
        'clean:server',
        'wiredep',
        'concurrent:test',
        'autoprefixer',
        'connect:test',
        'newer:jshint:test',
        'karma'
    ]);

    grunt.registerTask('build', [
        'clean:dist', // clear out .tmp/ and dist/ folders
        'wiredep', // inject bower packages into html
        'useminPrepare', // congifure usemin, targets <!-- build --> blocks in HTML
        'concurrent:dist', // start concurrent dist tasks (compass, imgmin, svgmin)
        'autoprefixer',
        'concat', // concatenate JS into new files in '.tmp'
        'ngAnnotate', // JS dependency injection for safe minification, looks for /* @ngInject */ comments, adds $inject
        'copy:dist', // copy all remaining files to 'dist' (e.g. HTML, Fonts, .htaccess, etc.)
        'cssmin', // concatenate and minify CSS into new 'dist' files
        'uglify', // minify JS files from '.tmp' and copy to 'dist'
        //'replace', // replace variables, e.g. '@@foo' with 'bar'
        'filerev', // rename CSS, JS and Font files with unique hashes
        'usemin', // update references in HTML with new minified, rev-ed files
        'htmlmin' // minify HTML markup
    ]);

    grunt.registerTask('default', [
        'newer:jshint',
        'test',
        'build'
    ]);
};
