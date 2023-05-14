"use strict";
;
(() => {
    window.scrollTo({ top: 36, behavior: "smooth" });
    window.addEventListener("scroll", () => {
        if (window.scrollY < 36) {
            document.getElementById("main-navigator")?.classList.remove("isScroll");
        }
        else {
            document.getElementById("main-navigator")?.classList.add("isScroll");
        }
    });
})();
