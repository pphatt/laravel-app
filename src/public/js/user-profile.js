"use strict";
class UserProfile {
    constructor(elems) {
        this.old_image = "";
        this.new_image = "";
        const { card, show_btn_group, input_old_image, input_new_image } = elems;
        this.card = card;
        this.show_btn_group = show_btn_group;
        this.show_old_image = this.show_btn_group
            .firstElementChild;
        this.show_new_image = this.show_btn_group
            .lastElementChild;
        this.input_old_image = input_old_image;
        this.input_new_image = input_new_image;
        this.old_image = this.input_old_image.getAttribute("src");
        this.setupEventListener();
    }
    setupEventListener() {
        this.input_new_image.addEventListener("change", () => {
            const files = this.input_new_image.files;
            if (!files[0]) {
                return;
            }
            this.new_image = URL.createObjectURL(files[0]);
            this.show_new_image.removeAttribute("disabled");
        });
        this.show_old_image.addEventListener("click", () => {
            if (this.old_image === "") {
                return;
            }
            const open = this.show_old_image.getAttribute("data-state");
            const sub_card = this.card.lastElementChild;
            if (open === "false") {
                this.show_old_image.setAttribute("data-state", "true");
                this.show_new_image.setAttribute("data-state", "false");
                sub_card.innerHTML = `
                 <section class="-view-photo-section">
                    <div class="-inner-view-photo-section">
                        <div class="-view-photo-title">
                            <h5>Old Image</h5>
                        </div>
                        <div class="-view-photo">
                            <img src="${this.old_image}" alt="" />
                        </div>
                    </div>
                </section>
                `;
            }
            else {
                this.show_old_image.setAttribute("data-state", "false");
                sub_card.innerHTML = "";
            }
        });
        this.show_new_image.addEventListener("click", () => {
            const open = this.show_new_image.getAttribute("data-state");
            const sub_card = this.card.lastElementChild;
            if (open === "false") {
                this.show_old_image.setAttribute("data-state", "false");
                this.show_new_image.setAttribute("data-state", "true");
                sub_card.innerHTML = `
                 <section class="-view-photo-section">
                    <div class="-inner-view-photo-section">
                        <div class="-view-photo-title">
                            <h5>New Image</h5>
                        </div>
                        <div class="-view-photo">
                            <img src="${this.new_image}" alt="" />
                        </div>
                    </div>
                </section>
                `;
            }
            else {
                this.show_new_image.setAttribute("data-state", "false");
                sub_card.innerHTML = "";
            }
        });
    }
}
const _show_image = new UserProfile({
    card: document.querySelector(".-card"),
    input_old_image: document.querySelector("#old_image"),
    input_new_image: document.querySelector("#image"),
    show_btn_group: document.querySelector(".view-photo-btn-group"),
});
