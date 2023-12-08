<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>Clothing Stores</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" integrity="sha512-siarrzI1u3pCqFG2LEzi87McrBmq6Tp7juVsdmGY1Dr8Saw+ZBAzDzrGwX3vgxX1NkioYNCFOVC0GpDPss10zQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/layout.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>
<div>
    <div class="header">
    <div class="header-container">
      <div class="header-body">
        <div class="header-logo">
          <h2>Clothing Stores</h2>
        </div>
        <div class="header-list">
          <a href="/">Trang chủ</a>
          <a href="">Sản phẩm</a>
          <a href="">Cửa hàng</a>
        </div>
        <div class="search-btn-group">
            <i class="fa-solid fa-magnifying-glass search-btn"></i>
            <input type="text" placeholder="Tìm kiếm" class="search-input">
        </div>
        <div class="header-user">
            <div class="user-group">
                @if(session()->has('user'))
                <div class="login-box">
                <p>{{session()->get('user')['name']}}</p>
                    <a href="/logout">Đăng xuất</a>
                </div>
                @else
                <a href="/login"><i class="fa-regular fa-user header-user-icon"></i></a>
                <p>Tài khoản</p>
                @endif
            </div>
            <div class="user-group">
                <a href="/cart">
                <i class="fa-solid fa-cart-shopping header-user-icon"></i>
                <p>Giỏ hàng {{ Cart::getTotalQuantity()}}</p>
                </a>
            </div>
        </div>
      </div>
    </div>
    </div>
    <div>
        @yield('content')
    </div>

        <div class="footer-container">
        <div class="footer-body">
            <div class="footer-body-left">
            <img
                src="https://multikart-react-reactpixelstrap.vercel.app/assets/images/icon/logo.png"
                alt="Hinh"
            />
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                ad minim veniam.
            </p>
            <div>
                <FacebookIcon class="footer-icon" />
                <InstagramIcon class="footer-icon" />
                <GoogleIcon class="footer-icon" />
                <ShopIcon class="footer-icon" />
            </div>
            </div>
            <div class="footer-body-right">
            <div class="footer-body-right-body">
                <h4>MY ACCOUNT</h4>
                <div class="footer-tag">
                <a>Womens</a>
                <a>Clothing</a>
                <a>Accessories</a>
                <a>Featured</a>
                </div>
            </div>
            <div class="footer-body-right-body">
                <h4>WHY WE CHOOSE</h4>
                <div class="footer-tag">
                <a>Shipping & Return</a>
                <a>Secure Shopping</a>
                <a>Gallary</a>
                <a>Affiliates</a>
                <a>Contacts</a>
                </div>
            </div>
            <div class="footer-body-right-body">
                <h4>STORE INFORMATION</h4>
                <div class="footer-tag">
                <li>
                    <LocationOnIcon class="mr" />
                    Multikart Demo Store, Demo Store India 345-659
                </li>
                <li>
                    <CallIcon class="mr"/>
                    Call Us: 123-456-7898
                </li>
                <li>
                    <EmailIcon class="mr"/>
                    Email Us: Support@Fiot.Com
                </li>
                <li>
                    <FaxIcon class="mr"/>
                    Fax: 123456 2023-24
                </li>
                </div>
            </div>
            </div>
        </div>
        </div>
</div>
<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>