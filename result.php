<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
    
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="ko">
    <head>		
		<meta http-equiv="Content-type" content="text/html;charset=utf-8">
    
		<!-- jQuery  -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- bootstrap JS -->
		<script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<!-- bootstrap CSS -->
		<link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
		<title>여행지 추천 유형검사결과</title>
		<style type="text/css">
		
			body{
				overflow: hidden;
				margin: 0;
				padding: 0;
				position: relative;
				font-family: Consolas, monospace;
				font-family: 12px;
			}
			table {
				width: 100%;
			}
		
			th, td {
				padding: 10px;
				border-bottom: 1px solid #dadada;
			}
			
			header { 
				height:35px;
			}

			content{
				position: relative;
				margin: 0px 0px 0 240px;
			}
	
			div.left {
				width: 50%;
				height: 100%;
				float: left;
				box-sizing: border-box;
				overflow:auto;
			}

			div.right {
				width: 50%;
				float: right;
				box-sizing: border-box;
				overflow:auto;
			}
			
        </style>
	</head>

	
	<body>
		<header>
		<header id="header" class="alt">
			<div class="inner">
				<a href="index.php"><h1>길 라 잡 이</h1></a>
				<p>나의 취향에 따른 국내 여행 추천 <a href="https://templated.co"><br>Trip in Korea</a></p>
			</div>
		</header>
			<br> 당신의 여행 유형은: <?php echo $_POST["traveltype"];?> 입니다.</br>
		</header>
		
		<br><br>
		
		<?php 
		$Theme1 = $_POST["travelnum1"];
		$Theme2 = $_POST["travelnum2"];
		?>
		
		<div class="left">
			<table id="example-table-1" class="table table-bordered table-hover text-center">
				<thead>
					<tr>
						<th>Name</th>
						<th>Address</th>
					</tr>
				</thead>
			<tbody>
				<?php
				
					$jb_conn = mysqli_connect( 'localhost', 'tlasd3289', 'qwsa0703!', 'tlasd3289' );
					$jb_sql = "SELECT * FROM travel WHERE Theme1=$Theme1 AND Theme2=$Theme2;";
					$jb_result = mysqli_query( $jb_conn, $jb_sql ) or die(mysqli_error($jb_conn));
			
					while( $jb_row = mysqli_fetch_array($jb_result) ) {
					echo '<tr><td>' . $jb_row[ 'Name' ] . '</td><td>'. $jb_row[ 'Address' ] . '</td></tr>';
					}
				?>
			</tbody>
			</table>
		</div>
		<div class="right">
			<!--<div class="col-lg-12" id="ex1_Result1" ></div>-->
			<div class="col-lg-12" id="ex1_Result2" ></div>
			<form name="sub" method='post' >
				<iframe name='iframe_name' width="100%" height='100%' src=""></iframe>
				<input type='hidden' name='name'/>
				<input type='hidden' name='address'/>
			</form>
		</div>

<script>
    
        // 테이블의 Row 클릭시 값 가져오기
        $("#example-table-1 tr").click(function(){     
 
            var str = ""
            var tdArr = new Array();    // 배열 선언
            
            // 현재 클릭된 Row(<tr>)
            var tr = $(this);
            var td = tr.children();
            
            // tr.text()는 클릭된 Row 즉 tr에 있는 모든 값을 가져온다.
            console.log("클릭한 Row의 모든 데이터 : "+tr.text());
            
            // 반복문을 이용해서 배열에 값을 담아 사용할 수 도 있다.
            td.each(function(i){
                tdArr.push(td.eq(i).text());
            });
            
            console.log("배열에 담긴 값 : "+tdArr);
            
            // td.eq(index)를 통해 값을 가져올 수도 있다.
            var name = td.eq(0).text();
            var address = td.eq(1).text();
            // var name = td.eq(2).text();
            // var email = td.eq(3).text();
            
            str += "관광지 : <font color='blue'>" + name + "</font>"
			+ " 아이디 : <font color='blue'>" + address + "</font>" ;
                   // ", 이름 : <font color='red'>" + name + "</font>" +
                   // ", 이메일 : <font color='red'>" + email + "</font>";        
            
            $("#ex1_Result1").html(" * 클릭한 Row의 모든 데이터 = " + tr.text());        
            $("#ex1_Result2").html(str);
			
								
			$("input[name=name]").val(name);
			$("input[name=address]").val(address);
			document.sub.target='iframe_name';
			document.sub.action='map.php';
			document.sub.submit(); 			
			$('iframe[name=name]').attr('src','map.php');
        });
    
    
		</script>
		
	</body>
</html>