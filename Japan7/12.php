<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <meta name="csrf-token" content="64By1VGAMf7iR53MUMS9Z1f7Bx0yZwveURtA3BW2">
	 <meta property="fb:app_id" content="" />
	<title>Title of the document</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./js/main.js"></script>
</head>

<body>
	<div class="project-layout page-8">

		<?php include("header.php"); ?>

		<div class="block-13 pt-4 pb-4">
			<div class="container">
			    <div class="row justify-content-center">
			        <div class="col-md-9 col-12 content">
			            <form action="#">
			            	<div class="inout d-flex">
			                    <span class="title w-25">件名（必須）</span>
			                    <div class="w-75">
			                    	<input type="radio" id="1" name="b-13" value="新築相談">
									<label for="1">新築相談</label><br>
  									<input type="radio" id="2" name="b-13" value="リフォーム相談">
									<label for="2">リフォーム相談</label><br>  
			                    </div>
			                </div>

			            	<div class="inout d-flex">
			                    <span class="title w-25">相談予約希望日 <br>（必須）</span>
			                    <div class="w-75">
			                    	第 1 希望日 <input type="text" class="text w-30 mb-1"> <br>
			                    	第 2 希望日 <input type="text" class="text w-30 mb-1"> <br>
			                    	第 3 希望日 <input type="text" class="text w-30 mb-1"> <br>
			                    </div>
			                </div>

			                <div class="inout center-vertical-nojustify">
			                    <span class="title w-25">お名前（必須）</span>
			                    <input type="text" class="text w-30">
			                </div>
			                <div class="inout center-vertical-nojustify">
			                    <span class="title w-25">E-mail（必須）</span>
			                    <input type="text" class="text w-50">
			                </div>
			                <div class="inout center-vertical-nojustify">
			                    <span class="title w-25">ご住所</span>
			                </div>
			                <div class="inout inout-child center-vertical-nojustify">
			                    <span class="title w-25">〒</span>
			                    <input type="text" class="text w-25">
			                </div>
			                <div class="inout inout-child center-vertical-nojustify">
			                    <span class="title w-25">都道府県</span>
			                    <input type="text" class="text w-75">
			                </div>
			                <div class="inout inout-child center-vertical-nojustify">
			                    <span class="title w-25">市区町村</span>
			                    <input type="text" class="text w-75">
			                </div>
			                <div class="inout inout-child center-vertical-nojustify">
			                    <span class="title w-25">丁目・番地</span>
			                    <input type="text" class="text w-75">
			                </div>
			                <div class="inout inout-child center-vertical-nojustify">
			                    <span class="title w-25">建物名</span>
			                    <input type="text" class="text w-75">
			                </div>


			                <div class="inout center-vertical-nojustify">
			                    <span class="title w-25">電話番号</span>
			                    <input type="text" class="text w-30">
			                </div>

			                <div class="inout center-vertical-nojustify">
			                    <span class="title w-25"></span>
			                    <div class="w-75">
			                    	<p>【サイトポリシー】</p>
			                    	<p>
			                    		当サイトは、お客様の個人情報について、お客様の承諾が無い限り第三者に開示、提供を一切致し<br>
			                    		ません。 お客様から個人情報をご提供して頂き、お客様へのサービスに利用させて頂く場合があり<br>
			                    		ます。 その目的以外には利用いたしません。 そして、ご提供頂いた個人情報を取り扱うにあたり管<br>
			                    		理責任者を置き、適切な管理を行っております。
			                    	</p>
			                    </div>
			                </div>

			                

			                <div class="inout center-vertical-nojustify mt-4">
			                    <span class="title w-25"></span>
			                    <input type="submit" value="送　信">
			                </div>
			            </form>
			        </div>
			    </div>
			</div>  
		</div>

		<?php include("footer.php"); ?>

	</div>
</body>

</html>