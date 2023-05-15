class FeedbackHelper {
  private stateOpen = false
  private bar: HTMLDivElement
  private button: HTMLButtonElement
  private feedbackPanel: HTMLDivElement

  constructor(elems: { bar: HTMLDivElement }) {
    const { bar } = elems

    this.bar = bar
    this.button = this.bar.getElementsByTagName(
      "button"
    )[0] as HTMLButtonElement
    this.feedbackPanel = this.bar.getElementsByTagName(
      "div"
    )[0] as HTMLDivElement

    this.setupEventListeners()
  }

  setupEventListeners() {
    this.button.addEventListener("click", () => {
      this.stateOpen = !this.stateOpen
      this.handle()
    })
  }

  handle() {
    if (this.stateOpen) {
      const panel = `
        <div class="-back-drop"></div>
        <div class="-feedback-layout">
          <div class="-feedback">
            <div class="-textarea-holder">
              <textarea
                cols="100"
                rows="5"
                placeholder="Ideas on how to improve this page"
              ></textarea>
            </div>
            <div class="-line"></div>
            <div class="-action-area">
              <div class="-action-button-area">
                <button type="reset">
                  Cancel
                </button>
                <button type="submit">Send feedback</button>
              </div>
              <div class="-messages">
                <p>Feel free to feedback to our system</p>
              </div>
            </div>
          </div>
        </div>
      `

      this.feedbackPanel.innerHTML = panel

      this.feedbackPanel
        .getElementsByClassName("-back-drop")[0]
        .addEventListener("click", () => {
          this.stateOpen = false
          this.handle()
        })

      // @ts-ignore
      this.feedbackPanel
        .querySelector("button[type=reset]")
        .addEventListener("click", () => {
          this.stateOpen = false
          this.handle()
        })
    } else {
      this.feedbackPanel.innerHTML = ""
    }
  }
}

const b = new FeedbackHelper({
  bar: document.querySelector(".-help-bar") as HTMLDivElement,
})
