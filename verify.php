<!doctype html>
<html>
<head>
 
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
<link href="css/myStyles.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-social.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">

<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js">
</script>
 
<title>认证</title>
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
		<a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="中国胸痛管理中心" height="31" width="41"></a>
        </div>
        
          <div id="navbar" class="navbar-collapse collapse">
           <!--   This ul is styled with nav and navbar-nav classes to specify that the items 
           should be displayed inline inside the navigation bar-->
       
       
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home         
                aria-hidden ="true></span> 主页</a></li>
                <li><a href="#verify.php">认证</a></li>
                <li><a href="#">培训</a></li>
                <li><a href="#">质控</a></li>
                <li><a href="#">培训</a></li>
                <li><a href="#">拓展</a></li>
                <li><a href="#">下载区</a></li>
                <li><a href="#">互动交流</a></li>
                <li><a href="aboutus.php"><span class="glyphicon glyphicon-info-sign"
                         aria-hidden="true"></span> 关于我们</a></li>
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
            <p style="padding:10px">
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


	<!--
    
    <div class="container">
    
    	<div class="row row-content">
            <div class="col-xs-12 col-sm-3">
            	<div class="btn-group-vertical ">
                    <button type="button" class="btn btn-success">综合管理</button>
                    <button type="button" class="btn btn-success">策划信息</button>
                    
                    <button type="button" class="btn btn-success">综合管理</button>
                    <button type="button" class="btn btn-success">策划信息</button>
                    
                    <button type="button" class="btn btn-success">综合管理</button>
                    <button type="button" class="btn btn-success">策划信息</button>
                    <button type="button" class="btn btn-success">综合管理</button>
                    <button type="button" class="btn btn-success">策划信息</button>
                    
                    
                    <button type="button" class="btn btn-success">财务信息</button>
                    <div class="btn-group-vertical">
                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">下拉菜单
                        <span class="caret"></span>
                        </button>
                        
                        <ul class="dropdown-menu">
                            <li><a href="#">下拉链接1</a></li>
                            <li><a href="#">下拉链接2</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-9">
            	<h3>当前位置</h3>
                <table>
                
                </table>
            
            </div>
        
        
        </div> 
    	

    
    </div>
    -->
    <div class="container">
    	<div class="row">
        	
                    <nav class="hidden-xs col-sm-2" id="myScrollspy">
                        <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="400">
                            <li><a href="#history">Our History</a></li>
                            <li><a href="#corporate">Corporate</a></li>
                            <li><a href="#facts">Facts</a></li>
                            <li><a href="#">左侧附加导航栏</a></li>
                            <li><a href="#">CAA</a></li>
                            <li><a href="#">Cardivascular</a></li>
                            <li><a href="#">左侧附加导航栏</a></li>
                            
                        </ul>
                    </nav>
                    <div class="col-sm-10 col-xs-12">
                    	
                            <div class="col-xs-12 col-sm-6 col-lg-8">
                            <ol class="breadcrumb">
                                <li><a href="index.php">主页</a></li>
                                <li class="active"><a href="contactus.php">认证</a></li>
                            </ol>
                               
                            </div>
                         
                        
                
                          <div id="history" class="row row-content">
                            <div class="col-sm-8 col-sm-offset-1">
                                <h2>Our History</h2>
                                <p>Started in 2010, Ristorante con Fusion quickly established itself 
                                as a culinary icon par excellence in Hong Kong. With its unique brand 
                                of world fusion cuisine that can be found nowhere else, it enjoys patronage 
                                from the A-list clientele in Hong Kong.  Featuring four of the best three-star
                                 Michelin chefs in the world, you never know what will arrive on your plate 
                                 the next time you visit us.</p>
                                <p>The restaurant traces its humble beginnings to 
                                <em>The Frying Pan</em>, a successful chain started by our CEO, 
                                Mr. Peter Pan, that featured for the first time the world's best 
                                cuisines in a pan.
                                </p>
                            </div>
                        
                        </div>
                        
                        <div id="corporate" class="row row-content">
                            <div class="col-sm-10 col-sm-offset-1">
                                 <div class="col-xs-12">
                                    <h2>Corporate Leadership</h2>
                                    	 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            
                                             <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingPeter">
                                                    <h3 class="panel-title">
                                                        <a role="button" data-toggle="collapse"
                                                             data-parent="#accordion" href="#peter"
                                                             aria-expanded="true" aria-controls="peter">
                                                            Peter Pan <small>Chief Epicurious Officer</small></a>
                                                    </h3>
                                                </div>
                                                <div role="tabpanel" class="panel-collapse collapse in"
                                                     id="peter"    aria-labelledby="headingPeter">
                                                    <div class="panel-body">
                                                         <p>Our CEO, Peter, credits his hardworking East 
                                                         Asian immigrant parents who undertook the arduous journey 
                                                         to the shores of America with the intention of giving their
                                                          children the best future. His mother's wizardy in the kitchen
                                                           whipping up the tastiest dishes with whatever is available
                                                            inexpensively at the supermarket, was his first inspiration to
                                                             create the fusion cuisines for which <em>The Frying Pan</em> 
                                                             became well known. He brings his zeal for fusion cuisines to 
                                                             this restaurant, pioneering cross-cultural culinary
                                                              connections.
                                                         </p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingDanny">
                                                    <h3 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse"
                                                             data-parent="#accordion" href="#danny"
                                                             aria-expanded="false" aria-controls="danny">
                                                            Dhanasekaran Witherspoon <small>Chief Food Officer</small></a>
                                                    </h3>
                                                </div>
                                                <div role="tabpanel" class="panel-collapse collapse"
                                                     id="danny"    aria-labelledby="headingDanny">
                                                    <div class="panel-body">
                                                         <p>Our CFO, Danny, as he is affectionately referred to by his
                                                          colleagues, comes from a long established family tradition in
                                                           farming and produce. His experiences growing up on a farm in
                                                            the Australian outback gave him great appreciation for
                                                             varieties of food sources. As he puts it in his own words,
                                                              <em>Everything that runs, wins, and everything that stays, 
                                                              pays!</em>
                                                         </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingAgumbe">
                                                    <h3 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse"
                                                             data-parent="#accordion" href="#agumbe"
                                                             aria-expanded="false" aria-controls="agumbe">
                                                            Agumbe Tang <small>Chief Taste Officer</small></a>
                                                    </h3>
                                                </div>
                                                <div role="tabpanel" class="panel-collapse collapse"
                                                     id="agumbe"    aria-labelledby="headingAgumbe">
                                                    <div class="panel-body">
                                                        <p>Blessed with the most discerning gustatory sense, Agumbe, 
                                                        our CFO, personally ensures that every dish that we serve meets
                                                         his exacting tastes. Our chefs dread the tongue lashing that
                                                          ensues if their dish does not meet his exacting standards.
                                                           He lives by his motto, <em>You click only if you survive my 
                                                           lick.</em>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingAlberto">
                                                    <h3 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse"
                                                             data-parent="#accordion" href="#alberto"
                                                             aria-expanded="false" aria-controls="alberto">
                                                            Alberto Somayya <small>Executive Chef</small></a>
                                                    </h3>
                                                </div>
                                                <div role="tabpanel" class="panel-collapse collapse"
                                                     id="alberto"    aria-labelledby="headingAlberto">
                                                    <div class="panel-body">
                                                        <p>Award winning three-star Michelin chef with wide 
                                                        International experience having worked closely with 
                                                        whos-who in the culinary world, he specializes in creating 
                                                        mouthwatering Indo-Italian fusion experiences. He says, 
                                                        <em>Put together the cuisines from the two craziest cultures, 
                                                        and you get a winning hit! Amma Mia!</em>
                                                        </p>
                                                  
                                                	</div>
                                                </div>
                                        </div>
                                  </div>
                            </div>
                        </div>  
                   </div>  
                      <div id="facts" class="row row-content">
                                <div class="col-xs-12 col-sm-7">
                                    <h2>Facts &amp; Figures</h2>
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <th>2013</th>
                                                    <th>2014</th>
                                                    <th>2015</th>
                                                </tr>
                                                 <tr>
                                                    <th>Employees</th>
                                                    <td>15</td>
                                                    <td>30</td>
                                                    <td>40</td>
                                                </tr>
                                                <tr>
                                                    <th>Guests Served</th>
                                                    <td>15000</td>
                                                    <td>45000</td>
                                                    <td>100,000</td>
                                                </tr>
                                                <tr>
                                                    <th>Special Events</th>
                                                    <td>3</td>
                                                    <td>20</td>
                                                    <td>45</td>
                                                </tr>
                                                <tr>
                                                    <th>Annual Turnover</th>
                                                    <td>$251,325</td>
                                                    <td>$1,250,375</td>
                                                    <td>~$3,000,000</td>
                                                </tr>
                                            </table>
                                        </div>
                                        
                                        <div class="well">
                                            <blockquote>
                                                <p>You better cut the pizza in four pieces because
                                                    I'm not hungry enough to eat six.</p>
                                                    <footer>Yogi Berra,
                                                  <cite>The Wit and Wisdom of Yogi Berra,
                                                    P. Pepe, Diversion Books, 2014</cite>
                                                </footer>
                                            </blockquote>                    
                                        </div>
                                </div>
                                 <div class="col-xs-12 col-sm-5">
                                    <p style="padding:20px;"></p>
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Facts At a Glance</h3>
                                        </div>
                                        
                                        <div class="panel-body">
                                            <div class="dl-horizontal">
                                                <dt>Started</dt>
                                                <dd>3 Feb. 2013</dd>
                                                <dt>Major stakeholders</dt>
                                                <dd>HK Fine Foods Inc.</dd>
                                                <dt>Last year's turnover</dt>
                                                <dd>$1,250,375</dd>
                                                <dt>Employees</dt>
                                                <dd>40</dd>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-xs-12 col-sm-4">
                                    
                                </div>
                           </div>             
       </div>
       						
                    
</div>
</div>
    
    
  
	 
     <footer class="footer">
     
      	<div class="container">
        	
            	<div class="row" align="center">
            
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

</body>
</html>