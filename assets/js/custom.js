/* =================================
   SCROLL TO
=================================== */
$(document).ready(function () {
    var onMobile;
    
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
            console.log(services);
            var sl = $('#slRel').html();
            var as = $('#asRel').html();
            
            for(var k in services) {
                var info = services[k];
                var addme;
                if(info.type == 'sl'){
                    addme = '<a href="slservice.php?service='+info.id+'"><div class="relsvc"><img style="width:80px" src="'+info.image+'">'+info.name+'</div></a>';
                    sl+=addme;
                }else{
                    console.log(info.id);
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
    createBreadcrumb(strdec, "slcat", bread);
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
            createBreadcrumb(infos, "service", bread);
            $(".devname").html('<bf>'+infos["name"] +'</bf>');
            var div = document.getElementById('desc').children[1];
            div.innerHTML = '<p>' + infos["desc_"+getlang].replace(new RegExp('\r?\n','g'), '<br />') + '</p>' + "<br>"+ div.innerHTML ;
            var div = document.getElementById('act').children[1];
            div.innerHTML = '<p>' + infos["activation_"+getlang].replace(new RegExp('\r?\n','g'), '<br />') + '</p>' + div.innerHTML;
            var div = document.getElementById('faq');
            div.innerHTML += '<p>' + infos["faq_"+getlang].replace(new RegExp('\r?\n','g'), '<br />') + '</p>';
            $('#displayImg').css('background-size', 'contain');
        }
    });
    $.ajax({
        method: "POST",
        data: { id: str, lang: getlang, type: 'sl' },
        url: 'ajax/getRelated.php', success: function(result) {
            var services = JSON.parse(result);
            console.log(services);
            var dev = $('#devRel').html();
            
            for(var k in services) {
                var info = services[k];
                var addme = '<a href="device.php?device='+info.id+'"><div class="relsvc"><img style="width:80px" src="'+info.image+'">'+info.name+'</div></a>';
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
            createBreadcrumb(infos, "service", bread);
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
            console.log(services);
            var dev = $('#devRel').html();
            
            for(var k in services) {
                var info = services[k];
                var addme = '<a href="device.php?device='+info.id+'"><div class="relsvc"><img style="width:80px" src="'+info.image+'">'+info.name+'</div></a>';
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
            console.log(result);
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


function createBreadcrumb(infos, type, subtree) {
    var str;
    switch(type) {
        case "device":
            str = "<li><a href='products.php'>" + subtree + "</a></li><li>" +
            '<a href="category.php" onClick="setCategory('+"'"+ infos["category"] +"'"+","+ null+')">'+infos["category"]+'</a></a></li><li>'
            + infos["brand"] + " " + infos["model"] + "</li>";
            break;
        case "category":
            str = "<li><a href='products.php'>" + subtree + "</a></li><li>" + infos["cat"] + "</li>";
            break;
        case "slcat":
            str = "<li><a href='slcat.php'>" + subtree + "</a></li><li>" + infos + "</li>";
            break;
        default:
            str = "<li>" + subtree + "</li>";
            break;
    }
    document.getElementById("bc").innerHTML = str;
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
