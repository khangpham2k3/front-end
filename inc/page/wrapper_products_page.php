<div class="wrapper-category-page container">
  <div class="all_content-category py-4">
    <div class="page-title text-center">
      <h1 class="text-uppercase">{{id}}</h1>
    </div>
    <div class="category-slider">
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="2000">
            <img src="public/images/uploaded/banner/slider/m1pc.png" class="d-block w-100 object-fit-cover"
              height="400px" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="public/images/uploaded/banner/slider/PCkv.png" class="d-block w-100 object-fit-cover"
              height="400px" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="public/images/uploaded/banner/slider/2.jpg" class="d-block w-100 object-fit-cover" height="400px"
              alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="category-nav py-4 d-flex justify-content-between align-items-center">
      <nav class="navbar navbar-expand overflow-auto col-lg-8">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item me-4">
                <button class="nav-link fw-medium text-nowrap active text-primary text-decoration-underline"
                  ng-click="filterBy(id)">Tất cả</button>
              </li>
              <div ng-repeat="cate in categoryList">
                <li class="nav-item me-4" style="cursor: pointer;">
                  <a class="nav-link fw-medium text-nowrap" ng-click="filterBy(cate)">{{cate}}</a>
                </li>
              </div>
            </ul>
          </div>
        </div>
      </nav>
      <div class="col-lg-2 ms-5"><input type="text" class="form-control" placeholder="tìm kiếm" ng-model="keyword">
      </div>
      <div class=" col-lg-2 sosanh ms-4">
        <div class="dropdown">
          <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Xắp xếp theo
          </button>
          <ul class="dropdown-menu">
            <li><button class="btn" ng-click="sortBy('price')">Giá tăng dần</button></li>
            <li><button class="btn" ng-click="sortBy('-price')">Giá giảm dần</button></li>
            <li><button class="btn" ng-click="sortBy('name')">Sắp xếp theo tên</button></li>
          </ul>
        </div>
      </div>

    </div>
    <div class="product-list-category">
      <div class="list-item row">
        <div class="item-box col-lg-3 col-md-4 col-6 py-3"
          ng-repeat="item in categoryProduct | orderBy: params| filter: {model: props, name: keyword} | limitTo:limit:start">
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
                <span class="sale-tag text-secondary">{{((item.price/item.discount)*100)-100 | number:0 }}%</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="category-pagination d-flex justify-content-center mt-3">
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item me-2 {{(page==1)?'disabled':''}}">
            <a class="page-link rounded-3 text-dark fw-bold" ng-click="changePage(page-1)">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>

          <ul class="pagination" ng-repeat="page in totalPage()">
            <li class="page-item me-2"><a class="page-link rounded-3 text-dark fw-bold" style="cursor: pointer;"
                ng-click="changePage(page)">{{page}}</a></li>
          </ul>

          <li class="page-item me-2 {{(page==totalPage().length)?'disabled':''}}">
            <a class="page-link rounded-3 text-dark fw-bold" ng-click="changePage(page+1)">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
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