// handle color
let selectedColorsInputId = document.getElementById('productColorId');
let selectedColorsInput = document.getElementById('productColor');

const updateColor = (checkbox) => {
    let selectedColorsId = selectedColorsInputId.value.split(', ');
    let selectedColors = selectedColorsInput.value.split(', ');

    if (selectedColorsInputId.value === '') {
        selectedColorsId = [];
        selectedColors = [];
    }

    if (checkbox.checked) {
        selectedColorsId.push(checkbox.value);
        selectedColors.push(checkbox.nextElementSibling.textContent.trim());
    } else {
        var index = selectedColorsId.indexOf(checkbox.value);
        if (index > -1) {
            selectedColorsId.splice(index, 1);
            selectedColors.splice(index, 1);
        }
    }
    if (selectedColorsId.length === 0) {
        selectedColorsInputId.value = '';
        selectedColorsInput.value = '';
        return;
    }
    for (let i = 0; i < selectedColorsId.length; ++i) {
        if (i === 0) {
            selectedColorsInputId.value = selectedColorsId[i];
            selectedColorsInput.value = selectedColors[i];
        } else {
            selectedColorsInputId.value += ', ' + selectedColorsId[i];
            selectedColorsInput.value += ', ' + selectedColors[i];
        }
    }
}

// take size for product
let productType = document.getElementById('productType');
let allSize = document.getElementsByClassName('size-btn');
const changeSize = () => {
    if (productType.value == 3) {
        for (let i = 0; i < allSize.length; ++i) {
            if (allSize[i].value <= 7) {
                allSize[i].style.display = 'none';
                allSize[i].nextElementSibling.style.display = 'none';
            } else {
                allSize[i].style.display = 'inline-block';
                allSize[i].nextElementSibling.style.display = 'inline-block';
            }
        }
    } else {
        for (let i = 0; i < allSize.length; ++i) {
            if (allSize[i].value > 7) {
                allSize[i].style.display = 'none';
                allSize[i].nextElementSibling.style.display = 'none';
            } else {
                allSize[i].style.display = 'inline-block';
                allSize[i].nextElementSibling.style.display = 'inline-block';
            }
        }
    }
}
changeSize();

// handle size
let selectedSizesInputId = document.getElementById('productSizeId');
let selectedSizesInput = document.getElementById('productSize');

const updateSize = (checkbox) => {
    let selectedSizesId = selectedSizesInputId.value.split(', ');
    let selectedSizes = selectedSizesInput.value.split(', ');

    if (selectedSizesInputId.value === '') {
        selectedSizesId = [];
        selectedSizes = [];
    }

    if (checkbox.checked) {
        selectedSizesId.push(checkbox.value);
        selectedSizes.push(checkbox.nextElementSibling.textContent.trim());
    } else {
        var index = selectedSizesId.indexOf(checkbox.value);
        if (index > -1) {
            selectedSizesId.splice(index, 1);
            selectedSizes.splice(index, 1);
        }
    }
    if (selectedSizesId.length === 0) {
        selectedSizesInputId.value = '';
        selectedSizesInput.value = '';
        return;
    }
    for (let i = 0; i < selectedSizesId.length; ++i) {
        if (i === 0) {
            selectedSizesInputId.value = selectedSizesId[i];
            selectedSizesInput.value = selectedSizes[i];
        } else {
            selectedSizesInputId.value += ', ' + selectedSizesId[i];
            selectedSizesInput.value += ', ' + selectedSizes[i];
        }
    }
}


