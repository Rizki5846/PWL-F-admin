<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
    <body class="bg-slate-50">
        <x-Navbar />
        <div class="flex">
            <div class="w-1/4"> 
                <x-Sidebar />
            </div>
            <div > 
                <x-Card />
                <x-Card />
                <x-Card />
                <x-Card />
                <x-Card />
                <x-Card />
            </div>
        </div>
    </body>
    <div>
        <x-Footer class="fixed bottom-0 w-full bg-gray-200 p-4">
        </x-Footer>
    </div>
    </html>