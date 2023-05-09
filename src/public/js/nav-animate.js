"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
class NavAnimation {
    constructor(elems) {
        this.stateIsScroll = document.getElementById("main-navigator")?.classList.contains("isScroll") ||
            true;
        this.stateNavExpand = false;
        this.stateShopTransition = false;
        this.stateInfoTransition = false;
        this.statePendingSwitchAnimation = false;
        const { navElement, shopButtonElement, infoButtonElement, navExpandElement, navUlGroupElement, line, featureTitle, navFeatureGroupElement, } = elems;
        this.navElement = navElement;
        this.shopButtonElement = shopButtonElement;
        this.infoButtonElement = infoButtonElement;
        this.navExpandElement = navExpandElement;
        this.navUlGroupElement = navUlGroupElement;
        this.line = line;
        this.featureTitle = featureTitle;
        this.navFeatureGroupElement = navFeatureGroupElement;
        this._div = document.getElementById("-div");
        this.setupEventListener();
        this.setupAnimationEnd();
    }
    setupEventListener() {
        const handleShop = (e, name) => {
            this.statePendingSwitchAnimation = false;
            if (name === "shop") {
                this.stateShopTransition = !this.stateShopTransition;
                if (this._div.childElementCount === 1 && !this.stateInfoTransition) {
                    this.DOMNavFeature();
                    this.navUlGroupElement = document.getElementById("-ul-nav");
                    this.line = document.getElementById("line");
                    this.featureTitle = document.getElementById("-ft");
                }
            }
            else {
                this.stateInfoTransition = !this.stateInfoTransition;
                if (this._div.childElementCount > 1 && !this.stateShopTransition) {
                    while (this._div.childElementCount > 1) {
                        this._div.removeChild(this._div.children[1]);
                    }
                }
            }
            if (name === "shop" &&
                !this.statePendingSwitchAnimation &&
                this.stateInfoTransition) {
                this.statePendingSwitchAnimation = true;
                this.stateInfoTransition = false;
                this.navUlGroupElement.className = "-in-active";
                this.navUlGroupElement.style.animationDelay = "0ms";
                this.navExpandElement.className = "-nav-expand-outer -active -switch-i";
                this.DOMNavFeature();
                this.navUlGroupElement = document.getElementById("-ul-nav");
                this.line = document.getElementById("line");
                this.featureTitle = document.getElementById("-ft");
            }
            else if (name === "info" &&
                !this.statePendingSwitchAnimation &&
                this.stateShopTransition) {
                this.statePendingSwitchAnimation = true;
                this.stateShopTransition = false;
                this.navUlGroupElement.className = "-in-active";
                this.navUlGroupElement.style.animationDelay = "0ms";
                this.navExpandElement.className = "-nav-expand-outer -active -switch-s";
                while (this._div.childElementCount > 1) {
                    this._div.removeChild(this._div.children[1]);
                }
                return;
            }
            if (!this.statePendingSwitchAnimation ||
                (!this.stateShopTransition && !this.stateInfoTransition)) {
                this.stateNavExpand = !this.stateNavExpand;
            }
            this.animationExpand(name);
        };
        this.shopButtonElement.addEventListener("click", (e) => handleShop(e, "shop"));
        this.infoButtonElement.addEventListener("click", (e) => handleShop(e, "info"));
    }
    setupAnimationEnd() {
        const handleAnimationEnd = (e) => {
            if (e.animationName.includes("dropdown-up-1") ||
                e.animationName.includes("dropdown-up-2")) {
                this.navElement.removeAttribute("style");
                if (window.scrollY < 36) {
                    this.navElement?.classList.remove("isScroll");
                }
                else {
                    this.navElement?.classList.add("isScroll");
                }
                this.navExpandElement.className = "-nav-expand-outer";
                this.navUlGroupElement.className = "";
                this.navUlGroupElement.innerHTML = "";
                this.line.className = "line";
                this.featureTitle.className = "";
                document
                    .querySelectorAll(".-product-card-featured")
                    .forEach((element) => {
                    element.className = "-product-card-featured";
                    element.setAttribute("style", `animation-delay: 0ms`);
                });
                this.stateShopTransition = false;
                this.stateInfoTransition = false;
            }
            if (e.animationName.includes("text-slide-out") &&
                this.statePendingSwitchAnimation) {
                this.navUlGroupElement.className = "-active";
                this.animationExpand(this.stateShopTransition ? "shop" : "info");
            }
        };
        this.navExpandElement.addEventListener("animationend", handleAnimationEnd);
    }
    animationExpand(name) {
        const shop = ["Everything", "Vinyls", "Apparel", "Poster"];
        const info = ["About", "Contact"];
        let li = "";
        if (this.stateShopTransition) {
            for (const a of shop) {
                li += `<li><a href="">${a}</a></li>`;
            }
        }
        else {
            for (const a of info) {
                li += `<li><a href="">${a}</a></li>`;
            }
        }
        if (this.stateShopTransition || this.stateInfoTransition) {
            this.navUlGroupElement.innerHTML = li;
        }
        this.stateIsScroll = this.navElement.classList.contains("isScroll");
        if (this.stateNavExpand) {
            this.line.className = "line -active";
            this.featureTitle.className = "-active";
            document.querySelector("body")?.setAttribute("style", "overflow:hidden");
            document.getElementById("-back-drop")?.classList.add("-active");
            if (this.stateIsScroll) {
                this.navExpandElement.style.animationDelay = "0ms";
                this.navUlGroupElement.style.animationDelay = this
                    .statePendingSwitchAnimation
                    ? name === "info"
                        ? "100ms"
                        : "200ms"
                    : "200ms";
            }
            else {
                this.navElement.classList.add("isScroll");
                this.navExpandElement.style.animationDelay = "300ms";
                this.navUlGroupElement.style.animationDelay = this
                    .statePendingSwitchAnimation
                    ? "200ms"
                    : "500ms";
            }
            document
                .querySelectorAll(".-product-card-featured")
                .forEach((element) => {
                element.className = "-product-card-featured -active";
                element.setAttribute("style", `animation-delay: ${this.stateIsScroll ? "200ms" : "500ms"}`);
            });
        }
        else {
            this.line.className = "line -in-active";
            this.featureTitle.className = "-in-active";
            document.querySelector("body")?.removeAttribute("style");
            document.getElementById("-back-drop")?.classList.remove("-active");
            this.navExpandElement.style.animationDelay = "0ms";
            this.navUlGroupElement.style.animationDelay = "0ms";
            if (name === "info") {
                this.navUlGroupElement.style.animationDuration = "200ms";
            }
            document
                .querySelectorAll(".-product-card-featured")
                .forEach((element) => {
                element.className = "-product-card-featured -in-active";
                element.setAttribute("style", "animation-delay: 0ms");
            });
        }
        this.line.style.animationDelay = this.stateIsScroll
            ? this.stateNavExpand
                ? "100ms"
                : "0ms"
            : "300ms";
        this.featureTitle.style.animationDelay = this.stateIsScroll
            ? "0ms"
            : "300ms";
        this.navElement.style.borderBottom = "none";
        if (!this.statePendingSwitchAnimation) {
            this.navExpandElement.className = this.stateNavExpand
                ? "-nav-expand-outer -active"
                : name === "shop"
                    ? "-nav-expand-outer -in-active-shop"
                    : "-nav-expand-outer -in-active-info";
        }
        this.navUlGroupElement.className = this.stateNavExpand ? "-active" : "";
    }
    DOMNavFeature() {
        const featureProducts = [
            {
                product_name: "Ultra Magic Tee",
                product_figure_1: "https://cdn.sanity.io/images/ieasd5lg/production/44465ea927eb678f562b5f2d938a81c7d054cbb4-2400x1800.jpg?w=1200&amp;q=80&amp;fit=max&amp;auto=format",
                product_figure_2: "https://cdn.sanity.io/images/ieasd5lg/production/9fcd6d25c0f0cb7851f47fb62426e03e317ccbbd-2400x1800.jpg?w=1200&amp;q=80&amp;fit=max&amp;auto=format",
                product_image_alt: "front of black Ultra Magic shirt",
                product_price: 24.95,
            },
            {
                product_name: "Ultra Magic",
                product_figure_1: "https://cdn.sanity.io/images/ieasd5lg/production/6f7afac34661661fd162cb89f8b01f3534fa9f3b-2049x2016.jpg?w=1200&amp;q=80&amp;fit=max&amp;auto=format",
                product_figure_2: "https://cdn.sanity.io/images/ieasd5lg/production/a2e872eb3708f987cb0ec98d9fead7a09a42a7c4-2049x2016.jpg?w=1200&amp;q=80&amp;fit=max&amp;auto=format",
                product_image_alt: "front cover of Ultra Magic vinyl",
                product_price: 35,
                product_sale: {
                    percentage: 20,
                    price_after_sale: 28,
                },
            },
        ];
        let innerFeatureProducts = "";
        for (const { product_name, product_figure_1, product_figure_2, product_image_alt, product_price, product_sale, } of featureProducts) {
            innerFeatureProducts += `
        <div class="-product-card-featured">
          <div class="-product-card-visual">
            <div class="photo">
              <figure class="is-default">
                <div>
                  <picture>
                    <img
                      width="1200"
                      sizes="(min-width: 1200px) 33vw, (min-width: 768px) 50vw, 100vw"
                      decoding="async"
                      alt="${product_image_alt}"
                      src="${product_figure_1}"
                    />
                  </picture>
                </div>
              </figure>
              <figure class="is-hover">
                <div>
                  <picture>
                    <img
                      width="1200"
                      sizes="(min-width: 1200px) 33vw, (min-width: 768px) 50vw, 100vw"
                      decoding="async"
                      alt="${product_image_alt}"
                      src="${product_figure_2}"
                    />
                  </picture>
                </div>
              </figure>
            </div>
          </div>
          <div class="-product-card-details">
            <div class="-product-card-header">
              <h2 class="-product-title">
                <a
                  class="-product-link"
                  href=""
                >
                  ${product_name}
                </a>
              </h2>
              <div class="-price">
                ${product_sale
                ? `
                  <span class="-price-current">$28</span>
                  <span class="-price-discount">20%</span>
                `
                : `
                  <span class="-price-current">${product_price}</span>
                `}
              </div>
            </div>
          </div>
        </div>
      `;
        }
        this._div.innerHTML = `
      <div class="-nav-expand-content">
        <ul id="-ul-nav"></ul>
      </div>
      <div id="line" class="line"></div>
      <div id="-nav-expand-feature" class="-nav-expand-feature">
        <div class="-feature-title">
          <span id="-ft">Feature</span>
        </div>
        ${innerFeatureProducts}
      </div>
    `;
    }
}
const n = new NavAnimation({
    navElement: document.getElementById("main-navigator"),
    shopButtonElement: document.getElementById("-shop-nav"),
    infoButtonElement: document.getElementById("-info-nav"),
    navExpandElement: document.getElementById("-nav-expand-outer"),
    navUlGroupElement: document.getElementById("-ul-nav"),
    line: document.getElementById("line"),
    featureTitle: document.getElementById("-ft"),
    navFeatureGroupElement: document.getElementById("-nav-expand-feature"),
});
