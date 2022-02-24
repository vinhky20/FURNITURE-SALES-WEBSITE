function changeBackground() {
    const section = document.getElementById('slider');
    const imgs = [
        'url(./images/slide3.jpg)',
        'url(./images/slider.jpg)'
    ];

    const bg = imgs[Math.floor(Math.random() * imgs.length)];
    section.style.backgroundImage = bg;
}

setInterval(changeBackground, 5000);

//TIM KIEM IN USER STATUS
function showSearchResultInUser(str) {
    /*     if (str.length == 0) {
            document.getElementById("row").innerHTML = "";
            return;
        } else { */
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("row").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET", "timkiemU.php?q=" + str, true);
    xmlhttp.send();

    document.getElementById("title").innerText = 'KẾT QUẢ TÌM KIẾM';
    document.getElementById("slider").style.display = 'none';
    document.getElementById("header").style.position = 'relative';
    /*     } */
}

// GIƯỜNG NGỦ US

document.getElementById('giuongnguU').addEventListener('click', function(e) {
    e.preventDefault();
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('row').innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "giuongU.php", true);
    xhttp.send();

    document.getElementById("title").innerText = 'GIƯỜNG NGỦ';
    document.getElementById("slider").style.display = 'none';
    document.getElementById("header").style.position = 'relative';

});

// BÀN LÀM VIỆC US

document.getElementById('banU').addEventListener('click', function(e) {
    e.preventDefault();
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("row").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "banU.php", true);
    xhttp.send();

    document.getElementById("title").innerText = 'CÁC LOẠI BÀN';
    document.getElementById("slider").style.display = 'none';
    document.getElementById("header").style.position = 'relative';
});

// GHẾ US

document.getElementById('gheU').addEventListener('click', function(e) {
    e.preventDefault();
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("row").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "gheU.php", true);
    xhttp.send();

    document.getElementById("title").innerText = 'CÁC LOẠI GHẾ';
    document.getElementById("slider").style.display = 'none';
    document.getElementById("header").style.position = 'relative';
});

// TRANH TREO TƯỜNG US

document.getElementById('tranhU').addEventListener('click', function(e) {
    e.preventDefault();
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("row").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "tranhU.php", true);
    xhttp.send();

    document.getElementById("title").innerText = 'TRANH TREO TƯỜNG';
    document.getElementById("slider").style.display = 'none';
    document.getElementById("header").style.position = 'relative';
});

// ĐÈN US

document.getElementById('denU').addEventListener('click', function(e) {
    e.preventDefault();
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("row").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "denU.php", true);
    xhttp.send();

    document.getElementById("title").innerText = 'ĐÈN TRANG TRÍ';
    document.getElementById("slider").style.display = 'none';
    document.getElementById("header").style.position = 'relative';
});

// GƯƠNG US

document.getElementById('guongU').addEventListener('click', function(e) {
    e.preventDefault();
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("row").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "guongU.php", true);
    xhttp.send();

    document.getElementById("title").innerText = 'GƯƠNG TRANG TRÍ';
    document.getElementById("slider").style.display = 'none';
    document.getElementById("header").style.position = 'relative';
});