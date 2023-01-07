// сортировка по городам
let filter = function () {
    let input = document.getElementById('filter-input');
    input.addEventListener('keyup',function () {
        let filter = input.value.toLowerCase(),
            filterElements = document.querySelectorAll('#filter-list div');
        
        filterElements.forEach(item => {
            if (item.innerHTML.toLowerCase().indexOf(filter) > -1) {
                item.style.display = '';
            } 
            else {
                item.style.display = 'none';
            }
        })
    })
}

filter();

// ajax get запрос
elem.onclick = function() {
    var ajax = new XMLHttpRequest();
    var method ="GET";
    var url = "connect.php";
    var asynchronous = true;
    ajax.open(method, url, asynchronous);
    ajax.send();
    ajax.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var list = JSON.parse(this.responseText);
            var html = "";
            for (var a = 0; a <list.length; a++){
                var city = list[a].City;
                var cityId = list[a].id;
                html += '<div class="city_name"><a id='+"city" + cityId +' class="city_link" onClick="reply_click(this.id)" href="#close_button">' + city + '</a></div>';
            }
            document.getElementById("list").innerHTML = html;
            
        }
    }; 
};

elem.onclick();

function reply_click(clicked_id) {
    var idCity = clicked_id;
    let textLink = document.getElementById(idCity).innerText;
    document.getElementById('text').innerHTML="Ваш регион: "+textLink;
}







