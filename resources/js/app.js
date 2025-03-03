import "./bootstrap";

import "iconify-icon";
import "@animxyz/core";

// Nprogress with livewire
import "nprogress/nprogress.css";
import NProgress from "nprogress";
document.addEventListener("livewire:navigate", () => {
    NProgress.start();
});
document.addEventListener("livewire:navigated", () => {
    NProgress.done();
});

// AlpineUse
import "/node_modules/alpineuse/use-theme/index.min.js";

import "@fontsource/ibm-plex-sans-arabic/400.css";
import "@fontsource/ibm-plex-sans-arabic/700.css";
