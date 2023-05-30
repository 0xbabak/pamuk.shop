<?php include("header.php") ?>

<!-- strat body code-->
<div class="container mt-5">
    <div class="row border-gradient-white-bottom border-1 pb-5">

        <!-- brands filter -->
        <div class="col-3 border-gradient-white-left border-1">
            <p class="h5 fw-bold">نوع برند خود را مشخص کنید</p>
            <div class="form-check mt-3 ">
                <input class="form-check-input input-orange p-3" type="checkbox" value="" id="flexCheckDefault" checked>
                <label class="form-check-label ms-2 pt-1" for="flexCheckDefault">
                    سامسونگ
                </label>
            </div>
            <div class="form-check mt-3">
                <input class="form-check-input input-orange p-3" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label ms-2 pt-1" for="flexCheckChecked">
                    اپل
                </label>
            </div>
            <div class="form-check mt-3">
                <input class="form-check-input input-orange p-3" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label ms-2 pt-1" for="flexCheckChecked">
                    هواوی
                </label>
            </div>
            <div class="form-check mt-3">
                <input class="form-check-input input-orange p-3" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label ms-2 pt-1" for="flexCheckChecked">
                    شیائومی
                </label>
            </div>
        </div>
        <!-- brands filter -->

        <!-- sort filter -->
        <div class="col-3 border-gradient-white-left border-1 ps-5">
            <p class="h5 fw-bold">مرتب سازی</p>
            <div class="form-check mt-3 ">
                <input class="form-check-input input-orange p-3" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label ms-2 pt-1" for="flexCheckDefault">
                    پربازدید ترین
                </label>
            </div>
            <div class="form-check mt-3">
                <input class="form-check-input input-orange p-3" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label ms-2 pt-1" for="flexCheckChecked">
                    پرفروش ترین ها
                </label>
            </div>
            <div class="form-check mt-3">
                <input class="form-check-input input-orange p-3" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label ms-2 pt-1" for="flexCheckChecked">
                    جدید ترین ها
                </label>
            </div>
            <div class="form-check mt-3">
                <input class="form-check-input input-orange p-3" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label ms-2 pt-1" for="flexCheckChecked">
                    قدیمی ترین ها
                </label>
            </div>
        </div>
        <!-- sort filter -->

        <!-- Product availability -->
        <div class="col-3 border-gradient-white-left border-1 ps-5">
            <p class="h5 fw-bold">موجودیت کالا</p>
            <div class="form-check mt-3 ">
                <input class="form-check-input input-orange p-3" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label ms-2 pt-1" for="flexCheckDefault">
                    موجود
                </label>
            </div>
            <div class="form-check mt-3">
                <input class="form-check-input input-orange p-3" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label ms-2 pt-1" for="flexCheckChecked">
                    قابل سفارش
                </label>
            </div>
            <div class="form-check mt-3">
                <input class="form-check-input input-orange p-3" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label ms-2 pt-1" for="flexCheckChecked">
                    ناموجود
                </label>
            </div>
            <div class="form-check mt-3">
                <input class="form-check-input input-orange p-3" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label ms-2 pt-1" for="flexCheckChecked">
                    همه
                </label>
            </div>
        </div>
        <!-- Product availability -->

        <!-- Price range -->
        <div class="col-3">
            <p class="h5 fw-bold">محدوه قیمت</p>
            <div class="form-check mt-3">
                <label for="pricenumber pb-3">از</label>
                <input class="input-group border-1 border-dark border-radius-6 border-838383 border-0-2 p-2 text-start" type="number" id="pricenumber" placeholder="قیمت را وارد کنید(تومان)">
            </div>
            <div class="form-check mt-3">
                <label for="pricenumber pb-3">تا</label>
                <input class="input-group border-1 border-dark border-radius-6 border-838383 border-0-2 p-2 text-start" type="number" id="pricenumber" placeholder="قیمت را وارد کنید(تومان)">
            </div>
        </div>
        <!-- Price range -->
    </div>

    <!-- row 1 product -->
    <div class="row mt-4">
        <div class="col-3">
            <div class="card border-0 shadow-box-product">
                <img class="card-img-top w-50 center-img mt-4" src="images/article-item-4810-000437-00-imagebig-picture-data 1.png" alt="">
                <div class="card-body">
                    <h5 class="card-title mt-5">دسته سونی</h5>
                    <p class="card-text d-inline pe-3">۸۶۰.۰۰۰ تومان</p>
                    <a href="#" class="btn btn-orange d-inline px-3 py-1 float-end">خرید</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card border-0 shadow-box-product">
                <img class="card-img-top w-50 center-img mt-4" src="images/article-item-4810-000437-00-imagebig-picture-data 1.png" alt="">
                <div class="card-body">
                    <h5 class="card-title mt-5">دسته سونی</h5>
                    <p class="card-text d-inline pe-3">۸۶۰.۰۰۰ تومان</p>
                    <a href="#" class="btn btn-orange d-inline px-3 py-1 float-end">خرید</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card border-0 shadow-box-product">
                <img class="card-img-top w-50 center-img mt-4" src="images/article-item-4810-000437-00-imagebig-picture-data 1.png" alt="">
                <div class="card-body">
                    <h5 class="card-title mt-5">دسته سونی</h5>
                    <p class="card-text d-inline pe-3">۸۶۰.۰۰۰ تومان</p>
                    <a href="#" class="btn btn-orange d-inline px-3 py-1 float-end">خرید</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card border-0 shadow-box-product">
                <img class="card-img-top w-50 center-img mt-4" src="images/article-item-4810-000437-00-imagebig-picture-data 1.png" alt="">
                <div class="card-body">
                    <h5 class="card-title mt-5">دسته سونی</h5>
                    <p class="card-text d-inline pe-3">۸۶۰.۰۰۰ تومان</p>
                    <a href="#" class="btn btn-orange d-inline px-3 py-1 float-end">خرید</a>
                </div>
            </div>
        </div>
    </div>

    <!-- row 2 product -->
    <div class="row mt-4">
        <div class="col-3">
            <div class="card border-0 shadow-box-product">
                <img class="card-img-top w-50 center-img mt-4" src="images/article-item-4810-000437-00-imagebig-picture-data 1.png" alt="">
                <div class="card-body">
                    <h5 class="card-title mt-5">دسته سونی</h5>
                    <p class="card-text d-inline pe-3">۸۶۰.۰۰۰ تومان</p>
                    <a href="#" class="btn btn-orange d-inline px-3 py-1 float-end">خرید</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card border-0 shadow-box-product">
                <img class="card-img-top w-50 center-img mt-4" src="images/article-item-4810-000437-00-imagebig-picture-data 1.png" alt="">
                <div class="card-body">
                    <h5 class="card-title mt-5">دسته سونی</h5>
                    <p class="card-text d-inline pe-3">۸۶۰.۰۰۰ تومان</p>
                    <a href="#" class="btn btn-orange d-inline px-3 py-1 float-end">خرید</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card border-0 shadow-box-product">
                <img class="card-img-top w-50 center-img mt-4" src="images/article-item-4810-000437-00-imagebig-picture-data 1.png" alt="">
                <div class="card-body">
                    <h5 class="card-title mt-5">دسته سونی</h5>
                    <p class="card-text d-inline pe-3">۸۶۰.۰۰۰ تومان</p>
                    <a href="#" class="btn btn-orange d-inline px-3 py-1 float-end">خرید</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card border-0 shadow-box-product">
                <img class="card-img-top w-50 center-img mt-4" src="images/article-item-4810-000437-00-imagebig-picture-data 1.png" alt="">
                <div class="card-body">
                    <h5 class="card-title mt-5">دسته سونی</h5>
                    <p class="card-text d-inline pe-3">۸۶۰.۰۰۰ تومان</p>
                    <a href="#" class="btn btn-orange d-inline px-3 py-1 float-end">خرید</a>
                </div>
            </div>
        </div>
    </div>

    <!-- banner-->
    <div class="row mt-5">
        <div class="col-6">
            <a href="#"><img class="img-fluid" src="images/Frame-18.png" alt=""></a>
        </div>
        <div class="col-6">
            <a href="#"><img class="img-fluid" src="images/Frame-19.png" alt=""></a>
        </div>
    </div>
    <!-- row 3 product -->
    <div class="row mt-5">
        <div class="col-3">
            <div class="card border-0 shadow-box-product">
                <img class="card-img-top w-50 center-img mt-4" src="images/article-item-4810-000437-00-imagebig-picture-data 1.png" alt="">
                <div class="card-body">
                    <h5 class="card-title mt-5">دسته سونی</h5>
                    <p class="card-text d-inline pe-3">۸۶۰.۰۰۰ تومان</p>
                    <a href="#" class="btn btn-orange d-inline px-3 py-1 float-end">خرید</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card border-0 shadow-box-product">
                <img class="card-img-top w-50 center-img mt-4" src="images/article-item-4810-000437-00-imagebig-picture-data 1.png" alt="">
                <div class="card-body">
                    <h5 class="card-title mt-5">دسته سونی</h5>
                    <p class="card-text d-inline pe-3">۸۶۰.۰۰۰ تومان</p>
                    <a href="#" class="btn btn-orange d-inline px-3 py-1 float-end">خرید</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card border-0 shadow-box-product">
                <img class="card-img-top w-50 center-img mt-4" src="images/article-item-4810-000437-00-imagebig-picture-data 1.png" alt="">
                <div class="card-body">
                    <h5 class="card-title mt-5">دسته سونی</h5>
                    <p class="card-text d-inline pe-3">۸۶۰.۰۰۰ تومان</p>
                    <a href="#" class="btn btn-orange d-inline px-3 py-1 float-end">خرید</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card border-0 shadow-box-product">
                <img class="card-img-top w-50 center-img mt-4" src="images/article-item-4810-000437-00-imagebig-picture-data 1.png" alt="">
                <div class="card-body">
                    <h5 class="card-title mt-5">دسته سونی</h5>
                    <p class="card-text d-inline pe-3">۸۶۰.۰۰۰ تومان</p>
                    <a href="#" class="btn btn-orange d-inline px-3 py-1 float-end">خرید</a>
                </div>
            </div>
        </div>
    </div>

    <!-- row 4 product -->
    <div class="row mt-4">
        <div class="col-3">
            <div class="card border-0 shadow-box-product">
                <img class="card-img-top w-50 center-img mt-4" src="images/article-item-4810-000437-00-imagebig-picture-data 1.png" alt="">
                <div class="card-body">
                    <h5 class="card-title mt-5">دسته سونی</h5>
                    <p class="card-text d-inline pe-3">۸۶۰.۰۰۰ تومان</p>
                    <a href="#" class="btn btn-orange d-inline px-3 py-1 float-end">خرید</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card border-0 shadow-box-product">
                <img class="card-img-top w-50 center-img mt-4" src="images/article-item-4810-000437-00-imagebig-picture-data 1.png" alt="">
                <div class="card-body">
                    <h5 class="card-title mt-5">دسته سونی</h5>
                    <p class="card-text d-inline pe-3">۸۶۰.۰۰۰ تومان</p>
                    <a href="#" class="btn btn-orange d-inline px-3 py-1 float-end">خرید</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card border-0 shadow-box-product">
                <img class="card-img-top w-50 center-img mt-4" src="images/article-item-4810-000437-00-imagebig-picture-data 1.png" alt="">
                <div class="card-body">
                    <h5 class="card-title mt-5">دسته سونی</h5>
                    <p class="card-text d-inline pe-3">۸۶۰.۰۰۰ تومان</p>
                    <a href="#" class="btn btn-orange d-inline px-3 py-1 float-end">خرید</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card border-0 shadow-box-product">
                <img class="card-img-top w-50 center-img mt-4" src="images/article-item-4810-000437-00-imagebig-picture-data 1.png" alt="">
                <div class="card-body">
                    <h5 class="card-title mt-5">دسته سونی</h5>
                    <p class="card-text d-inline pe-3">۸۶۰.۰۰۰ تومان</p>
                    <a href="#" class="btn btn-orange d-inline px-3 py-1 float-end">خرید</a>
                </div>
            </div>
        </div>
    </div>

    <!--Page navigation-->
    <div class="row my-5">
        <div class="col-12">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center text-dark">
                    <li class="page-item px-3"><a class="page-link navigation-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#1E1E1E" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg></a></li>
                    <li class="page-item px-3"><a class="page-link navigation-link" href="#">1</a></li>
                    <li class="page-item px-3"><a class="page-link navigation-link" href="#">2</a></li>
                    <li class="page-item px-3"><a class="page-link navigation-link" href="#">3</a></li>
                    <li class="page-item px-3"><a class="page-link navigation-link" href="#">4</a></li>
                    <li class="page-item px-3"><a class="page-link navigation-link" href="#">5</a></li>
                    <li class="page-item px-3"><a class="page-link navigation-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#1E1E1E" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                            </svg></a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>






<!-- end body code-->
<?php include("footer.php") ?>
</body>

</html>