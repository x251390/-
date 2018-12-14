<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>摄影</title>
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
		   	margin-bottom: 90px;
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
		    	width:48%;
		    	display: inline;
		    	text-align: center;
		    	font-size: 18px;
		    	padding:0 35px;
		    }
		     .header .yi .active{
		    	font-size: 22px;
		    	color: #0a78d6;
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
        
        
        
        .content{
        	padding: 0 70px;
        }
        .content .da{
        	font-size: 20px;
        	line-height: 30px;
        	
        	padding-bottom:20px ;
        }
         .content .da>span{
         	color: #6cb3e8;
         }
         .content .da .xia{
         	background: #6cb3e8;
         	display: block;
         	height:3px;
         	width: 30px;
         	margin-top: 18px;
         }
        .content .tu{
        	position: relative;
        	margin: 0 auto;
        }
        .content .tu li{
        	width:33%;
        }
        .content .tu span{
        	display: inline-block;
        	padding: 2px 4px;
        }
        .content .tu li img{
        	width:100%;
        }
         .content .tu li>.middle{
         	margin-left: 4% ;
         	margin-right: 4% ;
         	position:relative;
         	
         }
         .content .tu .yi{
         	position: absolute;
         	background: #fff;
         	opacity: 0.8;
         	height:193px;
         	width:100%;
         	z-index: 555;
         	top:92.1%;
         }
         .content .tu ul{
         	margin-bottom: 35px;
         }
        .content .jian{
        	position: fixed;
        	z-index: 9999999;
        	top:92%;
        	left:96%;
        }
        
        
         .footer{
		    margin-top: 20px;
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
		<div class="quan" >
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
					<span  class="yi center-block"><a href="lvxingzhezhuanlan.php">旅行者日志</a></span>
				<span  class="yi center-block active"><a href="#" class="active">旅行者摄影</a></span>
			
					
			</div>
			
			
		
			<span class="pull-right" >联系我们</span>
		</div>
		
	</div>
	
	<div class="content">
		<div class="da" id="dian">
			<span>达瓦更扎</span>的风景摄影<br/>
			  捕获南方原始的静止
			  <div class="xia"></div>
		</div>
		<div class="tu">
			<ul class="list-unstyled list-inline">
				<li>
					<img src="img/2.jpg" alt="" />
				<span>山脚下的房子——阿呆的路</span>
				</li>
				<li class="middle">
					<img src="img/3.jpg" alt="" />
					<span>低云——阿呆的路</span>
				</li>
				<li>
					<img src="img/4.jpg" alt="" />
					<span>被遗忘的房子——阿呆的路</span>
				</li>
			
			</ul>
			<ul class="list-unstyled list-inline">
				<li>
					<img src="img/5.jpg" alt="" />
						<span>复杂的天——阿呆的路</span>
				</li>
				<li class="middle">
					<img src="img/6.jpg" alt="" />
						<span>云海——阿訇</span>
				</li>
				<li>
					<img src="img/7.jpg" alt="" />
						<span>牧民的房子——东西</span>
				</li>
			
			</ul>
			<ul class="list-unstyled list-inline">
				<li>
					<img src="img/8.jpg" alt="" />
						<span>山脚下的房子 — 阿呆的路</span>
				</li>
				<li class="middle">
					<img src="img/9.jpg" alt="" />
						<span>冬雾 — 荷兰豆</span>
				</li>
				<li>
					<img src="img/10.jpg" alt="" />
						<span>油酥 — 东西 </span>
				</li>
			
			</ul>
			<ul class="list-unstyled list-inline">
				<li>
					<img src="img/11.jpg" alt="" />
						<span>山脚下的房子 — 阿呆的路</span>
				</li>
				<li class="middle">
					<img src="img/12.jpg" alt="" />
						<span>雪山上的风马旗 — 阿訇</span>
				</li>
				<li>
					<img src="img/13.jpg" alt="" />
						<span>山坡一角 — 阿芬 </span>
				</li>
			
			</ul>
			<ul class="list-unstyled list-inline">
				<li>
					<img src="img/14.jpg" alt="" />
						<span>山脚下的房子 — 阿呆的路</span>
				</li>
				<li class="middle">
					<img src="img/15.jpg" alt="" />
						<span>房子 —  摄影劦</span>
				</li>
				<li>
					<img src="img/16.jpg" alt="" />
						<span>盛开的格桑花 — 东西 </span>
				</li>
			
			</ul>
			<ul class="list-unstyled list-inline ">
				<li>
					<img src="img/17.jpg" alt="" />
						<span>山脚下的房子 — 阿呆的路</span>
						<div ></div>
				</li>
				<li class="middle">
					<img src="img/18.jpg" alt="" />
						<span>低云 — 阿呆的路</span>
						<div ></div>
				</li>
				<li>
					<img src="img/19.jpg" alt="" />
						<span>被遗忘的房子 — 东西 </span>
						<div ></div>
				</li>
			
			</ul>
			<div class="yi"></div>
			<div class="jian"><a href="#dian"><img src="img/旅行者专栏-摄影.jpg" alt="" /></a></div>
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
