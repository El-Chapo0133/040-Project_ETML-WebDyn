/**
 * Autor : Loris Levêque
 * 
 * Desc  : Gulp 4.0.0 for auto task
 * 
 * **************************************************************/

const { src, dest } = require("gulp");
const rename = require("gulp-rename");
const minifyCss = require("gulp-clean-css");
const imgResize = require("gulp-image-resize");

function cssMinify() {
    return src("../css/*.css")
        .pipe(minifyCss({compatibility: 'ie9'}))
        .pipe(rename({suffix: ".min"}))
        .pipe(dest("../css/minify"))
}

function resizePNG() {
    return src("../images/*.png")
        .pipe(imgResize({
            width: 300,
            height: 250,
            crop: true,
            upscale: true
        }))
        .pipe(dest("../images/resized"))
}
function resizeJPEG() {
    return src("../images/*.jpeg")
        .pipe(imgResize({
            width: 300,
            height: 250,
            crop: true,
            upscale: true
        }))
        .pipe(dest("../images/resized"))
}
function resizeJPG() {
    return src("../images/*.jpg")
        .pipe(imgResize({
            width: 300,
            height: 250,
            crop: true,
            upscale: true
        }))
        .pipe(dest("../images/resized"))
}

exports.cssMinify = cssMinify;
exports.resizeImgPNG = resizePNG;
exports.resizeImgJPEG = resizeJPEG;
exports.resizeImgJPG = resizeJPG;