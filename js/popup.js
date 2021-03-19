(function () {
  var Popup;

  Popup = (function () {
    function Popup() {
      this.popups = $(".popup");
      this.popup = null;
    }

    Popup.prototype.open = function (popupId) {
      this.popup = this.popups.filter(popupId);
      this.popup.css({
        display: "block",
      });
      return this.hendlers();
    };

    Popup.prototype.close = function () {
      return this.popup.css({
        display: "none",
      });
    };

    Popup.prototype.hendlers = function () {
      var $btnClose;
      $btnClose = this.popup.find(".popup__close");
      return $btnClose.on(
        "click",
        (function (_this) {
          return function () {
            return _this.close();
          };
        })(this)
      );
    };

    return Popup;
  })();

  $(".btnn-one").on("click", function () {
    var popup;
    popup = new Popup();
    return popup.open("#popup-one");
  });

  $(".btnn-two").on("click", function () {
    var popup;
    popup = new Popup();
    return popup.open("#popup-two");
  });
}.call(this));
