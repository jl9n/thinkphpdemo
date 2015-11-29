<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
  <head>
    <title>北航-索尔直属学习中心</title>
    <meta charset="UTF-8">
    <!-- cssreset -->
    <link rel="stylesheet" href="Public/css/cssreset-min.css">
    <!-- global -->
    <link rel="stylesheet" href="Public/css/global.css">
    <!-- main -->
    <link rel="stylesheet" href="Public/css/main.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="Public/js/jquery-1.10.2.min.js"></script>
	<link rel="Stylesheet" type="text/css" href="Public/home/7d.css" />
	 
  </head>
  <body>
  <!-- wrapper start-->
  <div class="wrapper">
  			<header>
  			<div class="head1">
  				<div class="logo pull-left"><img src="__PUBLIC__/img/logo.png" /></div>
  				<div class="mark pull-left"><img src="__PUBLIC__/img/mark.png" /></div>
  				<div class="tel pull-right"><img src="__PUBLIC__/img/tel.png" /></div>
  			</div>
  			<nav>
  				<div class="nav-list">
  					<ul class="nav-mian">
	  					<li class="on-nav"><a href="#">网站首页</a></li>
	  					<li><a href="<?php echo U('home://Index/about');?>">中心介绍</a></li>
	  					<li><a href="#">招生专区</a></li>
	  					<li><a href="#">教务考务</a></li>
	  					<li><a href="<?php echo U('home://Index/registration');?>">在线报名</a></li>
	  					<li><a href="#">学生专区</a></li>
	  					<li><a href="#">下载专区</a></li>
	  					<li><a href="<?php echo U('home://Index/contact');?>">联系我们</a></li>
	  				</ul>
  				</div>
  			</nav>
  		</header>
  		<div class="banner">
  			<div class="banner-img"><img src="Public/img/banner.jpg" /></div>
  		</div>
  		<div class="main">
  			<div class="m-box1">
  				<img src="Public/img/zytj1.jpg" />
  				<img src="Public/img/zytj2.jpg" />
  				<img src="Public/img/zytj3.jpg" />
  				<img src="Public/img/tel1.jpg" />
  			</div>
  			<div class="m-box2">
  				<img src="Public/img/why1.jpg" />
  				<img src="Public/img/why2.jpg" />
  				<img src="Public/img/why3.jpg" />
  			</div>
  			<div class="m-box3">
  				<img src="Public/img/qa1.jpg" />
  				<img src="Public/img/qa2.jpg" />
  				<img src="Public/img/qa3.jpg" />
  				<div class="qa-from">
				
  					<input class="name" type="text" name="name" id="tt_name" placeholder="请输入您的姓名.." >
					  <input class="tel" type="text" name="tel" id="tel_st" placeholder="请输入您的电话号码.." >
  					<input class="qa" type="text" name="ga" id="ga_st" placeholder="请输入您的问题.." >
  					<input class="button" type="button" id="button_st" value="提交">
  				
				</div>
  			</div>
				<script>
					$(function(){
					
					
						$("#button_st").click(function(){
							if($("#tt_name").val()==""){
								alert('请输入您的姓名');
								return false;
							}
							
							if($("#tel_st").val()==""){
								alert('请输入您的电话号码');
								//alert(document.getElementById('#tel_st').val());
								return false;
							}
							
							if($("#ga_st").val()==""){
							
								alert('请输入您的问题');
								
								return false;
							}
							
							var num = document.getElementById('tel_st').value;
							
							var partten = /^1[3,5]\d{9}$/;
							if(partten.test(num)){
							//alert('是手机号码');
							}else{
							alert('不是手机号码');
							return false;
							}
							
							
							$.ajax({
								url:'__APP__/Index/upload',
								type:'post',
								data:'name='+$("#tt_name").val()+'&tel='+$("#tel_st").val()+'&gu='+$("#ga_st").val()+'&demo='+$("#ga_st").val(),
								
								success:function(msg){
									if(msg==1){
										alert('提交成功');
										return false;
									}
									if(msg==0){
										alert('提交失败');
									
									}
								
								}
								
							})
						})
					})
			</script>
  			<div class="m-box4">
  				<img src="Public/img/tsfs1.jpg" />
  				<img src="Public/img/tsfs2.jpg" />
  			</div>
  			<div class="m-box5">
  				<img src="Public/img/ys1.jpg" />
  				<img src="Public/img/ys2.jpg" />
  				<img src="Public/img/tel2.jpg" />
  			</div>
  			<div class="m-box6">
  				<img src="Public/img/pw1.jpg" />
  				<img src="Public/img/pw2.jpg" />
  				<img src="Public/img/pw3.jpg" />
  				<img src="Public/img/tel2.jpg" />
  			</div>
  			<div class="m-box6">
  				<img src="Public/img/zd1.jpg" />
  				<img src="Public/img/zd2.jpg" />
          <div class="ksybm">
            <ul class="ksybm-from">
              <li><input class="ybm-name" type="text" id="two_name" placeholder="姓名.." ></li>
              <li><input class="ybm-tel" type="text" id="two_tel" placeholder="电话.." ></li>
			 
              <li>
                  <select class="ybm-cc" name="two_sel" id="selone">
                    <option value="0">请选择报名层次</option>
                    <option value="高起专">高起专</option>
					<option value="专升本">专升本</option>
                  </select>
              </li>
              <li>
				<span id="seltwo">
                  <select name="two-ceng" id="two-ceng">
                   
                  </select>
				  </span>
              </li>
			 
              <li><input class="ybm-button" type="button" value="提交" id="button_ybm"></li>
            </ul>
          </div>
		  <script type="text/javascript">
		var namecity=document.getElementById("selone");
		var namequ=document.getElementById("seltwo");
		namecity.onchange=function(){
		if(namecity.value=="高起专"){
		namequ.innerHTML="<select id='two-ceng'><option value='计算机科学与技术'>计算机科学与技术</option><option value='计算机科学与技术(动漫设计)'>计算机科学与技术(动漫设计)</option><option value='国际经济与贸易'>国际经济与贸易</option><option value='工商管理'>工商管理</option><option value='经济学(经济管理)'>经济学(经济管理)</option><option value='经济学(项目管理)'>经济学(项目管理)</option><option value='行政管理'>行政管理</option><option value='会计学'>会计学</option><option value='法学'>法学</option><option value='土木工程'>土木工程</option><option value='交通运输(民航管理工程)'>交通运输(民航管理工程)</option><option value='物流管理'>物流管理</option><option value='机械设计制造及其自动化'>机械设计制造及其自动化</option><option value='械工程及自动化(机电一体化)'>机械工程及自动化(机电一体化)</option><option>人力资源管理</option><option value='电气工程及其自动化'>电气工程及其自动化</option><option value='教育管理(教育学)'>教育管理(教育学)</option><option>航空服务</option><option value='金融学'>金融学</option><option value='市场营销'>市场营销</option></select>";//select和option 是一体的，如果直接在select中写入option是不行的，所以加上了一个span标签
		}
		else if(namecity.value=="专升本"){
		namequ.innerHTML="<select id='two-ceng'><option value='计算机科学与技术'>计算机科学与技术</option><option value='计算机科学与技术（动漫设计）'>计算机科学与技术(动漫设计)</option><option value='工商管理'>工商管理</option><option value='国际经济与贸易'>国际经济与贸易</option><option value='经济学(经济管理)'>经济学(经济管理)</option><option value='经济学(项目管理)'>经济学(项目管理)</option><option value='行政管理'>行政管理</option><option value='会计学'>会计学</option><option value='法学'>法学</option><option value='土木工程'>土木工程</option><option value='交通运输(民航管理工程)'>交通运输(民航管理工程)</option><option value='物流管理'>物流管理</option><option value='机械设计制造及其自动化'>机械设计制造及其自动化</option><option value='机械工程及自动化(机电一体化)'>机械工程及自动化(机电一体化)</option><option value='人力资源管理'>人力资源管理</option><option value='电气工程及其自动化'>电气工程及其自动化</option><option value='教育管理(教育学)'>教育管理(教育学)</option><option value='航空服务'>航空服务</option><option value='金融学'>金融学</option><option value='市场营销'>市场营销</option></select>";
		}
	
		else{alert("选中值属性不对");}
		}
		</script>
		  <script>
					$(function(){
						
						
					
						$("#button_ybm").click(function(){
							if($("#two_name").val()==""){
								alert('请输入您的姓名');
								return false;
							}
							
							if($("#two_tel").val()==""){
								alert('请输入您的电话号码');
								return false;
							}			
							
							var spr=document.getElementById('two_tel').value;
							
							var pattern=/^1[3,5]\d{9}$/;
							
							if(pattern.test(spr)){
								
							
							}else{
								alert('不是手机号码');
								return false;
							}
						

							$.ajax({
								url:'__APP__/Index/t_upload',
								type:'post',
								data:'name='+$("#two_name").val()+'&tel='+$("#two_tel").val()+'&zhuanye='+$("select option:selected").val()+'&ceng='+$("#two-ceng option:selected").val(),
								
								success:function(msg){
									if(msg==1){
										alert('提交成功');
										return false;
									}
									if(msg==0){
										alert('提交失败');
									
									}
								
								}
								
							})
						})
					})
			</script>
			<script language="javascript" src="http://ccicxa1.smart400.com:80/interface/gcs.jsp?uid=1006833&st=7&basePath=http://ccicxa1.smart400.com:80&iw=256&dyn=true&taskid="></script>

  				<img src="Public/img/tel2.jpg" />
  			</div>
  			<div class="m-box7">
          <img src="Public/img/yxfc.jpg" />
  			</div>
        <div class="m-box8">
          <img class="pull-left" src="Public/img/dz1.jpg" />
          <img class="pull-right"  src="Public/img/dz2.jpg" />
        </div>
  		</div>
		<div id="tag-suggest-pop" style="display: block;">
  <div class="relative">
    <div class="close"></div>
    <div class="content">
      <div style="white-space:nowrap;"><span>嗨，小伙伴们，看了这么多家，分不清到底哪家更</span><span class="ffzz_s">靠谱</span><span>了吧？</span>
      <a href="#" style="color:white;font-weight:bold;width:400px;overflow:hidden;">快点这里，我告诉你区别在哪里！</a></div>
      <div style="clear:both;"></div>
      <div style="height:10px;width:10px;"></div>
	 
      <input type="text" placeholder="请输入您的姓名" class="text-w" id="d_name"><span style="display:block;width:20px;"></span><input type="text" placeholder="请输入您的联系方式" class="mlse-text" id="d_lianxi"><span style="display:block;width:20px;"></span><input type="button" id="button_d_bottom" value="点击报名" style="width:100px;height:34px;background:chartreuse;color:white;border-radius:6px;border-bottom-color:chartreuse;border-left-color:chartreuse;border-right-color:chartreuse;border-top-color:chartreuse;">

	</div>
  </div>
</div>
<script>
					$(function(){
					
					
						$("#button_d_bottom").click(function(){
							if($("#d_name").val()==""){
								alert('请输入您的姓名');
								return false;
							}
							
							if($("#d_lianxi").val()==""){
								alert('请输入您的电话号码');
								//alert(document.getElementById('#tel_st').val());
								return false;
							}
							
							
							
							var num = document.getElementById('d_lianxi').value;
							
							var partten = /^1[3,5]\d{9}$/;
							if(partten.test(num)){
							//alert('是手机号码');
							}else{
							alert('不是手机号码');
							return false;
							}
							
							
							$.ajax({
								url:'__APP__/Index/d_upload',
								type:'post',
								data:'name='+$("#d_name").val()+'&tel='+$("#d_lianxi").val(),
								
								success:function(msg){
									if(msg==1){
										alert('提交成功');
										return false;
									}
									if(msg==0){
										alert('提交失败');
									
									}
								
								}
								
							})
						})
					})
			</script>

  		<footer>
        <div class="f-box1"><p>Copyright <span>©</span> 2014 北京航空航天大学 All rights reserved</p></div>
      </footer>
  </div>
  <!-- wrapper end -->
  </body>
</html>