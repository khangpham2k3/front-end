<!-- <div class="wrapper-cart-page container">
    <div class="cart-body">
        <div class="all_content-cart py-4">
            <div class="cart-block row">
                <div class="col-lg-8 ">
                    <table class="table table">
                        <thead>
                            <tr>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Giá bán</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="p-4" ng-repeat="item in cart">
                                <th>
                                    <div class="img">
                                        <img src="public/images/product/{{item.image_full}}"
                                            class="d-block p-3" width="100px" alt="">
                                    </div>
                                </th>
                                <td>
                                    <div class="">
                                        <h5 class="m-0">{{item.name}}</h5> -->
                                        <!-- <p class="text-secondary m-0">Màu sắc: Titan Xanh</p> -->
                                        <!-- <a class="text-decoration-none m-0" href="#">Sửa</a>
                                    </div>
                                </td>
                                <td>
                                    <strong>{{item.price | number}}<i class="fa-solid fa-dong-sign"></i></strong>
                                </td>
                                <td>
                                    <div class="">
                                        <span>{{item.quantity}}</span>
                                    </div>
                                </td>
                                <td><button class="btn" ng-click="delete($index)"><i class="fa-solid fa-trash"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="col-lg-4 bg-body p-4 rounded-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Mã giảm giá">
                        <button class="btn bg-secondary ">Áp dụng</button>
                    </div>
                    <div class="d-flex justify-content-between pt-4">
                        <p class="text-secondary">Tổng phụ</p>
                        <strong>{{totalMoney() | number}}<i class="fa-solid fa-dong-sign"></i></strong>
                    </div>
                    <div class="d-flex justify-content-between pb-3 border-bottom">
                        <strong>Tổng thu</strong>
                        <strong class="text-primary">{{totalMoney() | number}}<i class="fa-solid fa-dong-sign"></i></strong>
                    </div>
                    <div class="form-check">
                        <input type="checkbox"> <span>Tôi đã đọc và đồng ý với điều khoảng.</span>
                    </div>
                    <a href="#!login" class="btn btn-outline-primary w-100 py-2 mt-3">Tiền hành đặt hàng</a>
                </div>
            </div>
        </div>
    </div>
</div> -->







    <!-- Main content -->
    <div class="wrapper-cart-page">
        <div  class="cart-header shadow-sm mb-5 bg-body rounded">
            <div class="container button-cart d-flex justify-content-between align-content-center">
                <div class="row">
                    <p class="pt-3 text-secondary">Trang chủ <i class="fa-solid fa-angle-right fa-xs"></i> Cart</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="cart-body">
                <div class="all_content-cart">
                    <div class="cart-block ">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="sp_in_cart shadow">
                                    <table class="table table-responsive">
                                        <thead>
                                            <tr>
                                                <th scope="col">Hình ảnh</th>
                                                <th scope="col">Tên sản phẩm</th>
                                                <th scope="col">Giá bán</th>
                                                <th scope="col">Số lượng</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="p-0" data-id={{$id}}>
                                                <td class="p-0">
                                                    <div class="img">
                                                        <img src="public/images/product/ipad_01.png" class="d-block p-3"
                                                            width="100px" alt="image_cart">
                                                    </div>
                                                </td>
                                                <td style="width:350px;">
                                                    <h5 class="m-0 item_name">Iphone 15 ProMax</h5>
                                                    <p class="pt-1 text-black-50">
                                                        Màu sắc: Titan Xanh<br/>
                                                        Khu vực: Khu vực miền Bắc <br/>
                                                        Hình thức: Mua thẳng <br/>
                                                    </p>
                                                    <a href="#" class="nav-link text-primary pb-1">Sửa</a>
                                                </td>
                                                <td>
                                                    <p class="text-body pt-2">12.999.000<i class="fa-solid fa-dong-sign"></i></p>
                                                </td>
                                                <td>
                                                    <div class="col-auto pe-0 mt-2">
                                                        <div class="input-group input-group-sm"
                                                            data-quantity="data-quantity">
                                                            <input class="form-control text-center input-quantity input-spin-none" id="" type="number" min="0" value="1" style="max-width: 50px">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a class="btn btn-delete pt-2" role="button"><i
                                                            class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr class="p-0" data-id={{$id}}>
                                                <td class="p-0">
                                                    <div class="img">
                                                        <img src="public/images/product/ipad_02.png" class="d-block p-3"
                                                            width="100px" alt="image_cart">
                                                    </div>
                                                </td>
                                                <td style="width:350px;">
                                                    <h5 class="m-0 item_name">Iphone 15 ProMax</h5>
                                                    <p class="pt-1 text-black-50">
                                                        Màu sắc: Titan Xanh<br/>
                                                        Khu vực: Khu vực miền Bắc <br/>
                                                        Hình thức: Mua thẳng <br/>
                                                    </p>
                                                    <a href="#" class="nav-link text-primary pb-1">Sửa</a>
                                                </td>
                                                <td>
                                                    <p class="text-body pt-2">12.999.000<i class="fa-solid fa-dong-sign"></i></p>
                                                </td>
                                                <td>
                                                    <div class="col-auto pe-0 mt-2">
                                                        <div class="input-group input-group-sm"
                                                            data-quantity="data-quantity">
                                                            <input class="form-control text-center input-quantity input-spin-none" id="" type="number" min="0" value="1" style="max-width: 50px">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a class="btn btn-delete pt-2" role="button"><i
                                                            class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <th colspan="5">
                                                <button class="btn btn-outline-primary float-end me-2 mb-2 mt-2">Tiếp tục mua sắm</button>
                                                <button class="btn btn-outline-primary float-end me-5 mb-2 mt-2">Cập nhật giỏ hàng</button>
                                            </th>
                                        </tbody>


                                        <!-- Cart empty -->
                                        <!-- <div class="cart_empty text-center">
                                            <img src="https://newnet.vn/themes/newnet/assets/img/empty-cart.png"
                                                width="60%" alt="cart_empty"> <br>
                                        </div> -->
                                        <!-- end cart empty -->

                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-4 bg-body p-4 rounded-3 shadow">
                                <div class="input-group form_info-text">
                                    <input type="text" id="getCouponCode" class="form-control"
                                        placeholder="Mã giảm giá">
                                    <button type="button" id="ApplyCoupon" class="btn btn-secondary btn-lg" disabled>Áp dụng</button>
                                </div>
                                <span id="getCouponName"></span>
                                <div class="d-flex justify-content-between pt-4 form_info-text">
                                    <p class="text-secondary">Tổng sản phẩm (1)</p>
                                    <strong>12.999.000<i class="fa-solid fa-dong-sign"></i></strong>
                                </div>
                                <div class="d-flex justify-content-between form_info-text">
                                    <p class="text-secondary">Vận chuyển</p>
                                    <strong>Free Shiping</strong>
                                </div>
                                <div class="d-flex justify-content-between form_info-text">
                                    <p class="text-secondary">Giảm giá <i id="percent_amount"></i></p>
                                    <strong>
                                        <span id="getCouponAmount">0</span>
                                        <i class="fa-solid fa-dong-sign"></i>
                                    </strong>
                                </div>
                                <div class="d-flex justify-content-between py-3 border-bottom">
                                    <strong>Tổng thu</strong>
                                    <strong class="text-primary">
                                        <span id="getPayableTotal">12.999.000</span>
                                        <i class="fa-solid fa-dong-sign"></i></strong>
                                </div>
                                <div class="d-flex justify-content-between py-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Tôi đã đọc và đồng ý với <span class="text-primary">điều khoản và điều kiện</span> của website
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between py-1">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary" type="button">Tiến hành đặt hàng</button>
                                        <p class="text-danger pt-2">(*) Phí phụ thu sẽ được tính khi bạn tiến hành thanh toán.</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-8 pb-5">
                                <form action="#" method="post">
                                    <div class="container_form_order mt-2">
                                        <div class="row">
                                            <h3 class="fw-bold col-md-12">Thông tin thanh toán</h3>
                                            <div class="col-md-12 shadow-sm bg-body rounded">
                                                    <p class="float-start pe-2 pt-2">Đăng nhập ngay để nhận được "điểm thưởng" hấp dẫn khi mua hàng thành công các <br/> sản phẩm tại Shop</p>
                                                    <button class="float-end btn btn-primary mt-3">Đăng nhập ngay</button>
                                            </div>
                                        </div>
                                        <div class="form_order shadow-sm p-3 mb-5 mt-3 bg-body rounded">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" placeholder="Họ tên"
                                                    id="floatingInput" name="name">
                                                <label for="floatingInput">Họ tên *</label>
                                            </div>
                                            <div class="row">
                                                <div class="form-floating mb-3 col-6">
                                                    <input type="text" class="form-control" placeholder="Số điện thoại"
                                                        id="floatingInput" name="phone_number">
                                                    <label class="ms-2" for="floatingInput">Số điện thoại</label>
                                                </div>
                                                <div class="form-floating mb-3 col-6">
                                                    <input type="email" class="form-control" placeholder="Email"
                                                        id="floatingInput" name="email">
                                                    <label class="ms-2" for="floatingInput">Email *</label>
                                                </div>
                                                <div class="mb-3 col-12">
                                                    <label class="ms-2 fw-bold" for="floatingInput">Hình thức nhận hàng</label>
                                                    <div class="ms-2">
                                                        <div class="form-check form-check-inline float-start mt-2">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                                                            <label class="form-check-label" for="inlineRadio1">Nhận tại cửa hàng</label>
                                                        </div>
                                                        <div class="form-check form-check-inline float-start mt-2">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                            <label class="form-check-label" for="inlineRadio2">Giao tận nơi</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-floating mb-3">
                                                    <select class="form-select" id="provinces" name="provinces">
                                                    </select>
                                                    <label class="ms-2" for="floatingInput">Tỉnh thành phố</label>
                                                </div>
                                                <div class="form-floating mb-3 col-6">
                                                    <select class="form-select" id="districts" name="districts">
                                                    </select>
                                                    <label class="ms-2" for="floatingInput">Quận Huyện</label>
                                                </div>
                                                <div class="form-floating mb-3 col-6">
                                                    <select class="form-select" id="wards" name="wards">
                                                    </select>
                                                    <label class="ms-2" for="floatingInput">Phường xã</label>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" placeholder="Địa chỉ"
                                                    id="floatingInput" name="address">
                                                <label for="floatingInput">Địa chỉ cụ thể</label>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-floating">
                                                    <textarea class="form-control" placeholder="Ghi chú cho đơn hàng"
                                                        id="floatingTextarea" name="note"></textarea>
                                                    <label for="floatingTextarea">Ghi chú đơn hàng</label>
                                                </div>
                                            </div>
                                            <div class="form-check form_info-text">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Xuất hóa đơn công ty
                                                </label>
                                            </div>
                                        </div>
                                </form>
                            </div>
                            <div class="col-lg-12 pb-5 shadow-sm mb-5 bg-body rounded">
                                <h5 class="pe-2 ps-3">Thông tin thanh toán</h5>
                                <p class="text-secondary pe-2 ps-3">Quý khách vui lòng lựa chọn các hình thức thanh toán dưới đây:</p>
                                <div class="row">
                                    <div class="col-md-5 border border-1 rounded-3" style="margin-left: 40px; margin-right: 20px;">
                                        <p class="ps-3 pt-2">
                                            <input class="form-check-input mt-3" type="radio" name="flexRadioDefault" id="flexRadioDefault1"> 
                                            <img class="ms-2 me-2 mt-2" src="https://shopdunk.com/Plugins/Payments.VietQr/logo.jpg" alt="Thanh toán ZaloPay" width="36" height="36">
                                            <span class="pt-2">Thanh toán COD</span>
                                        </p>
                                    </div>
                                    <div class="col-md-5 border border-1 rounded-3" style="margin-left: 40px; margin-right: 20px;">
                                        <p class="ps-3 pt-2">
                                            <input class="form-check-input mt-3" type="radio" name="flexRadioDefault" id="flexRadioDefault1"> 
                                            <img class="ms-2 me-2 mt-2" src="https://shopdunk.com/Plugins/Payments.ZaloPay/logo.jpg" alt="Thanh toán ZaloPay" width="36" height="36">
                                            <span class="pt-2">Thanh toán VNPay</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End main content -->
