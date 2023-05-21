class NavAnimation {
  private navElement: HTMLElement
  private shopButtonElement: HTMLElement
  private infoButtonElement: HTMLElement
  private navExpandElement: HTMLElement
  private navUlGroupElement: HTMLElement
  private line: HTMLElement
  private featureTitle: HTMLElement
  private navFeatureGroupElement: HTMLElement
  private _div: HTMLElement
  private stateIsScroll: boolean =
    document.getElementById("main-navigator")?.classList.contains("isScroll") ||
    true
  private stateNavExpand: boolean = false // equivalent to activeNavDropdown in next-js
  private stateShopTransition: boolean = false
  private stateInfoTransition: boolean = false
  private statePendingSwitchAnimation: boolean = false
  private featureProducts = [
    {
      product_name: "夜に駆ける",
      link: "http://localhost:8000/products/5",
      product_figure_1:
        "http://localhost:8000/storage/images/1684645515/aYiPtLn5o0fTAt8CMxYlYgkC9PI2GiEpCm8Lk2bt.jpg",
      product_image_alt: "front of black Ultra Magic shirt",
      product_price: 40,
    },
    {
      product_name: "群青",
      link: "http://localhost:8000/products/7",
      product_figure_1:
        "http://localhost:8000/storage/images/1684646339/eKsQnpijskRn0WEnxHntrGJVSPbrxj6cLYBPyz71.jpg",
      product_image_alt: "Yoasobi - 群青",
      product_price: 40,
    },
  ]

  constructor(elems: {
    navElement: HTMLElement
    shopButtonElement: HTMLElement
    infoButtonElement: HTMLElement
    navExpandElement: HTMLElement
    navUlGroupElement: HTMLElement
    line: HTMLElement
    featureTitle: HTMLElement
    navFeatureGroupElement: HTMLElement
  }) {
    const {
      navElement,
      shopButtonElement,
      infoButtonElement,
      navExpandElement,
      navUlGroupElement,
      line,
      featureTitle,
      navFeatureGroupElement,
    } = elems

    this.navElement = navElement
    this.shopButtonElement = shopButtonElement
    this.infoButtonElement = infoButtonElement
    this.navExpandElement = navExpandElement
    this.navUlGroupElement = navUlGroupElement
    this.line = line
    this.featureTitle = featureTitle
    this.navFeatureGroupElement = navFeatureGroupElement
    this._div = document.getElementById("-div") as HTMLElement

    this.setupEventListener()
    this.setupAnimationEnd()
  }

  setupEventListener() {
    this.shopButtonElement.addEventListener("click", (e) =>
      this.handleShop(e, "shop")
    )
    this.infoButtonElement.addEventListener("click", (e) =>
      this.handleShop(e, "info")
    )
  }

  handleShop(e: MouseEvent, name: string) {
    this.statePendingSwitchAnimation = false

    if (name === "shop") {
      this.stateShopTransition = !this.stateShopTransition

      if (this._div.childElementCount === 1 && !this.stateInfoTransition) {
        this.DOMNavFeature()

        this.navUlGroupElement = document.getElementById(
          "-ul-nav"
        ) as HTMLElement
        this.line = document.getElementById("line") as HTMLElement
        this.featureTitle = document.getElementById("-ft") as HTMLElement
      }
    } else {
      this.stateInfoTransition = !this.stateInfoTransition

      if (this._div.childElementCount > 1 && !this.stateShopTransition) {
        while (this._div.childElementCount > 1) {
          this._div.removeChild(this._div.children[1])
        }
      }
    }

    if (
      name === "shop" &&
      !this.statePendingSwitchAnimation &&
      this.stateInfoTransition
    ) {
      this.statePendingSwitchAnimation = true
      this.stateInfoTransition = false

      this.navUlGroupElement.className = "-in-active"
      this.navUlGroupElement.style.animationDelay = "0ms"

      this.navExpandElement.className = "-nav-expand-outer -active -switch-i"
      this.DOMNavFeature()

      this.navUlGroupElement = document.getElementById("-ul-nav") as HTMLElement
      this.line = document.getElementById("line") as HTMLElement
      this.featureTitle = document.getElementById("-ft") as HTMLElement
    } else if (
      name === "info" &&
      !this.statePendingSwitchAnimation &&
      this.stateShopTransition
    ) {
      this.statePendingSwitchAnimation = true
      this.stateShopTransition = false

      this.navUlGroupElement.className = "-in-active"
      this.navUlGroupElement.style.animationDelay = "0ms"

      this.navExpandElement.className = "-nav-expand-outer -active -switch-s"

      while (this._div.childElementCount > 1) {
        this._div.removeChild(this._div.children[1])
      }

      return
    }

    if (
      !this.statePendingSwitchAnimation ||
      (!this.stateShopTransition && !this.stateInfoTransition)
    ) {
      this.stateNavExpand = !this.stateNavExpand
    }

    this.animationExpand(name)
  }

  setupAnimationEnd() {
    const handleAnimationEnd = (e: AnimationEvent) => {
      if (
        e.animationName.includes("dropdown-up-1") ||
        e.animationName.includes("dropdown-up-2")
      ) {
        this.navElement.removeAttribute("style")

        if (window.scrollY < 36) {
          this.navElement?.classList.remove("isScroll")
        } else {
          this.navElement?.classList.add("isScroll")
        }

        this.navExpandElement.className = "-nav-expand-outer"

        this.navUlGroupElement.className = ""
        this.navUlGroupElement.innerHTML = ""

        this.line.className = "line"
        this.featureTitle.className = ""

        document
          .querySelectorAll(".-product-card-featured")
          .forEach((element) => {
            element.className = "-product-card-featured"
            element.setAttribute("style", `animation-delay: 0ms`)
          })

        this.stateShopTransition = false
        this.stateInfoTransition = false
      }

      if (
        e.animationName.includes("text-slide-out") &&
        this.statePendingSwitchAnimation
      ) {
        this.navUlGroupElement.className = "-active"
        this.animationExpand(this.stateShopTransition ? "shop" : "info")
      }
    }

    this.navExpandElement.addEventListener("animationend", handleAnimationEnd)
  }

  animationExpand(name: string) {
    const shop: { name: string; route: string }[] = [
      {
        name: "Everything",
        route: "/shop",
      },
      { name: "Vinyls", route: "/vinyl" },
      { name: "Apparel", route: "/apparel" },
      { name: "Poster", route: "/poster" },
    ]

    const info: { name: string; route: string }[] = [
      { name: "About", route: "/about" },
      { name: "Contact", route: "/contact" },
    ]
    let li = ""

    if (this.stateShopTransition) {
      for (const { name, route } of shop) {
        li += `<li><a href="${route}">${name}</a></li>`
      }
    } else {
      for (const { name, route } of info) {
        li += `<li><a href="${route}">${name}</a></li>`
      }
    }

    if (this.stateShopTransition || this.stateInfoTransition) {
      this.navUlGroupElement.innerHTML = li
    }

    this.stateIsScroll = this.navElement.classList.contains("isScroll")

    if (this.stateNavExpand) {
      this.line.className = "line -active"
      this.featureTitle.className = "-active"
      document.querySelector("body")?.setAttribute("style", "overflow:hidden")
      document.getElementById("-back-drop")?.classList.add("-active")

      if (this.stateIsScroll) {
        this.navExpandElement.style.animationDelay = "0ms"

        this.navUlGroupElement.style.animationDelay = this
          .statePendingSwitchAnimation
          ? name === "info"
            ? "100ms"
            : "200ms"
          : "200ms"
      } else {
        this.navElement.classList.add("isScroll")

        this.navExpandElement.style.animationDelay = "300ms"

        this.navUlGroupElement.style.animationDelay = this
          .statePendingSwitchAnimation
          ? "200ms"
          : "500ms"
      }

      document
        .querySelectorAll(".-product-card-featured")
        .forEach((element) => {
          element.className = "-product-card-featured -active"
          element.setAttribute(
            "style",
            `animation-delay: ${this.stateIsScroll ? "200ms" : "500ms"}`
          )
        })
    } else {
      this.line.className = "line -in-active"
      this.featureTitle.className = "-in-active"
      document.querySelector("body")?.removeAttribute("style")
      document.getElementById("-back-drop")?.classList.remove("-active")

      this.navExpandElement.style.animationDelay = "0ms"

      this.navUlGroupElement.style.animationDelay = "0ms"
      if (name === "info") {
        this.navUlGroupElement.style.animationDuration = "200ms"
      }

      document
        .querySelectorAll(".-product-card-featured")
        .forEach((element) => {
          element.className = "-product-card-featured -in-active"
          element.setAttribute("style", "animation-delay: 0ms")
        })
    }

    this.line.style.animationDelay = this.stateIsScroll
      ? this.stateNavExpand
        ? "100ms"
        : "0ms"
      : "300ms"
    this.featureTitle.style.animationDelay = this.stateIsScroll
      ? "0ms"
      : "300ms"
    this.navElement.style.borderBottom = "none"

    if (!this.statePendingSwitchAnimation) {
      this.navExpandElement.className = this.stateNavExpand
        ? "-nav-expand-outer -active"
        : name === "shop"
        ? "-nav-expand-outer -in-active-shop"
        : "-nav-expand-outer -in-active-info"
    }

    this.navUlGroupElement.className = this.stateNavExpand ? "-active" : ""
  }

  DOMNavFeature() {
    let innerFeatureProducts = ""

    for (const {
      product_name,
      link,
      product_figure_1,
      product_image_alt,
      product_price,
    } of this.featureProducts) {
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
            </div>
          </div>
          <div class="-product-card-details">
            <div class="-product-card-header">
              <h2 class="-product-title">
                <a
                  class="-product-link"
                  href="${link}"
                >
                  ${product_name}
                </a>
              </h2>
              <div class="-price">
                <span class="-price-current">${product_price}</span>
              </div>
            </div>
          </div>
        </div>
      `
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
    `
  }
}

const navAnimation = new NavAnimation({
  navElement: document.getElementById("main-navigator") as HTMLElement,
  shopButtonElement: document.getElementById("-shop-nav") as HTMLElement,
  infoButtonElement: document.getElementById("-info-nav") as HTMLElement,
  navExpandElement: document.getElementById("-nav-expand-outer") as HTMLElement,
  navUlGroupElement: document.getElementById("-ul-nav") as HTMLElement,
  line: document.getElementById("line") as HTMLElement,
  featureTitle: document.getElementById("-ft") as HTMLElement,
  navFeatureGroupElement: document.getElementById(
    "-nav-expand-feature"
  ) as HTMLElement,
})
