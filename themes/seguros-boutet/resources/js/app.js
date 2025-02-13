import MainMenu from "./mainMenu"
import Carousels from "./carousels"

jQuery(function () {
  if (jQuery('#mobile-menu-1').length > 0) {
    new MainMenu()
  }

  if (jQuery('.carousel1').length > 0) {
    new Carousels().carousel1Init()
  }
})
