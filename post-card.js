$(function()
{
  $('div.post-card-wrapper > div.main-body > div.bottom > div.action-1 > button.bookmark').on('click', function()
  {
    $icon = $(this).find('i');
    $tooltip = $(this).find('div.tooltip');

    // 未ブックマーク
    if ($icon.hasClass('fa-regular'))
    {
      $icon.removeClass('fa-regular');
      $icon.addClass('fa-solid');

      $tooltip.html('保存しました！');

      manage_bookmark('', true);
    }
    // 既にブックマーク済み
    else
    {
      $icon.removeClass('fa-solid');
      $icon.addClass('fa-regular');

      $tooltip.html('保存');
      
      manage_bookmark('', false);
    }
  });
});

/**
 * ブックマークを編集
 * @param { string } guid 
 * @param { boolean } add 
 */
function manage_bookmark(guid, add)
{
}