<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <!-- SEO Meta Tags-->
    <meta name="keywords" content="Mozisha messenger" />
    <meta name="description" content="Mozisha messenger" />
    <meta name="subject" content="communication">
    <meta name="copyright" content="frontendmatters">
    <meta name="revised" content="Sunday, July 18th, 2010, 5:15 pm" />
    <title>Mozisha messenger</title>
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('chat/assets/img/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('chat/assets/img/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('chat/assets/img/favicon-16x16.png')}}">
    <link rel="shortcut icon" href="{{asset('chat/assets/img/favicon.ico')}}" />
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="{{asset('chat/assets/webfonts/inter/inter.css')}}">
    <link rel="stylesheet" href="{{asset('chat/assets/css/app.min.css')}}">
    <link rel="stylesheet" href="{{asset('chat/assets/css/skins/dark-skin.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body class="chats-tab-open">

<!-- Main Layout Start -->
<div class="main-layout">
    <!-- Navigation Start -->
    <div class="navigation navbar navbar-light bg-primary">
        <!-- Logo Start -->
        <a class="d-none d-xl-block bg-light rounded p-1" href="../index-2.html">
            <!-- Default :: Inline SVG -->
            <svg height="30" width="30" viewBox="0 0 512 511" ><g><path d="m120.65625 512.476562c-7.25 0-14.445312-2.023437-20.761719-6.007812-10.929687-6.902344-17.703125-18.734375-18.117187-31.660156l-1.261719-41.390625c-51.90625-46.542969-80.515625-111.890625-80.515625-183.992188 0-68.816406 26.378906-132.101562 74.269531-178.199219 47.390625-45.609374 111.929688-70.726562 181.730469-70.726562s134.339844 25.117188 181.730469 70.726562c47.890625 46.097657 74.269531 109.382813 74.269531 178.199219 0 68.8125-26.378906 132.097657-74.269531 178.195313-47.390625 45.609375-111.929688 70.730468-181.730469 70.730468-25.164062 0-49.789062-3.253906-73.195312-9.667968l-46.464844 20.5c-5.035156 2.207031-10.371094 3.292968-15.683594 3.292968zm135.34375-471.976562c-123.140625 0-216 89.816406-216 208.925781 0 60.667969 23.957031 115.511719 67.457031 154.425781 8.023438 7.226563 12.628907 17.015626 13.015625 27.609376l.003906.125 1.234376 40.332031 45.300781-19.988281c8.15625-3.589844 17.355469-4.28125 25.921875-1.945313 20.132812 5.554687 41.332031 8.363281 63.066406 8.363281 123.140625 0 216-89.816406 216-208.921875 0-119.109375-92.859375-208.925781-216-208.925781zm-125.863281 290.628906 74.746093-57.628906c5.050782-3.789062 12.003907-3.839844 17.101563-.046875l55.308594 42.992187c16.578125 12.371094 40.304687 8.007813 51.355469-9.433593l69.519531-110.242188c6.714843-10.523437-6.335938-22.417969-16.292969-14.882812l-74.710938 56.613281c-5.050781 3.792969-12.003906 3.839844-17.101562.046875l-55.308594-41.988281c-16.578125-12.371094-40.304687-8.011719-51.355468 9.429687l-69.554688 110.253907c-6.714844 10.523437 6.335938 22.421874 16.292969 14.886718zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#665dfe"/></g> </svg>

            <!-- Alternate :: External File link -->
            <!-- <img class="injectable" src="./../assets/media/logo.svg" alt=""> -->
        </a>
        <!-- Logo End -->

        <!-- Main Nav Start -->
        <ul class="nav nav-minimal flex-row flex-grow-1 justify-content-between flex-xl-column justify-content-xl-center" id="mainNavTab" role="tablist">

            <!-- Chats Tab Start -->
            <li class="nav-item">
                <a class="nav-link p-0 py-xl-3 active" id="chats-tab" href="#chats-content" title="Chats">
                    <!-- Default :: Inline SVG -->
                    <svg class="hw-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                    </svg>

                    <!-- Alternate :: External File link -->
                    <!-- <img class="injectable hw-24" src="./../assets/media/heroicons/outline/chat-alt-2.svg" alt="Chat icon"> -->
                </a>
            </li>
            <!-- Chats Tab End -->

        </ul>
        <!-- Main Nav End -->
    </div>
    <!-- Navigation End -->

    <!-- Main Start -->
    <div class="main main-visible"  id="app">

        @yield('content')

    </div>
    <!-- Main End -->
    <script src="{{asset('js/app.js')}}"></script>

    <!-- App Add-ons Start -->
    <div class="appbar">
        <div class="appbar-wrapper hide-scrollbar">

            <!-- Chat Back Button (Visible only in Small Devices) -->
            <div class="d-flex justify-content-center border-bottom w-100">
                <button class="btn btn-secondary btn-icon m-0 btn-minimal btn-sm text-muted d-xl-none" type="button" data-apps-close="">
                    <!-- Default :: Inline SVG -->
                    <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>

                    <!-- Alternate :: External File link -->
                    <!-- <img class="injectable hw-20" src="./../assets/media/heroicons/outline/arrow-left.svg" alt=""> -->
                </button>
            </div>


            <div class="appbar-head">
                <!-- Default :: Inline SVG -->
                <svg class="hw-20" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>

                <!-- Alternate :: External File link -->
                <!-- <img class="hw-20" src="./../assets/media/heroicons/outline/view-grid.svg" alt="" class="injectable hw-20"> -->
                <h6 class="mb-0 mt-1">Chats</h6>
            </div>



        </div>

        <!-- Tab panes -->
        <div class="tab-content appnavbar-content">
            <div class="tab-pane h-100 active" id="app-welcome" role="tabpanel">
                <div class="appnavbar-content-wrapper">
                    <div class="d-flex flex-column justify-content-center text-center h-100 w-100">
                        <div class="container">
                            <div class="avatar avatar-lg mb-2">
                                <img class="avatar-img" src="" alt="">
                            </div>

                            <h5>Hey, Boss</h5>
                            <p class="text-muted">Please wait.</p>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- App Add-ons End -->

    <div class="backdrop"></div>

    <!-- All Modals Start -->


</div>
<!-- Main Layout End -->

<!-- Javascript Files -->
<script src="{{asset('chat/assets/vendors/jquery/jquery-3.5.0.min.js')}}"></script>
<script src="{{asset('chat/assets/vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('chat/assets/vendors/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('chat/assets/vendors/svg-inject/svg-inject.min.js')}}"></script>
<script src="{{asset('chat/assets/vendors/modal-stepes/modal-steps.min.js')}}"></script>
<script src="{{asset('chat/assets/js/app.js')}}"></script>

<script>
    // Scroll to end of chat
    document.querySelector('.chat-finished').scrollIntoView({
        block: 'end',               // "start" | "center" | "end" | "nearest",
        behavior: 'auto'          //"auto"  | "instant" | "smooth",
    });


</script>
</body>


</html>
