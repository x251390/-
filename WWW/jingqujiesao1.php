<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>景区介绍</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<script src="js/jquery-3.3.1.js" type="text/javascript" charset="utf-8"></script>
<link href="./images/style.css" type="text/css" rel="stylesheet">
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
		    		margin-left: -128px;
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
        
     
         .content1 .dian{
         	padding: 20px 115px;
         	border:3px #dbd9d9 dashed;
         	display: inline-block;
         	list-style: none;
         	position: relative;
         	left:50%;
         	margin-left: -180px;
         	margin-top: 60px;
         	
         }
         .content1 .dian li{
         	
         }
      .content1 .tu{
      	list-style: none;
      	overflow: hidden;
      	width:200%;
      	position: relative;
      	left:-18%;
      	margin-top: 25px;
      	
      	
      }
         .content1{
         	overflow: hidden;
         }
          .content1 .du{
          	text-align: center;
          	margin-top: 30px;
          }
      .content1 .tu li{
      	width:20%;
      	float:left;
      	margin-left: 70px;
      }
      
         .content1 {
         	font-size: 32px;
         
         }
         
          .content2{
        	text-align: center;
        	font-size: 18px;
        		color:#727273;
        		margin-bottom: 75px;
        		margin-top: 45px;
        }
        .content2 span{
        	font-size: 32px;
        margin-bottom: 30px;
        	display: block;
        	line-height: 25px;
        }
      
      
      
      
      .chuan{
      	font-size: 32px;
      	text-align: center;
      	color:#727273;
      	margin-bottom: 75px;
      }
      
      
      
      .content{
      	font-size: 20px;
      	
      }
      .content .chi{
      	margin: 25px auto;
      	margin-left: 15%;
      	width:70%;
      	
      }
      
        
        
        
         .footer{
		    margin-top: 135px;
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
		       	width:32%;
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
				<span  class="yi center-block "><a href="facts.php" >景区概况</a></span>
				<span  class="yi center-block "><a href="mingfeng.php">民风民俗</a></span>
				<span  class="yi center-block"><a href="zhangquwenhua.php">藏区文化</a></span>
				<span  class="yi center-block"><a href="jingqujiesao.php" class="active">景区介绍</a></span> 
			</div>
			
			
		
			<span class="pull-right">联系我们</span>
		</div>
		
		
		
		<img src="img/fang.jpg" class="bei img-responsive"/>
	
	</div>
	
	
	<div class="content">
		<div class="content2">
		<div class="dropdown">
              <a id="drop2" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <span>----僧用建筑----</span>
                
              </a>
              <ul class="dropdown-menu" aria-labelledby="drop2">
                <li><a href="jingqujiesao.php">独具特色的藏式火锅</a></li>
                <li><a href="jingqujiesao.php1">----僧用建筑----</a></li>
              
              
              
              </ul>
            </div>
	
	</div>
	
			<style>
			.dropdown-menu{
	left:50%!important;
	margin-left: -80px;
	text-align: center;
	
}

		</style>
	
	
	
	<div class="content row">
		<div class="col-md-2"></div>
			<div class="col-md-8">
				<div style="text-align: center;">在地形选择上，寺院多选择环境较好，地势险要之处依山而建。建筑连绵起伏，层楼叠阁，很有巍峨耸峙、栋字庄
严的气势。</div>
</div>
</div>


	<div class="content row">
		<div class="col-md-2"></div>
			<div class="col-md-8">
				<div style="text-align: center;">
					<div style="margin-bottom:20px;margin-top: 65px; font-size: 26px;">----大殿----</div>
					
					寺院大殿的修筑先按其高度确定收分系数，再计算墙脚的宽度，确定基础埋置的深度和基槽宽度，基脚用石块砌成
。墙身用土质粘结坚硬的有机质泥灰土和黄土夯筑。一般采用墙柱混合承重结构，当墙体筑到一层高时，就可以按
照大殿的面积，根据一定的距离立柱头。柱头多为圆形，讲究的柱和梁加工成方形，大梁横向铺设，外纵墙及柱头
承受大梁传下的荷量。模条纵向铺设，外横墙承受檩子传下的荷载，檩条上密铺小木条，将模条间空隙铺满，再密
铺一层小树枝，最后用泥土夯平。底层楼面盖好后，继续筑上层墙体。房顶做法与楼面大致相同，只是泥土选择更
严格，要求细且粘以防漏雨。寺院大殿的边玛墙，用一种叫娘热的灌木枝条捆成手臂粗细的小把，上下用木钉固定
。一端染成黑色，整齐设于房顶做成女儿墙，象征天与地之间中界，边玛檐墙上口做出圆形白点一圈，象征天上的
日月星辰。立体工程完工以后，才安装大门，寺院大殿的四周墙体一般不设窗户。<br />
大殿建筑完工后，第二步是装饰。从佛教的角度来讲，寺跷建筑必须是抗色真备。大殿的外墙，用一种叫"左"的红
色泥土涂成红色（萨迦教派涂有红、黄、黑三种色），殿门的门框经木工精雕细琢后，再分层彩绘精细图案，厚厚
的两扇大门涂以丹漆，上中下三处分别用铜质或铁质镶嵌有梵文六字真经的箍带包扎，配钵式或兽式门环中吊，以
示法门森严。大殿顶上用宝珠、宝瓶、金龌和莲花组成金黄色的宝幢，宝幢两旁配置菩提金羊（苟经院为镏金孔雀
）。大殿内部则更是雍容华贵，富丽堂皇，铜铸和泥塑的菩萨，穿金戴银，姿态备异，四周墙壁画满各种壁图，画
幅之间的空白，用各种各样的图案过渡连接。立柱上部的变态雀替代柱梁连接部的垫木，一垫木以下悬挂色彩斑斓
的丝制刺绣飘带和幢幡，给人以庄重森严之感。</div>
</div>
</div>





<div class="content row">
		<div class="col-md-2"></div>
			<div class="col-md-8">
				<div style="text-align: center;">
					<div style="margin-bottom:20px;margin-top: 65px; font-size: 26px;">----僧房----</div>
					
					僧房一般修建在寺院大殿周围，僧房与大殿紧紧相连，俨如一座小城。全县各寺僧房多为一楼一底，少数为二层，
与藏式民宅无大差异。底楼墙体为土墙或石墙，二层以上用四根圆木（有用半圆形的）垂直咬接，叠架成"井"字形
墙壁，房顶造法与大殿相同∫不设边玛墙。这种木楞子的建筑，藏族称为"棒空"。<br />
僧房最显著的特点之一是它的檐和窗，其梁枋不出头，屋顶出檐短促，檐部挑出墙外，长约20厘米，砍成方头，上
置横枋（连檐）一道，再放"飞檐"一层。檐头再置封檐或拦泥板一道，上垫细树枝，铺上泥巴、片石各一层。"棒空
"的窗，一般是固定格子窗或推窗，其窗上遮雨塔的构造与屋顶出檐相同。地位比较高的喇嘛和活佛其窗檐上还要做
一长方形木板，横靠墙壁，并饰以各种青样图案。<br />
僧房底层近门两边备开一小窗，底层堆放杂物或关马，二层由主室、卧室、客室、经堂、厨房、走廊等部分组成，
其中经堂占主要位置，各室的光亮，利用天井和走廊解
决；楼梯设于室内，用圆木掏级而成，也有改为汉式楼梯的。<br />
僧人住宅的大小位置，以僧人在寺内地位高低而定。如更庆寺上层喇嘛住宅紧接大殿，其余僧众依次而建，并规定
僧人住宅不设阳台。僧房的第二个特点是它的外墙色彩。萨迦派的僧房土墙涂黑、白、红三色竖纹，"棒空"为红色，
其它教派僧房的墙体用白嘎土涂成白色。佛塔佛塔往往座落在居住区最显眼处或群众聚会之地。县内常见的佛塔（
俗称"白塔"）为砖、石构造，塔体用石灰粉妆，塔基座呈"凸"字形，上面呈复合"亚"字形须弥座二重，其上为瓶形塔
身，塔颈作相轮状，天盖垒叠月盘。</div>
</div>
</div>



		<div class="poster-main">
		<div class="poster-btn poster-prev-btn"></div>
		<ul class="poster-list">
			<li class="poster-item"><a href="#"><img src="img/jiaotong2.png"></a>
				
			</li>
			<li class="poster-item"><a href="#"><img src="img/14.jpg"></a>
				
			</li>
			<li class="poster-item"><a href="#"><img src="img/fang.jpg"></a>
				
			</li>
			
		</ul>
		<div class="poster-btn poster-next-btn"></div>
	</div>
	
	
	<div class="content1">
		
		
		<ul class="dian list-unstyled">
			<li>发现更多</li>
		</ul>
		
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
		var  width=$(window).width();
		var  height1=$(".left").height();
		$(".right").css("height",height1+"px");
		
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
		
		
	

<script type="text/javascript" src="images/fa.js">
	
</script>
<script src="./images/Carousel.js"></script>
<script>
//$(".poster-main").Carousel("init");

$(".poster-main").Carousel({
"width":1000,		
"height":302,		
"posterWidth":600,	
"posterHeight":322,
"scale":0.75,		
"speed": 1550,	
"autoPlay":true,	
"delay":1500,	
"verticalAlign":"middle"	
});

</script>
	</body>
</html>
