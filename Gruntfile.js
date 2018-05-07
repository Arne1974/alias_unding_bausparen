module.exports = function (grunt) {
    // Do grunt-related things in here
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        uglify: {
            options: {
            },
			my_target: {
				files: {
					'js/main.min.js': ['js/main.js'],
					'js/formular.min.js': ['js/formular.js']
				}
			}
        },
        cssmin: {
            target: {
                files: [{
                        expand: true,
                        cwd: 'css',
                        src: ['main.css'],
                        dest: 'css',
                        ext: '.min.css'
                    }]
            }
        },
        jshint: {
            options: {
                curly: true,
                eqeqeq: true,
                eqnull: true,
                browser: true,
                globals: {
                    jQuery: true
                },
                devel: true
            },
            uses_defaults: 'js/main.js',
            with_overrides: {
                options: {
                    curly: false,
                    undef: true
                },
                files: {
                    src: ['js/main.js']
                }
            }
        },
        watch: {
            uglify: {
                files: ['js/main.js'],
                tasks: ['uglify']
            },
            cssmin: {
                files: ['css/main.css'],
                tasks: ['cssmin']
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-jshint');

    // Default task(s).
    grunt.registerTask('default', ['uglify', 'cssmin', 'jshint']);
};