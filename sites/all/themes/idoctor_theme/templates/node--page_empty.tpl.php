
<?php require_once 'header.tpl.php'; ?>

<?php echo render($content['body']); ?>









<link rel="stylesheet" href="/sites/all/libraries/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" href="/sites/all/libraries/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
<script src="/sites/all/libraries/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>




<script>
	(function($) {

 // Карусели
 $(document).ready(function(){
 	$(".masters .container #block-views-masters-block .view-masters .owl-carousel").owlCarousel({
 		loop:true, 
 		items : 4,
 		autoplay : true,
 		dots: true,
 		smartSpeed: 2000,
 		autoplayTimeout: 5000,
 		nav : true,
 		responsive:{
 			0:{items:1},
 			767:{items:2},
 			991:{items:3},
 			1499:{items:4}
 		}
 	});
 });

})(jQuery);


</script>

<?php require_once 'footer.tpl.php';?>

