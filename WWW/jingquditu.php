<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>景区地图</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<script src="js/jquery-3.3.1.js" type="text/javascript" charset="utf-8"></script>

		<script src="js/bootstrap.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/echarts.js" type="text/javascript"></script>
		<style>
			
				body {  overflow-x: hidden; overflow-y: auto;
				font-size: 16px;
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
		    	top:65%;
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
        
       
       
       .item img{
       	width:100%;
       }
        
        
        .content div{
        	margin-bottom: 30px;
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
		    }
		    .header .yi .active{
		    	font-size: 22px;
		    	color: #0a78d6!important;
		    }
		    .footer1 ul li {
    width: 32%;
   
}
.ditu{
	width:100%;
	margin-bottom: 120px;
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
				
				<span  class="yi center-block "><a href="family.php" class="active">景区地图</a></span>
				<span  class="yi center-block"><a href="jiaotongfuwu.php">交通服务</a></span>
						
								
			</div>
			
			
		
			<span class="pull-right">联系我们</span>
		</div>
		
		
		
		<img src="img/xia.png" class="bottom" alt="" />
		
			<img src="img/meilide.jpg" class="bei img-responsive"/>
	
	</div>
	
         <div class="content3 row">
         	<div class="col-md-2"></div>
         <div class="col-md-8">	<img class="ditu" src="img/ditu.png" alt="" />
         	
         	</div>
         </div>
         
         
         <div class="content row">
         	<div class="col-md-2"></div>
		 <div class="content1 col-md-8">
		    <div>
		    	<span><img src="img/交通1.png" alt="" /></span>
						    	扎位于四川省宝兴县硗碛藏族乡嘎日村境内，达瓦更扎（为嘉绒藏语，意为“美丽的神山”）
				。此地海拔约3900米左右，面积近200平方公里，属于邛崃山脉，地势北高南低。在四川省雅安市、甘孜州以及
				阿坝州的交界处。宝兴县嘎日村为帮助当地藏民发展牧业修建的一条24公里的“通天路”已经建成通车。该路尽
				头地势陡险，视野开阔，既可环顾北面的四姑娘山、南面的帕格拉神山、西面的贡嘎群峰等名山，也可观赏云瀑
				、草甸、森林、湖泊、峡谷、藏寨等各类景观。
		    </div>	
		    <div>
						    	去年四月去了牛背山，经过八个小时的徒步，一路上遇到大风大雨大雾大雪，到达山顶的时候大雾弥漫，期待的
				星空云海理所当然没有出现。打算再去的时候却传出封山的消息。可似乎是上天刻意要补上这个遗憾，今年四月
				、在学校刚好看到一个达瓦更扎的团，看了下简介，山顶拥有和牛背山差不多的景色，二话不说就报了名，或许
				牛背山错过的风景，这里可以补上。
		    </div>
		    <div>
						    	从重庆出发，坐了近十个小时的大巴，跨过一个一个陌生的地名，从平坦大道到崎岖山路，到达住宿地时已是暮
				色沉沉。虽然是四月份，这里似乎还在寒冬的笼罩中，一下车大家都急忙套上了御寒的衣服。我们住宿的地方是
				一个村庄，没有网络，房子是很破旧的砖瓦房，院子下面是牛圈，这里还保留着原始的，用柴火做饭的方式，用
				火炉烧热水根本供不应求，于是我们只能用冷水随便洗漱一番，带着满身的疲惫和寒意钻进被窝。虽然条件艰苦
				，可是这里的人们都很热情地和我们交谈，让我们明天注意安全，说十月份这里是产核桃的季节，欢迎我们来免
				费吃个够。
		    </div>
		    <div>
		    	第二天七点不到就从床上爬起来，或许是时间太早，天空还有些许阴沉。下过雨的世界湿漉漉的，远处的山腰缠
绕着一层云雾，清冷的空气涌入鼻腔，让人想起那句“空山新雨后”。从住宿地到山脚还有很长的一段山路要走
，我们走在山间，深一脚浅一脚踩在湿软的土地上，雨后的山林中充斥腐木和泥土的味道，树上的水珠滴到脸上
，让人觉冰凉又提神。大概走了一个多小时……
		    	
		    	
		    </div>
		 </div>
		    
		</div>    
		    
	        
	        <div class="content4 row" style="margin-top: 120px;">
	        	<div class="col-md-2"></div>
	        	<div class="col-md-8">
	        	<img src="img/交.png" alt="" />
	        	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="border:3px solid #b5b5b5">
  <!-- Indicators -->
			
			
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="img/46.png" alt="...">
			    
			    </div>
			    <div class="item">
			      <img src="img/jiaotong1.png" alt="...">
			    
			    </div>
			    <div class="item">
			      <img src="img/jiaotong3.png" alt="...">
			    
			    </div>

			  
			  </div>
			
			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			   
			    <span class="sr-only">Next</span>
			  </a>
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
