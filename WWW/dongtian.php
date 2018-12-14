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
                <li><a href="baixueaiai.php">白雪皑皑</a></li>
                <li><a href="dongtian.php">达瓦更扎的冬天</a></li>
              
              </ul>
            </div>
		
		
		<style>
			.dropdown-menu{
	left:50%!important;
	margin-left: -80px;
	text-align: center;
	
}
.content{
	display: flex;
	flex-direction: column;
	align-items: center;
	text-align: center;
	font-size: 20px;
	line-height: 35px;
	letter-spacing: 2px;
}
.content div{
	margin: 20px;
}
.content img{
	width:450px;
	height: 300px;
}
#menu3{
	text-align: left;
}
		</style>
		
		
		
		
		
		
		达瓦更扎邀你赏雪<br/>

	</div>
	
	<div class="row">
		<div class="col-md-2"></div>
	<div class="content col-md-8">
		<div class="er">
			如果说达瓦更扎的：<br/>
秋天红得如火、夏天凉得似春、春天绿得像画，<br/>
那么阿坝州的冬天，就是对四季的最好总结。<br/>
雪花落下、一片皑皑；<br/>
犹如纯洁国度，洗净几季的尘埃；<br/>
今天设计者就带你看看阿坝州这几地的雪景。<br/>
感受置身达瓦更扎，那不一样的心境；<br/>
		</div>
		<div class="er">
			我们不能选择冬天是否到来，但可以选择在什么地方度过冬天。与走向南方追寻温暖阳光不同，走进达瓦<br/>
更扎得到的是一片静谧。
		</div>
		<img src="img/dong1.png" alt="" />
		<div>冬天走进达瓦更扎，不知不觉地就忘记了拿起相机。</div>
		<img src="img/dong2.png" alt="" />
		<div class="er">整个大自然都已经冬眠了，只有人还在忙碌着。游人走进牟尼沟，都能在藏家客栈里得到热情款待。<br/>
			这个时候的牟尼沟居民，面对陷入沉眠的大自然，也如异乡人一般寂寞，见到外面来的游客就想聚在一<br/>
起喝点热乎的，聊点新鲜的事情。对于他们来说，冬天是否到来不是他们能选择的，<br/>
是可以选择和什么样的人一起度过冬天。<br/>
			
			
		</div>
		<img src="img/dong3.png" alt="" />
		
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
