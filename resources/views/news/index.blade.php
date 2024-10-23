<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top News</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</head>
<body>
    <div class="container mx-auto mt-5">
        <!-- Judul utama halaman -->
        <h1 class="text-3xl font-bold mb-5">Search News</h1>
    
        <!-- Form pencarian berita -->
        <form method="GET" action="/news">
            <!-- Input untuk pencarian berita, mengikat nilai dengan query jika ada -->
            <input type="text" name="q" value="{{ $query ?? '' }}" class="border rounded p-2" placeholder="Search for news...">
            <!-- Tombol untuk mengirimkan form pencarian -->
            <button type="submit" class="bg-blue-500 text-white p-2 rounded">Search</button>
        </form>
    
        <!-- Judul untuk daftar berita teratas -->
        <h2 class="text-3xl font-bold mt-5 mb-5">Top News Headlines</h2>
    
        <!-- Mengecek apakah ada artikel berita yang diterima -->
        @if (isset($articles) && count($articles) > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Iterasi melalui setiap artikel berita yang ada -->
                @foreach ($articles as $article)
                    <!-- Menggunakan komponen card dari Flowbite -->
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md">
                        <!-- Menambahkan gambar di atas judul -->
                        @if(isset($article['urlToImage']))
                            <img class="rounded-t-lg w-full h-48 object-cover" src="{{ $article['urlToImage'] }}" alt="{{ $article['title'] }}">
                        @endif
                        <div class="p-5">
                            <!-- Judul artikel sebagai link -->
                            <h3 class="text-xl font-semibold mb-2">
                                <a href="{{ $article['url'] }}" target="_blank" class="text-blue-500 hover:underline">
                                    {{ $article['title'] }}
                                </a>
                            </h3>
                            <!-- Deskripsi singkat artikel -->
                            <p class="mb-3 font-normal text-gray-700">{{ $article['description'] }}</p>
                            <!-- Tombol "Read more" -->
                            <a href="{{ $article['url'] }}" target="_blank" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                Read more
                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-7V9a1 1 0 112 0v2h2a1 1 0 110 2h-2v2a1 1 0 11-2 0v-2H7a1 1 0 110-2h2z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <!-- Pesan jika tidak ada berita yang ditemukan -->
            <p>No news found.</p>
        @endif
    </div>    
</body>
</html>