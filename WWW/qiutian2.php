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
				<sapn class="ni">高山杜鹃</sapn>
			
				<div>	（学名：Rhododendron lapponicum (L.) Wahl
.）：常绿小灌木，高可达1米，分枝繁密，伏地或
挺直。叶常散生于枝条顶部，革质，上面浅灰至暗
灰绿色，下面淡黄褐色至红褐色，叶柄被鳞片。花
序顶生，伞形，有花数朵；花芽鳞脱落；花萼小，
带红色或紫色，花冠宽漏斗状，淡紫蔷薇色至紫色
，罕为白色，花丝基部被绵毛；蒴果长圆状卵形，
5-7月开花，9-10月结果。
生于高山、苔原、多岩石地方或沼泽地带。产中国
东北大兴安岭、长白山及内蒙古。加拿大、美国阿
拉斯加也有。</div>
				
			</div>
			<div class="col-md-5">
				<img src="img/du.png" alt="" />
			</div>
			
			
		</div>
		
		<!--第二个-->
	<div class="row ">
			<div class="col-md-1"></div>
				<div class="col-md-5">
				<img src="img/du1.png" alt="" />
			</div>
			<div class="col-md-5 ">
				<sapn class="ni">形态特征</sapn>
				<span>(常绿小灌 )</span><br/>
							木，高20-45（-100）厘米，分枝繁密，短或细长，伏地
或挺直。幼枝密生锈棕色鳞片并杂有细柔毛，后渐脱落。
叶芽鳞早落。叶常散生于枝条顶部，革质，长圆状椭圆形
至卵状椭圆形，或长圆状倒卵形，长4-15（-25）毫米，
宽2-5（-9）毫米，顶端圆钝，有短突尖头，基部宽楔形，
边缘稍反卷，上面浅灰至暗灰绿色，无光泽，密被几邻接
或重叠的灰白色鳞片，下面淡黄褐色至红褐色，密被淡黄  
期9-10月。
			</div>
		</div>
		
		       
	
		
			<div class="row ">
			<div class="col-md-1"></div>
				
			<div class="col-md-5 ">
				<sapn class="ni">生长环境</sapn><br/>
					土壤：杜鹃花对土壤要求是疏松、呈酸性pH值4-6，
野生映山红、满山红适生pH值4.5左右的酸性土，
大部分杜鹃喜pH值4.5-6.0，研究报道pH4-5时扦
插成活率最高，但茎生长与根系生长的长度和质量
pH4时最好。在pH值大于7以上及粘重土让生长不好
光照：光补偿点和光饱和点是植物对光照要求的定
量指标：相对光强度达到60%左右时，杜鹃生长、
发育、开花达到最佳。杜鹃喜光，但又怕强光，是
属半荫偏阳植物。
				
			</div>
			<div class="col-md-5">
				<img src="img/du2.png" alt="" />
			</div>
		</div>
		
		
			<div class="row ">
			<div class="col-md-1"></div>
				<div class="col-md-5">
				<img src="img/du3.png" alt="" />
			</div>
			<div class="col-md-5 ">
				<sapn class="ni">主要价值</sapn><br />
				杜鹃枝繁叶茂，绮丽多姿，萌发力强，耐修剪，根桩奇特，
是优良的盆景材料。，<br/>
园林中最宜在林缘、溪边、池畔及岩石旁成丛成片栽植，
也可于疏林下散植，是花篱的良好材料，可经修剪培育成各
种形态。<br/>
在花季中绽放时即使杜鹃总是给人热闹而喧腾的感觉，而不
是花季时，深绿色的叶片也很适合栽种在庭园中做为矮墙或
屏障。
				
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
