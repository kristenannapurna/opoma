

function myMap(){
			var opoma = {lat:44.1713564,lng:-77.689348}
			var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 9,
				center: opoma, 
				scrollwheel:false,
				styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
			});

			var marker = new google.maps.Marker({
				position: opoma,
				map: map
			});


			var infowindow = new google.maps.InfoWindow();
			infowindow.setOptions({
				content: '<a href="https://www.google.com/maps/place/450+County+Rd+5,+Wooler,+ON+K0K+3M0,+Canada/@44.1713564,-77.6882323,17z/data=!4m5!3m4!1s0x89d61091c36ad5cb:0x4f9deb1c581e9d35!8m2!3d44.1713564!4d-77.687154?hl=en-US" target="_blank">Opoma Farms</a>'
			});
			infowindow.open(map, marker)

			google.maps.event.addListener(marker, 'click', function() {
       // set the content and open the window
       infowindow.open(map, marker);
     });
		}


$(function(){

	if ($(window).width() < 925){
		$('.testimonials-group').flickity({
			wrapAround: true,
			cellAlign: 'left'
		});
	}

	myMap();



	

});