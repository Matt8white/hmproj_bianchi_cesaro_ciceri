/* =================================
   SCROLL TO
=================================== */
$(document).ready(function () {
    var onMobile;
	if (!($.cookie('lang') == 'it' || $.cookie('lang') == 'en'))
    	$.cookie('lang', 'it');
    onMobile = false;
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) { onMobile = true; }

    if (onMobile === true) {
        jQuery('a.scrollto').click(function (event) {
        jQuery('html, body').scrollTo(this.hash, this.hash, {gap: {y: -10}, animation:  {easing: 'easeInOutCubic', duration: 0}});
        event.preventDefault();
    });
    } else {
        jQuery('a.scrollto').click(function (event) {
        jQuery('html, body').scrollTo(this.hash, this.hash, {gap: {y: -10}, animation:  {easing: 'easeInOutCubic', duration: 1500}});
            event.preventDefault();
        });
    }
    
});

function changeWhoWeAreContent(param) {
    "use strict";
    switch(param){
        case "innovation":
            $.ajax({
                url: 'ajax/innovation.php', success: function (result) {
                    $('.changable').html(result);
                }
            });
            break;
        case "testimonials":
            $.ajax({
                url: 'ajax/testimonials.php', success: function (result) {
                    $('.changable').html(result);
                }
            });
            break;
        case "projects":
            $.ajax({
                url: 'ajax/projects.php', success: function (result) {
                    $('.changable').html(result);
                }
            });
            break;
        default:
            break;
    }
}

/*RETRIEVE A CATEGORY OF DEVICES*/
function fillDevicesPage () {
    devInfoLink();
    devInfoShort('Smartphones','devsp');
    devInfoShort('Tablet','devtb');
    devInfoShort('Modem & Networking','devmod');
    devInfoShort('TV & Smart Living','devtvsl');
}

function devInfoLink() {
    $('li').each(function() {
        var curr = $(this).html();
        if($( this ).parent().get(0).tagName == 'UL' && curr[0] !='<'){
            var curr = $(this).html();
            var currout =  "'" + curr +"'";
            parent = $(this).parent().children(0).html().replace(/<(?:.|\n)*?>/gm, '');
            if(curr == 'Tutti')
                currout = null;
            $(this).html('<a href="category.php" onClick="setCategory('+"'"+ parent +"'"+","+ currout+')">'+curr+'</a>');
        }
    });
}

function devInfoShort (str, elem){
    $.ajax({
        method: "POST",
        data: { cat: str},
        url: 'ajax/getCategories.php', success: function(result) {
            var infos = JSON.parse(result);
            for (var i = 1; i <= 3; i++) {
                var elem1 = document.getElementById(elem + i);
                var dev = infos[i];
                $($(elem1)).parent().attr("href", "/device.php?device=" + dev["id"]);
                elem1.children[0].style.background = "url(" + dev["image"] + ") no-repeat center center";
                $('.devspimg').css('background-size', 'contain');
                elem1.innerHTML += dev["brand"] + " " + dev["model"];
                if(dev["promotion"] == 1)
                    elem1.innerHTML += "<br><strike>" + dev["price"] + "</strike><br>" + "<font color='red'>" + dev["shortedprice"] + "</font>";
                else
                    elem1.innerHTML += "<br>" + dev["price"];
            }
        }
    });
}


function slInfoShort (str){
    $.ajax({
        method: "POST",
        data: { cat: str} ,
        url: 'ajax/getSL.php', success: function(result) {
            var infos = JSON.parse(result);
            for (var i = 1; i <= 3; i++) {
                var elem1 = document.getElementById(elem + i);
                var dev = infos[i];
                $($(elem1)).parent().attr("href", "/device.php?device=" + dev["id"]);
                elem1.children[0].style.background = "url(" + dev["image"] + ") no-repeat center center";
                $('.devspimg').css('background-size', 'contain');
                elem1.innerHTML += dev["brand"] + " " + dev["model"];
                if(dev["promotion"] == 1)
                    elem1.innerHTML += "<br><strike>" + dev["price"] + "</strike><br>" + "<font color='red'>" + dev["shortedprice"] + "</font>";
                else
                    elem1.innerHTML += "<br>" + dev["price"];
            }
        }
    });
}



/*RETRIEVE A DEVICE INFO*/
function fillDevicePage(bread) {
    var str = getUrlVars()["device"];
    var getlang = $.cookie('lang');
    "use strict";
    $.ajax({
        method: "POST",
        data: { devid: str, lang: getlang },
        url: 'ajax/getDeviceInfo.php', success: function(result) {
            var infos = JSON.parse(result);
            document.title = infos["brand"] + " " + infos["model"] + " | TIM";
            var div = document.getElementById('displayImg');
            div.style.background = "url(" + infos["image"] + ") no-repeat center top";
            createBreadcrumb(infos, "device", bread);
            $(".devname").html('<bf>'+infos["brand"] + " " + infos["model"] +'</bf>');
            var div = document.getElementById('pres').children[1];
            var addme;
            if(infos["promotion"] == 1)
                addme = "<strike>" + infos["price"] + "</strike><br>" + "<font color='red'>" + infos["shortedprice"] + "</font>";
            else
                addme = infos["price"];
            div.innerHTML = '<p>' + infos["pres_"+getlang].replace(new RegExp('\r?\n','g'), '<br />') + '</p>' + "<br>" + addme + "<br>" + div.innerHTML ;
            var div = document.getElementById('tech').children[1];
            div.innerHTML = '<p>' + infos["spec_"+getlang].replace(new RegExp('\r?\n','g'), '<br />') + '</p>' + div.innerHTML;
            var div = document.getElementById('desc');
            div.innerHTML = '<p>' + infos["desc_"+getlang].replace(new RegExp('\r?\n','g'), '<br />') + '</p>';
            $('#displayImg').css('background-size', 'contain');
        }
    });
    $.ajax({
        method: "POST",
        data: { id: str, lang: getlang, type: 'dev' },
        url: 'ajax/getRelated.php', success: function(result) {
            var services = JSON.parse(result);
            var sl = $('#slRel').html();
            var as = $('#asRel').html();

            for(var k in services) {
                var info = services[k];
                var addme;
                if(info.type == 'sl'){
                    addme = '<a href="slservice.php?service='+info.id+'"><div class="relsvc"><img style="width:80px" src="'+info.image+'">'+info.name+'</div></a>';
                    sl+=addme;
                }else{
                    addme = '<a href="assspec.php?service='+info.id+'"><div class="relsvc">'+info.name+'</div></a>';
                    as+=addme;
                }
            }
            $('#asRel').html(as);
            $('#slRel').html(sl);
        }
    });
}

/*BUILD SLS PAGE*/
function fillSlsPage(str,bread) {
    strdec = decodeURIComponent(str);
    var getlang = $.cookie('lang');
    document.title = strdec + " " + " | TIM";
    createBreadcrumb(strdec, "asscat", bread);
    "use strict";
    $.ajax({
        method: "POST",
        data: { cat: str, lang: getlang},
        url: 'ajax/getSLS.php', success: function(result) {
            var devs = JSON.parse(result);
            if(Object.keys(devs).length<=4)
                $('#thumbcarousel .left,#thumbcarousel .right').remove();
            var j = -1;
            $('#thumbcarousel div div').html("");
            $('#carousel div').html('');
            $.each( devs, function( i ){
                if (i%4 ==0)
                    j++;
                var insert = $('#thumbcarousel div div').eq(j).html();
                insert+='<div data-target="#carousel" data-slide-to="'+i+'" class="thumb"><img src="'+devs[i].image+'"></div>';
                $('#thumbcarousel div div').eq(j).html(insert);
                var desc = '<br><p style="font-size:14px">'+devs[i].desc+'</p>';
                var ref;
                if(devs[i].type == 'dev')
                    ref = '<a href="device.php?device='+devs[i].id+'">';
                else
                    ref = '<a href="slservice.php?service='+devs[i].id+'">';
                if(i==0)
                    insert = $('#carousel div').html() + '<span class="item active"> <span class="ctext">'+devs[i].name+desc+'</span>'+ref+'<img src="'+devs[i].image+'"></a>  </span>';
                else
                    insert = $('#carousel div').html() + '<span class="item"><span class="ctext">'+devs[i].name+desc+'</span>'+ref+'<img src="'+devs[i].image+'"></a>   </span>';
                $('#carousel div').html(insert);

            });
        }
    });
}

/*Build SL Page*/
function fillSlPage(bread) {
    var str = getUrlVars()["service"];
    var getlang = $.cookie('lang');
    "use strict";
    $.ajax({
        method: "POST",
        data: { svid: str, lang: getlang },
        url: 'ajax/getSlInfo.php', success: function(result) {
            var infos = JSON.parse(result);
            document.title = infos["name"] + " | TIM";
            var div = document.getElementById('displayImg');
            div.style.background = "url(" + infos["image"] + ") no-repeat center top";
            createBreadcrumb(infos, "slservice", bread);
            $(".devname").html('<bf>'+infos["name"] +'</bf>');
            var div = document.getElementById('desc').children[1];
            div.innerHTML += '<br><p>' + infos["desc_"+getlang].replace(new RegExp('\r?\n','g'), '<br />') + '</p>' + "<br>";
            var div = document.getElementById('act').children[1];
            div.innerHTML += '<br><p>' + infos["activation_"+getlang].replace(new RegExp('\r?\n','g'), '<br />') + '</p>';
            var div = document.getElementById('faq').children[1];
            div.innerHTML += '<br><p>' + infos["faq_"+getlang].replace(new RegExp('\r?\n','g'), '<br />') + '</p>';
            $('#displayImg').css('background-size', 'contain');
        }
    });
    $.ajax({
        method: "POST",
        data: { id: str, lang: getlang, type: 'sl' },
        url: 'ajax/getRelated.php', success: function(result) {
            var services = JSON.parse(result);
            var dev = $('#devRel').html();

            for(var k in services) {
                var info = services[k];
                var addme = '<a href="device.php?device='+info.id+'"><div class="relsvc col-sm-6 col-xs-12"><img style="width:80px" src="'+info.image+'">'+info.name+'</div></a>';
                dev+=addme;
            }
            $('#devRel').html(dev);
        }
    });
}

/*Build As Service Page*/
function fillAsPage(bread) {
    var str = getUrlVars()["service"];
    var getlang = $.cookie('lang');
    "use strict";
    $.ajax({
        method: "POST",
        data: { svid: str, lang: getlang },
        url: 'ajax/getAsInfo.php', success: function(result) {
            var infos = JSON.parse(result);
            document.title = infos["name_"+getlang] + " | TIM";
            createBreadcrumb(infos, "asservice", bread);
            $(".devname").html('<bf>'+infos["name_"+getlang] +'</bf>');
            var div = document.getElementById('desc');
            div.innerHTML = '<p>' + infos["desc_"+getlang].replace(new RegExp('\r?\n','g'), '<br />') + '</p>' + "<br>"+ div.innerHTML ;
            var div = document.getElementById('faq');
            div.innerHTML = '<p>' + infos["faq_"+getlang].replace(new RegExp('\r?\n','g'), '<br />') + '</p>';
        }
    });
     $.ajax({
        method: "POST",
        data: { id: str, lang: getlang, type: 'as' },
        url: 'ajax/getRelated.php', success: function(result) {
            var services = JSON.parse(result);
            var dev = $('#devRel').html();

            for(var k in services) {
                var info = services[k];
                var addme = '<a href="device.php?device='+info.id+'"><div class="relsvc col-sm-6 col-xs-12"><img style="width:80px" src="'+info.image+'">'+info.name+'</div></a>';
                dev+=addme;
            }
            $('#devRel').html(dev);
        }
    });
}

/* Build Category Page*/
function fillCategoryPage (bread) {
    var passme = JSON.parse($.cookie('param'));
    $('#devs').css('top', 0);
    $.ajax({
        method: "POST",
        data: {cat: passme.cat},
        url: 'ajax/getBrands.php', success: function(result) {
            var brands = JSON.parse(result);
            var insertme = '';
            $.each( brands, function(i){
            insertme+='<li class="checkbox"><label><input type="checkbox">'+brands[i].brand+'</label></li>';
            });
            $('#brandfilters').html(insertme);
            $(':checkbox').each(function() {
                $(this).attr("value", $( this ).parent().text().trim());
                if(passme["attr"].indexOf($( this ).parent().text().trim()) > -1)
                    $( this ).prop({checked: true});
            });
            $( ".checkbox" ).click(function() {
              filterCat();
            });
            filterCat();
        }
    });


    createBreadcrumb(passme, 'category', bread);
}


/*BUILD ASSCAT PAGE*/
function fillAssCat(bread) {
    var getlang = $.cookie('lang');
    var str = lookupasscat(getUrlVars()["cat"], getlang);
    document.title = str + " " + " | TIM";
    createBreadcrumb(str, "asscat", bread);
    "use strict";
    $.ajax({
        method: "POST",
        data: { cat: lookupasscat(getUrlVars()["cat"], "en"), lang: getlang},
        url: 'ajax/getAssCat.php', success: function(result) {
            var svs = JSON.parse(result);
            var keys = getDistinct(svs);
            for(var i=0;i<keys.length;i++){
                var j = i+1;
                $('#asstitle'+j).text(keys[i]);
                for(var k in svs){
                    var mytext = '<a href="assspec.php?service='+svs[k].id+'">'+svs[k]["name_"+getlang]+'</a><br>';
                    if(svs[k].subcategory==keys[i])
                        $('#asstitle'+j).next().append(mytext);
                }
            }
          
        }
    });
}

function getDistinct(data){
    var lookup = {};
    var items = data;
    var result = [];

    for (var item, i = 0; item = items[i++];) {
      var name = item.subcategory;

      if (!(name in lookup)) {
        lookup[name] = 1;
        result.push(name);
      }
    }
    return result;
}

function lookupasscat(str, lang){
    switch(str+lang){
    case "1en":
        str = "Line Services";
        break;
    case "2en":
        str = "Costs and Payments";
        break;
    case "3en":
        str = "Technical Support";
        break;
    case "4en":
        str = "Smart Life";
        break;
    case "1it":
        str = "Gestione linea e servizi";
        break;
    case "2it":
        str = "Controllo costi e pagamenti";
        break;
    case "3it":
        str = "Supporto e configurazioni";
        break;
    case "4it":
        str = "Contenuti e Smart Life";
        break;
    default:
        return -1;
        break;
    }
    return str;
}

function catlookup(infos){
    for(i=1;i<5;i++)
        if(infos['category']==lookupasscat(i, 'en'))
            return i;



}

function createBreadcrumb(infos, type, subtree) {
    var str;
    switch(type) {
        case "device":
            str = "<li><a href='products.php'>" + subtree + "</a></li><li>" +
            '<a href="category.php" onClick="setCategory('+"'"+ infos["category"] +"'"+","+ null+')">'+infos["category"]+'</a></a></li><li>'
            + infos["brand"] + " " + infos["model"] + "</li>";
            break;
        case "slservice":
            str = "<li><a href='slcat.php'>" + subtree + "</a></li><li>" + '<a href="'+getslcat(infos)+'">'+infos["category"]+'</a></li><li>'+ infos["name"] + "</li>";
            break;
        case "asservice":
            var catme = catlookup(infos);
            str = "<li><a href='asscat.php'>" + subtree + "</a></li><li>" +
            '<a href="assbycat.php?cat='+catme+'">'+lookupasscat(catme, $.cookie('lang'))+'</a></a></li><li>'
            + infos["name_"+ $.cookie('lang')] + "</li>";
            break;
        case "category":
            str = "<li><a href='products.php'>" + subtree + "</a></li><li>" + infos["cat"] + "</li>";
            break;
        case "slcat":
            str = "<li><a href='slcat.php'>" + subtree + "</a></li><li>" + infos + "</li>";
            break;
        case "asscat":
            str = "<li><a href='asscat.php'>" + subtree + "</a></li><li>" + infos + "</li>";
            break;
        default:
            str = "<li>" + subtree + "</li>";
            break;
    }
    document.getElementById("bc").innerHTML = str;
}

function getslcat(infos){
    switch(infos["category"]){
    case "TV & Entertainment":
        str = "slcattv.php";
        break;
    case "Home & Family":
        str = "slcathome.php";
        break;
    case "Health & Welness":
        str = "slcathealth.php";
        break;
    case "Personal Services":
        str = "slcatpersonal.php";
        break;
    default:
        return -1;
        break;
    }
    return str;
}

function capitalLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi,
    function(m,key,value) {
      vars[key] = decodeURIComponent(value);
    });
    return vars;
  }

$('.tree-toggle').click(function () {
    $(this).parent().children('ul.tree').toggle(200);
});

$( ".checkbox" ).click(function() {
  filterCat();
});

$( ".radio" ).click(function() {
  filterCat();
});

function setCategory(cat,attr) {

    var arr = '{"cat":"' +cat+'","attr":"';
    /*
    for (var i = 0; i < arr.length; i++) {
        arr+=',"attr":"'+attr[i]+'"';
    }
    */
    if(attr!=null){
        arr+=attr+'"}';
    }else{
        arr+='"}';
    }
    $.cookie('param', (arr));
}


function clearFilters(){
    $(':checkbox').each(function() {
        $( this ).prop({checked: false});
    });
    $(':radio').each(function() {
        $( this ).prop({checked: false});
    });
    filterCat();
}

function filterCat(){
    //TUTTI -> *
    var params = JSON.parse($.cookie('param'));
    var brandstr = "";
    var pricestr = "";
    var extraparamstr = "";
    //attr":"
    $(':checkbox:checked').each(function(i){
        switch($(this).parent().parent().parent().parent().children()[0].innerHTML){
            case "Brand":
                brandstr += "'"+$(this).attr("value") + "',";
                break;
            case "Filters":
                extraparamstr += "'"+$(this).attr("value").slice(0, -3) + "',";
                break;
            default:
                break;
        }
     });

    $(':radio:checked').each(function(i){
       pricestr=$(this).attr("value");
     });

    $.ajax({
        method: "POST",
        data: { cat: "'"+params['cat']+"'", brand: brandstr.slice(0, -1), price: pricestr, extra: extraparamstr.slice(0, -1) },
        url: 'ajax/getDevices.php', success: function(result) {
            var infos = JSON.parse(result);
            var count = Object.keys(infos).length;
            $('#devs').parent().css('height', ((Math.ceil(count/3)) * 250 + 50));
            if( $(window).width() < 768){
                $('#devs').parent().css('height', (count * 250 + 50));
            }
            $('#devs').empty();
            count--;
            for(var i = 0; i <= count; i++) {
                var div = document.createElement('div')
                var dev = infos[i];
                div.className += 'col-xs-12 col-sm-4 prods-cont'
                div.innerHTML = '<a><div class="col-xs-12 prods-dev"><div class="devspimg"></div></div></a>'
                var elem1 = div.children[0].children[0];
                $($(elem1)).parent().attr("href", "/device.php?device=" + dev["id"]);
                elem1.children[0].style.background = "url(" + dev["image"] + ") no-repeat center center";
                elem1.innerHTML += dev["brand"] + " " + dev["model"];
                if(dev["promotion"] == 1)
                    elem1.innerHTML += "<br><strike>" + dev["price"] + "</strike><br>" + "<font color='red'>" + dev["shortedprice"] + "</font>";
                else
                    elem1.innerHTML += "<br>" + dev["price"];
                document.getElementById("devs").appendChild(div);
            }
            $('.devspimg').css('background-size', 'contain');
        }
    });

}

function appendparam(param, val){
    url = window.location.href;
    if(getUrlVars()[param] = null){
        url += url.match( /[\?]/g ) ? '&' : '?' + param + '=' + val;
        return url;
    }
    else{
        var pattern = new RegExp('\\b('+param+'=).*?(&|$)')
        if(url.search(pattern)>=0){
            return url.replace(pattern,'$1' + val + '$2');
        }
        return url + (url.indexOf('?')>0 ? '&' : '?') + param + '=' + val
    }
}

function replaceUrlParam(paramName, paramValue){
    var pattern = new RegExp('\\b('+paramName+'=).*?(&|$)')
    if(url.search(pattern)>=0){
        return url.replace(pattern,'$1' + paramValue + '$2');
    }
    return url + (url.indexOf('?')>0 ? '&' : '?') + paramName + '=' + paramValue
}
