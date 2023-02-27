$(function()
{
  $('div.post-card-wrapper').on('click', function()
  {
    $('div.post-card-wrapper').removeClass('open');
    $(this).addClass('open');

    $('div.chat-wrapper').addClass('open');
    $('div.chat-wrapper').scrollTop($('div.chat-wrapper').height());

    if ($(this).hasClass('my-project'))
    {
      $('div.from-user').parent().fadeIn(0);
      $('div.chat-wrapper > div.chat-container > div.close').fadeIn(0);
      $('div.from-user').parent().css('display', 'flex');
    }
    else
    {
      $('div.from-user').parent().fadeOut(0);
      $('div.chat-wrapper > div.chat-container > div.close').fadeOut(0)
    }
  });

  $('div.from-user').on('click', function()
  {
    $(this).parent().fadeOut(150);
  });
  $('div.chat-wrapper > div.chat-container > div.close').on('click', function()
  {
    $('div.from-user').parent().fadeIn(150);
  });
});
