<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pixel Position</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
        rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="bg-black text-white font-hanken-grotesk pb-10">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10 font-bold">
            <div>
                <a href="/">
                    <img src="{{Vite::asset("resources/images/logo.svg")}}" alt="logo"/>
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="/">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>

            <div class="flex space-x-4">
                @auth
                    <a href="/jobs/create">Post a Job</a>
                    <form method="POST" action="/logout">
                        @csrf
                        @method("DELETE")
                        <button>Logout</button>
                    </form>
                @endauth

                @guest
                        <a href="/login">Login</a>
                        <a href="/register">Sign up</a>
                @endguest
            </div>
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{$slot}}
        </main>
    </div>
</body>
</html>
