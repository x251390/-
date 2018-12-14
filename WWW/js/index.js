
//导航搜索
var searchtext = document.getElementById('searchtext');
var searchicon = document.getElementById('searchicon');
var morediv = document.getElementById('more');
var hideDiv = document.getElementsByClassName('hid-header')[0];
searchicon.onclick = function(){
		searchtext.style.transform = "translateX(-260px)";
		searchtext.style.opacity = "1";
		searchicon.style.display = "none";
//		searchicon.style.opacity = "0";

}
searchtext.onblur = function(){
		searchtext.style.transform = "translateX(0px)";
		searchtext.style.opacity = "0";
		searchicon.style.display = "block";
//		searchicon.style.opacity = "1";
}

//导航下拉
var navLi = document.getElementsByClassName('origin');
var navLi2 = document.getElementsByClassName('cultrue');
var navLi3 = document.getElementsByClassName('vacation');
var navLi4 = document.getElementsByClassName('traffic');
var navLi5 = document.getElementsByClassName('Travel');
var navdrop = document.getElementsByClassName('div');
navLi[0].onmouseover = function(){
	for(var i = 0; i < navdrop.length; i++){
		navdrop[i].style.height = 0 + 'px';
	}
	navdrop[0].style.height = '123px';
}
navLi[0].onmouseout = function(){
	for(var i = 0; i < navdrop.length; i++){
		navdrop[i].style.height = 0 + 'px';
	}
}

navLi2[0].onmouseover = function(){
	for(var i = 0; i < navdrop.length; i++){
		navdrop[i].style.height = 0 + 'px';
	}
	navdrop[1].style.height = '123px';
}
navLi2[0].onmouseout = function(){
	for(var i = 0; i < navdrop.length; i++){
		navdrop[i].style.height = 0 + 'px';
	}
}

navLi3[0].onmouseover = function(){
	for(var i = 0; i < navdrop.length; i++){
		navdrop[i].style.height = 0 + 'px';
	}
	navdrop[2].style.height = '154px';
}
navLi3[0].onmouseout = function(){
	for(var i = 0; i < navdrop.length; i++){
		navdrop[i].style.height = 0 + 'px';
	}
}

navLi4[0].onmouseover = function(){
	for(var i = 0; i < navdrop.length; i++){
		navdrop[i].style.height = 0 + 'px';
	}
	navdrop[3].style.height = '154px';
}
navLi4[0].onmouseout = function(){
	for(var i = 0; i < navdrop.length; i++){
		navdrop[i].style.height = 0 + 'px';
	}
}
navLi5[0].onmouseover = function(){
	for(var i = 0; i < navdrop.length; i++){
		navdrop[i].style.height = 0 + 'px';
	}
	navdrop[4].style.height = '154px';
}
navLi5[0].onmouseout = function(){
	for(var i = 0; i < navdrop.length; i++){
		navdrop[i].style.height = 0 + 'px';
	}
}

//导航淡出
var btncount = 0;
morediv.onclick = function(){
	btncount ++;
	if(btncount % 1 == 0){
		hideDiv.style.height = "100%";
	}
	if(btncount % 2 == 0){
		hideDiv.style.height = "0%";
		btncount = 0;
		for(var i = 0; i < navdrop.length; i++){
		navdrop[i].style.height = 0 + 'px';
		}
	}
	
}

//滚动条滚动时导航淡出

window.onscroll = function(){
	hideDiv.style.height = "0%";
	btncount = 0;
}








//底部二维码
var wechat = document.getElementsByClassName('right');
var qr = document.getElementsByClassName('qr');
	wechat[0].onmouseover = function(){
		var len = qr.length;
		for(var i = 0; i < len; i++ ){
			qr[i].style.display = "none";
			qr[i].style.opacity = "0";
		}
		
		qr[0].style.display = "block";
		qr[0].style.opacity = "1";
	}
	wechat[0].onmouseout = function(){
		var len = qr.length;
		for(var i = 0; i < len; i++ ){
			qr[i].style.display = "none";
			qr[i].style.opacity = "0";
		}
	}
	
	wechat[1].onmouseover = function(){
		var len = qr.length;
		for(var i = 0; i < len; i++ ){
			qr[i].style.display = "none";
			qr[i].style.opacity = "0";
		}
		qr[1].style.display = "block";
		qr[1].style.opacity = "1";
	}
	wechat[1].onmouseout = function(){
		var len = qr.length;
		for(var i = 0; i < len; i++ ){
			qr[i].style.display = "none";
			qr[i].style.opacity = "0";
		}
	}
	
	
	wechat[2].onmouseover = function(){
		var len = qr.length;
		for(var i = 0; i < len; i++ ){
			qr[i].style.display = "none";
			qr[i].style.opacity = "0";
		}
		qr[2].style.display = "block";
		qr[2].style.opacity = "1";
	}
	wechat[2].onmouseout = function(){
		var len = qr.length;
		for(var i = 0; i < len; i++ ){
			qr[i].style.display = "none";
			qr[i].style.opacity = "0";
		}
	}
	



//三绝轮播图
var img = document.getElementsByClassName('img');
var arrlistName = ['img1','img2','img3','img4','img5'];
function front(){
	arrlistName.push(arrlistName[0]);
	arrlistName.shift();
	for(var i = 0; i <arrlistName.length; i++){
	img[i].setAttribute('id',arrlistName[i]);
	}
}
function next(){
	arrlistName.unshift(arrlistName[4]);
	arrlistName.pop();
	for(var i = 0; i <arrlistName.length; i++){
	img[i].setAttribute('id',arrlistName[i]);
	}
}
var parentDiv = document.querySelector('.Sowing-map');
parentDiv.addEventListener('click',function(ev){
	if(ev.target.getAttribute('id') == "img3"){
		next();
	}else if(ev.target.getAttribute('id') == "img1"){
		front();
	}
	
});




//隐藏菜单列表(未完成)
//var origin = document.getElementsByClassName('listdown');
//var droplist = document.getElementsByClassName('droplist');
//var len = origin.length;
//var le = droplist.length;
//for(var i = 0; i < len; i++ ){
//	origin[i].onmouseover = function(){
//	for(var j = 0; j < le; j++)	{
//		droplist[j].style.height = '84px';
//	}
//	
//};
//}


