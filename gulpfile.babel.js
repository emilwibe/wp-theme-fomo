"use strict";

import { src, dest, series } from "gulp";
import concat from "gulp-concat";
import cleanCSS from "gulp-clean-css";
import sourcemaps from "gulp-sourcemaps";
import uglify from "gulp-uglify";

const paths = {
  css: [
    "./src/css/fonts.css",
    "./src/css/animations.css",
    "./src/css/base.css",
    "./src/css/layout.css",
    "./src/css/state.css",
    "./src/css/module.css",
    "./src/css/theme.css",
    "./src/css/global-nav.css",
    // FLEX MODS
    "./src/css/flex-mods/intro-pages.css",
    "./src/css/flex-mods/text.css",
    "./src/css/flex-mods/buttons.css",
    "./src/css/flex-mods/tabs.css",
    "./src/css/flex-mods/accordion.css",
    "./src/css/flex-mods/insurance-grid.css",
    "./src/css/flex-mods/case.css",
    "./src/css/flex-mods/vision.css",
    "./src/css/flex-mods/cta.css",
    "./src/css/flex-mods/latest-news.css",
    "./src/css/flex-mods/stacking-cards.css",
    "./src/css/flex-mods/wysiwyg.css",
    "./src/css/flex-mods/video.css",
    "./src/css/flex-mods/img.css",
    "./src/css/flex-mods/img-wysiwyg.css",
    "./src/css/flex-mods/emp-map.css",
    "./src/css/flex-mods/faq.css",
    "./src/css/flex-mods/table.css",
    "./src/css/flex-mods/insurance-archive.css",
    "./src/css/flex-mods/benefits.css",
    "./src/css/flex-mods/team.css",
    "./src/css/flex-mods/advice.css",
    "./src/css/flex-mods/intro-contact.css",
    "./src/css/flex-mods/img-breaker.css",
    "./src/css/flex-mods/img-grid.css",
    "./src/css/flex-mods/intro-call-me.css",
    "./src/css/_buttons.css",
    "./src/css/overlay.css",
    

    //"./src/css/flex-mods/**/*.css",
    "./src/libs/splide/splide.min.css"
  ],
  scriptsHead: [
    "./src/js/scripts-head.js"
  ],
  scriptsFooter: [
    "./src/libs/splide/splide.min.js",
    "./src/js/scripts-footer.js",
    "./src/js/flex_mod_map.js",
    "./src/js/flex_mod_faq.js",
    "./src/js/flex_mod_table.js",
    "./src/js/flex_mod_benefits.js",
    "./src/js/flex_mod_team.js",
    "./src/js/flex_mod_case.js",
    "./src/js/flex_mod_cta.js",
    "./src/js/global-nav.js",
    "./src/js/fomo_search.js"
  ],
};

const dirs = {
  dest: "./dist",
  css: "./dist/css",
  js: "./dist/js",
};

export const styles = () =>
  src(paths.css, { sourcemaps: true })
    .pipe(concat("core.min.css"))
    .pipe(cleanCSS({ compatibility: "*" }))
    .pipe(dest(dirs.css, { sourcemaps: true }));

export const styles_dev = () =>
  src(paths.css, { sourcemaps: true })
    .pipe(concat("core.dev.css"))
    .pipe(dest(dirs.css, { sourcemaps: true }));

export const jsHead = () =>
  src(paths.scriptsHead)
    .pipe(concat("scripts-head.js"))
    .pipe(uglify())
    .pipe(dest(dirs.js));

export const jsFooter = () =>
  src(paths.scriptsFooter)
    .pipe(concat("scripts-footer.js"))
    //.pipe(uglify())
    .pipe(dest(dirs.js));

exports.default = series(styles, styles_dev, jsHead, jsFooter);