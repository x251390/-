<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>藏区文化</title>
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
		   
		  
		    .header .pull-right{
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
        	width:51%;
        	margin: 0 auto;
        	text-align: center;
        }
          .content img{
          	width: 92%;
          }
                    .content  div{
                    	font-size:16px;
                    	line-height: 50px;
                    	letter-spacing: 1px;
                    }
          .content .si{
          	font-size: 32px;
          	margin-bottom: 25px;
          	margin-top: 105px;
          }
        
        
        .content1{
        	padding: 0px 25px 0 25px;
        	font-size: 16px;
        	letter-spacing: 1px;
        	line-height: 35px;
        }
        .content1 .pull-left{
        	padding-right: 22px;
        		width:46%;
        		height:600px;
        		
        }
        .content1 img{
        	height:600px;
        }
        .content1 .pull-right{
        	padding-left: 22px;
        	width:46%;
        	
        }
         .content1 img{
         	width:100%;
         }
         .content1>div{
         	margin-top: 170px;
         }
         .content1 p{
         	margin-top: 25px;
         }
          .content1 span{
          	font-size: 42px;
          }
          .content1 .yi{
          	
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
        } a{
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
				<span  class="yi center-block "><a href="facts.php">景区概况</a></span>
				<span  class="yi center-block "><a href="mingfeng.php">民风民俗</a></span>
				<span  class="yi center-block "><a href="zhangquwenhua.php" class="active">藏区文化</a></span>
				<span  class="yi center-block "><a href="jingqujiesao.php" >景区介绍</a></span>
			</div>
			
			
		
			<span class="pull-right">联系我们</span>
		</div>
		
		<img src="img/xia.png" class="bottom" alt="" />
		<div class="ming">山脚下的硗碛藏族乡嘎日村</div>
		<img src="img/藏区文化.jpg" class="bei img-responsive"/>
	
	</div>
	
	
	
	    <div class="content">
	    	<div class="si">四川省雅安市宝兴县硗碛藏族乡嘎日村</div>
	    	<div><img src="img/6.png" alt="" /></div>
	    	<div>硗碛是距离成都最近的少数民族乡，平均海拔2500米以上，
				</div>
	    	<div>面积880多平方公里，人口仅5000余人。1935年，中国工农红军从这里出
				</div>
	    	<div>发翻越夹金山，谱写了不朽的篇章。走进硗碛，别具一格的藏族民居锅庄楼，浓</div>
	    	<div>香飘溢的酥油茶，独具风格的藏族服饰，绚丽多彩的藏乡风情，勤劳朴实的藏族同</div>
	    	<div>胞，共同编织成靓丽的人文风景。</div>
	    	
	    	
	    </div>
	    
	    
	    
	    <div class="row">
	    	<div class="col-md-2"></div>
	    <div class="content1 col-md-8">
	   <!--第一个--> 
	<div class="clearfix row">
	    	<div class="pull-left col-md-6">
	    		<img src="img/7.png" alt="" />
	    	</div>
	    	<div class="pull-right col-md-6 yi">
	    		<span>风马旗</span>
	    		<p>
	    			这些方形、角形、条形的小旗被有秩序地固定在门首、绳索、族幢、
树枝上，在大地与苍穹之间飘荡摇曳，构成了一种连地接天的境界。
 成串成串拉挂在亭子和松树间的彩旗，印满密密麻麻的藏文
咒语、经文、佛像、吉祥物图形。它们就是风靡藏区的“风马旗”。
	    		</p>
	    		<p>藏区各山河路口寺庙民舍等处都可见到印有经文图案成串系于绳索
之上的小旗，这一面面小旗在藏语中称为“隆达”，也有人称之为
“祭马”、“禄马”、“经幡”、“祈愿幡”，不过，人们更习惯
称它为“风马旗”，因为“隆”在藏语中是风的意思，“达”是马
的意思。</p>
	    		<p>”藏民族认为雪域藏地的崇山峻岭、大江莽原的守护神是天上的赞
神和地上的年神，他们经常骑着风马在雪山、森林、草原、峡谷中
巡视，保护雪域部落的安宁祥和，抵御魔怪和邪恶的入侵。</p>
	    		
	    	</div>
	    </div>
	    
	    <!--第二个-->
	      <div class="clearfix row">
	    	<div class="pull-left col-md-6 yi">
	    		<span>服饰特色</span>
	    		<p>藏族服饰无论男女至今保留完整。不同的地域，有着不同的服饰。特点是长袖
、宽腰、大襟。妇女冬穿长袖长袍，夏着无袖长袍，内穿各种颜色与花纹的衬
衣，腰前系一块彩色花纹的围裙。藏族同胞特别喜爱“哈达”，把它看作是最
珍贵的礼物。“哈达”是雪白的织品，一般宽约二三十厘米、长约一至两米，
用纱或丝绸织成，每有喜庆之事，或远客来临，或拜会尊长、或远行送别，都
要献哈达以示敬意。</p>
	    		<p>藏袍是藏族的主要服装款式，种类很多，从衣服质地上可分锦缎、皮面、氆氇
、素布等、藏袍花纹装饰很讲究，过去僧官不同品级，严格区分纹饰。藏袍较
长，一般都比身高还长，穿时要把下部上提，下摆离脚面有三、四十公分高、
扎上腰带。藏袍可分牧区皮袍、色袖袍、农区为氆氇袍，式样可分长袖皮袍，
工布宽肩无袖、无袖女长袍和加珞花领氆氇袍，男女穿的衬衫有大襟和对襟两
种，男衬衫高领女式多翻领，女衫的袖子要比其他衣袖长40公分左右。跳舞时
放下袖子，袖子在空中翩翩起舞，非常优美。</p>
	    	</div>
	    		<div class="pull-right col-md-6">
	    	<img src="img/8.png" alt="" />	
	    		
	    	</div>
	    </div>
	    <!--第三个-->
<div class="clearfix row">
	    	<div class="pull-left col-md-6">
	    		<img src="img/9.png" alt="" />
	    	</div>
	    		<div class="pull-right col-md-6 yi">
	    		<span>民族礼仪</span>
	    		<p>藏族在迎接客人时除用手蘸酒弹三下外，还要在五谷斗里抓一点青
稞，向空中抛撒三次。酒席上，主人端起酒杯先饮一口，然后一饮
而尽，主人饮完头杯酒后，大家才能自由饮用。饮茶时，客人必须
等主人把茶捧到面前才可以伸手接过饮用，否则会被认为失礼。吃

饭时讲究食不满口，嚼不出声，喝不作响，拣食不越盘。用羊肉待
客，以羊脊骨下部带尾巴的一块肉为贵，要敬给最尊敬的客人。制
作时还要在尾巴肉上留一绺白毛，表示吉祥如意。</p>
	    		
	    		
	    	</div>
	    </div>
	    <!--第四个-->
	<div class="clearfix row">
	   	<div class="pull-left col-md-6 yi">
	    		<span>饮食习惯</span>
	    		<p>以青稞等制作的糌粑，喝酥油茶、青稞酒是农牧民的主要食品。糌粑是由青稞
或豌豆炒熟后磨制而成的炒面，把糌粑用酥油茶或青稞酒拌和，用手捏成小团
就可以吃了。酥油茶是把砖茶的茶叶倒入1米长的木质长筒内，加上盐巴和酥
油，用长筒上下冲击，使其各种成分均匀融合而成。藏族同胞宁可三月无肉，
不可一天无酥油茶。青稞酒是用当地出产的青稞酿制而成的一种低度酒，男女
老少皆喜欢，食物多用肉食和奶制品，不少人爱吃风干的牛羊肉。</p>
	    	</div>
	    		<div class="pull-right col-md-6">
	    	<img src="img/10.png" alt="" />	
	    		
	    	</div>
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
