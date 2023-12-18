<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link rel="stylesheet" href="{{ asset('assets/css/admin/product/create.css') }}">
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
            <form action="{{ route('admin-product-store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h2>Thêm sản phẩm</h2>
                <br>
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
                <div>
                    <label for="productQuantity">Số lượng : </label>
                    <input class="form-control" type="text" id="productQuantity" name="productQuantity"
                        placeholder="Nhập số lượng sản phẩm">
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
                    {{-- <input class="form-control" type="file" id="productImage" name="file" multiple> --}}
                    {{-- <input type="file" name="productImage" --}}
                    <input type="file" name="productImage[]" class="form-control" multiple>
                </div>
                <button class="btn-save">
                    Lưu
                </button>
            </form>
        </div>
    </div>
    <script src="{{ asset('assets/js/admin/product/create.js') }}"></script>
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
