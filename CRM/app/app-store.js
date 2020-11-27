document.onload = generateItemCards()

function generateItemCards() {
    var items = document.getElementById("items");
    fetch('../server/getallitems.php')
        .then(function (response) {
            // The API call was successful!
            return response.text();
        }).then(function (html) {
            // console.log(JSON.parse(html))


            items.innerHTML += html;

            console.log(html);
        }).catch(function (err) {

            console.warn('Something went wrong.', err);
        });

}

