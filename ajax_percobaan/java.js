var hint = document.getElementById('text');

var ajax = new XMLHttpRequest();

hint.addEventListener('keyup', function() {

    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById('kontent').innerHTML = this.responseText; 
        }
    }

    ajax.open('GET','data.php?hint='+ hint.value, true);
    ajax.send();
});