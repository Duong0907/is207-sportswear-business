@extends('layouts.admin')
@section('css')
k rel="stylesheet" href=" {{ asset('assets/css/admin/category/index.css') }} ">
@endsection
@section('content')
n class="category-management-content">
<div class="category-management-title">
    <Quản lí hạng mục</h1>
</div>

class="category-management-filter">
<d class="category-management-filter-option">
    <lel>Mã loại sản phẩm</label>
        <ut type="text" id="product_type_id" class="category-management-filter-text">
            </dv>
            <di class="category-management-filter-option">
                <lel>Tên loại sản phẩm</label>
                    <input type="text" id="product_type_name" class="category-management-filter-text">
                    v>
                    <di class="category-management-filter-option">
                        <lel>Trạng thái</label>
                            <ect class="category-management-filter-combobox">
                                <option value="-- Trạng thái --">-- Trạng thái --</option>
                                ion value="Chưa có sản phẩm">Chưa có sản phẩm</option>
                                <oion value="Đã có sản phẩm">Đã có sản phẩm</option>
                                    </lect>
                                    <v>
                                        </dv>

                                        <di>
                                            <tle class="category-management-table">
                                                <tr class="category-management-table-row">
                                                    <input type="checkbox"></th>
                                                    <th<label>Mã loại sản phẩm</label></th>
                                                        <t<label>Tên loại sản phẩm</label></th>
                                                            <<label>Số lượng SP</label></th>
                                                                <th><label>Ngày tạo</label></th>
                                                                <label>Ngày sửa đổi gần nhất</label></th>
                                                                <t<label>Hành động</label></th>
                                                                    </>

                                                                    <class="category-management-table-row">
                                                                        <th<input type="checkbox" class="category-row">
                                                                            </th>
                                                                            <th<label class="category-row">
                                                                                trungggggg</label></th>
                                                                                <t<label class="category-row">
                                                                                    trungggggg</label></th>
                                                                                    <th><label
                                                                                            class="category-row">trungggggg</label>
                                                                                    </th>
                                                                                    <label
                                                                                        class="category-row">trungggggg</label>
                                                                                    </th>
                                                                                    <th<label class="category-row">
                                                                                        trungggggg</label></th>
                                                                                        <t < src="{{ asset('assets/svg/detail.svg') }} "
                                                                                            alt="detail">
                                                                                            <img src="{{ asset('assets/svg/delete.svg') }} "
                                                                                                alt="detail">
                                                                                            >
                                                                                            </>
                                                                                            <tclass="category-management-table-row">
                                                                                                <<input type="checkbox"
                                                                                                    class="category-row">
                                                                                                    </th>
                                                                                                    <th<label
                                                                                                        class="category-row">
                                                                                                        trungggggg</label>
                                                                                                        </th>
                                                                                                        <t<label
                                                                                                            class="category-row">
                                                                                                            trungggggg</label>
                                                                                                            </th>
                                                                                                            <<label
                                                                                                                class="category-row">
                                                                                                                trungggggg</label>
                                                                                                                </th>
                                                                                                                <th<label
                                                                                                                    class="category-row">
                                                                                                                    trungggggg</label>
                                                                                                                    </th>
                                                                                                                    <th<label
                                                                                                                        class="category-row">
                                                                                                                        trungggggg</label>
                                                                                                                        </th>
                                                                                                                        <t <img
                                                                                                                            src="{{ asset('assets/svg/detail.svg') }} "
                                                                                                                            alt="detail">
                                                                                                                            src="{{
                                                                                                                            asset('assets/svg/delete.svg')
                                                                                                                            }}
                                                                                                                            "
                                                                                                                            alt="detail">
                                                                                                                        </t>
                                                                                                                        </>
                                                                                                                        <class="category-management-table-row">
                                                                                                                            <th><input
                                                                                                                                    type="checkbox"
                                                                                                                                    class="category-row">
                                                                                                                            </th>
                                                                                                                            <label
                                                                                                                                class="category-row">trungggggg</label>
                                                                                                                            </th>
                                                                                                                            <t<label
                                                                                                                                class="category-row">
                                                                                                                                trungggggg</label>
                                                                                                                                </th>
                                                                                                                                <t<label
                                                                                                                                    class="category-row">
                                                                                                                                    trungggggg</label>
                                                                                                                                    </th>
                                                                                                                                    <<label
                                                                                                                                        class="category-row">
                                                                                                                                        trungggggg</label>
                                                                                                                                        </th>
                                                                                                                                        <th<label
                                                                                                                                            class="category-row">
                                                                                                                                            trungggggg</label>
                                                                                                                                            </th>
                                                                                                                                            <th <i
                                                                                                                                                src="{{ asset('assets/svg/detail.svg') }} "
                                                                                                                                                alt="detail">
                                                                                                                                                <img src="{{ asset('assets/svg/delete.svg') }} "
                                                                                                                                                    alt="detail">
                                                                                                                                                >
                                                                                        </t>
                                                                                        <tclass="category-management-table-row">
                                                                                            <<input type="checkbox"
                                                                                                class="category-row">
                                                                                                </th>
                                                                                                <th><label
                                                                                                        class="category-row">trungggggg</label>
                                                                                                </th>
                                                                                                <label
                                                                                                    class="category-row">trungggggg</label>
                                                                                                </th>
                                                                                                <t<label
                                                                                                    class="category-row">
                                                                                                    trungggggg</label>
                                                                                                    </th>
                                                                                                    <t<label
                                                                                                        class="category-row">
                                                                                                        trungggggg</label>
                                                                                                        </th>
                                                                                                        <<label
                                                                                                            class="category-row">
                                                                                                            trungggggg</label>
                                                                                                            </th>
                                                                                                            <th <im
                                                                                                                src="{{ asset('assets/svg/detail.svg') }} "
                                                                                                                alt="detail">
                                                                                                                <i src="{{ asset('assets/svg/delete.svg') }} "
                                                                                                                    alt="detail">
                                                                                                            </th>
                                                                                                            >
                                                                                                            <trclass="category-management-table-row">
                                                                                                                <t<input
                                                                                                                    type="checkbox"
                                                                                                                    class="category-row">
                                                                                                                    </th>
                                                                                                                    <<label
                                                                                                                        class="category-row">
                                                                                                                        trungggggg</label>
                                                                                                                        </th>
                                                                                                                        <th><label
                                                                                                                                class="category-row">trungggggg</label>
                                                                                                                        </th>
                                                                                                                        <label
                                                                                                                            class="category-row">trungggggg</label>
                                                                                                                        </th>
                                                                                                                        <t<label
                                                                                                                            class="category-row">
                                                                                                                            trungggggg</label>
                                                                                                                            </th>
                                                                                                                            <t<label
                                                                                                                                class="category-row">
                                                                                                                                trungggggg</label>
                                                                                                                                </th>
                                                                                                                                < <im
                                                                                                                                    src="{{ asset('assets/svg/detail.svg') }} "
                                                                                                                                    alt="detail">
                                                                                                                                    <im src="{{ asset('assets/svg/delete.svg') }} "
                                                                                                                                        alt="detail">
                                                                                                                                </>
                                                </tr>
                                                ble>

                                                <di class="category-management-add-category">
                                                    <bton>Thêm loại sản phẩm</button>
                                                        <v>
                                                            v>
                                                            in>
                                                            @endsection
                                                            @section('js')
                                                            ipt>
                                                            document.getElementById('category').style.color = '#013CC6';
                                                            ript>
                                                            @endsection