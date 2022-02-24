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

// GIƯỜNG NGỦ

document.getElementById('giuongngu').addEventListener('click', function (e) {
    e.preventDefault();
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('row').innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "giuong.php", true);
    xhttp.send();

    document.getElementById("title").innerText = 'GIƯỜNG NGỦ';
    document.getElementById("slider").style.display = 'none';
    document.getElementById("header").style.position = 'relative';

});

// BÀN LÀM VIỆC

document.getElementById('ban').addEventListener('click', function (e) {
    e.preventDefault();
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("row").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "ban.php", true);
    xhttp.send();

    document.getElementById("title").innerText = 'CÁC LOẠI BÀN';
    document.getElementById("slider").style.display = 'none';
    document.getElementById("header").style.position = 'relative';
});

// GHẾ

document.getElementById('ghe').addEventListener('click', function (e) {
    e.preventDefault();
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("row").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "ghe.php", true);
    xhttp.send();

    document.getElementById("title").innerText = 'CÁC LOẠI GHẾ';
    document.getElementById("slider").style.display = 'none';
    document.getElementById("header").style.position = 'relative';
});

// TRANH TREO TƯỜNG

document.getElementById('tranh').addEventListener('click', function (e) {
    e.preventDefault();
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("row").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "tranh.php", true);
    xhttp.send();

    document.getElementById("title").innerText = 'TRANH TREO TƯỜNG';
    document.getElementById("slider").style.display = 'none';
    document.getElementById("header").style.position = 'relative';
});

// ĐÈN

document.getElementById('den').addEventListener('click', function (e) {
    e.preventDefault();
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("row").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "den.php", true);
    xhttp.send();

    document.getElementById("title").innerText = 'ĐÈN TRANG TRÍ';
    document.getElementById("slider").style.display = 'none';
    document.getElementById("header").style.position = 'relative';
});

// GƯƠNG

document.getElementById('guong').addEventListener('click', function (e) {
    e.preventDefault();
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("row").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "guong.php", true);
    xhttp.send();

    document.getElementById("title").innerText = 'GƯƠNG TRANG TRÍ';
    document.getElementById("slider").style.display = 'none';
    document.getElementById("header").style.position = 'relative';
});

//TIM KIEM
function showSearchResult(str) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("row").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET", "timkiem.php?q=" + str, true);
    xmlhttp.send();
    document.getElementById("title").innerText = 'KẾT QUẢ TÌM KIẾM';
    document.getElementById("slider").style.display = 'none';
    document.getElementById("header").style.position = 'relative';
}

//DANG NHAP
document.getElementById('dangnhap').addEventListener('click', function (e) {
    e.preventDefault();
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('main').innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "dangnhap.php", true);
    xhttp.send();

    document.getElementById("title").innerText = 'THÔNG TIN ĐĂNG NHẬP';
    document.getElementById("slider").style.display = 'none';
    document.getElementById("header").style.position = 'relative';

});

//GIO HANG
/* document.getElementById('giohang').addEventListener('click', function(e) {
    e.preventDefault();
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('main').innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "dangnhap.php", true);
    xhttp.send();

    document.getElementById("title").innerText = 'VUI LÒNG ĐĂNG NHẬP TRƯỚC KHI VÀO TÍNH NĂNG GIỎ HÀNG';
    document.getElementById("slider").style.display = 'none';
    document.getElementById("header").style.position = 'relative';

}); */

//THEM VAO GIO HANG
/* document.getElementById('giohang').addEventListener('click', function(e) {
    e.preventDefault();
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('main').innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "dangnhap.php", true);
    xhttp.send();

    document.getElementById("title").innerText = 'VUI LÒNG ĐĂNG NHẬP TRƯỚC KHI VÀO TÍNH NĂNG GIỎ HÀNG';
    document.getElementById("slider").style.display = 'none';
    document.getElementById("header").style.position = 'relative';

}); */

//DANG KY
document.getElementById('dangky').addEventListener('click', function (e) {
    e.preventDefault();
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('main').innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "dangky.php", true);
    xhttp.send();

    document.getElementById("title").innerText = 'XIN MỜI QUÝ KHÁCH ĐĂNG KÝ THÔNG TIN';
    document.getElementById("slider").style.display = 'none';
    document.getElementById("header").style.position = 'relative';

});