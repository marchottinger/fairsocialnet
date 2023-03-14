/**
 * @namespace
 * @license GPL-3.0-or-later
 * @author Marc Hottinger
 */
FSN.Menu = (function(FSN) {
    let $tabs = $('button[data-bs-toggle="tab"]')
    ,   openedTab = null
    ,   isOpened = false;

    /**
     * Toggles the state of a tab between open or closed.
     * @param {string} id An element's id that correspond to a tab.
     */
    function _toggleMenu(id) {
        if (openedTab == id && isOpened) {
            $(id).removeClass("show").one('transitionend webkitTransitionEnd oTransitionEnd', function () {
                openedTab = null;
                isOpened = false;

                $(id).add(id + "-tab").removeClass("active");
                $(id).off('transitionend webkitTransitionEnd oTransitionEnd');
			});
            $(".nav-link").add("body").addClass("default");
        } else {
            openedTab = id;
            isOpened = true;
            $(".nav-link").add("body").removeClass("default");
        }
    }

    /**
     * Closes the menu 
     */
    function _closeMenu() {
        $(".nav-link").add("body").addClass("default").add(".tab-pane").removeClass("active show");
        openedTab = null;
        isOpened = false;
    }

    this.enableTabbedpanels = function() {
        $tabs.on("shown.bs.tab", function(event) {
            let id = $(event.target).attr('data-bs-target');

            openedTab = id;
        });

        $tabs.on("click", function(event) {
            let id = $(event.target).attr('data-bs-target');

            _toggleMenu(id);
            event.stopPropagation();
        });

        $(document).on("click", function() {
            if ($(window).width() >= 1200) {
                _closeMenu();
            }
        });

        $(window).on("resize", function() {
            if ($(window).width() <= 1199.98) {
                _closeMenu();
            }
        });

        $(".nav-link").add("body").addClass("default");
    }

    return this;
})(FSN);