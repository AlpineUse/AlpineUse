document.addEventListener("DOMContentLoaded", () => {
  const isSupport = !!navigator.share;
  document.querySelectorAll("[x-use-share]").forEach((el) => {
    el.setAttribute("x-data", `{ isSupport: ${isSupport} }`);
  });
});

document.addEventListener("alpine:init", () => {
  Alpine.directive("use-share", (el, { expression }, { evaluate }) => {
    el.addEventListener("click", async () => {
      const shareData = evaluate(expression);
      if (navigator.share) {
        try {
          await navigator.share(shareData);
          console.log("Success: useShare");
        } catch (err) {
          console.error("Failed: useShare", err);
        }
      } else {
        console.error("useShare not supported");
      }
    });
  });
});
