<body class="bg-gray-50">


    <!-- TABLE CICILAN -->
    <div class="p-5 pb-0 mb-5 border-b-0 border-b-solid text-3xl border-b-transparent">
        <h2 class="font-bold">Laporan Pembayaran Kue</h2>
    </div>
    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">

                <div class="p-6 pb-0 mb-5 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div class="w-1/2">
                        <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                            <span
                                class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent  -transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                                <ion-icon name="search-outline"></ion-icon>
                            </span>
                            <input type="text"
                                class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                placeholder="Search" />

                        </div>
                    </div>
                </div>

                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom p-10">
                                <tr>
                                    <th
                                        class="px-3 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Tanggal Pembayaran</th>
                                    <th
                                        class="px-5 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Nama User</th>
                                    <th
                                        class="px-5 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Nama Kue</th>
                                    <th
                                        class="px-5 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Jumlah Pesanan</th>
                                    <th
                                        class="px-5 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Harga Satuan Kue</th>
                                    <th
                                        class="px-5 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Total Pembayaran</th>
                                    <th
                                        class="px-5 py-3  font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Metode Pembayaran</th>
                                    <th
                                        class="px-5 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Status Pembayaran</th>
                                    <th
                                        class="px-5 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    </th>

                                </tr>
                            </thead>
                            <tbody class="p-10">

                                <tr class="text-center">
                                    <td class="align-middle border-b whitespace-nowrap py-5">
                                        <p class="mb-0 text-sm font-semibold leading-tight">12/10/2024</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">Nama User</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">Kue Nastar</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">12</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">
                                            Rp.120.000
                                        </p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">1.440.000</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">QRIS</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap ">
                                        <p class="mb-0 text-sm font-semibold leading-tight text-blue-500">Menunggu</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <a href="/editpembayarankue"
                                            class="text-[#F5B80F] mb-0 mr-5 text-sm font-semibold leading-tight flex flex-col whitespace-normal">
                                            Edit
                                        </a>
                                    </td>
                                    </td>

                                </tr>

                                <tr class="text-center">
                                    <td class="align-middle border-b whitespace-nowrap py-5">
                                        <p class="mb-0 text-sm font-semibold leading-tight">12/10/2024</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">Nama User</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">Kue Nastar</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">12</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">
                                            Rp.120.000
                                        </p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">1.440.000</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">QRIS</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap ">
                                        <p class="mb-0 text-sm font-semibold leading-tight text-blue-500">Menunggu</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <a href="/editpembayarankue"
                                            class="text-[#F5B80F] mb-0 mr-5 text-sm font-semibold leading-tight flex flex-col whitespace-normal">
                                            Edit
                                        </a>
                                    </td>
                                    </td>

                                </tr>

                                <tr class="text-center">
                                    <td class="align-middle border-b whitespace-nowrap py-5">
                                        <p class="mb-0 text-sm font-semibold leading-tight">12/10/2024</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">Nama User</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">Kue Nastar</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">12</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">
                                            Rp.120.000
                                        </p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">1.440.000</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">QRIS</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap ">
                                        <p class="mb-0 text-sm font-semibold leading-tight text-blue-500">Menunggu</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <a href="/editpembayarankue"
                                            class="text-[#F5B80F] mb-0 mr-5 text-sm font-semibold leading-tight flex flex-col whitespace-normal">
                                            Edit
                                        </a>
                                    </td>
                                    </td>

                                </tr>

                                <tr class="text-center">
                                    <td class="align-middle border-b whitespace-nowrap py-5">
                                        <p class="mb-0 text-sm font-semibold leading-tight">12/10/2024</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">Nama User</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">Kue Nastar</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">12</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">
                                            Rp.120.000
                                        </p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">1.440.000</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">QRIS</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap ">
                                        <p class="mb-0 text-sm font-semibold leading-tight text-blue-500">Menunggu</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <a href="/editpembayarankue"
                                            class="text-[#F5B80F] mb-0 mr-5 text-sm font-semibold leading-tight flex flex-col whitespace-normal">
                                            Edit
                                        </a>
                                    </td>
                                    </td>

                                </tr>

                                <tr class="text-center">
                                    <td class="align-middle border-b whitespace-nowrap py-5">
                                        <p class="mb-0 text-sm font-semibold leading-tight">12/10/2024</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">Nama User</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">Kue Nastar</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">12</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">
                                            Rp.120.000
                                        </p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">1.440.000</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">QRIS</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap ">
                                        <p class="mb-0 text-sm font-semibold leading-tight text-blue-500">Menunggu</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <a href="/editpembayarankue"
                                            class="text-[#F5B80F] mb-0 mr-5 text-sm font-semibold leading-tight flex flex-col whitespace-normal">
                                            Edit
                                        </a>
                                    </td>
                                    </td>

                                </tr>

                                <tr class="text-center">
                                    <td class="align-middle border-b whitespace-nowrap py-5">
                                        <p class="mb-0 text-sm font-semibold leading-tight">12/10/2024</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">Nama User</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">Kue Nastar</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">12</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">
                                            Rp.120.000
                                        </p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">1.440.000</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <p class="mb-0 text-sm font-semibold leading-tight">QRIS</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap ">
                                        <p class="mb-0 text-sm font-semibold leading-tight text-blue-500">Menunggu</p>
                                    </td>
                                    <td class="align-middle border-b whitespace-nowrap">
                                        <a href="/editpembayarankue"
                                            class="text-[#F5B80F] mb-0 mr-5 text-sm font-semibold leading-tight flex flex-col whitespace-normal">
                                            Edit
                                        </a>
                                    </td>
                                    </td>

                                </tr>


                            </tbody>
                        </table>
                    </div>

                    <!-- PAGINATION -->
                    <div class="flex justify-center items-center mt-5">
                        <nav class="inline-flex items-center space-x-1 gap-5">
                            <!-- Previous Button -->
                            <button
                                class="px-3 py-2 border-2 border-gray-200 text-gray-700 rounded hover:bg-gray-300 transition-colors duration-200">
                                &lt; Previous
                            </button>

                            <!-- Page Numbers -->
                            <button
                                class="px-3 py-2 border-2 border-[#F5B80F] text-[#F5B80F] rounded hover:bg-[#F5B80F] hover:text-white transition-colors duration-200">
                                1
                            </button>
                            <button
                                class="px-3 py-2 border-2 border-gray-200 text-gray-700 rounded hover:bg-gray-300 transition-colors duration-200">
                                2
                            </button>
                            <button
                                class="px-3 py-2 border-2 border-gray-200 text-gray-700 rounded hover:bg-gray-300 transition-colors duration-200">
                                3
                            </button>
                            <button
                                class="px-3 py-2 border-2 border-gray-200 text-gray-700 rounded hover:bg-gray-300 transition-colors duration-200">
                                4
                            </button>
                            <button
                                class="px-3 py-2 border-2 border-gray-200 text-gray-700 rounded hover:bg-gray-300 transition-colors duration-200">
                                5
                            </button>

                            </button>

                            <!-- Next Button -->
                            <button
                                class="px-3 py-2 border-2 border-gray-200 text-gray-700 rounded hover:bg-gray-300 transition-colors duration-200">
                                Next &gt;
                            </button>
                        </nav>
                    </div>

                </div>
            </div>
            <!-- BUTTON PRINT OUT -->
            <button type="print"
            class="border-2 border-[#F5B80F] rounded-lg text-black hover:text-white hover:bg-[#F5B80F] mb-10 transition-colors duration-200 p-2 px-10">
            Print
        </button>
        </div>
    </div>
</body>
