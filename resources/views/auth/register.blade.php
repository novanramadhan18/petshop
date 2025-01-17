<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Registrasi</title>
</head>
<body class="flex flex-col bg-white lg:flex-row font-jost">
    <div class="w-full h-full bg-blue-200">
        <img class="w-full h-screen object-cover" src="{{ asset('img/cat2.jpg')}}" alt="">
    </div>
    <div class="w-full h-screen flex p-12">
        <div class="w-full h-fit max-w-md flex flex-col mx-auto my-auto gap-5">
            <div>
                <p class="text-xl font-bold font-jost">Create New Account</p>
            <p class="text-xs text-gray-500">Please enter details</p>
            </div>
        <div class="space-y-2">
            <p class="text-xs">Full Name</p>
            <input class="w-full border border-black rounded-md text-sm px-4 py-2" type="email" placeholder="Masukkan nama">
        </div>
        <div class="space-y-2">
            <p class="text-xs">Email Address</p>
            <input class="w-full border border-black rounded-md text-sm px-4 py-2" type="email" placeholder="Masukkan email">
        </div>
        <div class="space-y-2">
            <p class="text-xs">Password</p>
        <input class="w-full border border-black rounded-md text-sm px-4 py-2" type="password" placeholder="Masukkan password">
        </div>
        <button class="btn-primary">Signup</button>
        <p class="text-xs text-gray-500 text-center">OR</p>
        <button class="btn-primary">Signup with Google</button>
        <p class="text-xs text-center">Already have an account? <a class="text-blue-500 font-medium" href="">Click here!</a></p>
    </div>
</div>
</body>
</html>