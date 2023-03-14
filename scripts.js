$(function () {
    FSN.Menu.enableTabbedpanels();
    FSN.Theme.enableThemeQuery();

    new simpleParallax(
        document.getElementsByClassName('parallax')
        , {
            delay: .4,
            scale: 1.125,
            transition: 'cubic-bezier(0, 0, 0.25, 1)',
            overflow: true
    });
});