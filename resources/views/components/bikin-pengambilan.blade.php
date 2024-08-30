

<body class="bg-gray-50">

    <div class="p-5 pb-0 border-b-0 mt-5 border-b-solid text-3xl border-b-transparent">
        <h2 class="font-bold">Tambahkan Daftar Pengambilan</h2>
      </div>

    <div class="w-full py-6 mx-auto">
        <!-- table 1 -->

        <div class="flex flex-wrap mx-5">
          <div class="flex-none w-full ">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">

              <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-2xl border-b-transparent">
                <div class="w-1/2">
                    <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                    <span class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent  -transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">

                    </span>
                    </div>


            </div>
            <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto">

                    {{-- Tanggal Pengambilan --}}
                    <div class="mb-5">
                        <label for="nama" class="mb-2 text-gray-700 font-bold">
                            Tanggal Pengambilan <span class="text-red-500">*</span>
                        </label>
                        <br>
                        <input type="date" id="nama" class="px-2 border-2 border-gray-200 rounded-lg py-2 w-1/2">
                    </div>

                    {{-- Nama Peserta --}}
                    <div class="mb-5">
                        <label for="harga" class="mb-2 text-gray-700 font-bold">
                            Nama Peserta <span class="text-red-500">*</span>
                        </label>
                        <br>
                        <input type="text" id="harga" class="px-2 border-2 border-gray-200 rounded-lg py-2 w-1/2">
                    </div>

                        {{-- Jenis Kue --}}
                        <div>
                            <label for="jenis" class="text-gray-700 font-bold">
                                Jenis Kue <span class="text-red-500">*</span></label> <br>
                            <input type="text" id="jenis" class="px-2 border-2 border-gray-200 rounded-lg py-2 w-1/2">
                        </div>

                        {{-- Status Pengambilan --}}
                        <div class="mt-5 mb-5 shadow-lg border-2 border-gray-50 w-1/5 p-5 rounded-lg">
                            <label class="text-gray-700 font-bold" for="">
                                Status Pengambilan <span class="text-red-500">*</span></label><br>
                            <div class="">
                                <input class="mt-5" type="radio" name="group" id="option1">
                                <label for="option1">Ambil Di Tempat</label> <br>

                                <input class="mt-5" type="radio" name="group" id="option2">
                                <label for="option2">Diantar</label>
                            </div>
                        </div>

                        {{-- Jumlah Pesanan --}}
                        <div>
                            <label for="jumlah">Jumlah Pesanan</label> <br>
                            <input type="text" id="jumlah" class="px-2 border-2 border-gray-200 rounded-lg py-2 w-1/2">
                        </div>

                        <div class="mt-5">
                            <label for="time" class="text-gray-700 font-bold ">
                                Masukkan Waktu <span class="text-red-500">*</span></label>
                            <input type="time" id="time" name="time" class="mt-1 block w-1/4 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>

                        {{-- Foto --}}
                        <div class="mt-5">
                            <form>
                                <div class="mb-4">
                                    <label class="block text-gray-700 font-bold mb-2" for="photo">
                                        Tambahkan Foto <span class="text-red-500">*</span>
                                    </label>
                                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center hover:border-blue-400">
                                        <input type="file" name="photo" id="photo" class="hidden"">
                                        <p id="file-label" class="text-gray-500">Drag & Drop your files or <a href="#" onclick="document.getElementById('photo').click(); return false;" class="text-blue-500">Browse</a></p>
                                    </div>
                                    <span class="text-red-500 text-sm">Hanya 1 foto saja *</span>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="mt-10 mb-10">
        <button class="text-white py-2 px-5 rounded-lg bg-[#F5B80F] mr-5">Submit</button>
        <button class="text-black py-2 px-5 rounded-lg bg-white">Cancel</button>
    </div>
        {{ $slot }}
  </body>

</body>
</html>
