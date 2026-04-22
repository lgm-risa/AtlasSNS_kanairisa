        <div id="head">
            <h1><a href="{{url('top')}}"><img src="images/atlas.png"></a></h1>
            <div id="head_menu">
                <div id="menu-trigger">
                    <p class="username">{{Auth::user()->username}}さん<span class="arrow arrow-bottom"></span></p>
                </div>
                  <ul class="accordion_menu">
                    <li><a href="{{url('top')}}">HOME</a></li>
                    <li><a href="{{url('profile')}}">プロフィール</a></li>
                    <li>
                        {!! Form::open(['route'=>'logout','method'=>'post'])!!}
                        {!!Form::submit('ログアウト')!!}
                        {!! Form::close()!!}
                    </li>
                  </ul>

                <img src="images/icon1.png" alt="user-icon" class="user-icon">

            </div>

        </div>
