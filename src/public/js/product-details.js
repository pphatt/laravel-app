"use strict";
class ProductDetails {
    constructor(elems) {
        const { variants, original } = elems;
        this.variants = variants;
        this.original = original;
        this.handleOriginal();
        this.handleVariant();
    }
    handleOriginal() {
        this.original.forEach((node) => {
            const element = node;
            node.addEventListener("click", () => {
                if (element.getAttribute("data-state") === "false") {
                    element.setAttribute("data-state", "true");
                    const modal = document.querySelector(`div[data-image="${element.getAttribute("data-image")}"]`);
                    modal.removeAttribute("style");
                    // @ts-ignore
                    modal.querySelector("div").addEventListener("click", () => {
                        modal.setAttribute("style", "display: none");
                        element.setAttribute("data-state", "false");
                    });
                }
            });
        });
    }
    handleVariant() {
        this.variants.forEach((node) => {
            const element = node;
            node.addEventListener("click", () => {
                if (element.getAttribute("data-state") === "false") {
                    element.setAttribute("data-state", "true");
                    const modal = document.querySelector(`div[data-pos="${element.getAttribute("data-pos")}"]`);
                    modal.removeAttribute("style");
                    // @ts-ignore
                    modal.querySelector("div").addEventListener("click", () => {
                        modal.setAttribute("style", "display: none");
                        element.setAttribute("data-state", "false");
                    });
                }
            });
        });
    }
}
const a = new ProductDetails({
    variants: document.querySelectorAll("button[data-state]"),
    original: document.querySelectorAll(".-view-image")
});
