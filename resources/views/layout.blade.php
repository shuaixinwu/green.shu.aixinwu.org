<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>上海大学社区管理部</title>
    <link rel="stylesheet" href="/src/framework7/dist/css/framework7.ios.min.css">
    <link rel="stylesheet" href="/src/framework7/dist/css/framework7.ios.colors.min.css">
    <link rel="stylesheet" href="/src/framework7/dist/css/my-app.css">
    <link rel="stylesheet" href="/green.css">
</head>

<body>
    <!-- Status bar overlay for full screen mode (PhoneGap) -->
    <div class="statusbar-overlay"></div>
    <!-- Panels overlay-->
    <div class="panel-overlay"></div>

    <div class="views">
        <div class="view view-main">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="center sliding logo">
                        上海大学低碳达人
                    </div>
                    <div class="right"> </div>
                </div>
            </div>
            <div class="pages navbar-through toolbar-through">
                <div data-page="index" class="page">
                    <div class="page-content">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="/src/framework7/dist/js/framework7.min.js"></script>
    <script type="text/javascript" src="/src/framework7/dist/js/my-app.js"></script>
    <script>
        var myApp = new Framework7();

        // 1 Slide Per View, 50px Between
        var mySwiper1 = myApp.swiper('.swiper-1', {
            pagination: '.swiper-1 .swiper-pagination',
            spaceBetween: 50
        });
        $$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $$('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @yield('body')
</body>

</html>