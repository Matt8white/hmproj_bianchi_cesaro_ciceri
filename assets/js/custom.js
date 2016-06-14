function fillDevicePage(str) {
    "use strict";
    $.ajax({
        url: 'ajax/getDeviceInfo.php?q='+str, success: function (result) {
            var infos = JSON.parse(result);
            document.title = infos["brand"] + " " + infos["model"] + " | TIM";
            document.getElementById('displayImg').style.background = "url(" + infos["image"] + ");";
            var str = createBreadcrumb(infos, "device");
            document.getElementById("bc").innerHTML = str;
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
