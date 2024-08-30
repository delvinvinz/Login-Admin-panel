

<body class="bg-gray-50">

    <div class="mt-5 flex justify-between mx-10">
        <h2 class="font-bold text-3xl ">Edit Profit Kue</h2>
        <button class="bg-red-500 text-white rounded-lg hover:bg-red-600 transition-all duration-200 py-2 px-5">Delete</button>
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
                    {{-- Input Jenis Kue --}}
                <div class="grid grid-cols-2 gap-4">
                    <div class="mb-5">
                        <label for="nama" class="mb-2">
                            Jenis Kue <span class="text-red-500">*</span>
                        </label>
                        <br>
                        <input type="text" disabled id="nama" class="px-2 border-2 border-gray-200 rounded-lg py-2 w-full" value="Kue Nastar">

                    </div>
                    {{-- Input Jumlah Terjual --}}
                    <div class="mb-5">
                        <label for="harga" class="mb-2">
                            Jumlah terjual <span class="text-red-500">*</span>
                        </label>
                        <br>
                        <input type="text" disabled value="20" id="harga" class="px-2 border-2 border-gray-200 rounded-lg py-2 w-full">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                      {{-- Harga Jual --}}
                      <div class="mb-5">
                        <label for="harga" class="mb-2">
                            Harga Jual (Per Kue) <span class="text-red-500">*</span>
                        </label>
                        <br>
                        <input type="text" value="Rp.70.000" id="harga" class="px-2 border-2 border-gray-200 rounded-lg py-2 w-full">
                    </div>
                      {{-- Biaya Bahan Baku --}}
                      <div class="mb-5">
                        <label for="harga" class="mb-2">
                            Biaya Bahan Baku <span class="text-red-500">*</span>
                        </label>
                        <br>
                        <input type="text" value="Rp.500.000" id="harga" class="px-2 border-2 border-gray-200 rounded-lg py-2 w-full">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                      {{-- Biaya Tenaga Kerja --}}
                      <div class="mb-5">
                        <label for="harga" class="mb-2">
                            Biaya Tenaga Kerja <span class="text-red-500">*</span>
                        </label>
                        <br>
                        <input type="text" value="Rp.300.000" id="harga" class="px-2 border-2 border-gray-200 rounded-lg py-2 w-full">
                    </div>
                      {{-- Biaya Tambahan --}}
                      <div class="mb-5">
                        <label for="harga" class="mb-2">
                            Biaya Tambahan <span class="text-red-500">*</span>
                        </label>
                        <br>
                        <input type="text" value="Rp.100.000" id="harga" class="px-2 border-2 border-gray-200 rounded-lg py-2 w-full">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                      {{-- Total Biaya --}}
                      <div class="mb-5">
                        <label for="harga" class="mb-2">
                            Total Biaya <span class="text-red-500">*</span>
                        </label>
                        <br>
                        <input type="text" disabled value="Rp.900.000" id="harga" class="px-2 border-2 border-gray-200 rounded-lg py-2 w-full">
                    </div>
                      {{-- Laba Kotor --}}
                      <div class="mb-5">
                        <label for="harga" class="mb-2">
                            Laba Kotor <span class="text-red-500">*</span>
                        </label>
                        <br>
                        <input type="text" disabled value="Rp.500.000" id="harga" class="px-2 border-2 border-gray-200 rounded-lg py-2 w-full">
                    </div>
                </div>
                <div class="mb-5">
                    <label for="harga" class="mb-2">
                        Total Pendapatan <span class="text-red-500">*</span>
                    </label>
                    <br>
                    <input type="text" disabled value="Rp.1.400.000" id="harga" class="px-2 border-2 border-gray-200 rounded-lg py-2 w-full">
                </div>



                </div>
            </div>
        </div>
    </div>





    <div class="mt-10 mb-10">
        <button class="text-white py-2 px-5 rounded-lg bg-[#F5B80F] mr-5 hover:text-black  transition-all duration-200">Submit</button>
        <button class="text-black py-2 px-5 rounded-lg bg-white hover:border-[#F5B80F] border transition-all duration-200">Cancel</button>
    </div>
        {{ $slot }}
  </body>

</body>
</html>
