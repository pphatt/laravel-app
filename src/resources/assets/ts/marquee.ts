import { product } from "./IProduct"

const products: product[] = [
    {
        product_name: "Ultra Magic Tee",
        product_figure_1:
            "https://cdn.sanity.io/images/ieasd5lg/production/44465ea927eb678f562b5f2d938a81c7d054cbb4-2400x1800.jpg?w=1200&amp;q=80&amp;fit=max&amp;auto=format",
        product_figure_2:
            "https://cdn.sanity.io/images/ieasd5lg/production/9fcd6d25c0f0cb7851f47fb62426e03e317ccbbd-2400x1800.jpg?w=1200&amp;q=80&amp;fit=max&amp;auto=format",
        product_image_alt: "front of black Ultra Magic shirt",
        product_price: 24.95,
    },
    {
        product_name: "Ultra Magic",
        product_figure_1:
            "https://cdn.sanity.io/images/ieasd5lg/production/6f7afac34661661fd162cb89f8b01f3534fa9f3b-2049x2016.jpg?w=1200&amp;q=80&amp;fit=max&amp;auto=format",
        product_figure_2:
            "https://cdn.sanity.io/images/ieasd5lg/production/a2e872eb3708f987cb0ec98d9fead7a09a42a7c4-2049x2016.jpg?w=1200&amp;q=80&amp;fit=max&amp;auto=format",
        product_image_alt: "front cover of Ultra Magic vinyl",
        product_price: 35,
        product_sale: {
            percentage: 20,
            price_after_sale: 28,
        },
    },
    {
        product_name: "Megabat Tee",
        product_figure_1:
            "https://cdn.sanity.io/images/ieasd5lg/production/8f2d37e1a2e1fa6d5eea191b77432c6c6cdd0adf-2400x1800.jpg?w=1200&amp;q=80&amp;fit=max&amp;auto=format",
        product_image_alt: "mega-bat tee",
        product_price: 25.27,
        product_sale: {
            percentage: 25,
            price_after_sale: 18.95,
        },
    },
    {
        product_name: "Megabat",
        product_figure_1:
            "https://cdn.sanity.io/images/ieasd5lg/production/59718c11fd9e1ab0eae0ed8b91ea7ae410fd2e29-2049x2016.jpg?w=1200&amp;q=80&amp;fit=max&amp;auto=format",
        product_figure_2:
            "https://cdn.sanity.io/images/ieasd5lg/production/7572c4a211b0f854f562ddc8f58460d0ffbf828e-2049x2016.jpg?w=1200&amp;q=80&amp;fit=max&amp;auto=format",
        product_image_alt: "front cover of Megabat vinyl",
        product_price: 35,
        product_sale: {
            percentage: 20,
            price_after_sale: 28,
        },
    },
    {
        product_name: "=",
        product_figure_1: "https://m.media-amazon.com/images/I/61Y3wcDYo-L.jpg",
        product_figure_2:
            "https://m.media-amazon.com/images/I/81A36fe72TL._SL1290_.jpg",
        product_image_alt: "= vinyls - ed sheeran",
        product_price: 24.98,
    },
    {
        product_name: "-",
        product_figure_1:
            "https://m.media-amazon.com/images/I/91OhLzGyWEL._SL1500_.jpg",
        product_figure_2:
            "https://m.media-amazon.com/images/I/51ERJnxN5ZL._SL1054_.jpg",
        product_image_alt: "- vinyls - ed sheeran",
        product_price: 24.98,
    },
    {
        product_name: "%",
        product_figure_1:
            "https://m.media-amazon.com/images/I/B1HYJn9MrPS._SX425_.jpg",
        product_image_alt: "% vinyls - ed sheeran",
        product_price: 36.56,
    },
    {
        product_name: "X",
        product_figure_1:
            "https://m.media-amazon.com/images/I/711Qha+w8GL._SL1425_.jpg",
        product_image_alt: "X vinyls - ed sheeran",
        product_price: 29.99,
    },
    {
        product_name: "No. 6 Collaborations",
        product_figure_1:
            "https://m.media-amazon.com/images/I/91igTrfGSsL._SL1500_.jpg",
        product_image_alt: "No. 6 Collaborations Black vinyls - ed sheeran",
        product_price: 31.98,
    },
];

class Marquee {
    private PMarquee: HTMLElement;
    private readonly SPMarquee: HTMLElement;
    private readonly Marquee: HTMLElement;

    constructor(elems: {
        PMarquee: HTMLElement;
        SPMarquee: HTMLElement;
        Marquee: HTMLElement;
    }) {
        const { PMarquee, SPMarquee, Marquee } = elems;

        this.PMarquee = PMarquee;
        this.SPMarquee = SPMarquee;
        this.Marquee = Marquee;

        this.addChildrenSPMarquee();
    }

    addChildrenSPMarquee() {
        let innerMarquee = ``;

        for (let i = 0; i < 2; i++) {
            innerMarquee += `<div data-marquee="true">`;

            for (let j = 0; j < 2; j++) {
                innerMarquee += `<div class="marquee-items">`;

                for (const {
                    product_name,
                    product_figure_1,
                    product_figure_2,
                    product_image_alt,
                    product_price,
                    product_sale,
                } of products) {
                    innerMarquee += `
            <div class="marquee-product">
              <div class="-product-card">
                <div class="-product-card-visual">
                  <div class="photo">
                    <figure class="is-default">
                      <div>
                        <picture>
                          <img
                            width="1200" sizes="(min-width: 1200px) 33vw, (min-width: 768px) 50vw, 100vw"
                            decoding="async" alt="${product_image_alt}"
                            class="object-cover is-loaded"
                            src="${product_figure_1}" />
                        </picture>
                      </div>
                    </figure>
                    ${
                        product_figure_2
                            ? `
                      <figure class="is-hover">
                        <div>
                          <picture>
                            <img
                              width="1200"
                              sizes="(min-width: 1200px) 33vw, (min-width: 768px) 50vw, 100vw"
                              decoding="async" alt="${product_image_alt}"
                              src="${product_figure_2}" />
                          </picture>
                        </div>
                      </figure>
                    `
                            : ``
                    }
                  </div>
                  <div class="-add-cart">
                    <button class="button" data-btn-type="default">Add to Card</button>
                  </div>
                </div>
                <div class="-product-card-details">
                  <div class="-product-card-header">
                    <h2 class="-product-title">
                      <a class="-product-link" href="">${product_name}</a>
                    </h2>
                    <div class="-price">
                      ${
                        product_sale
                            ? `
                        <span class="-price-current">$${product_sale.price_after_sale}</span>
                        <span class="-price-discount">${product_sale.percentage}% off</span>
                      `
                            : `
                        <span class="-price-current">$${product_price}</span>
                      `
                    }
                    </div>
                  </div>
                </div>
              </div>
            </div>
          `;
                }

                innerMarquee += `</div>`;
            }

            innerMarquee += `</div>`;
        }

        this.PMarquee.innerHTML = innerMarquee;
    }
}

const m = new Marquee({
    PMarquee: document.getElementById("-parent-marquee") as HTMLElement,
    SPMarquee: document.getElementById("-inner-parent-marquee") as HTMLElement,
    Marquee: document.getElementById("-marquee") as HTMLElement,
});
