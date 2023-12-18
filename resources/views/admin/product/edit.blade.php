<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link rel="stylesheet" href="{{ asset('assets/css/admin/product/create.css') }}">
    <style>
        .product-image {
            display: flex;
            flex-wrap: wrap;
        }

        .product-image-item {
            --size: 164px;
            width: var(--size);
            height: var(--size);
            object-fit: cover;
            margin: 10px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/css/shared/toast.css') }}">

</head>

<body>
    {{-- <header>
        <h2>Thêm sản phẩm</h2>
    </header> --}}
    <div class="main">
        <div class="container">
            <form action="/admin/product/edit/{{ $product->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h2>Sửa sản phẩm</h2>
                <br>
                <input type="hidden" name="action" value="create">
                <div>
                    <label for="productName">Tên sản phẩm : </label>
                    <input class="form-control" type="text" id="productName" name="productName"
                        value="{{ $product->product_name }}">
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
                        value="{{ $product->product_price }}">
                </div>

                <div>
                    <label for="productQuantity">Số lượng : </label>
                    <input class="form-control" type="text" id="productQuantity" name="productQuantity"
                        value="{{ $product->quantity }}">
                </div>

                <!-- description -->
                <div>
                    <label for="productDescription">Mô tả : </label>
                    <textarea class="form-control" name="productDescription" id="productDescription" style="height: 100px;"></textarea>
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
                    <input style="display: none" type="text" name="productColorId" id="productColorId" readonly
                        value="{{ $allColorIdOfProduct }}">
                    <br>
                    <label for="productColor">Các màu đã chọn : </label>
                    <input class="form-control" type="text" name="productColor" id="productColor" readonly
                        value="{{ $allColorOfProduct }}">
                </div>

                <!-- size -->
                <div>
                    <label for="size" id="size">Size : </label>
                    @foreach ($sizes as $size)
                        <input type="checkbox" name="size" class="checkbox-btn size-btn" value="{{ $size->id }}"
                            onchange="updateSize(this)"> <span>{{ $size->size_name }}</span>
                    @endforeach
                    <br>
                    <input style="display: none" type="text" name="productSizeId" id="productSizeId" readonly
                        value="{{ $allSizeIdOfProduct }}">
                    <br>
                    <label for="productSize">Các size đã chọn : </label>
                    <input class="form-control" type="text" id="productSize" name="productSize" readonly
                        value="{{ $allSizeOfProduct }}">
                </div>

                <div>
                    {{-- display image that product had --}}
                    <label for="productImage">Ảnh sản phẩm hiện tại: </label>
                    <div class="product-image">
                        @foreach ($images as $image)
                            <img src="{{ asset($image->image_link) }}" alt="product image" class="product-image-item">
                        @endforeach
                    </div>
                </div>
                <!-- ảnh -->
                <div>
                    <label for="productImage">Ảnh : </label>
                    <input class="form-control" type="file" id="productImage" name="productImage[]" multiple>
                    {{-- <input class="form-control" type="text" id="productImage" name="productImage"
                        placeholder="nhập image link của sản phẩm"> --}}
                </div>
                <button class="btn-save">
                    Lưu
                </button>
            </form>
        </div>
    </div>
    <script>
        let sizeArr = @json($allSizeIdOfProduct).split(', ');
        let colorArr = @json($allColorIdOfProduct).split(', ');
        // the checkbox is checked if the size is in the sizeArr
        let sizeBtns = document.getElementsByClassName('size-btn');
        for (let i = 0; i < sizeBtns.length; i++) {
            if (sizeArr.includes(sizeBtns[i].value)) {
                sizeBtns[i].checked = true;
            }
        }
        // the checkbox is checked if the color is in the colorArr
        let colorBtns = document.getElementsByClassName('checkbox-btn');
        for (let i = 0; i < colorBtns.length; i++) {
            if (colorArr.includes(colorBtns[i].value)) {
                colorBtns[i].checked = true;
            }
        }
        // update the value of description 
        document.getElementById('productDescription').value = @json($product->product_description);
        // update the value of productType
        document.getElementById('productType').value = @json($product->product_type_id);
        // update the value of productObject
        document.getElementById('productObject').value = @json($product->product_object_id);
    </script>
    <script src="{{ asset('assets/js/admin/product/edit.js') }}"></script>
    <script src="{{ asset('assets/js/shared/toast.js') }}"></script>
    <div id="toast"></div>
    @if ($message = Session::get('error'))
        <script>
            toast({
                title: 'Lỗi',
                message: '{{ $message }}',
                type: 'error',
                duration: 5000
            })
        </script>
    @endif
    @if ($message = Session::get('success'))
        <script>
            toast({
                title: 'Thành công',
                message: '{{ $message }}',
                type: 'success',
                duration: 5000
            })
        </script>
    @endif
</body>

</html>
