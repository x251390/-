<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>白雪皑皑</title>
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
        
        .content .ni{
        	font-size: 32px;
        	margin-bottom: 24px;
        	display: inline-block;
        }
        .content .col-md-4 div{
        	font-size: 16px;
        	line-height: 35px;
        	padding-right: 40px;
        }
        .content .pull-left{
        	
        }
        
        .content .pull-right{
        	border-style: none;
        	padding: 0;
        	
        }
        
             .content .col-md-4 img{
             	width: 100%;
             }
        .content .row{
        	padding-right: 40px;
        		padding-left: 40px;
        	
        		padding-bottom: 28px;
        		
        		
        }
         .content .row .col-md-8{
         border-bottom: 2px #bfbfbf dashed;	
         margin-top: 30px;
         margin-left:16.5%!important;
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
         a{
		    	color:#737272;
		    };
		     .active{
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
				
				<span  class="yi center-block "><a href="qiutian.php">五彩缤纷</a></span>
				<span  class="yi center-block"><a href="qiugao.php">秋高气爽</a></span>
						<span  class="yi center-block "><a href="baixueaiai.php" class="active">白雪皑皑</a></span>
								<span  class="yi center-block"><a href="yunwu.php">云雾缠绕</a></span>
			</div>
			
			
		
			<span class="pull-right">联系我们</span>
		</div>
		
		
		
		<img src="img/20.jpg" class="bei img-responsive"/>
	
	</div>
	
	<div class="content2">
		
		<div class="dropdown">
              <a id="drop2" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <span>十二月-三月</span>
                
              </a>
              <ul class="dropdown-menu" aria-labelledby="drop2">
                <li><a href="#">白雪皑皑</a></li>
                <li><a href="dongtian.php">达瓦更扎的冬天</a></li>
              
              </ul>
            </div>
		
		
		<style>
			.dropdown-menu{
	left:50%!important;
	margin-left: -80px;
	text-align: center;
	
}
#menu3{
text-align: left;	
}

		</style>
		
		
		
		
		
		
		达瓦更扎邀你赏雪<br/>
周边群山积雪<br/>
跟我走吧
		
	</div>
	
	
	
	
	<div class="content container-fluid">
		<!--第一个-->
		<div class="row ">
			<div class="col-md-2"></div>
			<div class="col-md-4 ">
				<sapn class="ni">达瓦更扎的冬天</sapn>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				<div>	虽然空气有点稀薄，天气寒冷，但也挡不住我们看见它美
丽的一面，也挡不住放牧人的热情，虽然蛇冬眠了，但还
有其他的可爱小动物，在群山之间跳跃、嬉戏。<br/>
<br />

						清晨坐在阳台，烤着火炉，望着窗外天上的雪，一片一片
飘下来。一缕阳光洒下，能感受到冬季的温暖。</div>
				
			</div>
			<div class="col-md-4">
				<img src="img/38.png" alt="" />
			</div>
			
			<div class="col-md-8 col-md-offset-2"></div>
		</div>
		<!--第二个-->
		<div class="row ">
			<div class="col-md-2"></div>
			<div class="col-md-4 ">
				<sapn class="ni">雾凇</sapn>
				<div>冰淞是凝固，<br />
雪淞就是雪,是凝华。<br />
雾凇是霜凝华在树枝上形成的。<br />
					在没有下雪的地方，来到此地只会觉得，哇！竟自然如此
奇妙。会爱上这个地方冬天。</div>
				
			</div>
			<div class="col-md-4">
				<img src="img/39.png" alt="" />
			</div>
			
			<div class="col-md-8 col-md-offset-2"></div>
		</div>
<!--第三个-->
		<div class="row ">
			<div class="col-md-2"></div>
			<div class="col-md-4 ">
				<sapn class="ni">群山的热闹气氛</sapn>
				<div>
				雪后站在山顶看着群山是一派挥洒写意的中国水墨，<br />
冰清玉洁、银装素裹、朴实而又淡雅。<br />
昨夜达瓦更扎山雪花齐飞，<br />
在今晨献上一片银光的冰雪世界，美哉！
				<br />
				喝一杯暖暖的奶茶，望着这一切，放下所有的烦恼的事情
，沉浸在其中。
				</div>
		
			</div>
			<div class="col-md-4">
				<img src="img/40.png" alt="" />
			</div>
			<div class="col-md-8 col-md-offset-2"></div>
		</div>
		<!--第四个-->
			<div class="row ">
			<div class="col-md-2"></div>
			<div class="col-md-4 ">
				<sapn class="ni">动物</sapn>
				<div>在哪里有原始林区和中国珍稀野生动物大熊猫、金丝猴、
扭角羚羊的主要栖息地之一。还有许多动物，运气好还会
看见特别不易常见的小动物。<br />
<br />
走在山间看看动物，看看雾凇，与喜欢的人或是家人享受
这份独一无二的冬季。</div>
				
			</div>
			<div class="col-md-4">
				<img src="img/41.png" alt="" />
			</div>
			<div class="col-md-8 col-md-offset-2"></div>
		</div>
			<!--第五个-->
		
		<div class="row ">
			<div class="col-md-2"></div>
			<div class="col-md-4 ">
				<sapn class="ni">赏雪时吃火锅</sapn>
				<div>在当地喜欢野炊、烧烤。冬季喜欢火锅。藏式土火锅是一
种火锅，选用本地高山新鲜牦牛肉，牦牛肉丸，以及加工
后的干牦牛肉，并配备本地各种时令蔬菜制作而成。<br />
<br />
更具人文特色，口感不错、保暖又好吃。同时又欣赏了白
雪皑皑的群山和放牧人的风采，哎哟不错哟！</div>
			</div>
			<div class="col-md-4">
				<img src="img/42.png" alt="" />
			</div>
			<div class="col-md-8 col-md-offset-2"></div>
		</div>
		
		
				<div class="row ">
			<div class="col-md-2"></div>
			<div class="col-md-4 ">
				<sapn class="ni">雪</sapn>
				<div>来到此地，别忘记去寻找雪花。雪花这个世界上没有相同
的两片雪花来到这里，你才会发现不同的样式的雪花。雪
花多呈六角形，花样之所以繁多。例如当实有水汽压仅大
于平面的饱和水汽压时，水汽只在面上凝华，形成的是柱
状雪花。再加上冰晶不停地运动，它所处的温度和湿度条
件也不断变化，这样就使得冰晶各部分增长的速度不一致，

形成多种多样的雪花。</div>
			</div>
			<div class="col-md-4">
				<img src="img/43.png" alt="" />
			</div>
			
		</div>
		
			
			
			
			
		
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	<div class="col-md-2"></div>
	<?php include('public/footer.php');?>
	     	 
	
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
