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
                        @foreach ($productObjects as $productObject)
                            <option value={{ $productObject->id }}> {{ $productObject->object_name }} </option>
                        @endforeach

                    </select>
                </div>

                <div>
                    <label for="productType">Loại sản phẩm : </label>
                    <select name="productType" id="productType" onchange="changSize()">
                        @foreach ($productTypes as $productType)
                            <option value={{ $productType->id }}>{{ $productType->type_name }}</option>
                        @endforeach
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
                    @foreach ($colors as $color)
                        <input type="checkbox" name="color" class="checkbox-btn" value="{{ $color->id }}"
                            onchange="updateColor(this)"><span>{{ $color->color_name }}</span>
                    @endforeach
                    <br>
                    <input style="display: none" type="text" name="productColorId" id="productColorId" readonly>
                    <br>
                    <label for="productColor">Các màu đã chọn : </label>
                    <input class="form-control" type="text" name="productColor" id="productColor" readonly>
                </div>

                <!-- size -->
                <div>
                    <label for="size" id="size">Size : </label>
                    @foreach ($sizes as $size)
                        <input type="checkbox" name="size" class="checkbox-btn size-btn" value="{{ $size->id }}"
                            onchange="updateSize(this)"> <span>{{ $size->size_name }}</span>
                    @endforeach
                    <br>
                    <input style="display: none" type="text" name="productSizeId" id="productSizeId" readonly>
                    <br>
                    <label for="productSize">Các size đã chọn : </label>
                    <input class="form-control" type="text" id="productSize" name="productSize" readonly>
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
    <script src="{{ asset('assets/js/admin/product/create.js') }}"></script>
</body>

</html>
