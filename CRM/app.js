//console.log("Funcionando")

var intentos = 1;
var alerta = document.getElementById("alerta");
var formulario = document.getElementById("formulario");
var salir = document.getElementById("cerrar_sesion");

function comprobarSesion(){
    fetch('sesion.php')
    .then(res => res.json())
    .then(data => {
        console.log(data)
        if(data === 'sesion'){
            location.href = 'home.html';
        }else{
            location.href = '#';
        }
    })
}

document.onload = comprobarSesion()


formulario.addEventListener('submit',function(e){
    e.preventDefault();

    var datos = new FormData(formulario);
    console.log(datos);
    console.log(datos.get('usuario'));

    fetch('post.php',{
        method: 'POST',
        body: datos
    })
        .then(res => res.json())
        .then(data => {
            console.log(data)
            if(data === 'success'){
                location.href = 'home.html';
            }else{
                if(intentos === 1){
                    alerta.innerHTML += `<small class="text-danger">Datos incorrectos, inténtalo de nuevo.</small>`
                intentos++;
                }
            }
        })

})