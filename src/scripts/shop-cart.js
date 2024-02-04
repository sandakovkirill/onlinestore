let buttons = document.querySelectorAll('.user');

let cartItems = {};
let totalAmount = 0;

const subtotalElement = document.querySelector('.subtotal');

buttons.forEach(button => {
    button.addEventListener('click', () => {
        let productID = button.getAttribute('data-product-id');
        
        if (cartItems[productID]) {
            console.log('Этот товар уже добавлен в корзину!');
            return;
        }

        cartItems[productID] = {
            quantity: 1,
            price: 0
        };

        // Отправляем AJAX-запрос на сервер
        let xhr = new XMLHttpRequest();
        xhr.open('GET', 'scripts/get_product_info.php?id=' + productID, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                let productInfo = JSON.parse(xhr.responseText);
                console.log('Информация о товаре:', productInfo);

                // Генерируем блок с информацией о товаре
                let productItem = document.createElement('div');
                productItem.classList.add('product-item');

                let productImage = document.createElement('img');
                productImage.setAttribute('src', 'img/' + productInfo.productimage);
                productItem.appendChild(productImage);

                let productDetails = document.createElement('div');
                productDetails.classList.add('product-details');

                let productName = document.createElement('p');
                productName.classList.add('title-text-modal');
                productName.textContent = productInfo.productname;
                productDetails.appendChild(productName);

                let productQuantityAndPrice = document.createElement('p');
                productQuantityAndPrice.classList.add('small-text-modal');
                productQuantityAndPrice.textContent = `Quantity: ${cartItems[productID].quantity} | Price: ${productInfo.productprice} ₹`;
                productDetails.appendChild(productQuantityAndPrice);

                productItem.appendChild(productDetails);

                document.querySelector('.modal-body-content').prepend(productItem);

                // Добавляем динамическое поле для изменения количества товара
                let quantityInput = document.createElement('input');
                quantityInput.type = 'number';
                quantityInput.value = 1;
                quantityInput.min = 1;
                quantityInput.addEventListener('input', () => {
                    let quantity = parseInt(quantityInput.value);
                    let price = productInfo.productprice * quantity;
                    cartItems[productID].quantity = quantity;
                    cartItems[productID].price = price;
                    productQuantityAndPrice.textContent = `Quantity: ${quantity} | Price: ${price}₹`;
                    
                    totalAmount = Object.values(cartItems).reduce((acc, item) => acc + item.price, 0);
                    subtotalElement.innerHTML = `<p>Subtotal: RS. ${totalAmount} ₹</p>`;
                });
                productDetails.appendChild(quantityInput);

                totalAmount += productInfo.productprice;
                subtotalElement.innerHTML = `<p>Subtotal: RS. ${totalAmount} ₹</p>`;
            }
        };
        xhr.send();
    });
});