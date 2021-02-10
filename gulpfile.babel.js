'use strict'

// for this file to work
// create a file in root `.babelrc`
	// {
	//   "presets": [ "@babel/preset-env" ]
	// }

import gulp from 'gulp'
import sass from 'gulp-sass'
import autoprefixer from 'gulp-autoprefixer'
import babel from 'gulp-babel'
import concat from 'gulp-concat'
import uglify from 'gulp-uglify'
import rename from 'gulp-rename'
import cleanCSS from 'gulp-clean-css'
import del from 'del'
import bsync from 'browser-sync'

const pathsARC92 = {
	styles: {
		src:'sass/**/*.scss', // all scss files
		dest:'./' // ouput to top level of theme
	},
	scripts: {
		src:'js/components/**/*.js',
		dest:'js/' // output to js folder
	},
	phpFiles: {
		src:'**/*.php'
		// src:'./**/*.php'
	}
}

/* BrowserSync server setup START */
/* setup */

// firefox, chrome, other on single server
var bsyncServJKXC89 = bsync.create()
var reloadJKXC89 = bsyncServJKXC89.reload

// firefox server
var bsyncServJN5 = bsync.create()
var reloadJO88 = bsyncServJN5.reload

// chrome server
var bsyncServCR89D = bsync.create()
var reloadCR89D = bsyncServCR89D.reload

/* BrowserSync server setup END */


// removes all files in the array as a clean up function
export const cleanHU872 = ()=> del(['style.css','js/scripts.js'])

/* styles.css workflow START */
/* sass */
export function stylesIOX12() {
	return gulp.src(pathsARC92.styles.src,{sourcemaps:true})
	.pipe(sass().on('error',sass.logError))
	.pipe(autoprefixer())
	.pipe(cleanCSS())
	.pipe(concat('style.css'))
	// .pipe(rename({
	// 	basename:'style',
	// 	suffix:'.css'
	// }))
	.pipe(gulp.dest(pathsARC92.styles.dest))
	.pipe(bsyncServJN5.stream()) // pipe into browsers for real time viewing; if source maps true then use option `{match: '**/*.css'}` if NOT using inline; we're using inline so skip; stream to Firefox server
	.pipe(bsyncServCR89D.stream()) // stream to Chrome server
	// .pipe(bsyncServJKXC89.stream()) // stream to the chrome, firefox, other single server
}
/* styles.css workflow END */

/* scripts.js workflow START */
/* babel
ignore:  plugins.js
*/
export function scriptsERT08(done) {
	return gulp.src(pathsARC92.scripts.src,{sourcemaps:true})
	.pipe(babel())
	.pipe(uglify())
	.pipe(concat('scripts.js'))
	.pipe(gulp.dest(pathsARC92.scripts.dest))
	.pipe(bsyncServJN5.stream()) // pipe into browsers for real time viewing; if source maps true then use option `{match: '**/*.css'}` if NOT using inline; we're using inline so skip; stream to firefox server
	.pipe(bsyncServCR89D.stream()) // stream to chrome server
	// .pipe(bsyncServJKXC89.stream()) // stream to firefox, chrome, other single server
}

/* scripts.js workflow END */


/* browsersync workflow START */
/* version */

// pass these options to `.init()` of Browsersync servers
// see:  bsyncUIY432()

// options for multiple browsers on a single Browsersync server
// this is an option set passed
// if you can get 2 browsers in one
// currently can't get 2 browsers in one to work
const bsyncOptionsJKXC89 = {
	// proxy:'localhost:8091',
	proxy:{
		target:'localhost:8091',
		ws:true
	},
	browser: ["chrome", "firefox"],
	port:3065,
	ui: {
		port:3066
	}
}

// options for firefox browser
// doesn't work if `https:true` enabled
const bsyncOptionsNBMI82828 = {
	// proxy:'localhost:8091',
	proxy:{
		target:'localhost:8091',
		ws:true
	},
	browser: ["firefox"],
	// https: true,
	port:3060,
	ui: {
		port:3061
	}
}

// options for chrome browser
// only works if `https:true` enabled
const bsyncOptionsKRUL12991 = {
	// proxy:'localhost:8091',
	proxy:{
		target:'localhost:8091',
		ws:true
	},
	browser: ["chrome"],
	https: true,
	port: 3070,
	ui: {
		port: 3071
	}
}

// start server
// this is based on Docker localhost:[port]

export function bsyncUIY432() {
	// pass an object of options...

	// Firefox, Chrome, other on single server
	// bsyncServJKXC89.init(bsyncOptionsJKXC89)

	// Firefox, Chrome on separate servers
	bsyncServJN5.init(bsyncOptionsNBMI82828)
	bsyncServCR89D.init(bsyncOptionsKRUL12991)
}

/* browsersync workflow END */


/* watcher system START */
/* version */
function watchFilesCCV32() {
	bsyncUIY432() // start server(s)

	// /* chrome, firefox on a single server START */
	// /* reloadJKXC89 is that server
	//  */
	// gulp.watch(pathsARC92.styles.src,stylesIOX12).on('change',reloadJKXC89)
	// // js watch
	// gulp.watch(pathsARC92.scripts.src,scriptsERT08).on('change',reloadJKXC89)
	// // php watch
	// gulp.watch(pathsARC92.phpFiles.src).on('change',reloadJKXC89)
	// /* chrome, firefox on a single server END */

	/* chrome, firefox on separate servers START */
	/* using gulp parallel() to run tasks at the same time
	use series if you want it done in order */
	// css watch
	gulp.watch(pathsARC92.styles.src,stylesIOX12).on('change',gulp.parallel(reloadJO88,reloadCR89D))
	// js watch
	gulp.watch(pathsARC92.scripts.src,scriptsERT08).on('change',gulp.parallel(reloadJO88,reloadCR89D))
	// php watch
	gulp.watch(pathsARC92.phpFiles.src).on('change',gulp.parallel(reloadJO88,reloadCR89D))
	/* chrome, firefox on separate servers END */

}

export {watchFilesCCV32 as watch}

const buildQW828 = gulp.series(cleanHU872, gulp.parallel(stylesIOX12,scriptsERT08))
/* watcher system END */

/* Default tasks START */
/* versions */
export default buildQW828
/* Default tasks END */