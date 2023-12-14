<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link rel="stylesheet" href="{{ asset('assets/css/admin/product/create.css') }}">

</head>

<body>
    {{-- <header>
        <h2>Thêm sản phẩm</h2>
    </header> --}}
    <div class="main">
        <div class="container">
            <form action="" method="POST">
                @csrf
                <h2>Thêm sản phẩm</h2>
                <br>
                <input type="hidden" name="action" value="create">
                <div>
                    <label for="productName">Tên sản phẩm : </label>
                    <input class="form-control" type="text" id="productName" name="productName"
                        placeholder="Nhập tên sản phẩm">
                </div>

                <div>
                    <label for="productObject">Đối tượng : </label>
                    <select name="productObject" id="productObject">
                        <option value=1>Nam</option>
                        <option value=2>Nữ</option>
                        <option value=3>Trẻ em</option>
                        <option value=4>unisex</option>
                    </select>
                </div>

                <div>
                    <label for="productType">Loại sản phẩm : </label>
                    <select name="productType" id="productType">
                        <option value=1>Áo</option>
                        <option value=2>Quần</option>
                        <option value=3>Giày</option>
                        <option value=4>Tất</option>
                    </select>
                </div>

                <div>
                    <label for="productPrice">Giá : </label>
                    <input class="form-control" type="text" id="productPrice" name="productPrice"
                        placeholder="Nhập giá sản phẩm">
                </div>

                <!-- description -->
                <div>
                    <label for="productDescription">Mô tả : </label>
                    <textarea class="form-control" name="productDescription" id="productDescription" style="height: 100px;"
                        placeholder="Nhập mô tả sản phẩm"></textarea>
                </div>

                <!-- màu -->
                <div>
                    <!-- các màu đã thêm -->
                </div>
                <div>
                    <label for="color" id="color">Màu : </label>
                    <input type="checkbox" name="color" class="color-btn" value="xanh" onchange="updateColor(this)">
                    xanh
                    <input type="checkbox" name="color" class="color-btn" value="vàng" onchange="updateColor(this)">
                    vàng
                    <input type="checkbox" name="color" class="color-btn" value="đỏ" onchange="updateColor(this)">
                    đỏ
                    <input type="checkbox" name="color" class="color-btn" value="tím" onchange="updateColor(this)">
                    tím
                    <input type="checkbox" name="color" class="color-btn" value="đen" onchange="updateColor(this)">
                    đen
                    <input type="checkbox" name="color" class="color-btn" value="trắng" onchange="updateColor(this)">
                    trắng
                    <br>
                    <br>
                    <label for="productColor">Các màu đã chọn : </label>
                    <input class="form-control" type="text" name="productColor" id="productColor" readonly>
                </div>

                <!-- size -->
                <div>
                    <label for="productSize">Size : </label>
                    <input class="form-control" type="text" id="productSize" name="productSize"
                        placeholder="Nhập size của sản phẩm">
                </div>

                <!-- ảnh -->
                <div>
                    <label for="productImage">Ảnh : </label>
                    <input class="form-control" type="file" id="productImage" name="productImage" multiple>
                    {{-- <input class="form-control" type="text" id="productImage" name="productImage"
                        placeholder="nhập image link của sản phẩm"> --}}
                </div>
                <button style="cursor: pointer;">
                    Lưu
                </button>
            </form>
        </div>
    </div>
    <script>
        // let productColor = document.getElementById('productColor');
        const updateColor = (checkbox) => {
            let selectedColorsInput = document.getElementById('productColor');
            let selectedColors = selectedColorsInput.value.split(', ');
            if (selectedColorsInput.value === '') {
                selectedColors = [];
            }

            if (checkbox.checked) {
                selectedColors.push(checkbox.value);
            } else {
                var index = selectedColors.indexOf(checkbox.value);
                if (index > -1) {
                    selectedColors.splice(index, 1);
                }
            }
            if (selectedColors.length === 0) {
                selectedColorsInput.value = '';
                return;
            }
            for (let i = 0; i < selectedColors.length; ++i) {
                if (i === 0) {
                    selectedColorsInput.value = selectedColors[i];
                } else {
                    selectedColorsInput.value += ', ' + selectedColors[i];
                }
            }
        }
    </script>
</body>

</html>
