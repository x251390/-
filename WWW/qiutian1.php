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
	了解了解<br />
花名个性的山花


		
	</div>
	
			<style>
			.dropdown-menu{
	left:50%!important;
	margin-left: -80px;
	text-align: center;
	
}

		</style>
	
	
	
	
	
	<!--第一个-->
	<div class="row ">
			<div class="col-md-1"></div>
			<div class="col-md-5 ">
				<sapn class="ni">狼毒花</sapn>
				<span>(多年生草本植物)</span>
				<div>	多年生草本植物，叶子长圆型，轮生，花单性，结蒴果
，扁圆形。根有毒，可入中药，有祛痰、止痛等作用。
多见于我国青藏高原、黄土高原，其根、茎、叶均含大
毒，可制成药剂外敷，能消积清血。亦可做农药，用以
防治螟虫、蚜虫。但人畜绝不能食之。狼毒花根系大，
吸水能力极强，能适应干旱寒冷气候，周围的草本植物
很难与之抗争。 其根系越发达，毒性越大，瘦果褐棕
色近卵形。</div>
				
			</div>
			<div class="col-md-5">
				<img src="img/lang1.png" alt="" />
			</div>
			
			
		</div>
		
		<!--第二个-->
	<div class="row ">
			<div class="col-md-1"></div>
				<div class="col-md-5">
				<img src="img/lang2.png" alt="" />
			</div>
			<div class="col-md-5 ">
				<sapn class="ni">形态特征</sapn>
				<span>(多年生草本)</span><br/>
							瑞香狼毒，又名：断肠草、打碗花、山丹花、闷头花、一
把香。多年生草本，高20～40厘米。根圆柱形。茎丛生，
下部几木质，带褐色或谈红色。单叶互生，较密；狭
卵形至线形，长1～3厘米，宽2～10毫米，全缘，两面无
毛；老时略带革质；叶柄极短。头状花序顶生，直径约2.
5厘米，花多数；萼常呈花冠状，白色或黄色，带紫红色，
萼筒呈细管状，先端5裂，裂片平展，矩圆形至倒卵形；
雄蕊10，成2列着生于喉部；子房上位，上部密被细毛，
花柱短，柱头头状。果卵形，为花被管基部所包。种子1
枚。花期5～6月。
			</div>
		</div>
		
		
	
		
			<div class="row ">
			<div class="col-md-1"></div>
				
			<div class="col-md-5 ">
				<sapn class="ni">主要种类</sapn><br/>
					瑞香狼毒：多年生草本，高20～40厘米。根圆柱形
。茎丛生，平滑无毛，下部几木质，带褐色或谈红
色。<br />

狼毒大戟：多年生草本，高15～40厘米，全体含白
色乳汁。根肉质肥大。茎下部叶鳞片状，膜质，淡
褐色；<br />
月腺大戟：多年生草本，高30～50厘米。叶互生；
叶片狭椭圆形或椭圆状披针形，长4～8厘米，宽1.
5～2厘米，先端圆，基部楔形。
				
			</div>
			<div class="col-md-5">
				<img src="img/lang3.png" alt="" />
			</div>
		</div>
		
		
			<div class="row ">
			<div class="col-md-1"></div>
				<div class="col-md-5">
				<img src="img/lang4.png" alt="" />
			</div>
			<div class="col-md-5 ">
				<sapn class="ni">主要价值</sapn><br />
				白狼毒：为狼毒大戟、月腺大戟的干燥根，都切成类圆形的
块片。《本草》所载的狼毒，系瑞香科瑞香狼毒，故应以此
为正品，但多数地区所用的狼毒，为大戟科的白狼毒。
【化学成分】瑞香狼毒的根含甾醇、酚性成分、氨基酸、三
萜类及有毒的高分子有机酸。可能还含蒽甙。狼毒大戟根含
树脂10.46%及1～2%硬性橡胶。
【药理作用】从瑞香狼毒根中提得一种狼毒甙，原称川狼毒
素的抗菌物质，并称其毒性很低。狼毒煎剂灌胃6克(生药)
/公斤，可提高小鼠痛阈20～50%(电击小鼠尾法及热板法)。
叶、根中可能含有蒽甙，能增强小肠蠕动，可治疗便秘。
狼毒大戟的根可用以杀蛆，灭孑孓。20%的煎剂对麻醉犬的
呼吸、血压及离体蛙心、肠管均无甚作用。
【功用主治】逐水祛痰，破积杀虫。治水肿腹胀，痰、食、
虫积，心腹疼痛，慢性气管炎，咳嗽，气喘，淋巴结、皮肤
、骨、副睾等结核，疥癣，痔瘘。
				
			</div>
		</div>
	
	
	
	
	
		
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<div class="content1">
	
		
		
		
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
	</body>
</html>
