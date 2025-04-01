// Alpine.js Directive Function for handling long press events
export const useLongPressDirective = () => {
  // Register the directive with Alpine.js
  window.Alpine.directive(
    "use-longpress",
    (el, { value, expression }, { evaluateLater, cleanup }) => {
      // Set the duration for the long press (default: 500ms)
      const duration = value || 500;
      let timeout;
      const evaluate = evaluateLater(expression);

      // Create and append custom styles for elements with the long press class
      const styleElement = document.createElement("style");
      styleElement.textContent = `
        .useLongpress, .useLongpress * {
          margin: 0;
          padding: 0;
          -webkit-tap-highlight-color: transparent !important;
          user-select: none !important;
          -webkit-user-select: none !important;
          -moz-user-select: none !important;
          -ms-user-select: none !important;
          -o-user-select: none !important;
          -webkit-user-drag: none !important;
          -webkit-overflow-scrolling: touch;
          scroll-behavior: smooth;
        }
      `;
      document.head.appendChild(styleElement);
      // Add a CSS class to the element to apply the above styles
      el.classList.add("useLongpress");

      // Function to prevent the context menu from appearing
      const preventContextMenu = (event) => {
        event.preventDefault();
      };

      // Function that starts the long press timer
      const startPress = () => {
        timeout = setTimeout(() => {
          evaluate();
        }, duration);
      };

      // Function that cancels the long press timer
      const cancelPress = () => {
        clearTimeout(timeout);
      };

      // Add event listeners to detect long press and prevent default context menu
      el.addEventListener("contextmenu", preventContextMenu);
      el.addEventListener("mousedown", startPress);
      el.addEventListener("touchstart", startPress);
      el.addEventListener("mouseup", cancelPress);
      el.addEventListener("mouseleave", cancelPress);
      el.addEventListener("touchend", cancelPress);
      el.addEventListener("touchcancel", cancelPress);

      // Cleanup function to remove event listeners when the directive is unmounted
      cleanup(() => {
        el.removeEventListener("contextmenu", preventContextMenu);
        el.removeEventListener("mousedown", startPress);
        el.removeEventListener("touchstart", startPress);
        el.removeEventListener("mouseup", cancelPress);
        el.removeEventListener("mouseleave", cancelPress);
        el.removeEventListener("touchend", cancelPress);
        el.removeEventListener("touchcancel", cancelPress);
      });
    }
  );
};

// Alpine.js Plugin to register the long press directive
const useLongPressPlugin = (Alpine) => {
  useLongPressDirective();
};

export default useLongPressPlugin;
