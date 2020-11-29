var productos = document.getElementById("productos");
var total = document.getElementById("total");
var totalventa = 0;

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
            console.log("Programar modal")
        }
    })
}

document.onload = cargarProductos()