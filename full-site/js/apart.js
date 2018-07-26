/*! maphilight 21-10-2015 */
!function(a){var b,c,d,e,f,g,h,j,k,l,m;if(c=!!document.createElement("canvas").getContext,b=function(){var a=document.createElement("div");a.innerHTML='<v:shape id="vml_flag1" adj="1" />';var b=a.firstChild;return b.style.behavior="url(#default#VML)",b?"object"==typeof b.adj:!0}(),!c&&!b)return void(a.fn.maphilight=function(){return this});if(c){j=function(a){return Math.max(0,Math.min(parseInt(a,16),255))},k=function(a,b){return"rgba("+j(a.substr(0,2))+","+j(a.substr(2,2))+","+j(a.substr(4,2))+","+b+")"},d=function(b){var c=a('<canvas style="width:'+a(b).width()+"px;height:"+a(b).height()+'px;"></canvas>').get(0);return c.getContext("2d").clearRect(0,0,a(b).width(),a(b).height()),c};var n=function(a,b,c,d,e){if(d=d||0,e=e||0,a.beginPath(),"rect"==b)a.rect(c[0]+d,c[1]+e,c[2]-c[0],c[3]-c[1]);else if("poly"==b)for(a.moveTo(c[0]+d,c[1]+e),i=2;i<c.length;i+=2)a.lineTo(c[i]+d,c[i+1]+e);else"circ"==b&&a.arc(c[0]+d,c[1]+e,c[2],0,2*Math.PI,!1);a.closePath()};e=function(b,c,d,e,f){var g=b.getContext("2d");if(e.shadow){g.save(),"inside"==e.shadowPosition&&(n(g,c,d),g.clip());var h=100*b.width,i=100*b.height;n(g,c,d,h,i),g.shadowOffsetX=e.shadowX-h,g.shadowOffsetY=e.shadowY-i,g.shadowBlur=e.shadowRadius,g.shadowColor=k(e.shadowColor,e.shadowOpacity);var j=e.shadowFrom;j||(j="outside"==e.shadowPosition?"fill":"stroke"),"stroke"==j?(g.strokeStyle="rgba(0,0,0,1)",g.stroke()):"fill"==j&&(g.fillStyle="rgba(0,0,0,1)",g.fill()),g.restore(),"outside"==e.shadowPosition&&(g.save(),n(g,c,d),g.globalCompositeOperation="destination-out",g.fillStyle="rgba(0,0,0,1);",g.fill(),g.restore())}g.save(),n(g,c,d),e.fill&&(g.fillStyle=k(e.fillColor,e.fillOpacity),g.fill()),e.stroke&&(g.strokeStyle=k(e.strokeColor,e.strokeOpacity),g.lineWidth=e.strokeWidth,g.stroke()),g.restore(),e.fade&&a(b).css("opacity",0).animate({opacity:1},100)},f=function(a){a.getContext("2d").clearRect(0,0,a.width,a.height)}}else d=function(b){return a('<var style="zoom:1;overflow:hidden;display:block;width:'+b.width+"px;height:"+b.height+'px;"></var>').get(0)},e=function(b,c,d,e,f){var g,h,i,j;for(var k in d)d[k]=parseInt(d[k],10);g='<v:fill color="#'+e.fillColor+'" opacity="'+(e.fill?e.fillOpacity:0)+'" />',h=e.stroke?'strokeweight="'+e.strokeWidth+'" stroked="t" strokecolor="#'+e.strokeColor+'"':'stroked="f"',i='<v:stroke opacity="'+e.strokeOpacity+'"/>',"rect"==c?j=a('<v:rect name="'+f+'" filled="t" '+h+' style="zoom:1;margin:0;padding:0;display:block;position:absolute;left:'+d[0]+"px;top:"+d[1]+"px;width:"+(d[2]-d[0])+"px;height:"+(d[3]-d[1])+'px;"></v:rect>'):"poly"==c?j=a('<v:shape name="'+f+'" filled="t" '+h+' coordorigin="0,0" coordsize="'+b.width+","+b.height+'" path="m '+d[0]+","+d[1]+" l "+d.join(",")+' x e" style="zoom:1;margin:0;padding:0;display:block;position:absolute;top:0px;left:0px;width:'+b.width+"px;height:"+b.height+'px;"></v:shape>'):"circ"==c&&(j=a('<v:oval name="'+f+'" filled="t" '+h+' style="zoom:1;margin:0;padding:0;display:block;position:absolute;left:'+(d[0]-d[2])+"px;top:"+(d[1]-d[2])+"px;width:"+2*d[2]+"px;height:"+2*d[2]+'px;"></v:oval>')),j.get(0).innerHTML=g+i,a(b).append(j)},f=function(b){var c=a("<div>"+b.innerHTML+"</div>");c.children("[name=highlighted]").remove(),b.innerHTML=c.html()};g=function(a){var b,c=a.getAttribute("coords").split(",");for(b=0;b<c.length;b++)c[b]=parseFloat(c[b]);return[a.getAttribute("shape").toLowerCase().substr(0,4),c]},m=function(b,c){var d=a(b);return a.extend({},c,a.metadata?d.metadata():!1,d.data("maphilight"))},l=function(a){return a.complete?"undefined"!=typeof a.naturalWidth&&0===a.naturalWidth?!1:!0:!1},h={position:"absolute",left:0,top:0,padding:0,border:0};var o=!1;a.fn.maphilight=function(i){return i=a.extend({},a.fn.maphilight.defaults,i),c||o||(a(window).ready(function(){document.namespaces.add("v","urn:schemas-microsoft-com:vml");var b=document.createStyleSheet(),c=["shape","rect","oval","circ","fill","stroke","imagedata","group","textbox"];a.each(c,function(){b.addRule("v\\:"+this,"behavior: url(#default#VML); antialias:true")})}),o=!0),this.each(function(){var j,k,n,o,p,q,r;if(j=a(this),!l(this))return window.setTimeout(function(){j.maphilight(i)},200);if(n=a.extend({},i,a.metadata?j.metadata():!1,j.data("maphilight")),r=j.get(0).getAttribute("usemap"),r&&(o=a('map[name="'+r.substr(1)+'"]'),j.is('img,input[type="image"]')&&r&&o.length>0)){if(j.hasClass("maphilighted")){var s=j.parent();j.insertBefore(s),s.remove(),a(o).unbind(".maphilight")}k=a("<div></div>").css({display:"block",backgroundImage:'url("'+this.src+'")',backgroundSize:"contain",position:"relative",padding:0,width:this.width,height:this.height}),n.wrapClass&&(n.wrapClass===!0?k.addClass(a(this).attr("class")):k.addClass(n.wrapClass)),j.before(k).css("opacity",0).css(h).remove(),b&&j.css("filter","Alpha(opacity=0)"),k.append(j),p=d(this),a(p).css(h),p.height=this.height,p.width=this.width,a(o).bind("alwaysOn.maphilight",function(){q&&f(q),c||a(p).empty(),a(o).find("area[coords]").each(function(){var b,f;f=m(this,n),f.alwaysOn&&(!q&&c&&(q=d(j[0]),a(q).css(h),q.width=j[0].width,q.height=j[0].height,j.before(q)),f.fade=f.alwaysOnFade,b=g(this),c?e(q,b[0],b[1],f,""):e(p,b[0],b[1],f,""))})}).trigger("alwaysOn.maphilight").bind("mouseover.maphilight, focus.maphilight",function(b){var d,f,h=b.target;if(f=m(h,n),!f.neverOn&&!f.alwaysOn){if(d=g(h),e(p,d[0],d[1],f,"highlighted"),f.groupBy){var i;i=/^[a-zA-Z][\-a-zA-Z]+$/.test(f.groupBy)?o.find("area["+f.groupBy+'="'+a(h).attr(f.groupBy)+'"]'):o.find(f.groupBy);var j=h;i.each(function(){if(this!=j){var a=m(this,n);if(!a.neverOn&&!a.alwaysOn){var b=g(this);e(p,b[0],b[1],a,"highlighted")}}})}c||a(p).append("<v:rect></v:rect>")}}).bind("mouseout.maphilight, blur.maphilight",function(a){f(p)}),j.before(p),j.addClass("maphilighted")}})},a.fn.maphilight.defaults={fill:!0,fillColor:"000000",fillOpacity:.2,stroke:!0,strokeColor:"ff0000",strokeOpacity:1,strokeWidth:1,fade:!0,alwaysOn:!1,neverOn:!1,groupBy:!1,wrapClass:!0,shadow:!1,shadowX:0,shadowY:0,shadowRadius:6,shadowColor:"000000",shadowOpacity:.8,shadowPosition:"outside",shadowFrom:!1}}(jQuery);

 $('#img_1').maphilight({fill: true,
	fillColor: '000000',
	fillOpacity: 0.5,
	stroke: true,
	strokeColor: '000000',
	strokeOpacity: 0,
	strokeWidth: 1,
	fade: true,
	alwaysOn: false,
	neverOn: false,
	groupBy: false,
	wrapClass: true,
	shadow: false,
	shadowX: 0,
	shadowY: 0,
	shadowRadius: 6,
	shadowColor: '000000',
	shadowOpacity: 0.8,
	shadowPosition: 'outside',
	shadowFrom: false});

 $('#img_2').maphilight({fill: true,
	fillColor: '000000',
	fillOpacity: 0.5,
	stroke: true,
	strokeColor: '000000',
	strokeOpacity: 0,
	strokeWidth: 1,
	fade: true,
	alwaysOn: false,
	neverOn: false,
	groupBy: false,
	wrapClass: true,
	shadow: false,
	shadowX: 0,
	shadowY: 0,
	shadowRadius: 6,
	shadowColor: '000000',
	shadowOpacity: 0.8,
	shadowPosition: 'outside',
	shadowFrom: false});
	
 $('#img_3').maphilight({fill: true,
	fillColor: '000000',
	fillOpacity: 0.5,
	stroke: true,
	strokeColor: '000000',
	strokeOpacity: 0,
	strokeWidth: 1,
	fade: true,
	alwaysOn: false,
	neverOn: false,
	groupBy: false,
	wrapClass: true,
	shadow: false,
	shadowX: 0,
	shadowY: 0,
	shadowRadius: 6,
	shadowColor: '000000',
	shadowOpacity: 0.8,
	shadowPosition: 'outside',
	shadowFrom: false});

 $('#img_4').maphilight({fill: true,
	fillColor: '000000',
	fillOpacity: 0.5,
	stroke: true,
	strokeColor: '000000',
	strokeOpacity: 0,
	strokeWidth: 1,
	fade: true,
	alwaysOn: false,
	neverOn: false,
	groupBy: false,
	wrapClass: true,
	shadow: false,
	shadowX: 0,
	shadowY: 0,
	shadowRadius: 6,
	shadowColor: '000000',
	shadowOpacity: 0.8,
	shadowPosition: 'outside',
	shadowFrom: false});

$("html").mousemove(function(e){
    var x = e.clientX;
    var y = e.clientY;
    var coor = "Coordinates: (" + x + "," + y + ")";
    /*document.getElementById("demo").innerHTML = coor;*/

    });

$(document).ready(function(){
    $(".2a").mousemove(function(e){
    var x = e.clientX;
    var y = e.clientY;
    var coor = "Coordinates: (" + x + "," + y + ")";

    $(".lin_1").offset({top:y+100, left:x+170});
    });



  });



$('.2a').mouseover(function() {
  $('.lin_1').css('display', 'block');

//console.log('OVER');
}).mouseout(function()
{
$('.lin_1').css('display', 'none');
//console.log('OUT');
});

//Classic URL Change
// function myFunctionPlus() {

//   /* document.location.href='?floor='1;*/
// var strGETp = window.location.search.replace( '?floor=', ''); 
// if(strGETp != 10){
//  strGETp =  ++strGETp;
// /*alert(strGET);*/
// document.location.href='?floor='+strGETp;
// }
// }

// function myFunctionMinus(){
//   /* document.location.href='?floor='1;*/
// var strGETm = window.location.search.replace( '?floor=', ''); 
// if(strGETm != 2){
//  strGETm =  --strGETm;
// /*alert(strGET);*/
// document.location.href='?floor='+strGETm;
// }
// }

function myFunctionPlus() {
var floor = /floor-(.*)/;
var strGETp = parseInt(floor.exec(window.location.href)[1]);
	if(strGETp != 10){
		strGETp =  ++strGETp;
		document.location = 'select-apartment-floor-' + strGETp;
	}
}

function myFunctionMinus(){

var strGETm = window.location.search.replace( '?floor=', ''); 
if(strGETm != 2){
 strGETm =  --strGETm;
//document.location.href='?floor='+strGETm;
}
}

$('.2A_1_1_1').mouseover(function() {   
  $('#level').text( "2");
	$('#level_1').text( "2A_1_1_1");
	$('#level_2').text( "");
	$('#level_3').text( "77,1");
        }).mouseout(function(){
    });

$('.1C1_1_1_2').mouseover(function() {     
  $('#level').text( "1");
	$('#level_1').text( "1C1_1_1_2");
	$('#level_2').text( "");
	$('#level_3').text( "46,32");
        }).mouseout(function(){
  
    });
$('.1C2_1_1_3').mouseover(function() {     
  $('#level').text( "1");
	$('#level_1').text( "1C2_1_1_3");
	$('#level_2').text( "");
	$('#level_3').text( "46,32");
        }).mouseout(function(){
    });

$('.2B_1_1_4').mouseover(function() {     
  $('#level').text( "2");
	$('#level_1').text( "2B_1_1_4");
	$('#level_2').text( "");
	$('#level_3').text( "76,11");
        }).mouseout(function(){
  
    });
$('.2D1_1_1').mouseover(function() {     
  $('#level').text( "2");
	$('#level_1').text( "2D1_1_1");
	$('#level_2').text( "");
	$('#level_3').text( "77,61");
        }).mouseout(function(){
  
    });
$('.1E1_1_1').mouseover(function() {     
  $('#level').text( "1");
	$('#level_1').text( "1E1_1_1");
	$('#level_2').text( "");
	$('#level_3').text( "46,63");
        }).mouseout(function(){
  
    });
$('.1E2_1_1').mouseover(function() {     
  $('#level').text( "1");
	$('#level_1').text( "1E2_1_1");
	$('#level_2').text( "");
	$('#level_3').text( "46,62");
        }).mouseout(function(){
  
	});
$('.2D2_1_1').mouseover(function() {     
	$('#level').text( "2");
	$('#level_1').text( "2D2_1_1");
	$('#level_2').text( "");
	$('#level_3').text( "76,44");
}).mouseout(function(){
}); 
$('.2D1_1_1_1').mouseover(function() {     
  $('#level').text( "2");
	$('#level_1').text( "2D1_1_1_1");
	$('#level_2').text( "");
	$('#level_3').text( "75,37");
        }).mouseout(function(){
  
    });
$('.1E1_1_1_2').mouseover(function() {     
  $('#level').text( "1");
	$('#level_1').text( "1E1_1_1_2");
	$('#level_2').text( "");
	$('#level_3').text( "46,42");
        }).mouseout(function(){
  
    }); 
$('.1E2_1_1_3').mouseover(function() {     
  $('#level').text( "1");
	$('#level_1').text( "1E2_1_1_3");
	$('#level_2').text( "");
	$('#level_3').text( "46,41");
        }).mouseout(function(){
  
    });
$('.2D2_1_1_4').mouseover(function() {     
  $('#level').text( "2");
	$('#level_1').text( "2D2_1_1_4");
	$('#level_2').text( "");
	$('#level_3').text( "75,35");
        }).mouseout(function(){
  
    });//
	$('.2F1_1_1_1').mouseover(function() {     
  $('#level').text( "2");
	$('#level_1').text( "2F1_1_1_1");
	$('#level_2').text( "");
	$('#level_3').text( "77,27");
        }).mouseout(function(){
  
    });
	$('.1G1_1_1_2').mouseover(function() {     
  $('#level').text( "1");
	$('#level_1').text( "1G1_1_1_2");
	$('#level_2').text( "");
	$('#level_3').text( "46,65");
        }).mouseout(function(){
  
    });
	$('.2D2_1_1_4').mouseover(function() {     
  $('#level').text( "2");
	$('#level_1').text( "2D2_1_1_4");
	$('#level_2').text( "");
	$('#level_3').text( "75,35");
        }).mouseout(function(){
  
    });
	$('.1G2_1_1_3').mouseover(function() {     
  $('#level').text( "1");
	$('#level_1').text( "1G2_1_1_3");
	$('#level_2').text( "");
	$('#level_3').text( "46,65");
        }).mouseout(function(){
  
    });
	$('.2F2_1_1_4').mouseover(function() {     
  $('#level').text( "2");
	$('#level_1').text( "2F2_1_1_4");
	$('#level_2').text( "");
	$('#level_3').text( "76,14");
        }).mouseout(function(){
  
    });
	$('.2H1_1_1_1').mouseover(function() {     
  $('#level').text( "2");
	$('#level_1').text( "2H1_1_1_1");
	$('#level_2').text( "");
	$('#level_3').text( "77,28");
        }).mouseout(function(){
  
    });
	$('.2D2_1_1_4').mouseover(function() {     
  $('#level').text( "2");
	$('#level_1').text( "2D2_1_1_4");
	$('#level_2').text( "");
	$('#level_3').text( "75,35");
        }).mouseout(function(){
  
    });
	$('.1K1_1_1_2').mouseover(function() {     
  $('#level').text( "1");
	$('#level_1').text( "1K1_1_1_2");
	$('#level_2').text( "");
	$('#level_3').text( "46,67");
        }).mouseout(function(){
  
    });
	$('.1K2_1_1_3').mouseover(function() {     
  $('#level').text( "1");
	$('#level_1').text( "1K2_1_1_3");
	$('#level_2').text( "");
	$('#level_3').text( "46,68");
        }).mouseout(function(){
  
    });
	$('.2H2_1_1_4').mouseover(function() {     
  $('#level').text( "2");
	$('#level_1').text( "2H2_1_1_4");
	$('#level_2').text( "");
	$('#level_3').text( "75,54");
        }).mouseout(function(){
  
    });//
		$('.3L1_1_1_1_2').mouseover(function() {     
  $('#level').text( "3");
	$('#level_1').text( "3L1_1_1_1_2");
	$('#level_2').text( "123,24");
	$('#level_3').text( "");
        }).mouseout(function(){
  
    });
		$('.3L2_1_1_3_4').mouseover(function() {     
  $('#level').text( "3");
	$('#level_1').text( "3L2_1_1_3_4");
	$('#level_2').text( "123,61");
	$('#level_3').text( "");
        }).mouseout(function(){
  
    });
		$('.3L1_1_1_1').mouseover(function() {     
  $('#level').text( "3");
	$('#level_1').text( "3L1_1_1_1");
	$('#level_2').text( "123,24");
	$('#level_3').text( "");
        }).mouseout(function(){
  
    });
		$('.3L2_1_1_3').mouseover(function() {     
  $('#level').text( "3");
	$('#level_1').text( "3L2_1_1_3");
	$('#level_2').text( "123,23");
	$('#level_3').text( "");
        }).mouseout(function(){
  
    });
		$('.2P1_1_1_1').mouseover(function() {     
  $('#level').text( "2");
	$('#level_1').text( "2P1_1_1_1");
	$('#level_2').text( "72,83");
	$('#level_3').text( "");
        }).mouseout(function(){
  
    });
		$('.3R1_1_1_1').mouseover(function() {     
  $('#level').text( "3");
	$('#level_1').text( "3R1_1_1_1");
	$('#level_2').text( "117,83");
	$('#level_3').text( "");
        }).mouseout(function(){
  
    });
			$('.3R2_1_1_3').mouseover(function() {     
  $('#level').text( "3");
	$('#level_1').text( "3R2_1_1_3");
	$('#level_2').text( "117,81");
	$('#level_3').text( "");
        }).mouseout(function(){
  
    });
		$('.2P2_1_1_4').mouseover(function() {     
  $('#level').text( "2");
	$('#level_1').text( "2P2_1_1_4");
	$('#level_2').text( "72,85");
	$('#level_3').text( "");
        }).mouseout(function(){
  
    });
		$('.NP_1_1_4').mouseover(function() {     
  $('#level').text( "");
	$('#level_1').text( "NP_1_1_4");
	$('#level_2').text( "");
	$('#level_3').text( "66,96");
        }).mouseout(function(){
  
    });
			$('.NP2_1_1_1').mouseover(function() {     
  $('#level').text( "");
	$('#level_1').text( "NP2_1_1_1");
	$('#level_2').text( "");
	$('#level_3').text( "105,17");
        }).mouseout(function(){
  
    });
/*
$( window ).load(function() {//функция выполняеться при загрузке страницы
alert('kek');
});                
*/
$(document).ready(function(){
		form('#form_main');
		form('#form');
		form('#form999');		
		form('#form_rieltor');	
	}
	
);
function form(id){

	$(id).submit(function(event) { //устанавливаем событие отправки для формы с id=form

 event.preventDefault()
            var form_data = $(this).serialize(); //собераем все данные из формы
            $.ajax({
            type: "POST", //Метод отправки
            url: "/application.php", //путь до php фаила отправителя
            data: form_data,
            success: function(dat) {
				
				
				var lang=document.getElementsByTagName('html')[0].getAttribute('lang');	  
							if (lang=='uk') {
								lang='';
							}
							else{
								lang='/'+lang;
							}
							  console.log(dat)
						    data= $.parseJSON(dat);
							if (data.result){
								if (data.page !== undefined) {
									window.location = lang+data.page;
								}
							}
							else{
							   //код в этом блоке выполняется при успешной отправке сообщения
							   alert(data.message);
												$('form input[name="name"], form input[name="email"], form input[name="tel"], form textarea').val('');
												$('#contactForm').css ({
											display: 'none'
									});
												$('.callback-form-pupop').css ({
											display: 'none'
									});	
							
							}

            },
			error: function(dat){
               console.log(dat);
           }
	});
    });
}
var ct = 0;
document.getElementById("callback-btn").onclick = function() {

    var addCount = document.createElement('input');
    addCount.type = "hidden";
    addCount.id = "count";
    addCount.name = "count";
    addCount.value = "0";
    document.getElementById('form999').appendChild(addCount);

};

if(document.getElementById("mF")) {
    document.getElementById("mF").onclick = function () {

        var addCount = document.createElement('input');
        addCount.type = "hidden";
        addCount.id = "count";
        addCount.name = "count";
        addCount.value = "0";
        document.getElementById('form').appendChild(addCount);

    }
}
function countme() {
    document.getElementById('count').value = ++ct;
}

var addCount = document.createElement('input');
addCount.type = "hidden";
addCount.id = "count";
addCount.name = "count";
addCount.value = "0";
function countmeForm(form) { var form;
    document.getElementById(form).appendChild(addCount);
    document.getElementById('count').value = ++ct;
}


