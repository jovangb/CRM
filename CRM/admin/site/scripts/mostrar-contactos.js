document.onload = generateContactos()

function generateContactos() {
    var items = document.getElementById("items");
    fetch('../server/get_contactos.php')
        .then(function (response) {
            // The API call was successful!
            console.log(response)
            return response.text();
        }).then(function (html) {
            // console.log(JSON.parse(html))
            items.innerHTML += html;

            console.log(html);
        }).catch(function (err) {

            console.warn('Something went wrong.', err);
        });

}
