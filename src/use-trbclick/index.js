document.addEventListener("alpine:init", () => {
  Alpine.directive(
    "use-tbclick",
    (el, { expression }, { evaluateLater, cleanup }) => {
      const evaluate = evaluateLater(expression); // إعداد تنفيذ التعبير
      let clickCount = 0; // عداد النقرات
      let lastClickTime = 0; // زمن النقر الأخير

      const StyleUseTbClick = document.createElement("style");
      StyleUseTbClick.textContent = `
                                        .useTbClick, .useTbClick * {
                                            touch-action: manipulation;
                                            pointer-events: auto;
                                                touch-action: none;
                                                -webkit-user-select: none;
                                                -moz-user-select: none;
                                                -ms-user-select: none;
                                                user-select: none;
                                        }
                                    `;
      document.head.appendChild(StyleUseTbClick);
      el.classList.add("useTbClick");

      // إجراء يتم تنفيذه عند النقر
      const handleClick = () => {
        const currentTime = new Date().getTime();

        // تحقق من الفرق بين النقرات
        if (currentTime - lastClickTime < 200) {
          clickCount++;
          // إذا كانت ثلاث نقرات
          if (clickCount === 3) {
            evaluate(); // تنفيذ التعبير
            clickCount = 0; // إعادة تعيين العداد
          }
        } else {
          clickCount = 1; // إعادة تعيين العداد في حالة تجاوز 200 مللي ثانية
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
