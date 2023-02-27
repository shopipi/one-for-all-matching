$(function()
{
  $('div.tab-menu > div.menu-btn:first-child').on('click', function()
  {
    $(this).parent().toggleClass('open');
  });
});

$(function()
{
  /**
   * Clicked Anywhere
   */
  $(document).on('click', function(e)
  {
    if (!$(e.target).closest('div.dropdown').length)
    {
      $('div.top-menu div.sort-box > div.dropdown.open').removeClass('open');
    }

    if (!$(e.target).closest('div.tab-menu').length)
    {
      $('div.tab-menu').removeClass('open');
    }
    
    if (!$(e.target).closest('div.top-menu button.filter').length &&
        !$(e.target).closest('div.guide-menu.open').length)
    {
      $('div.guide-menu.open').removeClass('open');
      $('div.main-contents-wrapper').removeClass('open');
      $('div.top-menu').removeClass('open');
    }
  });

  /**
   * Toggle TopMenu SortBox Dropdown
   */
  $('div.top-menu div.sort-box > div.dropdown').not('open').on('click', function()
  {
    if (!$(this).hasClass('open'))
    {
      $('div.top-menu div.sort-box > div.dropdown.open').removeClass('open');
      $(this).addClass('open');
    }
    else
    {
      $(this).removeClass('open');
    }
  });

  $('div.top-menu button.new-post').on('click', function()
  {
    $('.modalArea').fadeIn(300);
  });

  $('div.post-card-wrapper > div.main-body > div.overview > div.summary > a.project-name').on('click', function(e)
  {
    $('div.post-card-detail-wrapper').fadeIn(300);
    $('div.post-card-detail-wrapper').css('display', 'flex');
    e.preventDefault();
  });

  $('div.post-card-detail-container > div.close').on('click', function()
  {
    $('div.post-card-detail-wrapper').fadeOut(300);
  });
});

$(function()
{
  /**
   * モバイルモードでフィルターボタンクリック
   */
  $('div.top-menu button.filter.mobile-only').on('click', function()
  {
    $('div.guide-menu').toggleClass('open');
    $('div.main-contents-wrapper').toggleClass('open');
    $('div.top-menu').toggleClass('open');
  });
});
