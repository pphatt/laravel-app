class UserProfile {
  private card: HTMLElement

  private show_btn_group: HTMLElement
  private show_old_image: HTMLButtonElement
  private show_new_image: HTMLButtonElement

  private input_old_image: HTMLInputElement
  private input_new_image: HTMLInputElement

  private old_image = ""
  private new_image = ""

  constructor(elems: {
    card: HTMLElement

    show_btn_group: HTMLElement

    input_old_image: HTMLInputElement
    input_new_image: HTMLInputElement
  }) {
    const { card, show_btn_group, input_old_image, input_new_image } = elems
    this.card = card

    this.show_btn_group = show_btn_group
    this.show_old_image = this.show_btn_group
      .firstElementChild as HTMLButtonElement
    this.show_new_image = this.show_btn_group
      .lastElementChild as HTMLButtonElement

    this.input_old_image = input_old_image
    this.input_new_image = input_new_image

    this.old_image = this.input_old_image.getAttribute("value") as string

    this.setupEventListener()
  }

  setupEventListener() {
    this.input_new_image.addEventListener("change", () => {
      const files = this.input_new_image.files as FileList

      if (!files[0]) {
        return
      }

      this.new_image = URL.createObjectURL(files[0])

      this.show_new_image.removeAttribute("disabled")
    })

    this.show_old_image.addEventListener("click", () => {
      if (this.old_image === "") {
        return
      }

      const open = this.show_old_image.getAttribute("data-state") as string
      const sub_card = this.card.lastElementChild as HTMLElement

      if (open === "false") {
        this.show_old_image.setAttribute("data-state", "true")
        this.show_new_image.setAttribute("data-state", "false")

        sub_card.innerHTML = `
                 <section class="-view-photo-section">
                    <div class="-inner-view-photo-section">
                        <div class="-view-photo-title">
                            <h5>Old Photo</h5>
                        </div>
                        <div class="-view-photo">
                            <img src="${this.old_image}" alt="" />
                        </div>
                    </div>
                </section>
                `
      } else {
        this.show_old_image.setAttribute("data-state", "false")
        sub_card.innerHTML = ""
      }
    })

    this.show_new_image.addEventListener("click", () => {
      const open = this.show_new_image.getAttribute("data-state") as string
      const sub_card = this.card.lastElementChild as HTMLElement

      if (open === "false") {
        this.show_old_image.setAttribute("data-state", "false")
        this.show_new_image.setAttribute("data-state", "true")

        sub_card.innerHTML = `
                 <section class="-view-photo-section">
                    <div class="-inner-view-photo-section">
                        <div class="-view-photo-title">
                            <h5>Old Photo</h5>
                        </div>
                        <div class="-view-photo">
                            <img src="${this.new_image}" alt="" />
                        </div>
                    </div>
                </section>
                `
      } else {
        this.show_new_image.setAttribute("data-state", "false")
        sub_card.innerHTML = ""
      }
    })
  }
}

const show_image = new UserProfile({
  card: document.querySelector(".-table") as HTMLElement,
  input_old_image: document.querySelector("#old_image") as HTMLInputElement,
  input_new_image: document.querySelector("#image") as HTMLInputElement,
  show_btn_group: document.querySelector(
    ".view-photo-btn-group"
  ) as HTMLElement,
})
