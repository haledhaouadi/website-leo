$('#slider2').on('init reInit',function(event,slick){
    var amoount = slick.slideCount;
    $('#range2').attr('max',amoount);
  })
  
  $('#slider2').on('afterChange',function(e,slick,currentSlide){
    $('#range2').val(currentSlide+1);
  })
  
  $('#range2').on('input change',function(){
    $('#slider2').slick('slickGoTo',this.value-1);
  
  });
  
  $('#slider2').slick({
    animate: "slow",
    slidesToShow:1,
    arrows:false,
    dots:false
  })