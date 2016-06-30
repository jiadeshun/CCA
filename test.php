<!DOCTYPE html> 
<html lang="en"> 
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Twitter Bootstrap Stacked or vertical Pills Based Navigation Example</title>
<meta name="description" content="Twitter Bootstrap Stacked or vertical Pills Based Navigation Example">
<style>
{margin:0;padding:0;border:none}
	.container{
			
			width:1100px;
			height:auto;
			background:#C80D3B;
			margin:0 auto;
			overflow:hidden;
			
					
		
		}
		
	body{
		font:14px/24px;
		font-family:Microsoft YaHei;
		text-align:left;
		color:#666;
		
		}
	.test {
			width:110px;
			height:100px;
			border-bottom:#C7181B 1px bold;
			padding-bottom:10px;
			margin:0 auto;
		
		}
		
	.test p{
			padding-left:50px;
			border-bottom:#DC0C0F 10px bold;
			color:#B52729;
		}

	.content{
		
		width:800px;
		height:400px;
		margin:0 auto;
		
		}
	.sidebar{
			
			width:375px;
			height:100px;
			float:left;
			border-bottom:1px solid #CCCCCC;
			float:left;
			
			}
	.rightContent{
		
		width:300px;
		height:100px;
		border-bottom:1px solid #CCCCCC;
		float:left;
		}
</style>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<!-- <script src="/js/jquery.min.js"></script> -->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="container">

  <div id="carousel1" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel1" data-slide-to="0" class="active"></li>
      <li data-target="#carousel1" data-slide-to="1"></li>
      <li data-target="#carousel1" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active"><img src="images/Carousel_Placeholder.png" alt="First slide image" class="center-block">
        <div class="carousel-caption">
          <h3>First slide Heading</h3>
          <p>First slide Caption</p>
        </div>
      </div>
      <div class="item"><img src="images/Carousel_Placeholder.png" alt="Second slide image" class="center-block">
        <div class="carousel-caption">
          <h3>Second slide Heading</h3>
          <p>Second slide Caption</p>
        </div>
      </div>
      <div class="item"><img src="images/Carousel_Placeholder.png" alt="Third slide image" class="center-block">
        <div class="carousel-caption">
          <h3>Third slide Heading</h3>
          <p>Third slide Caption</p>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>
    
    
</div>
<br>
<br>
<br>
<div class="content">
	<div class="sidebar">
    Left bar
    </div>
    <div class="rightContent">
    Content
    </div>
</div>


<div class="container-fluid">
	<div class="navbar-header">
    left
    </div>
	<div class="content">
    right
    </div>
</div>
<div class="col-sm-4">
zuobian
</div>
<div class="col-sm-3 col-sm-offset-4">
youbian
</div>
<br>
<pre><code>
var a =document.getElementByTagName('carousel');
</code></pre>
<code>
var a =document.getElementByTagName('carousel');
</code>
<script>
var a = document.getElementByTagName('body');
</script>

</body>
</html>