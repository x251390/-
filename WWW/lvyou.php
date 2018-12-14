<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>旅游</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<script src="js/jquery-3.3.1.js" type="text/javascript" charset="utf-8"></script>

		<script src="js/bootstrap.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/echarts.js" type="text/javascript"></script>
		<style>
			
				body {  overflow-x: hidden; overflow-y: auto;
						 }
			             .quan{
			      	 overflow-x: hidden;
			      	 height:100%;
			      }
           .xian{
        	display:none!important;
        }
			.header a{
		    	color:#737272;
		    }
			.col-md-6,.col-md-8,.col-md-9{
				padding: 0;
				margin: 0;
			}
			
				*{
				padding:0;
				margin:0;
			}
		   .header{
		   	padding:0!important;	
		   	position:relative
		   }
		   .header .logo{
		      background: url(img/logo.png) no-repeat 0px 4px;
			    width: 20px;
			    height: 25px;
			    padding-top: 2px;
			    margin-right:20px;
		   }
		   
		
		   
		    .header .header1{
                 position: fixed;
                 width:100%;
                
		    	display: flex;
		    	flex-direction: row;
		    	align-items: center;
		    	padding:15px 15px 3px 38px;
		    	z-index: 55;
		    	
		    }
		  
		    .pull-right{
		    	border:3px solid #e5e5e5;
		    	padding:10px 37px;
		    	border-radius: 5px;
		    	
		    }
		    .header ul{
		    	 position: absolute;
		    	 z-index: 55;
		    	 left: 12%;
		    	 right: 12%;
		    	 border:1px solid #fff;
		    	 top:490px;
		    	 color:#fff;
		    	 width:76%;
		    }
		    .header .left1,.header .right1{
		    	display: block;
		    	padding-top: 17px;
		    	padding-bottom: 45px;
		    	font-size: 22px;
		    	
		    	
		    }
		    .header li.pull-left,.header li.pull-right{
		    	width: 50%;
		    	border-style: none;
		    	padding-top: 35px;
		    	padding-left: 45px;
		    	padding-bottom: 0;
		    	padding-right: 0;
		    	float: left;
		    	
		    }
		     .header li.pull-left{
		     border-right: 1px solid #fff;
		     	
		     }
		     .header ul li .jian{
		     	background: url(img/baijian.png) no-repeat 0 10px;
		     	height:35px;
		     	
		     	width:25px;
		     	float: right;
		     	
		     }
		      .header .yi{
		    	width:58%;
		    	display: inline;
		    	text-align: center;
		    	font-size: 18px;
		    	padding:0 35px;
		    }
		     .header .yi .active{
		    	font-size: 22px;
		    	color: #0a78d6!important;
		    }
		    .header .bottom{
		    	position: absolute;
		    	top:35%;
		    	left:50%;
		    	margin-left: -27px;
		    	
		    }
		    
		    .header #menu3{
        	opacity: 0.5;
        	position: absolute;
        	top:20px;
        	left:-77px;
        	font-size: 30px;
        	padding-top: 35px;
        	padding-left: 120px;
        	
        }
        .header #menu3 a{
        	line-height: 64px;
        }
		    
		    
		    
		     .content2{
        	text-align: center;
        	font-size: 18px;
        		color:#727273;
        		margin-bottom: 75px;
        }
        .content2 span{
        	font-size: 32px;
        margin-bottom: 30px;
        	display: block;
        	line-height: 25px;
        	margin-top: 45px;
        }
        
		   form div{
		   	font-weight: bolder;
		   	margin-bottom: 20px;
		   } 
		   form label{
		   	font-weight: normal;
		   }
		   form span{
		   	margin-left: 10px;
		   	display: inline-block;
		   }
		    
		   .content .zhuan{
		   	color:#5cafe7;
		   	font-weight: bold;
		   } 
		   .content .fu{
		   	font-size: 32px;
		   	padding-top: 20px;
		   	padding-bottom: 25px;
		   	border-bottom: 2px dashed #a6a6a6;
		   	margin-bottom: 15px;
		   }
		   .content .jie{
		   		font-size: 16px;
		   		padding-left: 10px;
		   }
		    .content .yi{
		    	color: #747474;
		    	padding-left: 15px;
		    	padding-right: 30px;
		    }
		    .content .pull-right{
		    	padding-right: 10px;
		    	padding-left: 10px;
		    }
		    .content .tu{
		    	margin-top: 15px;
		    	
		    }
		    .content .tu li{
		    	width:33%;
		    
		    }
		    .content .tu li .xian1 div{
		    	padding-left: 13px;
		    	padding-bottom: 3px;
		    	color: #adadad;
		    }
		     .content .tu li .xian1{
		     	width:100%;
		     	border-radius: 5px;
		     	border:#ebeaea solid 1px;
		     		box-shadow: 0 5px 5px #aeacac;
		     	margin-bottom: 15px;
		     	
		     }
		 .content .tu li .xian1 .xing{
		 	width:100%;
		 	margin-bottom:15px;
		 }
		  .content .tu li .xian1 .dong {
		  	color:#545353;
		  	font-size: 16px;
		  
		  }
		        
		        
		        
		        
		        
		        .footer{
		      margin:0 auto!important;
		    margin-top: 115px;
		    	display: flex;
		    	flex-direction: column;
		    	align-items: center;
		    	text-align: center;
		    	color:#555454;
		    	
		    }
		      .footer .si{
		      	display: inline-block;
		      	height:105px;
		      
		      	font-size: 12px;
		      	width:65px;
		      	padding-top: 80px;
		      }
		      .footer .yao{
		      	font-size: 50px;
		    
		      }
		      .footer .ru{
		      	width:42%;
		      	margin-top: 15px;
		      	line-height: 20px;
		      	letter-spacing: 2px;
		      	margin-bottom: 68px;
		      }
		      .footer .kai{
		      font-size: 32px;
			    padding: 25px 50px;
			    padding-right: 75px;
			    border: 3px solid #dbd9d9;
			    background: url(img/jian.png) no-repeat 270px;
			    background-size: 25px 15px;
			    margin-bottom: 250px;
		      }
		      .footer1{
		       	width:75%;
		       	margin: 0 auto;
		       	display: flex;
		       	flex-direction: column;
		       	align-items: center;
		       	background: url(img/xuehua1.png) no-repeat;
		       }
		       .footer1 .da{
		       	display: block;
		       	background: url(img/da.png) no-repeat;
		       	width: 95px;
		       	height: 80px;
		       }
		       .footer1 ul li{
		       	width:33%;
		       	height:120px;
		       	line-height: 120px;
		       	text-align: center;
		       	border-left:3px solid #dcdcdc;
		       	box-sizing: border-box;
		       	font-size: 16px;
		       	
		       }
		       .footer1 ul{
		       	border-right:3px solid #dcdcdc ;
		       	border-top: 3px solid #dcdcdc;
		       	border-bottom: 3px solid #dcdcdc;
		       	width: 75%;
		       	margin-top: 34px;
		       	margin-bottom: 140px;
		       	
		       
		       }
		       .footer1 img{
		       	padding-right: 20px;
		       }
		        .xian{
        	display:none!important;
        }
		</style>
		
		
	</head>
	<body>
		<div class="quan">
		<div class="header  container-fluid clearfix">
		
		
		<div class="header1">
			<span class="pull-left logo"></span>
			<span class="pull-left">
				<div  class="dropdown">
        <a id="drop6" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 				aria-expanded="false">
       导航
         
        </a>
         <?php include('public/left.php');?>
      </div></span>
			<div class="yi center-block">
				<span  class="yi center-block "><a href="family.php" >家庭</a></span>
				<span  class="yi center-block "><a href="fuzhuang.php" >服装</a></span>
				<span  class="yi center-block"><a href="zhuanjiajianyi.php">专家建议</a></span>
				<span  class="yi center-block"><a href="luying.php">露营</a></span>
				<span  class="yi center-block"><a href="#" class="active">旅行</a></span>
			</div>
			
			
		
			<span class="pull-right"><a href="">联系我们</a></span>
		</div>
		
		
		
		<img src="img/专家建议-旅游_03.jpg" class="bei img-responsive"/>
	<div class="content2">
		<span>旅行指南</span>
	看一看<br />
让你有意想不到的收获<br />
捕捉最酷炫的旅行吧！
		
	</div>
	
	
	
	
	</div>
	
	<div class="content">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-1">
				<form action="" method="get">
					<div>文章指南</div>
					<label>
						<input type="radio" /><span>技能</span><br />
						</label>
						<label>
						<input type="radio" /><span>购买指南</span><br />
						</label>
						<label>
						<input type="radio" /><span>清单</span>
					</label>
				</form>
				
			</div>
				<div class="col-md-8 clearfix">
					<div class="zhuan">专家建议</div>
					<div class="fu">旅行文章<span class="jie">(18条结果)</span></div>
					<div class="clearfix">
					<div class="pull-right">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"  					aria-expanded="false">排序方式:<span class="yi">相关性</span> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </div>
					</div>
					<!--第一个-->
					<ul class="list-inline list-unstyled tu">
						<li>
							<div class="xian1">
							<img class="xing" src="img/专家建议-旅游_07.jpg" alt="" />
							<div>技能</div>
							<div class="dong">营地厨房清单</div>
							<div><img  src="img/si.jpg" alt="" /></div>
						</div>	
						</li>
						<li>
							<div class="xian1">
							<img class="xing" src="img/专家建议-旅游_09.jpg" alt="" />
							<div>技能</div>
							<div class="dong">旅行清单</div>
							<div><img  src="img/si.jpg" alt=""/> </div>
						</div>	
						</li>
					<li>
						<div class="xian1">
							<img class="xing" src="img/专家建议-旅游_11.jpg" alt="" />
							<div>技能</div>
							<div class="dong">如何选择适配充电器</div>
							<div><img  src="img/wu.jpg" alt="" /></div>
						</div>	
						</li>
					</ul>
					<!--第二个-->
					<ul class="list-inline list-unstyled tu">
						<li>
							<div class="xian1">
							<img class="xing" src="img/专家建议-旅游_16.jpg" alt="" />
							<div>技能</div>
							<div class="dong">遇上露营</div>
							<div><img  src="img/si.jpg" alt="" /></div>
						</div>	
						</li>
						<li>
							<div class="xian1">
							<img class="xing" src="img/专家建议-旅游_17.jpg" alt="" />
							<div>技能</div>
							<div class="dong">如何选择旅行保险</div>
							<div><img  src="img/si.jpg" alt=""/> </div>
						</div>	
						</li>
					<li>
						<div class="xian1">
							<img class="xing" src="img/专家建议-旅游_18.jpg" alt="" />
							<div>技能</div>
							<div class="dong">负责任的吊桥</div>
							<div><img  src="img/wu.jpg" alt="" /></div>
						</div>	
						</li>
					</ul>
					<!--第三个-->
					<ul class="list-inline list-unstyled tu">
						<li>
							<div class="xian1">
							<img class="xing" src="img/专家建议-旅游_22.jpg" alt="" />
							<div>技能</div>
							<div class="dong">如何建立篝火</div>
							<div><img  src="img/si.jpg" alt="" /></div>
						</div>	
						</li>
						<li>
							<div class="xian1">
							<img class="xing" src="img/专家建议-旅游_23.jpg" alt="" />
							<div>技能</div>
							<div class="dong">如何护理皮革登山鞋</div>
							<div><img  src="img/si.jpg" alt=""/> </div>
						</div>	
						</li>
					<li>
						<div class="xian1">
							<img class="xing" src="img/专家建议-旅游_24.jpg" alt="" />
							<div>技能</div>
							<div class="dong">如何选择背包炉</div>
							<div><img  src="img/wu.jpg" alt="" /></div>
						</div>	
						</li>
					</ul>
					<!--第四个-->
					<ul class="list-inline list-unstyled tu">
						<li>
							<div class="xian1">
							<img class="xing" src="img/专家建议-旅游_28.jpg" alt="" />
							<div>技能</div>
							<div class="dong">如何选择旅行指南</div>
							<div><img  src="img/si.jpg" alt="" /></div>
						</div>	
						</li>
						<li>
							<div class="xian1">
							<img class="xing" src="img/专家建议-旅游_29.jpg" alt="" />
							<div>技能</div>
							<div class="dong">如何选择吊床</div>
							<div><img  src="img/si.jpg" alt=""/> </div>
						</div>	
						</li>
					<li>
						<div class="xian1">
							<img class="xing" src="img/专家建议-旅游_30.jpg" alt="" />
							<div>技能</div>
							<div class="dong">如何选择灯笼</div>
							<div><img  src="img/wu.jpg" alt="" /></div>
						</div>	
						</li>
					</ul>
					<!--第五个-->
					<ul class="list-inline list-unstyled tu">
						<li>
							<div class="xian1">
							<img class="xing" src="img/专家建议-旅游_35.jpg" alt="" />
							<div>技能</div>
							<div class="dong">如何选择屋顶帐篷</div>
							<div><img  src="img/si.jpg" alt="" /></div>
						</div>	
						</li>
						<li>
							<div class="xian1">
							<img class="xing" src="img/专家建议-旅游_37.jpg" alt="" />
							<div>技能</div>
							<div class="dong">如何选择和使用防晒霜</div>
							<div><img  src="img/si.jpg" alt=""/> </div>
						</div>	
						</li>
					<li>
						<div class="xian1">
							<img class="xing" src="img/专家建议-旅游_39.jpg" alt="" />
							<div>技能</div>
							<div class="dong">如何选择可持续服装和装备</div>
							<div><img  src="img/wu.jpg" alt="" /></div>
						</div>	
						</li>
					</ul>
				    <!--第六个-->
				    <ul class="list-inline list-unstyled tu">
						<li>
							<div class="xian1">
							<img class="xing" src="img/专家建议-旅游_34.jpg" alt="" />
							<div>技能</div>
							<div class="dong">如何选择炊具</div>
							<div><img  src="img/si.jpg" alt="" /></div>
						</div>	
						</li>
						<li>
							<div class="xian1">
							<img class="xing" src="img/专家建议-旅游_45.jpg" alt="" />
							<div>技能</div>
							<div class="dong">与孩子一起旅行</div>
							<div><img  src="img/si.jpg" alt=""/> </div>
						</div>	
						</li>
					<li>
						<div class="xian1">
							<img class="xing" src="img/专家建议-旅游_46.jpg" alt="" />
							<div>技能</div>
							<div class="dong">如何选择睡垫</div>
							<div><img  src="img/wu.jpg" alt="" /></div>
						</div>	
						</li>
					</ul>
				</div>
			
		</div>
		
	</div>
	
	
	     <div class="container-fluid ">
	     	  	<div class="row">
	     	<div class="col-md-2"></div>
	     	<?php include('public/footer.php');?>
	     	  	
	     	  </div>
	
	     	  	
	     	 
	
	</div>
		
			<script>
		window.onload=function(){
			var  height=$(window).height();
		var  width=$(window).width()
	var   width1=$("#lun").width();
	
		
		$(".quan").css("width",width+34+"px");
		$(".bei").css("height",height+"px");
		$("body").css("height",height+"px");
		$(".bei").css("width",width+20+"px");
		$("#menu3").css("height",height-50+"px");
				$("#menu3").css("width",width*0.4+"px");
				
	
		
		
		
		
		//这是显示与隐藏导航栏的
		    	$(function(){
    	    var nul=0;	
    	 $(".quan").scroll(function(){
     var  a=$("body").height();
    
     var b=Math.round($(".quan").scrollTop());
  
     var c=window.innerHeight;

 
     if(b<=a/10){
     	$(".header1").removeClass("xian");
     	$(".header1").css("background","none");
     }
     else if(b==a-c){
     	$(".header1").removeClass("xian")
     		$(".header1").css("background","none");
     }
   
    else if(b>nul){
     		$(".header1").addClass("xian")
     }
     else if(b<nul){
     	$(".header1").removeClass("xian");
     	 if(b<=a/10){
     	
     	$(".header1").css("background","none");
     }
     	else{
     		$(".header1").css("background","#fff")
     	}
     	
     }
     
     nul=b;
     
     
     })
     
      })
     
     
     
     
     
     
     
		
	
		}
		
		
		
		</script>
	</body>
</html>
