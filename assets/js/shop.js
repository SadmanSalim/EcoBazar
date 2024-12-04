$(document).ready(function () {
  $('.searchMob').click(function () {
    $('.searchBoxMobile').addClass('active');
    $('.bottomNavBar').addClass('d-none');
  });
  $('.closeBtnSearch').click(function () {
    $('.searchBoxMobile').removeClass('active');
    $('.bottomNavBar').removeClass('d-none');
  });

  $('.categoreBtn').click(function () {
    let iconElement = $(this).find('iconify-icon');
    $('.shopOpen').toggleClass('active');
    iconElement.attr(
      'icon',
      iconElement.attr('icon') === 'ep:arrow-down-bold'
        ? 'ep:arrow-up-bold'
        : 'ep:arrow-down-bold'
    );
  });
});
