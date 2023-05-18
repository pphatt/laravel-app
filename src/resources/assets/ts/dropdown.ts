class Dropdown {
  private dropdown: NodeList

  constructor(elems: { dropdown: NodeList }) {
    const { dropdown } = elems

    this.dropdown = dropdown
    this.setupEventListener()
  }

  setupEventListener() {
    this.dropdown.forEach((node) => {
      node.addEventListener("click", (e) => {
        const element = node as HTMLElement

        if (element.getAttribute("data-state") === "false") {
          element.setAttribute("data-state", "true")

          const lastChild = document.getElementsByClassName(
            "-category-dropdown"
          )[0].lastElementChild as HTMLElement

          this.generateDropdown(lastChild)

          document
            .getElementsByClassName("-back-drop")[0]
            .addEventListener("click", () => {
              element.setAttribute("data-state", "false")

              lastChild.innerHTML = ""
            })

          this.addEventListenerDropdown(element, lastChild)
        }
      })
    })
  }

  generateDropdown(lastChild: HTMLElement) {
    const option = ["Vinyls", "Clothes"]

    const optionHTML: string = option.reduce((previousValue, currentValue) => {
      return (
        previousValue +
        `
          <div class="-option">
            <div>
              <span>${currentValue}</span>
            </div>
          </div>
        `
      )
    }, "")

    lastChild.innerHTML = `
      <div class="-back-drop"></div>
      <div class="-dropdown-content-layout" style="transform: translate(611px, 216px)">
        <div class="-inner-dropdown-layout">
          ${optionHTML}
        </div>
      </div>
    `
  }

  addEventListenerDropdown(element: HTMLElement, lastChild: HTMLElement) {
    document.querySelectorAll(".-option").forEach((e) => {
      e.addEventListener("click", (evt) => {
        const firstChild = element.querySelector("span > span") as HTMLElement
        const input = element.querySelector("span > input") as HTMLInputElement

        // @ts-ignore
        firstChild.innerHTML = e.querySelector("div > span").innerHTML
        input.value = firstChild.innerHTML

        element.setAttribute("data-state", "false")

        lastChild.innerHTML = ""

        // fetchTest().then(r => console.log(r))
      })
    })
  }
}

const d = new Dropdown({
  dropdown: document.querySelectorAll(
    ".-category-dropdown > button"
  ) as NodeList,
})

// async function fetchTest() {
//   const a = await fetch("?search-filter=ID")
// }
