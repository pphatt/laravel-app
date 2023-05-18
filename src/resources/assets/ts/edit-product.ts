class HandleUploadImage {
  private input_image_1: HTMLInputElement
  private input_image_2: HTMLInputElement

  private show_image_1: HTMLButtonElement
  private show_image_2: HTMLButtonElement

  private image_1 = ""
  private image_2 = ""

  private old_input_image_1: HTMLInputElement
  private old_input_image_2: HTMLInputElement

  private old_show_image_1: HTMLButtonElement
  private old_show_image_2: HTMLButtonElement

  private old_image_1 = ""
  private old_image_2 = ""

  constructor(elems: {
    input_image_1: HTMLInputElement
    input_image_2: HTMLInputElement
    show_image_1: HTMLButtonElement
    show_image_2: HTMLButtonElement
    old_input_image_1: HTMLInputElement
    old_input_image_2: HTMLInputElement
    old_show_image_1: HTMLButtonElement
    old_show_image_2: HTMLButtonElement
  }) {
    const {
      input_image_1,
      input_image_2,
      show_image_1,
      show_image_2,
      old_input_image_1,
      old_input_image_2,
      old_show_image_1,
      old_show_image_2,
    } = elems

    this.input_image_1 = input_image_1
    this.input_image_2 = input_image_2
    this.show_image_1 = show_image_1
    this.show_image_2 = show_image_2

    this.old_input_image_1 = old_input_image_1
    this.old_input_image_2 = old_input_image_2
    this.old_show_image_1 = old_show_image_1
    this.old_show_image_2 = old_show_image_2

    this.old_image_1 = old_input_image_1.getAttribute("src")
    this.old_image_2 = old_input_image_2.getAttribute("src")

    this.handleOldImage()
    this.handleNewImage()
  }

  handleOldImage() {
    const card = document.querySelector(".-card") as HTMLElement
    const photo = card.lastElementChild as HTMLElement

    this.old_show_image_1.addEventListener("click", () => {
      if (this.old_show_image_1.getAttribute("data-state") === "false") {
        this.old_show_image_1.setAttribute("data-state", "true")
        this.old_show_image_2.setAttribute("data-state", "false")
        this.show_image_1.setAttribute("data-state", "false")
        this.show_image_2.setAttribute("data-state", "false")

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
          `
      } else {
        this.old_show_image_1.setAttribute("data-state", "false")
        photo.innerHTML = ``
      }
    })

    this.old_show_image_2.addEventListener("click", () => {
      if (this.old_show_image_2.getAttribute("data-state") === "false") {
        this.old_show_image_1.setAttribute("data-state", "false")
        this.old_show_image_2.setAttribute("data-state", "true")
        this.show_image_1.setAttribute("data-state", "false")
        this.show_image_2.setAttribute("data-state", "false")

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
          `
      } else {
        this.old_input_image_2.setAttribute("data-state", "false")
        photo.innerHTML = ``
      }
    })
  }

  handleNewImage() {
    const card = document.querySelector(".-card") as HTMLElement
    const photo = card.lastElementChild as HTMLElement

    this.input_image_1.addEventListener("change", () => {
      const files = this.input_image_1.files as FileList

      if (!files[0]) {
        return
      }

      this.image_1 = URL.createObjectURL(files[0])

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
        this.old_show_image_1.setAttribute("data-state", "false")
        this.old_show_image_2.setAttribute("data-state", "false")
        this.show_image_1.setAttribute("data-state", "true")
        this.show_image_2.setAttribute("data-state", "false")

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
          `
      } else {
        this.show_image_1.setAttribute("data-state", "false")
        photo.innerHTML = ``
      }
    })

    this.show_image_2.addEventListener("click", () => {
      if (this.show_image_2.getAttribute("data-state") === "false") {
        this.old_show_image_1.setAttribute("data-state", "false")
        this.old_show_image_2.setAttribute("data-state", "false")
        this.show_image_1.setAttribute("data-state", "false")
        this.show_image_2.setAttribute("data-state", "true")

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
          `
      } else {
        this.show_image_2.setAttribute("data-state", "false")
        photo.innerHTML = ``
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
  old_input_image_1: document.querySelector(
    "input[name='old_image_1']"
  ) as HTMLInputElement,
  old_input_image_2: document.querySelector(
    "input[name='old_image_2']"
  ) as HTMLInputElement,
  old_show_image_1: document.querySelector(
    "button[data-image='old_image_1']"
  ) as HTMLButtonElement,
  old_show_image_2: document.querySelector(
    "button[data-image='old_image_2']"
  ) as HTMLButtonElement,
})
