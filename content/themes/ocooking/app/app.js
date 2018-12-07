var app = {
  mainMenuClassName: 'main-menu',
  init: function() {
    app.initMainMenuLinkEventListeners();
  },
  initMainMenuLinkEventListeners: function(){
    $('.' + app.mainMenuClassName + '-link').on(
      'click',
      app.handleMainMenuLinkClickEvent
    );
  },
  handleMainMenuLinkClickEvent: function(event) {
    event.preventDefault();

    $mainMenuElement = $ ('.' + app.mainMenuClassName);


    $mainMenuElement.toggleClass(app.mainMenuClassName + '--invisible');
    $('body > .container-fluid').toggleClass('blur');
    // ">" selectionne les enfants direct.
  }
};

$(app.init);
