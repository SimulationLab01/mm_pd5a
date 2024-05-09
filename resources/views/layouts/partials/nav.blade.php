<nav class="one-page-header one-page-header-style-2 navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <input id="authenticated" type="hidden" value="{{ auth()->check() }}">
            <div class="menu-container page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="#intro">
                    <!-- <span>M</span>_m -->
                    <img src="img/pixsee-logo.png" class="logo" alt="Logo">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <div class="menu-container">
                    <ul class="log-reg-block visible-md-block visible-lg-block">
                        @if (Auth::check())
                            <li class="cd-log_reg">
                                <a class="cd-signin" href="{{env('ROOT_PATH')}}/logout">登出</a>
                            </li>
                        @else
                            <li class="cd-log_reg">
                                <a class="cd-signin" href="{{env('ROOT_PATH')}}/login">登入</a>
                            </li>
                            <!-- <li class="cd-log_reg">
                                <a class="cd-signup" href="javascript:void(0);">註冊</a>
                            </li> -->
                        @endif
                    </ul>

                    <ul class="nav navbar-nav">
                        <li class="page-scroll home">
                            <a href="#body" class="nav-item">樣品保管</a>
                        </li>
                        <li class="page-scroll">
                            <select id="sel_attr" class="browser-default  form-control" name="sel_attr" placeholder="">
                            </select>
                        </li>
                        @if (Auth::check())
                            <!-- <li class="page-scroll">
                            <a href="#detract">減損資產</a>
                            </li>
                            <li class="page-scroll">
                                <a href="#check">盤點清單</a>
                            </li>
                            <li class="page-scroll">
                                <a href="#delete">刪除清單</a>
                            </li> -->
                            <li class="cd-log_reg visible-xs-block visible-sm-block">
                                <a class="cd-signin" href="{{env('ROOT_PATH')}}/logout">登出</a>
                            </li>
                            <!-- <li class="cd-log_reg visible-xs-block visible-sm-block">
                                <a class="cd-signup" href="javascript:void(0);">註冊</a>
                            </li> -->
                        @else
                            <li class="cd-log_reg visible-xs-block visible-sm-block">
                                <a class="cd-signin" href="{{env('ROOT_PATH')}}/login">登入</a>
                            </li>
                        @endif
                    </ul>
                    <div class="col-sm-9 v_text">
                        
                    </div>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>