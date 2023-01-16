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

  $('div.post-card-wrapper > div.main-body > div.overview > div.summary > a.project-name').on('click', function(e)
  {
    alert('モーダルウィンドウで詳細を表示');
    e.preventDefault();
  });
  $('div.post-card-wrapper > div.images > div.img').on('click', function()
  {
    alert('モーダルウィンドウで拡大画像を表示？');
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
