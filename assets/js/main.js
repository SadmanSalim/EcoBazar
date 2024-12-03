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
    $('.pasToggl').click(function () {
        // Find the input field within the same parent container as the clicked icon
        var inputField = $(this).siblings('input');
    
        // Toggle the input type
        var type = inputField.attr('type') === 'password' ? 'text' : 'password';
        inputField.attr('type', type);
    
        // Toggle the icon
        var icon = type === 'password' ? 'ion:eye-off-outline' : 'ion:eye-outline';
        $(this).find('iconify-icon').attr('icon', icon);
      });
    
      $('.RegisterBtn').click(function () {
        $('.Register').removeClass('d-none');
        $('.signIn').addClass('d-none');
      });
      $('.signInBtn').click(function () {
        $('.Register').addClass('d-none');
        $('.signIn').removeClass('d-none');
      });


    $('.searchMob').click(function(){
        $('.searchBoxMobile').addClass('active');
        $('.bottomNavBar').addClass('d-none');
    });
    $('.closeBtnSearch').click(function(){
        $('.searchBoxMobile').removeClass('active');
        $('.bottomNavBar').removeClass('d-none');
    });
});
