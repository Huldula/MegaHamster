

<!-- echo('<a href="/impressum">Impressum</a> <br>');
echo('<a href="/datenschutz">Datenschutz</a> <br>');

$room = new TheRoom(80, 90, 100, 110);
echo($room->outputProductInfo());
echo("<br>");

$flat = new TheFlat(80, 90, 100, 110);
$flat->setImageLocation("Images/flat.jpg");
echo($flat->outputProductInfo());
echo("<br>");

$pit = new ThePit(80, 90);
echo($pit->outputProductInfo()); -->
<a href=".?id=2">Impressum</a> <br>
<a href=".?id=3">Datenschutz</a> <br>


<div id="productsContainer" class="m-3 row">

</div>

<script>
    document.addEventListener("DOMContentLoaded", event => {
        fetch('getProducts.php')
            // .then(response => console.log(response))
            .then(response => response.json())
            .then(data => {
               Object.keys(data).forEach(key => {
                   const product = data[key];
                   document.getElementById('productsContainer').innerHTML +=
                       `<div class="col-sm-12 col-md-6 col-lg-3">
                            <h2>${product['name']}</h2>
                            <img src='${product['imgPath']}' class="img-thumbnail">
                            <p>${product['description']}</p>
                            <h3>${product['price']}€</h3>
                        </div>`;
               })
            });
    });
</script>