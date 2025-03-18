import useThemePlugin, { ThemeManager, loadTheme } from "./index.js";

// Before we can use the ThemeManager functions, we need to initialize it
const { applyTheme, getStoredTheme } = ThemeManager();
applyTheme(getStoredTheme());

// Load Theme using [x-use-theme] attribute
document.addEventListener("DOMContentLoaded", () => {
  loadTheme();
});

// Alpine.js init
document.addEventListener("alpine:init", () => {
  useThemePlugin();
});

// Livewire navigation
document.addEventListener("livewire:navigated", () => {
  useThemePlugin();
});
