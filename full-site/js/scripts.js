/*
    jQuery Masked Input Plugin
    Copyright (c) 2007 - 2015 Josh Bush (digitalbush.com)
    Licensed under the MIT license (http://digitalbush.com/projects/masked-input-plugin/#license)
    Version: 1.4.1
*/
!function(e){"function"==typeof define&&define.amd?define(["jquery"],e):e("object"==typeof exports?require("jquery"):jQuery)}(function(S){var a,e=navigator.userAgent,A=/iphone/i.test(e),i=/chrome/i.test(e),T=/android/i.test(e);S.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},autoclear:!0,dataName:"rawMaskFn",placeholder:"_"},S.fn.extend({caret:function(e,t){var n;if(0!==this.length&&!this.is(":hidden"))return"number"==typeof e?(t="number"==typeof t?t:e,this.each(function(){this.setSelectionRange?this.setSelectionRange(e,t):this.createTextRange&&((n=this.createTextRange()).collapse(!0),n.moveEnd("character",t),n.moveStart("character",e),n.select())})):(this[0].setSelectionRange?(e=this[0].selectionStart,t=this[0].selectionEnd):document.selection&&document.selection.createRange&&(n=document.selection.createRange(),e=0-n.duplicate().moveStart("character",-1e5),t=e+n.text.length),{begin:e,end:t})},unmask:function(){return this.trigger("unmask")},mask:function(t,v){var n,b,k,y,x,j,R;if(!t&&0<this.length){var e=S(this[0]).data(S.mask.dataName);return e?e():void 0}return v=S.extend({autoclear:S.mask.autoclear,placeholder:S.mask.placeholder,completed:null},v),n=S.mask.definitions,b=[],k=j=t.length,y=null,S.each(t.split(""),function(e,t){"?"==t?(j--,k=e):n[t]?(b.push(new RegExp(n[t])),null===y&&(y=b.length-1),e<k&&(x=b.length-1)):b.push(null)}),this.trigger("unmask").each(function(){function o(){if(v.completed){for(var e=y;e<=x;e++)if(b[e]&&m[e]===c(e))return;v.completed.call(g)}}function c(e){return v.placeholder.charAt(e<v.placeholder.length?e:0)}function l(e){for(;++e<j&&!b[e];);return e}function u(e,t){var n,a;if(!(e<0)){for(n=e,a=l(t);n<j;n++)if(b[n]){if(!(a<j&&b[n].test(m[a])))break;m[n]=m[a],m[a]=c(a),a=l(a)}s(),g.caret(Math.max(y,e))}}function r(){h(),g.val()!=p&&g.change()}function f(e,t){var n;for(n=e;n<t&&n<j;n++)b[n]&&(m[n]=c(n))}function s(){g.val(m.join(""))}function h(e){var t,n,a,i=g.val(),r=-1;for(a=t=0;t<j;t++)if(b[t]){for(m[t]=c(t);a++<i.length;)if(n=i.charAt(a-1),b[t].test(n)){m[t]=n,r=t;break}if(a>i.length){f(t+1,j);break}}else m[t]===i.charAt(a)&&a++,t<k&&(r=t);return e?s():r+1<k?v.autoclear||m.join("")===d?(g.val()&&g.val(""),f(0,j)):s():(s(),g.val(g.val().substring(0,r+1))),k?t:y}var g=S(this),m=S.map(t.split(""),function(e,t){return"?"!=e?n[e]?c(t):e:void 0}),d=m.join(""),p=g.val();g.data(S.mask.dataName,function(){return S.map(m,function(e,t){return b[t]&&e!=c(t)?e:null}).join("")}),g.one("unmask",function(){g.off(".mask").removeData(S.mask.dataName)}).on("focus.mask",function(){var e;g.prop("readonly")||(clearTimeout(a),p=g.val(),e=h(),a=setTimeout(function(){g.get(0)===document.activeElement&&(s(),e==t.replace("?","").length?g.caret(0,e):g.caret(e))},10))}).on("blur.mask",r).on("keydown.mask",function(e){if(!g.prop("readonly")){var t,n,a,i=e.which||e.keyCode;R=g.val(),8===i||46===i||A&&127===i?(n=(t=g.caret()).begin,(a=t.end)-n==0&&(n=46!==i?function(e){for(;0<=--e&&!b[e];);return e}(n):a=l(n-1),a=46===i?l(a):a),f(n,a),u(n,a-1),e.preventDefault()):13===i?r.call(this,e):27===i&&(g.val(p),g.caret(0,h()),e.preventDefault())}}).on("keypress.mask",function(e){if(!g.prop("readonly")){var t,n,a,i=e.which||e.keyCode,r=g.caret();e.ctrlKey||e.altKey||e.metaKey||i<32||!i||13===i||(r.end-r.begin!=0&&(f(r.begin,r.end),u(r.begin,r.end-1)),(t=l(r.begin-1))<j&&(n=String.fromCharCode(i),b[t].test(n))&&(function(e){var t,n,a,i;for(n=c(t=e);t<j;t++)if(b[t]){if(a=l(t),i=m[t],m[t]=n,!(a<j&&b[a].test(i)))break;n=i}}(t),m[t]=n,s(),a=l(t),T?setTimeout(function(){S.proxy(S.fn.caret,g,a)()},0):g.caret(a),r.begin<=x&&o()),e.preventDefault())}}).on("input.mask paste.mask",function(){g.prop("readonly")||setTimeout(function(){var e=h(!0);g.caret(e),o()},0)}),i&&T&&g.off("input.mask").on("input.mask",function(){var e=g.val(),t=g.caret();if(R&&R.length&&R.length>e.length){for(h(!0);0<t.begin&&!b[t.begin-1];)t.begin--;if(0===t.begin)for(;t.begin<y&&!b[t.begin];)t.begin++;g.caret(t.begin,t.begin)}else{for(h(!0);t.begin<j&&!b[t.begin];)t.begin++;g.caret(t.begin,t.begin)}o()}),h()})}})});
/*
 * International Telephone Input v12.1.3
 * https://github.com/jackocnr/intl-tel-input.git
 * Licensed under the MIT license
 */
!function(a){"function"==typeof define&&define.amd?define(["jquery"],function(b){a(b,window,document)}):"object"==typeof module&&module.exports?module.exports=a(require("jquery"),window,document):a(jQuery,window,document)}(function(a,b,c,d){"use strict";function e(b,c){this.a=a(b),this.b=a.extend({},h,c),this.ns="."+f+g++,this.d=Boolean(b.setSelectionRange),this.e=Boolean(a(b).attr("placeholder"))}var f="intlTelInput",g=1,h={allowDropdown:!0,autoHideDialCode:!0,autoPlaceholder:"polite",customPlaceholder:null,dropdownContainer:"",excludeCountries:[],formatOnDisplay:!0,geoIpLookup:null,hiddenInput:"",initialCountry:"",nationalMode:!0,onlyCountries:[],placeholderNumberType:"MOBILE",preferredCountries:["us","gb"],separateDialCode:!1,utilsScript:""},i={b:38,c:40,d:13,e:27,f:43,A:65,Z:90,j:32,k:9},j=["800","822","833","844","855","866","877","880","881","882","883","884","885","886","887","888","889"];a(b).on("load",function(){a.fn[f].windowLoaded=!0}),e.prototype={_a:function(){return this.b.nationalMode&&(this.b.autoHideDialCode=!1),this.b.separateDialCode&&(this.b.autoHideDialCode=this.b.nationalMode=!1),this.g=/Android.+Mobile|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),this.g&&(a("body").addClass("iti-mobile"),this.b.dropdownContainer||(this.b.dropdownContainer="body")),this.h=new a.Deferred,this.i=new a.Deferred,this.s={},this._b(),this._f(),this._h(),this._i(),this._i2(),[this.h,this.i]},_b:function(){this._d(),this._d2(),this._e()},_c:function(a,b,c){b in this.q||(this.q[b]=[]);var d=c||0;this.q[b][d]=a},_d:function(){if(this.b.onlyCountries.length){var a=this.b.onlyCountries.map(function(a){return a.toLowerCase()});this.p=k.filter(function(b){return a.indexOf(b.iso2)>-1})}else if(this.b.excludeCountries.length){var b=this.b.excludeCountries.map(function(a){return a.toLowerCase()});this.p=k.filter(function(a){return b.indexOf(a.iso2)===-1})}else this.p=k},_d2:function(){this.q={};for(var a=0;a<this.p.length;a++){var b=this.p[a];if(this._c(b.iso2,b.dialCode,b.priority),b.areaCodes)for(var c=0;c<b.areaCodes.length;c++)this._c(b.iso2,b.dialCode+b.areaCodes[c])}},_e:function(){this.preferredCountries=[];for(var a=0;a<this.b.preferredCountries.length;a++){var b=this.b.preferredCountries[a].toLowerCase(),c=this._y(b,!1,!0);c&&this.preferredCountries.push(c)}},_f:function(){this.a.attr("autocomplete","off");var b="intl-tel-input";this.b.allowDropdown&&(b+=" allow-dropdown"),this.b.separateDialCode&&(b+=" separate-dial-code"),this.a.wrap(a("<div>",{"class":b})),this.k=a("<div>",{"class":"flag-container"}).insertBefore(this.a);var c=a("<div>",{"class":"selected-flag"});c.appendTo(this.k),this.l=a("<div>",{"class":"iti-flag"}).appendTo(c),this.b.separateDialCode&&(this.t=a("<div>",{"class":"selected-dial-code"}).appendTo(c)),this.b.allowDropdown?(c.attr("tabindex","0"),a("<div>",{"class":"iti-arrow"}).appendTo(c),this.m=a("<ul>",{"class":"country-list hide"}),this.preferredCountries.length&&(this._g(this.preferredCountries,"preferred"),a("<li>",{"class":"divider"}).appendTo(this.m)),this._g(this.p,""),this.o=this.m.children(".country"),this.b.dropdownContainer?this.dropdown=a("<div>",{"class":"intl-tel-input iti-container"}).append(this.m):this.m.appendTo(this.k)):this.o=a(),this.b.hiddenInput&&(this.hiddenInput=a("<input>",{type:"hidden",name:this.b.hiddenInput}).insertBefore(this.a))},_g:function(a,b){for(var c="",d=0;d<a.length;d++){var e=a[d];c+="<li class='country "+b+"' data-dial-code='"+e.dialCode+"' data-country-code='"+e.iso2+"'>",c+="<div class='flag-box'><div class='iti-flag "+e.iso2+"'></div></div>",c+="<span class='country-name'>"+e.name+"</span>",c+="<span class='dial-code'>+"+e.dialCode+"</span>",c+="</li>"}this.m.append(c)},_h:function(){var a=this.a.val();this._af(a)&&(!this._isRegionlessNanp(a)||this.b.nationalMode&&!this.b.initialCountry)?this._v(a):"auto"!==this.b.initialCountry&&(this.b.initialCountry?this._z(this.b.initialCountry.toLowerCase()):(this.j=this.preferredCountries.length?this.preferredCountries[0].iso2:this.p[0].iso2,a||this._z(this.j)),a||this.b.nationalMode||this.b.autoHideDialCode||this.b.separateDialCode||this.a.val("+"+this.s.dialCode)),a&&this._u(a)},_i:function(){this._j(),this.b.autoHideDialCode&&this._l(),this.b.allowDropdown&&this._i1(),this.hiddenInput&&this._initHiddenInputListener()},_initHiddenInputListener:function(){var a=this,b=this.a.closest("form");b.length&&b.submit(function(){a.hiddenInput.val(a.getNumber())})},_i1:function(){var a=this,b=this.a.closest("label");b.length&&b.on("click"+this.ns,function(b){a.m.hasClass("hide")?a.a.focus():b.preventDefault()}),this.l.parent().on("click"+this.ns,function(b){!a.m.hasClass("hide")||a.a.prop("disabled")||a.a.prop("readonly")||a._n()}),this.k.on("keydown"+a.ns,function(b){!a.m.hasClass("hide")||b.which!=i.b&&b.which!=i.c&&b.which!=i.j&&b.which!=i.d||(b.preventDefault(),b.stopPropagation(),a._n()),b.which==i.k&&a._ac()})},_i2:function(){var c=this;this.b.utilsScript?a.fn[f].windowLoaded?a.fn[f].loadUtils(this.b.utilsScript,this.i):a(b).on("load",function(){a.fn[f].loadUtils(c.b.utilsScript,c.i)}):this.i.resolve(),"auto"===this.b.initialCountry?this._i3():this.h.resolve()},_i3:function(){a.fn[f].autoCountry?this.handleAutoCountry():a.fn[f].startedLoadingAutoCountry||(a.fn[f].startedLoadingAutoCountry=!0,"function"==typeof this.b.geoIpLookup&&this.b.geoIpLookup(function(b){a.fn[f].autoCountry=b.toLowerCase(),setTimeout(function(){a(".intl-tel-input input").intlTelInput("handleAutoCountry")})}))},_j:function(){var a=this;this.a.on("keyup"+this.ns,function(){a._v(a.a.val())&&a._triggerCountryChange()}),this.a.on("cut"+this.ns+" paste"+this.ns,function(){setTimeout(function(){a._v(a.a.val())&&a._triggerCountryChange()})})},_j2:function(a){var b=this.a.attr("maxlength");return b&&a.length>b?a.substr(0,b):a},_l:function(){var b=this;this.a.on("mousedown"+this.ns,function(a){b.a.is(":focus")||b.a.val()||(a.preventDefault(),b.a.focus())}),this.a.on("focus"+this.ns,function(a){b.a.val()||b.a.prop("readonly")||!b.s.dialCode||(b.a.val("+"+b.s.dialCode),b.a.one("keypress.plus"+b.ns,function(a){a.which==i.f&&b.a.val("")}),setTimeout(function(){var a=b.a[0];if(b.d){var c=b.a.val().length;a.setSelectionRange(c,c)}}))});var c=this.a.prop("form");c&&a(c).on("submit"+this.ns,function(){b._removeEmptyDialCode()}),this.a.on("blur"+this.ns,function(){b._removeEmptyDialCode()})},_removeEmptyDialCode:function(){var a=this.a.val();if("+"==a.charAt(0)){var b=this._m(a);b&&this.s.dialCode!=b||this.a.val("")}this.a.off("keypress.plus"+this.ns)},_m:function(a){return a.replace(/\D/g,"")},_n:function(){this._o();var a=this.m.children(".active");a.length&&(this._x(a),this._ad(a)),this._p(),this.l.children(".iti-arrow").addClass("up"),this.a.trigger("open:countrydropdown")},_o:function(){var c=this;if(this.b.dropdownContainer&&this.dropdown.appendTo(this.b.dropdownContainer),this.n=this.m.removeClass("hide").outerHeight(),!this.g){var d=this.a.offset(),e=d.top,f=a(b).scrollTop(),g=e+this.a.outerHeight()+this.n<f+a(b).height(),h=e-this.n>f;if(this.m.toggleClass("dropup",!g&&h),this.b.dropdownContainer){var i=!g&&h?0:this.a.innerHeight();this.dropdown.css({top:e+i,left:d.left}),a(b).on("scroll"+this.ns,function(){c._ac()})}}},_p:function(){var b=this;this.m.on("mouseover"+this.ns,".country",function(c){b._x(a(this))}),this.m.on("click"+this.ns,".country",function(c){b._ab(a(this))});var d=!0;a("html").on("click"+this.ns,function(a){d||b._ac(),d=!1});var e="",f=null;a(c).on("keydown"+this.ns,function(a){a.preventDefault(),a.which==i.b||a.which==i.c?b._q(a.which):a.which==i.d?b._r():a.which==i.e?b._ac():(a.which>=i.A&&a.which<=i.Z||a.which==i.j)&&(f&&clearTimeout(f),e+=String.fromCharCode(a.which),b._s(e),f=setTimeout(function(){e=""},1e3))})},_q:function(a){var b=this.m.children(".highlight").first(),c=a==i.b?b.prev():b.next();c.length&&(c.hasClass("divider")&&(c=a==i.b?c.prev():c.next()),this._x(c),this._ad(c))},_r:function(){var a=this.m.children(".highlight").first();a.length&&this._ab(a)},_s:function(a){for(var b=0;b<this.p.length;b++)if(this._t(this.p[b].name,a)){var c=this.m.children("[data-country-code="+this.p[b].iso2+"]").not(".preferred");this._x(c),this._ad(c,!0);break}},_t:function(a,b){return a.substr(0,b.length).toUpperCase()==b},_u:function(a){if(this.b.formatOnDisplay&&b.intlTelInputUtils&&this.s){var c=this.b.separateDialCode||!this.b.nationalMode&&"+"==a.charAt(0)?intlTelInputUtils.numberFormat.INTERNATIONAL:intlTelInputUtils.numberFormat.NATIONAL;a=intlTelInputUtils.formatNumber(a,this.s.iso2,c)}a=this._ah(a),this.a.val(a)},_v:function(b){b&&this.b.nationalMode&&"1"==this.s.dialCode&&"+"!=b.charAt(0)&&("1"!=b.charAt(0)&&(b="1"+b),b="+"+b);var c=this._af(b),d=null,e=this._m(b);if(c){var f=this.q[this._m(c)],g=a.inArray(this.s.iso2,f)>-1,h="+1"==c&&e.length>=4;if((!("1"==this.s.dialCode)||!this._isRegionlessNanp(e))&&(!g||h))for(var i=0;i<f.length;i++)if(f[i]){d=f[i];break}}else"+"==b.charAt(0)&&e.length?d="":b&&"+"!=b||(d=this.j);return null!==d&&this._z(d)},_isRegionlessNanp:function(b){var c=this._m(b);if("1"==c.charAt(0)){var d=c.substr(1,3);return a.inArray(d,j)>-1}return!1},_x:function(a){this.o.removeClass("highlight"),a.addClass("highlight")},_y:function(a,b,c){for(var d=b?k:this.p,e=0;e<d.length;e++)if(d[e].iso2==a)return d[e];if(c)return null;throw new Error("No country data for '"+a+"'")},_z:function(a){var b=this.s.iso2?this.s:{};this.s=a?this._y(a,!1,!1):{},this.s.iso2&&(this.j=this.s.iso2),this.l.attr("class","iti-flag "+a);var c=a?this.s.name+": +"+this.s.dialCode:"Unknown";if(this.l.parent().attr("title",c),this.b.separateDialCode){var d=this.s.dialCode?"+"+this.s.dialCode:"",e=this.a.parent();b.dialCode&&e.removeClass("iti-sdc-"+(b.dialCode.length+1)),d&&e.addClass("iti-sdc-"+d.length),this.t.text(d)}return this._aa(),this.o.removeClass("active"),a&&this.o.find(".iti-flag."+a).first().closest(".country").addClass("active"),b.iso2!==a},_aa:function(){var a="aggressive"===this.b.autoPlaceholder||!this.e&&(this.b.autoPlaceholder===!0||"polite"===this.b.autoPlaceholder);if(b.intlTelInputUtils&&a){var c=intlTelInputUtils.numberType[this.b.placeholderNumberType],d=this.s.iso2?intlTelInputUtils.getExampleNumber(this.s.iso2,this.b.nationalMode,c):"";d=this._ah(d),"function"==typeof this.b.customPlaceholder&&(d=this.b.customPlaceholder(d,this.s)),this.a.attr("placeholder",d)}},_ab:function(a){var b=this._z(a.attr("data-country-code"));if(this._ac(),this._ae(a.attr("data-dial-code"),!0),this.a.focus(),this.d){var c=this.a.val().length;this.a[0].setSelectionRange(c,c)}b&&this._triggerCountryChange()},_ac:function(){this.m.addClass("hide"),this.l.children(".iti-arrow").removeClass("up"),a(c).off(this.ns),a("html").off(this.ns),this.m.off(this.ns),this.b.dropdownContainer&&(this.g||a(b).off("scroll"+this.ns),this.dropdown.detach()),this.a.trigger("close:countrydropdown")},_ad:function(a,b){var c=this.m,d=c.height(),e=c.offset().top,f=e+d,g=a.outerHeight(),h=a.offset().top,i=h+g,j=h-e+c.scrollTop(),k=d/2-g/2;if(h<e)b&&(j-=k),c.scrollTop(j);else if(i>f){b&&(j+=k);var l=d-g;c.scrollTop(j-l)}},_ae:function(a,b){var c,d=this.a.val();if(a="+"+a,"+"==d.charAt(0)){var e=this._af(d);c=e?d.replace(e,a):a}else{if(this.b.nationalMode||this.b.separateDialCode)return;if(d)c=a+d;else{if(!b&&this.b.autoHideDialCode)return;c=a}}this.a.val(c)},_af:function(b){var c="";if("+"==b.charAt(0))for(var d="",e=0;e<b.length;e++){var f=b.charAt(e);if(a.isNumeric(f)&&(d+=f,this.q[d]&&(c=b.substr(0,e+1)),4==d.length))break}return c},_ag:function(){var b,c=a.trim(this.a.val()),d=this.s.dialCode,e=this._m(c),f="1"==e.charAt(0)?e:"1"+e;return b=this.b.separateDialCode?"+"+d:"+"!=c.charAt(0)&&"1"!=c.charAt(0)&&d&&"1"==d.charAt(0)&&4==d.length&&d!=f.substr(0,4)?d.substr(1):"",b+c},_ah:function(a){if(this.b.separateDialCode){var b=this._af(a);if(b){null!==this.s.areaCodes&&(b="+"+this.s.dialCode);var c=" "===a[b.length]||"-"===a[b.length]?b.length+1:b.length;a=a.substr(c)}}return this._j2(a)},_triggerCountryChange:function(){this.a.trigger("countrychange",this.s)},handleAutoCountry:function(){"auto"===this.b.initialCountry&&(this.j=a.fn[f].autoCountry,this.a.val()||this.setCountry(this.j),this.h.resolve())},handleUtils:function(){b.intlTelInputUtils&&(this.a.val()&&this._u(this.a.val()),this._aa()),this.i.resolve()},destroy:function(){if(this.allowDropdown&&(this._ac(),this.l.parent().off(this.ns),this.a.closest("label").off(this.ns)),this.b.autoHideDialCode){var b=this.a.prop("form");b&&a(b).off(this.ns)}this.a.off(this.ns),this.a.parent().before(this.a).remove()},getExtension:function(){return b.intlTelInputUtils?intlTelInputUtils.getExtension(this._ag(),this.s.iso2):""},getNumber:function(a){return b.intlTelInputUtils?intlTelInputUtils.formatNumber(this._ag(),this.s.iso2,a):""},getNumberType:function(){return b.intlTelInputUtils?intlTelInputUtils.getNumberType(this._ag(),this.s.iso2):-99},getSelectedCountryData:function(){return this.s},getValidationError:function(){return b.intlTelInputUtils?intlTelInputUtils.getValidationError(this._ag(),this.s.iso2):-99},isValidNumber:function(){var c=a.trim(this._ag()),d=this.b.nationalMode?this.s.iso2:"";return b.intlTelInputUtils?intlTelInputUtils.isValidNumber(c,d):null},setCountry:function(a){a=a.toLowerCase(),this.l.hasClass(a)||(this._z(a),this._ae(this.s.dialCode,!1),this._triggerCountryChange())},setNumber:function(a){var b=this._v(a);this._u(a),b&&this._triggerCountryChange()},setPlaceholderNumberType:function(a){this.b.placeholderNumberType=a,this._aa()}},a.fn[f]=function(b){var c=arguments;if(b===d||"object"==typeof b){var g=[];return this.each(function(){if(!a.data(this,"plugin_"+f)){var c=new e(this,b),d=c._a();g.push(d[0]),g.push(d[1]),a.data(this,"plugin_"+f,c)}}),a.when.apply(null,g)}if("string"==typeof b&&"_"!==b[0]){var h;return this.each(function(){var d=a.data(this,"plugin_"+f);d instanceof e&&"function"==typeof d[b]&&(h=d[b].apply(d,Array.prototype.slice.call(c,1))),"destroy"===b&&a.data(this,"plugin_"+f,null)}),h!==d?h:this}},a.fn[f].getCountryData=function(){return k},a.fn[f].loadUtils=function(b,c){a.fn[f].loadedUtilsScript?c&&c.resolve():(a.fn[f].loadedUtilsScript=!0,a.ajax({type:"GET",url:b,complete:function(){a(".intl-tel-input input").intlTelInput("handleUtils")},dataType:"script",cache:!0}))},a.fn[f].defaults=h,a.fn[f].version="12.1.3";for(var k=[["Afghanistan (‫افغانستان‬‎)","af","93"],["Albania (Shqipëri)","al","355"],["Algeria (‫الجزائر‬‎)","dz","213"],["American Samoa","as","1684"],["Andorra","ad","376"],["Angola","ao","244"],["Anguilla","ai","1264"],["Antigua and Barbuda","ag","1268"],["Argentina","ar","54"],["Armenia (Հայաստան)","am","374"],["Aruba","aw","297"],["Australia","au","61",0],["Austria (Österreich)","at","43"],["Azerbaijan (Azərbaycan)","az","994"],["Bahamas","bs","1242"],["Bahrain (‫البحرين‬‎)","bh","973"],["Bangladesh (বাংলাদেশ)","bd","880"],["Barbados","bb","1246"],["Belarus (Беларусь)","by","375"],["Belgium (België)","be","32"],["Belize","bz","501"],["Benin (Bénin)","bj","229"],["Bermuda","bm","1441"],["Bhutan (འབྲུག)","bt","975"],["Bolivia","bo","591"],["Bosnia and Herzegovina (Босна и Херцеговина)","ba","387"],["Botswana","bw","267"],["Brazil (Brasil)","br","55"],["British Indian Ocean Territory","io","246"],["British Virgin Islands","vg","1284"],["Brunei","bn","673"],["Bulgaria (България)","bg","359"],["Burkina Faso","bf","226"],["Burundi (Uburundi)","bi","257"],["Cambodia (កម្ពុជា)","kh","855"],["Cameroon (Cameroun)","cm","237"],["Canada","ca","1",1,["204","226","236","249","250","289","306","343","365","387","403","416","418","431","437","438","450","506","514","519","548","579","581","587","604","613","639","647","672","705","709","742","778","780","782","807","819","825","867","873","902","905"]],["Cape Verde (Kabu Verdi)","cv","238"],["Caribbean Netherlands","bq","599",1],["Cayman Islands","ky","1345"],["Central African Republic (République centrafricaine)","cf","236"],["Chad (Tchad)","td","235"],["Chile","cl","56"],["China (中国)","cn","86"],["Christmas Island","cx","61",2],["Cocos (Keeling) Islands","cc","61",1],["Colombia","co","57"],["Comoros (‫جزر القمر‬‎)","km","269"],["Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)","cd","243"],["Congo (Republic) (Congo-Brazzaville)","cg","242"],["Cook Islands","ck","682"],["Costa Rica","cr","506"],["Côte d’Ivoire","ci","225"],["Croatia (Hrvatska)","hr","385"],["Cuba","cu","53"],["Curaçao","cw","599",0],["Cyprus (Κύπρος)","cy","357"],["Czech Republic (Česká republika)","cz","420"],["Denmark (Danmark)","dk","45"],["Djibouti","dj","253"],["Dominica","dm","1767"],["Dominican Republic (República Dominicana)","do","1",2,["809","829","849"]],["Ecuador","ec","593"],["Egypt (‫مصر‬‎)","eg","20"],["El Salvador","sv","503"],["Equatorial Guinea (Guinea Ecuatorial)","gq","240"],["Eritrea","er","291"],["Estonia (Eesti)","ee","372"],["Ethiopia","et","251"],["Falkland Islands (Islas Malvinas)","fk","500"],["Faroe Islands (Føroyar)","fo","298"],["Fiji","fj","679"],["Finland (Suomi)","fi","358",0],["France","fr","33"],["French Guiana (Guyane française)","gf","594"],["French Polynesia (Polynésie française)","pf","689"],["Gabon","ga","241"],["Gambia","gm","220"],["Georgia (საქართველო)","ge","995"],["Germany (Deutschland)","de","49"],["Ghana (Gaana)","gh","233"],["Gibraltar","gi","350"],["Greece (Ελλάδα)","gr","30"],["Greenland (Kalaallit Nunaat)","gl","299"],["Grenada","gd","1473"],["Guadeloupe","gp","590",0],["Guam","gu","1671"],["Guatemala","gt","502"],["Guernsey","gg","44",1],["Guinea (Guinée)","gn","224"],["Guinea-Bissau (Guiné Bissau)","gw","245"],["Guyana","gy","592"],["Haiti","ht","509"],["Honduras","hn","504"],["Hong Kong (香港)","hk","852"],["Hungary (Magyarország)","hu","36"],["Iceland (Ísland)","is","354"],["India (भारत)","in","91"],["Indonesia","id","62"],["Iran (‫ایران‬‎)","ir","98"],["Iraq (‫العراق‬‎)","iq","964"],["Ireland","ie","353"],["Isle of Man","im","44",2],["Israel (‫ישראל‬‎)","il","972"],["Italy (Italia)","it","39",0],["Jamaica","jm","1876"],["Japan (日本)","jp","81"],["Jersey","je","44",3],["Jordan (‫الأردن‬‎)","jo","962"],["Kazakhstan (Казахстан)","kz","7",1],["Kenya","ke","254"],["Kiribati","ki","686"],["Kosovo","xk","383"],["Kuwait (‫الكويت‬‎)","kw","965"],["Kyrgyzstan (Кыргызстан)","kg","996"],["Laos (ລາວ)","la","856"],["Latvia (Latvija)","lv","371"],["Lebanon (‫لبنان‬‎)","lb","961"],["Lesotho","ls","266"],["Liberia","lr","231"],["Libya (‫ليبيا‬‎)","ly","218"],["Liechtenstein","li","423"],["Lithuania (Lietuva)","lt","370"],["Luxembourg","lu","352"],["Macau (澳門)","mo","853"],["Macedonia (FYROM) (Македонија)","mk","389"],["Madagascar (Madagasikara)","mg","261"],["Malawi","mw","265"],["Malaysia","my","60"],["Maldives","mv","960"],["Mali","ml","223"],["Malta","mt","356"],["Marshall Islands","mh","692"],["Martinique","mq","596"],["Mauritania (‫موريتانيا‬‎)","mr","222"],["Mauritius (Moris)","mu","230"],["Mayotte","yt","262",1],["Mexico (México)","mx","52"],["Micronesia","fm","691"],["Moldova (Republica Moldova)","md","373"],["Monaco","mc","377"],["Mongolia (Монгол)","mn","976"],["Montenegro (Crna Gora)","me","382"],["Montserrat","ms","1664"],["Morocco (‫المغرب‬‎)","ma","212",0],["Mozambique (Moçambique)","mz","258"],["Myanmar (Burma) (မြန်မာ)","mm","95"],["Namibia (Namibië)","na","264"],["Nauru","nr","674"],["Nepal (नेपाल)","np","977"],["Netherlands (Nederland)","nl","31"],["New Caledonia (Nouvelle-Calédonie)","nc","687"],["New Zealand","nz","64"],["Nicaragua","ni","505"],["Niger (Nijar)","ne","227"],["Nigeria","ng","234"],["Niue","nu","683"],["Norfolk Island","nf","672"],["North Korea (조선 민주주의 인민 공화국)","kp","850"],["Northern Mariana Islands","mp","1670"],["Norway (Norge)","no","47",0],["Oman (‫عُمان‬‎)","om","968"],["Pakistan (‫پاکستان‬‎)","pk","92"],["Palau","pw","680"],["Palestine (‫فلسطين‬‎)","ps","970"],["Panama (Panamá)","pa","507"],["Papua New Guinea","pg","675"],["Paraguay","py","595"],["Peru (Perú)","pe","51"],["Philippines","ph","63"],["Poland (Polska)","pl","48"],["Portugal","pt","351"],["Puerto Rico","pr","1",3,["787","939"]],["Qatar (‫قطر‬‎)","qa","974"],["Réunion (La Réunion)","re","262",0],["Romania (România)","ro","40"],["Russia (Россия)","ru","7",0],["Rwanda","rw","250"],["Saint Barthélemy","bl","590",1],["Saint Helena","sh","290"],["Saint Kitts and Nevis","kn","1869"],["Saint Lucia","lc","1758"],["Saint Martin (Saint-Martin (partie française))","mf","590",2],["Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)","pm","508"],["Saint Vincent and the Grenadines","vc","1784"],["Samoa","ws","685"],["San Marino","sm","378"],["São Tomé and Príncipe (São Tomé e Príncipe)","st","239"],["Saudi Arabia (‫المملكة العربية السعودية‬‎)","sa","966"],["Senegal (Sénégal)","sn","221"],["Serbia (Србија)","rs","381"],["Seychelles","sc","248"],["Sierra Leone","sl","232"],["Singapore","sg","65"],["Sint Maarten","sx","1721"],["Slovakia (Slovensko)","sk","421"],["Slovenia (Slovenija)","si","386"],["Solomon Islands","sb","677"],["Somalia (Soomaaliya)","so","252"],["South Africa","za","27"],["South Korea (대한민국)","kr","82"],["South Sudan (‫جنوب السودان‬‎)","ss","211"],["Spain (España)","es","34"],["Sri Lanka (ශ්‍රී ලංකාව)","lk","94"],["Sudan (‫السودان‬‎)","sd","249"],["Suriname","sr","597"],["Svalbard and Jan Mayen","sj","47",1],["Swaziland","sz","268"],["Sweden (Sverige)","se","46"],["Switzerland (Schweiz)","ch","41"],["Syria (‫سوريا‬‎)","sy","963"],["Taiwan (台灣)","tw","886"],["Tajikistan","tj","992"],["Tanzania","tz","255"],["Thailand (ไทย)","th","66"],["Timor-Leste","tl","670"],["Togo","tg","228"],["Tokelau","tk","690"],["Tonga","to","676"],["Trinidad and Tobago","tt","1868"],["Tunisia (‫تونس‬‎)","tn","216"],["Turkey (Türkiye)","tr","90"],["Turkmenistan","tm","993"],["Turks and Caicos Islands","tc","1649"],["Tuvalu","tv","688"],["U.S. Virgin Islands","vi","1340"],["Uganda","ug","256"],["Ukraine (Україна)","ua","38"],["United Arab Emirates (‫الإمارات العربية المتحدة‬‎)","ae","971"],["United Kingdom","gb","44",0],["United States","us","1",0],["Uruguay","uy","598"],["Uzbekistan (Oʻzbekiston)","uz","998"],["Vanuatu","vu","678"],["Vatican City (Città del Vaticano)","va","39",1],["Venezuela","ve","58"],["Vietnam (Việt Nam)","vn","84"],["Wallis and Futuna (Wallis-et-Futuna)","wf","681"],["Western Sahara (‫الصحراء الغربية‬‎)","eh","212",1],["Yemen (‫اليمن‬‎)","ye","967"],["Zambia","zm","260"],["Zimbabwe","zw","263"],["Åland Islands","ax","358",1]],l=0;l<k.length;l++){var m=k[l];k[l]={name:m[0],iso2:m[1],dialCode:m[2],priority:m[3]||0,areaCodes:m[4]||null}}});


// viewportChecker.js

!function(f){f.fn.viewportChecker=function(o){var r={classToAdd:"visible",classToRemove:"invisible",classToAddForFullView:"full-visible",removeClassAfterAnimation:!1,offset:100,repeat:!1,invertBottomOffset:!0,callbackFunction:function(o,t){},scrollHorizontal:!1,scrollBox:window};f.extend(r,o);var t=this,c={height:f(r.scrollBox).height(),width:f(r.scrollBox).width()};return this.checkElements=function(){var n,d;r.scrollHorizontal?(n=Math.max(f("html").scrollLeft(),f("body").scrollLeft(),f(window).scrollLeft()),d=n+c.width):(n=Math.max(f("html").scrollTop(),f("body").scrollTop(),f(window).scrollTop()),d=n+c.height),t.each(function(){var o=f(this),t={},e={};if(o.data("vp-add-class")&&(e.classToAdd=o.data("vp-add-class")),o.data("vp-remove-class")&&(e.classToRemove=o.data("vp-remove-class")),o.data("vp-add-class-full-view")&&(e.classToAddForFullView=o.data("vp-add-class-full-view")),o.data("vp-keep-add-class")&&(e.removeClassAfterAnimation=o.data("vp-remove-after-animation")),o.data("vp-offset")&&(e.offset=o.data("vp-offset")),o.data("vp-repeat")&&(e.repeat=o.data("vp-repeat")),o.data("vp-scrollHorizontal")&&(e.scrollHorizontal=o.data("vp-scrollHorizontal")),o.data("vp-invertBottomOffset")&&(e.scrollHorizontal=o.data("vp-invertBottomOffset")),f.extend(t,r),f.extend(t,e),!o.data("vp-animated")||t.repeat){0<String(t.offset).indexOf("%")&&(t.offset=parseInt(t.offset)/100*c.height);var a=t.scrollHorizontal?o.offset().left:o.offset().top,s=t.scrollHorizontal?a+o.width():a+o.height(),l=Math.round(a)+t.offset,i=t.scrollHorizontal?l+o.width():l+o.height();t.invertBottomOffset&&(i-=2*t.offset),l<d&&n<i?(o.removeClass(t.classToRemove),o.addClass(t.classToAdd),t.callbackFunction(o,"add"),s<=d&&n<=a?o.addClass(t.classToAddForFullView):o.removeClass(t.classToAddForFullView),o.data("vp-animated",!0),t.removeClassAfterAnimation&&o.one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){o.removeClass(t.classToAdd)})):o.hasClass(t.classToAdd)&&t.repeat&&(o.removeClass(t.classToAdd+" "+t.classToAddForFullView),t.callbackFunction(o,"remove"),o.data("vp-animated",!1))}})},("ontouchstart"in window||"onmsgesturechange"in window)&&f(document).bind("touchmove MSPointerMove pointermove",this.checkElements),f(r.scrollBox).bind("load scroll",this.checkElements),f(window).resize(function(o){c={height:f(r.scrollBox).height(),width:f(r.scrollBox).width()},t.checkElements()}),this.checkElements(),this}}(jQuery);

$(function () {

    // sticky top-header

        // $('.top-header').removeClass('default')
        // $('#menu').addClass('top-header__right')
        // $('#menu').removeClass('top-header__right-def')
        $(window).scroll(function () {
            if ($(this).scrollTop() > 1) {
                $('.top-header__logo').addClass('top-header__logo__blue')
                // $('#menu').removeClass('top-header__right')
                // $('#menu').addClass('top-header__right-def')
                $('.main-arrow-down').hide()
            } else {
              $('.top-header__logo').removeClass('top-header__logo__blue')

                // $('.top-header').removeClass('default')
                // $('#menu').removeClass('top-header__right-def')
                // $('#menu').removeClass('top-header__right')
                if ($(window).width() < 480) {
                    $('.main-arrow-down').show()
                }
            }
        })
        // body...

        // $('.language-select').click(function () {
        //     $(this).toggleClass('open');
        // })
        //
        // $('.language-select li').click(function () {
        //     var setLang = $('.language-select').data('location'),
        //         dataLangSelect = $(this).data('lang')
        //     $('.language-select').data('location', dataLangSelect);
        //     $('.language-select li').removeClass('active');
        //     $(this).toggleClass('active');
        // })
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
            // $('#menu').stop().fadeIn()
            $('.top-header__right-def').css('max-height', '460px');
            $('.top-header__btn-wrap').fadeOut();
        })

        $('#navigation__close-mnu').on('click', function () {
            // $('#menu').stop().fadeOut()
            $('.top-header__right-def').css('max-height', '0px')
            $('.top-header__btn-wrap').fadeIn();
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
      $('#callback-btn_ctc').click(function () {
              $('.callback-form-pupop-wrap-ctc').fadeIn()
          })
      $('#callback-form-btn-close_ctc').click(function () {
              $('.callback-form-pupop-wrap-ctc').fadeOut()
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
            $('#path120').css('opacity', '0')
        })()

        $('#polygon185').mouseover(function () {
          $('.hidden_box_info').addClass('hidden_over');
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
          $('.hidden_box_info').addClass('hidden_over');
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
          $('.hidden_box_info').addClass('hidden_over');
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
          $('.hidden_box_info').addClass('hidden_over');
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
          $('.hidden_box_info').addClass('hidden_over');
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
          $('.hidden_box_info').addClass('hidden_over');
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
          $('.hidden_box_info').addClass('hidden_over');
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
          $('.hidden_box_info').addClass('hidden_over');
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
          $('.hidden_box_info').addClass('hidden_over');
            $('#g109-4').css('opacity', '1')
            $('#polygon189-6').css('opacity', '0.7')
            $('#polygon189-6').css('cursor', 'pointer')
            $('#level').html($('#g109-4').find('tspan').html())
            $('#appart').html($('#g109-4').attr('data-floor'))
        }).mouseout(function () {
            $('#g109-4').css('opacity', '0')
            $('#polygon189-6').css('opacity', '0')
        })
        $('#path120').mouseover(function () {
             $('#g153-8-6').css('opacity', '1')
             $('#path120').css('opacity', '0.7')
             $('#path120').css('cursor', 'pointer')
             $('#level').html($('#g153-8-6').find('tspan').html())
             $('#appart').html($('#g153-8-6').attr('data-floor'))
         }).mouseout(function () {
             $('#g153-8-6').css('opacity', '0')
             $('#path120').css('opacity', '0')
         })

    //=========end floor page
    //========= for map js
    if ($('#map').length > 0) {

        blockMap()

        function blockMap() {

            function CreateMarker(mapLocation, popupContent, markerImage) {
                this.mapLocation = mapLocation;
                this.markerImage = markerImage;
                this.type = markerImage.type;
            } //end CrateMarker

            function PrimaryMarker(mapLocation, popupContent, markerImage) {
                CreateMarker.call(this, mapLocation, popupContent, markerImage);
                this.marker = new google.maps.Marker({
                    position: this.mapLocation,
                    map: map,
                    icon: markerImage,
                    animation: google.maps.Animation.BOUNCE
                });
            }

            // Конструктор для создания маркеров на карте 1 параметр широта и долгота, 2 текст,
            // 3 координаты иконки со спрайта если впадло переделовать спрайт передай стрингу адресс к иконке.
            function SecondaryMarker(mapLocation, popupContent, markerImage) {
                CreateMarker.call(this, mapLocation, popupContent, markerImage);
                this.popupContent ="<p class='content'>" + popupContent + "</p>" || '';
                this.infoWindow = new google.maps.InfoWindow({content: this.popupContent});
                this.marker = new google.maps.Marker({
                    position: this.mapLocation,
                    map: map,
                    icon: new google.maps.MarkerImage("/img/location/spritesheet_map.png", new google.maps.Size(30, 38), new google.maps.Point(this.markerImage.x, this.markerImage.y)),
                    animation: google.maps.Animation.DROP
                });
                var openInfoWindow = (function() {
                    this.infoWindow.open(map, this.marker);
                }).bind(this);

                this.marker.addListener('click',openInfoWindow);
                }

            //если впадло переделовать спрайт юзай данный передай стрингу адресс к иконке.
            function SecondaryMarkerNoSprite(mapLocation, popupContent, markerImage) {
                CreateMarker.call(this, mapLocation, popupContent, markerImage);
                this.popupContent ="<p class='content'>" + popupContent + "</p>" || '';
                this.infoWindow = new google.maps.InfoWindow({content: this.popupContent});
                this.marker = new google.maps.Marker({
                    position: this.mapLocation,
                    map: map,
                    icon: markerImage,
                    animation: google.maps.Animation.DROP
                });

                var openInfoWindow = (function() {
                    this.infoWindow.open(map, this.marker);
                }).bind(this);

                this.marker.addListener('click',openInfoWindow);
            }

            // var sport_icon = {x: 136, y: 0, type: 'sport'};
            // var kindergarden_icon = {x: 170, y: 0, type: 'kindergarden'};
            // var school_icon = {x: 408, y: 0, type: 'school'};
            // var shopping_mall = {x: 340, y: 0, type: 'shopping-mall'};
            // var market_icon = {x: 204, y: 0, type: 'market'};
            // var pharmacy_icon = {x: 0, y: 0, type: 'pharmacy'};
            // var bank_icon = {x: 34, y: 0, type: 'bank'};
            // var beauty_icon = {x: 68, y: 0, type: 'beauty-salon'};
            // var park_icon = {x: 238, y: 0, type: 'park'};
            // var restaraunt_icon = {x: 272, y: 0, type: 'restaraunt'};

            var sport_icon = {x: 120, y: 0, type: 'sport'};
            var kindergarden_icon = {x: 150, y: 0, type: 'kindergarden'};
            var school_icon = {x: 360, y: 0, type: 'school'};
            var shopping_mall = {x: 300, y: 0, type: 'shopping-mall'};
            var market_icon = {x: 180, y: 0, type: 'market'};
            var pharmacy_icon = {x: 0, y: 0, type: 'pharmacy'};
            var bank_icon = {x: 30, y: 0, type: 'bank'};
            var beauty_icon = {x: 60, y: 0, type: 'beauty-salon'};
            var park_icon = {x: 210, y: 0, type: 'park'};
            var restaraunt_icon = {x: 240, y: 0, type: 'restaraunt'};

            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 50.449997, lng: 30.488734},
                zoom: 16,
                disableDefaultUI: true,
                scrollwheel: false
            }),
            marker1 = new PrimaryMarker({lat: 50.449997, lng: 30.488734}, '', '/img/location/logo.png'),

            marker2 = new SecondaryMarker({lat: 50.453684, lng: 30.483745}, 'Київський професійно-педагогічний коледж ім. А. Макаренка', school_icon),
            marker3 = new SecondaryMarker({lat: 50.447367, lng: 30.494291}, 'Сушія', restaraunt_icon),
            marker4 = new SecondaryMarker({lat: 50.447094, lng: 30.488583}, 'ТРЦ Україна', shopping_mall),
            marker5 = new SecondaryMarker({lat: 50.446370, lng: 30.491995}, 'Сільпо', market_icon),
            marker6 = new SecondaryMarker({lat: 50.443568, lng: 30.510175}, 'Київська міська клінічна лікарня №18', pharmacy_icon),
            marker7 = new SecondaryMarker({lat: 50.455296, lng: 30.481891}, 'Стадіон “Старт”', sport_icon),
            marker8 = new SecondaryMarker({lat: 50.445161, lng: 30.506939}, 'Спортивний клуб “Олімп”', sport_icon),
            marker9 = new SecondaryMarker({lat: 50.449392, lng: 30.490774}, 'Біцепс', sport_icon),
            marker10 = new SecondaryMarker({lat: 50.449519, lng: 30.493499}, 'Скорпіон', sport_icon),
            marker11 = new SecondaryMarker({lat: 50.452089, lng: 30.490791}, 'Спортивна студія', sport_icon),
            marker12 = new SecondaryMarker({lat: 50.453269, lng: 30.500953}, 'VOIN Crossfit', sport_icon),
            marker13 = new SecondaryMarker({lat: 50.455817, lng: 30.501700}, 'HOT Yoga', sport_icon),
            marker14 = new SecondaryMarker({lat: 50.447641, lng: 30.505395}, 'Київський велотрек', sport_icon),
            marker15 = new SecondaryMarker({lat: 50.448549, lng: 30.490797}, 'Дошкільний навчальний заклад (дитячий садок) комбінованого типу №23', kindergarden_icon),
            marker16 = new SecondaryMarker({lat: 50.451539, lng: 30.493802}, 'Дошкільний навчальний заклад (ясла-садок) №545', kindergarden_icon),
            marker17 = new SecondaryMarker({lat: 50.45374, lng: 30.4916779}, 'Дошкільний навчальний заклад (ясла-садок) №543', kindergarden_icon),
            marker18 = new SecondaryMarker({lat: 50.4471533, lng: 30.4978363}, 'Загальноосвітня школа №58', school_icon),
            marker19 = new SecondaryMarker({lat: 50.446157, lng: 30.502285}, 'Спеціалізована школа І-ІІІ ступенів №135', school_icon),
            marker20 = new SecondaryMarker({lat: 50.45915, lng: 30.403417}, 'Спеціалізована школа №73', school_icon),
            marker21 = new SecondaryMarker({lat: 50.447052, lng: 30.484529}, 'Спеціалізована школа №41 ім. З. К. Слюсаренка', school_icon),
            marker22 = new SecondaryMarker({lat: 50.451533, lng: 30.502462}, 'Спеціалізована школа І-ІІІ ст. №91', school_icon),
            marker23 = new SecondaryMarker({lat: 50.4506335, lng: 30.4844456}, 'Гімназія №153 ім. О. С. Пушкіна', school_icon),
            marker24 = new SecondaryMarker({lat: 50.44702, lng: 30.49696}, 'Гімназія НПУ ім. М. П. Драгоманова', school_icon),
            marker25 = new SecondaryMarker({lat: 50.4525455, lng: 30.493347}, 'Ліцей №38 ім. В. М. Молчанова', school_icon),
            marker26 = new SecondaryMarker({lat: 50.4486665, lng: 30.5022426}, 'Французький ліцей імені Анни Київської', school_icon),
            // marker27 = new SecondaryMarker({lat: 50.4471015, lng: 30.4884885}, 'ТЦ “Україна”', shopping_mall),
            marker28 = new SecondaryMarker({lat: 50.4475675, lng: 30.485456}, 'Велика Кишеня', market_icon),
            marker29 = new SecondaryMarker({lat: 50.4474364, lng: 30.4946935}, 'Сільпо', market_icon),
            marker30 = new SecondaryMarker({lat: 50.4536327, lng: 30.4850769}, 'Billa', market_icon),
            marker31 = new SecondaryMarker({lat: 50.452734, lng: 30.4898896}, 'Яблучко', market_icon),
            marker32 = new SecondaryMarker({lat: 50.45602, lng: 30.494074}, 'Молоко від фермера', market_icon),
            marker33 = new SecondaryMarker({lat: 50.4519, lng: 30.487701}, 'Дари моря', market_icon),
            marker34 = new SecondaryMarker({lat: 50.452043, lng: 30.4893241}, 'Аптека низьких цін', pharmacy_icon),
            marker35 = new SecondaryMarker({lat: 50.448669, lng: 30.493562}, 'Аптека низьких цін', pharmacy_icon),
            marker36 = new SecondaryMarker({lat: 50.4523985, lng: 30.4893798}, 'Віталюкс', pharmacy_icon),
            marker37 = new SecondaryMarker({lat: 50.448213, lng: 30.493434}, 'Копійка', pharmacy_icon),
            marker38 = new SecondaryMarker({lat: 50.450225, lng: 30.495573}, 'MIXTURA.UA', pharmacy_icon),
            marker39 = new SecondaryMarker({lat: 50.450083, lng: 30.49622}, 'Доброго дня', pharmacy_icon),
            marker40 = new SecondaryMarker({lat: 50.4480562, lng: 30.4960112}, 'Мірра', pharmacy_icon),
            marker41 = new SecondaryMarker({lat: 50.451772, lng: 30.488933}, 'OTP Bank', bank_icon),
            marker42 = new SecondaryMarker({lat: 50.450565, lng: 30.497349}, 'Альфа-Банк', bank_icon),
            marker43 = new SecondaryMarker({lat: 50.4517615, lng: 30.4894761}, 'ПриватБанк', bank_icon),
            marker44 = new SecondaryMarker({lat: 50.452734, lng: 30.4898896}, 'Universal Bank', bank_icon),
            marker45 = new SecondaryMarker({lat: 50.4526656, lng: 30.4895322}, 'Сбербанк', bank_icon),
            marker46 = new SecondaryMarker({lat: 50.4476078, lng: 30.4959892}, 'VT Style Hair Studio', beauty_icon),
            marker47 = new SecondaryMarker({lat: 50.4436962, lng: 30.4965465}, 'HAIR.BROW.MAKEUP STUDIO', beauty_icon),
            marker48 = new SecondaryMarker({lat: 50.455922, lng: 30.493698}, 'Grow Brow', beauty_icon),
            marker49 = new SecondaryMarker({lat: 50.4498631, lng: 30.4939752}, 'U lab beauty bar', beauty_icon),
            marker50 = new SecondaryMarker({lat: 50.453975, lng: 30.498752}, 'Павлівський садок', park_icon),
            marker51 = new SecondaryMarker({lat: 50.385425, lng: 30.691592}, 'Сквер ім. Чкалова', park_icon),
            marker52 = new SecondaryMarker({lat: 50.4491674, lng: 30.5028736}, 'Парк ім. Олеся Гончара', park_icon),
            marker53 = new SecondaryMarker({lat: 50.4442125, lng: 30.4972547}, 'Ботанічний сад ім. Олександра Фоміна', park_icon),
            marker54 = new SecondaryMarker({lat: 50.4418816, lng: 30.5107143}, 'Парк ім. Тараса Шевченка', park_icon);
            marker55 = new SecondaryMarkerNoSprite({lat: 50.446983, lng: 30.492378}, 'Площа Перемоги', '/img/location/victory.png'),
            marker56 = new SecondaryMarkerNoSprite({lat: 50.444385, lng: 30.506032}, 'Станція метро “Університет”', '/img/location/subway.png'),
            marker57 = new SecondaryMarkerNoSprite({lat: 50.440369, lng: 30.489587}, 'Залізничний вокзал', '/img/location/victory.png'),
            marker58 = new SecondaryMarkerNoSprite({lat: 50.441678, lng: 30.488234}, 'Станція метро “Вокзальна”', '/img/location/subway.png'),
            marker59 = new SecondaryMarkerNoSprite({lat: 50.448385, lng: 30.513814}, 'Станція метро “Золоті ворота”', '/img/location/subway.png'),
            marker60 = new SecondaryMarkerNoSprite({lat: 50.447769, lng: 30.492476}, 'Національний цирк України', '/img/location/circus.png');

            $.getJSON('/js/map-style.json', function (data) {
                map.setOptions({styles: data})
            })
            marker1.marker.addListener('click', function () {
                $('#lacation-page-wrap').fadeIn()
            })
            $('#lacation-page-wrap__closeBtn').click(function () {
                $('#lacation-page-wrap').fadeOut();
            })
        }
    }
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
                //setHeight(rend, allRend - 3)
                setHeight(rend, 24)
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

    // ============ Scripts from location page start====== Andrey 13.11.17

    function returnLanguage() {
        var lang = document.location.href.split('/')[3];
        var uaText = {
            open: 'Читати далі',
            close: 'Згорнути'
        };
        var ruText = {
            open: 'Читать далее',
            close: 'Свернуть'
        };
        var enText = {
            open: 'Read more',
            close: 'Close'
        };
        if(lang=='ru') {
            return ruText;
        } else if(lang=='en') {
            return enText;
        } else {
            return uaText;
        }
    }

    ;(function(){

        var text = returnLanguage();

        $('#closeBtn1').click(function(){
            if ($(this).hasClass('transformicus')) {
                $(this).removeClass('transformicus'),
                $('.lacation-page-wrap').removeClass('hiddenicus'),
                $('.box-corner__bottom.box-corner__right.fortrans').css({'z-index':'304','right':'0'}),
                $('.box-corner__bottom.box-corner__right.fortrans1').css({'transform':'rotate(0deg)','right':'0'})
            }
            else {

                $('#closeBtn1').addClass('transformicus'),
                $('.lacation-page-wrap').addClass('hiddenicus'),
                $('.box-corner__bottom.box-corner__right.fortrans').css({'z-index':'304','right':'-60px'}),
                $('.box-corner__bottom.box-corner__right.fortrans1').css({'transform':'rotate(90deg)','right':'42px'}),
                $('.box-corner__top.box-corner__left').css('z-index', '304')
            }
        });



         if ($(this).hasClass('transformicus')) {
             console.log('close');
         }
         else {
             $('#openText').click(function(e){
                 e.preventDefault()
                 if ($('.lacation-page__moretext').hasClass('moreTextOpen')){
                     $('.lacation-page__moretext').removeClass('moreTextOpen'),
                     $('.lacation-page-wrap').removeClass('wrapMoreText'),
                     $('#openText').text(text.open),
                     $('#closeBtn1').show()
                 }
                 else {
                     $('.lacation-page__moretext').addClass('moreTextOpen'),
                     $('.lacation-page-wrap').addClass('wrapMoreText'),
                     $('#openText').text(text.close),
                     $('#closeBtn1').hide()
                 }
             });
         }

         $('#closeText').click(function(e){
             e.preventDefault()
                  $('.lacation-page__moretext').removeClass('moreTextOpen'),
                 $('.lacation-page-wrap').removeClass('wrapMoreText'),
                 $('#openText').text(text.close),
                 $('#closeBtn1').show()
        });
    })();
    // ============ Scripts from location page end ====== Andrey 13.11.17


    // ============ Scripts from architecture page start====== Andrey 13.11.17

    ;(function() {
        var text = returnLanguage();

        $('#openText1').click(function (e) {
            e.preventDefault();
            if ($('#archNewText').hasClass('shown')) {
                $('#archNewText').removeClass('shown'),
                    $('#openText1').text(text.open),
                    $('#arch1').removeClass('short'),
                    $('.architecture__description-wrap').removeClass('wide')
            } else {
                $('#archNewText').addClass('shown'),
                    $('#openText1').text(text.close),
                    $('#arch1').addClass('short'),
                    $('.architecture__description-wrap').addClass('wide')
            }
        });

        $('#closeText1').click(function (e) {
            e.preventDefault(),
                $('#archNewText').removeClass('shown'),
                $('#openText1').text('Читати далі'),
                $('#arch1').removeClass('short'),
                $('.architecture__description-wrap').removeClass('wide')
        });
    })();


    // ============ Scripts from architecture page start====== Andrey 13.11.17

    // ============ Scripts from floorpage page start====== Andrey 13.11.17

    ;(function() {
        var text = returnLanguage();


		$('#openText2').click(function(e){
			e.preventDefault();
			if($('#floorNewText').hasClass('shown')){
				$('#floorNewText').removeClass('shown'),
				$('#openText2').text(text.open)
			} else {
				$('#floorNewText').addClass('shown'),
				$('#openText2').text(text.close)
        var elementClick = $('#floorNewText');
        var destination = $(elementClick).offset().top - 100;
        // if ($.browser.safari) {
            // $('body').animate({ scrollTop: destination }, 1100);
        // } else {
            $('html').animate({ scrollTop: destination }, 1100);
        // }
			}
		});

		$('#closeText2').click(function(e){
			e.preventDefault(),
			$('#floorNewText').removeClass('shown'),
			$('#openText2').text(text.close)
		});
    })();
    // ============ Scripts from floorpage page end====== Andrey 13.11.17


    //============= Modal window start ========
    ;(function() {
        function closeModal() {
            $('.modal_window__container').css({'display': 'none'});
        }
        $('.modal_window__close').click(closeModal);
        $('.modal_window__link').click(closeModal);
        $('.modal_window__container').click(closeModal);
    })();
    //============= Modal window end ========

    //============= Mask and international number start ========

    ;(function(){

        jQuery(function($){
            $.mask.definitions['#']='[0-9]';
            $.mask.definitions['9'] = '';
            $("form input[type='tel']").mask("+(38) ### ###-##-##",{placeholder:"_"});
        });

        var telInput = $("form input[type='tel']");

        telInput.intlTelInput({
            initialCountry: 'ua',
            preferredCountries: ['ua' ,'ru'],
            nationalMode: false
        });

        $(telInput).on("countrychange", function(e, countryData) {
            $(this).intlTelInput("setNumber", "");
            $(this).trigger('blur');
            $(this).mask( '+(' + countryData.dialCode + ')' + ' ### ###-##-##',{placeholder:"_"});
        });

    })();

    //============= Mask and international number start ========


    })

  // })

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


  // from appat.js
  // $("html").mousemove(function(e){
  //     var x = e.clientX;
  //     var y = e.clientY;
  //     var coor = "Coordinates: (" + x + "," + y + ")";
  //     });
  // $(document).ready(function(){
  //     $(".2a").mousemove(function(e){
  //     var x = e.clientX;
  //     var y = e.clientY;
  //     var coor = "Coordinates: (" + x + "," + y + ")";
  //
  //     $(".lin_1").offset({top:y+100, left:x+170});
  //     });
  //   });
  //
  // $('.2a').mouseover(function() {
  //   $('.lin_1').css('display', 'block');
  //   }).mouseout(function()
  // {
  // $('.lin_1').css('display', 'none');
  // });



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

  /// наведение на квартиры , выбор планировок и выведение данных //Begas A. август 2018
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

  /////form form_rieltor
  jQuery('.post').addClass("hidden").viewportChecker({
      classToAdd: 'visible animate',
      offset: 200
});

$('form').on('submit', function() {
  console.log($('form input[type="tel"]').val());
})

$(".collaboration_btn").on("click", function(e) {
  e.preventDefault();
  $(".contact-for-all").toggle();
  $(".contact-for-realtor").fadeToggle();
});
