<body class="bg-gray-50">

    <div class="p-6 pb-0 mb-5  border-b-0 border-b-solid text-3xl border-b-transparent">
        <h2 class="font-bold">Kategori Kue</h2>
      </div>

    <!-- TABLE CICILAN -->
      <div class="flex flex-wrap -mx-3">

        <div class="flex-none w-full max-w-full px-3">
          <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">



            <div class="mt-5 relative flex flex-wrap items-stretch mx-5 transition-all rounded-lg ease-soft w-1/2 mb-5">
                <span class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent  -transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                <ion-icon name="search-outline"></ion-icon>
                </span>
                <input type="text" class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" placeholder="Search" />

            </div>

            <div class="flex-auto px-0 pt-0 pb-2">
              <div class="p-0 overflow-x-auto">
                <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                  <thead class="align-bottom">
                    <tr>
                        <th class="px-3 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Gambar Kue</th>
                      <th class="px-3 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Nama Kue</th>
                      <th class="px-3 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Deskripsi</th>
                      <th class="px-5 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Harga</th>
                      <th class="px-5 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Jenis Kue</th>
                      <th class="px-5 py-3  font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>


                    </tr>
                  </thead>
                  <tbody>

                    <tr class="text-center text-md">
                        <td class="align-middle border-b whitespace-nowrap">
                            <img src="../assets/img/team-2.jpg" class="inline-flex  items-center justify-center text-sm text-white transition-all duration-200 ease-soft-in-out h-20 w-20 rounded-md" alt="user1" />
                          </td>
                      <td class="align-middle border-b whitespace-nowrap">
                        <p class="mb-0  font-semibold leading-tight">Kue Nastar</p>
                      </td>
                      <td class="align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <p class="mb-0 text-xs font-semibold leading-tight">
                            {{ Str::limit('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 50, '...') }}.
                            <button id="read-more-btn" class="text-blue-500 mt-2">
                                Read More
                            </button>
                        </p>

                        </td>
                        <td class="align-middle border-b whitespace-nowrap">
                        <p class="mb-0  font-semibold leading-tight">Rp.120.000</p>
                        </td>
                        <td class="align-middle border-b whitespace-nowrap">
                        <p class="mb-0  font-semibold leading-tight">Kue Kering</p>
                        </td>
                        <td class="align-middle border-b whitespace-nowrap">
                        <a href="/editkategori" class="mb-0 font-semibold leading-tight text-[#F5B80F]">Edit</a>
                        </td>
                    </tr>

                    <tr class="text-center text-md">
                        <td class="align-middle border-b whitespace-nowrap">
                            <img src="../assets/img/team-2.jpg" class="inline-flex  items-center justify-center text-sm text-white transition-all duration-200 ease-soft-in-out h-20 w-20 rounded-md" alt="user1" />
                          </td>
                      <td class="align-middle border-b whitespace-nowrap">
                        <p class="mb-0  font-semibold leading-tight">Kue Nastar</p>
                      </td>
                      <td class="align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <p class="mb-0 text-xs font-semibold leading-tight">
                            {{ Str::limit('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 50, '...') }}.
                            <button id="read-more-btn" class="text-blue-500 mt-2">
                                Read More
                            </button>
                        </p>

                        </td>
                        <td class="align-middle border-b whitespace-nowrap">
                        <p class="mb-0  font-semibold leading-tight">Rp.120.000</p>
                        </td>
                        <td class="align-middle border-b whitespace-nowrap">
                        <p class="mb-0  font-semibold leading-tight">Kue Kering</p>
                        </td>
                        <td class="align-middle border-b whitespace-nowrap">
                        <a href="/editkategori" class="mb-0 font-semibold leading-tight text-[#F5B80F]">Edit</a>
                        </td>
                    </tr>

                    <tr class="text-center text-md">
                        <td class="align-middle border-b whitespace-nowrap">
                            <img src="../assets/img/team-2.jpg" class="inline-flex  items-center justify-center text-sm text-white transition-all duration-200 ease-soft-in-out h-20 w-20 rounded-md" alt="user1" />
                          </td>
                      <td class="align-middle border-b whitespace-nowrap">
                        <p class="mb-0  font-semibold leading-tight">Kue Nastar</p>
                      </td>
                      <td class="align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <p class="mb-0 text-xs font-semibold leading-tight">
                            {{ Str::limit('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 50, '...') }}.
                            <button id="read-more-btn" class="text-blue-500 mt-2">
                                Read More
                            </button>
                        </p>

                        </td>
                        <td class="align-middle border-b whitespace-nowrap">
                        <p class="mb-0  font-semibold leading-tight">Rp.120.000</p>
                        </td>
                        <td class="align-middle border-b whitespace-nowrap">
                        <p class="mb-0  font-semibold leading-tight">Kue Kering</p>
                        </td>
                        <td class="align-middle border-b whitespace-nowrap">
                        <a href="/editkategori" class="mb-0 font-semibold leading-tight text-[#F5B80F]">Edit</a>
                        </td>
                    </tr>

                    <tr class="text-center text-md">
                        <td class="align-middle border-b whitespace-nowrap">
                            <img src="../assets/img/team-2.jpg" class="inline-flex  items-center justify-center text-sm text-white transition-all duration-200 ease-soft-in-out h-20 w-20 rounded-md" alt="user1" />
                          </td>
                      <td class="align-middle border-b whitespace-nowrap">
                        <p class="mb-0  font-semibold leading-tight">Kue Nastar</p>
                      </td>
                      <td class="align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <p class="mb-0 text-xs font-semibold leading-tight">
                            {{ Str::limit('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 50, '...') }}.
                            <button id="read-more-btn" class="text-blue-500 mt-2">
                                Read More
                            </button>
                        </p>

                        </td>
                        <td class="align-middle border-b whitespace-nowrap">
                        <p class="mb-0  font-semibold leading-tight">Rp.120.000</p>
                        </td>
                        <td class="align-middle border-b whitespace-nowrap">
                        <p class="mb-0  font-semibold leading-tight">Kue Kering</p>
                        </td>
                        <td class="align-middle border-b whitespace-nowrap">
                        <a href="/editkategori" class="mb-0 font-semibold leading-tight text-[#F5B80F]">Edit</a>
                        </td>
                    </tr>

                    <tr class="text-center text-md">
                        <td class="align-middle border-b whitespace-nowrap">
                            <img src="../assets/img/team-2.jpg" class="inline-flex  items-center justify-center text-sm text-white transition-all duration-200 ease-soft-in-out h-20 w-20 rounded-md" alt="user1" />
                          </td>
                      <td class="align-middle border-b whitespace-nowrap">
                        <p class="mb-0  font-semibold leading-tight">Kue Nastar</p>
                      </td>
                      <td class="align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <p class="mb-0 text-xs font-semibold leading-tight">
                            {{ Str::limit('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 50, '...') }}.
                            <button id="read-more-btn" class="text-blue-500 mt-2">
                                Read More
                            </button>
                        </p>

                        </td>
                        <td class="align-middle border-b whitespace-nowrap">
                        <p class="mb-0  font-semibold leading-tight">Rp.120.000</p>
                        </td>
                        <td class="align-middle border-b whitespace-nowrap">
                        <p class="mb-0  font-semibold leading-tight">Kue Kering</p>
                        </td>
                        <td class="align-middle border-b whitespace-nowrap">
                        <a href="/editkategori" class="mb-0 font-semibold leading-tight text-[#F5B80F]">Edit</a>
                        </td>
                    </tr>

                    <tr class="text-center text-md">
                        <td class="align-middle border-b whitespace-nowrap">
                            <img src="../assets/img/team-2.jpg" class="inline-flex  items-center justify-center text-sm text-white transition-all duration-200 ease-soft-in-out h-20 w-20 rounded-md" alt="user1" />
                          </td>
                      <td class="align-middle border-b whitespace-nowrap">
                        <p class="mb-0  font-semibold leading-tight">Kue Nastar</p>
                      </td>
                      <td class="align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <p class="mb-0 text-xs font-semibold leading-tight">
                            {{ Str::limit('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 50, '...') }}.
                            <button id="read-more-btn" class="text-blue-500 mt-2">
                                Read More
                            </button>
                        </p>

                        </td>
                        <td class="align-middle border-b whitespace-nowrap">
                        <p class="mb-0  font-semibold leading-tight">Rp.120.000</p>
                        </td>
                        <td class="align-middle border-b whitespace-nowrap">
                        <p class="mb-0  font-semibold leading-tight">Kue Kering</p>
                        </td>
                        <td class="align-middle border-b whitespace-nowrap">
                        <a href="/editkategori" class="mb-0 font-semibold leading-tight text-[#F5B80F]">Edit</a>
                        </td>
                    </tr>




                  </tbody>
                </table>
              </div>

              <!-- PAGINATION -->
              <div class="flex justify-center items-center mt-5">
                <nav class="inline-flex items-center space-x-1 gap-5">
                  <!-- Previous Button -->
                  <button class="px-3 py-2 border-2 border-gray-200 text-gray-700 rounded hover:bg-gray-300 transition-colors duration-200">
                    &lt; Previous
                  </button>

                  <!-- Page Numbers -->
                  <button class="px-3 py-2 border-2 border-[#F5B80F] text-[#F5B80F] rounded hover:bg-[#F5B80F] hover:text-white transition-colors duration-200">
                    1
                  </button>
                  <button class="px-3 py-2 border-2 border-gray-200 text-gray-700 rounded hover:bg-gray-300 transition-colors duration-200">
                    2
                  </button>
                  <button class="px-3 py-2 border-2 border-gray-200 text-gray-700 rounded hover:bg-gray-300 transition-colors duration-200">
                    3
                  </button>
                  <button class="px-3 py-2 border-2 border-gray-200 text-gray-700 rounded hover:bg-gray-300 transition-colors duration-200">
                    4
                  </button>
                  <button class="px-3 py-2 border-2 border-gray-200 text-gray-700 rounded hover:bg-gray-300 transition-colors duration-200">
                    5
                  </button>

                  </button>

                  <!-- Next Button -->
                  <button class="px-3 py-2 border-2 border-gray-200 text-gray-700 rounded hover:bg-gray-300 transition-colors duration-200">
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
