<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Main modal -->
                <!-- Modal content -->
                <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                    <!-- Modal header -->
                        <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                Isi Form Untuk Melaporkan
                            </h3>
                        </div>
                            <!-- Modal body -->
                                <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                        <div>
                                            <label for="pelapor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pelapor</label>
                                            <input type="text" name="pelapor" id="pelapor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama pelapor" required="">
                                        </div>
                                        <div>
                                            <label for="terlapor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Yang Dilaporkan</label>
                                            <input type="text" name="terlapor" id="terlapor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Name yang dilaporkan" required="">
                                        </div>
                                        <div>
                                            <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas Pelapor</label>
                                            <input type="text" name="kelas" id="kelas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Kelas" required="">
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Foto Bukti</label>
                                            <input id="bukti" name="bukti" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" type="file">
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="laporan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Detail Laporan</label>
                                            <textarea id="laporan" name="laporan" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Detail Laporan"></textarea>                    
                                        </div>
                                    </div>
                                        <button type="submit" class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                            Laporkan
                                        </button>
                                </form>
                </div>
        </div>
    </div>
</x-app-layout>