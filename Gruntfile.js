module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        // TASKS

        // UGLIFY
        uglify: {
            build: {
                src: 'src/js/main.js',
                dest: 'dist/js/main.min.js'
            }
        },

        // JSHINT
        jshint: {
            all: ['Gruntfile.js', 'src/**/*.js', 'dist/**/*.js'],
            options: {
                globals: {
                    curly: true,
                    eqeqeq: true,
                    eqnull: true,
                    browser: true,
                    jQuery: true,
                    console: true,
                    module: true,
                    document: true
                }
            }
        },

        // LESS
        less: {
            dist: {
                files: {
                    'src/css/main.css': 'src/less/main.less'
                }
            }
        },

        // WATCH
        watch: {
            php: {
                files: '**/*.php',
            },
            css: {
                files: '**/*.less',
                tasks: ['less'],
            },
            js: {
                files: '**/*.js',
                tasks: ['jshint'],
            }
        },

    });

    // LOAD TASKS
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-compress');

    // REGISTER TASKS
    grunt.registerTask(['default'], 'watch', 'less', 'jshint', 'uglify');

};