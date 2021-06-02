const SELECTORS = {
  btnFirst: '.js-first',
  steps: '.js-step',
  prev: '.js-prev',
  next: '.js-next',
  removeProd: '.js-remove-prod',
  prodThumb: '.js-prod-thumb',
  prodBar: '.js-products',
  prodBox: '.js-box-bar',
  prodCard: '.js-card-bar',
  cloned: '.js-cloned'
}

const CLASSES = {
  active: 'active',
  cloned: 'js-cloned',
  clonedItem: 'multistep__box--cloned',
  material: 'material-icons',
  column: 'multistep__column',
  hide: 'hidden',
  removeProd: 'js-remove-prod',
  display: 'show'
}

class MultiStep {
  constructor (context) {
    this.context = context
    this.steps = null
    this.btnPrev = null
    this.btnNext = null
    this.currentStepIdx = 0
  }

  init () {
    this.steps = [...this.context.querySelectorAll(SELECTORS.steps)]
    this.suscribe()
  }

  suscribe () {
    this.showStep(this.currentStepIdx)
    this.addEventHandlers()
  }

  showStep (stepId = 0) {
    const stepIdx = stepId

    this.steps[stepIdx].classList.add('show')
    this.steps[stepIdx].classList.remove('hidden')
  }

  prevNext (propValue = 0) {
    this.steps[this.currentStepIdx].classList.remove('show')
    this.steps[this.currentStepIdx].classList.add('hidden')
    this.currentStepIdx = propValue

    if (this.currentStepIdx >= this.steps.length) {
      this.context.submit()
      return false
    }

    this.showStep(this.currentStepIdx)
  }

  addEventHandlers () {
    this.steps.forEach((el, i) => {
      this.btnPrev = el.querySelector(SELECTORS.prev)
      this.btnNext = el.querySelector(SELECTORS.next)

      if (this.btnPrev) {
        this.btnPrev.addEventListener('click', this.prevNext.bind(this, i - 1))
      }

      if (this.btnNext) {
        this.btnNext.addEventListener('click', this.prevNext.bind(this, i + 1))
      }
    })
  }
}

class InputHandler {
  constructor (context, input) {
    this.btnFirst = null
    this.context = context
    this.input = input
    this.inputs = null
    this.prodBar = null
    this.prodBox = null
    this.prodCard = null
    this.prodClones = null
    this.prodId = null
    this.prodType = null
  }

  init () {
    this.inputs = [...this.context.querySelectorAll(this.input)]
    this.prodBar = this.context.querySelector(SELECTORS.prodBar)
    this.prodBox = this.context.querySelector(SELECTORS.prodBox)
    this.prodCard = this.context.querySelector(SELECTORS.prodCard)
    this.btnFirst = this.context.querySelector(SELECTORS.btnFirst)
    this.suscribe()
  }

  suscribe () {
    this.initHandlers()
  }

  initHandlers () {
    this.inputs.forEach(el => {
      const inputInstance = el.querySelector('input')
      inputInstance.addEventListener('change', this.inputEvents.bind(this, el, inputInstance))
    })
  }

  inputEvents (parent, input) {
    this.prodId = parent.dataset.id
    this.prodType = parent.dataset.type
    const inputsWrapper = parent.parentNode.parentNode
    const allInputs = [...inputsWrapper.querySelectorAll(this.input)]
    const inputType = input.getAttribute('type')

    if (input.checked) {
      if (inputType === 'radio') {
        allInputs.forEach(inputNode => {
          inputNode.classList.remove('active')
        })
      }
      parent.classList.add('active')
      this.btnFirst.classList.remove('hidden')

      this.handleClone(parent, this.prodId, this.prodType)
    } else {
      parent.classList.remove('active')
      this.handleRemove(this.prodId)
    }
  }

  handleClone (input, id, type) {
    const thumbClone = input.querySelector(SELECTORS.prodThumb).cloneNode(true)
    const prodType = type
    const closeIcon = document.createElement('span')

    thumbClone.classList.add(CLASSES.cloned)
    thumbClone.classList.add(CLASSES.clonedItem)
    thumbClone.classList.add(CLASSES.column)
    closeIcon.classList.add(CLASSES.removeProd)
    closeIcon.classList.add(CLASSES.material)
    closeIcon.innerHTML = 'close'
    thumbClone.prepend(closeIcon)
    this.prodClones = [...this.prodBar.querySelectorAll(SELECTORS.prodThumb)]

    if (this.prodClones) {
      this.prodClones.forEach(product => {
        const prodId = product.dataset.id
        if (prodId === id) {
          product.remove()
        }
      })

      this.cloneEvents(this.prodBar)
    }

    if (prodType === 'product') {
      this.prodBar.appendChild(thumbClone)
    } else if (prodType === 'box') {
      if (this.prodBox.hasChildNodes()) this.prodBox.innerHTML = ''
      this.prodBox.appendChild(thumbClone)
    } else {
      if (this.prodCard.hasChildNodes()) this.prodCard.innerHTML = ''
      this.prodCard.innerHTML = ''
      this.prodCard.appendChild(thumbClone)
    }
  }

  handleRemove (id) {
    this.prodClones = [...this.prodBar.querySelectorAll(SELECTORS.prodThumb)]

    this.prodClones.forEach(product => {
      const prodId = product.dataset.id

      if (prodId === id) {
        product.remove()
      }
    })
  }

  cloneEvents (clones) {
    const cloneItems = clones

    cloneItems.onclick = (event) => {
      const closeTarget = event.target

      if (closeTarget.classList.contains(CLASSES.removeProd)) {
        const prodToDelete = closeTarget.parentNode
        const idToUncheck = prodToDelete.dataset.id

        this.handleUncheck(idToUncheck)
        prodToDelete.remove()
      }
    }
  }

  handleUncheck (id) {
    this.inputs.forEach(el => {
      const inputInstance = el.querySelector('input')
      const inputInstanceId = el.dataset.id

      if (inputInstanceId === id) {
        inputInstance.checked = false
        el.classList.remove('active')
      }
    })
  }
}

export {
  MultiStep,
  InputHandler
}
