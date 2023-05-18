"use strict";
class HandleUploadImage {
    constructor(elems) {
        this.image_1 = "";
        this.image_2 = "";
        this.old_image_1 = "";
        this.old_image_2 = "";
        const { input_image_1, input_image_2, show_image_1, show_image_2, old_input_image_1, old_input_image_2, old_show_image_1, old_show_image_2, } = elems;
        this.input_image_1 = input_image_1;
        this.input_image_2 = input_image_2;
        this.show_image_1 = show_image_1;
        this.show_image_2 = show_image_2;
        this.old_input_image_1 = old_input_image_1;
        this.old_input_image_2 = old_input_image_2;
        this.old_show_image_1 = old_show_image_1;
        this.old_show_image_2 = old_show_image_2;
        this.old_image_1 = old_input_image_1.getAttribute("src");
        this.old_image_2 = old_input_image_2.getAttribute("src");
        this.handleOldImage();
        this.handleNewImage();
    }
    handleOldImage() {
        const card = document.querySelector(".-card");
        const photo = card.lastElementChild;
        this.old_show_image_1.addEventListener("click", () => {
            if (this.old_show_image_1.getAttribute("data-state") === "false") {
                this.old_show_image_1.setAttribute("data-state", "true");
                this.old_show_image_2.setAttribute("data-state", "false");
                this.show_image_1.setAttribute("data-state", "false");
                this.show_image_2.setAttribute("data-state", "false");
                photo.innerHTML = `
            <section class="-view-photo-section">
              <div class="-inner-view-photo-section">
                <div class="-view-photo-title">
                  <h5>Old Photo 1</h5>
                </div>
                <div class="-view-photo">
                  <img src="${this.old_image_1}" alt="" />
                </div>
              </div>
            </section>
          `;
            }
            else {
                this.old_show_image_1.setAttribute("data-state", "false");
                photo.innerHTML = ``;
            }
        });
        this.old_show_image_2.addEventListener("click", () => {
            if (this.old_show_image_2.getAttribute("data-state") === "false") {
                this.old_show_image_1.setAttribute("data-state", "false");
                this.old_show_image_2.setAttribute("data-state", "true");
                this.show_image_1.setAttribute("data-state", "false");
                this.show_image_2.setAttribute("data-state", "false");
                photo.innerHTML = `
            <section class="-view-photo-section">
              <div class="-inner-view-photo-section">
                <div class="-view-photo-title">
                  <h5>Old Photo 2</h5>
                </div>
                <div class="-view-photo">
                  <img src="${this.old_image_2}" alt="" />
                </div>
              </div>
            </section>
          `;
            }
            else {
                this.old_input_image_2.setAttribute("data-state", "false");
                photo.innerHTML = ``;
            }
        });
    }
    handleNewImage() {
        const card = document.querySelector(".-card");
        const photo = card.lastElementChild;
        this.input_image_1.addEventListener("change", () => {
            const files = this.input_image_1.files;
            if (!files[0]) {
                return;
            }
            this.image_1 = URL.createObjectURL(files[0]);
            this.show_image_1.removeAttribute("disabled");
        });
        this.input_image_2.addEventListener("change", () => {
            const files = this.input_image_2.files;
            if (!files[0]) {
                return;
            }
            this.image_2 = URL.createObjectURL(files[0]);
            this.show_image_2.removeAttribute("disabled");
        });
        this.show_image_1.addEventListener("click", () => {
            if (this.show_image_1.getAttribute("data-state") === "false") {
                this.old_show_image_1.setAttribute("data-state", "false");
                this.old_show_image_2.setAttribute("data-state", "false");
                this.show_image_1.setAttribute("data-state", "true");
                this.show_image_2.setAttribute("data-state", "false");
                photo.innerHTML = `
            <section class="-view-photo-section">
              <div class="-inner-view-photo-section">
                <div class="-view-photo-title">
                  <h5>New Photo 1</h5>
                </div>
                <div class="-view-photo">
                  <img src="${this.image_1}" alt="" />
                </div>
              </div>
            </section>
          `;
            }
            else {
                this.show_image_1.setAttribute("data-state", "false");
                photo.innerHTML = ``;
            }
        });
        this.show_image_2.addEventListener("click", () => {
            if (this.show_image_2.getAttribute("data-state") === "false") {
                this.old_show_image_1.setAttribute("data-state", "false");
                this.old_show_image_2.setAttribute("data-state", "false");
                this.show_image_1.setAttribute("data-state", "false");
                this.show_image_2.setAttribute("data-state", "true");
                photo.innerHTML = `
            <section class="-view-photo-section">
              <div class="-inner-view-photo-section">
                <div class="-view-photo-title">
                  <h5>New Photo 2</h5>
                </div>
                <div class="-view-photo">
                  <img src="${this.image_1}" alt="" />
                </div>
              </div>
            </section>
          `;
            }
            else {
                this.show_image_2.setAttribute("data-state", "false");
                photo.innerHTML = ``;
            }
        });
    }
}
const handleImageUpload = new HandleUploadImage({
    input_image_1: document.querySelector("input[name='image_1']"),
    input_image_2: document.querySelector("input[name='image_2']"),
    show_image_1: document.querySelector("button[data-image='image_1']"),
    show_image_2: document.querySelector("button[data-image='image_2']"),
    old_input_image_1: document.querySelector("input[name='old_image_1']"),
    old_input_image_2: document.querySelector("input[name='old_image_2']"),
    old_show_image_1: document.querySelector("button[data-image='old_image_1']"),
    old_show_image_2: document.querySelector("button[data-image='old_image_2']"),
});
