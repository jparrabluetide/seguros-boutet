export default class MainMenu {
  constructor() {
    this.mainMenu = '#mobile-menu-1';
    this.btnMainMenu = '#btnMainMenu';

    this.init()
  }

  init() {
    jQuery(this.btnMainMenu).on('click', () => {
      jQuery(this.mainMenu).toggleClass('hidden')
    })
  }
}
