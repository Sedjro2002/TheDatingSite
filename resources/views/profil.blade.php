<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Document</title>
</head>

<body>
    <header>
        <nav class="bg-black h-14 w-full text-white inline-flex justify-between align-middle p-3">
            <h2 class="mx-4">My profil</h2>
            <ul class="inline-flex">
                <li class="mx-4"> <a href="/matching"> Matching</a></li>
                <li class="mx-4"> <a href="/welcome">log out</a> </li>
            </ul>
        </nav>
    </header>
    <div class="inline-flex">
        <div class="w-1/3 h-screen  text-center bg-slate-600">
            <div class="flex justify-center">
                <div class="w-64 h-64 rounded-full my-6 text-center align-middle text-white bg-black">profil picture
                </div>
            </div>

            <h1 class="font-bold">About me</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro repellat obcaecati hic, minima error
                similique
                officia, quo tenetur perferendis provident nulla ullam iure iste veniam voluptas. Natus, molestiae.
                Accusantium beatae sequi sed magnam doloremque mollitia, reprehenderit quaerat illum voluptates! Cumque
                autem tenetur nostrum</p>

        </div>



        <div class="w-2/3 h-screen text-center bg-green-300">
            <h1 class="mt-32">My description</h1>
            <input class="mx-auto mt-2 w-1/2" disabled type="text" placeholder="???">
            <input class="mx-auto mt-2 w-1/2" disabled type="text" placeholder="???">
            <input class="mx-auto mt-2 w-1/2" disabled type="text" placeholder="???">
            <input class="mx-auto mt-2 w-1/2" disabled type="text" placeholder="???">
            <input class="mx-auto mt-2 w-1/2" disabled type="text" placeholder="???">
            <input class="mx-auto mt-2 w-1/2" disabled type="text" placeholder="???">
        </div>
    </div>
</body>

</html>
