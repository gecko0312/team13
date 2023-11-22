<html>

    <head>
        <title>列出所有品牌</title>
    </head>

        <body>
            <h1>顯示所有品牌資訊</h1>

            @for($i=0;$i<count($brands); $i++)
                <span>編號：</span>{{ $brands[$i]['id'] }} </br>
                <span>名稱：</span>{{ $brands[$i]['bname'] }} </br>
                <span>地區：</span>{{ $brands[$i]['location'] }} </br>
                <span>成立時間：</span>{{ $brands[$i]['brand_time'] }} </br>
                </br>
            @endfor
        </body>

</html>
