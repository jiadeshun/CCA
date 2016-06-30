<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>中国胸痛管理中心</title>


<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
<link href="css/myStyles.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-social.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js">
</script>
<!-- Latest compiled and minified CSS -->



</head>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="200">

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
    
    	<div class="navbar-header"> 
       		 <button type="button" class="navbar-toggle collapsed" data-toggle="dropdown" 
                   data-target="#navbar" aria-expanded="false" aria-controls="navbar" >
              <span class="sr-only">Toggole navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>       
          </button>
          <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="中国胸痛管理中心" height="40" width="200"></a>
            
        </div>
        
          <div id="navbar" class="navbar-collapse collapse">
           <!--   This ul is styled with nav and navbar-nav classes to specify that the items 
           should be displayed inline inside the navigation bar-->
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home         
                aria-hidden ="true></span> 主页</a></li>
                <li><a href="verify.php">认证</a></li>
                <li><a href="#">培训</a></li>
                <li><a href="contactus.php">质控</a></li>
                <li><a href="#">培训</a></li>
                <li><a href="#">拓展</a></li>
                <li><a href="#">下载区</a></li>
                <li><a href="#">互动交流</a></li>
                <li><a href="aboutus.php">关于我们</a></li>
            </ul>
            
            
            <ul class="nav navbar-nav navbar-right">
            	<li>
                	<a data-toggle="modal" data-target="#loginModal">
                    <span class="glyphicon glyphicon-log-in"></span> 登录
                    </a>
                </li>
            	
            </ul>
           </div>
           
           
           
           </div>
    </div>
</nav>
<div class="modal fade" id="loginModal" role="dialog">

 <div class="modal-dialog">
     <div class="modal-content">
         <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal">&times
            </button>
            <h4 class="modal-title">用户登录</h4>
        </div>
        <div class="modal-body">
        
            <form class="form-inline">
                <div class="form-group">
                    <label for="email" class="sr-only">登录账号</label>
                    <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                
                <div class="form-group">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" class="form-control" id="password" 
                    placeholder="Password">
                </div>
                
                <div class="checkbox">
                    <label style="color:#D1CECE"><input type="checkbox">记住我</label>
                    
                </div>
                
                <div class="form-group">
                <button class="btn btn-default btn-xs" type="submit">登录</button>
                <button class="btn btn-default btn-xs" data-dismiss="modal">取消</button>                    
                </div>

            
            </form>
        </div>
     
     
     </div>

  </div>
</div>
   

<header class="jumbotron">
  <div class="container">
  	<div class="row row-header">
    	<div class="col-xs-12 col-sm-7">
        	<h2>中国胸痛管理中心</h2>
            <p style="padding:20px">
            <p>中国胸痛管理中心官方网站是中国胸痛中心总部整体框架的重要组成部分，对于提高中国胸痛中心总部的宣传和专家意见的征求具有非常必要的作用。</p>
        </div>
        
        <div class="col-xs-12 col-sm-3">
        	<p style="padding:20px"></p>
        	<img src="img/logo.png" alt="中国胸痛管理中心" class="img-responsive">
        </div>
        
        <div class="col-xs-12 col-sm-2">
        	<p style="padding:40px"></p>
            <a href="registrationForm.php" type="button" class="btn btn-success">加入认证</a>
        </div>
    </div>
  </div>
</header>
<div class="container">
    <div class="row row-content">
        <div class="co-xs-12">
			 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
             			<!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  </ol>
                  		<!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="img/logo/ccpc (1).png" alt="...">
                      <div class="carousel-caption">
                        <h2>test1<span class="label label-danger">Hot</span> 
                        <span class="badge">$4.99</span>
                        </h2>
                        <p>A unique combination of Indian Uthappam (pancake) and
                          Italian pizza, topped with Cerignola olives, ripe vine
                          cherry tomatoes, Vidalia onion, Guntur chillies and
                          Buffalo Paneer.
                          </p>
                        <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                      </div>
                      
                    </div>
                    
                    <div class="item">
                      <img src="img/logo/ccpc (2).png" alt="...">
                      <div class="carousel-caption">
                        <h2>test2 <span class="label label-danger">Hot</span></h2>
                        <p>test info...</p>
                        <p><a href="" class="btn btn-primary btn-xs">More &raquo;</a></p>
                      </div>
                      
                      
                    </div>
                    <div class="item">
                      <img src="img/logo/ccpc (3).png" alt="...">
                      <div class="carousel-caption">
                        <h2>test3 <span class="label label-danger">Hot</span></h2>
                        <p>test info...</p>
                        <p><a href="" class="btn btn-primary btn-xs">More &raquo;</a></p>
                      </div>
                      
                      
                    </div>                    
                    ...
                  </div> 
                                    <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                  
                   <div class="btn-group" id="carouselButtons">
                        <button class="btn btn-danger btn-xs" id="carousel-pause">
                            <span class="glyphicon glyphicon-pause" aria-hidden="true"></span>
                        </button>
                        <button class="btn btn-danger btn-xs" id="carousel-play">
                            <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
                        </button>
                    </div>   
             </div>        
        </div>
    </div>
     <div class="cloud" align="center"> 
        <a href="http://data.cpccn.org" title="欢迎您访问中国胸痛中心数据管理云平台" 
        target="_blank"><img src="img/cloud.jpg" alt="">
        </a>        
     </div>
</div>

<footer class="footer" >
    <div class="container">
        <div align="center">
        
            <hr style="color:#000000">
             <img title="友情链接" alt="" src="img/friendLink.jpg">
            
                <a href="http://www.365heart.com/" target="_blank"> 
                    <img title="365心血管网" alt="" src="img/csc.jpg">
                </a>
           
                <a href="http://www.chhouse.org/" target="_blank"> 
                    <img title="中国心血管健康联盟" alt="" src="img/test.jpg">
                </a>
           
            <hr style="color:#000000">
    
            <div class="col-xs-12"> 
                <p align="center"> © Copyright 2016 中国胸痛管理中心 </p>      
            </div>
         
      </div>
    </div>
</footer>
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
	$("#mycarousel").carousel( { interval: 2000 } );
				  $("#carousel-pause").click(function(){
		$("#mycarousel").carousel('pause');
	});
				$("#carousel-play").click(function(){
		$("#mycarousel").carousel('cycle');
	});
});
</script>

     
</body>
</html>