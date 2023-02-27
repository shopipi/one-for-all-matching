$(function()
{
  $('div.post-card-wrapper').on('click', function()
  {
    $('div.post-card-wrapper').removeClass('open');
    $(this).addClass('open');

    $('div.chat-wrapper').addClass('open');
    $('div.chat-wrapper').scrollTop($('div.chat-wrapper').height());
  });
});
