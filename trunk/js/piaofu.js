var w3c = (document.getElementById) ? true : false;
var agt = navigator.userAgent.toLowerCase();
var ie = ((agt.indexOf("msie") != -1) && (agt.indexOf("opera") == -1) && (agt.indexOf("omniweb") == -1));
var mymovey = new Number();
function IeTrueBody(){
	return (document.compatMode && document.compatMode!="BackCompat") ? document.documentElement : document.body;
}
function GetScrollTop(){
	return ie ? IeTrueBody().scrollTop : window.pageYOffset;
}
