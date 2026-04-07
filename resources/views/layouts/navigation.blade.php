        <div id="head">
            <h1><a><img src="images/atlas.png"></a></h1>
            <div id="">
                <div id="">
                    <p>{{Auth::user()->username}}さん</p>
                </div>
                <ul>
                    <li><a href="">ホーム</a></li>
                    <li><a href="">プロフィール</a></li>
                    <li>
                        {!! Form::open(['route'=>'logout','method'=>'post'])!!}
                        {!!Form::submit('ログアウト')!!}
                        {!! Form::close()!!}
                    </li>
                </ul>
            </div>
        </div>
