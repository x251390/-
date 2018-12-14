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
              <span>独具特色的藏式火锅</span>
                
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
				<div>提到火锅，可能首先想到的是重庆、四川的辣味火锅，因为那里是火锅的发源地。其实西藏人也爱
吃火锅，主要食材为高山草原特有的牛肉，猪肉和菌类，素菜。藏式火锅的汤底色泽清亮，微微泛
着奶白色，因为汤底是用牦牛骨头敖制而成，藏式火锅都是清汤，汤底的好吃与否是最关键的因素</div>
<img src="img/jing1.jpg" class="chi"/></div>

		
	</div>
	
	
	
	<div class="content row">
		<div class="col-md-2"></div>
			<div class="col-md-8">
				<div>最传统的藏式火锅一开始用的是陶制容器，后来从内地引入了涮羊肉用的大铜锅，炭火也变成了电
磁炉。与其他火锅不同的是，藏式火锅是把各种荤菜、素菜提前煮熟然后整齐摆放在锅中，加入牦
牛骨高汤一起炖煮，有点像北方的暖锅。</div>
<img src="img/jing2.jpg" class="chi"/></div>

		
	</div>
	
	
	
	
	
	
	
	
	
	
	
	<div class="content row">
		<div class="col-md-2"></div>
			<div class="col-md-8">
				<div>正宗的藏式火锅里共有十样菜，分别是鸡肉、牛肉丸、藏香猪肉、牦牛舌、牦牛肉、胡萝卜、木耳
、白萝卜、青笋、土豆片，所有的肉类都是已经提前煮熟的。码放整齐后，锃亮的大铜锅立刻变成
了一件艺术品，锅内环绕一圈的各式菜品色彩斑斓，搭配合理，格外赏心悦目。在这十样菜的底下
，还有海带、粉丝、大白菜以及香菇等垫菜。</div>
<img src="img/jing3.jpg" class="chi"/></div>

		
	</div>
	
	
	
	
	
	
	
	
	<div class="content row">
		<div class="col-md-2"></div>
			<div class="col-md-8">
				<div>用当地出产的牦牛小腿骨头和药材手掌参一起入锅慢火熬汤，在熬制的过程中需要不断去掉汤表面
的浮油，才能保证汤的色泽清亮，味道可口，汤汁像牛奶一样润白。除此之外，还要在汤内加入一
些秘制配料，文火慢炖七八个小时，熬制出来的牦牛骨汤方可鲜香浓郁。在等待开锅的时间里，可
以专门乘上一碗牦牛骨汤细细品味。据说，当地的藏式火锅店每天熬制的牦牛骨汤也只供当天使用
，从来不过夜，否则汤的口味就会改变，进而影响整个火锅的口感。</div>
<img src="img/jing4.jpg" class="chi"/></div>

		
	</div>
	
	
	
	
	
	
	
	
	<div class="content row">
		<div class="col-md-2"></div>
			<div class="col-md-8">
				<div>至于藏式火锅的油碟反而会比较简单，很多本地人往碗里加点汤底就可以了，一般并不需要添加什
么，这也和藏族人民喜欢保持食物天然味道的习惯有关，当然如果客人需要，也可以添加点葱、蒜
、香菜、辣酱等。</div>
<img src="img/jing5.jpg" class="chi"/>
<div style="text-align: center;">喜欢吃火锅，不需要理由</div></div>

		
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
	</body>
</html>
