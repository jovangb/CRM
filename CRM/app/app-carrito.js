var productos = document.getElementById("productos");
var total = document.getElementById("total");
var main = document.getElementById("colmain");
var rowmain = document.getElementById("rowmain");
var totalventa = 0;
var confirmarCompra = document.getElementById("confirmarCompra");
var exito = document.getElementById("exito");

function cargarProductos(){
    fetch('../server/post-carrito.php')
    .then(res => res.json())
    .then(data => {
        console.log(data)
        if(data != "nodata"){
            for (let i = 0; i < data.length; i++) {
                totalventa += parseFloat(data[i][2])
                console.log(totalventa)
                productos.innerHTML += `<div class="row mb-4">
                <div class="col">`+data[i][0]+`</div>
                <div class="col">`+data[i][1]+`</div>
                <div class="col">$`+data[i][2]+`</div>
                </div>`  
            }
            total.innerHTML = `Total: $`+ totalventa
        }else{
            rowmain.style.minHeight = "75vh"
            main.className += " align-self-center"
            console.log(rowmain.innerHTML)
            main.innerHTML = `<p class="lead">Aún no tienes productos en tu carrito.</p>`
        }
    })
}

confirmarCompra.addEventListener('click',function(){
    fetch('../server/ejecutar-compra.php')
    .then(res => res.json())
    .then(data => {
        if(data === 'success'){
            console.log(data);
            $(exito).modal('show');
        }
    })
})


document.onload = cargarProductos()

