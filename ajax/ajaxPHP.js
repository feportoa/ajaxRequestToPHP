let text = document.getElementById('ajaxHolder'); 
let button = document.getElementById('send');

window.addEventListener('load', loadAjax);

function loadAjax(e) {
    e.preventDefault();
    const xhr = new XMLHttpRequest();
    
    xhr.open('GET', 'getUsers.php', true);

    xhr.onload = function() {
        if(this.status == 200){
            let users = JSON.parse(this.responseText);

            let output = '';
            for(var i in users){
                output += '<ul>' +
                '<li>ID: '+users[i].id+'</li>'+
                '<li>Nome: '+users[i].nome+'</li>'+
                '<li>Sobrenome: '+users[i].sobrenome+'</li>'+
                '</ul>';
            }

            text.innerHTML = output;
        }
    }

    xhr.send();
}