window.onload = function() {
    document.getElementById('form').addEventListener("submit",validarForm);
    // document.getElementById('passwd2').addEventListener("change", validarPasswd);
}
function validarForm(event){
    var inputs = document.getElementsByTagName('input');
    var vali = true;
    var msg = document.getElementById('msg');
    for (let i = 0; i < inputs.length; i++) {
        if ( inputs[i].type == 'text' && inputs[i].value == ''){
            inputs[i].style.border = "solid 2px red";
            msg.innerHTML = "Rellene los campos marcados";
            msg.style.color = "red";  
            vali = false;
        }else if (inputs[i].type == 'email' && inputs[i].value == '') {
            inputs[i].style.border = "solid 2px red";
            msg.innerHTML = "Rellene los campos marcados";
            msg.style.color = "red"; 
            vali = false
        }else if (inputs[i].type == 'password' && inputs[i].value == ''){
            inputs[i].style.border = "solid 2px red";
            msg.innerHTML = "Rellene los campos marcados";
            msg.style.color = "red"; 
            vali = false
        }else {
            inputs[i].style.border = "solid 1px grey";
            document.getElementById("msg").innerHTML = ""
        }
    }
    if (!vali) {
        event.preventDefault();
    }
}