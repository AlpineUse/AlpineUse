document.addEventListener("alpine:init", () => {
  Alpine.directive(
    "use-longpress",
    (el, { value, expression }, { evaluateLater, cleanup }) => {
      const duration = value || 500;
      let timeout;
      const evaluate = evaluateLater(expression);

      const StyleUseLongpress = document.createElement("style");
      StyleUseLongpress.textContent = `
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
      document.head.appendChild(StyleUseLongpress);
      el.classList.add("useLongpress");

      const startPress = () => {
        timeout = setTimeout(() => {
          evaluate();
        }, duration);

        el.addEventListener("contextmenu", (event) => {
          event.preventDefault();
        });
      };

      const cancelPress = () => {
        clearTimeout(timeout);
        el.addEventListener("contextmenu", (event) => {
          event.preventDefault();
        });
      };

      el.addEventListener("contextmenu", (event) => {
        event.preventDefault();
      });

      el.addEventListener("mousedown", startPress);
      el.addEventListener("touchstart", startPress);
      el.addEventListener("mouseup", cancelPress);
      el.addEventListener("mouseleave", cancelPress);
      el.addEventListener("touchend", cancelPress);
      el.addEventListener("touchcancel", cancelPress);

      cleanup(() => {
        el.removeEventListener("contextmenu", (event) =>
          event.preventDefault()
        );
        el.removeEventListener("mousedown", startPress);
        el.removeEventListener("touchstart", startPress);
        el.removeEventListener("mouseup", cancelPress);
        el.removeEventListener("mouseleave", cancelPress);
        el.removeEventListener("touchend", cancelPress);
        el.removeEventListener("touchcancel", cancelPress);
      });
    }
  );
});
