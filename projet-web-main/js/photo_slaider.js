$('#slider').on('init reInit',function(event,slick){
  var amount = slick.slideCount;
  $('#range').attr('max',amount);
})

$('#slider').on('afterChange',function(e,slick,currentSlide){
  $('#range').val(currentSlide+1);
})

$('#range').on('input change',function(){
  $('#slider').slick('slickGoTo',this.value-1);

});

$('#slider').slick({
  animate: "slow",
  slidesToShow:1,
  autoplay:true,
  autoplaySpeed: 10000,
  arrows:false,
  dots:false
})
