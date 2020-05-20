<!DOCTYPE HTML>

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="http://code.highcharts.com/highcharts.js"></script>	

		<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=0f848d0a322adbcc67da09d61483ab6c"></script>
		
		<div id="map" style="width:500px;height:400px;"></div>
		
		<?php
			$select_name = $_POST["name"];
			$select_address = $_POST["address"];
			
			echo "관광지: " . $select_name . "<br>";
			echo "주소: " . $select_address;
			
			$checked_name = $select_name;
			
			$db = mysqli_connect("localhost", "tlasd3289", "qwsa0703!", "tlasd3289");
			$result = mysqli_query($db, 'SELECT VERSION() as VERSION');
			$data = mysqli_fetch_assoc($result);
			
			$mid_sql = "SELECT * FROM travel WHERE Name='$checked_name';";
			$mid_result = mysqli_query( $db, $mid_sql ) or die(mysqli_error($db));
			
			$district_array = array();
			$latitude_array = array();
			$longitude_array = array();
			
			while( $row = mysqli_fetch_array($mid_result) ) {
				$district_array[] = $row['District_Number'];
				$latitude_array[] = $row['Latitude'];
				$longitude_array[] = $row['Longitude'];
			};


//			while( $row = mysqli_fetch_array($result) ) {
//				echo '<tr><td>' . $row[ 'Name' ] . '</td><td>'. $row[ 'Address' ] . '</td></tr>';
//				$arr_name = $row['Name'];
//				$arr_Address = $row['Address'];
//			};
		?>
				
<script>
var mapContainer = document.getElementById('map'), // 지도를 표시할 div  
    mapOption = { 
        center: new kakao.maps.LatLng(<?php echo $latitude_array[0];?>, <?php echo $longitude_array[0];?>), // 지도의 중심좌표
        level: 3 // 지도의 확대 레벨
    };

var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

var positions = [
	<?php
	
	
		$sql = "SELECT *, (6371*acos(cos(radians($latitude_array[0]))*cos(radians(Latitude))*cos(radians(Longitude)-radians($longitude_array[0]))+sin(radians($latitude_array[0]))*sin(radians(Latitude)))) AS distance FROM travel HAVING distance <= 1 ORDER BY distance;";
		$result = mysqli_query( $db, $sql ) or die(mysqli_error($db));
		
		while( $row = mysqli_fetch_array($result) ) {
			echo '{ title:' . "'". $row[ 'Name' ] . "'," . 'latlng: new kakao.maps.LatLng('. $row[ 'Latitude' ] . ',' .$row['Longitude'] . ')},';
		};
	?>
	{}
];


// 마커 이미지의 이미지 주소입니다
var imageSrc = "https://t1.daumcdn.net/localimg/localimages/07/mapapidoc/markerStar.png"; 
    
for (var i = 0; i < positions.length; i ++) {
    
    // 마커 이미지의 이미지 크기 입니다
    var imageSize = new kakao.maps.Size(24, 35); 
    
    // 마커 이미지를 생성합니다    
    var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize); 
    
    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        map: map, // 마커를 표시할 지도
        position: positions[i].latlng, // 마커를 표시할 위치
        title : positions[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시됩니다
        image : markerImage // 마커 이미지 
    });
}
</script>



</body>
</html>