// ! Estructura promesas
document.onload = generateDatesTable();

function generateDatesTable() {
    // * Target label to inyect petition
    var table = document.getElementById("date_table");

    fetch('../server/get_citas.php').then(function (response) {
        // * The API call was successful!
        return response.text();
    }).then(function (html) {
        // * Inject response in html from a php template
        table.innerHTML += html;
    }).catch(function (err) {
        //  * There was an error
        console.warn('Something went wrong.', err);
    });
}
formulario.addEventListener('submit',function(e){
    e.preventDefault();

    var datos = new FormData(formulario);
    console.log(datos);
    console.log(datos.get('contacto'));
    console.log(datos.get('type'));
    console.log(datos.get('descripcion'));
    console.log(datos.get('quantyty'));
    console.log(datos.get('fecha_cita'));

    fetch('../server/post-citas.php',{
        method: 'POST',
        body: datos
    })
        .then(res => res.json())
        .then(data => {
            console.log(data)
            if(data === 'success'){
                $(exito).modal('show');
            }else{
                console.log('error');
            }
        })

})