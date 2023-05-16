<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            overflow-x:hidden;
        }
    </style>
</head>
<body>
    <div class="Frame" style="height:100vh;width:100vw;overflow-x:hidden;">
        <iframe style="width:100%; height:100vh" src="{{ asset($data->Resume) }}" frameborder="0" ></iframe>
    </div>

</body>
</html>