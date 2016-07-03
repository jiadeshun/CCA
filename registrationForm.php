<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>中国胸痛管理中心</title>


<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="js/md5.min.js">
</script>

   
</head>

<body>

<?php
$emailErr = $pssdERR ="";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	if(empty($_POST["input-password"])){
		
		;
		
		}
	
	}
?>
<div class="container" style="padding:50px; width:70%">
    <div class="row">
        <form action="app/register.php" class="form-horizontal" role="form" method="post" name="login-form" onSubmit="return checkForm()">
            <div class="form-group">
            	<div class="col-sm-2">
                	<label for="orgName">机构名称</label>
                </div>
                
                <div class="col-sm-4">
                	<input type="text" class="form-control" name="orgName" id="orgName" placeholder="请输入所在医疗机构名称">
                </div>
            </div>    
            <div class="form-group">
            	<div class="col-sm-2">
                	<label for="province">省份</label>
                    
                </div>
                <div class="col-sm-4">
                	<select id ="province" name="province">
                    <option value="-1" selected>-省份-</option>
                    <option value="JS">江苏</option>
                    <option value="HB">河北</option>
                    <option value="BJ">北京</option>
                    <option value="SH">上海</option>
                    <!-- supplement all provinces in China -->
                    
                    
                    </select>
                </div>
                
         <!--       <div class="col-sm-6 dropdown">
                	<button type="button" id="province" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    省份
                    </button>
                    <span class="caret"></span>
                    <ul class="dropdown-menu">
                    	<li>河北省</li>
                        <li>江苏省</li>
                        
                    </ul>
                </div> -->
                
            </div>   
            <div class="form-group">
            	<div class="col-sm-2">
                	<label for="city">城市</label>
                </div>
                
                 <div class="col-sm-4">
                	<select id ="city" name="city">
                    <option value="-1" selected>-城市-</option>
                    <option value="New Delhi">NEW DELHI</option>
                    <option value="Mumbai">MUMBAI</option>
                    <option value="Goa">GOA</option>
                    <option value="Bihar">BIHAR</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
            	<div class="col-sm-2">
                	<label for="artificialPersonName">法人</label>
                </div>
                
                <div class="col-sm-4">
                	<input type="text" class="form-control" name="artificialPersonName" id="artificialPersonName" placeholder="请输入法人">
                </div>
            </div> 
            <div class="form-group">
            	<div class="col-sm-2">
                	<label for="orgLevel">等级</label>
                </div>
                
                <div class="col-sm-4">
                	<input type="text" class="form-control" name="orgLevel" id="orgLevel" placeholder="请输入所在医疗机构名称等级">
                </div>
            </div>
            <div class="form-group">
            	<div class="col-sm-2">
                	<label for="appliedDate">申请时间</label>
                </div>
                
                <div class="col-sm-4">
                	<input type="date" class="form-control" name="appliedDate" id="appliedDate" placeholder="请输入申请时间">
                </div>
            </div>
            <div class="form-group">
            	<div class="col-sm-2">
                	<label for="runDuration">疼痛中心试运行时间</label>
                </div>
                
                <div class="col-sm-4">
                	<input type="text" class="form-control" name="runDuration" id="runDuration" placeholder="请输入试运行时间">
                </div>
            </div>
            <div class="form-group">
            	<div class="col-sm-2">
                	<label for="respPerson">认证负责人</label>
                </div>
                
                <div class="col-sm-4">
                	<input type="text" class="form-control" name="respPerson" id="respPerson" placeholder="请输入所在医疗机构认证负责人">
                </div>
            </div>
            <div class="form-group">
            	<div class="col-sm-2">
                	<label for="respTitle">认证负责人职务</label>
                </div>
                
                <div class="col-sm-4">
                	<input type="text" class="form-control" name="respTitle" id="respTitle" placeholder="请输入认证负责人职务">
                </div>
            </div>
            <div class="form-group">
            	<div class="col-sm-2">
                	<label for="contPhone">联系电话</label>
                </div>
                
                <div class="col-sm-4">
                	<input type="text" class="form-control" name="contPhone" id="contPhone" placeholder="请输入联系电话">
                </div>
            </div>
            <div class="form-group">
            	<div class="col-sm-2">
                	<label for="respEmail">认证负责人邮箱</label>
                </div>
                
                <div class="col-sm-4">
                	<input type="email" class="form-control" name="respEmail" id="respEmail" placeholder="请输入负责人邮箱">
                </div>
            </div>
            <div class="form-group">
            	<div class="col-sm-2">
                	<label for="contPersonName">联络员姓名</label>
                </div>
                
                <div class="col-sm-4">
                	<input type="text" class="form-control" name="contPersonName" id="contPersonName" placeholder="请输入联络员姓名">
                </div>
            </div>
            
            <hr>   
            <div class="form-group">
            	<div class="col-sm-2">
                	<label for="contTitle">联络员职务</label>
                </div>
                
                <div class="col-sm-4">
                	<input type="text" class="form-control" name="contTitle" id="contTitle" placeholder="请输入联络员职务">
                </div>
            </div>
            <div class="form-group">
            	<div class="col-sm-2">
                	<label for="email">邮箱</label>
                </div>
                
                <div class="col-sm-4">
                	<input type="email" class="form-control" name="email" id="email" placeholder="请输入邮箱">
                </div>
            </div>
             <div class="form-group">
            	<div class="col-sm-2">
                	<label for="contPhone">手机</label>
                </div>
                
                <div class="col-sm-4">
                	<input type="text" class="form-control" name="contPhone" id="contPhone" placeholder="请输入手机号">
                </div>
            </div>
            <div class="form-group">
            	<div class="col-sm-2">
                	<label for="account">登录账号名称</label>
                </div>
                
                <div class="col-sm-4">
                	<input type="text" class="form-control" name="account" id="account" placeholder="请输入账号名">
                </div>
            </div>
             <div class="form-group">
            	<div class="col-sm-2">
                	<label for="input-password">密码</label>
                </div>
                
                <div class="col-sm-4">
                	<input type="password" class="form-control" id="input-password" placeholder="请输入密码">
                    <input type="hidden" name="md5-password" id="md5-password">
                </div>
            </div>
            <div class="form-group">
            	<div class="col-sm-2">
                	<label for="input-password-confirm">确认密码</label>
                </div>
                
                <div class="col-sm-4">
                	<input type="password" class="form-control" name="input-password-confirm" id="input-password-confirm" placeholder="请再次输入密码">
                </div>
            </div> 
            <div class="form-group" style="margin-left:100px">
            	<input type="checkbox">我已认真阅读并同意 <a href="#" style="color:blue">使用条款和隐私政策</a>
                
               
            </div>
            
            <div class="form-group" style="margin-left:170px">
            	 <button type="submit" class="btn btn-twitter">提交</button>
                 
            </div>
            
                                          
        
        </form>
    </div>


    

</div> 
<script>
	'user strict'
    	function checkForm(){
			
			var input_pwd = document.getElementById('input-password');
			var md5_pwd = document.getElementById('md5-password');
			
			var input_pwd_confirm = document.getElementById('input-password-comfirm');
			var repEmail = document.getElementById('repEmail');
			var email = document.getElementById('email');
			var regPwd = /^[a-zA-Z]\w{3,14}$/;
			var regEmail = /^(\w+\.?\w+)(\@\w+\.\w+)$/;
			
			
			
			//turn input-password to md5
			md5_pwd.value = md5(input_pwd.value);
			alert( md5_pwd.value);
			
			if(!regPwd.test(input_pwd.value)) {
				
				error.innerText = "密码为3-14位字符或者数字，首字母非数字";
				alert ("Illegal password! Must btw 6-10 characters.");
				return false;
				}
			
			
			if(input_pwd.value !== input_pwd_confirm.value) {
				
				alert( "Passwords are not matched!");
				return false;
				
				}
			if( !(regEmail.test(regEmail) || regEmail.test(email)) ) {
				
				alert("Ilegal email account!");
				return false;
				}
			
			
			
			return true;
			
			}

</script>
	<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>
