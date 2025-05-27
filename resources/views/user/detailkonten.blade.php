<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SewaAja - Detail Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-poppins">
    <!-- Navbar -->
    <nav class="bg-white shadow-md p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <h1 class="text-3xl font-bold text-red-400">AL<span class="text-gray-700">outdor</span></h1>
                <div class="relative">
                    <input type="text" placeholder="Cari alat camping..." class="pl-10 pr-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-400">
                    <svg class="w-5 h-5 absolute left-3 top-2.5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <a href="index.html" class="text-gray-700 hover:text-red-400 font-semibold">Beranda</a>
                <a href="kelola-barang.html" class="text-gray-700 hover:text-red-400 font-semibold">Kelola Barang</a>
                <a href="sewaku.html" class="text-gray-700 hover:text-red-400 font-semibold">Sewaku</a>
                <a href="profil.html" class="bg-red-400 text-white px-4 py-2 rounded-full hover:bg-red-500">Profil</a>
                <a href="logout.html" class="text-gray-700 hover:text-red-400 font-semibold">Logout</a>
            </div>
        </div>
    </nav>

    <!-- Main Content: Detail Barang -->
    <div class="container mx-auto mt-8 px-4">
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Gambar dan Thumbnail -->
            <div class="w-full md:w-1/2">
                <img src="https://placehold.co/600x600" alt="Tenda 7P" class="w-full rounded-lg shadow-md">
                <div class="mt-4 flex space-x-4">
                    <img src="https://placehold.co/104x104" alt="Thumbnail 1" class="w-24 h-24 rounded-lg border border-gray-300">
                    <img src="https://placehold.co/104x104" alt="Thumbnail 2" class="w-24 h-24 rounded-lg border border-gray-300 opacity-60">
                    <img src="https://placehold.co/104x104" alt="Thumbnail 3" class="w-24 h-24 rounded-lg border border-gray-300 opacity-60">
                    <img src="https://placehold.co/104x104" alt="Thumbnail 4" class="w-24 h-24 rounded-lg border border-gray-300 opacity-60">
                </div>
            </div>

            <!-- Detail dan Form Peminjaman -->
            <div class="w-full md:w-1/2 bg-white p-6 rounded-lg shadow-md">
                <div class="flex justify-between items-start">
                    <h2 class="text-3xl font-bold text-gray-800">Tenda 7P</h2>
                    <div class="text-right">
                        <div class="flex space-x-1">
                            <svg class="w-4 h-4 text-orange-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-4 h-4 text-orange-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-4 h-4 text-orange-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-4 h-4 text-orange-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                        <p class="text-gray-500 text-sm">12 reviews</p>
                    </div>
                </div>
                <p class="text-red-400 text-2xl font-bold mt-2">Rp 100.000 /hari</p>
                <p class="text-gray-500 text-sm mt-2">
                    Jenis: Produk sewa<br>
                    Merek: Berbagai merek<br>
                    Kapasitas tidur: 7P (tujuh orang)<br>
                    Fungsi: Outdoor activities (camping, mountaineering, caving, hiking, climbing, etc)
                </p>
                <form class="mt-6 space-y-6">
                    <div>
                        <label class="text-gray-700 text-sm font-normal">Tanggal Peminjaman</label>
                        <div class="relative">
                            <input type="date" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-400">
                            <svg class="w-4 h-4 absolute right-3 top-3 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <label class="text-gray-700 text-sm font-normal">Tanggal Pengembalian</label>
                        <div class="relative">
                            <input type="date" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-400">
                            <svg class="w-4 h-4 absolute right-3 top-3 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <label class="text-gray-700 text-sm font-normal">Jumlah</label>
                        <input type="number" min="1" value="1" class="w-16 p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-400">
                    </div>
                    <button type="submit" class="bg-red-400 text-white px-8 py-3 rounded-lg hover:bg-red-500">Tambahkan ke Keranjang</button>
                </form>
                <div class="mt-6 flex items-center space-x-4">
                    <span class="text-gray-800 font-bold">Bagikan:</span>
                    <a href="#" class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                        <span class="text-black">IG</span>
                    </a>
                    <a href="#" class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                        <span class="text-black">FB</span>
                    </a>
                    <a href="#" class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                        <span class="text-black">WA</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Produk Lainnya -->
        <div class="mt-12">
            <h2 class="text-3xl font-bold text-red-400 text-center">Produk Lainnya</h2>
            <p class="text-gray-400 text-center">Kamu bisa mencari produk lainnya di sini</p>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6 mt-6">
                <!-- Contoh Kartu Barang -->
                <div class="bg-white rounded-lg shadow-md p-4">
                    <img src="https://placehold.co/280x281" alt="Tenda 7P" class="w-full h-64 object-cover rounded-lg">
                    <div class="mt-4">
                        <h3 class="text-xl font-bold">Sleeping Bag</h3>
                        <p class="text-red-400 font-semibold">Rp 20.000 /hari</p>
                        <p class="text-gray-600 text-sm text-right">80 Tersewa</p>
                        <a href="detail.html" class="block mt-2 bg-red-400 text-white text-center py-2 rounded hover:bg-red-500">Lihat</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md p-4">
                    <img src="https://placehold.co/280x281" alt="Kompor Portable" class="w-full h-64 object-cover rounded-lg">
                    <div class="mt-4">
                        <h3 class="text-xl font-bold">Kompor Portable</h3>
                        <p class="text-red-400 font-semibold">Rp 15.000 /hari</p>
                        <p class="text-gray-600 text-sm text-right">50 Tersewa</p>
                        <a href="detail.html" class="block mt-2 bg-red-400 text-white text-center py-2 rounded hover:bg-red-500">Lihat</a>
                    </div>
                </div>
                 <div class="bg-white rounded-lg shadow-md p-4">
                    <img src="https://placehold.co/280x281" alt="Kompor Portable" class="w-full h-64 object-cover rounded-lg">
                    <div class="mt-4">
                        <h3 class="text-xl font-bold">Kompor Portable</h3>
                        <p class="text-red-400 font-semibold">Rp 15.000 /hari</p>
                        <p class="text-gray-600 text-sm text-right">50 Tersewa</p>
                        <a href="detail.html" class="block mt-2 bg-red-400 text-white text-center py-2 rounded hover:bg-red-500">Lihat</a>
                    </div>
                </div>
                 <div class="bg-white rounded-lg shadow-md p-4">
                    <img src="https://placehold.co/280x281" alt="Kompor Portable" class="w-full h-64 object-cover rounded-lg">
                    <div class="mt-4">
                        <h3 class="text-xl font-bold">Kompor Portable</h3>
                        <p class="text-red-400 font-semibold">Rp 15.000 /hari</p>
                        <p class="text-gray-600 text-sm text-right">50 Tersewa</p>
                        <a href="detail.html" class="block mt-2 bg-red-400 text-white text-center py-2 rounded hover:bg-red-500">Lihat</a>
                    </div>
                </div>
                 <div class="bg-white rounded-lg shadow-md p-4">
                    <img src="https://placehold.co/280x281" alt="Kompor Portable" class="w-full h-64 object-cover rounded-lg">
                    <div class="mt-4">
                        <h3 class="text-xl font-bold">Kompor Portable</h3>
                        <p class="text-red-400 font-semibold">Rp 15.000 /hari</p>
                        <p class="text-gray-600 text-sm text-right">50 Tersewa</p>
                        <a href="detail.html" class="block mt-2 bg-red-400 text-white text-center py-2 rounded hover:bg-red-500">Lihat</a>
                    </div>
                </div>
                 <div class="bg-white rounded-lg shadow-md p-4">
                    <img src="https://placehold.co/280x281" alt="Kompor Portable" class="w-full h-64 object-cover rounded-lg">
                    <div class="mt-4">
                        <h3 class="text-xl font-bold">Kompor Portable</h3>
                        <p class="text-red-400 font-semibold">Rp 15.000 /hari</p>
                        <p class="text-gray-600 text-sm text-right">50 Tersewa</p>
                        <a href="detail.html" class="block mt-2 bg-red-400 text-white text-center py-2 rounded hover:bg-red-500">Lihat</a>
                    </div>
                </div>
                 <div class="bg-white rounded-lg shadow-md p-4">
                    <img src="https://placehold.co/280x281" alt="Kompor Portable" class="w-full h-64 object-cover rounded-lg">
                    <div class="mt-4">
                        <h3 class="text-xl font-bold">Kompor Portable</h3>
                        <p class="text-red-400 font-semibold">Rp 15.000 /hari</p>
                        <p class="text-gray-600 text-sm text-right">50 Tersewa</p>
                        <a href="detail.html" class="block mt-2 bg-red-400 text-white text-center py-2 rounded hover:bg-red-500">Lihat</a>
                    </div>
                </div>
                 <div class="bg-white rounded-lg shadow-md p-4">
                    <img src="https://placehold.co/280x281" alt="Kompor Portable" class="w-full h-64 object-cover rounded-lg">
                    <div class="mt-4">
                        <h3 class="text-xl font-bold">Kompor Portable</h3>
                        <p class="text-red-400 font-semibold">Rp 15.000 /hari</p>
                        <p class="text-gray-600 text-sm text-right">50 Tersewa</p>
                        <a href="detail.html" class="block mt-2 bg-red-400 text-white text-center py-2 rounded hover:bg-red-500">Lihat</a>
                    </div>
                </div>
                 <div class="bg-white rounded-lg shadow-md p-4">
                    <img src="https://placehold.co/280x281" alt="Kompor Portable" class="w-full h-64 object-cover rounded-lg">
                    <div class="mt-4">
                        <h3 class="text-xl font-bold">Kompor Portable</h3>
                        <p class="text-red-400 font-semibold">Rp 15.000 /hari</p>
                        <p class="text-gray-600 text-sm text-right">50 Tersewa</p>
                        <a href="detail.html" class="block mt-2 bg-red-400 text-white text-center py-2 rounded hover:bg-red-500">Lihat</a>
                    </div>
                </div>
                 <div class="bg-white rounded-lg shadow-md p-4">
                    <img src="https://placehold.co/280x281" alt="Kompor Portable" class="w-full h-64 object-cover rounded-lg">
                    <div class="mt-4">
                        <h3 class="text-xl font-bold">Kompor Portable</h3>
                        <p class="text-red-400 font-semibold">Rp 15.000 /hari</p>
                        <p class="text-gray-600 text-sm text-right">50 Tersewa</p>
                        <a href="detail.html" class="block mt-2 bg-red-400 text-white text-center py-2 rounded hover:bg-red-500">Lihat</a>
                    </div>
                </div>
                <!-- Tambahan kartu barang (ulangi sesuai data dinamis) -->
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-red-400 text-white py-16 mt-12">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-xl font-semibold mb-4 font-montserrat">ALoutdor</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:underline">Sewa</a></li>
                    <li><a href="#" class="hover:underline">Tentang Kami</a></li>
                    <li><a href="#" class="hover:underline">Kontak Media</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-semibold mb-4 font-lato">Ikuti Kami</h3>
                <ul class="space-y-2">
                    <li class="flex items-center space-x-2">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <span class="text-black">IG</span>
                        </div>
                        <a href="#" class="hover:underline">Instagram</a>
                    </li>
                    <li class="flex items-center space-x-2">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <span class="text-black">WA</span>
                        </div>
                        <a href="#" class="hover:underline">Whatsapp</a>
                    </li>
                    <li class="flex items-center space-x-2">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <span class="text-black">FB</span>
                        </div>
                        <a href="#" class="hover:underline">Facebook</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-semibold mb-4 font-lato">Metode Pembayaran</h3>
                <div class="flex space-x-2">
                    <div class="w-12 h-8 bg-purple-900 rounded"></div>
                    <div class="w-12 h-8 bg-sky-700 rounded"></div>
                    <div class="w-12 h-8 bg-sky-500 rounded"></div>
                    <div class="w-12 h-8 bg-white border border-gray-300 rounded"></div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>