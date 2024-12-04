$(document).ready(function () {
    // Toggle submenu and icon
    $('.shopCollapse').click(function () {
        let submenu = $(this).find('.shopOpen');
        let iconElement = $(this).find('iconify-icon');
        submenu.toggleClass('active');
        iconElement.attr(
            'icon',
            iconElement.attr('icon') === 'ep:arrow-down-bold' 
            ? 'ep:arrow-right-bold' 
            : 'ep:arrow-down-bold'
        );
    });

    // Password visibility toggle
    $('.pasToggl').click(function () {
        let inputField = $(this).siblings('input');
        let isPassword = inputField.attr('type') === 'password';
        inputField.attr('type', isPassword ? 'text' : 'password');
        $(this).find('iconify-icon').attr(
            'icon', 
            isPassword ? 'ion:eye-outline' : 'ion:eye-off-outline'
        );
    });

    // Switch between Register and Sign-In
    $('.RegisterBtn').click(function () {
        $('.Register').removeClass('d-none');
        $('.signIn').addClass('d-none');
    });
    $('.signInBtn').click(function () {
        $('.Register').addClass('d-none');
        $('.signIn').removeClass('d-none');
    });

    // Mobile search box toggle
    $('.searchMob').click(function () {
        $('.searchBoxMobile').addClass('active');
        $('.bottomNavBar').addClass('d-none');
    });
    $('.closeBtnSearch').click(function () {
        $('.searchBoxMobile').removeClass('active');
        $('.bottomNavBar').removeClass('d-none');
    });


    // *Swipper
    var swiper = new Swiper(".mySwiper", {
        pagination: {
          el: ".swiper-pagination",
          dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
      });
});

