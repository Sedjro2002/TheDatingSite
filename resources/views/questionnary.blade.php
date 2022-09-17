<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Document</title>
</head>

<body class="bg-black ">
    <div class="border-black rounded-xl mx-auto mt-40 justify-center flex-shrink-0 p-6 bg-slate-400 w-2/4 h-4/5">
        <form action="/profil">
            <div class="flex justify-between m-2">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="rounded-xl w-2/5">
            </div>
            <div class="flex justify-between m-2">
                <label for="email">First name</label>
                <input type="email" name="email" id="email" class="rounded-xl w-2/5">
            </div>
            <div class="flex justify-between m-2">
                <label for="password">sex</label>
                <input type="password" name="password" id="password" class="rounded-xl w-2/5">
            </div>
            <div class="flex justify-between m-2">
                <label for="couple">in couple ?</label>
                <select type="radio" name="couple" id="couple"></select>
            </div>
            <div class="flex justify-between m-2">
                <button type="submit" class="bg-blue-600 rounded-2xl w-20 h-10 text-white text-xl">Submit</button>
            </div>
        </form>
    </div>


</body>

</html>
