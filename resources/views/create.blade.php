<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container mx-2">
        <h2 class="text-lg font-bold">Tambah Data Matkul</h2>
        <form action="/create" method="post">
            @csrf
            <div class="mb-6">
                <label for="input-matkul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                    Matkul</label>
                <input type="text" name="input_matkul" id="input-matkul"
                    class="max-w-lg bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('input_matkul')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="input-sks" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SKS
                    Matkul</label>
                <input type="number" name="sks_matkul" id="input-sks"
                    class="max-w-lg bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <button type="submit" class="bg-blue-500 py-2 px-4 rounded text-white">Tambah</button>
        </form>
    </div>
</body>

</html>
