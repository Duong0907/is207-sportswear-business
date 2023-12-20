// Format price to string with comma, Vietnamese currency
function formatPrices() {
    const productPrices = document.querySelectorAll('.product-price');
    productPrices.forEach(productPrice => {
        if (productPrice.textContent.indexOf('₫') == -1)
            productPrice.textContent = formatPrice(parseInt(productPrice.textContent));
    });
}
formatPrices();



// FILTER FEATURE
const filterBtn = document.querySelector('.apply-filter-btn');
const filterItems = document.querySelectorAll('.filter-item');
const filterValues = document.querySelectorAll('.filter-values');
const filterValueInputs = document.querySelectorAll('.filter-values input');


function getFitlerURL() {
    var filterData = {
        'Đối tượng': [],
        'Loại': [],
        'Màu': [],
        'Kích thước': [],
    };

    // Get filter data from filter items
    filterItems.forEach(filterItem => {
        const filterValueInputs = filterItem.querySelectorAll('.filter-values input'); // Các giá trị của đối tượng, ...
        
        filterValueInputs.forEach(filterValueInput => {
            const parentElement = filterValueInput.parentElement;
            const filterName = parentElement.parentElement.querySelector('label').innerText; // Đối tượng, ...
            if (filterValueInput.checked) {
                const value = parentElement.querySelector('label').innerText;
                filterData[filterName].push(value);
            }
        });
    });

    // console.log(filterData);

    // Convert filterData to string to add to URL
    let filterDataSubmit = filterData;
    for (let key in filterData) {
        filterDataSubmit[key] = filterData[key].join(',');
    }

    let url = '/products/filter?';

    for (let key in filterDataSubmit) {
        url += key + '=' + filterDataSubmit[key] + '&';
    }
    if (url[url.length - 1] == '&') {
        url = url.slice(0, url.length - 1);
    }

    return url;
}

filterBtn.addEventListener('click', () => {
    let url = getFitlerURL();
    window.location.href = url;
});


// CLEAR FILTER 
const clearFilterBtn = document.querySelector('#show-product-list-clear-filter');
clearFilterBtn.addEventListener('click', () => {
    document.querySelectorAll('.filter-values input').forEach(input => {
        input.checked = false;
    });
});

// VIEW MORE FEATURE
let page = 1;
const viewMoreBtn = document.querySelector('.show-product-list-more');
function nextPageURL() {
    if (window.location.href.indexOf('?') == -1) {
        return window.location.href + '?page=' + (page + 1);
    }
    return window.location.href + '&page=' + (page + 1);
}


function newProductItem(product_id, image_link, product_name, product_price) {
    let html = `
        <div class="product-img" onclick="window.location.href='/product/${product_id}'">
                <img class="product-img-inner" src="${image_link}" alt="product-img">
        </div>
        <div class="product-name">${product_name}</div>
        <div class="product-price">${product_price}</div>                 
    `;

    let product = document.createElement('div');
    product.classList.add('show-product');
    product.innerHTML = html;
    return product;
}


// Each time click view more button, fetch data from server and append to product list
viewMoreBtn.addEventListener('click', () => {
    fetch(nextPageURL())
        .then(response => response.json())
        .then(res => {
            page++;

            // If no more products to show, hide view more button
            if (!res['hasNext']) {
                viewMoreBtn.style.display = 'none';
            }

            res['products'].forEach(product => {
                let productItem = newProductItem(product['id'], product['image_link'], product['product_name'], product['product_price']);
                document.getElementById('show-product-list').appendChild(productItem);
            });

            formatPrices();
        });
});
