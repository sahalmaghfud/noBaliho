<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Gubernur</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="container mx-auto my-10 p-4">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 p-4">
                <h2 class="text-white text-2xl font-bold">Edit Profil Gubernur</h2>
            </div>
            <div class="p-6">
                @if (session('success'))
                    <div class="bg-green-500 text-white p-4 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('gubernur.update', $gubernur->id) }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <label for="profil" class="block text-sm font-medium text-gray-700">Profil</label>
                            <textarea name="profil" id="profil"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">{{ $gubernur->profil }}</textarea>
                        </div>

                        <div>
                            <label for="program" class="block text-sm font-medium text-gray-700">Program</label>
                            <textarea name="program" id="program"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">{{ $gubernur->program }}</textarea>
                        </div>

                        <div>
                            <label for="facebook" class="block text-sm font-medium text-gray-700">Facebook</label>
                            <input type="text" name="facebook" id="facebook" value="{{ $gubernur->facebook }}"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <div>
                            <label for="instagram" class="block text-sm font-medium text-gray-700">Instagram</label>
                            <input type="text" name="instagram" id="instagram" value="{{ $gubernur->instagram }}"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <div>
                            <label for="twitter" class="block text-sm font-medium text-gray-700">Twitter</label>
                            <input type="text" name="twitter" id="twitter" value="{{ $gubernur->twitter }}"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    </div>

                    <div class="flex justify-end mt-6">
                        <button type="submit"
                            class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
