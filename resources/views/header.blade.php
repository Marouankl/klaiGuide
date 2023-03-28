<style>


    /*--------------------------------------------------------------
    # Header
    --------------------------------------------------------------*/
    #header {
        top: 50px;
        height: 70px;
        z-index: 997;
        transition: all 0.5s;
        padding: 10px 0;
        background: rgba(26, 24, 22, 0.85);
    }

    #header.header-transparent {
        background: transparent;
    }

    #header.header-scrolled {
        top: 0;
        background: rgba(26, 24, 22, 0.85);
    }

    #header .logo {
        border-radius: 50%;
    }

    #header .logo h1 a, #header .logo h1 a:hover {
        color: #fff;
        text-decoration: none;
    }

    #header .logo img {
        border-radius: 50%;
    }

    @media (max-width: 992px) {
        #header {
            top: 0;
            background: rgba(26, 24, 22, 0.85);
        }
    }

    /*--------------------------------------------------------------
    # Navigation Menu
    --------------------------------------------------------------*/
    /* Desktop Navigation */


    .navbar > ul > li {
        position: relative;
        white-space: nowrap;
        float: left;
    }

    .navbar a {
        display: block;
        position: relative;
        color: white;
        padding: 9px 14px;
    // transition: 0.3s;
        font-size: 15px;
        font-weight: 500;
        font-family: "Poppins", sans-serif;
    }

    .navbar a:hover, .navbar-menu .active > a, .navbar li:hover > a {
        color: #ffb03b;
        text-decoration: none;
    }
    .navbar .action-button, .header-dark .navbar .action-button:active {
        background:#208f8f;
        border-radius:20px;
        font-size:inherit;
        color:#fff;
        box-shadow:none;
        border:none;
        text-shadow:none;
        padding:.5rem .8rem;
        transition:background-color 0.25s;
    }
</style>
<!-- ======= Header ======= -->



    <nav class="navbar navbar-expand-xl navbar-dark bg-dark">


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/admin') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>


    </nav>

