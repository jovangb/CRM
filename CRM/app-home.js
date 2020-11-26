var cerrar_sesion = document.getElementById("cerrar_sesion");
var salir = document.getElementById("salir");
var aceptar = document.getElementById("aceptar")

function comprobarSesion(){
    fetch('server/sesion.php')
    .then(res => res.json())
    .then(data => {
        console.log(data)
        if(data === 'sesion'){
            location.href = '#';
        }else{
            location.href = 'index.html';
        }
    })
}

document.onload = comprobarSesion()

cerrar_sesion.addEventListener('click',function(){
    console.log("Saliiiiir")
    $(salir).modal('show');
})

aceptar.addEventListener('click',function(){
    fetch('server/cerrar_sesion.php') 
    .then(res => res.json())
    .then(data => {
        if(data === 'cerrado'){
            location.href = "index.html"
        }
    })
})