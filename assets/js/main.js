$(document).ready(function () {
    $(".shopCollapse").click(function () {
        let submenu = $(this).find(".shopOpen");
        submenu.toggleClass('active');

        let iconElement = $(this).find("iconify-icon");
        let currentIcon = iconElement.attr('icon');

        // Toggle the icon
        if (currentIcon === 'ep:arrow-down-bold') {
            iconElement.attr('icon', 'ep:arrow-right-bold');
        } else {
            iconElement.attr('icon', 'ep:arrow-down-bold');
        }
    });
});
