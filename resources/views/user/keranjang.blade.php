<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SewaAja - Keranjang</title>
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

    <!-- Main Content: Keranjang dan Pembayaran -->
    <div class="container mx-auto mt-8 px-4">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Kiri: Tabel Keranjang -->
            <div class="w-full lg:w-2/3 bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Keranjang</h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="border-b border-gray-300">
                                <th class="p-2 text-sm font-semibold text-gray-800">Produk</th>
                                <th class="p-2 text-sm font-semibold text-gray-800">Peminjaman</th>
                                <th class="p-2 text-sm font-semibold text-gray-800">Jumlah</th>
                                <th class="p-2 text-sm font-semibold text-gray-800">Harga Total</th>
                                <th class="p-2 text-sm font-semibold text-red-600">
                                    <button class="hover:underline">Hapus Semua</button>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-200">
                                <td class="p-2 flex items-center space-x-2">
                                    <img src="https://placehold.co/51x40" alt="Paket 1" class="w-12 h-10">
                                    <div>
                                        <p class="text-base font-semibold">Paket 1</p>
                                        <p class="text-xs text-gray-600">Rp 75.000 /hari</p>
                                    </div>
                                </td>
                                <td class="p-2">
                                    <span class="px-3 py-1 bg-gray-200 rounded text-sm">2 hari</span>
                                </td>
                                <td class="p-2">
                                    <div class="flex items-center space-x-2">
                                        <button class="w-6 h-6 bg-gray-200 rounded-full flex items-center justify-center">-</button>
                                        <span class="text-sm">2</span>
                                        <button class="w-6 h-6 bg-gray-200 rounded-full flex items-center justify-center">+</button>
                                    </div>
                                </td>
                                <td class="p-2 text-sm font-semibold">Rp 300.000</td>
                                <td class="p-2">
                                    <button class="text-red-600 hover:underline">Hapus</button>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200">
                                <td class="p-2 flex items-center space-x-2">
                                    <img src="https://placehold.co/44x40" alt="Tenda 7P" class="w-11 h-10">
                                    <div>
                                        <p class="text-base font-semibold">Tenda 7P</p>
                                        <p class="text-xs text-gray-600">Rp 100.000 /hari</p>
                                    </div>
                                </td>
                                <td class="p-2">
                                    <span class="px-3 py-1 bg-gray-200 rounded text-sm">2 hari</span>
                                </td>
                                <td class="p-2">
                                    <div class="flex items-center space-x-2">
                                        <button class="w-6 h-6 bg-gray-200 rounded-full flex items-center justify-center">-</button>
                                        <span class="text-sm">1</span>
                                        <button class="w-6 h-6 bg-gray-200 rounded-full flex items-center justify-center">+</button>
                                    </div>
                                </td>
                                <td class="p-2 text-sm font-semibold">Rp 200.000</td>
                                <td class="p-2">
                                    <button class="text-red-600 hover:underline">Hapus</button>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200">
                                <td class="p-2 flex items-center space-x-2">
                                    <img src="https://placehold.co/42x40" alt="Kompor Gas" class="w-10 h-10">
                                    <div>
                                        <p class="text-base font-semibold">Kompor Gas</p>
                                        <p class="text-xs text-gray-600">Rp 20.000 /hari</p>
                                    </div>
                                </td>
                                <td class="p-2">
                                    <span class="px-3 py-1 bg-gray-200 rounded text-sm">2 hari</span>
                                </td>
                                <td class="p-2">
                                    <div class="flex items-center space-x-2">
                                        <button class="w-6 h-6 bg-gray-200 rounded-full flex items-center justify-center">-</button>
                                        <span class="text-sm">1</span>
                                        <button class="w-6 h-6 bg-gray-200 rounded-full flex items-center justify-center">+</button>
                                    </div>
                                </td>
                                <td class="p-2 text-sm font-semibold">Rp 40.000</td>
                                <td class="p-2">
                                    <button class="text-red-600 hover:underline">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="flex justify-end mt-6 space-x-4">
                    <p class="text-sm text-gray-500">Subtotal: <span class="text-base font-semibold text-black">Rp 540.000</span></p>
                    <p class="text-sm text-gray-500">Total: <span class="text-xl font-bold text-black">Rp 540.000</span></p>
                </div>
            </div>

            <!-- Kanan: Pembayaran -->
            <div class="w-full lg:w-1/3 bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Pembayaran</h2>
                <form class="space-y-4">
                    <div>
                        <label class="text-sm font-semibold text-gray-800">Jaminan</label>
                        <select class="w-full mt-2 p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-400">
                            <option>KTP (Kartu Tanda Penduduk)</option>
                            <option>SIM (Surat Izin Mengemudi)</option>
                            <option>Kartu Pelajar</option>
                        </select>
                    </div>
                    <div>
                        <label class="text-sm font-semibold text-gray-800">Tanggal Pengambilan</label>
                        <div class="relative mt-2">
                            <input type="date" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-400">
                            <svg class="w-4 h-4 absolute right-3 top-3 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>
                    <button type="submit" class="w-full bg-green-600 text-white py-3 rounded-lg hover:bg-green-700">Proses Pembayaran</button>
                </form>
                <div class="mt-6 text-center">
                    <p class="text-xs text-gray-600">ALoutdor</p>
                    <p class="text-xs text-gray-600">NMID: 123412341234</p>
                    <img src="https://placehold.co/200x200" alt="QRIS" class="w-40 h-40 mx-auto mt-4">
                    <p class="text-xs text-gray-600 mt-2">Scan QRIS untuk melakukan pembayaran</p>
                </div>
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