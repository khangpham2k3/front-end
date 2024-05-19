<div class="wrapper-category-page container">
    <div class="all_content-category py-4">
      <div class="page-title text-center">
        <h1 class="text-uppercase">{{keyword}}</h1>
      </div>
      <div class="product-list-category">
        <div class="list-item row">
          <div class="item-box col-lg-3 col-md-4 col-6 py-3" ng-repeat="item in productList | filter: {name: keyword} | limitTo:8:0">
            <div class="card p-4 border-0 shadow ">
              <div class="item-tag"></div>
              <div class="item-picture mb-4">
                <a href="#!detail/{{item.id}}">
                  <img style="aspect-ratio: 1/1;" src="public/images/product/{{item.image_full}}"
                    class="w-100 d-block object-fit-contain" alt="Iphone14">
                </a>
              </div>
              <div class="item-details card-body p-0">
                <h5 class="item-title mb-4">
                  <a class="list-group-item" href="#">{{item.name}}</a>
                </h5>
                <div class="item-info">
                  <strong class="actual-price text-primary me-2">{{item.price | number}} <i
                      class="fa-solid fa-dong-sign fa-xs"></i></strong>
                  <del class="old-price text-secondary me-2">{{item.discount | number}} <i
                      class="fa-solid fa-dong-sign fa-xs"></i></del>
                  <span class="sale-tag text-secondary">{{(item.price / item.discount) *100 -100 | number: 0}}%</span>
                </div>
              </div>
            </div>
          </div>
  
        </div>
      </div>
      <div class="topic-block mt-4">
        <div class="topic-block-body row justify-content-around">
          <div class="col-lg-5 d-flex bg-body justify-content-center align-items-center px-4">
            <img src="public/images/thums/Image-Standard.png" width="200px" alt="1">
            <div class="">
              <h4>Tìm IPhone phù hợp với bạn</h4>
              <a class="text-decoration-none" href="#">So sánh các iPhone</a>
            </div>
          </div>
          <div class="col-lg-5 d-flex bg-body justify-content-center align-items-center px-4">
            <img src="public/images/thums/Image-Standard-1.png" width="200px" alt="1">
            <div class="">
              <h4>Phụ kiện iPhone thường mua kèm</h4>
              <a class="text-decoration-none" href="#">So sánh các iPhone</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>