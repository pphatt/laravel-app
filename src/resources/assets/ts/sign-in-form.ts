class SignInForm {
  private formElement: NodeListOf<HTMLDivElement>
  private email: HTMLInputElement
  private password: HTMLInputElement
  private submit = document.querySelector(
    "button[type=submit]"
  ) as HTMLButtonElement
  private isValidEmail = false
  private isValidPassword = false

  constructor(elems: {
    formElement: NodeListOf<HTMLDivElement>
    email: HTMLInputElement
    password: HTMLInputElement
  }) {
    const { formElement, email, password } = elems

    this.formElement = formElement
    this.email = email
    this.password = password

    this.setupEventListeners()
  }

  setupEventListeners() {
    this.email.addEventListener("input", (evt) => this.handleEmail(evt))

    this.email.addEventListener("focusout", (evt) => this.handleEmail(evt))

    this.password.addEventListener("input", (evt) => this.handlePassword(evt))

    this.password.addEventListener("focusout", (evt) =>
      this.handlePassword(evt)
    )
  }

  handleEmail(evt: Event) {
    function occurrences(string: string, regex: string): boolean {
      let n = 0

      for (let i = 0; i < string.length; i++) {
        string[i] === regex && n++

        if (n > 1) {
          return false
        }
      }

      return n != 0
    }

    const input = evt.target as HTMLInputElement
    let inputParserByDot = input.value.split(".")
    let error = ""

    if (input.value === "") {
      error = "Email is required"
    }

    if (
      !occurrences(input.value, "@") ||
      input.value.indexOf("@") > input.value.lastIndexOf(".") ||
      inputParserByDot[inputParserByDot.length - 1] === "" ||
      !/^[a-zA-Z\s]+$/.test(inputParserByDot[inputParserByDot.length - 1])
    ) {
      if (!error) {
        error = "Must be a valid email"
      }
    }

    this.email.setAttribute("data-error", `${!!error}`)
    this.formElement[0]
      .getElementsByTagName("p")[0]
      .setAttribute("data-error", `${!!error}`)
    this.formElement[0].getElementsByTagName("p")[0].innerHTML = error
    this.isValidEmail = !error

    this.checkValidCredentialsInput()
  }

  handlePassword(evt: Event) {
    const input = evt.target as HTMLInputElement
    let error = ""

    if (input.value === "") {
      error = "Password is required"
    }

    this.password.setAttribute("data-error", `${!!error}`)
    this.formElement[1]
      .getElementsByTagName("p")[0]
      .setAttribute("data-error", `${!!error}`)
    this.formElement[1].getElementsByTagName("p")[0].innerHTML = error
    this.isValidPassword = !error

    this.checkValidCredentialsInput()
  }

  checkValidCredentialsInput() {
    if (this.isValidPassword && this.isValidEmail) {
      this.submit.removeAttribute("disabled")
    } else {
      this.submit.setAttribute("disabled", "")
    }
  }
}

const s = new SignInForm({
  formElement: document.querySelectorAll(
    ".-input"
  ) as NodeListOf<HTMLDivElement>,
  email: document.getElementById("email") as HTMLInputElement,
  password: document.getElementById("password") as HTMLInputElement,
})
