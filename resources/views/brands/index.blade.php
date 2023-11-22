<html>
<head>
    <title>列出廠商</title>
</head> 
<body>
@for($i=0;i<count(brands);i++)
    {{$brands[$i]['bname']}},{{$brands[$i][location]}},<br/>
</body>
@endfor

</html> 