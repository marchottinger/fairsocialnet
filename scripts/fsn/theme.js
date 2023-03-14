FSN.Theme = (function(FSN) {
    function _parseQuery() {
        const urlParams = new URLSearchParams(location.search);
        
        for (const [key, value] of urlParams) {
            switch(key) {
                case "theme":
                    _updateTheme(value);
                break;
                case "mode":
                    _updateMode(value);
            }
        }
    }

    function _updateTheme(theme) {
        $("body").addClass(theme);
    }

    function _updateMode(mode) {
        $("body").addClass(mode);
    }

    this.enableThemeQuery = function() {
        _parseQuery();
    }
    
    return this;
})(FSN);