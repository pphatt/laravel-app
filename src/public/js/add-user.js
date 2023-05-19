"use strict";
class AddUserDropdown {
    constructor(elems) {
        const { dropdown } = elems;
        this.dropdown = dropdown;
        this.setupEventListener();
    }
    setupEventListener() {
        this.dropdown.forEach((node) => {
            node.addEventListener("click", (e) => {
                const element = node;
                if (element.getAttribute("data-state") === "false") {
                    element.setAttribute("data-state", "true");
                    const lastChild = document.getElementsByClassName("-category-dropdown")[0].lastElementChild;
                    this.generateDropdown(lastChild);
                    document
                        .getElementsByClassName("-back-drop")[0]
                        .addEventListener("click", () => {
                        element.setAttribute("data-state", "false");
                        lastChild.innerHTML = "";
                    });
                    this.addEventListenerDropdown(element, lastChild);
                }
            });
        });
    }
    generateDropdown(lastChild) {
        const option = ["Admin", "User"];
        const optionHTML = option.reduce((previousValue, currentValue) => {
            return (previousValue +
                `
          <div class="-option">
            <div>
              <span>${currentValue}</span>
            </div>
          </div>
        `);
        }, "");
        lastChild.innerHTML = `
      <div class="-back-drop"></div>
      <div class="-dropdown-content-layout" style="transform: translate(611px, 263px)">
        <div class="-inner-dropdown-layout">
          ${optionHTML}
        </div>
      </div>
    `;
    }
    addEventListenerDropdown(element, lastChild) {
        document.querySelectorAll(".-option").forEach((e) => {
            e.addEventListener("click", (evt) => {
                const firstChild = element.querySelector("span > span");
                const input = element.querySelector("span > input");
                // @ts-ignore
                firstChild.innerHTML = e.querySelector("div > span").innerHTML;
                input.value = firstChild.innerHTML;
                element.setAttribute("data-state", "false");
                lastChild.innerHTML = "";
                // fetchTest().then(r => console.log(r))
            });
        });
    }
}
const addUserDropdown = new AddUserDropdown({
    dropdown: document.querySelectorAll(".-category-dropdown > button"),
});
// async function fetchTest() {
//   const a = await fetch("?search-filter=ID")
// }
