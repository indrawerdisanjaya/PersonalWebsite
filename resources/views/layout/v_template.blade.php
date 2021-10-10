
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slimhamdi.net/tunis/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Mar 2021 11:56:45 GMT -->
<head>
    <meta charset="utf-8">
    <title>Indra Profil Website - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('layout.header')
</head>
@if ($page==1)

<body class="home">
    @elseif($page==2)

    <body class="about">
        @elseif($page==3)

        <body class="portfolio">
            @elseif($page==4)

            <body class="contact">
                @elseif($page==5)

                <body class="blog">
                    @endif
<!-- Live Style Switcher Starts - demo only -->
<div id="switcher" class="">
    <div class="content-switcher">
        <h4>STYLE SWITCHER</h4>
        <ul>
            <li>
                <a href="#" onclick="setActiveStyleSheet('purple');" title="purple" class="color"><img src="{{asset('template/')}}/img/styleswitcher/purple.png" alt="purple"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('red');" title="red" class="color"><img src="{{asset('template/')}}/img/styleswitcher/red.png" alt="red"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('blueviolet');" title="blueviolet" class="color"><img src="{{asset('template/')}}/img/styleswitcher/blueviolet.png" alt="blueviolet"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('blue');" title="blue" class="color"><img src="{{asset('template/')}}/img/styleswitcher/blue.png" alt="blue"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('goldenrod');" title="goldenrod" class="color"><img src="{{asset('template/')}}/img/styleswitcher/goldenrod.png" alt="goldenrod"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('magenta');" title="magenta" class="color"><img src="{{asset('template/')}}/img/styleswitcher/magenta.png" alt="magenta"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('yellowgreen');" title="yellowgreen" class="color"><img src="{{asset('template/')}}/img/styleswitcher/yellowgreen.png" alt="yellowgreen"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('orange');" title="orange" class="color"><img src="{{asset('template/')}}/img/styleswitcher/orange.png" alt="orange"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('green');" title="green" class="color"><img src="{{asset('template/')}}/img/styleswitcher/green.png" alt="green"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('yellow');" title="yellow" class="color"><img src="{{asset('template/')}}/img/styleswitcher/yellow.png" alt="yellow"/></a>
            </li>
        </ul>
        <a href="https://themeforest.net/item/tunis-personal-portfolio/26761598?irgwc=1&amp;clickid=UBs0rDX6YxyJWfewUx0Mo3E1UkiwozXD10XATw0&amp;iradid=275988&amp;irpid=1327395&amp;iradtype=ONLINE_TRACKING_LINK&amp;irmptype=mediapartner&amp;mp_value1=&amp;utm_campaign=af_impact_radius_1327395&amp;utm_medium=affiliate&amp;utm_source=impact_radius" class="waves-effect waves-light font-weight-700 purchase"><i class="fa fa-shopping-cart"></i> Purchase</a>
        <div id="hideSwitcher">&times;</div>
    </div>
</div>
<div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
<!-- Live Style Switcher Ends - demo only -->
<!-- Header Starts -->
<header class="header" id="navbar-collapse-toggle">
    <!-- Fixed Navigation Starts -->
    <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
        @if ($page==1)
        <li class="icon-box active">
        @else
        <li class="icon-box">
        @endif
            <i class="fa fa-home"></i>
            <a href="/">
                <h2>Home</h2>
            </a>
        </li>
        @if ($page==2)
        <li class="icon-box active">
        @else
        <li class="icon-box">
        @endif
            <i class="fa fa-user"></i>
            <a href="/about">
                <h2>About</h2>
            </a>
        </li>
        @if ($page==3)
        <li class="icon-box active">
        @else
        <li class="icon-box">
        @endif
            <i class="fa fa-briefcase"></i>
            <a href="/portofolio">
                <h2>Portfolio</h2>
            </a>
        </li>
        @if ($page==4)
        <li class="icon-box active">
        @else
        <li class="icon-box">
        @endif
            <i class="fa fa-envelope-open"></i>
            <a href="/contact">
                <h2>Contact</h2>
            </a>
        </li>
    </ul>
    <!-- Fixed Navigation Ends -->
    <!-- Mobile Menu Starts -->
    <nav role="navigation" class="d-block d-lg-none">
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul class="list-unstyled" id="menu">
                <li class="active"><a href="/"><i class="fa fa-home"></i><span>Home</span></a></li>
                <li><a href="/about"><i class="fa fa-user"></i><span>About</span></a></li>
                <li><a href="/portofolio"><i class="fa fa-folder-open"></i><span>Portfolio</span></a></li>
                <li><a href="/contact"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>
                
            </ul>
        </div>
    </nav>
    <!-- Mobile Menu Ends -->
</header>
<!-- Header Ends -->
<!-- Main Content Starts -->
    @yield('container')
<!-- Main Content Ends -->

@include('layout.footer')

</body>


<!-- Mirrored from slimhamdi.net/tunis/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Mar 2021 11:57:16 GMT -->
</html>
