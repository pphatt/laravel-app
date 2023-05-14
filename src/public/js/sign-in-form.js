"use strict";
class SignInForm {
    constructor(elems) {
        this.submit = document.querySelector("button[type=submit]");
        this.isValidEmail = false;
        this.isValidPassword = false;
        const { formElement, email, password } = elems;
        this.formElement = formElement;
        this.email = email;
        this.password = password;
        this.setupEventListeners();
    }
    setupEventListeners() {
        this.email.addEventListener("input", (evt) => this.handleEmail(evt));
        this.email.addEventListener("focusout", (evt) => this.handleEmail(evt));
        this.password.addEventListener("input", (evt) => this.handlePassword(evt));
        this.password.addEventListener("focusout", (evt) => this.handlePassword(evt));
    }
    handleEmail(evt) {
        function occurrences(string, regex) {
            let n = 0;
            for (let i = 0; i < string.length; i++) {
                string[i] === regex && n++;
                if (n > 1) {
                    return false;
                }
            }
            return n != 0;
        }
        const input = evt.target;
        let inputParserByDot = input.value.split(".");
        let error = "";
        if (input.value === "") {
            error = "Email is required";
        }
        if (!occurrences(input.value, "@") ||
            input.value.indexOf("@") > input.value.lastIndexOf(".") ||
            inputParserByDot[inputParserByDot.length - 1] === "" ||
            !/^[a-zA-Z\s]+$/.test(inputParserByDot[inputParserByDot.length - 1])) {
            if (!error) {
                error = "Must be a valid email";
            }
        }
        this.email.setAttribute("data-error", `${!!error}`);
        this.formElement[0]
            .getElementsByTagName("p")[0]
            .setAttribute("data-error", `${!!error}`);
        this.formElement[0].getElementsByTagName("p")[0].innerHTML = error;
        this.isValidEmail = !error;
        this.checkValidCredentialsInput();
    }
    handlePassword(evt) {
        const input = evt.target;
        let error = "";
        if (input.value === "") {
            error = "Password is required";
        }
        this.password.setAttribute("data-error", `${!!error}`);
        this.formElement[1]
            .getElementsByTagName("p")[0]
            .setAttribute("data-error", `${!!error}`);
        this.formElement[1].getElementsByTagName("p")[0].innerHTML = error;
        this.isValidPassword = !error;
        this.checkValidCredentialsInput();
    }
    checkValidCredentialsInput() {
        if (this.isValidPassword && this.isValidEmail) {
            this.submit.removeAttribute("disabled");
        }
        else {
            this.submit.setAttribute("disabled", "");
        }
    }
}
const s = new SignInForm({
    formElement: document.querySelectorAll(".-input"),
    email: document.getElementById("email"),
    password: document.getElementById("password"),
});
