document.addEventListener('DOMContentLoaded', function () {
    const productList = document.getElementById('productList');
    const addProductBtn = document.getElementById('addProductBtn');

    addProductBtn.addEventListener('click', function () {
        addProduct();
    });

    function addProduct() {
        const productDiv = document.createElement('div');
        productDiv.classList.add('product');

        const productNameInput = document.createElement('input');
        productNameInput.setAttribute('type', 'text');
        productNameInput.setAttribute('placeholder', 'Nome do Produto');

        const productPriceInput = document.createElement('input');
        productPriceInput.setAttribute('type', 'text');
        productPriceInput.setAttribute('placeholder', 'Preço do Produto');

        const removeProductBtn = document.createElement('button');
        removeProductBtn.textContent = 'Remover Produto';
        removeProductBtn.addEventListener('click', function () {
            productList.removeChild(productDiv);
        });

        productDiv.appendChild(productNameInput);
        productDiv.appendChild(productPriceInput);
        productDiv.appendChild(removeProductBtn);

        productList.appendChild(productDiv);
    }
});
