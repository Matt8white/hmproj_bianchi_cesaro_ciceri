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
        }
    });
}

/*RETRIEVE A SLS INFO*/
function fillSlPage(str,bread) {
    strdec = decodeURIComponent(str);
    var getlang = $.cookie('lang');
    "use strict";
    $.ajax({
        method: "POST",
        data: { cat: strdec, lang: getlang},
        url: 'ajax/getSLS.php', success: function(result) {
            document.title = strdec + " " + " | TIM";
            createBreadcrumb(strdec, "slcat", bread);
            console.log(result);
        }
    });
}

/* Build Category Page*/
function fillCategoryPage (bread) {
    var passme = JSON.parse($.cookie('param'));
    $('#devs').css('top', 0);
    //$.removeCookie('param');
    var arr = new Array();
    $(':checkbox').each(function() {
        $(this).attr("id", $( this ).parent().text().trim()+"box");
        if(passme["attr"].indexOf($( this ).parent().text().trim()) > -1)
            $( this ).prop({checked: true});
    });

    filterCat();
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

function filterCat(){
    //TUTTI -> *
    var params = JSON.parse($.cookie('param'));
    var brandstr = "";
    var pricestr = "";
    var osstr = "";
    var extraparamstr = "";
    //attr":"
    $(':checkbox:checked').each(function(i){
        switch($(this).parent().parent().parent().parent().children()[0].innerHTML){
            case "Brand":
                brandstr += "'"+$(this).attr("id").slice(0, -3) + "',";
                break;
            case "Filters":
                extraparamstr += "'"+$(this).attr("id").slice(0, -3) + "',";
                break;
            case "OS":
                osstr += "'"+$(this).attr("id").slice(0, -3) + "',";
                break;
            case "Price":
                pricestr += "'"+$(this).attr("id").slice(0, -3) + "',";
                break;
            default:
                break;
        }
     });
    $.ajax({
        method: "POST",
        data: { cat: "'"+params['cat']+"'", brand: brandstr.slice(0, -1), os: osstr.slice(0, -1), price: pricestr.slice(0, -1), extra: extraparamstr.slice(0, -1) },
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
