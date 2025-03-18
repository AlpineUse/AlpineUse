document.addEventListener("alpine:init", () => {
  Alpine.directive(
    "use-dbclick",
    (el, { expression }, { evaluateLater, cleanup }) => {
      const evaluate = evaluateLater(expression); // إعداد تنفيذ التعبير
      let lastClickTime = 0; // زمن النقر الأخير

      const StyleUseDbClick = document.createElement("style");
      StyleUseDbClick.textContent = `
                                        .useDbClick, .useDbClick * {
                                            touch-action: manipulation;
                                            pointer-events: auto;
                                                touch-action: none;
                                                -webkit-user-select: none;
                                                -moz-user-select: none;
                                                -ms-user-select: none;
                                                user-select: none;
                                        }
                                    `;
      document.head.appendChild(StyleUseDbClick);
      el.classList.add("useDbClick");

      // إجراء يتم تنفيذه عند النقر
      const handleClick = () => {
        const currentTime = new Date().getTime();
        // تحقق من الفرق بين النقرات
        if (currentTime - lastClickTime < 200) {
          evaluate(); // تنفيذ التعبير إذا كان الفارق أقل من 200 مللي ثانية
        }
        lastClickTime = currentTime; // تحديث زمن النقر الأخير
      };

      el.addEventListener("contextmenu", (event) => {
        event.preventDefault();
      });

      // إضافة مستمع للنقر
      el.addEventListener("click", handleClick);

      // تنظيف الأحداث عند إزالة العنصر
      cleanup(() => {
        el.removeEventListener("click", handleClick);
      });
    }
  );
});
