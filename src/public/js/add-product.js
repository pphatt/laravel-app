"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
class HandleUploadImage {
    constructor(elems) {
        this.image_1 = "";
        this.image_2 = "";
        const { input_image_1, input_image_2, show_image_1, show_image_2 } = elems;
        this.input_image_1 = input_image_1;
        this.input_image_2 = input_image_2;
        this.show_image_1 = show_image_1;
        this.show_image_2 = show_image_2;
        this.setupEventListener();
    }
    setupEventListener() {
        this.input_image_1.addEventListener("change", () => {
            const files = this.input_image_1.files;
            if (!files[0]) {
                return;
            }
            this.image_1 = URL.createObjectURL(files[0]);
            const showImageButton = document.querySelector("button[data-image='image_1']");
            const card = document.querySelector(".-card");
            const photo = card.lastElementChild;
            showImageButton.removeAttribute("disabled");
            showImageButton.addEventListener("click", () => {
                if (showImageButton.getAttribute("data-state") === "false") {
                    // @ts-ignore -> state management viewing photo
                    document
                        .querySelector("button[data-image='image_2']")
                        .setAttribute("data-state", "false");
                    showImageButton.setAttribute("data-state", "true");
                    photo.innerHTML = `
            <section class="-view-photo-section">
              <div class="-inner-view-photo-section">
                <div class="-view-photo-title">
                  <h5>Photo 1</h5>
                </div>
                <div class="-view-photo">
                  <img src="${this.image_1}" alt="" />
                </div>
              </div>
            </section>
          `;
                }
                else {
                    showImageButton.setAttribute("data-state", "false");
                    photo.innerHTML = ``;
                }
            });
        });
        this.input_image_2.addEventListener("change", () => {
            const files = this.input_image_2.files;
            if (!files[0]) {
                return;
            }
            this.image_2 = URL.createObjectURL(files[0]);
            const showImageButton = document.querySelector("button[data-image='image_2']");
            const card = document.querySelector(".-card");
            const photo = card.lastElementChild;
            showImageButton.removeAttribute("disabled");
            showImageButton.addEventListener("click", () => {
                if (showImageButton.getAttribute("data-state") === "false") {
                    // @ts-ignore -> state management viewing photo
                    document
                        .querySelector("button[data-image='image_1']")
                        .setAttribute("data-state", "false");
                    showImageButton.setAttribute("data-state", "true");
                    photo.innerHTML = `
            <section class="-view-photo-section">
              <div class="-inner-view-photo-section">
                <div class="-view-photo-title">
                  <h5>Photo 1</h5>
                </div>
                <div class="-view-photo">
                  <img src="${this.image_2}" alt="" />
                </div>
              </div>
            </section>
          `;
                }
                else {
                    showImageButton.setAttribute("data-state", "false");
                    photo.innerHTML = ``;
                }
            });
        });
        this.show_image_1.addEventListener("click", () => { });
        this.show_image_2.addEventListener("click", () => { });
    }
}
class HandleCheckDetails {
    constructor(elems) {
        const { nameInput, categoryInput, priceInput, quantityInput, descriptionInput, photoInput, buttonSubmit, } = elems;
        this.nameInput = nameInput;
        this.categoryInput = categoryInput;
        this.priceInput = priceInput;
        this.quantityInput = quantityInput;
        this.descriptionInput = descriptionInput;
        this.photoInput = photoInput;
        this.buttonSubmit = buttonSubmit;
        this.setupEventListeners();
    }
    setupEventListeners() {
        this.nameInput.addEventListener("input", (evt) => {
            const input = evt.target;
            const p = document.querySelector("p[data-error-name='name']");
            if (!input.value) {
                p.innerHTML = "* Name is required";
                p.setAttribute("data-error", "true");
            }
            else {
                p.innerHTML = "";
                p.removeAttribute("data-error");
            }
        });
        this.nameInput.addEventListener("blur", (evt) => {
            const input = evt.target;
            const p = document.querySelector("p[data-error-name='name']");
            if (!input.value) {
                p.innerHTML = "* Name is required";
                p.setAttribute("data-error", "true");
            }
            else {
                p.innerHTML = "";
                p.removeAttribute("data-error");
            }
        });
        this.priceInput.addEventListener("input", (evt) => {
            const input = evt.target;
            const p = document.querySelector("p[data-error-name='price']");
            if (!input.value) {
                p.innerHTML = "* Price is required";
                p.setAttribute("data-error", "true");
            }
            else {
                p.innerHTML = "";
                p.removeAttribute("data-error");
            }
        });
        this.priceInput.addEventListener("blur", (evt) => {
            const input = evt.target;
            const p = document.querySelector("p[data-error-name='price']");
            if (!input.value) {
                p.innerHTML = "* Price is required";
                p.setAttribute("data-error", "true");
            }
            else {
                p.innerHTML = "";
                p.removeAttribute("data-error");
            }
        });
        this.quantityInput.addEventListener("input", (evt) => {
            const input = evt.target;
            const p = document.querySelector("p[data-error-name='quantity']");
            if (!input.value) {
                p.innerHTML = "* Quantity is required";
                p.setAttribute("data-error", "true");
            }
            else {
                p.innerHTML = "";
                p.removeAttribute("data-error");
            }
        });
        this.quantityInput.addEventListener("blur", (evt) => {
            const input = evt.target;
            const p = document.querySelector("p[data-error-name='quantity']");
            if (!input.value) {
                p.innerHTML = "* Quantity is required";
                p.setAttribute("data-error", "true");
            }
            else {
                p.innerHTML = "";
                p.removeAttribute("data-error");
            }
        });
        this.descriptionInput.addEventListener("input", (evt) => {
            const input = evt.target;
            const p = document.querySelector("p[data-error-name='description']");
            if (!input.value) {
                p.innerHTML = "* Description is required";
                p.setAttribute("data-error", "true");
            }
            else {
                p.innerHTML = "";
                p.removeAttribute("data-error");
            }
        });
        this.descriptionInput.addEventListener("blur", (evt) => {
            const input = evt.target;
            const p = document.querySelector("p[data-error-name='description']");
            if (!input.value) {
                p.innerHTML = "* Description is required";
                p.setAttribute("data-error", "true");
            }
            else {
                p.innerHTML = "";
                p.removeAttribute("data-error");
            }
        });
    }
}
const handleImageUpload = new HandleUploadImage({
    input_image_1: document.querySelector("input[name='image_1']"),
    input_image_2: document.querySelector("input[name='image_2']"),
    show_image_1: document.querySelector("button[data-image='image_1']"),
    show_image_2: document.querySelector("button[data-image='image_2']"),
});
const handleInput = new HandleCheckDetails({
    nameInput: document.querySelector("input[name='name']"),
    categoryInput: document.querySelector("input[name='category']"),
    priceInput: document.querySelector("input[name='price']"),
    quantityInput: document.querySelector("input[name='quantity']"),
    descriptionInput: document.querySelector("textarea[name='description']"),
    photoInput: document.querySelector("input[name='image_1']"),
    buttonSubmit: document.querySelector("button[type='submit']"),
});
