/*RETRIEVE A CATEGORY OF DEVICES*/
function fillDevicesPage () {
    document.getElementById("bc").innerHTML = createBreadcrumb(null, 'devCategory');
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
        url: 'ajax/getCategories.php?q=' + str, success: function(result) {
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
function fillDevicePage() {
    str = getUrlVars()["device"];
    "use strict";
    $.ajax({
        url: 'ajax/getDeviceInfo.php?q='+str, success: function(result) {
            var infos = JSON.parse(result);
            document.title = infos["brand"] + " " + infos["model"] + " | TIM";
			var div = document.getElementById('displayImg');
			div.style.background = "url(" + infos["image"] + ") no-repeat center top";
            var str = createBreadcrumb(infos, "device");
            document.getElementById("bc").innerHTML = str;
            $(".devname").html('<bf>'+infos["brand"] + " " + infos["model"] +'</bf>');
            var div = document.getElementById('pres').children[1];
            div.innerHTML = '<p>' + infos["pres_it"].replace(new RegExp('\r?\n','g'), '<br />') + '</p>' + div.innerHTML;
            var div = document.getElementById('tech').children[1];
            div.innerHTML = '<p>' + infos["spec_it"].replace(new RegExp('\r?\n','g'), '<br />') + '</p>' + div.innerHTML;
            var div = document.getElementById('desc');
            div.innerHTML = '<p>' + infos["descr_it"].replace(new RegExp('\r?\n','g'), '<br />') + '</p>';
        }
    });
}

/* Build Category Page*/
function fillCategoryPage () {
    var passme = JSON.parse($.cookie('param'));
    //$.removeCookie('param');
    document.getElementById("bc").innerHTML = createBreadcrumb(passme, 'category');
}


function createBreadcrumb(infos, type) {
    var str;
    switch(type) {
        case "device":
            str = "<li><a href='products.php'>Products</a></li><li><a href='category.php' onload='fillCategoryPage("
                    + infos["category"] + ")'>" + infos["category"] + "</a></li><li>" + infos["brand"] + " " + infos["model"] + "</li>";
            break;
        case "devCategory":
            str = "<li>Products</li>"
            break;
         case "category":		          
            str = "<li><a href='products.php'>Products</a></li><li>" + infos["cat"] + "</li>";
            break;
        default:
            str = "ciaone";
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
      vars[key] = value;
    });
    return vars;
  }

$('.tree-toggle').click(function () {
	$(this).parent().children('ul.tree').toggle(200);
});

function setCategory(cat,attr) {

    var arr = '{"cat":"' +cat+'"';
    /*
    for (var i = 0; i < arr.length; i++) {
        arr+=',"attr":"'+attr[i]+'"';
    }
    */
    if(attr!=null){
        arr+=',"attr":"'+attr+'"';
    }
    arr+='}';
   
    $.cookie('param', (arr));
    }

