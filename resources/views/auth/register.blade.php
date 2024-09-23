<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SIAKAD')</title>
    @vite('resources/css/app.css')
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-sm px-10">
        <form action="{{ url('/register') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <h1 class="text-2xl flex items-center justify-center font-bold mb-4">Register</h1>
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <input type="text" name="name" id="name"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" name="email" id="email"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" name="password" id="password"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    required>
            </div>
            <div class="mb-6">
                <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Confirm
                    Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    required>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2">Role</label>

                <div class="flex items-center mb-2">
                    <input type="radio" name="role" id="dosen_role" value="dosen"
                        class="appearance-none h-4 w-4 border border-gray-300 rounded-full checked:bg-blue-600 checked:border-transparent focus:outline-none transition duration-200">
                    <label for="dosen_role" class="ml-2 text-gray-700">Dosen</label>
                </div>
                <div class="flex items-center">
                    <input type="radio" name="role" id="mahasiswa_role" value="mahasiswa"
                        class="appearance-none h-4 w-4 border border-gray-300 rounded-full checked:bg-blue-600 checked:border-transparent focus:outline-none transition duration-200">
                    <label for="mahasiswa_role" class="ml-2 text-gray-700">Mahasiswa</label>
                </div>
            </div>

            <div class="flex items-center justify-between">
                <button
                    class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Register
                </button>
            </div>
        </form>
    </div>
</body>

</html>
