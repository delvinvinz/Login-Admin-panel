

<body class="bg-gray-50">

    <div class="mt-5 flex justify-between mx-10">
        <h2 class="font-bold text-3xl ">Edit User</h2>
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
                    {{-- Username --}}
                <div class="grid grid-cols-2 gap-4">
                    <div class="mb-5">
                        <label for="nama" class="mb-2">
                            Username <span class="text-red-500">*</span>
                        </label>
                        <br>
                        <input type="text" id="nama" class="px-2 border-2 border-gray-200 rounded-lg py-2 w-full" value="Kue Nastar">

                    </div>
                    {{-- Alamat --}}
                    <div class="">
                        <label for="description" class="block text-sm font-medium text-gray-700">Alamat <span class="text-red-500">*</span></label>
                        <div class="flex items-center space-x-2 my-2">
                            <textarea id="description" rows="4" class="w-full p-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">Alice: 'allow me to sell you a song?' 'Oh, a song, please, if the Queen furiously, throwing an inkstand at the corners: next the ten courtiers; these were ornamented all over with fright. 'Oh, I beg.</textarea>
                        </div>

                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                      {{-- No Telp --}}
                      <div class="mb-5">
                        <label for="telp" class="mb-2">
                            No Telp <span class="text-red-500">*</span>
                        </label>
                        <br>
                        <input type="text" value="0890-9999-9999" id="telp" class="px-2 border-2 border-gray-200 rounded-lg py-2 w-full">
                    </div>
                      {{-- Email --}}
                      <div class="mb-5">
                        <label for="email" class="mb-2">
                            Email <span class="text-red-500">*</span>
                        </label>
                        <br>
                        <input type="text" value="messi@gmail.com" id="email" class="px-2 border-2 border-gray-200 rounded-lg py-2 w-full">
                    </div>
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2">
                        Password <span class="text-red-500">*</span>
                    </label>
                    <br>
                    <input type="text" value="akuaku" id="password" class="px-2 border-2 border-gray-200 rounded-lg py-2 w-full">
                </div>

                <div class="rounded-lg mb-5">
                    <label class="" for="">Role Pengguna <span class="text-red-500">*</span></label> <br>
                    <div class="">
                    <input class="mt-5" class="bg-[#F5B80F]" type="radio" name="group" checked id="option1">
                    <label for="option1"">Super Admin</label> <br>

                    <input class="mt-5" type="radio" name="group" id="option2">
                    <label for="option2">Admin</label> <br>

                    <input class="mt-5" type="radio" name="group" id="option3">
                    <label for="option3" >User</label>
                    </div>
                </div>


                </div>
            </div>
        </div>
    </div>





    <div class="mt-10 mb-10">
        <button class="text-white py-2 px-5 rounded-lg bg-[#F5B80F] mr-5 hover:text-black  transition-all duration-200">Save</button>
        <button class="text-black py-2 px-5 rounded-lg bg-white hover:border-[#F5B80F] border transition-all duration-200">Cancel</button>
    </div>
        {{ $slot }}
  </body>

</body>
</html>
