$(function () {

// sticky top-header

    $('.top-header').removeClass('default')
    $('#menu').addClass('top-header__right')
    $('#menu').removeClass('top-header__right-def')
    $(window).scroll(function () {
        if ($(this).scrollTop() > 1) {
            $('.top-header').addClass('default')
            $('#menu').removeClass('top-header__right')
            $('#menu').addClass('top-header__right-def')
            $('.main-arrow-down').hide()
        } else {
            $('.top-header').removeClass('default')
            $('#menu').removeClass('top-header__right-def')
            $('#menu').addClass('top-header__right')
            if ($(window).width() < 480) {
                $('.main-arrow-down').show()
            }
        }
    })// body...

    $('.language-select').click(function () {
        $(this).toggleClass('open');
    })

    $('.language-select li').click(function () {
        var setLang = $('.language-select').data('location'),
            dataLangSelect = $(this).data('lang')
        $('.language-select').data('location', dataLangSelect);
        $('.language-select li').removeClass('active');
        $(this).toggleClass('active');
    })

    // (function(){
    //     var header =  document.querySelector('header');
    //     var headerHeight = 2 * header.offsetHeight;
    //     var flag1 = true;
    //     var flag2 = true;
    //     function headerStatement() {
    //         if(window.scrollY > headerHeight - 1 && flag2) {
    //             header.classList.add('header-animate');
    //             flag2 = false;
    //         }
    //         if(window.scrollY > headerHeight && flag1) {
    //             header.classList.add('header-fixed');
    //             header.classList.remove('header-animate');
    //             flag1 = false;
    //         } else if(window.scrollY <= headerHeight) {
    //             header.classList.remove("header-fixed");
    //             flag1 = true;
    //             flag2 = true;
    //         }
    //     }
    //     function fixHeader(windowWidth){
    //         if ( windowWidth > 1180) {
    //             window.addEventListener('scroll',headerStatement);
    //         }
    //     }
    //     fixHeader(window.innerWidth);
    //     window.addEventListener('resize', function() {
    //         window.removeEventListener('scroll', headerStatement);
    //         if ( window.innerWidth < 1180) {
    //             header.classList.remove('header-fixed');
    //         }
    //         fixHeader(window.innerWidth);
    //     });
    //
    // })();

    //===============================

    $('.main-arrow-down').click(function () {
        var wow = $('#blok-about').offset().top
        var ololo = wow - 70

        $('html, body').animate({
            scrollTop: ololo,
        }, 700)
    })

    //========= menu list 750

    $('#navigation_btn').on('click', function () {
        $('#menu').stop().fadeIn()
    })

    $('#navigation__close-mnu').on('click', function () {
        $('#menu').stop().fadeOut()
    })

    //========= GALLERY__pupop
    $('.mfp-gallery').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true,
        },
    })

    //========= callback__form-pupop
    $('#callback-btn').click(function () {
        $('.callback-form-pupop-wrap').fadeIn()
    })
    $('#callback-btn2').click(function () {
        $('.callback-form-pupop-wrap').fadeIn()
    })
    $('#callback-btn3').click(function () {
        $('.callback-form-pupop-wrap').fadeIn()
    })
    $('#callback-form-btn-close').click(function () {
        $('.callback-form-pupop-wrap').fadeOut()
    })
    $('#callback-form-btn-close2').click(function () {
        $('.callback-form-pupop-wrap').fadeOut()
    });
    $('#mobile_callback_btn').click(function(e) {
        e.preventDefault();
        $('.callback-form-pupop-wrap').fadeIn();
    });

    //=========for flood page
    (function polygon() {
        $('#g43').css('opacity', '0')//+
        $('#g65').css('opacity', '0')//+
        $('#g87').css('opacity', '0')//+
        $('#g109').css('opacity', '0')//+
        $('#g109-3').css('opacity', '0')//+
        $('#g109-2').css('opacity', '0')//+
        $('#g109-4').css('opacity', '0')
        $('#g131').css('opacity', '0')//+
        $('#g153').css('opacity', '0')
        $('#g175').css('opacity', '0')
        $('#g153-8').css('opacity', '0')//+
        $('#polygon177').css('opacity', '0')
        $('#polygon179').css('opacity', '0')
        $('#polygon181').css('opacity', '0')
        $('#polygon183').css('opacity', '0')
        $('#polygon185').css('opacity', '0')
        $('#polygon187').css('opacity', '0')
        $('#polygon189').css('opacity', '0')
        $('#polygon189-5').css('opacity', '0')
        $('#polygon189-6').css('opacity', '0')
    })()

    $('#polygon185').mouseover(function () {
        $('#g153-8').css('opacity', '1')
        $('#polygon185').css('opacity', '0.7')
        $('#polygon185').css('cursor', 'pointer')
        $('#level').html($('#g153-8').find('tspan').html())
        $('#appart').html($('#g153-8').attr('data-floor'))
    }).mouseout(function () {
        $('#g153-8').css('opacity', '0')
        $('#polygon185').css('opacity', '0')
    })
    $('#polygon183').mouseover(function () {
        $('#g131').css('opacity', '1')
        $('#polygon183').css('opacity', '0.7')
        $('#polygon183').css('cursor', 'pointer')
        $('#level').html($('#g131').find('tspan').html())
        $('#appart').html($('#g131').attr('data-floor'))

    }).mouseout(function () {
        $('#g131').css('opacity', '0')
        $('#polygon183').css('opacity', '0')
    })
    $('#polygon181').mouseover(function () {
        $('#g43').css('opacity', '1')
        $('#polygon181').css('opacity', '0.7')
        $('#polygon181').css('cursor', 'pointer')
        $('#level').html($('#g43').find('tspan').html())
        $('#appart').html($('#g43').attr('data-floor'))
    }).mouseout(function () {
        $('#g43').css('opacity', '0')
        $('#polygon181').css('opacity', '0')
    })
    $('#polygon179').mouseover(function () {
        $('#g65').css('opacity', '1')
        $('#polygon179').css('opacity', '0.7')
        $('#polygon179').css('cursor', 'pointer')
        $('#level').html($('#g65').find('tspan').html())
        $('#appart').html($('#g65').attr('data-floor'))
    }).mouseout(function () {
        $('#g65').css('opacity', '0')
        $('#polygon179').css('opacity', '0')
    })
    $('#polygon177').mouseover(function () {
        $('#g87').css('opacity', '1')
        $('#polygon177').css('opacity', '0.7')
        $('#polygon177').css('cursor', 'pointer')
        $('#level').html($('#g87').find('tspan').html())
        $('#appart').html($('#g87').attr('data-floor'))
    }).mouseout(function () {
        $('#g87').css('opacity', '0')
        $('#polygon177').css('opacity', '0')
    })
    $('#polygon187').mouseover(function () {
        $('#g109').css('opacity', '1')
        $('#polygon187').css('opacity', '0.7')
        $('#polygon187').css('cursor', 'pointer')
        $('#level').html($('#g109').find('tspan').html())
        $('#appart').html($('#g109').attr('data-floor'))
    }).mouseout(function () {
        $('#g109').css('opacity', '0')
        $('#polygon187').css('opacity', '0')
    })
    $('#polygon189').mouseover(function () {
        $('#g109-3').css('opacity', '1')
        $('#polygon189').css('opacity', '0.7')
        $('#polygon189').css('cursor', 'pointer')
        $('#level').html($('#g109-3').find('tspan').html())
        $('#appart').html($('#g109-3').attr('data-floor'))
    }).mouseout(function () {
        $('#g109-3').css('opacity', '0')
        $('#polygon189').css('opacity', '0')
    })
    $('#polygon189-5').mouseover(function () {
        $('#g109-2').css('opacity', '1')
        $('#polygon189-5').css('opacity', '0.7')
        $('#polygon189-5').css('cursor', 'pointer')
        $('#level').html($('#g109-2').find('tspan').html())
        $('#appart').html($('#g109-2').attr('data-floor'))
    }).mouseout(function () {
        $('#g109-2').css('opacity', '0')
        $('#polygon189-5').css('opacity', '0')
    })
    $('#polygon189-6').mouseover(function () {
        $('#g109-4').css('opacity', '1')
        $('#polygon189-6').css('opacity', '0.7')
        $('#polygon189-6').css('cursor', 'pointer')
        $('#level').html($('#g109-4').find('tspan').html())
        $('#appart').html($('#g109-4').attr('data-floor'))
    }).mouseout(function () {
        $('#g109-4').css('opacity', '0')
        $('#polygon189-6').css('opacity', '0')
    })

//=========end floor page
//========= for map js
// if ($('#map').length > 0) {

//     blockMap()

//     function blockMap() {
        
//         function CreateMarker(mapLocation, popupContent, markerImage) {
//             this.mapLocation = mapLocation;
//             this.markerImage = markerImage;
//             this.type = markerImage.type;
//         } //end CrateMarker

//         function PrimaryMarker(mapLocation, popupContent, markerImage) {
//             CreateMarker.call(this, mapLocation, popupContent, markerImage);
//             this.marker = new google.maps.Marker({
//                 position: this.mapLocation,
//                 map: map,
//                 icon: markerImage,
//                 animation: google.maps.Animation.BOUNCE
//             });
//         }

//         // Конструктор для создания маркеров на карте 1 параметр широта и долгота, 2 текст,
//         // 3 координаты иконки со спрайта если впадло переделовать спрайт передай стрингу адресс к иконке.
//         function SecondaryMarker(mapLocation, popupContent, markerImage) {
//             CreateMarker.call(this, mapLocation, popupContent, markerImage);
//             this.popupContent ="<p class='content'>" + popupContent + "</p>" || '';
//             this.infoWindow = new google.maps.InfoWindow({content: this.popupContent});
//             this.marker = new google.maps.Marker({
//                 position: this.mapLocation,
//                 map: map,
//                 icon: new google.maps.MarkerImage("/img/location/spritesheet_map.png", new google.maps.Size(30, 38), new google.maps.Point(this.markerImage.x, this.markerImage.y)),
//                 animation: google.maps.Animation.DROP
//             });

//             if(!this.markerImage.x === 'undefined' && !this.markerImage.x === 'undefined') {
//                 this.marker.icon = this.markerImage;
//             }


//             var openInfoWindow = (function() {
//                 this.infoWindow.open(map, this.marker);
//             }).bind(this);

//             this.marker.addListener('click',openInfoWindow);
            
//         }

//         // var sport_icon = {x: 136, y: 0, type: 'sport'};
//         // var kindergarden_icon = {x: 170, y: 0, type: 'kindergarden'};
//         // var school_icon = {x: 408, y: 0, type: 'school'};
//         // var shopping_mall = {x: 340, y: 0, type: 'shopping-mall'};
//         // var market_icon = {x: 204, y: 0, type: 'market'};
//         // var pharmacy_icon = {x: 0, y: 0, type: 'pharmacy'};
//         // var bank_icon = {x: 34, y: 0, type: 'bank'};
//         // var beauty_icon = {x: 68, y: 0, type: 'beauty-salon'};
//         // var park_icon = {x: 238, y: 0, type: 'park'};
//         // var restaraunt_icon = {x: 272, y: 0, type: 'restaraunt'};

//         var sport_icon = {x: 120, y: 0, type: 'sport'};
//         var kindergarden_icon = {x: 150, y: 0, type: 'kindergarden'};
//         var school_icon = {x: 360, y: 0, type: 'school'};
//         var shopping_mall = {x: 300, y: 0, type: 'shopping-mall'};
//         var market_icon = {x: 180, y: 0, type: 'market'};
//         var pharmacy_icon = {x: 0, y: 0, type: 'pharmacy'};
//         var bank_icon = {x: 30, y: 0, type: 'bank'};
//         var beauty_icon = {x: 60, y: 0, type: 'beauty-salon'};
//         var park_icon = {x: 210, y: 0, type: 'park'};
//         var restaraunt_icon = {x: 240, y: 0, type: 'restaraunt'};

//         var map = new google.maps.Map(document.getElementById('map'), {
//             center: {lat: 50.449997, lng: 30.488734},
//             zoom: 16,
//             disableDefaultUI: true,
//             scrollwheel: false
//         }),
//         marker1 = new PrimaryMarker({lat: 50.449997, lng: 30.488734}, '', '/img/location/logo.png'),
        
//         marker2 = new SecondaryMarker({lat: 50.453684, lng: 30.483745}, 'Київський професійно-педагогічний коледж ім. А. Макаренка', school_icon),
//         marker3 = new SecondaryMarker({lat: 50.447367, lng: 30.494291}, 'Сушія', restaraunt_icon),
//         marker4 = new SecondaryMarker({lat: 50.447094, lng: 30.488583}, 'ТРЦ Україна', shopping_mall),
//         marker5 = new SecondaryMarker({lat: 50.446370, lng: 30.491995}, 'Сільпо', market_icon),
//         marker6 = new SecondaryMarker({lat: 50.443568, lng: 30.510175}, 'Київська міська клінічна лікарня №18', pharmacy_icon),
//         marker7 = new SecondaryMarker({lat: 50.455296, lng: 30.481891}, 'Стадіон “Старт”', sport_icon),
//         marker8 = new SecondaryMarker({lat: 50.445161, lng: 30.506939}, 'Спортивний клуб “Олімп”', sport_icon),
//         marker9 = new SecondaryMarker({lat: 50.449392, lng: 30.490774}, 'Біцепс', sport_icon),
//         marker10 = new SecondaryMarker({lat: 50.449519, lng: 30.493499}, 'Скорпіон', sport_icon),
//         marker11 = new SecondaryMarker({lat: 50.452089, lng: 30.490791}, 'Спортивна студія', sport_icon),
//         marker12 = new SecondaryMarker({lat: 50.453269, lng: 30.500953}, 'VOIN Crossfit', sport_icon),
//         marker13 = new SecondaryMarker({lat: 50.455817, lng: 30.501700}, 'HOT Yoga', sport_icon),
//         marker14 = new SecondaryMarker({lat: 50.447641, lng: 30.505395}, 'Київський велотрек', sport_icon),
//         marker15 = new SecondaryMarker({lat: 50.448549, lng: 30.490797}, 'Дошкільний навчальний заклад (дитячий садок) комбінованого типу №23', kindergarden_icon),
//         marker16 = new SecondaryMarker({lat: 50.451539, lng: 30.493802}, 'Дошкільний навчальний заклад (ясла-садок) №545', kindergarden_icon),
//         marker17 = new SecondaryMarker({lat: 50.45374, lng: 30.4916779}, 'Дошкільний навчальний заклад (ясла-садок) №543', kindergarden_icon),
//         marker18 = new SecondaryMarker({lat: 50.4471533, lng: 30.4978363}, 'Загальноосвітня школа №58', school_icon),
//         marker19 = new SecondaryMarker({lat: 50.446157, lng: 30.502285}, 'Спеціалізована школа І-ІІІ ступенів №135', school_icon),
//         marker20 = new SecondaryMarker({lat: 50.45915, lng: 30.403417}, 'Спеціалізована школа №73', school_icon),
//         marker21 = new SecondaryMarker({lat: 50.447052, lng: 30.484529}, 'Спеціалізована школа №41 ім. З. К. Слюсаренка', school_icon),
//         marker22 = new SecondaryMarker({lat: 50.451533, lng: 30.502462}, 'Спеціалізована школа І-ІІІ ст. №91', school_icon),
//         marker23 = new SecondaryMarker({lat: 50.4506335, lng: 30.4844456}, 'Гімназія №153 ім. О. С. Пушкіна', school_icon),
//         marker24 = new SecondaryMarker({lat: 50.44702, lng: 30.49696}, 'Гімназія НПУ ім. М. П. Драгоманова', school_icon),
//         marker25 = new SecondaryMarker({lat: 50.4525455, lng: 30.493347}, 'Ліцей №38 ім. В. М. Молчанова', school_icon),
//         marker26 = new SecondaryMarker({lat: 50.4486665, lng: 30.5022426}, 'Французький ліцей імені Анни Київської', school_icon),
//         // marker27 = new SecondaryMarker({lat: 50.4471015, lng: 30.4884885}, 'ТЦ “Україна”', shopping_mall),
//         marker28 = new SecondaryMarker({lat: 50.4475675, lng: 30.485456}, 'Велика Кишеня', market_icon),
//         marker29 = new SecondaryMarker({lat: 50.4474364, lng: 30.4946935}, 'Сільпо', market_icon),
//         marker30 = new SecondaryMarker({lat: 50.4536327, lng: 30.4850769}, 'Billa', market_icon),
//         marker31 = new SecondaryMarker({lat: 50.452734, lng: 30.4898896}, 'Яблучко', market_icon),
//         marker32 = new SecondaryMarker({lat: 50.45602, lng: 30.494074}, 'Молоко від фермера', market_icon),
//         marker33 = new SecondaryMarker({lat: 50.4519, lng: 30.487701}, 'Дари моря', market_icon),
//         marker34 = new SecondaryMarker({lat: 50.452043, lng: 30.4893241}, 'Аптека низьких цін', pharmacy_icon),
//         marker35 = new SecondaryMarker({lat: 50.448669, lng: 30.493562}, 'Аптека низьких цін', pharmacy_icon),
//         marker36 = new SecondaryMarker({lat: 50.4523985, lng: 30.4893798}, 'Віталюкс', pharmacy_icon),
//         marker37 = new SecondaryMarker({lat: 50.448213, lng: 30.493434}, 'Копійка', pharmacy_icon),
//         marker38 = new SecondaryMarker({lat: 50.450225, lng: 30.495573}, 'MIXTURA.UA', pharmacy_icon),
//         marker39 = new SecondaryMarker({lat: 50.450083, lng: 30.49622}, 'Доброго дня', pharmacy_icon),
//         marker40 = new SecondaryMarker({lat: 50.4480562, lng: 30.4960112}, 'Мірра', pharmacy_icon),
//         marker41 = new SecondaryMarker({lat: 50.451772, lng: 30.488933}, 'OTP Bank', bank_icon),
//         marker42 = new SecondaryMarker({lat: 50.450565, lng: 30.497349}, 'Альфа-Банк', bank_icon),
//         marker43 = new SecondaryMarker({lat: 50.4517615, lng: 30.4894761}, 'ПриватБанк', bank_icon),
//         marker44 = new SecondaryMarker({lat: 50.452734, lng: 30.4898896}, 'Universal Bank', bank_icon),
//         marker45 = new SecondaryMarker({lat: 50.4526656, lng: 30.4895322}, 'Сбербанк', bank_icon),
//         marker46 = new SecondaryMarker({lat: 50.4476078, lng: 30.4959892}, 'VT Style Hair Studio', beauty_icon),
//         marker47 = new SecondaryMarker({lat: 50.4436962, lng: 30.4965465}, 'HAIR.BROW.MAKEUP STUDIO', beauty_icon),
//         marker48 = new SecondaryMarker({lat: 50.455922, lng: 30.493698}, 'Grow Brow', beauty_icon),
//         marker49 = new SecondaryMarker({lat: 50.4498631, lng: 30.4939752}, 'U lab beauty bar', beauty_icon),
//         marker50 = new SecondaryMarker({lat: 50.453975, lng: 30.498752}, 'Павлівський садок', park_icon),
//         marker51 = new SecondaryMarker({lat: 50.385425, lng: 30.691592}, 'Сквер ім. Чкалова', park_icon),
//         marker52 = new SecondaryMarker({lat: 50.4491674, lng: 30.5028736}, 'Парк ім. Олеся Гончара', park_icon),
//         marker53 = new SecondaryMarker({lat: 50.4442125, lng: 30.4972547}, 'Ботанічний сад ім. Олександра Фоміна', park_icon),
//         marker54 = new SecondaryMarker({lat: 50.4418816, lng: 30.5107143}, 'Парк ім. Тараса Шевченка', park_icon);

//         $.getJSON('/js/map-style.json', function (data) {
//             map.setOptions({styles: data})
//         })
//         marker1.marker.addListener('click', function () {
//             $('#lacation-page-wrap').fadeIn()
//         })
//         $('#lacation-page-wrap__closeBtn').click(function () {
//             $('#lacation-page-wrap').fadeOut();
//         })
//     }
// }
//========= / END
//============ status page persent ===

    if ($('.status-page').length > 0) {
        (function persentPoint() {

            var rend = $('.status-page__render-inner');
            var statBar = $('.statBar');
            var point = $('.point');

            var heightParsent = 85 / 100
            var result = 0
            var allRend = 0

            function setHeight(elem, height) {
                elem.css('height', height + '%')
            }

            for (var i = 0; i < point.length; i++) {
                var sum = parseFloat(point.eq(i).html())
                setHeight(statBar.eq(i), sum)
                result = result + sum
            }

            result = (result / 4).toFixed(9)

            allRend = (100 - result * heightParsent)

            setHeight(rend, allRend - 3)

        })()
    }

//============ / END status page persent ===
//============ / main page link animation ===

    $('.navigation__item a').on('click', function (e) {
        var link = $(this).attr('href')
        var top = $(link).offset().top
        var headerHeight = $('.top-header').height()
        e.preventDefault()
        $('html,body').animate({
            scrollTop: top - headerHeight
        }, 1000)
    })
//============ / END main page link animation  ===
//============ / construction page ===

    $('.constBtn').on('click', function (e) {
        var link = $(this).attr('href')
        var top = $(link).offset().top
        var headerHeight = $('.top-header').height()
        e.preventDefault()
        $('html,body').animate({
            scrollTop: top - headerHeight
        }, 1000)
    })
//============ / END construction page ===

//============ / construction page GALLERY ===
    $('#btnClick020617').magnificPopup({
        items: [
            {
                src: '../img/construction/gal-0206/ex1.jpg'
            },
            {
                src: '../img/construction/gal-0206/ex2.jpg'
            },
            {
                src: '../img/construction/gal-0206/ex3.jpg'
            },
            {
                src: '../img/construction/gal-0206/ex4.jpg'
            }
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is default type
    })

    $('#btnClick090617').magnificPopup({
        items: [
            {
                src: '../img/construction/gal-0906/ex1.jpg'
            },
            {
                src: '../img/construction/gal-0906/ex2.jpg'
            },
            {
                src: '../img/construction/gal-0906/ex3.jpg'
            },
            {
                src: '../img/construction/gal-0906/ex4.jpg'
            },
            {
                src: '../img/construction/gal-0906/ex5.jpg'
            }
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is default type
    })

    $('#btnClick190617').magnificPopup({
        items: [
            {
                src: '../img/construction/gal-1906/ex1.jpg'
            },
            {
                src: '../img/construction/gal-1906/ex2.jpg'
            },
            {
                src: '../img/construction/gal-1906/ex3.jpg'
            },
            {
                src: '../img/construction/gal-1906/ex4.jpg'
            }
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is default type
    })
//============ / END construction page GALLERY ===

})

//Other projects slick carousel on main page
if($('.other-projects__slick-carousel').length) {
    $('.other-projects__slick-carousel').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        prevArrow: $('.slick-carousel__custom-nav__prev-slide'),
        nextArrow: $('.slick-carousel__custom-nav__next-slide'),
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
    });
}
