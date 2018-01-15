var url="";
function imgclick(){
	window.parent.postMessage(url,"*");
}

function StartTimer(u){
	url=u;
	setTimeout(function(){imgclick();},1000);
}
