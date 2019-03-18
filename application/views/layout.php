<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo isset($title) ? $title:'' ?></title>

	<link rel="icon" href="<?php echo base_url('asset/images/favicon.png')?>" type="image/png">

	<link rel='stylesheet' href="<?php echo base_url('asset/css/font-awesome.min.4.7.0.css')?>" type='text/css' />
	<link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min-v4.1.3.css')?>" crossorigin="anonymous" />
	<link rel="stylesheet" href="<?php echo base_url('asset/css/daterangepicker.css')?>" crossorigin="anonymous" />
	<!-- flexslider core CSS file -->
	<link rel="stylesheet" href="<?php echo base_url('asset/css/flexslider/flexslider.css')?>" crossorigin="anonymous" />
	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="<?php echo base_url('asset/css/magnific-popup/magnific-popup.css')?>" />
	<link rel='stylesheet' href="<?php echo base_url('asset/css/styles.css')?>" type='text/css' />
	<link rel='stylesheet' href="<?php echo base_url('asset/css/custom.css')?>" type='text/css' />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/responsive.css')?>"/>
</head>

<body class="">
<div class="site-wrapper">
	<main>
		<div class="page-content entry-content">
			<?php $this->load->view($content)?>
		</div>
	</main>
</div>


<script src="<?php echo base_url('asset/js/jquery-3.3.1.slim.min.js')?>" crossorigin="anonymous"></script>
<script src="<?php echo base_url('asset/js/moment.min.js')?>" crossorigin="anonymous"></script>
<script src="<?php echo base_url('asset/js/bootstrap.min.v4.1.3.js')?>" crossorigin="anonymous"></script>
<script src="<?php echo base_url('asset/js/daterangepicker.min.js')?>" crossorigin="anonymous"></script>
<script src="<?php echo base_url('asset/js/flexslider/jquery.flexslider.js')?>" crossorigin="anonymous"></script>
<script src="<?php echo base_url('asset/js/magnific-popup/jquery.magnific-popup.min.js')?>" crossorigin="anonymous"></script>
<script src="<?php echo base_url('asset/js/custom.js')?>" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	function orderInfo(date){
		$.ajax({
			type:'post',
			url : '<?php echo base_url("Welcome/order_details")?>',
			data: {date: date},
			dataType : 'json',
			success:function(res){
				// alert(res);
				var order_info = res;
				$('.order_amount').html(order_info['all_order_amount']);
				$('.order_count').html(order_info['all_order_count']);

				// alert(res);
				// $.each(res,function(index,val){
				// 	alert(val);
				// });
				// alert(res)
				// $(".sections").html(res);
				console.log(res);
			}
		});
		//event.preventDefault();
	}

	//function orderInfo(date){
	//	$.ajax({
	//		type:'post',
	//		url : '<?//= base_url("Welcome/order_details")?>//',
	//		data: {date: date},
	//		// dataType : 'json',
	//		success:function(res){
	//			//  alert(res);
	//			var order_info = res.split("##");
	//			$('.order_amount').html(order_info[0]);
	//			$('.order_count').html(order_info[1]);
	//			console.log(res);
	//		}
	//	});
	//}

</script>


<script>
	$(document).ready(function(){

		var info = "This is some text";
		// $("#button1").mouseover(function () {
			// $("#2nd").css({
			// 	"color": "green",
			// 	"border": "2px solid red"
			// });
			// $('li').html(info);
			// $("h2").removeClass("bg-info");
			// $("p").removeClass("bg-success");

			// $("#2nd").fadeToggle(1000);
			//
			// $("#1st").fadeToggle(1000);
			// $("#3rd").fadeToggle(1000);

			// $("h2").replaceWith("<h2>"+info+"</h2>");

			//$("img").attr("src", "<?php //echo base_url()?>///asset/img2.jpg");
		// });

		// $("#button2").mouseover(function () {
			// $("#2nd h2").removeClass("bg-info");
			// $("#2nd p").removeClass("bg-success");
			//
			// $("h2").addClass("bg-info");
			// $("p").addClass("bg-success");
			// $("#2nd").fadeToggle(1000);
			// $("#1st").fadeToggle(1000);
			// $("#3rd").fadeToggle(1000);

			//$("img").attr("src", "<?php //echo base_url()?>///asset/img.jpg")
		// });

		$("img").hover(function () {
			$("img").attr("src", "<?php echo base_url()?>asset/img.jpg");},
			function () {
				$("img").attr("src", "<?php echo base_url()?>asset/img2.jpg");
			});

		$("#2nd").on("click", whenMouseClicked);
		$("#2nd").on("mouseleave", whenMouseLeave);

		function whenMouseClicked() {
			$("#2nd p").html("You are clicked");
		}

		function whenMouseLeave() {
			$("#2nd p").html("Where are you going...?");
		}
	});
</script>

</body>
</html>

