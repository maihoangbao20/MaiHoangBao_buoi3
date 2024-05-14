

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Trang chủ</title>
  
   <link rel="stylesheet" href="public/fontawesome/css/all.min.css">
   <link rel="stylesheet" href="public/css/frontend.css">
 <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</head>

<body>
   <section class="hdl-header">
      <div class="container">
         <div class="row">
            <div class="col-6 col-sm-6 col-md-2 py-1">
               <a href="index.html">
                  <img src="{{ asset('images/logo.png') }}" class="img-fluid" alt="Logo">
               </a>
            </div>
            <div class="col-12 col-sm-9 d-none d-md-block col-md-5 py-3">
               <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Nhập nội dung tìm kiếm"
                     aria-label="Recipient's username" aria-describedby="basic-addon2">
                  <span class="input-group-text bg-main" id="basic-addon2">
                     <i class="fa fa-search" aria-hidden="true"></i>
                  </span>
               </div>
            </div>
            <div class="col-12 col-sm-12 d-none d-md-block col-md-4 text-center py-2">
               <div class="call-login--register border-bottom">
                  <ul class="nav nav-fills py-0 my-0">
                     <li class="nav-item">
                        <a class="nav-link" href="login.html">
                           <i class="fa fa-phone-square" aria-hidden="true"></i>
                           0964654938
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="login.html">Đăng nhập</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="register.html">Đăng ký</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="profile.html">Mai Hoang Bao</a>
                     </li>
                  </ul>
               </div>
               <div class="fs-6 py-2">
                  ĐỔI TRẢ HÀNG HOẶC HOÀN TIỀN <span class="text-main">TRONG 3 NGÀY</span>
               </div>
            </div>
            <div class="col-6 col-sm-6 col-md-1 text-end py-4 py-md-2">
               <a href="cart.html">
                  <div class="box-cart float-end">
                     <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                     <span>1</span>
                  </div>
               </a>
            </div>
         </div>
      </div>
   </section>
   <section class="hdl-mainmenu bg-main">
      <div class="container">
         <div class="row">
            <div class="col-12 d-none d-md-block col-md-2 d-none d-md-block">
               <div class="dropdown list-category">
                  <strong class="dropdown-toggle w-100" data-bs-toggle="dropdown" aria-expanded="false">
                     Danh mục sản phẩm
                  </strong>
                  <ul class="dropdown-menu w-100">
                                                    <li>
                                <a class="dropdown-item" href="index.php?option=product&cat=do-nam">Đồ nam</a>
                            </li>
                                                    <li>
                                <a class="dropdown-item" href="index.php?option=product&cat=do-nu">Đồ nữ</a>
                            </li>
                                                    <li>
                                <a class="dropdown-item" href="index.php?option=product&cat=thay-loi-dep-zdai">111111111</a>
                            </li>
                                          </ul>
               </div>            </div>
            <div class="col-12 col-md-9">
               <nav class="navbar navbar-expand-lg bg-main">
                  <div class="container-fluid">
                     <a class="navbar-brand d-block d-sm-none text-dark" href="index.html">SHOP</a>
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                                                   <li class="nav-item">
          <a class="nav-link text-dark" href="http://localhost/MaiHoangBao_CCQ2211AB/">Trang chủ</a>
        </li>
                               
                            
                                                    
                                                                   <li class="nav-item">
         <a class="nav-link text-dark" href="index.php?option=page&cat=gioi-thieu">Giới thiệu</a>
        </li>
                               
                            
                                                    
                                                               <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-dark" href="index.php?option=product&cat=do-nam" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Đồ nam        </a>
        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-main" href="index.php?option=product&cat=ao-thun-nam">Áo thun nam</a></li>
                            <li><a class="dropdown-item text-main" href="index.php?option=product&cat=ao-so-mi-nam">Áo sơ mi nam</a></li>
                            <li><a class="dropdown-item text-main" href="index.php?option=product&cat=quan-short-nam">Quần short nam</a></li>
                            <li><a class="dropdown-item text-main" href="index.php?option=product&cat=quan-dai-nam">Quần dài nam</a></li>
                    </ul>
    </li>
                               
                            
                                                    
                                                               <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-dark" href="index.php?option=product&cat=do-nu" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Đồ nữ        </a>
        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-main" href="index.php?option=product&cat=ao-thun-nu">Áo thun nữ</a></li>
                            <li><a class="dropdown-item text-main" href="index.php?option=product&cat=ao-so-mi-nu">Áo sơ mi nữ</a></li>
                            <li><a class="dropdown-item text-main" href="index.php?option=product&cat=ao-kieu">Áo kiểu</a></li>
                            <li><a class="dropdown-item text-main" href="index.php?option=product&cat=quan-short-nu">Quần short nữ</a></li>
                            <li><a class="dropdown-item text-main" href="index.php?option=product&cat=quan-dai-nu">Quần dài nữ</a></li>
                            <li><a class="dropdown-item text-main" href="index.php?option=product&cat=chan-vay">Chân váy</a></li>
                            <li><a class="dropdown-item text-main" href="index.php?option=product&cat=dam">Đầm</a></li>
                    </ul>
    </li>
	<li class="nav-item">
          <a class="nav-link text-dark" href="lien-he">Contact</a>
        </li>

                               
                            
                                                    
                                                     
                        </ul>
                     </div>
                  </div>
               </nav>            </div>
         </div>
      </div>
   </section>   <section class="hdl-slideshow">
      <div id="carouselExample" class="carousel slide">
         <div class="carousel-inner">
                                                         <div class="carousel-item active">             
                     <img src="{{ asset('images/slider_2.jpg') }}" class="img-fluid" alt="Slider1">
                  </div>
                                                                           <div class="carousel-item">             
                     <img src="{{ asset('images/slider_2.jpg') }}" class="img-fluid" alt="Slider2">
                  </div>
                                                                           <div class="carousel-item">             
                     <img src="{{ asset('images/slider_2.jpg') }}" class="img-fluid" alt="Slider3">
                  </div>
                  </div>
                                                   </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
         </button>
      </div>
   </section>   <section class="hdl-maincontent">
      <div class="container">
                     <div class="product-category mt-3">
            <div class="row">
               <div class="col-md-3">
                  <div class="category-title bg-main">
                     <h1 class="fs-5 py-3 text-center text-uppercase">Đồ nam</h1>
                     <img class="img-fluid d-none d-md-block" src="public/images/category/"alt="">
                  </div>
               </div>
               <div class="col-md-9">
                <div class="row product-list">
                                        <div class="col-6 col-md-3 mb-4">
                                                 <div class="product-item border">
                           <div class="product-item-image">
                              <a href="chi-tiet-san-pham/1">
                                 <img src="{{ asset('images/c1.webp') }}" class="img-fluid" alt="quan-jean-nam-slimfit-totoday-10203.jpg"
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/quan-jean-nam-slimfit-totoday-10203.jpg" alt="quan-jean-nam-slimfit-totoday-10203.jpg"
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="index.php?option=product&slug=quan-jean-nam-slimfit-totoday-10203">QUẦN JEAN NAM - SLIMFIT - TOTODAY - 10203</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>10,000đ</del></div>  
                              <div class="flex-fill text-end text-main">10,000đ</div>
                           </h3>    
                     </div>                    </div>
                                        <div class="col-6 col-md-3 mb-4">
                                                 <div class="product-item border">
                           <div class="product-item-image">
                              <a href="chi-tiet-san-pham/1">
                                 <img src="{{ asset('images/c1.webp') }}" class="img-fluid" alt="quan-jean-nam-slimfit-totoday-10204.jpg"
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/quan-jean-nam-slimfit-totoday-10204.jpg" alt="quan-jean-nam-slimfit-totoday-10204.jpg"
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="index.php?option=product&slug=quan-jean-nam-slimfit-totoday-10204">QUẦN JEAN NAM - SLIMFIT - TOTODAY - 10204</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>10,000đ</del></div>  
                              <div class="flex-fill text-end text-main">10,000đ</div>
                           </h3>    
                     </div>                    </div>
                                        <div class="col-6 col-md-3 mb-4">
                                                 <div class="product-item border">
                           <div class="product-item-image">
                              <a href="chi-tiet-san-pham/1">
                                 <img src="{{ asset('images/c1.webp') }}" class="img-fluid" alt="quan-jean-nam-slimfit-totoday-10205.jpg"
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/quan-jean-nam-slimfit-totoday-10205.jpg" alt="quan-jean-nam-slimfit-totoday-10205.jpg"
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="index.php?option=product&slug=quan-jean-nam-slimfit-totoday-10205">QUẦN JEAN NAM - SLIMFIT - TOTODAY - 10205</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>10,000đ</del></div>  
                              <div class="flex-fill text-end text-main">10,000đ</div>
                           </h3>    
                     </div>                    </div>
                                        <div class="col-6 col-md-3 mb-4">
                                                 <div class="product-item border">
                           <div class="product-item-image">
                              <a href="chi-tiet-san-pham/1">
                                 <img src="{{ asset('images/c1.webp') }}" class="img-fluid" alt="quan-jean-nam-slimfit-totoday-10206.jpg"
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/quan-jean-nam-slimfit-totoday-10206.jpg" alt="quan-jean-nam-slimfit-totoday-10206.jpg"
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="index.php?option=product&slug=quan-jean-nam-slimfit-totoday-10206">QUẦN JEAN NAM - SLIMFIT - TOTODAY - 10206</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>10,000đ</del></div>  
                              <div class="flex-fill text-end text-main">10,000đ</div>
                           </h3>    
                     </div>                    </div>
                                        <div class="col-6 col-md-3 mb-4">
                                                 <div class="product-item border">
                           <div class="product-item-image">
                              <a href="chi-tiet-san-pham/1">
                                 <img src="{{ asset('images/c1.webp') }}" class="img-fluid" alt="shorts-thun-nam-totoday-freedom-totoday.jpg"
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/shorts-thun-nam-totoday-freedom-totoday.jpg" alt="shorts-thun-nam-totoday-freedom-totoday.jpg"
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="index.php?option=product&slug=shorts-thun-nam-totoday-freedom-totoday">SHORTS THUN NAM - TOTODAY - FREEDOM TOTODAY</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>10,000đ</del></div>  
                              <div class="flex-fill text-end text-main">10,000đ</div>
                           </h3>    
                     </div>                    </div>
                                        <div class="col-6 col-md-3 mb-4">
                                                 <div class="product-item border">
                           <div class="product-item-image">
                              <a href="chi-tiet-san-pham/1">
                                 <img src="{{ asset('images/c1.webp') }}" class="img-fluid" alt="shorts-jean-nam-totoday-11201.jpg"
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/shorts-jean-nam-totoday-11201.jpg" alt="shorts-jean-nam-totoday-11201.jpg"
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="index.php?option=product&slug=shorts-jean-nam-totoday-11201">SHORTS JEAN NAM - TOTODAY - 11201</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>10,000đ</del></div>  
                              <div class="flex-fill text-end text-main">10,000đ</div>
                           </h3>    
                     </div>                    </div>
                                        <div class="col-6 col-md-3 mb-4">
                                                 <div class="product-item border">
                           <div class="product-item-image">
                              <a href="chi-tiet-san-pham/1">
                                 <img src="{{ asset('images/c1.webp') }}" class="img-fluid" alt="shorts-jean-nam-totoday-11202.jpg"
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/shorts-jean-nam-totoday-11202.jpg" alt="shorts-jean-nam-totoday-11202.jpg"
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="index.php?option=product&slug=shorts-jean-nam-totoday-11202">SHORTS JEAN NAM - TOTODAY - 11202</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>10,000đ</del></div>  
                              <div class="flex-fill text-end text-main">10,000đ</div>
                           </h3>    
                     </div>                    </div>
                                        <div class="col-6 col-md-3 mb-4">
                                                 <div class="product-item border">
                           <div class="product-item-image">
                              <a href="chi-tiet-san-pham/1">
                                 <img src="{{ asset('images/c1.webp') }}" class="img-fluid" alt="shorts-jean-nam-totoday-11203.jpg"
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/shorts-jean-nam-totoday-11203.jpg" alt="shorts-jean-nam-totoday-11203.jpg"
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="index.php?option=product&slug=shorts-jean-nam-totoday-11203">SHORTS JEAN NAM - TOTODAY - 11203</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>10,000đ</del></div>  
                              <div class="flex-fill text-end text-main">10,000đ</div>
                           </h3>    
                     </div>                    </div>
                                    </div>
            </div>
        </div>
     </div> 
                     <div class="product-category mt-3">
            <div class="row">
               <div class="col-md-3">
                  <div class="category-title bg-main">
                     <h1 class="fs-5 py-3 text-center text-uppercase">Đồ nữ</h1>
                     <img class="img-fluid d-none d-md-block" src="public/images/category/"alt="">
                  </div>
               </div>
               <div class="col-md-9">
                <div class="row product-list">
                                        <div class="col-6 col-md-3 mb-4">
                                                 <div class="product-item border">
                           <div class="product-item-image">
                              <a href="chi-tiet-san-pham/1">
                                 <img src="{{ asset('images/c1.webp') }}" class="img-fluid" alt="chan-vay-w2cnv06202fosxl.jpg"
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/chan-vay-w2cnv06202fosxl.jpg" alt="chan-vay-w2cnv06202fosxl.jpg"
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="index.php?option=product&slug=chan-vay-w2cnv06202fosxl">CHÂN VÁY W2CNV06202FOSXL</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>10,000đ</del></div>  
                              <div class="flex-fill text-end text-main">10,000đ</div>
                           </h3>    
                     </div>                    </div>
                                        <div class="col-6 col-md-3 mb-4">
                                                 <div class="product-item border">
                           <div class="product-item-image">
                              <a href="chi-tiet-san-pham/1">
                                 <img src="{{ asset('images/c1.webp') }}" class="img-fluid" alt="chan-vay-w2cnv06203fosxl.jpg"
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/chan-vay-w2cnv06203fosxl.jpg" alt="chan-vay-w2cnv06203fosxl.jpg"
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="index.php?option=product&slug=chan-vay-w2cnv06203fosxl">CHÂN VÁY W2CNV06203FOSXL</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>10,000đ</del></div>  
                              <div class="flex-fill text-end text-main">10,000đ</div>
                           </h3>    
                     </div>                    </div>
                                        <div class="col-6 col-md-3 mb-4">
                                                 <div class="product-item border">
                           <div class="product-item-image">
                              <a href="chi-tiet-san-pham/1">
                                 <img src="{{ asset('images/c1.webp') }}" class="img-fluid" alt="chan-vay-jean-nu-totoday-10201.jpg"
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/chan-vay-jean-nu-totoday-10201.jpg" alt="chan-vay-jean-nu-totoday-10201.jpg"
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="index.php?option=product&slug=chan-vay-jean-nu-totoday-10201">CHÂN VÁY JEAN NỮ - TOTODAY - 10201</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>10,000đ</del></div>  
                              <div class="flex-fill text-end text-main">10,000đ</div>
                           </h3>    
                     </div>                    </div>
                                        <div class="col-6 col-md-3 mb-4">
                                                 <div class="product-item border">
                           <div class="product-item-image">
                              <a href="chi-tiet-san-pham/1">
                                 <img src="{{ asset('images/c1.webp') }}" class="img-fluid" alt="quan-jean-w2qjn04208fbgtr.jpg"
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/quan-jean-w2qjn04208fbgtr.jpg" alt="quan-jean-w2qjn04208fbgtr.jpg"
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="index.php?option=product&slug=quan-jean-w2qjn04208fbgtr">QUẦN JEAN W2QJN04208FBGTR</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>10,000đ</del></div>  
                              <div class="flex-fill text-end text-main">10,000đ</div>
                           </h3>    
                     </div>                    </div>
                                        <div class="col-6 col-md-3 mb-4">
                                                 <div class="product-item border">
                           <div class="product-item-image">
                              <a href="chi-tiet-san-pham/1">
                                 <img src="{{ asset('images/c1.webp') }}" class="img-fluid" alt="quan-jean-w2qjn05201fbgtr.jpg"
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/quan-jean-w2qjn05201fbgtr.jpg" alt="quan-jean-w2qjn05201fbgtr.jpg"
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="index.php?option=product&slug=quan-jean-w2qjn05201fbgtr">QUẦN JEAN W2QJN05201FBGTR</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>10,000đ</del></div>  
                              <div class="flex-fill text-end text-main">10,000đ</div>
                           </h3>    
                     </div>                    </div>
                                        <div class="col-6 col-md-3 mb-4">
                                                 <div class="product-item border">
                           <div class="product-item-image">
                              <a href="chi-tiet-san-pham/1">
                                 <img src="{{ asset('images/c1.webp') }}" class="img-fluid" alt="quan-jean-w2qjn05202fbgtr.jpg"
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/quan-jean-w2qjn05202fbgtr.jpg" alt="quan-jean-w2qjn05202fbgtr.jpg"
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="index.php?option=product&slug=quan-jean-w2qjn05202fbgtr">QUẦN JEAN W2QJN05202FBGTR</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>10,000đ</del></div>  
                              <div class="flex-fill text-end text-main">10,000đ</div>
                           </h3>    
                     </div>                    </div>
                                        <div class="col-6 col-md-3 mb-4">
                                                 <div class="product-item border">
                           <div class="product-item-image">
                              <a href="chi-tiet-san-pham/1">
                                 <img src="{{ asset('images/c1.webp') }}" class="img-fluid" alt="quan-jean-w2qjn05203fbgtr.jpg"
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/quan-jean-w2qjn05203fbgtr.jpg" alt="quan-jean-w2qjn05203fbgtr.jpg"
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="index.php?option=product&slug=quan-jean-w2qjn05203fbgtr">QUẦN JEAN W2QJN05203FBGTR</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>10,000đ</del></div>  
                              <div class="flex-fill text-end text-main">10,000đ</div>
                           </h3>    
                     </div>                    </div>
                                        <div class="col-6 col-md-3 mb-4">
                                                 <div class="product-item border">
                           <div class="product-item-image">
                              <a href="chi-tiet-san-pham/1">
                                 <img src="{{ asset('images/c1.webp') }}" class="img-fluid" alt="shorts-jean-nu-rach-totoday-10202.jpg"
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/shorts-jean-nu-rach-totoday-10202.jpg" alt="shorts-jean-nu-rach-totoday-10202.jpg"
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="index.php?option=product&slug=shorts-jean-nu-rach-totoday-10202">SHORTS JEAN NỮ RÁCH - TOTODAY - 10202</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>10,000đ</del></div>  
                              <div class="flex-fill text-end text-main">10,000đ</div>
                           </h3>    
                     </div>                    </div>
                                    </div>
            </div>
        </div>
     </div> 
                                    </div>
   </section>
   <section class="hdl-lastpost bg-main mt-3 py-4">
      <div class="container">
         <div class="row">
            <div class="col-md-9">
               <h3>BÀI VIẾT MỚI</h3>
               <div class="row">
                  <div class="col-md-6">
                     <a href="post_detail.html">
                        <img class="img-fluid" src="public/images/post/post-4.webp" />
                     </a>
                     <h3 class="post-title fs-4 py-2">
                        <a href="post_detail.html">
                           Tieu đề bài viết mói nhất 1
                        </a>
                     </h3>
                     <p>Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1Tieu đề bài
                        viết mói nhất 1Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất
                        1Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1</p>
                  </div>
                  <div class="col-md-6">
                     <div class="row mb-3">
                        <div class="col-md-4">
                           <a href="post_detail.html">
                              <img class="img-fluid" src="public/images/post/post-1.jpg" />
                           </a>
                        </div>
                        <div class="col-md-8">
                           <h3 class="post-title fs-5">
                              <a href="post_detail.html">
                                 Tieu đề bài viết mói nhất 2
                              </a>
                           </h3>
                           <p>Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1</p>
                        </div>
                     </div>
                     <div class="row mb-3">
                        <div class="col-md-4">
                           <a href="post_detail.html">
                              <img class="img-fluid" src="public/images/post/post-2.jpg" />
                           </a>
                        </div>
                        <div class="col-md-8">
                           <h3 class="post-title fs-5">
                              <a href="post_detail.html">
                                 Tieu đề bài viết mói nhất 3
                              </a>
                           </h3>
                           <p>Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1</p>
                        </div>
                     </div>
                     <div class="row mb-3">
                        <div class="col-md-4">
                           <a href="post_detail.html">
                              <img class="img-fluid" src="public/images/post/post-3.jpg" />
                           </a>
                        </div>
                        <div class="col-md-8">
                           <h3 class="post-title fs-5">
                              <a href="post_detail.html">
                                 Tieu đề bài viết mói nhất 4
                              </a>
                           </h3>
                           <p>Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-3">FACEBOOK</div>
         </div>
      </div>
   </section>  
<section class="hdl-footer pb-4">
      <div class="container">
         <div class="row">
            <div class="col-md-4 pt-4">
               <h3 class="widgettilte">CHÚNG TÔI LÀ AI ?</h3>
               <p class="pt-1">
                  Copyright@ 2024 HoangBaoShop là hệ thống bán sĩ và lẽ thời trang nam, nữ, trẻ em và quần áo thể thao,
                  mong muốn đem đến chất lượng tốt nhất cho khách hàng.
               </p>
               <p class="pt-1">
                  Địa chỉ: 47/18/16 kp ben cat , p.phuoc binh , thu duc
               </p>
               <p class="pt-1">
                  Điện thoại: 0954654938(call, zalo) - Email: baom64505@gmail.com
               </p>
               <h3 class="widgettilte">MẠNG XÃ HỘI</h3>
               <div class="social my-3">
                  <div class="facebook-icon">
                     <a href="#">
                        <i class="fab fa-facebook-f"></i>
                     </a>
                  </div>
                  <div class="instagram-icon">
                     <a href="#">
                        <i class="fab fa-instagram"></i>
                     </a>
                  </div>
                  <div class="google-icon">
                     <a href="#">
                        <i class="fab fa-google"></i>
                     </a>
                  </div>
                  <div class="youtube-icon">
                     <a href="#">
                        <i class="fab fa-youtube"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-md-4 pt-4">
                              <h3 class="widgettilte">
                  <strong>Liên hệ</strong>
               </h3>
               <ul class="footer-menu">
                                       <li><a href="index.php?option=page&cat=chinh-sach-hoan-tien">Chính Sách Hoàn Tiền</a></li>
                                       <li><a href="index.php?option=page&cat=chinh-sach-bao-hanh">Chính sách bảo hành</a></li>
                                       <li><a href="index.php?option=page&cat=chinh-sach-doi-hang">Chính sách đổi hàng</a></li>
                                 </ul>            </div>
            <div class="col-md-4 pt-4 text-end">
               <h3 class="fs-5 text-end">
                  <strong>Lượt truy cập</strong>
               </h3>
               <p class="my-1">9888 lượt</p>
            </div>
         </div>
      </div>
   </section>
   <section class="dhl-copyright bg-dark py-3">
      <div class="container text-center text-dark">
         Thiết kế bởi: mai hoang bao- Phone: 0964654938
      </div>
   </section>
</body>

</html>  

   