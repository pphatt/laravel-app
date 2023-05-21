"use strict";
class ResetPassword {
    constructor(elems) {
        this.submit = document.querySelector("button[type=submit]");
        this.isValidPassword = false;
        const { formElement, password } = elems;
        this.formElement = formElement;
        this.password = password;
        this.setupEventListeners();
    }
    setupEventListeners() {
        this.password.addEventListener("input", (evt) => this.handlePassword(evt));
        this.password.addEventListener("focusout", (evt) => this.handlePassword(evt));
    }
    handlePassword(evt) {
        const input = evt.target;
        let error = "";
        let passwordDescription = [
            { description: "Uppercase letter", state: false },
            { description: "Lowercase letter", state: false },
            { description: "Number", state: false },
            { description: "Special character (e.g. !?<>@#$%)", state: false },
            { description: "> 7 characters", state: false },
        ];
        if (input.value === "") {
            error = "Password is required";
        }
        if (input.value.length > 8) {
            passwordDescription[4].state = true;
        }
        else {
            if (!error) {
                error = "Password must be at least 8 characters";
            }
        }
        if (/[A-Z]/.test(input.value)) {
            passwordDescription[0].state = true;
        }
        else {
            if (!error) {
                error = "Password must contain at least 1 uppercase letter";
            }
        }
        if (/[a-z]/.test(input.value)) {
            passwordDescription[1].state = true;
        }
        else {
            if (!error) {
                error = "Password must contain at least 1 lowercase letter";
            }
        }
        if (/[0-9]/.test(input.value)) {
            passwordDescription[2].state = true;
        }
        else {
            if (!error) {
                error = "Password must contain at least 1 number";
            }
        }
        if (/[!@#$%^&*)(+=._-]/g.test(input.value)) {
            passwordDescription[3].state = true;
        }
        else {
            if (!error) {
                error = "Password must contain at least 1 symbol";
            }
        }
        this.password.setAttribute("data-error", `${!!error}`);
        this.formElement[0]
            .getElementsByTagName("p")[0]
            .setAttribute("data-error", `${!!error}`);
        this.formElement[0].getElementsByTagName("p")[0].innerHTML = error;
        this.isValidPassword = !error;
        document.querySelectorAll(".-des").forEach((element, index) => {
            let tag = "";
            if (passwordDescription[index].state) {
                tag += `
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="currentColor"
            viewBox="0 0 24 24"
          >
            <path
              d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
              fill-rule="evenodd"
              clip-rule="evenodd"
            ></path>
          </svg>
          <p>${passwordDescription[index].description}</p>
        `;
            }
            else {
                tag += `
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            stroke="currentColor"
            stroke-width="1.5"
            viewBox="0 0 24 24"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"
            ></path>
          </svg>
          <p>${passwordDescription[index].description}</p>
        `;
            }
            element.setAttribute("data-contain", `${passwordDescription[index].state}`);
            element.innerHTML = tag;
        });
        if (!error && this.isValidPassword) {
            this.submit.removeAttribute("disabled");
        }
        else {
            this.submit.setAttribute("disabled", "");
        }
    }
}
const r = new ResetPassword({
    formElement: document.querySelectorAll(".-input"),
    password: document.getElementById("password"),
});
