<!DOCTYPE html>
<html>
	<head>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

		<script type="text/javascript"
      			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_M34eZg0zFUjwYltQ51lgZg3RqEkfqKc"libraries=places&sensor=true>
    	</script>

		<title>BUKAVU</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<link rel="icon" type="image/png" href="ico.png" />

	<script type="text/javascript">

		var map;
		var service;

		function performSearch()
		{
			var request = {
				bounds : map.getBounds(),
				name : "Avenue"
			}
			service.nearbySearch(request, handleSearchResults);
		}


		function initialise(location) 
		{
			console.log(location);
			var MaLocation = new google.maps.LatLng(-2.5118016, 28.8540029);
			var mapOptions = {
  			center: MaLocation,
  			zoom: 8,
  			mapTypeId : google.maps.MapTypeId.ROADMAP
			};

			map = new google.maps.Map(document.getElementById("map-canvas"),
				mapOptions);

			var marker = new google.maps.Marker({
				position: MaLocation,
				map : map
			}); 

			var marker2 = new google.maps.Marker({
    			position: map.getCenter(),
    			map: map,
    			title: 'Cliquez pour zoomer'
  });


			service = new google.maps.places.PlacesService(map); 	

		}

		$(document).ready(function()
		{
			navigator.geolocation.getCurrentPosition(initialise);
		});


	</script>
	

	</head>

	<body>

		<div id="banner">
			<h1 align="center" >Bukavu</h1>	
		</div>

		<div id="galerie">

						<img src="images/slide1.jpg" alt="slide1" class="active"/>
						<img src="images/slide2.png" alt="slide2" />
						<img src="images/slide3.jpg" alt="slide3" />
						<img src="images/slide4.jpg" alt="slide4" />
						<img src="images/slide5.jpg" alt="slide5" />
						<img src="images/slide6.jpg" alt="slide6" />

		</div>

		<div id="info">
			
			<strong class="titre">Bukavu</strong> est une ville de la République démocratique du Congo située sur la rive sud ouest du Lac Kivu et la capitale de la province du Sud-Kivu.<br />
			La ville compte environ 500 000 habitants, et quelques 250 000 autres dans la banlieue et les villages alentours.<br />
			<p >La langue parlée majoritairement est le Kiswahili. Le climat est tropical, alternant deux saisons, celle dite sèche (de mi-avril à fin août) et celle dite pluvieuse (de septembre à avril).<br/>
			<strong class="titre">Population <br/></strong>
			Bukavu est composée d’une population hétéroclite avec une prépondérance des Bashi (presque 40 % de la population), suivis des Barega (plus ou moins 30 %), le reste étant composé des populations ressortissant des autres ethnies et tribus de la République démocratique du Congo.
			</p><strong class="titre">Evenements malheureux</strong><br/>
			De nombreux viols, massacres et crimes de guerre y ont été perpétrés entre 1996 et 2006 par les troupes des généraux rebelles <br />
			du Rassemblement congolais pour la démocratie (RCD), essentiellement les généraux Nkundabatware et Mutebesi.<br />
			En 2004, la ville fut le théâtre de combats sanglants entre les rebelles et les troupes gouvernementales.<br />
			Bukavu a été fondée en 1901 par les autorités coloniales belges. Tout d'abord nommée Costermansville<br />
			en l'honneur de Paul Costermans, elle accueillait une importante population européenne sous le régime colonial. <br />
			En 1967, Bukavu fut le théatre d'une bataille opposant 600 sodats Kantangais et 170 mercenaires blancs aux 15 000 hommes du général Mobutu. <br />
			Ces mercenaires, belges et français pour la plupart, étaient commandés par l'aventurier belge Jean Schramme. <br />
			La bataille s'est soldée en novembre 1967 par la défaite des mercenaires et leur fuite vers le Rwanda.

		</div>

		<div id="map-canvas">
					
		</div>

		<div id="foot">
		
				<a href="www.bukavuonline.com">Bukavu OnLine</a>
				<a href="www.stiopka.com/Bukavu/photos_bukavu.html">  Photos de Bukavu</a>
				<a href="www.ucbukavu.ac.cd/">Université de Bukavu</a>
				<p id="copyright">Copyright &copy; Mukanda Kengwe and Infasha Mvuge Eliel 2015</p>

		</div>

		<script src="js/jquery.js"></script>
		<script src="js/slide.js"></script>

	</body>
</html>