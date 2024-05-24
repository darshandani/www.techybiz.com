<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div style="width:600px; margin:0 auto; font-family:Arial, Helvetica, sans-serif;">
        <header style="background-color:#f1f1f1; width:100%; float:left; padding:15px 15px 25px; text-align:center; position:relative; margin-bottom:30px;">
            <a href="#"><img src=""></a>
        </header>
        <div style="width:100%; float:left; padding:15px; min-height:150px;">
            <P>
                <strong>Email Verification</strong>
                <span><a href="{{ route('forgot.verify', $data['token']) }}">{{ route('forgot.verify', $data['token']) }}</a></span>
            </P>
        </div>
        <!--Dynemic Contain here-->
    </div>
</body>

</html>