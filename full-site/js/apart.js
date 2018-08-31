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

}).mouseout(function()
{
$('.lin_1').css('display', 'none');
});



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


$('.svg_links').each(function() {

    $(this).mouseenter(function() {
      $('#level').html(this.dataset.flats);
      $('#level_1').html(this.dataset.number);
      $('#level_3').html(this.dataset.square);
    });

    $(this).mouseleave(function() {

    });
  });



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
