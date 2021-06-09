$(document).ready(function(){


  $('select').on('change', function(){
    if ($(this).val()) {
      $(this).css('color', '#000')
    }
  })

  // scroll to top
  $('a.scroll').click(function(){
    var speed = 400,
        href= $(this).attr('href'),
        target = $(href == "#" || href == "" ? 'html' : href),
        position = target.offset().top;
    $('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
  });

  // icon-menu
  // $('.icon-menu ul').click(function(){
  //     $(this).toggleClass('active');
  //     $('.js-show-nav').toggleClass('show')
  //     $('body').toggleClass('fixed')
  // })
  // sub menu
  // var addActivebox = $('.left__nav-box')

  // $(addActivebox).each(function(){
  //   var subMenuShow = $(this).find('.sub-menu')
  //   var clickShowIcon = $(this).find('.js-submenu span')

  //   $(clickShowIcon).click(function(){
  //     $(this).toggleClass('active')
  //     setTimeout(function(){ 
  //       $(subMenuShow).toggleClass('show') }, 
  //       400);
  //   })
  // })

  // fade out modal
  $('.js-moveModal .btn, .js-moveModal').click(function(){
    setTimeout(function () {
      console.log(1)
      $('#modalsave').modal('hide')
      }, 3000);
    })

  // add tag
  $('.js-addTag').click(function(){
    var valueTag = $('.js-valueTag').val()
    if( valueTag === '' ){
      alert('タグ名を入力してください。')
    } else{
      $(".js-showTag ul ").append("<li class='js-removeTag'> <a href=''> " + valueTag + "</a></li>")
      $('.js-valueTag').val("")
    }
  })

  // remove tag
  $('.add-tag-box ul').on('click', '.js-removeTag', function(e) {
    e.preventDefault()
    $(this).remove();
  });


  // count input 

  $('.js-showCount').val(0)

  //plus and minus

  $('.js-upcount').click(function () {
    var next = ($(this).prev().val())
      $(this).prev().val( + next + 1);
  });

  $('.js-downcount').click(function () {
    var prev = $(this).next().val();
      if (prev > 0) {
        $(this).next().val( + prev - 1)
      }
  });

})

