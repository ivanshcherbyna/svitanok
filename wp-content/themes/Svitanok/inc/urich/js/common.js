

// burger-menu

document.addEventListener("DOMContentLoaded", function(){
	var button = document.getElementById("burger");
	var navList = document.querySelector(".header-info-nav");
	button.addEventListener('click', function(){
		navList.classList.toggle("active_burger")
	});

});

// //slider

$(function(){
    $('.slick-slider').slick({
      prevArrow: false,
	  nextArrow: false,
	  dots: true
    });
});

//parents-page

document.addEventListener("DOMContentLoaded", function(){
    var teamList = document.getElementsByClassName("parents-content-item");
    // var active = document.getElementsByClassName('active-parents-item');

    Array.from(teamList).forEach(function(item, i, teamList) {
      item.addEventListener('click', function(e) {

        this.classList.toggle('active-parents-item');
      });
    });
});

//tabs

// jQuery( document ).ready(function($) {

// 	$('.blog-filter-tabs a').click(function(){

// 	    $(".blog-filter-tabs a").removeClass("active-tab");
// 	    $(this).addClass("active-tab");
// 		var filter = $(this).attr('data-filter');
// 		filterList(filter);

// 		//News filter function
// 		function filterList(value) {
// 			var list = $(".blog-content .blog-content-item");
// 			$(list).fadeOut("fast");{
// 				$(".blog-content").find("a[data-category*=" + value + "]").each(function (i) {
// 					$(this).delay(200).slideDown("fast");
// 				});
// 			}
// 		}
// 		return false;
// 	});

// });


//
jQuery(document).ready(function ($) {
  $('.menu-item-has-children > a').on('click',function(event){
      event.preventDefault();

  })
})
