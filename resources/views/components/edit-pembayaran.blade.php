

<body class="bg-gray-50">

    <div class="mt-5 flex justify-between mx-10">
        <h2 class="font-bold text-3xl ">Edit Laporan Pembayaran Kue</h2>
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
                    {{-- Input Nama --}}
                    <div class="mb-5">
                        <label for="harga" class="mb-2">
                            Nama User <span class="text-red-500">*</span>
                        </label>
                        <br>
                        <input type="text" value="Nama User" id="harga" class=" text-gray-400 px-2 border-2 border-gray-200 rounded-lg py-2 w-1/2" >
                    </div>
                    {{-- Nama Kue --}}
                    <div class="mb-5">
                        <label for="harga" class="mb-2">
                            Nama Kue <span class="text-red-500">*</span>
                        </label>
                        <br>
                        <input type="text" value="Kue Nastar" id="harga" class=" text-gray-400 px-2 border-2 border-gray-200 rounded-lg py-2 w-1/2" >
                    </div>
                    {{-- Input Harga --}}
                    <div class="mb-5">
                        <label for="harga" class="mb-2">
                            Jumlah Pesanan <span class="text-red-500">*</span>
                        </label>
                        <br>
                        <input type="text" value="12" id="harga" class=" text-gray-400 px-2 border-2 border-gray-200 rounded-lg py-2 w-1/2" >
                    </div>

                    <div class="mb-5">
                        <label for="harga" class="mb-2">
                            Harga Satuan <span class="text-red-500">*</span>
                        </label>
                        <br>
                        <input type="text" value="Rp.120.000" id="harga" class=" text-gray-400 px-2 border-2 border-gray-200 rounded-lg py-2 w-1/2" >
                    </div>

                    <div class="mb-5">
                        <label for="harga" class="mb-2">
                            Total Pembayaran <span class="text-red-500">*</span>
                        </label>
                        <br>
                        <input type="text" value="Rp.1.440.000" id="harga" class=" text-gray-400 px-2 border-2 border-gray-200 rounded-lg py-2 w-1/2" >
                    </div>

                    </div>
                    <div class="rounded-lg mb-5 w-1/5 bg-white p-3 shadow-lg">
                        <label class="" for="">Status Pembayaran <span class="text-red-500">*</span></label> <br>
                        <div class="">
                        <input class="mt-5" class="bg-[#F5B80F]" type="radio" name="group" checked id="option1">
                        <label for="option1" class="text-blue-500">Menunggu</label> <br>

                        <input class="mt-5" type="radio" name="group" id="option2">
                        <label for="option2" class="text-red-500">Ditolak</label> <br>

                        <input class="mt-5" type="radio" name="group" id="option3">
                        <label for="option3" class="text-green-500">Diterima</label>
                        </div>
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
