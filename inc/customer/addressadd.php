<!-- Main content -->
<div class="wrapper-home-page ">
    <div class="master-wrapper-content container">
        <div class="master-column-wrapper row pt-2">
            <div class="col-lg-4 ">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid p-0">
                        <button class="d-lg-none border-0 button-navbar-mobie ms-3 py-2 fs-5" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class=" side-2 collapse navbar-collapse " id="navbarNavDropdown">
                            <div class="list-group listbox">
                                <div class="slidebar_list-tem ">
                                    <a href="#"
                                        class="inactive list-group-item list-group-item-action border-0 fw-semibold"><i
                                            class="me-2 fa-solid fa-user "></i> Thông tin tài khoản</a>
                                </div>
                                <div class="slidebar_list-tem">
                                    <a href="#"
                                        class=" active list-group-item list-group-item-action border-0 fw-semibold"><i
                                            class="me-2 fa-solid fa-location-dot"></i> Địa chỉ nhận hàng</a>
                                </div>
                                <div class="slidebar_list-tem">
                                    <a href="#"
                                        class="inactive list-group-item list-group-item-action border-0 fw-semibold"><i
                                            class="me-2 fa-sharp fa-solid fa-ballot-check"></i> Đơn đặt hàng</a>
                                </div>
                                <div class="slidebar_list-tem">
                                    <a href="#"
                                        class=" inactive list-group-item list-group-item-action border-0 fw-semibold"><i
                                            class="me-2 fa-solid fa-gear"></i> Hệ thống</a>
                                </div>
                                <div class="slidebar_list-tem">
                                    <a href="#"
                                        class="inactive list-group-item list-group-item-action border-0 fw-semibold"><i
                                            class="me-2 fa-solid fa-gift"></i> Điểm thưởng</a>
                                </div>
                                <div class="slidebar_list-tem">
                                    <a href="#"
                                        class="inactive list-group-item list-group-item-action border-0 fw-semibold"><i
                                            class="me-2 fa-solid fa-lock"></i> Đổi mật khẩu</a>
                                </div>
                                <div class="slidebar_list-tem">
                                    <a href="#"
                                        class="inactive list-group-item list-group-item-action border-0 fw-semibold"><i
                                            class="me-2 fa-solid fa-image"></i> Ảnh đại diện</a>
                                </div>
                                <div class="slidebar_list-tem">
                                    <a href="#"
                                        class="inactive list-group-item list-group-item-action border-0 fw-semibold"><i
                                            class="me-2 fa-solid fa-clock-rotate-left"></i> Lịch sử đánh giá sản
                                        phẩm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="center-2 col-lg-8 mt-3">
                <div class="page account-page customer-info-page">
                    <div class="page-title d-block d-md-none text-center pb-2">
                        <h1 class="fs-4 ">Tài khoản của tôi - Thêm địa chỉ mới</h1>
                    </div>
                    <div class="page-body border px-4 pt-2">
                        <form method="post" action="#">
                            <div class="fieldset">
                                <div class="col mb-3">
                                    <label for="hoten">Tên:</label>
                                    <input type="text" class="form-control" id="hoten" name="fullname">
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="phone">Số điện thoại:</label>
                                        <input type="number" class="form-control form-control-lg" id="phone" name="phone_number">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="Address_CountryId">Quốc gia:</label>
                                        <select class="form-select">
                                            <option value="0">Chọn quốc gia</option>
                                            <option value="242">Vietnam</option>
                                            <option value="39">Cambodia</option>
                                            <option value="221">Thailand</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Address_StateProvinceId">Tỉnh, thành phố:</label>
                                        <select class="form-select">
                                            <option value="0">Chọn tỉnh, thành phố</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="Address_County">Quận, huyện:</label>
                                        <input type="text" id="Address_County" name="Address.County"
                                            class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Address_City">Phường, xã:</label>
                                        <input type="text" id="Address_City" name="Address.City" class="form-control">
                                    </div>
                                </div>
                                <div class="col mb-3">
                                    <label for="Address_Address1">Địa chỉ cụ thể:</label>
                                    <input type="text" id="Address_Address1" name="Address.Address1"
                                        class="form-control">
                                </div>
                                <hr>
                                <div class="buttons mb-3">
                                    <button type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End main content -->