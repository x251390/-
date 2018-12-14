<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>关于我们</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<script src="js/jquery-3.3.1.js" type="text/javascript" charset="utf-8"></script>

		<script src="js/bootstrap.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/echarts.js" type="text/javascript"></script>
		<style>
			
				body {  overflow-x: hidden; overflow-y: auto;
				font-size: 16px;
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
		       .header .yi a{
		       	padding-left: 45px;
		       }
		     .header .yi .active{
		    	font-size: 22px;
		    	color: #0a78d6!important;
		    }
		    .header .bottom{
		    	position: absolute;
		    	top:65%;
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
        
       
       
       .item img{
       	width:100%;
       }
        
        
        
		   	.content .xue div{
		   		text-align: left;
		   		margin-bottom: 15px;
		   	}
		   	 .content .xue{
		   position: relative;
		   font-size: 16px;
		   text-align: center;
		   	color:#555454;
		   	background: url(img/关于我们.png) no-repeat 0 0px;
		   	background-size: 100% 100%;
		   padding-bottom: 150px;
		   	}
		   	
		   	.zhu1{
		   		left:50%;
		   		margin-left: -73px;
		   		letter-spacing: 10px;
		   		border:2px #dbd9d9 dashed;
		   		padding: 8px 45px;
		   		top:102%;
		   	}
		   	
		   	 .content .xue .zhiding{
		   	 	font-size: 42px;
		   	 	display: block;
		   	 		   text-align: center;
		   	 	letter-spacing: 14px;
		   	 	margin-top:20px;
		   	 	margin-bottom: 34px;
		   	 } 
		   	  .content .xue .wu{
		   	  	font-size: 22px;
		   	  	letter-spacing: 4px;
		   	  	line-height: 35px;
		   	  }
		   	  .content .xue .wo{
		   	  	font-size: 14px;
		   	  	letter-spacing: 1px;
		   	  }
		  .content .xue .dian{
		  	padding-top: 85px;
		  	color:#cbcaca;
		  	display: block;
		  		font-size: 14px;
		  }
		   .content .xue .zhu{
		   	display: block;
		   		   text-align: center;
		   	margin-top: 30px;
		   }
		   .content .xue .yuan{
		   	background: url(img/suo.png) no-repeat 80px;
		   	height:75px;
		   	width:57%;
		   	margin: 0 auto;
		   	margin-top: 10px;
		   	margin-bottom: 220px;
		   }
		   .content .xue .yuan1{
		   height:75px;
		   width:75px;
		   display: inline-block;
		   float: left;
		   border-radius: 75px;
		   border:solid #eee 5px;
		   }
		   
		   .zhu1{
		   	position: absolute;
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
		    }
		    .footer1 ul li{
		    	width:32%;
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
				
				<span  class="yi center-block "><a href="family.php" class="active">关于我们</a></span>
				
						
								
			</div>
			
			
		
			<span class="pull-right">联系我们</span>
		</div>
		
		
		
	
	</div>
	<div class="content">
	
             <div class="row xue">
        	<div class="col-md-6 col-md-offset-3">
        		<span class="zhu">我们的故事</span>
        		<span class="zhiding">美丽的神山之旅</span>
		        		<div>我们是达瓦更扎官方网站和策划旅行的创始人和董事。
</div>
		        		<div>凭借多年为高端客户提供大型创意活动的经验，我们知道探索旅游行业迫切需要专业的活动技巧和专业知
识，以全新的视角向世界展示客人。
</div>
		        		<div>我们使客户能够以全新的体验激励，娱乐和教育他们的客人 - 经过实践检验的方法，帮助他们提供比以往
更大，更好，更雄心勃勃的活动。</div>
		        		<div>自2018年以来，我们为在世界各地的探索自然旅行的客人举办了非凡的活动 - 从古老的文字文化达瓦更
扎到人们随口就说出的美丽的神山......  <br />
甚至在山顶上进行的史诗般的沉浸式云海、日出、星空活动。</div>
		        		<div>探索达瓦更扎的方法......</div>
		        		<div>看到这种新方法的影响，我们热衷于与更广泛的超级游戏行业分享。
</div>
		        		<div>我们与豪华酒店集团合作，通过合适的团队，正确的支持和合适的专业知识提高对可实现目标的认识。</div>
		        		<div>在为期五天的自我管理领导课程中，我们与该认证培训师密切合作，为基金会活动管理模块提供支持。</div>
		        		<div>这个实践课程帮助雄心勃勃，前瞻性思维的队长和工作人员超越平凡，超越客人的期望 - 提供大量的灵感
，技巧和工具，帮助他们改变他们的活动计划。
</div>
		        		<div>有关自我管理领导力课程的详细信息-并获得美丽的神山之旅的火锅坊-访meilide shenshanzhilv.com，
电子邮件infomeilide shenshanzhilv@.com或致电+147 800 11380。</div>
        		
        		<div class="zhu1"><a href="index.html">主页</a></div>
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
		var height1=$(".content .col-md-4 .pull-right").height();
		$(".content .col-md-4 .pull-left").css("height",height1+"px");

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

       
       
       
       
  