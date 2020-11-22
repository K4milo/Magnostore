import { MultiStep, InputHandler } from '../components/multistep'

const SELECTORS = {
  form: '.js-multistep',
  input: '.js-wizard-input'
}

const instance = [...document.querySelectorAll(SELECTORS.form)]

if (instance.length) {
  const wizardInstance = new MultiStep(instance[0])
  const wizardInputs = new InputHandler(instance[0], SELECTORS.input)
  wizardInstance.init()
  wizardInputs.init()
}
