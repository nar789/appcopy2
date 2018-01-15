function init(){
	$.post("geturl.php",{},function(data,status){
		var j=JSON.parse(data);
		for(var i=1;i<=appcnt;i++)
		{
			switch(i){
				case 1:
					document.getElementById('img'+i).src=j.imgurl1;
					document.getElementById('url'+i).value=j.url1;
					break;
				case 2:
					document.getElementById('img'+i).src=j.imgurl2;
					document.getElementById('url'+i).value=j.url2;
					break;
				case 3:
					document.getElementById('img'+i).src=j.imgurl3;
					document.getElementById('url'+i).value=j.url3;
					break;
				case 4:
					document.getElementById('img'+i).src=j.imgurl4;
					document.getElementById('url'+i).value=j.url4;
					break;
				case 5:
					document.getElementById('img'+i).src=j.imgurl5;
					document.getElementById('url'+i).value=j.url5;
					break;
				case 6:
					document.getElementById('img'+i).src=j.imgurl6;
					document.getElementById('url'+i).value=j.url6;
					break;
				case 7:
					document.getElementById('img'+i).src=j.imgurl7;
					document.getElementById('url'+i).value=j.url7;
					break;
				case 8:
					document.getElementById('img'+i).src=j.imgurl8;
					document.getElementById('url'+i).value=j.url8;
					break;
				case 9:
					document.getElementById('img'+i).src=j.imgurl9;
					document.getElementById('url'+i).value=j.url9;
					break;
				case 10:
					document.getElementById('img'+i).src=j.imgurl10;
					document.getElementById('url'+i).value=j.url10;
					break;
				case 11:
					document.getElementById('img'+i).src=j.imgurl11;
					document.getElementById('url'+i).value=j.url11;
					break;

			}	
		}
	});

}
function update(idx){
	var url="";
	url=document.getElementById('url'+idx).value;

	$.post("updateurl.php",{
		no:idx,
		url:url
	},function(data,status){
		alert(data);
	})
}

function imgclick(img){
	location.href=img.src;
}
window.onload=init();
