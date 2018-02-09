$(document).ready(function(){
   $('.body3').eq(0).on('mouseenter',function(){
   	$(this).hide(4000),
      $('.body2').find('.text2').show(5000);
   });
var dugme = $('.button');
   dugme.eq([1]).on('click',function(){
   	$('.body2').slideToggle(4000),
      $('.body1').find('p').show(4000),
   dugme.eq([0]).on('click',function(){
   		$('.body1').toggle(4000),
         $('.wrapper').hide(3000);
})
   	});
   //kraj contact page
});
