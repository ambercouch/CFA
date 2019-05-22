module.exports = function (grunt) {

    // 1. All configuration goes here
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        watch: {
            css: {
                files: 'assets/scss/**/*.scss',
                tasks: ['sass', 'postcss'],
            },
            svg: {
                files: 'assets/images/svg/*.svg',
                tasks: ['svgstore']
            }
            ,
            js: {
                files: 'assets/js/*.js',
                tasks: ['uglify']
            }
        },
        sass: {
            options: {
                sourceMap: true
            },
            dist: {
                files: {
                    'style.css': 'assets/scss/style.scss'
                }
            }
        },
        svgstore: {
            options: {
                svg: {
                    style: "display:none"
                },
                prefix: 'icon-', // This will prefix each ID
                svg: {// will be added as attributes to the resulting SVG
                    viewBox: '0 0 100 100'
                }
            },
            default: {
                files: {
                    'assets/images/defs.svg': ['assets/images/svg/*.svg'],
                }
                //your_target: {
            }
        }, //svgstore
        uglify: {
            my_target: {
                files: {
                    'assets/js/dist/main.js': [
                        'assets/vendor/remodal/dist/jquery.remodal.js',
                        'assets/vendor/fitvids/jquery.fitvids.js',
                        //'assets/vendor/flowplayer/lib/engine/embed.js',
                        'assets/js/plugins.js',
                        'assets/js/ac-inuk.js']
                }
            }
        },
        browserSync: {
            dev: {
                bsFiles: {
                    src: [
                        'style.css',
                        '*.php'
                    ]
                },
                options: {
                    proxy: 'http://cathedralfacialaesthetics.local/',
                    watchTask: true
                }
            }
        },
        postcss: {
            options: {
                map: {
                    inline: false, // save all sourcemaps as separate files...
                    annotation: 'dist/css/maps/' // ...to the specified directory
                },

                processors: [
                    require('pixrem')(), // add fallbacks for rem units
                    require('autoprefixer-core')({browsers: 'last 2 versions'}), // add vendor prefixes
                    require('cssnano')() // minify the result
                ]
            },
            dist: {
                src: 'style.css'
            }
        },//postcss
        criticalcss: {
            custom: {
                options: {
                    url: "http://cathedralfacialaesthetics.local/",
                    width: 1200,
                    height: 900,
                    outputfile: "assets/css/critical.css",
                    filename: "assets/css/style.css", // Using path.resolve( path.join( ... ) ) is a good idea here
                    buffer: 800 * 1024,
                    ignoreConsole: false
                }
            }
        }
    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-svgstore');
    grunt.loadNpmTasks('grunt-browser-sync');
    grunt.loadNpmTasks('grunt-postcss');
    grunt.loadNpmTasks('grunt-criticalcss');


    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['sass','postcss']);
    grunt.registerTask('serve', ['browserSync', 'watch']);
};
