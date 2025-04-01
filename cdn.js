import useThemePlugin, {
  ThemeManager,
  loadTheme,
} from "./src/use-theme/index.js";

import useLongPressPlugin from "./src/use-longpress/index.js";

// useTheme Only
const { applyTheme, getStoredTheme } = ThemeManager();
applyTheme(getStoredTheme());

// Events
document.addEventListener("DOMContentLoaded", () => {
  loadTheme();
});

document.addEventListener("alpine:init", () => {
  useThemePlugin();
  useLongPressPlugin();
});

document.addEventListener("livewire:navigated", () => {
  useThemePlugin();
});
