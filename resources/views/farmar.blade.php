<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
<div class="container pt-5">
    <div class="formwarper">
        <input id="selectinput" type="text">
        <div class="formlist">
            <div>Rice<span><input onclick= retrive(ajexCall) class='select_check' type="checkbox" data="Rice" ></span></div>
            <div>Potato<span><input onclick= retrive(ajexCall) class='select_check' type="checkbox" data="Potato"></span></div>
        </div>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</body>
<script>



    function retrive(ajexcall){
        var ides = [];
        $('.formlist input:checked').each(function () {
            ides.push($(this).attr('data'))
        });
        ajexcall(ides);
    }

        function ajexCall(ides) {
            console.log(ides)

    }

</script>
</html>
