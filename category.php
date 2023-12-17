<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قالب دیجی استایل</title>

    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="./css/jquery.custom-scrollbar.css">
    <link rel="stylesheet" href="./css/style.css">

    <link rel="stylesheet" href="./fonticon/css/animation.css">
    <link rel="stylesheet" href="./fonticon/css/fontello-ie7.css">
    <link rel="stylesheet" href="./fonticon/css/fontello.css">
</head>

<body class="BYekan vh-100">
    <!-- bodyBox -->
    <!-- mCustomScrollbar HoverSC mCS_noMargin mCS_rightPos overflow-hidden vh-100 -->
    <div class="bodyBox p-0 m-0" data-mcs-theme="light">

        <?php include 'section/header-dark.php'; ?>
        <!------------------------------------>

        <section class="w-100 d-up">
            <div class="c-slider slider slider-container w-100 py-4 position-relative" data-slider-time="3000">
                <ul class="sliderUl m-0 p-0 list-unstyled w-100 position-relative" style="height: 400px">
                    <li class="c-slider-item position-absolute w-100 h-100" id="slide-0">
                        <img src="./img/category/1/slide/1.jpg" class="w-100 h-100" srcset="">
                    </li>
                    <li class="c-slider-item position-absolute w-100 h-100" id="slide-1">
                        <img src="./img/category/1/slide/2.jpg" class="w-100 h-100" srcset="">
                    </li>
                    <li class="c-slider-item position-absolute w-100 h-100" id="slide-2">
                        <img src="./img/category/1/slide/3.jpg" class="w-100 h-100" srcset="">
                    </li>
                    <li class="c-slider-item position-absolute w-100 h-100" id="slide-3">
                        <img src="./img/category/1/slide/4.jpg" class="w-100 h-100" srcset="">
                    </li>
                </ul>

                <div class="sliderOperationBox position-absolute">
                    <ul class="list-unstyled sliderPaginateBox d-flex gap-2 d-flex align-items-center justify-content-center">
                        <li class="sliderPaginateItem rounded-circle active" id="sliderPaginateItem-0" onclick="gotToSlide(this,0)" role="button"></li>
                        <li class="sliderPaginateItem rounded-circle" id="sliderPaginateItem-1" onclick="gotToSlide(this,1)" role="button"></li>
                        <li class="sliderPaginateItem rounded-circle" id="sliderPaginateItem-2" onclick="gotToSlide(this,2)" role="button"></li>
                        <li class="sliderPaginateItem rounded-circle" id="sliderPaginateItem-3" onclick="gotToSlide(this,3)" role="button"></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- c-container -->
        <div class="c-container container py-4">
            <h4 class="text-center">دسته‌بندی‌ها</h4>
            <div class="col-12 d-flex align-items-center justify-content-center p-3">
                <div class="cat-t-it col-3 p-2">
                    <div class="d-flex flex-column gap-2 p-3 border border-1 border-light-silver" role="button">
                        <img src="./img/category/1/t/dress.jpg" class="w-100" srcset="">
                        <span>لباس مردانه</span>
                    </div>
                </div>
                <div class="cat-t-it col-3 p-2">
                    <div class="d-flex flex-column gap-2 p-3 border border-1 border-light-silver" role="button">
                        <img src="./img/category/1/t/shoes.jpg" class="w-100" srcset="">
                        <span>کفش مردانه</span>
                    </div>
                </div>
                <div class="cat-t-it col-3 p-2">
                    <div class="d-flex flex-column gap-2 p-3 border border-1 border-light-silver" role="button">
                        <img src="./img/category/1/t/watch.jpg" class="w-100" srcset="">
                        <span>اکسسوری مردانه</span>
                    </div>
                </div>
                <div class="cat-t-it col-3 p-2">
                    <div class="d-flex flex-column gap-2 p-3 border border-1 border-light-silver" role="button">
                        <img src="./img/category/1/t/sport.jpg" class="w-100" srcset="">
                        <span>ورزشی مردانه</span>
                    </div>
                </div>
            </div>

            <div class="col-12 d-flex flex-wrap align-items-center">
                <div class="col-6 p-3">
                    <a href="" class="d-block">
                        <img src="./img/category/1/b/shoes.jpg" class="w-100" alt="">
                    </a>
                </div>
                <div class="col-6 p-3">
                    <a href="" class="d-block">
                        <img src="./img/category/1/b/glass.jpg" class="w-100" alt="">
                    </a>
                </div>
                <div class="col-6 p-3">
                    <a href="" class="d-block">
                        <img src="./img/category/1/b/sport.jpg" class="w-100" alt="">
                    </a>
                </div>
                <div class="col-6 p-3">
                    <a href="" class="d-block">
                        <img src="./img/category/1/b/t-shirt.jpg" class="w-100" alt="">
                    </a>
                </div>
            </div>
        </div>
        <!-- End c-container -->

        <!------------------------------------>
        <?php include 'section/footer.php'; ?>

    </div>
    <!-- End bodyBox -->





</body>
<footer>
    <script src="./js/bootstrap.bundle.js"></script>
    <script src="./js/jquery-3.7.1.min.js"></script>
    <script src="./js/jquery.custom-scrollbar.js"></script>
    <script src="./js/style.js"></script>
</footer>

</html>