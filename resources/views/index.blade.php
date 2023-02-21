<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="">
        <div class="mt-3 ml-3">
            <a href="/create" class="bg-blue-700 px-4 py-2 rounded-2xl text-white text-lg">Tambah Data</a>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-3">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama Matkul
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah SKS
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_matkul as $item)
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item['nama'] }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $item['sks'] }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="/edit/{{ $item['id'] }}"
                                    class="bg-blue-500 py-2 px-4 text-white hover:underline rounded-full">Edit</a>

                                <form action="/delete" method="post" class="mt-3">
                                    @method('DELETE')
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item['id'] }}">
                                    <button
                                        class="bg-red-500 py-2 px-4 text-white hover:underline rounded-full">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
</body>

</html>
