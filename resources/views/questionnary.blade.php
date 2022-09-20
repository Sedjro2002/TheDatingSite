<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Document</title>
</head>

<body class="bg-gradient-r from-blue-800 to-pink-700 ">
    <div class="border-black rounded-xl mx-auto mt-40 justify-center flex-shrink-0 p-6 bg-slate-400 w-2/4 h-4/5">
        <form action="{{ route('storeInfo') }}" method="POST">
            @csrf

            <div class="flex justify-between m-2">
                <label for="firstname">Fisrt Name</label>
                <input type="text" name="firstname" id="firstname" class="rounded-xl w-2/5">
            </div>
            <div class="flex justify-between m-2">
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" id="lastname" class="rounded-xl w-2/5">
            </div>
            <div class="flex justify-between m-2">
                <label for="sex">sex</label>
                <select name="sex" id="sex">
                    <option value="0">Boy</option>
                    <option value="1">Girl</option>
                </select>
            </div>
            <div class="flex justify-between m-2">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="10"></textarea>
            </div>
            <div class="flex justify-between m-2">
                <label for="choice1">Choice1</label>
                <select name="choice1" id="choice1">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <div class="flex justify-between m-2">
                <label for="choice2">Choice2</label>
                <select name="choice2" id="choice2">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <div class="flex justify-between m-2">
                <label for="choice3">Choice3</label>
                <select name="choice3" id="choice3">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <div class="flex justify-between m-2">
                <label for="choice4">Choice4</label>
                <select name="choice4" id="choice4">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <div class="flex justify-between m-2">
                <label for="choice5">Choice5</label>
                <select name="choice5" id="choice5">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <div class="flex justify-between m-2">
                <label for="choice6">Choice6</label>
                <select name="choice6" id="choice6">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <div class="flex justify-between m-2">
                <label for="choice7">Choice7</label>
                <select name="choice7" id="choice7">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <div class="flex justify-between m-2">
                <label for="choice8">Choice8</label>
                <select name="choice8" id="choice8">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <div class="flex justify-between m-2">
                <label for="choice9">Choice9</label>
                <select name="choice9" id="choice9">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <div class="flex justify-between m-2">
                <label for="choice10">Choice10</label>
                <select name="choice10" id="choice10">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <div class="flex justify-between m-2">
                <button type="submit" class="bg-blue-600 rounded-2xl w-20 h-10 text-white text-xl">Submit</button>
            </div>
        </form>
    </div>


</body>

</html>
