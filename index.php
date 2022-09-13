<?php

include "process.php";


?>


<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css"
      integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="./asset/css/style.css" />
    <link rel="shortcut icon" href="./asset/img/logo.png" />
    <title>LendPro | فروش نقد و اقساط محصولات اپل</title>
  </head>
  <body class="bg-dark">


    <!-- header site -->

    <!-- <header class="shadow">
      <nav id="navbar" class=" navbar d-block fixed-top navbar-light navbar-expand-lg bg-light">
        <div class="container">
          <img class="ms-2" src="./asset/img/logo.png" style="width: 70px ;" alt="">
          <a class="navbar-brand" style="font-size: 40px;" href="#">LendPro</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
  
</div>
</nav>
</header> -->

<!-- offcanvas -->

<div class="offcanvas offcanvas-start bg-primary w-50 "  data-bs-scroll="true"  id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
 <div style="flex-direction: column; align-items:center;" class="d-flex">
        <i class=" mt-2  bi bi-person-circle text-light"></i>
        <a style="font-size:20px;" class="text-light pb-3" href="">۰۹۱۲۰۶۳۹۷۸۳</a>
        <a style="font-size:20px; border-bottom: 4px solid #fff;" class="text-light pb-3 mb-3 " href="">سجاد مرادی</a>
</div>
<div class="offcanvas-body">
   <div class="mt-2  text-start">
            <a href=""><i style="font-size: 30px ;" class="bi bi-speedometer text-light"></i></a>
            <a style="font-size: 16px ;" class="text-light pb-2 ps-3" href="./maindashboard.html">داشبورد</a>
          </div>
          <div class="mt-2 pb-3  text-start d-flex align-items-center" style="border-bottom: 4px dotted #fff;">
            <a href=""><i style="font-size: 30px " class="bi bi-person-circle text-light"></i></a>
            <a style="font-size: 16px ;" class="text-light pb-2 ps-3" href="./profile.html">پروفایل من</a>
          </div>
          <div class="mt-2  pt-3 text-start d-flex align-items-center">
            <a href=""><i style="font-size: 30px ;" class="bi bi-file-text text-light"></i></a>
            <a style="font-size: 16px ;" class="text-light pb-2 ps-3" href="./requestlend.html">درخواست اقساط</a>
          </div>
          <div class="mt-2  text-start d-flex align-items-center" style="border-bottom: 4px dotted #fff;">
            <a href=""><i style="font-size: 30px ;" class="bi bi-credit-card text-light"></i></a>
            <a style="font-size: 16px ;" class="text-light pb-2 ps-3" href="./lendpermounth.html">قسط های من</a>
          </div>
           <div class="mt-2  pt-3 text-start d-flex align-items-center">
            <a href=""><i style="font-size: 30px ;" class="bi bi-key text-light"></i></a>
            <a style="font-size: 16px ;" class="text-light pb-2 ps-3" href="">تغیر رمز عبور</a>
          </div>
          <div class="mt-2  text-start d-flex align-items-center">
            <a href=""><i style="font-size: 30px ;" class="bi bi-power text-light"></i></a>
            <a style="font-size: 16px ;" class="text-light pb-2 ps-3" href="">خروج</a>
          </div>
</div>
</div>



<div class="container-fluid ">
  <div class="row">

    <div class="col-md-3 d-none d-lg-block mx-3 ">
      
      <div class="row p-5 mt-5 bg-primary  align-items-center text-center shadow " style="border-radius: 0 0 50px 50px;">
        <i style="font-size:60px ;" class=" mt-5 mb-2 bi bi-person-circle text-light"></i>
        <a style="font-size:15px;" class="text-light pb-3" href="">۰۹۱۲۰۶۳۹۷۸۳</a>
        <a style="font-size:20px;" class="text-light" href="">سجاد مرادی</a>
      </div>

      <div class="row pt-2 text-center shadow rounded p-2">

           <div class="mt-2 ps-4 text-start d-flex align-items-center pt-4">
            <a href=""><i style="font-size: 30px ;" class="bi bi-speedometer text-primary"></i></a>
            <a style="font-size: 16px ;" class="text-muted pb-2 ps-3" href="./maindashboard.html">داشبورد</a>
          </div>
          <div class="mt-2 pb-3 ps-4 text-start d-flex align-items-center" style="border-bottom: 4px dotted #06e;">
            <a href=""><i style="font-size: 30px " class="bi bi-person-circle text-primary"></i></a>
            <a style="font-size: 16px ;" class="text-muted pb-2 ps-3" href="./profile.html">پروفایل من</a>
          </div>
          <div class="mt-2 ps-4 pt-3 text-start d-flex align-items-center">
            <a href=""><i style="font-size: 30px ;" class="bi bi-file-text text-primary"></i></a>
            <a style="font-size: 16px ;" class="text-muted pb-2 ps-3" href="./requestlend.html">درخواست اقساط</a>
          </div>
          <div class="mt-2 ps-4 text-start d-flex align-items-center" style="border-bottom: 4px dotted #06e;">
            <a href=""><i style="font-size: 30px ;" class="bi bi-credit-card text-primary"></i></a>
            <a style="font-size: 16px ;" class="text-muted pt-2 ps-3 mb-3" href="./lendpermounth.html">قسط های من</a>
          </div>
           <div class="mt-2 ps-4 pt-3 text-start d-flex align-items-center">
            <a href=""><i style="font-size: 30px ;" class="bi bi-key text-primary"></i></a>
            <a style="font-size: 16px ;" class="text-muted pb-2 ps-3" href="">تغیر رمز عبور</a>
          </div>
          <div class="mt-2 ps-4 text-start d-flex align-items-center">
            <a href=""><i style="font-size: 30px ;" class="bi bi-power text-primary"></i></a>
            <a style="font-size: 16px ;" class="text-muted pb-2 ps-3" href="">خروج</a>
          </div>
          
      </div>

    </div>


    <div class="col-lg-8 mt-5 ">

<div class="row p-5 mt-5  text-center align-items-center  " >

    
        <div class="col-md-3 mt-5">
            <div class="text-primary display-6 fw-bold">اطلاعات شخصی</div>
            <i class=" text-primary bi bi-caret-left-fill"></i>
        </div>




        <div class="col-md-9 mt-5" style="border-right : 6px dashed #06e">
            <form action="" method="POST">
            <div class="row my-4">
                <div class="col-md-6 my-2 form-floating">
                     <input type="text" class="form-control text-center" id="floatingInput" placeholder="نام و نام خاتوادگی" name="name">
                     <label class="text-muted" for="floatingInput">نام و نام خانوادگی</label>
                </div>
                <div class="col-md-6 my-2 form-floating">
                     <input type="text" class="form-control text-center" id="floatingInput" placeholder="نام پدر" name="fatherName">
                     <label class="text-muted" for="floatingInput">نام پدر</label>
                </div>
                <div class="col-md-6 my-2 form-floating">
                     <input type="text" class="form-control text-center" id="floatingInput" placeholder="کد ملی" name="intetnationalCode">
                     <label class="text-muted" for="floatingInput">کد ملی </label>
                </div>
                <div class="col-md-6 my-2 form-floating">
                     <input type="text" class="form-control text-center" id="floatingInput" placeholder="تاریخ" name="date">
                     <label class="text-muted" for="floatingInput"> تاریخ </label>
                </div>
                
            </div>
            <div class="row my-4">
                <div class="col-md-4 my-2 form-floating">
                     <input type="text" class="form-control text-center" id="floatingInput" placeholder="شماره موبایل" name="phoneNumber">
                     <label class="text-muted" for="floatingInput">شماره تلفن همراه</label>
                </div>
                <div class="col-md-4 my-2 form-floating">
                     <input type="text" class="form-control text-center" id="floatingInput" placeholder="شماره همراه" name="phoneNumber2">
                     <label class="text-muted" for="floatingInput">شماره تلفن همراه ضروری</label>
                </div>
                <div class="col-md-4 my-2 form-floating">
                     <input type="text" class="form-control text-center" id="floatingInput" placeholder="شماره ثابت" name="phone">
                     <label class="text-muted" for="floatingInput">شماره ثابت</label>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-md-12 my-2 form-floating">
                     <input type="address" class="form-control text-center" id="floatingInput" placeholder="آدرس محل سکونت" name="address">
                     <label class="text-muted" for="floatingInput">آدرس محل سکونت</label>
                </div> 
            </div>
            <div class="row my-4">
                <div class="col-xl-6 my-2">
                    <input type="file" id="homeDocument" name="uploadcard">               
                    <label class="text-primary pb-3 form-control" for="homeDocument"><i style="font-size:30px;" class="  p-3 bi bi-credit-card-2-front text-primary"></i>آپلود عکس کارت ملی</label>
                
                </div>
                <div class="col-xl-6 my-2">
                    <input type="file" id="homeDocument" class="form-control" name="uploadsanad">                
                    <label class="text-primary pb-3 form-control" for="homeDocument"><i style="font-size:30px;" class="  p-3 bi bi-file-earmark-text text-primary"></i>آپلود عکس  احراز سکونت</label>
                    </div>
                
                 
            </div>
            <div class="row my-4">
                <div class="col-md-6">
                     <select class="form-select py-3 text-center" id="lendmonth" aria-label="Default select example" name="format">
                                          <option selected>انتخاب نوع فایل</option>
                                          <option value="Exel">EXEL</option>
                                          <option value="Pdf">PDF </option>
                                          <option value="Word">WORD</option>
                                        </select>
                </div> 
                <div class="col-md-6">
                     <input type="submit" class="form-control bg-primary text-light p-3"  value="ثبت اطلاعات">
                </div> 
            </div>

            </form>
        </div>
    </div>
 

   </div>
  </div>


   






          

   

























    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  </body>
</html>


