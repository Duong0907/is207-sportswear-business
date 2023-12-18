@extends('layouts.app')
@section('css')
<link rel="stylesheet" href=" {{ asset('assets/css/base.css') }} ">
<link rel="stylesheet" href=" {{ asset('assets/css/user/home.css') }} ">
<link rel="stylesheet" href=" {{ asset('assets/css/shared/carousel_pro.css') }} ">
<link rel="stylesheet" href=" {{ asset('assets/css/shared/marquee.css') }} ">
<link rel="stylesheet" href=" {{ asset('assets/css/shared/marquee_shirt.css') }} ">
@endsection
@section('content')
<div class="homePage">
    <div class="homePoster">
        @include('shared.carousel_pro')
    </div>
    @include('shared.marquee')
    <div class="homeCategory">
        <div>
            <p>HẠNG MỤC</p>
        </div>
        <div class="homeListCategory">
            <div onclick="window.location.href = '/products/new'" class="cursor-pointer">
                <div class="ListImgContainer">
                    <img src="https://images.pexels.com/photos/13450843/pexels-photo-13450843.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="SẢN PHẨM MỚI">
                </div>
                <h4>SẢN PHẨM MỚI</h4>
            </div>
            <div onclick="window.location.href = '/products/new?object=1'" class="cursor-pointer">
                <div class="ListImgContainer">
                    <img src="https://images.pexels.com/photos/8556754/pexels-photo-8556754.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="SẢN PHẨM DÀNH CHO NAM">
                </div>
                <h4>NAM</h4>
            </div>
            <div onclick="window.location.href = '/products/new?object=2'" class="cursor-pointer">
                <div class="ListImgContainer">
                    <img src="https://images.pexels.com/photos/5300913/pexels-photo-5300913.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="SẢN PHẨM DÀNH CHO NỮ">
                </div>
                <h4>NỮ</h4>
            </div>
            <div onclick="window.location.href = '/products/new?object=3'" class="cursor-pointer">
                <div class="ListImgContainer">
                    <img src="https://images.pexels.com/photos/5896837/pexels-photo-5896837.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="SẢN PHẨM DÀNH CHO TRẺ EM">
                </div>
                <h4>TRẺ EM</h4>
            </div>
            <div onclick="window.location.href = '/products/new'" class="cursor-pointer">
                <div class="ListImgContainer">
                    <img src="https://images.pexels.com/photos/9400764/pexels-photo-9400764.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="SẢN PHẨM ĐANG KHUYẾN MÃI">
                </div>
                <h4>KHUYẾN MÃI</h4>
            </div>
        </div>
    </div>
    <div class="homeBanner">
        <div class="homeBannerDescribe">
            <p class="mb1 mt2">ÁO ĐẤU CHÍNH HÃNG</p>
            <p class="mb2">Sở hữu cho mình những chiếc áo đấu mới mùa giải 2023/2024 của mọi câu lạc
                bộ thuộc Top 5
                Giải đấu hàng đầu thế giới. </p>
            @include('shared.marquee_shirt')
            <button onclick="window.location.href='/products/new'" class="homeBannerBtn primary-button-hover">XEM CHI
                TIẾT</button>
        </div>
        <div>
            <img src="{{ asset('assets/images/module-3/image-png') }}" alt="">
        </div>
    </div>
    <div class="homeNewestProduct">
        <div>
            <p>SẢN PHẨM HOT NHẤT</p>
        </div>
        <div class="homeNewestProductImg">
            @foreach($products as $product)
            <div class="homeListImg">
                <img class="cursor-pointer" onclick="window.location.href='/product/{{ $product->id }}'"
                    src="{{ $product->images[0]->image_link }}}}" alt="GIÀY ĐÁ BÓNG MỚI NHẤT">
            </div>
            {{--
            <div class="homeListImg">
                <img src="https://i.pinimg.com/564x/3c/a8/e5/3ca8e5a7e8509b84dd31620e22544065.jpg"
                    alt="GIÀY ĐÁ BÓNG MỚI NHẤT">
            </div>
            <div class="homeListImg">
                <img src="https://images.unsplash.com/photo-1616124619460-ff4ed8f4683c?q=80&w=1898&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="ÁO ĐẤU CHÍNH HÃNG MÙA GIẢI MỚI NHẤT">
            </div>
            <div class="homeListImg">
                <img src="https://i.pinimg.com/736x/ad/47/9d/ad479d5aaa731d35d8c2e09ee06a073d.jpg"
                    alt="BỘ SƯU TẬP GIÀY CR7 MỚI NHẤT">
            </div>
            --}}
            @endforeach
        </div>
    </div>

    <div class="homeRate">
        <div>
            <p>ĐÁNH GIÁ CỦA KHÁCH HÀNG</p>
        </div>
        <div class="homeRateImg">
            <img src="{{ asset('assets/images/module-5/customer-Review-1.png') }}"
                alt="ĐÁNH GIÁ TUYỆT VỜI TỪ KHÁCH HÀNG">
            <img src="{{ asset('assets/images/module-5/customer-Review.png') }}" alt="ĐÁNH GIÁ TUYỆT VỜI TỪ KHÁCH HÀNG">
            <img src="{{ asset('assets/images/module-5/customer-Review-1.png') }}"
                alt="ĐÁNH GIÁ TUYỆT VỜI TỪ KHÁCH HÀNG">
        </div>
    </div>

    <div class="homeMen">
        <div>
            <p>NAM</p>
        </div>
        <div class="homeMenList">
            <div class="homeListItem">
                <div class="homeListImg">
                    <img src="https://i.pinimg.com/564x/52/8b/c1/528bc16d7e3dd205537ac86bbb30f76b.jpg" alt="SNEAKERS">
                </div>
                <h4>SNEAKERS</h4>
            </div>
            <div class="homeListItem">
                <div class="homeListImg">
                    <img src="https://i.pinimg.com/736x/9b/29/a8/9b29a8248a85e523f5136cdb9ce17cad.jpg"
                        alt="GIÀY ĐÁ BÓNG">
                </div>
                <h4>GIÀY ĐÁ BÓNG</h4>
            </div>
            <div class="homeListItem">
                <div class="homeListImg">
                    <img src="https://i.pinimg.com/564x/fd/30/9c/fd309c63499ca24dec16ade7de27bfd6.jpg"
                        alt="ÁO QUẦN THỂ THAO CHO NAM">
                </div>
                <h4>ÁO QUẦN THỂ THAO </h4>
            </div>
        </div>
        <div>
            <button onclick="window.location.href='/products?object=1'" class="homeMenBtn primary-button-hover">XEM CHI
                TIẾT</button>
        </div>
    </div>
    <div class="homeWomen">
        <div>
            <p>NỮ</p>
        </div>
        <div class="homeWomenList">
            <div class="homeListItem">
                <div class="homeListImg">
                    <img src="https://i.pinimg.com/564x/da/8a/cf/da8acff9d7ad524034fb16f3286b06bb.jpg" alt="SNEAKERS">
                </div>
                <h4>SNEAKERS</h4>
            </div>
            <div class="homeListItem">
                <div class="homeListImg">
                    <img src="https://i.pinimg.com/564x/5e/3a/c1/5e3ac1112fcb2709e1173e5a33a2174d.jpg"
                        alt="SPORT UNDERWEARS">
                </div>
                <h4>SPORT UNDERWEAR</h4>
            </div>
            <div class="homeListItem">
                <div class="homeListImg">
                    <img src="https://i.pinimg.com/564x/a5/4e/58/a54e583e2ef19a26168acc2dcc37be8c.jpg"
                        alt="ÁO QUẦN THỂ THAO CHO NỮ">
                </div>
                <h4>ÁO QUẦN THỂ THAO</h4>
            </div>
        </div>
        <div>
            <button onclick="window.location.href='/products?object=2'" class="homeWomenBtn primary-button-hover">XEM
                CHI TIẾT</button>
        </div>
    </div>
    <div class="homeKids">
        <div>
            <p>TRẺ EM</p>
        </div>
        <div class="homeKidsList">
            <div class="homeListItem">
                <div class="homeListImg">
                    <img src="https://i.pinimg.com/564x/a3/0c/10/a30c10d7582e307820320d7ab4f08401.jpg" alt="SNEAKERS">
                </div>
                <h4>SNEAKERS</h4>
            </div>
            <div class="homeListItem">
                <div class="homeListImg">
                    <img src="https://i.pinimg.com/564x/8a/f0/1b/8af01b800e2e7bf76178e3ca077d3b3b.jpg"
                        alt="PHỤ KIỆN THỂ THAO CHO BÉ">
                </div>
                <h4>PHỤ KIỆN</h4>
            </div>
            <div class="homeListItem">
                <div class="homeListImg">
                    <img src="https://i.pinimg.com/564x/e3/ed/86/e3ed86a2942789ed82274c884ad824b2.jpg"
                        alt="ÁO QUẦN THỂ THAO CHO TRỂ EM">
                </div>
                <h4>ÁO QUẦN THỂ THAO</h4>
            </div>
        </div>
        <div>
            <button onclick="window.location.href='/products?object=3'" class="homeKidsBtn primary-button-hover">XEM CHI
                TIẾT</button>
        </div>
    </div>

</div>
@endsection
@section('js')
<script src="{{ asset('assets/js/shared/marquee_shirt.js') }}"></script>
<script src="{{ asset('assets/js/shared/carousel_pro.js') }}"></script>
<script src="{{ asset('assets/js/shared/marquee.js') }}"></script>
@endsection