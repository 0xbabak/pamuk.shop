<?php include("header.php") ?>

<!-- strat body code-->
<div class="container mt-5">
    <!-- row 1-->
    <div class="row mt-5 border-gradient-white-bottom border-1 pb-5">
        <div class="row col-8">
            <div class="col-2 px-2">
                <p class="h5 text-center">محصول</p>
            </div>
            <div class="col-2 border-1 border-start px-2">
                <p class="h5 text-center">نام محصول</p>
            </div>
            <div class="col-2 border-1 border-start px-2">
                <p class="h5 text-center">تعداد</p>
            </div>
            <div class="col-2 border-1 border-start px-2">
                <p class="h5 text-center">جمع کل</p>
            </div>
        </div>
    </div>

    <!-- row 2 / products list-->
    <div class="row pt-5">

        <!-- products list -->
        <div class=" row col-8">
            <!-- product 1 -->
            <div class="row align-items-center my-5">
                <div class="col-2 px-4">
                    <img class="img-fluid" src="images/article-item-4810-000437-00-imagebig-picture-data 1.png" alt="">
                </div>
                <div class="col-1 border-1 border-start px-4">
                    <p class="h5 text-center">4</p>
                </div>
                <div class="col-3 border-1 border-start px-4">
                    <p class="h5 text-center">۸۶۰.۰۰۰ تومان</p>
                </div>
                <div class="col-2 border-1 border-start px-4">
                    <a href="#"><img class="img-fluid" src="images/vuesax-linear-vuesax-linear-trash.png" alt=""></a>
                </div>
            </div>

            <!-- product 2 -->
            <div class="row align-items-center my-5">
                <div class="col-2 px-4">
                    <img class="img-fluid" src="images/article-item-4810-000437-00-imagebig-picture-data 1.png" alt="">
                </div>
                <div class="col-1 border-1 border-start px-4">
                    <p class="h5 text-center">4</p>
                </div>
                <div class="col-3 border-1 border-start px-4">
                    <p class="h5 text-center">۸۶۰.۰۰۰ تومان</p>
                </div>
                <div class="col-2 border-1 border-start px-4">
                    <a href="#"><img class="img-fluid" src="images/vuesax-linear-vuesax-linear-trash.png" alt=""></a>
                </div>
            </div>

            <!-- product 3 -->
            <div class="row align-items-center my-5">
                <div class="col-2 px-4">
                    <img class="img-fluid" src="images/article-item-4810-000437-00-imagebig-picture-data 1.png" alt="">
                </div>
                <div class="col-1 border-1 border-start px-4">
                    <p class="h5 text-center">4</p>
                </div>
                <div class="col-3 border-1 border-start px-4">
                    <p class="h5 text-center">۸۶۰.۰۰۰ تومان</p>
                </div>
                <div class="col-2 border-1 border-start px-4">
                    <a href="#"><img class="img-fluid" src="images/vuesax-linear-vuesax-linear-trash.png" alt=""></a>
                </div>
            </div>
        </div>

        <div class="col-4">
            <form method="get" action="#">

                <!-- jam kol -->
                <h4 class="h4 fw-bold">مجموع کل</h4>
                <div class="row mt-5">
                    <div class="col-6">
                        <p>جمع جز</p>
                    </div>
                    <div class="col-6">
                        <p>۸۶۰.۰۰۰ تومان</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-6">
                        <p>جمع کل</p>
                    </div>
                    <div class="col-6">
                        <p>۸۶۰.۰۰۰ تومان</p>
                    </div>
                </div>
                <!-- jam kol -->
                <button type="button" name="" id="" class="btn orange-btn-F98317 w-100 py-3 mt-5 border-10">تسویه حساب</button>

                <div class="input-group my-3 border border-1 border-10 border-838383 p-2">
                    <input type="text" class="form-control border-0" placeholder="کد تخفیف..." aria-label="" aria-describedby="basic-addon1">
                    <div class="input-group-prepend">
                        <button class="btn btn-orange" type="button">اعمال</button>
                    </div>
                </div>

            </form>
        </div>
    </div>


</div>
<?php include("footer.php") ?>
</body>

</html>