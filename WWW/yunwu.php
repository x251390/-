<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>云雾缠绕</title>
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
        }	.header a{
		    	color:#737272;
		    };
		    .header .yi .active{
		    	font-size: 22px;
		    	color: #0a78d6!important;
		    }
		    .yuan1{
		    	height:50px;
		    	width:50px!important;
		    	margin-bottom: 20px;
		    	margin-left: 20px;
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
				
				<span  class="yi center-block "><a href="qiutian.php">五彩缤纷</a></span>
				<span  class="yi center-block"><a href="qiugao.php">秋高气爽</a></span>
						<span  class="yi center-block "><a href="baixueaiai.php">白雪皑皑</a></span>
								<span  class="yi center-block "><a href="yunwu.php" class="active">云雾缠绕</a></span>
			</div>
			
			
		
			<span class="pull-right">联系我们</span>
		</div>
		
		
		
		<img src="img/活动主题设计-云雾缠绕.jpg" class="bei img-responsive"/>
	
	</div>
	
	<div class="content2">
		<span>云雾缭绕</span>
		达瓦更扎邀你赏雪<br />
周边群山积雪<br />
跟我走吧
		
	</div>
	
	
	
	
	<div class="content container-fluid">
		<!--第一个-->
		<div class="row ">
			<div class="col-md-2"></div>
			<div class="col-md-4 ">
				<sapn class="ni">达瓦更扎的云海</sapn>
				<img src="img/yi1.png" class="yuan1"/>
				<div>	云海是自然景观，云海是山岳风景的重要景观之一，所谓
云海，是指在一定的条件下形成的云层。并且云顶高度低
于山顶高度，当人们在高山之巅俯首云层时，看到的是漫
无边际的云，如临于大海之滨，波起峰涌，浪花飞溅，惊
涛拍岸。故称这一现象为“云海”。<br />


由于云海无边无际，这又像漫漫的人生之路。因此云海也
是一种人生境界。云海一样的景色，云海一样的境界。</div>
				
			</div>
			<div class="col-md-4">
				<img src="img/44.png" alt="" />
			</div>
			
			<div class="col-md-8 col-md-offset-2"></div>
		</div>
		<!--第二个-->
		<div class="row ">
			<div class="col-md-2"></div>
			<div class="col-md-4 ">
				<sapn class="ni">日出</sapn>
				<img src="img/er2.png" class="yuan1"/>
				<div>太阳初升出地平线或最初看到的太阳的出现。在太阳升起
来的时候，看见雪上上远处的风景别具一格，你明白想看
见这样的景色，生活在平原地区的人们基本见不到如此美
景。<br />
在没有下雪的地方，来到此地只会觉得，哇！竟自然如此
奇妙。会爱上这个地方日出。
				
				</div>
				
			</div>
			<div class="col-md-4">
				<img src="img/45.png" alt="" />
			</div>
			
			<div class="col-md-8 col-md-offset-2"></div>
		</div>
<!--第三个-->
		<div class="row ">
			<div class="col-md-2"></div>
			<div class="col-md-4 ">
				<sapn class="ni">雾凇引来日出</sapn>
				<img src="img/san3.png" class="yuan1"/>
				<div>
				诗和远方注定无法企及，而我国川西的可爱黄土地却孕育
出世界上最美的冰雪童话世界——雾凇林。雾凇林位于当
地的森林和路旁的树木地带，每年的这十二月直到次年3月
底是最佳观赏季节。<br />
喝一杯暖暖的奶茶，望着这一切，放下所有的烦恼的事情
，沉浸在这冰雪童话世界。
				</div>
		
			</div>
			<div class="col-md-4">
				<img src="img/46.png" alt="" />
			</div>
			<div class="col-md-8 col-md-offset-2"></div>
		</div>
		<!--第四个-->
			<div class="row ">
			<div class="col-md-2"></div>
			<div class="col-md-4 ">
				<sapn class="ni">星空</sapn>
				<img src="img/si4.png" class="yuan1"/>
				<div>这世间， 总有人喜欢在寂静的夜里独自仰望星空，看繁星
如豆，看回忆如潮，看思念如海。在山上搭一顶帐篷，回
归自然，以天为被，以地为席，遥望无尽苍穹，那一刻，
自己才真正属于自己。<br />

晴朗的夜空里，分布着无数闪闪发光的星星，它们三五成
群组成各式各样的图案，有的明亮有的暗淡，颜色也各不
相同。壮丽的星空引起人们无限的遐想，激发人们去探索
宇宙天体的奥秘。</div>
				
			</div>
			<div class="col-md-4">
				<img src="img/47.png" alt="" />
			</div>
			<div class="col-md-8 col-md-offset-2"></div>
		</div>
			<!--第五个-->
		
		<div class="row ">
			<div class="col-md-2"></div>
			<div class="col-md-4 ">
				<sapn class="ni">群山</sapn>
				<img src="img/wu5.png" class="yuan1"/>
				<div>都说风光在险峰，在这里，你可以360度无死角的观赏周围
屹立的雪山。随着时间的流逝，阴晴的变化，它们也绽放
着不同的风情，或静谧，或妖娆，或圣洁，或温柔......<br />

来到这里，一定要眺望远方，放空自己，领略世界自然美
丽的奇妙。</div>
			</div>
			<div class="col-md-4">
				<img src="img/48.png" alt="" />
			</div>
			<div class="col-md-8 col-md-offset-2"></div>
		</div>
		
		
				<div class="row ">
			<div class="col-md-2"></div>
			<div class="col-md-4 ">
				<sapn class="ni">通天路</sapn>
				<img src="img/liu6.png" class="yuan1"/>
				<div>从山脚到山顶，有一条方便牧民放牧的山路，叫做通天路。
它虽曲折险峻，却能驱车而上，这一路上，各种美景更是
令人目不暇接，如行天路，如在云端，你会发现，大自然，
就是如此偏爱川西。<br />

关于旅行，我们都知道，风景不会一直都在，说走就走的
心也会随着时间的消磨而消失下定决心走一趟，也许，你
会发现达瓦更扎更多更美好的风景！</div>
			</div>
			<div class="col-md-4">
				<img src="img/49.png" alt="" />
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
