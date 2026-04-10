        <div id="head">
            <h1><a href="{{url('top')}}"><img src="images/atlas.png"></a></h1>
            <div id="">
                <div id="">
                    <p>{{Auth::user()->username}}さん</p>
                </div>
                <ul>
                    <li><a href="{{url('top')}}">ホーム</a></li>
                    <li><a href="{{url('profile')}}">プロフィール</a></li>
                    <li>
                        {!! Form::open(['route'=>'logout','method'=>'post'])!!}
                        {!!Form::submit('ログアウト')!!}
                        {!! Form::close()!!}
                    </li>
                </ul>
            </div>
        </div>
