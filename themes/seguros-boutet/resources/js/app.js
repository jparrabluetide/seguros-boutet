import MainMenu from "./mainMenu"

jQuery(function () {
  if (jQuery('#mobile-menu-1').length > 0) {
    new MainMenu()
  }
})
