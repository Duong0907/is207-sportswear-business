const searchInput = document.querySelector('#search-input');
const searchBtn = document.querySelector('.navSearchIcon');

searchInput.addEventListener('keydown', (e) => {
    if (e.keyCode == 13) {
        window.location.href = `/products/search?keyword=${e.target.value}`;
    }
});
searchBtn.onclick = (e) => {
    window.location.href = `/products/search?keyword=${searchInput.value}`;
};

// const navItem = document.querySelectorAll('.nav-subnav-item');
// // get next element of navbar 
// const navbar = document.querySelector('.nav');
// const nextToNav = navbar.nextElementSibling;
// console.log(nextToNav)

// console.log(navItem);
// navItem.forEach((item) => {
//     item.onmouseover = (e) => {
//         nextToNav.classList.add('blur');
//     }
//     item.onmouseout = (e) => {
//         nextToNav.classList.remove('blur');
//     }
// })

const accountBtn = document.querySelector('#account');
const accountModal = document.querySelector('.modalAccount');
const body = document.querySelector('body');
const logoutBtn = document.querySelector('.modalDetailLogout');
const navbar = document.querySelector('.nav');

if (accountBtn) {
    // Set position for account modal
    accountModal.style.top = navbar.offsetHeight + 'px';
    function toggleAccountModal() {
        accountModal.classList.toggle('open');
    }

    function hideAccountModal() {
        accountModal.classList.remove('open');
    }

    accountBtn.onclick = e => {
        e.stopPropagation();
        toggleAccountModal();
    }
    accountModal.onclick = e => {
        e.stopPropagation();
    }
    body.onclick = hideAccountModal;
}

// Ger cart nummber from local storage
function getCartNumber() {
    let cart = localStorage.getItem('cart');
    if (!cart) {
        return 0;
    }
    cart = JSON.parse(cart);
    let total = 0;
    for (let cartItem of cart) {
        total += parseInt(cartItem.quantity);
    }
    return total;
}

// Render cart number
function renderCartNumber() {
    let cartNumber = document.querySelector('.cartImg p');
    cartNumber.innerHTML = getCartNumber();
}

renderCartNumber();