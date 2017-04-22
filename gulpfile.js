var g = require("gulp"),
        mincss = require("gulp-cssmin"),
        rename = require("gulp-rename"),
        con = require("gulp-concat"),
        ugl = require("gulp-uglify");

g.task("default", function () {
    g.src("css/site.css")
            .pipe(mincss())
            .pipe(rename({suffix: ".min"}))
            .pipe(g.dest('css'));
});

g.task("js", function () {
    g.src(['bower/jquery/dist/jquery.js', "site/js/*.js"])
            .pipe(con("app.js"))
            .pipe(ugl())
            .pipe(rename({suffix: ".min"}))
            .pipe(g.dest("site/js/build"));
});


g.task("build", function () {
  g.src('css/site.min.css')
            .pipe(g.dest('dest/css'));
    
    g.src('site/js/build/app.min.js')
            .pipe(g.dest('dest/site/js/build')); 
	
	g.src("core/*.*")
	.pipe(g.dest("dest/core"));
	
	g.src("foto/**/*.*")
	.pipe(g.dest("dest/foto"));
	
	g.src("images/**/*.*")
	.pipe(g.dest("dest/images"));
	
	g.src("img/*.*")
	.pipe(g.dest("dest/img"));
	
	g.src("posters/*.*")
	.pipe(g.dest("dest/posters"));
	
	g.src("posters/preview/*.*")
	.pipe(g.dest("dest/posters/preview"));
	
	g.src("site/*.*")
	.pipe(g.dest("dest/site"));
	
	g.src("upload/**/*.*")
	.pipe(g.dest("dest/upload"));
	
	g.src("users/**/*.*")
	.pipe(g.dest("dest/users"));
	
	g.src(['index.php' , '.htaccess'])
	.pipe(g.dest("dest"));
	
	g.src("fancybox/*.php")
	.pipe(g.dest("dest/fancybox"));
	
	
});
	
