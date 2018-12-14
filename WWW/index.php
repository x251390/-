<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>index</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<script src="js/jquery-3.3.1.js" type="text/javascript" charset="utf-8"></script>
 <!--< link  rel = “ icon ”  type = “ image / png ”  href = “ ../img / favicon.ico ” > <！ -商城图标- >-->
 	<link rel="icon"  type="image/png" href="img/交.png"/>
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
			*{
				padding:0;
				margin:0;
			}
		   .header{
		   	padding:0!important;
		   	position:relative;	
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
                 z-index: 99999;
                 width:100%;
                
		    	display: flex;
		    	flex-direction: row;
		    	align-items: center;
		    	padding:15px 15px 3px 38px;
		    	
		    }
		   .header .yi{
		    	width:80px;
		    	
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
		    	display: inline-block;
		    	padding-top: 17px;
		    	cursor: pointer;
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
		    .header ul li .jian {
    background: url(img/baijian.png) no-repeat 0px 40px;
    background-size: 80%;
    height: 35px;
    padding-top: 17px;
    cursor: pointer;
    padding-bottom: 45px;
    font-size: 22px;
    width: 25px;
    float: right;
    padding-bottom: 80px;
    padding-left: 50px;
}
		     
		    
		      
		       a{
        	color:black
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
        
        
		     /*这是头部*/
		    
		    
		    
		    /*这是主题*/
		   .content{
		   	margin-top:160px;
		   }
		   .content .right{
		   	padding: 0!important;
		   	margin: 0!important;
		   	border-style: none;
		   	float: right;
		   	margin-right: -15px!important;
		   	font-size: 12px;
		   	
		   }
		   .content .title{
		   	font-size: 60px;
		   	margin-top:40px;
		   	margin-bottom: 38px;
		   	letter-spacing: 8px;
		   	
		   
		   }
		   .content p{
		   	line-height: 24px;
		   	padding-right: 20px;
		   	padding-left: 58px;
		  
		   }
		   .content .jingli{
		   	padding-left: 63px;
		   }
		   .content .row>.col-md-7{
		   	background: url(img/zhong1.png) no-repeat 0px 50px;
		   }
		   .content .row>.col-md-7 .col-md-7{
		   	margin-left: 105px;
		   }
		   .content .lvxing{
		   	font-size: 26px;
		   	color:#545353;
		   	display:inline-block;
		   	margin-top: 135px;
		   	margin-left: 80px;
		   	  	
		   	margin-bottom: 295px;
		   }
		   
		   .content .xue{
		   	margin-top:50px;
		   	font-size: 12px;
		   	display: flex;
		   	flex-direction: row;
		   	text-align: center;
		   	align-items: center;
		   	color:#555454;
		   	background: url(img/san.png) no-repeat 0 0px;
		   	background-size: 100% 100%;
		   
		   	}
		   	 .content .xue .zhiding{
		   	 	font-size: 50px;
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
		   	display: inline-block;
		   	margin-top: 30px;
		   }
		   .biao li span{
		   	display: inline-block;
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
		   position:relative;
		   z-index: 55555;
		   display: inline-block;
		   float: left;
		   border-radius: 75px;
		   border:solid #eee 5px;
		   box-shadow: 0px 0px 20px blueviolet ;
		   
		   }
		   
		   .content .zhuan .col-md-6{
		   	padding:0!important;
		   } 
		   .content .zhuan .title{
		   	font-size: 63px;
		   	margin-bottom: 10px;
		   }
		    .content .zhuan .lvxing1{
		    	font-size: 50px;
		    	letter-spacing: 4px;
		    	width: 238px;
		    	margin-bottom: 40px;
		    }
		    .content .zhuan p{
		    	line-height: 20px;
		    	letter-spacing: 3px;
		    	padding-left: 0;
		    	margin-bottom: 15px;
		    }
		    .content .zhuan{
		    		padding-top: 100px;
		    	background: url(img/xuehua.png) no-repeat 100% 10px;
		         background-size:auto  80%;
		    	
		    }
		    .content .zhuan .san .col-md-8{
		    	    padding-left: 35px;
                    padding-top: 20px;
		    }
		     .content .zhuan .san .biao{
		     	font-size: 24px;
		     	letter-spacing: 1px;
		     	border:3px solid #eeeeee;
		     	border-top:none;
		     	margin-right: 30px;
		     	
		     }
		      .content .zhuan .san .biao li{
		      	height: 70px;
		      	line-height: 70px;
		      	border-top:3px solid #eeeeee;
		      	color:#555454;
		      	padding-left: 28px;
		      	background: url(img/jian.png) no-repeat 90%;
		      	
		      }
		      /*这是content*/
		     
		     
		     /*这是footer*/
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
		      	background: url(img/4.png) no-repeat;
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
        .a,.b,.c,.lvxing{
        	cursor: pointer;
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
			<span  class="yi center-block">达瓦更扎</span>
			<span class="pull-right"><a href="about.php">联系我们</a></span>
		</div>
	
		
		
		
		
		<ul class="list-unstyled list-inline">
			<li class="pull-left clearfix">
				<span style="display: block;">我们所做的</span>
				<span class="xian222" style="display: inline-block;margin-top: 17px;
		    	cursor: pointer;
		    	margin-bottom: 45px;
		    	font-size: 22px;"></span>
				<span class="left1">难以忘怀的经历 	</span><span  class="jian"></span>
				
			</li>
			<li class="pull-right clearfix">
				<span style="display: block;">我们的专业</span>
					<span class="xian2221" style="display: inline-block;margin-top: 17px;
		    	cursor: pointer;
		    	margin-bottom: 45px;
		    	font-size: 22px;"></span>
				<span class="right1">值得您的信赖 </span><span  class="jian"></span>
			
			</li>
		</ul>
		
		
		<img src="img/meilide.jpg" class="bei img-responsive"/>
	
	</div>
	
	<!--这是顶部-->
	
	<!--这是主题-->
	<div class="container-fluid content">
		<div class="row clearfix">
		<div class="col-md-7">
			<div class="col-md-7 col-xs-offset-2">
			<span class="jingli">难以忘怀的经历</span>
			<div class="title text-right">旅行没有界限</div>
			<p>我们为在各地的达瓦更扎旅行的客人创造了非凡的体验。我们
			与专业户外从事者和国外户外探险的专家和工作人员以及各代
			等一起工作探讨，以先前无法想象的规模提供策划娱乐
			</p>
			<p>我们独特的想法和特别的规划，让您的旅行充满不一样的色彩
                       。参与我们的讨论，旅行无极限，难以忘怀的经历</p>
			<div style="background: url(img/jian.png) no-repeat 430px 140px;">
				<span class="lvxing">旅行者的分享 </span>
				
				
			</div>
			</div>
			
			
			
			
		</div>
		<div class="col-md-5">
		<img src="img/san.jpg" class="right img-responsive"/>
		</div>
	
		
		</div>
	
        <div class="row xue">
        	<div class="col-md-6 col-md-offset-3">
        		<span class="zhu">主题旅行值得期待</span>
        		<div class="zhiding">制定的旅行.您值得等待充满意义</div>
        		<p class="wu">无限的可能性，壮观的旅程，难以忘怀的经历……随着世界触手可及，为什么要户外旅行？</p>
        		<p class="wo"> 我们定制的活动创造了迷人的发现和感受自然魔力，这是客人的独特品味。从特制主题的旅行路线到特色民族文化，每个   					细节都旨在感受文化和刺激感官</p>
        		<span class="dian">点击以解锁达瓦更扎体验</span>
        		<div class="yuan"><span class="yuan1"></span></div>
        		
        		
        	</div>
        	
        </div>	
	
	     <div class="row zhuan">
	     	<div class="col-md-6 col-sm-6 col-xs-6">
	     	<img src="img/ren.jpg" alt="" class="img-responsive"/>	
	     	</div>
	     	<div class="col-md-6 san">
	     		<div class="col-md-8 col-md-offset-2">
			     <span>我们的专家</span>
			     <div class="title">专家的建议</div>
			     <div class="lvxing1">旅行杂志为您服务</div>
			     <p>我们的存在是为了协助有想法的、喜欢户外运动的人群，及其专家的调整将旅行者的活动计划提升到一个全新的水平。
					为您服务我们很高兴，合作愉快。</p>
			     <p>每一个活动计划都会带来不一样的故事，不一样的回忆。同时可以更加融洽家庭，给孩子也是不同的体验，感受自然、
					感受藏族文化……</p>
	     	</div>
	     	<div class="col-md-8 col-md-offset-2">
	     		<ul class="biao list-unstyled">
	     			<li><span class="a">专家建议</span></li>
	     			<li><span class="b">规划和准备</span></li>
	     			<li><span class="c">有灵魂的员工</span></li>
	     		</ul>
	     	</div>
	     		</div>
	     	 </div>
	     	 <!--这是content-->
	     	 
	     	 
	     	 <!--这是footer-->
	     	 <?php include('public/footer.php');?>
	     	 
	     	 
	     	 
	     	 
	     	
	</div>
	
	</div>
	</body>
		<script>
		window.onload=function(){
			var  height=$(window).height();
		var  width=$(window).width()
		
		
		$(".quan").css("width",width+34+"px");
		$(".bei").css("height",height+"px");
		$("body").css("height",height+"px");
		$(".bei").css("width",width+20+"px");
		$("#menu3").css("height",height+"px");
				$("#menu3").css("width",width*0.4+"px");
		var b=null;
			$(".lvxing").click(function(){
				
				
				b=setInterval(function(){
					
					var left=parseInt($(".lvxing").css("margin-left"));
				var num =left+10;
				if(num<=250){
					$(".lvxing").css("margin-left",num+"px")
				}
				else{
				$(".lvxing").css("margin-left",250+"px");
				setTimeout("javascript:location.href='http://localhost/lvxingzhezhuanlan.php'", 1000); 
				
					
				}
				console.log(left);
		    		
		    	},70)	;
		    	
				})
				
				$(".header .left1").click(function(){
					setInterval(function(){
					var width=parseInt($(".xian222").css("width"));
					if(width<=300){
						$(".xian222").css("background","red");		
					$(".xian222").css("width",width+10+"px");	
					}	
					else{
					
				setTimeout("javascript:location.href='http://localhost/qiutian.php'", 1000); 	
					}
					
					},30)
				})
				
				
				
				
				$(".header .right1").click(function(){
					setInterval(function(){
					var width=parseInt($(".xian2221").css("width"));
					if(width<=300){
						$(".xian2221").css("background","#5BC0DE");		
					$(".xian2221").css("width",width+10+"px");	
					}	
					else{
					
				setTimeout("javascript:location.href='http://localhost/about.php'", 1000); 	
					}
					
					},30)
				})
				
				
				
				var c=null;
					$(".a").click(function(){
				c=setInterval(function(){
					
					var left=parseInt($(".a").css("margin-left"));
				var num =left+10;
				if(num<=160){
					$(".a").css("margin-left",num+"px")
				}
				else{
				$(".a").css("margin-left",160+"px");
				setTimeout("javascript:location.href='http://localhost/zhuanjiajianyi.php'", 1000); 
				
					
				}
				
				console.log(left);
		    		
		    	},70)	;
		    	
				})
				
				
				var d=null;
					$(".b").click(function(){
				d=setInterval(function(){
					
					var left=parseInt($(".b").css("margin-left"));
				var num =left+10;
				if(num<=160){
					$(".b").css("margin-left",num+"px")
				}
				else{
				$(".b").css("margin-left",160+"px");
				setTimeout("javascript:location.href='http://localhost/sheying.php'", 1000); 
				
					
				}
				console.log(left);
		    		
		    	},70)	;
		    	
				})
				
				
				var e=null;
					$(".c").click(function(){
				e=setInterval(function(){
					
					var left=parseInt($(".c").css("margin-left"));
				var num =left+10;
			
					if(num<=160){
					$(".c").css("margin-left",num+"px")
				}
				else{
				$(".c").css("margin-left",160+"px");
				setTimeout("javascript:location.href='http://localhost/qiugao.php'", 1000); 
				
					
				}
				
				console.log(left);
		    		
		    	},70)	;
		    	
				})
				
				
				
				
				
				
				
				
				
				
				
				
				
		  $(".yuan1").click(function(){
		  	
		  	
		  document.onmousemove=function(ev){
					var oevent=event||ev;
					
					if(parseInt($(".yuan1").css("margin-left"))==340){
					setTimeout("javascript:location.href='http://localhost/facts.php'", 10); 	
					}
					else{
						$(".yuan1").css("margin-left",oevent.clientX-637+"px")
					}
			}
		  	
		  	
		  	
		  	
		  	
		  	
		  	
		  	
		  	
		  	
		  })
		  
	
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
	<script src=js/left.js></script>
</html>
