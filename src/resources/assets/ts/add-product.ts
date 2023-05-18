import { refreshPaths } from "laravel-vite-plugin"

class HandleUploadImage {
  private input_image_1: HTMLInputElement
  private input_image_2: HTMLInputElement

  private show_image_1: HTMLButtonElement
  private show_image_2: HTMLButtonElement
  private image_1 = ""
  private image_2 = ""

  constructor(elems: {
    input_image_1: HTMLInputElement
    input_image_2: HTMLInputElement
    show_image_1: HTMLButtonElement
    show_image_2: HTMLButtonElement
  }) {
    const { input_image_1, input_image_2, show_image_1, show_image_2 } = elems

    this.input_image_1 = input_image_1
    this.input_image_2 = input_image_2
    this.show_image_1 = show_image_1
    this.show_image_2 = show_image_2

    this.setupEventListener()
  }

  setupEventListener() {
    const card = document.querySelector(".-card") as HTMLElement
    const photo = card.lastElementChild as HTMLElement

    this.input_image_1.addEventListener("change", () => {
      const files = this.input_image_1.files as FileList

      if (!files[0]) {
        return
      }

      this.image_1 = URL.createObjectURL(files[0])

      // const showImageButton = document.querySelector(
      //   "button[data-image='image_1']"
      // ) as HTMLButtonElement

      this.show_image_1.removeAttribute("disabled")
    })

    this.input_image_2.addEventListener("change", () => {
      const files = this.input_image_2.files as FileList

      if (!files[0]) {
        return
      }

      this.image_2 = URL.createObjectURL(files[0])

      this.show_image_2.removeAttribute("disabled")
    })

    this.show_image_1.addEventListener("click", () => {
      if (this.show_image_1.getAttribute("data-state") === "false") {
        this.show_image_1.setAttribute("data-state", "true")
        this.show_image_2.setAttribute("data-state", "false")

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
          `
      } else {
        this.show_image_1.setAttribute("data-state", "false")
        photo.innerHTML = ``
      }
    })

    this.show_image_2.addEventListener("click", () => {
      if (this.show_image_2.getAttribute("data-state") === "false") {
          this.show_image_1.setAttribute("data-state", "false")
          this.show_image_2.setAttribute("data-state", "true")

        this.show_image_2.setAttribute("data-state", "true")
        photo.innerHTML = `
            <section class="-view-photo-section">
              <div class="-inner-view-photo-section">
                <div class="-view-photo-title">
                  <h5>Photo 2</h5>
                </div>
                <div class="-view-photo">
                  <img src="${this.image_2}" alt="" />
                </div>
              </div>
            </section>
          `
      } else {
        this.show_image_2.setAttribute("data-state", "false")
        photo.innerHTML = ``
      }
    })
  }
}

class HandleCheckDetails {
  private nameInput: HTMLElement
  private categoryInput: HTMLElement
  private priceInput: HTMLElement
  private quantityInput: HTMLElement
  private descriptionInput: HTMLElement
  private photoInput: HTMLElement
  private buttonSubmit: HTMLElement

  constructor(elems: {
    nameInput: HTMLElement
    categoryInput: HTMLElement
    priceInput: HTMLElement
    quantityInput: HTMLElement
    descriptionInput: HTMLElement
    photoInput: HTMLElement
    buttonSubmit: HTMLElement
  }) {
    const {
      nameInput,
      categoryInput,
      priceInput,
      quantityInput,
      descriptionInput,
      photoInput,
      buttonSubmit,
    } = elems

    this.nameInput = nameInput
    this.categoryInput = categoryInput
    this.priceInput = priceInput
    this.quantityInput = quantityInput
    this.descriptionInput = descriptionInput
    this.photoInput = photoInput
    this.buttonSubmit = buttonSubmit

    this.setupEventListeners()
  }

  setupEventListeners() {
    this.nameInput.addEventListener("input", (evt) => {
      const input = evt.target as HTMLInputElement
      const p = document.querySelector(
        "p[data-error-name='name']"
      ) as HTMLElement

      if (!input.value) {
        p.innerHTML = "* Name is required"
        p.setAttribute("data-error", "true")
      } else {
        p.innerHTML = ""
        p.removeAttribute("data-error")
      }
    })

    this.nameInput.addEventListener("blur", (evt) => {
      const input = evt.target as HTMLInputElement
      const p = document.querySelector(
        "p[data-error-name='name']"
      ) as HTMLElement

      if (!input.value) {
        p.innerHTML = "* Name is required"
        p.setAttribute("data-error", "true")
      } else {
        p.innerHTML = ""
        p.removeAttribute("data-error")
      }
    })

    this.priceInput.addEventListener("input", (evt) => {
      const input = evt.target as HTMLInputElement
      const p = document.querySelector(
        "p[data-error-name='price']"
      ) as HTMLElement

      if (!input.value) {
        p.innerHTML = "* Price is required"
        p.setAttribute("data-error", "true")
      } else {
        p.innerHTML = ""
        p.removeAttribute("data-error")
      }
    })

    this.priceInput.addEventListener("blur", (evt) => {
      const input = evt.target as HTMLInputElement
      const p = document.querySelector(
        "p[data-error-name='price']"
      ) as HTMLElement

      if (!input.value) {
        p.innerHTML = "* Price is required"
        p.setAttribute("data-error", "true")
      } else {
        p.innerHTML = ""
        p.removeAttribute("data-error")
      }
    })

    this.quantityInput.addEventListener("input", (evt) => {
      const input = evt.target as HTMLInputElement
      const p = document.querySelector(
        "p[data-error-name='quantity']"
      ) as HTMLElement

      if (!input.value) {
        p.innerHTML = "* Quantity is required"
        p.setAttribute("data-error", "true")
      } else {
        p.innerHTML = ""
        p.removeAttribute("data-error")
      }
    })

    this.quantityInput.addEventListener("blur", (evt) => {
      const input = evt.target as HTMLInputElement
      const p = document.querySelector(
        "p[data-error-name='quantity']"
      ) as HTMLElement

      if (!input.value) {
        p.innerHTML = "* Quantity is required"
        p.setAttribute("data-error", "true")
      } else {
        p.innerHTML = ""
        p.removeAttribute("data-error")
      }
    })

    this.descriptionInput.addEventListener("input", (evt) => {
      const input = evt.target as HTMLInputElement
      const p = document.querySelector(
        "p[data-error-name='description']"
      ) as HTMLElement

      if (!input.value) {
        p.innerHTML = "* Description is required"
        p.setAttribute("data-error", "true")
      } else {
        p.innerHTML = ""
        p.removeAttribute("data-error")
      }
    })

    this.descriptionInput.addEventListener("blur", (evt) => {
      const input = evt.target as HTMLInputElement
      const p = document.querySelector(
        "p[data-error-name='description']"
      ) as HTMLElement

      if (!input.value) {
        p.innerHTML = "* Description is required"
        p.setAttribute("data-error", "true")
      } else {
        p.innerHTML = ""
        p.removeAttribute("data-error")
      }
    })
  }
}

const handleImageUpload = new HandleUploadImage({
  input_image_1: document.querySelector(
    "input[name='image_1']"
  ) as HTMLInputElement,
  input_image_2: document.querySelector(
    "input[name='image_2']"
  ) as HTMLInputElement,
  show_image_1: document.querySelector(
    "button[data-image='image_1']"
  ) as HTMLButtonElement,
  show_image_2: document.querySelector(
    "button[data-image='image_2']"
  ) as HTMLButtonElement,
})

const handleInput = new HandleCheckDetails({
  nameInput: document.querySelector("input[name='name']") as HTMLElement,
  categoryInput: document.querySelector(
    "input[name='category']"
  ) as HTMLElement,
  priceInput: document.querySelector("input[name='price']") as HTMLElement,
  quantityInput: document.querySelector(
    "input[name='quantity']"
  ) as HTMLElement,
  descriptionInput: document.querySelector(
    "textarea[name='description']"
  ) as HTMLElement,
  photoInput: document.querySelector("input[name='image_1']") as HTMLElement,
  buttonSubmit: document.querySelector("button[type='submit']") as HTMLElement,
})
