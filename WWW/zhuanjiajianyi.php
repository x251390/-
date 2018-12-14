<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>专家建议</title>
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
			
			.col-md-4,.col-md-8,.col-md-9{
				padding: 0;
				margin: 0;
			}
			
				*{
				padding:0;
				margin:0;
			}
		   .header{
		   	padding:0!important;	
		   	position:relative;
		   	margin-bottom: 40px;
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
		   a{
		   	color:#737272;
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
		    	width:48%;
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
		     .header .ming{
		    	font-size:32px;
		    	color:#fff;
		    		top:27%;
		    		left:50%;
		    		margin-left: -192px;
		    	position: absolute;
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
        }
        
        
        .content .row img{
        	width:100%;
        }
        .content .pull-left,.content .pull-right{
        	width:48%;
        	padding:0;
        	margin: 0;
        }
        .content .clearfix img{
        	width: 100%;
        	
        }
        .content .yi{
        	font-size: 18px;
        	padding: 15px;
        }
         .content .er{
         	    	font-size: 12px;
        	padding-bottom: 10px;
        	padding-left: 15px;
         }
         .content .san{
         	border:#e3e3e3 1px solid;
         	border-radius: 5px 5px 0px 0;
         	overflow: hidden;
         	box-shadow: 0 2px 5px #8e8e8e ;
         	margin-bottom: 15px;
         }
        .content .col-md-4{
        	margin-right: 20px;
        	
        }
        .content .col-md-4 .pull-left,     .content .col-md-4 .pull-right{
        	border:#e3e3e3 1px solid;
         	border-radius: 5px 5px 0px 0;
         	height:100%;
         	box-shadow: 0 2px 5px #8e8e8e ;
         	margin-bottom: 15px;
        }
        .content  .bian{
        	font-size: 18px;
        	margin-bottom: 25px;
        	margin-left: -5px;
        }
        
        
        
        
        
        
        
        
        
        
        
         .footer{
		    margin-top: 60px;
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
        .header a{
		    	color:#737272;
		    };
		    .header .yi .active{
		    	font-size: 22px;
		    	color: #0a78d6!important;
		    };
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
				
				<span  class="yi center-block "><a href="family.php">家庭</a></span>
				<span  class="yi center-block"><a href="fuzhuang.php">服装</a></span>
						<span  class="yi center-block "><a href="zhuanjiajianyi.php" class="active">专家建议</a></span>
								<span  class="yi center-block "><a href="luying.php">露营</a></span>
								<span  class="yi center-block "><a href="lvyou.php">旅行</a></span>
								
			</div>
			
			
		
			<span class="pull-right">联系我们</span>
		</div>
		
		
		
		<img src="img/专家建议-.jpg" class="bei img-responsive"/>
	
	</div>
	
	<div class="content2">
		<span>专家建议</span>
		看一看<br/>
让你有意想不到的收获<br/>
捕捉专家建议吧！
	</div>
		
	<div class="content clearfix">
		<div class="col-md-2"></div>
	<div class="bian">编辑推荐</div>
		<div class="row">
			
			<div class="col-md-2"></div>
			<div class="col-md-4">
			<div class="san">
				<img src="img/21-.jpg" alt="" />
				<div class="yi">山地自行车简介</div>
				<div class="er">这个初学者级别系列涵盖了您第一次骑山地自行车需要知道的一切。</div>
				<div class="er">系列</div>
			</div>
			<div class="col-md-12">	
			<div class="row clearfix">
				<div class="pull-left">
					<img src="img/50-.png" alt="" />
					<div class="yi">日行徒步清单</div>
					<div class="er">我们为日间徒步旅行者提供的
						综合清单包括所需的和可选的
						装备，服务和配件</div>
					<div class="er">清除</div>
				</div>
				<div class="pull-right">
					<img src="img/51-.png" alt="" />
					<div class="yi">与您的狗徒步旅行或背包旅行</div>
					<div class="er">了解与您的狗远足和背包旅行
的基本知识，包括准备好它们
，加速准备，食物，水和小道
危险以避免</div>
					<div class="er">技能</div>
				</div>
			</div>	
				</div>
				
			</div>
			<div class="col-md-4">
				<div class="col-md-12">	
			<div class="row clearfix">
				<div class="pull-left">
					<img src="img/52-.png" alt="" />
					<div class="yi">日行徒步清单</div>
					<div class="er">我们为日间徒步旅行者提供的
						综合清单包括所需的和可选的
						装备，服务和配件</div>
					<div class="er">清除</div>
				</div>
				<div class="pull-right">
					<img src="img/53-.png" alt="" />
					<div class="yi">与您的狗徒步旅行或背包旅行</div>
					<div class="er">了解与您的狗远足和背包旅行
的基本知识，包括准备好它们
，加速准备，食物，水和小道
危险以避免</div>
					<div class="er">技能</div>
				</div>
			</div>	
				</div>
				<div class="san">
				<img src="img/54-.png" alt="" />
				<div class="yi">山地自行车简介</div>
				<div class="er">这个初学者级别系列涵盖了您第一次骑山地自行车需要知道的一切。</div>
				<div class="er">系列</div>
			
			</div>
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
		var height1=$(".content .col-md-4 .pull-right").height();
		$(".content .col-md-4 .pull-left").css("height",height1+"px");

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
     console.log(a);
     var b=Math.round($(".quan").scrollTop());
      console.log(b);
     var c=window.innerHeight;
      console.log(c);
 
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
