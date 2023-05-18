"use strict";
// class AddAccount {
//   private addAccountButton: HTMLElement
//   private modal: HTMLElement
//   private backdrop: HTMLElement
//
//   constructor(elems: { addAccountButton: HTMLElement; modal: HTMLElement }) {
//     const { addAccountButton, modal } = elems
//
//     this.addAccountButton = addAccountButton
//     this.modal = modal
//     this.backdrop = this.modal.firstElementChild as HTMLElement
//
//     this.setupEventListeners()
//   }
//
//   setupEventListeners() {
//     this.addAccountButton.addEventListener("click", () => {
//       if (this.addAccountButton.getAttribute("data-state") === "false") {
//         this.addAccountButton.setAttribute("data-state", "true")
//
//         this.modal.removeAttribute("style")
//       }
//     })
//
//     this.backdrop.addEventListener("click", () => {
//       this.addAccountButton.setAttribute("data-state", "false")
//       this.modal.setAttribute("style", "display: none")
//     })
//   }
// }
//
// const aa = new AddAccount({
//   addAccountButton: document.querySelector("button[data-state]") as HTMLElement,
//   modal: document.querySelector(".modal") as HTMLElement,
// })
