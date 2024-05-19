
 
    <!-- Main content -->
    <div class="master-wrapper-content container">
        <div class="master-column-wrapper row pt-2">
            <div class="col-lg-4 ">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid p-0">
                        <button class="d-lg-none border-0 button-navbar-mobie ms-3 py-2 fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        <div class=" side-2 collapse navbar-collapse " id="navbarNavDropdown">
                            <div class="list-group listbox">
                                <div class="slidebar_list-tem ">
                                    <a href="#" class="inactive list-group-item list-group-item-action border-0 fw-semibold"><i
                                                class="me-2 fa-solid fa-user "></i> Thông tin tài khoản</a>
                                </div>
                                <div class="slidebar_list-tem">
                                    <a href="#" class=" inactive list-group-item list-group-item-action border-0 fw-semibold"><i
                                                class="me-2 fa-solid fa-location-dot"></i> Địa chỉ nhận hàng</a>
                                </div>
                                <div class="slidebar_list-tem">
                                    <a href="#" class="inactive list-group-item list-group-item-action border-0 fw-semibold"><i
                                                class="me-2 fa-sharp fa-solid fa-ballot-check"></i> Đơn đặt hàng</a>
                                </div>
                                <div class="slidebar_list-tem">
                                    <a href="#" class=" active list-group-item list-group-item-action border-0 fw-semibold"><i
                                                class="me-2 fa-solid fa-gear"></i> Hệ thống</a>
                                </div>
                                <div class="slidebar_list-tem">
                                    <a href="#" class="inactive list-group-item list-group-item-action border-0 fw-semibold"><i
                                                class="me-2 fa-solid fa-gift"></i> Điểm thưởng</a>
                                </div>
                                <div class="slidebar_list-tem">
                                    <a href="#" class="inactive list-group-item list-group-item-action border-0 fw-semibold"><i
                                                class="me-2 fa-solid fa-lock"></i> Đổi mật khẩu</a>
                                </div>
                                <div class="slidebar_list-tem">
                                    <a href="#" class="inactive list-group-item list-group-item-action border-0 fw-semibold"><i
                                                class="me-2 fa-solid fa-image"></i> Ảnh đại diện</a>
                                </div>
                                <div class="slidebar_list-tem">
                                    <a href="#" class="inactive list-group-item list-group-item-action border-0 fw-semibold"><i
                                                class="me-2 fa-solid fa-clock-rotate-left"></i> Lịch sử đánh giá sản phẩm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="center-2 col-lg-8 ">
                <div class="page account-page cl-your-referral-info mt-3">
                    <div class="page-body border px-3 pt-2">
                        <div class="copy-link">
                            <h3>Mã giới thiệu của bạn:</h3>
                            <p class="no-data">Mã giới thiệu của bạn có thể là Email, Số điện thoại hoặc User name. Bạn có thể xem danh sách người đã giới thiệu theo các cấp bên dưới đây.</p>
                            <div class="referral-info col-md-6">
                                <div class="input-group mb-3 d-flex">
                                    <input type="text" class="form-control no-data copy-link-input " value="phamduykhang11a2@gmail.com" readonly >
                                    <button type="button" class="input-group-text copy-link-button" onclick="copyToClipboard(this)"><i class="fa-solid fa-copy"></i></button>
                                </div>
                            </div>
                            <div class="referral-info col-md-6">
                                <div class="input-group mb-3  d-flex">
                                    <input type="text" class="form-control no-data copy-link-input" value="0905263041" readonly>
                                    <button type="button" class="input-group-text copy-link-button" onclick="copyToClipboard(this)"><i class="fa-solid fa-copy"></i></button>
                                </div>
                            </div>
                            <div class="referral-info col-md-6">
                                <div class="input-group mb-3  d-flex">
                                    <input type="text" class="form-control no-data copy-link-input" value="khangpham" readonly>
                                    <button type="button" class="input-group-text copy-link-button" onclick="copyToClipboard(this)"><i class="fa-solid fa-copy"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function copyToClipboard(button) {
                    const inputField = button.previousElementSibling;
                    const text = inputField.value;
                    navigator.clipboard.writeText(text);
                    // 
                    button.textContent = 'Copied';
                    button.classList.add('copied');

                }
            </script>
        </div>
    </div>
    <!-- End main content -->

