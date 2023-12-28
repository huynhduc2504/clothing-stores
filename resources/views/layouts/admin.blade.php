<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>Clothing Stores</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css"
        integrity="sha512-siarrzI1u3pCqFG2LEzi87McrBmq6Tp7juVsdmGY1Dr8Saw+ZBAzDzrGwX3vgxX1NkioYNCFOVC0GpDPss10zQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
</head>

<body>
    <div>
        <div>
            <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->

            <body class="dark:bg-zinc-800 [&>*]:leading-[1.6]">
                <!-- Sidenav -->
                <nav id="full-screen-example"
                    class="fixed left-0 top-0 z-[1035] h-screen w-60 -translate-x-full overflow-hidden bg-white shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] dark:bg-zinc-800 md:data-[te-sidenav-hidden='false']:translate-x-0"
                    data-te-sidenav-init data-te-sidenav-mode-breakpoint-over="0"
                    data-te-sidenav-mode-breakpoint-side="sm" data-te-sidenav-hidden="false"
                    data-te-sidenav-color="dark" data-te-sidenav-content="#content"
                    data-te-sidenav-scroll-container="#scrollContainer">
                    <div class="pt-6">
                        <div id="header-content" class="pl-4">
                            <img src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="Avatar"
                                class="mb-4 h-auto rounded-full align-middle" style="max-width: 50px;" />

                            <h4 class="mb-2 text-2xl font-medium leading-[1.2]">HUỲNH ĐỨC</h4>
                            <p class="mb-4">Quản trị hệ thống</p>
                        </div>
                        <hr class="border-gray-300" />
                    </div>
                    <div id="scrollContainer">
                        <ul class="menu bg-slate-950 w-full h-screen text-white text-xl">
                            <li>
                                <details open>
                                    <summary>Quản Lý</summary>
                                    <ul>
                                        <li>
                                            <details open>
                                                <summary><a href="/admin/product">Sản phẩm</a></summary>
                                                <ul>
                                                    <li><a href="/admin/product/add">Thêm sản phẩm</a></li>
                                                </ul>
                                            </details>
                                        </li>
                                        <li>
                                            <details open>
                                                <summary><a href="/admin/customer">Khách hàng</a></summary>
                                                <ul>
                                                    
                                                </ul>
                                            </details>
                                        </li>
                                        <li>
                                            <details open>
                                                <summary><a href="/admin/category">Danh mục</a></summary>
                                                <ul>
                                                    <li><a href="/admin/category/add">Thêm danh mục</a></li>
                                                    </li>
                                                </ul>
                                            </details>
                                        </li>
                                        <li>
                                            <details open>
                                                <summary><a href="/admin/color">Màu sắc</a></summary>
                                                <ul>
                                                    <li><a href="/admin/color/add">Thêm màu sắc</a></li>
                                                    </li>
                                                </ul>
                                            </details>
                                        </li>
                                        <li>
                                            <details open>
                                                <summary><a href="/admin/size">Kích thước</a></summary>
                                                <ul>
                                                    <li><a href="/admin/size/add">Thêm kích thước</a></li>
                                                    </li>
                                                </ul>
                                            </details>
                                        </li>

                                    </ul>
                                </details>
                            </li>
                            <li>
                                <details open>
                                    <summary>Tra cứu</summary>
                                    <ul>
                                        <li><a href="/admin/order">Đơn hàng</a></li>
                                    </ul>
                                </details>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- Sidenav -->
            </body>
            <div class="container-s">
                <div class="navbar bg-base-100 bg-black text-white">
                    <div class="flex-1">
                        <a class="btn btn-ghost text-xl " href="/admin">TRANG CHỦ</a>
                    </div>
                    <div class="flex-none gap-2">
                        <div class="form-control">
                            <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
                        </div>
                        <div class="dropdown dropdown-end">
                            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                                <div class="w-10 rounded-full">
                                    <img alt="Tailwind CSS Navbar component"
                                        src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                                </div>
                            </div>
                            <ul tabindex="0"
                                class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52 text-black">
                                <li>
                                    <a class="justify-between">
                                        Profile
                                        <span class="badge">New</span>
                                    </a>
                                </li>
                                <li><a>Settings</a></li>
                                <li><a>Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @yield('content')
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    // TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com 
    import {
        Sidenav,
        Ripple,
        initTE,
    } from "tw-elements";

    initTE({
        Sidenav,
        Ripple
    });

    const sidenav = document.getElementById("full-screen-example");
    const sidenavInstance = Sidenav.getInstance(sidenav);

    let innerWidth = null;

    const setMode = (e) => {
        // Check necessary for Android devices
        if (window.innerWidth === innerWidth) {
            return;
        }

        innerWidth = window.innerWidth;

        if (window.innerWidth < sidenavInstance.getBreakpoint("sm")) {
            sidenavInstance.changeMode("over");
            sidenavInstance.hide();
        } else {
            sidenavInstance.changeMode("side");
            sidenavInstance.show();
        }
    };

    if (window.innerWidth < sidenavInstance.getBreakpoint("sm")) {
        setMode();
    }

    // Event listeners
    window.addEventListener("resize", setMode);
    </script>
</body>

</html>