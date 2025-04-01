import useThemePlugin from "./src/use-theme/index.js";
import useLongPressPlugin from "./src/use-longpress/index.js";

// Alpine.js Plugin
const useAllPlugins = (Alpine) => {
  useThemePlugin();
  useLongPressPlugin();
};

export default useAllPlugins;
