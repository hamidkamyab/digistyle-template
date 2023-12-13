 <!-- s-header -->
 <section class="s-header s-header-dark mb-4 position-absolute w-100">
     <!-- headerBox -->
     <div class="headerBox position-relative d-flex justify-content-center">
         <div class="container header-container mt-4 p-0">
             <div class="t-header-container container">
                 <div class="t-header-container-box d-flex align-items-start justify-content-between">
                     <div class="r-header-container text-dark d-flex align-items-start justify-content-start">
                         <div class="d-flex align-items-center gap-1">
                             <div class="header-cartBox d-flex align-items-center position-relative">
                                 <span class="cart-badge badge position-absolute translate-middle rounded-pill bg-danger fs-10 pt-1">0</span>
                                 <i class="icon-basket-thin fs-3 "></i>
                                 <span class="fs-14 ">سبد خرید</span>

                                 <div class="header-cart position-absolute start-0 rounded-1 bg-white">
                                     <div class="d-flex justify-content-center align-items-center flex-column py-5 gap-2">
                                         <img src="img/icon/cart-empty.svg" alt="" srcset="">
                                         <span class="fs-5 text-dark mt-1">سبد خرید شما خالی است.</span>

                                         <span class="text-muted mt-5">شاید این صفحات برای شما جذاب باشند</span>
                                         <ul class="list-unstyled d-flex justify-content-center align-items-center gap-2 fs-13">
                                             <li><a href="#" class="text-info">حراج استایل</a></li>
                                             <div class="vr-seperator bg-secondary vr-seperator-sm"></div>
                                             <li><a href="#" class="text-info">برندهای برتر</a></li>
                                             <div class="vr-seperator bg-secondary vr-seperator-sm"></div>
                                             <li><a href="#" class="text-info">خانه طراحان ایرانی</a></li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                             <div class="vr-seperator vr-seperator-md ms-2 bg-dark"></div>
                             <div class="header-userBox d-flex align-items-center position-relative">
                                 <i class="icon-login-thin fs-3 p-0 m-0 "></i>
                                 <span class="fs-14 ">وارد شوید</span>

                                 <div class="header-user-msg position-absolute bg-dark">
                                     <span class="text-white fs-12 d-block w-100 text-center">وارد حساب کاربری خود
                                         شوید.</span>
                                 </div>
                             </div>
                         </div>
                     </div>


                     <div class="c-header-container d-flex flex-column px-3">
                         <div class="header-log header-log-dark px-5 pb-4 border-1 border-bottom border-secondary mb-3 d-flex justify-content-center">
                             <img src="./img/icon/logo.svg" alt="" srcset="">
                         </div>

                         <!-- header-menu -->
                         <div class="header-menu">
                             <nav class="nav d-flex align-items-center justify-content-center gap-1">
                                 <li class="nav-item" onmouseenter="openMenu(this)">
                                     <a class="nav-link text-dark  position-relative" href="#">
                                         زنانه
                                         <span class="nav-link-triangle"></span>
                                     </a>
                                     <div class="c-mega-menu position-absolute container bg-white p-0">

                                         <ul class="c-mega-sub-menu border-1 border-bottom border-muted list-unstyled d-flex justify-content-center align-items-center position-relative">
                                             <li class="c-mega-sub-menu-item fs-15 ">

                                                 <div class="c-mega-sub-menu-title d-flex align-items-center justify-content-center px-4 py-2 gap-2" onmouseenter="showSubMenu(this)">
                                                     <img src="./img/menu-icon/dress.png" alt="" srcset="">
                                                     <span>لباس</span>
                                                 </div>

                                                 <div class="c-mega-sub-menu-body position-absolute vw-100">
                                                     <div class="d-flex align-items-start justify-content-center w-100">
                                                         <div class="c-mega-menu-right mCustomScrollbar col-6">
                                                             <div class="col-12 d-flex flex-wrap px-3 pb-1">
                                                                 <div class="col-4 d-flex flex-column align-items-start">
                                                                     <h6 class="d-flex align-items-center">خرید لباس زنانه <i class="icon-left-open-1"></i></h6>
                                                                     <ul class="c-mega-menu-cat-list d-flex col-12 flex-column list-unstyled p-0 m-0">
                                                                         <li class="py-2"><a href="#">تی شرت</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">پیراهن</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">شلوار</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">شرت</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">تی شرت </a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">پیراهن
                                                                                 1</a></li>
                                                                         <li class="py-2"><a href="#">شلوار 1</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">شرت 1</a>
                                                                         </li>
                                                                     </ul>
                                                                 </div>

                                                                 <div class="col-4 d-flex flex-column align-items-start">
                                                                     <h6 class="d-flex align-items-center">خرید لباس زنانه <i class="icon-left-open-1"></i></h6>
                                                                     <ul class="c-mega-menu-cat-list d-flex col-12 flex-column list-unstyled p-0 m-0">
                                                                         <li class="py-2"><a href="#">تی شرت</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">پیراهن</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">شلوار</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">شرت</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">تی شرت </a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">پیراهن
                                                                                 1</a></li>
                                                                         <li class="py-2"><a href="#">شلوار 1</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">شرت 1</a>
                                                                         </li>
                                                                     </ul>
                                                                 </div>

                                                                 <div class="col-4 d-flex flex-column align-items-start">
                                                                     <h6 class="d-flex align-items-center">خرید لباس زنانه <i class="icon-left-open-1"></i></h6>
                                                                     <ul class="c-mega-menu-cat-list d-flex col-12 flex-column list-unstyled p-0 m-0">
                                                                         <li class="py-2"><a href="#">تی شرت</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">پیراهن</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">شلوار</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">شلوار 1</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">شرت 1</a>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>

                                                         </div>
                                                         <div class="vr-seperator c-mega-menu-seperator align-self-start mt-4 bg-silver col-1">
                                                         </div>
                                                         <div class="c-mega-menu-left col-5 px-4" style="height: 400px;">
                                                             <h6 class="ps-2">برترین برندهای لباس زنانه</h6>
                                                             <ul class="c-mega-menu-top-brand d-flex col-12 flex-wrap list-unstyled p-0 m-0">
                                                                 <li class="p-2 col-6">
                                                                     <a href="#"><img src="img/top-brand/1.jpg" alt="" srcset=""></a>
                                                                 </li>
                                                                 <li class="p-2 col-6">
                                                                     <a href="#"><img src="img/top-brand/2.jpg" alt="" srcset=""></a>
                                                                 </li>
                                                                 <li class="p-2 col-6">
                                                                     <a href="#"><img src="img/top-brand/3.jpg" alt="" srcset=""></a>
                                                                 </li>
                                                                 <li class="p-2 col-6">
                                                                     <a href="#"><img src="img/top-brand/4.jpg" alt="" srcset=""></a>
                                                                 </li>
                                                             </ul>
                                                         </div>
                                                     </div>
                                                 </div>

                                             </li>
                                             <li class="c-mega-sub-menu-item fs-15">
                                                 <div class="c-mega-sub-menu-title d-flex align-items-center justify-content-center px-4 py-2 gap-2" onmouseenter="showSubMenu(this)">
                                                     <img src="./img/menu-icon/bag.png" alt="" srcset="">
                                                     <span>کیف</span>
                                                 </div>
                                                 <div class="c-mega-sub-menu-body position-absolute vw-100" style="height: 600px;">
                                                     <div class="d-flex align-items-start justify-content-center w-100">
                                                         <h1>کیف زنانه</h1>
                                                     </div>
                                                 </div>
                                             </li>
                                             <li class="c-mega-sub-menu-item fs-15">
                                                 <div class="c-mega-sub-menu-title d-flex align-items-center justify-content-center px-4 py-2 gap-2" onmouseenter="showSubMenu(this)">
                                                     <img src="./img/menu-icon/shoes.png" alt="" srcset="">
                                                     <span>کفش</span>
                                                 </div>
                                                 <div class="c-mega-sub-menu-body position-absolute vw-100" style="height: 600px;">
                                                     <div class="d-flex align-items-start justify-content-center w-100">
                                                         <h1>کفش زنانه</h1>
                                                     </div>
                                                 </div>
                                             </li>
                                             <li class="c-mega-sub-menu-item fs-15">
                                                 <div class="c-mega-sub-menu-title d-flex align-items-center justify-content-center px-4 py-2 gap-2" onmouseenter="showSubMenu(this)">
                                                     <img src="./img/menu-icon/sport.png" alt="" srcset="">
                                                     <span>ورزشی</span>
                                                 </div>
                                                 <div class="c-mega-sub-menu-body position-absolute vw-100" style="height: 600px;">
                                                     <div class="d-flex align-items-start justify-content-center w-100">
                                                         <h1>ورزشی زنانه</h1>
                                                     </div>
                                                 </div>

                                             </li>
                                         </ul>
                                     </div>
                                 </li>
                                 <li class="nav-item" onmouseenter="openMenu(this)">
                                     <a class="nav-link text-dark  position-relative" href="#">
                                         مردانه
                                         <span class="nav-link-triangle"></span>
                                     </a>

                                     <div class="c-mega-menu position-absolute container bg-white p-0">
                                         <ul class="c-mega-sub-menu border-1 border-bottom border-muted list-unstyled d-flex justify-content-center align-items-center position-relative">
                                             <li class="c-mega-sub-menu-item fs-15">
                                                 <div class="c-mega-sub-menu-title d-flex align-items-center justify-content-center px-4 py-2 gap-2" onmouseenter="showSubMenu(this)">
                                                     <img src="./img/menu-icon/dress.png" alt="" srcset="">
                                                     <span>لباس</span>
                                                 </div>

                                                 <div class="c-mega-sub-menu-body position-absolute vw-100">
                                                     <div class="d-flex align-items-start justify-content-center w-100">
                                                         <div class="c-mega-menu-right mCustomScrollbar col-6">
                                                             <div class="col-12 d-flex flex-wrap px-3 pb-1">
                                                                 <div class="col-4 d-flex flex-column align-items-start">
                                                                     <h6 class="d-flex align-items-center">خرید لباس زنانه <i class="icon-left-open-1"></i></h6>
                                                                     <ul class="c-mega-menu-cat-list d-flex col-12 flex-column list-unstyled p-0 m-0">
                                                                         <li class="py-2"><a href="#">تی شرت</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">پیراهن</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">شلوار</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">شرت</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">تی شرت </a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">پیراهن
                                                                                 1</a></li>
                                                                         <li class="py-2"><a href="#">شلوار 1</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">شرت 1</a>
                                                                         </li>
                                                                     </ul>
                                                                 </div>

                                                                 <div class="col-4 d-flex flex-column align-items-start">
                                                                     <h6 class="d-flex align-items-center">خرید لباس زنانه <i class="icon-left-open-1"></i></h6>
                                                                     <ul class="c-mega-menu-cat-list d-flex col-12 flex-column list-unstyled p-0 m-0">
                                                                         <li class="py-2"><a href="#">تی شرت</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">پیراهن</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">شلوار</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">شرت</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">تی شرت </a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">پیراهن
                                                                                 1</a></li>
                                                                         <li class="py-2"><a href="#">شلوار 1</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">شرت 1</a>
                                                                         </li>
                                                                     </ul>
                                                                 </div>

                                                                 <div class="col-4 d-flex flex-column align-items-start">
                                                                     <h6 class="d-flex align-items-center">خرید لباس زنانه <i class="icon-left-open-1"></i></h6>
                                                                     <ul class="c-mega-menu-cat-list d-flex col-12 flex-column list-unstyled p-0 m-0">
                                                                         <li class="py-2"><a href="#">تی شرت</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">پیراهن</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">شلوار</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">شلوار 1</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">شرت 1</a>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>

                                                         </div>
                                                         <div class="vr-seperator c-mega-menu-seperator align-self-start mt-4 bg-silver col-1">
                                                         </div>
                                                         <div class="c-mega-menu-left col-5 px-4" style="height: 400px;">
                                                             <h6 class="ps-2">برترین برندهای لباس مردانه</h6>
                                                             <ul class="c-mega-menu-top-brand d-flex col-12 flex-wrap list-unstyled p-0 m-0">
                                                                 <li class="p-2 col-6">
                                                                     <a href="#"><img src="img/top-brand/1.jpg" alt="" srcset=""></a>
                                                                 </li>
                                                                 <li class="p-2 col-6">
                                                                     <a href="#"><img src="img/top-brand/2.jpg" alt="" srcset=""></a>
                                                                 </li>
                                                                 <li class="p-2 col-6">
                                                                     <a href="#"><img src="img/top-brand/3.jpg" alt="" srcset=""></a>
                                                                 </li>
                                                                 <li class="p-2 col-6">
                                                                     <a href="#"><img src="img/top-brand/4.jpg" alt="" srcset=""></a>
                                                                 </li>
                                                             </ul>
                                                         </div>
                                                     </div>
                                                 </div>

                                             </li>
                                             <li class="c-mega-sub-menu-item fs-15">
                                                 <div class="c-mega-sub-menu-title d-flex align-items-center justify-content-center px-4 py-2 gap-2" onmouseenter="showSubMenu(this)">
                                                     <img src="./img/menu-icon/bag.png" alt="" srcset="">
                                                     <span>کیف</span>
                                                 </div>
                                                 <div class="c-mega-sub-menu-body position-absolute vw-100" style="height: 600px;">
                                                     <div class="d-flex align-items-start justify-content-center w-100">
                                                         <h1>کیف مردانه</h1>
                                                     </div>
                                                 </div>
                                             </li>
                                             <li class="c-mega-sub-menu-item fs-15">
                                                 <div class="c-mega-sub-menu-title d-flex align-items-center justify-content-center px-4 py-2 gap-2" onmouseenter="showSubMenu(this)">
                                                     <img src="./img/menu-icon/shoes.png" alt="" srcset="">
                                                     <span>کفش</span>
                                                 </div>
                                                 <div class="c-mega-sub-menu-body position-absolute vw-100" style="height: 600px;">
                                                     <div class="d-flex align-items-start justify-content-center w-100">
                                                         <h1>کفش مردانه</h1>
                                                     </div>
                                                 </div>
                                             </li>
                                             <li class="c-mega-sub-menu-item fs-15">
                                                 <div class="c-mega-sub-menu-title d-flex align-items-center justify-content-center px-4 py-2 gap-2" onmouseenter="showSubMenu(this)">
                                                     <img src="./img/menu-icon/sport.png" alt="" srcset="">
                                                     <span>ورزشی</span>
                                                 </div>
                                                 <div class="c-mega-sub-menu-body position-absolute vw-100" style="height: 600px;">
                                                     <div class="d-flex align-items-start justify-content-center w-100">
                                                         <h1>ورزشی مردانه</h1>
                                                     </div>
                                                 </div>

                                             </li>
                                         </ul>
                                     </div>
                                 </li>
                                 <li class="nav-item" onmouseenter="openMenu(this)">
                                     <a class="nav-link text-dark  position-relative" href="#">
                                         بچگانه
                                         <span class="nav-link-triangle"></span>
                                     </a>
                                     <div class="c-mega-menu position-absolute container bg-white p-0">
                                         <ul class="c-mega-sub-menu border-1 border-bottom border-muted list-unstyled d-flex justify-content-center align-items-center position-relative">
                                             <li class="c-mega-sub-menu-item fs-15">
                                                 <div class="c-mega-sub-menu-title d-flex align-items-center justify-content-center px-4 py-2 gap-2" onmouseenter="showSubMenu(this)">
                                                     <img src="./img/menu-icon/dress.png" alt="" srcset="">
                                                     <span>لباس</span>
                                                 </div>

                                                 <div class="c-mega-sub-menu-body position-absolute vw-100">
                                                     <div class="d-flex align-items-start justify-content-center w-100">
                                                         <div class="c-mega-menu-right mCustomScrollbar col-6">
                                                             <div class="col-12 d-flex flex-wrap px-3 pb-1">
                                                                 <div class="col-4 d-flex flex-column align-items-start">
                                                                     <h6 class="d-flex align-items-center">خرید لباس زنانه <i class="icon-left-open-1"></i></h6>
                                                                     <ul class="c-mega-menu-cat-list d-flex col-12 flex-column list-unstyled p-0 m-0">
                                                                         <li class="py-2"><a href="#">تی شرت</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">پیراهن</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">شلوار</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">شرت</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">تی شرت </a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">پیراهن
                                                                                 1</a></li>
                                                                         <li class="py-2"><a href="#">شلوار 1</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">شرت 1</a>
                                                                         </li>
                                                                     </ul>
                                                                 </div>

                                                                 <div class="col-4 d-flex flex-column align-items-start">
                                                                     <h6 class="d-flex align-items-center">خرید لباس زنانه <i class="icon-left-open-1"></i></h6>
                                                                     <ul class="c-mega-menu-cat-list d-flex col-12 flex-column list-unstyled p-0 m-0">
                                                                         <li class="py-2"><a href="#">تی شرت</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">پیراهن</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">شلوار</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">شرت</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">تی شرت </a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">پیراهن
                                                                                 1</a></li>
                                                                         <li class="py-2"><a href="#">شلوار 1</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">شرت 1</a>
                                                                         </li>
                                                                     </ul>
                                                                 </div>

                                                                 <div class="col-4 d-flex flex-column align-items-start">
                                                                     <h6 class="d-flex align-items-center">خرید لباس زنانه <i class="icon-left-open-1"></i></h6>
                                                                     <ul class="c-mega-menu-cat-list d-flex col-12 flex-column list-unstyled p-0 m-0">
                                                                         <li class="py-2"><a href="#">تی شرت</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">پیراهن</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">شلوار</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">شلوار 1</a>
                                                                         </li>
                                                                         <li class="py-2"><a href="#">شرت 1</a>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>

                                                         </div>
                                                         <div class="vr-seperator c-mega-menu-seperator align-self-start mt-4 bg-silver col-1">
                                                         </div>
                                                         <div class="c-mega-menu-left col-5 px-4" style="height: 400px;">
                                                             <h6 class="ps-2">برترین برندهای لباس بچگانه</h6>
                                                             <ul class="c-mega-menu-top-brand d-flex col-12 flex-wrap list-unstyled p-0 m-0">
                                                                 <li class="p-2 col-6">
                                                                     <a href="#"><img src="img/top-brand/1.jpg" alt="" srcset=""></a>
                                                                 </li>
                                                                 <li class="p-2 col-6">
                                                                     <a href="#"><img src="img/top-brand/2.jpg" alt="" srcset=""></a>
                                                                 </li>
                                                                 <li class="p-2 col-6">
                                                                     <a href="#"><img src="img/top-brand/3.jpg" alt="" srcset=""></a>
                                                                 </li>
                                                                 <li class="p-2 col-6">
                                                                     <a href="#"><img src="img/top-brand/4.jpg" alt="" srcset=""></a>
                                                                 </li>
                                                             </ul>
                                                         </div>
                                                     </div>
                                                 </div>

                                             </li>
                                             <li class="c-mega-sub-menu-item fs-15">
                                                 <div class="c-mega-sub-menu-title d-flex align-items-center justify-content-center px-4 py-2 gap-2" onmouseenter="showSubMenu(this)">
                                                     <img src="./img/menu-icon/bag.png" alt="" srcset="">
                                                     <span>کیف</span>
                                                 </div>
                                                 <div class="c-mega-sub-menu-body position-absolute vw-100" style="height: 600px;">
                                                     <div class="d-flex align-items-start justify-content-center w-100">
                                                         <h1>کیف بچگانه</h1>
                                                     </div>
                                                 </div>
                                             </li>
                                             <li class="c-mega-sub-menu-item fs-15">
                                                 <div class="c-mega-sub-menu-title d-flex align-items-center justify-content-center px-4 py-2 gap-2" onmouseenter="showSubMenu(this)">
                                                     <img src="./img/menu-icon/shoes.png" alt="" srcset="">
                                                     <span>کفش</span>
                                                 </div>
                                                 <div class="c-mega-sub-menu-body position-absolute vw-100" style="height: 600px;">
                                                     <div class="d-flex align-items-start justify-content-center w-100">
                                                         <h1>کفش بچگانه</h1>
                                                     </div>
                                                 </div>
                                             </li>
                                             <li class="c-mega-sub-menu-item fs-15">
                                                 <div class="c-mega-sub-menu-title d-flex align-items-center justify-content-center px-4 py-2 gap-2" onmouseenter="showSubMenu(this)">
                                                     <img src="./img/menu-icon/sport.png" alt="" srcset="">
                                                     <span>ورزشی</span>
                                                 </div>
                                                 <div class="c-mega-sub-menu-body position-absolute vw-100" style="height: 600px;">
                                                     <div class="d-flex align-items-start justify-content-center w-100">
                                                         <h1>ورزشی بچگانه</h1>
                                                     </div>
                                                 </div>

                                             </li>
                                         </ul>
                                     </div>
                                 </li>
                                 <li class="nav-item" onmouseenter="openMenu(this)">
                                     <a class="nav-link text-dark  position-relative" href="#">زیبایی و سلامت</a>
                                 </li>
                                 <div class="vr-seperator vr-seperator-md mx-1 bg-dark"></div>
                                 <li class="nav-item" onmouseenter="openMenu(this)">
                                     <a class="nav-link special text-dark" href="#">حراج استایل</a>
                                 </li>
                                 <li class="nav-item" onmouseenter="openMenu(this)">
                                     <a class="nav-link text-dark  position-relative" href="#">مد پایدار</a>
                                 </li>
                             </nav>
                         </div>
                     </div>
                     <!-- End header-menu -->


                     <div class="l-header-container d-flex justify-content-end align-items-start">
                         <div class="searchBox d-flex align-items-center border-bottom border-1 border-silver pe-3">
                             <i class="icon-search-thin fs-3 text-dark "></i>
                             <span class="text-muted fs-13 ">جستجو محصولات از 290 برند</span>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- t-header-container -->
         </div>


     </div>
     <!-- End headerBox -->
 </section>
 <!-- End s-header -->