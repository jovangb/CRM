document.onload = generateContactos()

function generateContactos() {
    var contacto = document.getElementById("contacto");
    fetch('../server/contactos.php')
        .then(function (response) {
            // The API call was successful!
            console.log(response)
            return response.text();
        }).then(function (html) {
            // console.log(JSON.parse(html))
            contacto.innerHTML += html;

            console.log(html);
        }).catch(function (err) {

            console.warn('Something went wrong.', err);
        });

}