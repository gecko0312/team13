<html>
    <head>

    </head>
    <body>
        <h1>顯示所有電腦螢幕資訊</h1>
        @for($i=0; $i<count($monitors); $i++)
            <span>編號：</span>{{ $monitors[$i]['id'] }} </br>
            <span>產品型號：</span>{{ $monitors[$i]['product_model'] }} </br>
            <span>廠牌：</span>{{ $monitors[$i]['bid'] }} </br>
            <span>尺寸：</span>{{ $monitors[$i]['size'] }} </br>
            <span>亮度：</span>{{ $monitors[$i]['nits'] }} </br>
            <span>更新率：</span>{{ $monitors[$i]['hz'] }} </br>
            <span>面板：</span>{{ $monitors[$i]['panel'] }} </br>
            <span>喇叭：</span>{{ $monitors[$i]['speaker'] }} </br>
            <span>解析度：</span>{{ $monitors[$i]['resolution'] }} </br>
            <span>價錢：</span>{{ $monitors[$i]['price'] }} </br>
            </br>
        @endfor

    </body>
</html>