<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>五彩缤纷</title>
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
			#menu3{
				text-align: left;
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
         	margin-left: -155px;
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
        
             .content .col-md-5 img{
             	width: 100%;
             }
        .content .row{
        	padding-right: 40px;
        		padding-left: 40px;
        	line-height: 35px;
        	font-size: 16px;
        		padding-bottom: 50px;
        		
        		
        }
         .content .shang{
         	display: inline-block;
         	margin-top: 20px;
         }
      
      .chuan{
      	font-size: 32px;
      	text-align: center;
      	color:#727273;
      	margin-bottom: 75px;
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
				<span  class="yi center-block "><a href="#" class="active">五彩缤纷</a></span>
				<span  class="yi center-block "><a href="qiugao.php">秋高气爽</a></span>
				<span  class="yi center-block"><a href="baixueaiai.php">白雪皑皑</a></span>
				<span  class="yi center-block"><a href="yunwu.php">云雾缠绕</a></span> 
			</div>
			
			
		
			<span class="pull-right">联系我们</span>
		</div>
		
		
		
		<img src="img/1.jpg" class="bei img-responsive"/>
	
	</div>
	
	
	<div class="content">
		<div class="content2">
		<div class="dropdown">
              <a id="drop2" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <span>五月</span>
                
              </a>
              <ul class="dropdown-menu" aria-labelledby="drop2">
                <li><a href="qiutian.php">五月</a></li>
                <li><a href="qiutian1.php">山花-狼毒花</a></li>
                <li><a href="qiutian2.php">山花-高山杜鹃</a></li>
              
              
              </ul>
            </div>
	带你去看山花<br />
成片成山的<br />
看个够<br />
……
		
	</div>
	
			<style>
			.dropdown-menu{
	left:50%!important;
	margin-left: -80px;
	text-align: center;
	
}

		</style>
	
	
	
	
	<div class="chuan">传说来源</div>
	<!--第一个-->
	<div class="row ">
			<div class="col-md-1"></div>
			<div class="col-md-5 ">
				<sapn class="ni">格桑花-幸福</sapn>
				<div>	格桑花又称格桑梅朵，具体为何种植物存在广泛的争议。
在藏语中，“格桑”是“美好时光”或“幸福”的意思，
“梅朵”是花的意思，所以格桑花也叫幸福花，长期以来
一直寄托着藏族人民期盼幸福吉祥的美好情感<br/>
					<span class="shang">西藏自治区高原生物研究所依据民族植物学方法，对格桑
梅朵原植物进行过研究探讨。根据相关文献研究及关键人
物的访谈，表示大量的藏族影视、歌曲、西藏的期刊杂志
上被视为格桑花的秋英（波斯菊）并不是真正的格桑花。
从广义上说，“格桑梅朵”极有可能是高原上生命力最顽
强的野花的代名词，而从植物学特征上讲菊科紫菀属植物
和拉萨至昌都常见的栽培植物翠菊，都符合格桑花的特征。</span></div>
				
			</div>
			<div class="col-md-5">
				<img src="img/22.png" alt="" />
			</div>
			
			
		</div>
		
		<!--第二个-->
	<div class="row ">
			<div class="col-md-1"></div>
				<div class="col-md-5">
				<img src="img/23.png" alt="" />
			</div>
			<div class="col-md-5 ">
				<sapn class="ni">高僧传说</sapn><br/>
								很久很久以前，藏族地区暴发了一场严重的瘟疫，人们一
					批批地死去，当地的部落首领想尽一切办法也无法解决。
					直到有一天，一位来自遥远国度的活佛途经这里，利用当
					地的一种植物治愈了大家。但为了给百姓医病，这位高僧
					积劳成疾，不幸仙逝了。由于语言不通，人们对活佛的唯
					一印象就是他嘴里常说到的“格桑”——用来治病的植物
					。于是人们就把这位活佛称为“格桑活佛”。此后一切象
					征希望和幸福的美好事物也被称作“格桑”。从此，草原
					上最美丽的花则被称为“格桑花” 。
				
			</div>
		</div>
		
		
			<div class="row ">
			<div class="col-md-1"></div>
				<div class="col-md-5">
				<img src="img/24.png" alt="" />
			</div>
			<div class="col-md-5 ">
				<sapn class="ni">天神传说</sapn><br/>
										“格桑”本来是藏族诸神中掌管人间疾苦和幸福的天神。
						由于人类的贪婪和无知，肆意滥杀草原上的生灵，激怒了
						上天，于是上天就派“格桑”天神来人间惩罚人类。“格
						桑”到人间以后却发现，长期的战争已经使这片大地没有
						了生机，到处瘟疫肆虐。于是，天神违背了天命，帮助人
						类战胜瘟疫，给人类以改过自新的机会。人类为了纪念那
						位拯救他们的天神，便用人间最美丽、最幸福的事物，也
						就是格桑花来纪念他。
				
			</div>
		</div>
		
		
			<div class="row ">
			<div class="col-md-1"></div>
				<div class="col-md-5">
				<img src="img/25.png" alt="" />
			</div>
			<div class="col-md-5 ">
				<sapn class="ni">姐妹传说</sapn><br/>
					好久好久以前，所有的花都是同一个妈妈的女儿，这些女
孩都生活在一个大家庭里。格桑花和雪莲花曾经是一对孪
生姐妹，后来因各自性格及长大后的目标不一致而分离，
雪莲花选择了高高的喜马拉雅山。格桑花在经过

一段时间后非常想念雪莲花，便千里迢迢跋涉前往喜马拉
雅山，去看雪莲花。格桑花到喜马拉雅的时候，雪莲花已
经被冰雪覆盖成了洁白的花状。格桑花很伤心，便变成鲜
花陪伴在雪莲花之旁，之后她们永远在一起了。
				
			</div>
		</div>
		
		
			<div class="row ">
			<div class="col-md-1"></div>
				<div class="col-md-5">
				<img src="img/26.png" alt="" />
			</div>
			<div class="col-md-5 ">
				<sapn class="ni">蒙古传说</sapn><br />
				相传元代蒙军入藏，西藏划入中国元朝版图时期，蒙古人
把翠菊种子从中国北方带到西藏，从此在西藏生根开花。
那个时代是西藏历史上继吐蕃王朝灭亡之后出现的空前盛
世，被忽必烈赐为“国师”的八思巴那时缔造了辉煌的萨
迦，并成功地使元朝皇室接受了藏传佛教，八思巴成为元
朝帝师。蒙古人传播来的翠菊在寺院和很多人家种植盛开
，那个时代的人们就把叫“格桑花”。“格桑”在藏语完
整地词是“格巴桑布”，“格巴”意为时代、世代，“桑
布”就是昌盛的意思，连起来就是“盛世之花”的意思
				
			</div>
		</div>
	
	
	
	
	
		
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<div class="content1">
		
	
		
		
		
		
		
		
		<div class="poster-main">
		<div class="poster-btn poster-prev-btn"></div>
		<ul class="poster-list">
			<li class="poster-item">
				<a href="#"><img src="img/26.png"></a>
				
			</li>
			<li class="poster-item">
			<a href="#"><img src="img/27.png"></a>
				
			</li>
			<li class="poster-item">
				<a href="#"><img src="img/28.png"></a>
				
			</li>
			
		</ul>
		<div class="poster-btn poster-next-btn"></div>
	</div>
		
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
		
		
		
		
		
		<style>
			.poster-main{
				margin-left: -900px;
			}
		</style>
		<script type="text/javascript" src="images/fa.js">
	
</script>
<script src="./images/Carousel.js"></script>
<script>
//$(".poster-main").Carousel("init");

$(".poster-main").Carousel({
"width":1800,		
"height":392,		
"posterWidth":700,	
"posterHeight":422,
"scale":0.75,		
"speed": 1550,	
"autoPlay":true,	
"delay":1500,	
"verticalAlign":"middle"	
});

</script>
	</body>
</html>
