window.onload = function() {
        modal = document.getElementById('myModal');
        document.getElementById('form').addEventListener("submit",validarForm);
        // document.getElementById('passwd2').addEventListener("change", validarPasswd);
    }
    // When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function openModal() {
    modal.style.display = "block";
}

function closeModal() {
    modal.style.display = "none";
}

// Validación Formulario
function validarForm(event){
    var inputs = document.getElementsByTagName('input');
    var vali = true;
    var msg = document.getElementById('msg');
    for (let i = 0; i < inputs.length; i++) {
        if ( inputs[i].type == 'text' && inputs[i].value == ''){
            inputs[i].style.border = "solid 2px red";
            msg.innerHTML = "<p>Rellene los campos marcados</p>";
            msg.style.color = "red";  
            vali = false;
        }else if (inputs[i].type == 'email' && inputs[i].value == '') {
            inputs[i].style.border = "solid 2px red";
            msg.innerHTML = "<p>Rellene los campos marcados</p>";
            msg.style.color = "red"; 
            vali = false
        }else if (inputs[i].type == 'password' && inputs[i].value == ''){
            inputs[i].style.border = "solid 2px red";
            msg.innerHTML = "<p>Rellene los campos marcados</p>";
            msg.style.color = "red"; 
            vali = false
        }else {
            inputs[i].style.border = "solid 1px #DEDEDE";
            document.getElementById("msg").innerHTML = "";
        }
    }
    if (!validarPasswd() || !vali) {
        event.preventDefault();
    }
}

function validarPasswd(){
    var passwd2 = document.getElementById('passwd2').value
    var passwd = document.getElementById('passwd').value
    if (passwd2 != passwd) {
        document.getElementById('passwd2').style.border = "solid 2px red";
        document.getElementById('msgPasswd').innerHTML = "Las contraseñas no coinciden";
        document.getElementById('msgPasswd').style.color = "red";
        return false;
    }else {
        return true;
    }
}