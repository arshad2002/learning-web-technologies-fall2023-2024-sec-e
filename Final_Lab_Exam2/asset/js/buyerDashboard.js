document.addEventListener('DOMContentLoaded', function () {
    loadAllProducts();

    function loadAllProducts() {
        let xhr = new XMLHttpRequest();
        xhr.open('GET', '../controller/getProductList.php', true);

        xhr.onload = function () {
            if (xhr.status >= 200 && xhr.status < 300) {
                document.getElementById('productList').innerHTML = xhr.responseText;
            } else {
                console.error('Error fetching product list:', xhr.statusText);
            }
        };

        xhr.onerror = function () {
            console.error('Network error while fetching product list.');
        };

        xhr.send();
    }

    window.loadProductsBySeller = function () {
        let sellerName = document.getElementById('sellerName').value.trim();
        if (sellerName !== "") {
            let xhr = new XMLHttpRequest();
            xhr.open('GET', '../controller/getProductsBySeller.php?seller_name=' + encodeURIComponent(sellerName), true);

            xhr.onload = function () {
                if (xhr.status >= 200 && xhr.status < 300) {
                    document.getElementById('productList').innerHTML = xhr.responseText;
                } else {
                    console.error('Error fetching products by seller:', xhr.statusText);
                }
            };

            xhr.onerror = function () {
                console.error('Network error while fetching products by seller.');
            };

            xhr.send();
        } else {
            console.log('Please enter a seller name.');
        }
    };
});
