// Constants
const THEMES = new Set(["auto", "light", "dark"]);
const DEFAULT_THEME = "auto";
const DARK_CLASS = "dark";
const LIGHT_CLASS = "light";
const STORAGE_KEY = "useTheme";

// Save theme in localStorage and Check if support storage in browser or not !
export const themeStorage = (theme) => {
  try {
    if (theme) {
      localStorage.setItem(STORAGE_KEY, theme);
    }
  } catch (e) {
    console.warn("localStorage is disabled. Failed to store theme preference.");
  }
};

// Theme Manager
export const ThemeManager = () => {
  const prefersDark = window.matchMedia("(prefers-color-scheme: dark)");

  const getStoredTheme = () => {
    const storedTheme = localStorage.getItem(STORAGE_KEY);
    return THEMES.has(storedTheme) ? storedTheme : DEFAULT_THEME;
  };

  const applyTheme = (theme) => {
    const validTheme = THEMES.has(theme) ? theme : DEFAULT_THEME;
    const isDark =
      validTheme === DARK_CLASS ||
      (validTheme === "auto" && prefersDark.matches);

    document.documentElement.classList.toggle(DARK_CLASS, isDark);
    document.documentElement.classList.toggle(LIGHT_CLASS, !isDark);
    themeStorage(validTheme);
  };

  return { applyTheme, getStoredTheme, prefersDark };
};

// Load Theme using [x-use-theme] attribute
export const loadTheme = () => {
  const el = document.querySelector("[x-use-theme]");
  if (!el) return;
  const defaultTheme = el.getAttribute("x-use-theme");
  const storedTheme = localStorage.getItem(STORAGE_KEY);

  let themeToApply = DEFAULT_THEME;

  if (defaultTheme && THEMES.has(defaultTheme)) {
    themeToApply = defaultTheme;
  } else if (storedTheme && THEMES.has(storedTheme)) {
    themeToApply = storedTheme;
  }

  const { prefersDark, applyTheme, getStoredTheme } = ThemeManager();
  applyTheme(themeToApply);

  const systemThemeHandler = () => {
    if (getStoredTheme() === "auto") {
      applyTheme("auto");
    }
  };

  prefersDark.addEventListener("change", systemThemeHandler);
};

// Alpine.js Magic Function
export const useThemeMagic = () => {
  const { applyTheme, getStoredTheme } = ThemeManager();

  window.Alpine.magic("useTheme", () => {
    const themeValue = { value: getStoredTheme() };
    return {
      set: (newTheme) => {
        if (THEMES.has(newTheme)) {
          applyTheme(newTheme);
          themeValue.value = newTheme;
        }
      },
      get: () => themeValue.value,
      get value() {
        return themeValue.value;
      },
      set value(newTheme) {
        if (THEMES.has(newTheme)) {
          applyTheme(newTheme);
          themeValue.value = newTheme;
        }
      },
    };
  });
};

// Alpine.js Plugin
const useThemePlugin = (Alpine) => {
  useThemeMagic(); // Register the magic function
  loadTheme(); // Load initial theme
};

export default useThemePlugin; // Export the plugin
