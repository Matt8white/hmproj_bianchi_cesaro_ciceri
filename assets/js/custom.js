function fillDevicePage(str) {
    "use strict";
    $.ajax({
        url: 'ajax/getDeviceInfo.php?q='+str, success: function (result) {
            var ar = JSON.parse(result);
            document.title = ar["brand"] + " " + ar["model"] + " | TIM";        //Page title
            var str = "<li><a href='products.php'>Products</a></li><li><a href='category.php' onload='fillCategoryPage("+ar["category"]+")'>"+ar["category"]+"</a></li><li>"+ar["brand"] + " " + ar["model"]+"</li>";
            document.getElementById("bc").innerHTML = str;
        }
    });
}
