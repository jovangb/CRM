document.onload = generateWidgets();

function generateWidgets() {
    // * Target label to inyect petition
    var table = document.getElementById("cards");

    fetch('../server/get_widgets.php').then(function (response) {
        // * The API call was successful!
        return response.text();
    }).then(function (html) {
        // * Inject response in html from a php template
        console.log(html);
        table.innerHTML += html;
    }).catch(function (err) {
        //  * There was an error
        console.warn('Something went wrong.', err);
    });
}