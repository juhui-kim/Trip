<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>여행지 추천 유형검사</title>
	<script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="http://code.highcharts.com/highcharts.js"></script>	
	
	<script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/jqbar.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/jqbar.css" />
	<script type="text/javascript"></script>
	
	
	<link rel="stylesheet" href="assets/css/header.css" />
	
	<style>
		.jb-text {
			padding: 25px 25px;
			background-color: #81DAF5;
			text-align: center;
			font-family: monospace, "맑은 고딕", serif;
		}
	</style>

	
</head>

<body>

	<style>
		td , h4{
			text-align:center;
		}
		tbody tr th:first-child {text-align:center;}
		tbody tr th:last-child {text-align:center;}
		
		input[type='radio']{visibility:hidden;}
		input[type='radio']:after {width:1.5em;height:1.5em;
			border-radius: 0.75em;
			background-color: #fff;
			content: '';
			display: inline-block;
			visibility: visible;
			border: 2px solid #8d8d8e;
		}
		input[type='radio']:checked:after{
			background-color:#8d8d8e; <!--체크시 변하는 색-->
			content:'';
			display:inline-block;
			visibility:visible;
			border:2px solid #8d8d8e;
		}
		
		input[type='submit'] {
			color: #25618c;
			border: none;
			padding: 0 !important;
			font: inherit;
			cursor: pointer;
			text-decoration: underlin;
		}
		
		.container {
			height: 800px;
			overflow: auto;
		}
		.fixed_top {
			display:inline-table;
			position:absolute;
			top:0;
			width:calc(100% - 17px);
			background:#eef7ff;
		}

	</style>
	
			<header id="header" class="alt">
			<div class="inner">
				<a href="index.php"><h1>길 라 잡 이</h1></a>
				<p>나의 취향에 따른 국내 여행 추천 <a href="https://templated.co"><br>Trip in Korea</a></p>
			</div>
		</header>
	
	<div class="container">
		<div class="row">
		<div class="col-md-
		2">
		<!--<h0.2>여행지 추천 유형검사</h0.2>-->
		<div class="table-responsive">
			<form id="research" class="form-horizontal">
				<table class="table">
						<thead>
							<tr class='fixed_top'>
				<th>항목</td>
				<th width='10%'>매우 그렇다</th>
				<th width='7%'>그렇다</th>
				<th width='10%'>약간 그렇다</th>
				<th width='10%'>약간 그렇다</th>
				<th width='7%'>그렇다</th>
				<th width='10%'>매우 그렇다</th>
				<th>항목</th>
							</tr>
						</thead>
						<tbody>
						
		<tr>
			<td>주변 편의시설의 접근성이 좋은 여행지</td>         
            <td><input class="Standard1" type="radio" name="s1" value="7"/></td>
            <td><input class="Standard1" type="radio" name="s1" value="5"/></td>
            <td><input class="Standard1" type="radio" name="s1" value="3"/></td>
            <td><input class="Standard1" type="radio" name="s1" value="0.33"/></td>
            <td><input class="Standard1" type="radio" name="s1" value="0.2"/></td>   
            <td><input class="Standard1" type="radio" name="s1" value="0.143"/></td>   
			<td>많은 사람들이 방문하는 여행지</td> 
        </tr>   
         
        <tr>
            <td>관광지 인근의 편의시설이 잘 되어있는 여행지</td>         
            <td><input class="Standard2" type="radio" name="s2" value="7"/></td>
            <td><input class="Standard2" type="radio" name="s2" value="5"/></td>
            <td><input class="Standard2" type="radio" name="s2" value="3"/></td>
            <td><input class="Standard2" type="radio" name="s2" value="0.33"/></td>
            <td><input class="Standard2" type="radio" name="s2" value="0.2"/></td>   
            <td><input class="Standard2" type="radio" name="s2" value="0.143"/></td>   
			<td>한 곳에서 여러 관광을 할 수 있는 여행지</td> 
        </tr>
         
         
        <tr>
            <td>유동인구가 많은 여행지</td>         
            <td><input class="Standard3" type="radio" name="s3" value="7"/></td>
            <td><input class="Standard3" type="radio" name="s3" value="5"/></td>
            <td><input class="Standard3" type="radio" name="s3" value="3"/></td>
            <td><input class="Standard3" type="radio" name="s3" value="0.33"/></td>
            <td><input class="Standard3" type="radio" name="s3" value="0.2"/></td>   
            <td><input class="Standard3" type="radio" name="s3" value="0.143"/></td>   
			<td>한 장소에서 지속적인 활동을 할 수 있는 여행지</td> 
        </tr>
         
        <tr>
            <td>미세먼지가 거의 없지만 주변에 편의시설이 거의 없는 여행지 </td>         
            <td><input class="Standard4" type="radio" name="s4" value="7"/></td>
            <td><input class="Standard4" type="radio" name="s4" value="5"/></td>
            <td><input class="Standard4" type="radio" name="s4" value="3"/></td>
            <td><input class="Standard4" type="radio" name="s4" value="0.33"/></td>
            <td><input class="Standard4" type="radio" name="s4" value="0.2"/></td>
            <td><input class="Standard4" type="radio" name="s4" value="0.143"/></td>
<td>미세먼지는 나쁜 곳이지만 주변에 편의시설이 잘 되어 있는 여행지</td> 			
        </tr>
         
        <tr>
            <td>30분 거리의 편의시설을 가기위해 오르막길과 돌길을 가야하는 여행지</td>         
            <td><input class="Standard5" type="radio" name="s5" value="7"/></td> 
            <td><input class="Standard5" type="radio" name="s5" value="5"/></td>
            <td><input class="Standard5" type="radio" name="s5" value="3"/></td>
            <td><input class="Standard5" type="radio" name="s5" value="0.33"/></td>
            <td><input class="Standard5" type="radio" name="s5" value="0.2"/></td>
            <td><input class="Standard5" type="radio" name="s5" value="0.143"/></td>   
			<td>30분거리의 편의시설을 가기위해 모래길을 걸어가야하는 여행지</td> 
        </tr>
         
        <tr>
            <td>숙소 5분거리에 상점이 있는 여행지</td>         
            <td><input class="Standard6" type="radio" name="s6" value="7"/></td>
            <td><input class="Standard6" type="radio" name="s6" value="5"/></td>
            <td><input class="Standard6" type="radio" name="s6" value="3"/></td>
            <td><input class="Standard6" type="radio" name="s6" value="0.33"/></td>
            <td><input class="Standard6" type="radio" name="s6" value="0.2"/></td>
            <td><input class="Standard6" type="radio" name="s6" value="0.143"/></td>
<td>숙소 5분거리에 해변이 있는 여행지</td> 			
        </tr>
         
        <tr>
            <td>가을의 향기가 물씬 풍기는 지리산 단풍구경하기</td>         
            <td><input class="Standard7" type="radio" name="s7" value="7"/></td>
            <td><input class="Standard7" type="radio" name="s7" value="5"/></td>
            <td><input class="Standard7" type="radio" name="s7" value="3"/></td>
            <td><input class="Standard7" type="radio" name="s7" value="0.33"/></td>
            <td><input class="Standard7" type="radio" name="s7" value="0.2"/></td>
            <td><input class="Standard7" type="radio" name="s7" value="0.143"/></td>   
			<td>봄기운이 무르익어가는 4월에 석촌호수 벚꽃축제가기</td> 
        </tr>
         
        <tr>
            <td>투명한 눈꽃을 따라 하얗게 물든 설악산 눈꽃축제가기</td>         
            <td><input class="Standard8" type="radio" name="s8" value="7"/></td>
            <td><input class="Standard8" type="radio" name="s8" value="5"/></td>
            <td><input class="Standard8" type="radio" name="s8" value="3"/></td>
            <td><input class="Standard8" type="radio" name="s8" value="0.33"/></td>
            <td><input class="Standard8" type="radio" name="s8" value="0.2"/></td>
            <td><input class="Standard8" type="radio" name="s8" value="0.143"/></td> 
			<td>무더운 여름에 시원하고 즐거운 여름휴가로 해수욕장가기</td>   
        </tr>
         
        <tr>
            <td>다채롭고 판타스틱한 여의도 불꽃놀이가기</td>  
            <td><input class="Standard9" type="radio" name="s9" value="7"/></td>
            <td><input class="Standard9" type="radio" name="s9" value="5"/></td>
            <td><input class="Standard9" type="radio" name="s9" value="3"/></td>
            <td><input class="Standard9" type="radio" name="s9" value="0.33"/></td>
            <td><input class="Standard9" type="radio" name="s9" value="0.2"/></td>
            <td><input class="Standard9" type="radio" name="s9" value="0.143"/></td>   
			<td>새해 맞이 동해 일출보러가기</td> 
        </tr>   

        <tr>
            <td>캠핑 즐기기와 계곡에서 물놀이하기</td>         
            <td><input class="Standard10" type="radio" name="s10" value="7"/></td>
            <td><input class="Standard10" type="radio" name="s10" value="5"/></td>
            <td><input class="Standard10" type="radio" name="s10" value="3"/></td>
            <td><input class="Standard10" type="radio" name="s10" value="0.33"/></td>
            <td><input class="Standard10" type="radio" name="s10" value="0.2"/></td>   
            <td><input class="Standard10" type="radio" name="s10" value="0.143"/></td>   
			<td>박물관,미술관,전시회등 둘러보기</td> 
        </tr>            
      
        <tr>
            <td>트래킹,등산등의 활동</td>         
            <td><input class="Standard11" type="radio" name="s11" value="7"/></td>
            <td><input class="Standard11" type="radio" name="s11" value="5"/></td>
            <td><input class="Standard11" type="radio" name="s11" value="3"/></td>
            <td><input class="Standard11" type="radio" name="s11" value="0.33"/></td>
            <td><input class="Standard11" type="radio" name="s11" value="0.2"/></td>
            <td><input class="Standard11" type="radio" name="s11" value="0.143"/></td> 
<td>바나나보트,해수욕등의 활동</td> 			
        </tr>
            
        <tr>
            <td>실내 스포츠,역사탐방,야시장등의 활동</td>         
            <td><input class="Standard12" type="radio" name="s12" value="7"/></td>
            <td><input class="Standard12" type="radio" name="s12" value="5"/></td>
            <td><input class="Standard12" type="radio" name="s12" value="3"/></td>
            <td><input class="Standard12" type="radio" name="s12" value="0.33"/></td>
            <td><input class="Standard12" type="radio" name="s12" value="0.2"/></td>
            <td><input class="Standard12" type="radio" name="s12" value="0.143"/></td>  
	<td>선탠,모래찜질등의 활동</td> 			
        </tr>

        <tr>
            <td>많은 사람들에게 주목받기</td>         
            <td><input class="Standard13" type="radio" name="s13" value="7"/></td>
            <td><input class="Standard13" type="radio" name="s13" value="5"/></td>
            <td><input class="Standard13" type="radio" name="s13" value="3"/></td>
            <td><input class="Standard13" type="radio" name="s13" value="0.33"/></td>
            <td><input class="Standard13" type="radio" name="s13" value="0.2"/></td>
            <td><input class="Standard13" type="radio" name="s13" value="0.143"/></td>  
	<td>지쳐 쓰러질때까지 활동하기</td> 			
        </tr>   
         
        <tr>
            <td>새로운 사람들을 만나 시간 보내기</td>         
            <td><input class="Standard14" type="radio" name="s14" value="7"/></td>
            <td><input class="Standard14" type="radio" name="s14" value="5"/></td>
            <td><input class="Standard14" type="radio" name="s14" value="3"/></td>
            <td><input class="Standard14" type="radio" name="s14" value="0.33"/></td>
            <td><input class="Standard14" type="radio" name="s14" value="0.2"/></td>
            <td><input class="Standard14" type="radio" name="s14" value="0.143"/></td>   
	<td>색다른 경험을 하는 모험적인 활동하기</td> 
        </tr>
         
         
        <tr>
            <td>여행지의 모든 관광코스를 둘러보기</td>         
            <td><input class="Standard15" type="radio" name="s15" value="7"/></td>
            <td><input class="Standard15" type="radio" name="s15" value="5"/></td>
            <td><input class="Standard15" type="radio" name="s15" value="3"/></td>
            <td><input class="Standard15" type="radio" name="s15" value="0.33"/></td>
            <td><input class="Standard15" type="radio" name="s15" value="0.2"/></td>   
            <td><input class="Standard15" type="radio" name="s15" value="0.143"/></td>   
			<td>한번도 해보지 못했던 활동하기</td> 
        </tr>
         
        <tr>
            <td>시끌벅적한 분위기의 여행지</td>         
            <td><input class="Standard16" type="radio" name="s16" value="7"/></td>
            <td><input class="Standard16" type="radio" name="s16" value="5"/></td>
            <td><input class="Standard16" type="radio" name="s16" value="3"/></td>
            <td><input class="Standard16" type="radio" name="s16" value="0.33"/></td>
            <td><input class="Standard16" type="radio" name="s16" value="0.2"/></td>
            <td><input class="Standard16" type="radio" name="s16" value="0.143"/></td>   
			<td>조용하면서도 북적북적한 분위기의 여행지</td> 
        </tr>
         
        <tr>
            <td>새로운 사람들과 함께 여행하는 것을 즐기는 성격</td>         
            <td><input class="Standard17" type="radio" name="s17" value="7"/></td> 
            <td><input class="Standard17" type="radio" name="s17" value="5"/></td>
            <td><input class="Standard17" type="radio" name="s17" value="3"/></td>
            <td><input class="Standard17" type="radio" name="s17" value="0.33"/></td>
            <td><input class="Standard17" type="radio" name="s17" value="0.2"/></td>
            <td><input class="Standard17" type="radio" name="s17" value="0.143"/></td>  
<td>같이 간 일행들하고만 여행하는 것을 즐기는 성격</td> 			
        </tr>
         
        <tr>
            <td>일상적이지만 평소에 즐기지 못하였던 활동</td>         
            <td><input class="Standard18" type="radio" name="s18" value="7"/></td>
            <td><input class="Standard18" type="radio" name="s18" value="5"/></td>
            <td><input class="Standard18" type="radio" name="s18" value="3"/></td>
            <td><input class="Standard18" type="radio" name="s18" value="0.33"/></td>
            <td><input class="Standard18" type="radio" name="s18" value="0.2"/></td>
            <td><input class="Standard18" type="radio" name="s18" value="0.143"/></td>  
<td>평소와 많이 다르지 않은 일상적인 활동</td> 			
        </tr>
         
        <tr>
            <td>아침 일찍 일어나 부지런히 돌아다니는 여행</td>         
            <td><input class="Standard19" type="radio" name="s19" value="7"/></td>
            <td><input class="Standard19" type="radio" name="s19" value="5"/></td>
            <td><input class="Standard19" type="radio" name="s19" value="3"/></td>
            <td><input class="Standard19" type="radio" name="s19" value="0.33"/></td>
            <td><input class="Standard19" type="radio" name="s19" value="0.2"/></td>
            <td><input class="Standard19" type="radio" name="s19" value="0.143"/></td>   
			<td>늦은 오전에 일어나 여유롭게 즐기는 여행</td> 
        </tr>
         
        <tr>
            <td>다양한 관광코스를 전부 다 둘러보는 여행</td>         
            <td><input class="Standard20" type="radio" name="s20" value="7"/></td>
            <td><input class="Standard20" type="radio" name="s20" value="5"/></td>
            <td><input class="Standard20" type="radio" name="s20" value="3"/></td>
            <td><input class="Standard20" type="radio" name="s20" value="0.33"/></td>
            <td><input class="Standard20" type="radio" name="s20" value="0.2"/></td>
            <td><input class="Standard20" type="radio" name="s20" value="0.143"/></td>   
			<td>주로 숙소에서 휴양하는 여행</td> 
        </tr>
         
        <tr>
            <td>세운 계획을 융통성있게 이행하는 여행</td>         
            <td><input class="Standard21" type="radio" name="s21" value="7"/></td>
            <td><input class="Standard21" type="radio" name="s21" value="5"/></td>
            <td><input class="Standard21" type="radio" name="s21" value="3"/></td>
            <td><input class="Standard21" type="radio" name="s21" value="0.33"/></td>
            <td><input class="Standard21" type="radio" name="s21" value="0.2"/></td>
            <td><input class="Standard21" type="radio" name="s21" value="0.143"/></td>
<td>세워놓은 거의 모든 계획을 지키지 않는 여행</td> 			
        </tr>   

        <tr>
            <td>어떠한 정보도 알지 못한채 새로운 여행지 탐방하기</td>         
            <td><input class="Standard22" type="radio" name="s22" value="7"/></td>
            <td><input class="Standard22" type="radio" name="s22" value="5"/></td>
            <td><input class="Standard22" type="radio" name="s22" value="3"/></td>
            <td><input class="Standard22" type="radio" name="s22" value="0.33"/></td>
            <td><input class="Standard22" type="radio" name="s22" value="0.2"/></td>
            <td><input class="Standard22" type="radio" name="s22" value="0.143"/></td> 
			<td>잘 알려지지 않은 여행지를 정보 탐색 후 여행하기</td> 
        </tr>            
      
        <tr>
            <td>잘 알려지지 않은 숨겨진 여행지</td>         
            <td><input class="Standard23" type="radio" name="s23" value="7"/></td>
            <td><input class="Standard23" type="radio" name="s23" value="5"/></td>
            <td><input class="Standard23" type="radio" name="s23" value="3"/></td>
            <td><input class="Standard23" type="radio" name="s23" value="0.33"/></td>
            <td><input class="Standard23" type="radio" name="s23" value="0.2"/></td>
            <td><input class="Standard23" type="radio" name="s23" value="0.143"/></td>
			<td>유명하고 인기 많은 관광지 여행하기</td> 			
        </tr>
            
        <tr>
            <td>놀이공원,미술관등 일상적으로 잘 가지 못했던 여행지</td>         
            <td><input class="Standard24" type="radio" name="s24" value="7"/></td>
            <td><input class="Standard24" type="radio" name="s24" value="5"/></td>
            <td><input class="Standard24" type="radio" name="s24" value="3"/></td>
            <td><input class="Standard24" type="radio" name="s24" value="0.33"/></td>
            <td><input class="Standard24" type="radio" name="s24" value="0.2"/></td>
            <td><input class="Standard24" type="radio" name="s24" value="0.143"/></td>
			<td>공원,산책,쇼핑등 일상적으로 즐길 수 있는 여행지</td> 	
        </tr>
					
					</tbody>
				</table>
			</form>
			
			<button id="actres" class="btn btn-outline-secondary" 
			data-title="결과보기" style="width: 100%;" data-toggle="modal" 
			data-target="#result">결과보기</button>
			
		</div>
	<!--/.modal-content-->
	</div>	
		<!--/.modal-dialog-->
	</div>	
	<div class="modal fade" id="result" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action ="result.php" method='post'>
					<div class="modal-header">
						<h4 class="modal-title custom_align" id="Heading">여행지 추천 유형검사</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
					</div>
					<div class="modal-body">
				
					<!--<div class="form-group">
					총점: <input class="form-control " type="text" name="sum" readonly/>
					</div>-->
					
						<div class="form-group">
							여행타입: <input class="form-control " type="text" name="traveltype" readonly/>
						</div>

					<!--div class="form-group">
						추천여행지 : <textarea rows="4" class="form_control" id="itemtypelist" readonly/></textarea>
					</div>-->
					
					</div>
					<div class="modal-footer">
						<input type="hidden" name="travelnum1" />
						<input type="hidden" name="travelnum2" />
						<input type='submit' class='btn btn-outline-secondary' value="유형별 여행지 추천 보기" style="width:100%;height:30pt" />
					</div>
				</form>
			</div>	
		<!--/.modal-content-->
		</div>	
		
		</div>
		
    </div>
	
	
	
	
	
	
	<script>

	function travelscore(){

		var isResult = true ; 
		var weightList = 0;	
		
		var result_weightSS = [];
		var result_matrixSS = [];
		var result_weightS1 = [];
		var result_matrixS1 = [];
		var result_weightS2 = [];
		var result_matrixS2 = [];
		var result_weightS3 = [];
		var result_matrixS3 = [];
		
		var result_weightCC = [];
		var result_matrixCC = [];
		var result_weightC1 = [];
		var result_matrixC1 = [];
		var result_weightC2 = [];
		var result_matrixC2 = [];
		var result_weightC3 = [];
		var result_matrixC3 = [];
		
		var result_sum = [];
		var weightSS = [];
		var weightCC = [];

		var s1 = parseFloat($(".Standard1:checked").val());
		var s2 = parseFloat($(".Standard2:checked").val());
		var s3 = parseFloat($(".Standard3:checked").val());
		var s4 = parseFloat($(".Standard4:checked").val());
		var s5 = parseFloat($(".Standard5:checked").val());
		var s6 = parseFloat($(".Standard6:checked").val());
		var s7 = parseFloat($(".Standard7:checked").val());
		var s8 = parseFloat($(".Standard8:checked").val());
		var s9 = parseFloat($(".Standard9:checked").val());
		var s10 = parseFloat($(".Standard10:checked").val());
		var s11 = parseFloat($(".Standard11:checked").val());
		var s12 = parseFloat($(".Standard12:checked").val());
		
		var s13 = parseFloat($(".Standard12:checked").val());
		var s14 = parseFloat($(".Standard12:checked").val());
		var s15 = parseFloat($(".Standard12:checked").val());
		var s16 = parseFloat($(".Standard12:checked").val());
		var s17 = parseFloat($(".Standard12:checked").val());
		var s18 = parseFloat($(".Standard12:checked").val());
		var s19 = parseFloat($(".Standard12:checked").val());
		var s20 = parseFloat($(".Standard12:checked").val());
		var s21 = parseFloat($(".Standard12:checked").val());
		var s22 = parseFloat($(".Standard12:checked").val());
		var s23 = parseFloat($(".Standard12:checked").val());
		var s24 = parseFloat($(".Standard12:checked").val());
		
		
		function multiplyMatrix(m1, m2) {
			for(var i = 0; i < 3; i++) {
				var row = [];
				for(var j = 0; j < 3; j++) {
					var matrix_sum = 0;
					for(var k = 0; k < 3; k++) {
						matrix_sum += parseFloat(m1[i][k] * m1[k][j]);
					}
					row.push(matrix_sum);
				}
				m2.push(row);
			}
			return m2;
		};
		
		function Matrixsum(m3, m4) {
			var arr_sum = 0;
			for(var p=0; p<3; p++){
				for(var s=0; s<3; s++){
					arr_sum += parseFloat(m3[p][s]);
				}
			}
			
			for (var m=0; m<3; m++){
				var row_sum = 0;
				for(var n=0; n<3; n++) {
					row_sum += parseFloat(m3[m][n]);
				}
				m4.push((row_sum / arr_sum).toFixed(4));
			}
			return m4;
		};
		
		var arraySS = [
		[1,s1,s2],
		[(1/s1).toFixed(4), 1, s3],
		[(1/s2).toFixed(4), (1/s3).toFixed(4), 1]
		];
		
		var arrayS1 = [
		[1,s4,s5],
		[(1/s4).toFixed(4), 1, s6],
		[(1/s5).toFixed(4), (1/s6).toFixed(4), 1]
		];
		
		var arrayS2 = [
		[1,s7,s8],
		[(1/s7).toFixed(4), 1, s9],
		[(1/s8).toFixed(4), (1/s9).toFixed(4), 1]
		];
		
		var arrayS3 = [
		[1,s10,s11],
		[(1/s10).toFixed(4), 1, s12],
		[(1/s11).toFixed(4), (1/s12).toFixed(4), 1]
		];
		
		var arrayCC = [
		[1,s13,s14],
		[(1/s13).toFixed(4), 1, s15],
		[(1/s14).toFixed(4), (1/s15).toFixed(4), 1]
		];
		
		var arrayC1 = [
		[1,s16,s17],
		[(1/s16).toFixed(4), 1, s18],
		[(1/s17).toFixed(4), (1/s18).toFixed(4), 1]
		];
		
		var arrayC2 = [
		[1,s19,s20],
		[(1/s19).toFixed(4), 1, s21],
		[(1/s20).toFixed(4), (1/s21).toFixed(4), 1]
		];
		
		var arrayC3 = [
		[1,s22,s23],
		[(1/s22).toFixed(4), 1, s24],
		[(1/s23).toFixed(4), (1/s24).toFixed(4), 1]
		];
		
		
		multiplyMatrix(arraySS, result_matrixSS);
		Matrixsum(result_matrixSS, result_weightSS);
		multiplyMatrix(arrayS1, result_matrixS1);
		Matrixsum(result_matrixS1, result_weightS1);
		multiplyMatrix(arrayS2, result_matrixS2);
		Matrixsum(result_matrixS2, result_weightS2);
		multiplyMatrix(arrayS3, result_matrixS3);
		Matrixsum(result_matrixS3, result_weightS3);
		
		multiplyMatrix(arrayCC, result_matrixCC);
		Matrixsum(result_matrixCC, result_weightCC);
		multiplyMatrix(arrayC1, result_matrixC1);
		Matrixsum(result_matrixC1, result_weightC1);
		multiplyMatrix(arrayC2, result_matrixC2);
		Matrixsum(result_matrixC2, result_weightC2);
		multiplyMatrix(arrayC3, result_matrixC3);
		Matrixsum(result_matrixC3, result_weightC3);
		
		var M_sum = 0;
		M_sum = result_weightSS[0]*result_weightS1[0] + result_weightSS[1]*result_weightS2[0] + result_weightSS[2]*result_weightS3[0];
		var S_sum = 0;
		S_sum = result_weightSS[0]*result_weightS1[1] + result_weightSS[1]*result_weightS2[1] + result_weightSS[2]*result_weightS3[1];;
		var C_sum = 0;
		C_sum = result_weightSS[0]*result_weightS1[2] + result_weightSS[1]*result_weightS2[2] + result_weightSS[2]*result_weightS3[2];;
		
		var D_sum = 0;
		D_sum = result_weightCC[0]*result_weightC1[0] + result_weightCC[1]*result_weightC2[0] + result_weightCC[2]*result_weightC3[0];
		var E_sum = 0;
		E_sum = result_weightCC[0]*result_weightC1[1] + result_weightCC[1]*result_weightC2[1] + result_weightCC[2]*result_weightC3[1];;
		var F_sum = 0;
		F_sum = result_weightCC[0]*result_weightC1[2] + result_weightCC[1]*result_weightC2[2] + result_weightCC[2]*result_weightC3[2];;
		
		var result_MSC = [M_sum, S_sum, C_sum];
		var result_DEF = [D_sum, E_sum, F_sum];	
		
		var max_MSC = 0;
		var Index_MSC = "";
		var max_DEF = 0;
		var Index_DEF = "";
		
		for(var c=0; c<3; c++){
			if(max_MSC < result_MSC[c]){
				max_MSC = result_MSC[c];
				Index_MSC = c;
			}
		}
		
		for(var d=0; d<3; d++){
			if(max_DEF < result_DEF[d]){
				max_DEF = result_DEF[d];
				Index_DEF = d;
			}
		}
		
		var num1 = 0;
		var num2 = 0;
		
		if( Index_MSC == "0"){
			Index_MSC = "Mountain";
			num1 = 0;
		}
		else if( Index_MSC == "1"){
			Index_MSC = "Sea";
			num1 = 1;
		}
		else { 
			Index_MSC = "City";
			num1 = 2;
		}
	
		if( Index_DEF == "0"){
			Index_DEF = "High";
			num2 = 0;
		}
		else if( Index_DEF == "1"){
			Index_DEF = "Median";
			num2 = 1;
		}
		else { 
			Index_DEF = "Low";
			num2 = 2;
		}
		
		$("input[name=traveltype]").val(Index_MSC + Index_DEF);		
		$("input[name=travelnum1]").val(num1);						
		$("input[name=travelnum2]").val(num2);			
						
			// 결과값 숨기기
		var rsrchChk = $("#research input[type=radio]"); 
		$(':radio').each(function (){
			name = $(this).attr('name'); 
			if (isResult && !$(':radio[name="' + name + '"]:checked').length){isResult = false;}
				console.log(isResult); 
			});
			
		if(isResult)$("#actres").show();
		
		} //<!--function 끝부분-->
				
	$().ready(function(){
		$("#actres").hide(); 
		$("input").change(function(){ 
		travelscore(); 
		}); 
	}); 
							
</script>

	

	</body>
</html>							
</script>

	

	</body>
</html>