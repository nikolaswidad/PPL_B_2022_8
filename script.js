var provinsi = document.forms.form.provinsi
var kota = document.forms.form.kota


provinsi.onchange = function () {
    var xhr = new XMLHttpRequest();

    xhr.open('GET', 'get_kota.php?id=' + provinsi.value)

    xhr.onload = function () {
        kota.innerHTML = xhr.responseText
    }

    xhr.send()
}
