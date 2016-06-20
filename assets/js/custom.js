function fillDevicePage(str) {
    "use strict";
    $.ajax({
        url: 'ajax/getDeviceInfo.php?q='+str, success: function (result) {
            var infos = JSON.parse(result);
            document.title = infos["brand"] + " " + infos["model"] + " | TIM";
			var div = document.getElementById('displayImg');
			div.style.background = "url(" + infos["image"] + ") no-repeat center top";
            var str = createBreadcrumb(infos, "device");
            document.getElementById("bc").innerHTML = str;
            var div = document.getElementById('pres');
            div.children[0].innerHTML = '<p>' + infos["pres_it"].replace(new RegExp('\r?\n','g'), '<br />') + '</p>' + div.children[0].innerHTML;
            var div = document.getElementById('tech');
            div.children[0].innerHTML = '<p>' + infos["spec_it"].replace(new RegExp('\r?\n','g'), '<br />') + '</p>' +div.children[0].innerHTML;
            var div = document.getElementById('desc');
            div.innerHTML = '<p>' + infos["descr_it"].replace(new RegExp('\r?\n','g'), '<br />') + '</p>';
        }
    });
}

function createBreadcrumb(infos, type) {
    var str;
    switch(type) {
        case "device":
            str = "<li><a href='products.php'>Products</a></li><li><a href='category.php' onload='fillCategoryPage("
                    +infos["category"]+")'>"+infos["category"]+"</a></li><li>"+infos["brand"] + " " + infos["model"]+"</li>";
            break;
        case "devCategory":
            str = "<li><a href='products.php'>Products</a></li>"
        default:
            str = "ciaone";
    }
    return str;
}

function capitalLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}


$('.tree-toggle').click(function () {
	$(this).parent().children('ul.tree').toggle(200);
});