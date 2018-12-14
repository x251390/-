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
        
        
        .header5{
        	font-size: 22px;
        	position: absolute;
        	top:15%;
        	line-height: 50px;
        }
         .header5 .jian{
         	font-size: 40px;
         }
         
         .header5 .xian{
         	display:inline-block!important;
         	height:2px;
         	width:40%;
         	background: #dcdcdc;
         	margin-bottom: 10px;
         }
         .header5 .er{
         	text-align: center;
         	margin-bottom: 30px;
         }
        
        
        
        
        
        
        
        
        
         .content .col-md-8{
         	margin-left:16.7%;
         }
          .content .col-md-8 img{
          	width:100%;
          }
        .content .col-md-8 .col-md-6{
        	font-size: 18px;
        	line-height: 40px;
        }
        .content .col-md-8 .col-md-6 span{
        	font-size: 38px;
        	display: block;
        	margin-bottom: 45px;
        }
        .content1{
        margin-left:16.7%;	
        margin-right:16.7%;	
        font-size: 18px;
        line-height: 40px;
        	text-indent: 2em;
        	position: relative;
        
        }
          .content1 .jing{
          	font-size:38px ;
          	text-align: center;
          	display: block;
          	margin-bottom: 40px;
          	margin-top: 140px;
          
          }
          .content1 .yang{
          	position: absolute;
          	top:140px;
          	left:-78px;
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
				
				<span  class="yi center-block "><a href="jingquditu.php">景区地图</a></span>
				<span  class="yi center-block"><a href="fuzhuang.php" class="active">交通服务</a></span>
					
			</div>
			
			
		
			<span class="pull-right">联系我们</span>
		</div>
		
		
		
		<img src="img/交通服务-交通服务.png" class="bei img-responsive"/>
		
		
		<div class="header5 row">
			<div class="col-md-6 col-md-offset-3">
				<div class="er">
				<span class="xian"></span>
				<span class="jian">简介</span>
				<span class="xian"></span>
				</div>
				<div>
					达瓦更扎是能与牛背山、轿顶山相媲美的一座360°
观景平台，同样有云海，有日照金山，而且还是蜀
山皇后--四姑娘山的幺妹峰。 达瓦更扎位于四川
省宝兴县硗碛藏族乡嘎日村境内，达瓦更扎（为嘉
绒藏语，意为“美丽的神山”）。此地海拔约3900
米左右，面积近200平方公里。下面是线路安排如下
：全程自驾：（高速+省道+山路）300公里左右
					
				</div>
			</div>
		</div>
		
		
		
		
		
	
	</div>
	<div class="content row">
		<div class="col-md-8">
		<div class="col-md-6">
			<img src="img/che.jpg"/>
		</div>
		<div class="col-md-6">
			<span>车况</span>
			我可以负责地说，普通轿车一点问题都木有，只要驾驶技
术合格即可。体验自驾的乐趣。既然朋友有，索性放弃。
虽然开车的乐趣木有鸟，当副驾的莫名担心增加
了，但随手拍照也方便了……
例如：什么标致3008、新奇骏、宝马X5等都可以的，
经成温邛高速、邛名高速、省道210一直到全球首次发现大
熊猫的宝兴县。
		</div>
	</div>
</div>
	<div class="content1 row">
		<span class="jing">进入该路段</span>
		<span ><img src="img/yang.png" class="yang"/></span>
		<div>走走走去达瓦更扎，需要原路出硗碛藏寨，回到这个地方，这次选右边往夹金山、四姑娘山方向：沿着硗碛湖
走，一直到嘎日沟大桥——导航可达的最远点：接近嘎日沟大桥。正确路线是右拐上桥过桥继续往前走：下面这张
图是回来时拍的。去的时候线路如图示标识。过桥左手边有蓝色“嘎日村”标牌，但桥头只有一栋两层楼房，破败
。我脚的真正的嘎日村应该是再上去几百米的地方，那里有若干户人家，才像村庄。</div>
		<div>　过桥所见，我们在这里耽搁了小半个小时。正确路线是往牛的方向继续走，大约几百米后来个170度的掉头，
那才开始真正的走上“通天路”。岔路较多，最好问当地人，原则上的话，掌握一条：往高处走。</div>
		<div>　经过一段彩林、一个村庄（应该是真正的嘎日村），最后到达一个关卡。这时候你就会有“进景区”的赶脚了
。土路和碎石路。下面有意思的是遇到牦牛群。早早的就有藏民飞快下来，喊我们停车避让，说牦牛下来了，赶快
让一下。我们也弄不清楚状况，当然停车。后来牦牛在朋友两人再远的地方出现……你看过《狮子王》吧？那阵势
就是那样，隆隆的蹄声很震撼^_^可惜它们从前方直接下去，木有过来。赶脚是领头的牦牛看了我们一会，估计高
山上的牦牛少见人，不愿和我们碰面。可惜了，我们藏在汽车后严阵以待，相机都打开了。</div>
		<div>　　后来知道，我们当天下去的大部队，在硗碛村看到卖那些牦牛。</div>
		
		
		
		
		
		
		
		
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
//		$(".bei").css("height",height+"px");
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
