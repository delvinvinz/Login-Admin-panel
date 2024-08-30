

<body class="bg-gray-50">

    <div class="p-5 pb-0 border-b-0 border-b-solid text-3xl border-b-transparent">
        <h2 class="font-bold">Product</h2>
      </div>

    <div class="w-full py-6 mx-auto">
        <!-- table 1 -->

        <div class="flex flex-wrap -mx-3">
          <div class="flex-none w-full max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">

              <div class="p-6 pb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <div class="w-1/2 mb-5">
                    <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                    <span class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent  -transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                    <ion-icon name="search-outline"></ion-icon>
                    </span>
                    <input type="text" class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" placeholder="Search" />

                    <a href="/createproduct" class="border-2 border-[#F5B80F] text-center content-center px-4 py-2 mx-5 text-[#F5B80F] hover:bg-[#F5B80F] hover:text-white transition-all duration-200 rounded-lg">Tambahkan Produk</a>

                    </div>

              </div>
              <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto">
                  <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                    <thead class="align-bottom">
                      <tr>
                        <th class="pl-5 font-bold  uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70 text-center">Gambar Kue</th>
                        <th class="font-bold  uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70 text-center">Nama Kue</th>
                        <th class="font-bold  uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70 text-center">Deskripsi</th>
                        <th class="font-bold  uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70 text-center">Harga</th>
                        <th class="font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70 text-center"></th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-52 p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                              <div class="flex px-2 py-1">
                                <div class="">
                                  <img src="../assets/img/team-2.jpg" class="inline-flex  items-center justify-center text-sm text-white transition-all duration-200 ease-soft-in-out h-20 w-20 rounded-md" alt="user1" />
                                </div>
                                <div class="justify-center">

                                </div>
                              </div>
                            </td>
                            <td class="w-1/5 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-md font-semibold leading-tight">
                                  Kue nastar
                                </p>

                            </td>
                               <td class="align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-xs font-semibold leading-tight">
                                    {{ Str::limit('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 50, '...') }}.
                                    <button id="read-more-btn" class="text-blue-500 mt-2">
                                        Read More
                                    </button>
                                </p>

                            </td>
                            <td class="w-1/5 p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                              <span class="text-md font-semibold leading-tight text-slate-400">Rp120,000</span>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                              <a href="/editproduct" class="text-md font-semibold leading-tight text-[#F5B80F]"> Edit </a>
                            </td>
                          </tr>

                      <tr>
                        <td class="w-52 p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                          <div class="flex px-2 py-1">
                            <div class="">
                              <img src="../assets/img/team-2.jpg" class="inline-flex  items-center justify-center text-sm text-white transition-all duration-200 ease-soft-in-out h-20 w-20 rounded-md" alt="user1" />
                            </div>
                            <div class="justify-center">

                            </div>
                          </div>
                        </td>
                        <td class="w-1/5 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <p class="mb-0 text-md font-semibold leading-tight">
                              Kue nastar
                            </p>

                        </td>
                           <td class="align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <p class="mb-0 text-xs font-semibold leading-tight">
                                {{ Str::limit('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 50, '...') }}.
                                <button id="read-more-btn" class="text-blue-500 mt-2">
                                    Read More
                                </button>
                            </p>

                        </td>
                        <td class="w-1/5 p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                          <span class="text-md font-semibold leading-tight text-slate-400">Rp120,000</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                          <a href="/editproduct" class="text-md font-semibold leading-tight text-[#F5B80F]"> Edit </a>
                        </td>
                      </tr>
                      <tr>
                        <td class="w-52 p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                          <div class="flex px-2 py-1">
                            <div class="">
                              <img src="../assets/img/team-2.jpg" class="inline-flex  items-center justify-center text-sm text-white transition-all duration-200 ease-soft-in-out h-20 w-20 rounded-md" alt="user1" />
                            </div>
                            <div class="justify-center">

                            </div>
                          </div>
                        </td>
                        <td class="w-1/5 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <p class="mb-0 text-md font-semibold leading-tight">
                              Kue nastar
                            </p>

                        </td>
                           <td class="align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <p class="mb-0 text-xs font-semibold leading-tight">
                                {{ Str::limit('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 50, '...') }}.
                                <button id="read-more-btn" class="text-blue-500 mt-2">
                                    Read More
                                </button>
                            </p>

                        </td>
                        <td class="w-1/5 p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                          <span class="text-md font-semibold leading-tight text-slate-400">Rp120,000</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                          <a href="/editproduct" class="text-md font-semibold leading-tight text-[#F5B80F]"> Edit </a>
                        </td>
                      </tr>

                      <tr>
                        <td class="w-52 p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                          <div class="flex px-2 py-1">
                            <div class="">
                              <img src="../assets/img/team-2.jpg" class="inline-flex  items-center justify-center text-sm text-white transition-all duration-200 ease-soft-in-out h-20 w-20 rounded-md" alt="user1" />
                            </div>
                            <div class="justify-center">

                            </div>
                          </div>
                        </td>
                        <td class="w-1/5 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <p class="mb-0 text-md font-semibold leading-tight">
                              Kue nastar
                            </p>

                        </td>
                           <td class="align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <p class="mb-0 text-xs font-semibold leading-tight">
                                {{ Str::limit('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 50, '...') }}.
                                <button id="read-more-btn" class="text-blue-500 mt-2">
                                    Read More
                                </button>
                            </p>

                        </td>
                        <td class="w-1/5 p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                          <span class="text-md font-semibold leading-tight text-slate-400">Rp120,000</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                          <a href="/editproduct" class="text-xs font-semibold leading-tight text-[#F5B80F]"> Edit </a>
                        </td>
                      </tr>  <tr>
                        <td class="w-52 p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                          <div class="flex px-2 py-1">
                            <div class="">
                              <img src="../assets/img/team-2.jpg" class="inline-flex  items-center justify-center text-sm text-white transition-all duration-200 ease-soft-in-out h-20 w-20 rounded-md" alt="user1" />
                            </div>
                            <div class="justify-center">

                            </div>
                          </div>
                        </td>
                        <td class="w-1/5 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <p class="mb-0 text-md font-semibold leading-tight">
                              Kue nastar
                            </p>

                        </td>
                           <td class="align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <p class="mb-0 text-xs font-semibold leading-tight">
                                {{ Str::limit('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 50, '...') }}.
                                <button id="read-more-btn" class="text-blue-500 mt-2">
                                    Read More
                                </button>
                            </p>

                        </td>
                        <td class="w-1/5 p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                          <span class="text-md font-semibold leading-tight text-slate-400">Rp120,000</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                          <a href="/editproduct" class="text-md font-semibold leading-tight text-[#F5B80F]"> Edit </a>
                        </td>
                      </tr>

                    <tr>
                        <td class="w-52 p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                          <div class="flex px-2 py-1">
                            <div class="">
                              <img src="../assets/img/team-2.jpg" class="inline-flex  items-center justify-center text-sm text-white transition-all duration-200 ease-soft-in-out h-20 w-20 rounded-md" alt="user1" />
                            </div>
                            <div class="justify-center">

                            </div>
                          </div>
                        </td>
                        <td class="w-1/5 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <p class="mb-0 text-md font-semibold leading-tight">
                              Kue nastar
                            </p>

                        </td>
                           <td class="align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <p class="mb-0 text-xs font-semibold leading-tight">
                                {{ Str::limit('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 50, '...') }}.
                                <button id="read-more-btn" class="text-blue-500 mt-2">
                                    Read More
                                </button>
                            </p>

                        </td>
                        <td class="w-1/5 p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                          <span class="text-md font-semibold leading-tight text-slate-400">Rp120,000</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                          <a href="/editproduct" class="text-md font-semibold leading-tight text-[#F5B80F]"> Edit </a>
                        </td>
                      </tr>

                      <tr>
                        <td class="w-52 p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                          <div class="flex px-2 py-1">
                            <div class="">
                              <img src="../assets/img/team-2.jpg" class="inline-flex  items-center justify-center text-sm text-white transition-all duration-200 ease-soft-in-out h-20 w-20 rounded-md" alt="user1" />
                            </div>
                            <div class="justify-center">

                            </div>
                          </div>
                        </td>
                        <td class="w-1/5 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <p class="mb-0 text-md font-semibold leading-tight">
                              Kue nastar
                            </p>

                        </td>
                           <td class="align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <p class="mb-0 text-xs font-semibold leading-tight">
                                {{ Str::limit('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 50, '...') }}.
                                <button id="read-more-btn" class="text-blue-500 mt-2">
                                    Read More
                                </button>
                            </p>

                        </td>
                        <td class="w-1/5 p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                          <span class="text-md font-semibold leading-tight text-slate-400">Rp120,000</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                          <a href="/editproduct" class="text-md font-semibold leading-tight text-[#F5B80F]"> Edit </a>
                        </td>
                      </tr>

                    </tbody>
                  </table>
                </div>
                {{-- PAGINATION --}}
                <div class="mx-auto gap-20 mt-10 text-center items-center justify-center flex w-1/2 mb-10">
                    <a href="" class="text-center content-center"><</a>
                    <a href="" class="border border-[#F5B80F] w-12 h-10 text-center content-center rounded-md">1</a>
                    <a href="" class="text-center content-center">2</a>
                    <a href="" class="text-center content-center">3</a>
                    <a href="" class="text-center content-center">4</a>
                    <a href="" class="text-center content-center">></a>
                </div>
                </div>
                {{-- END PAGINATION --}}
              </div>
            </div>
          </div>
        </div>
        {{ $slot }}
  </body>
</body>
</html>
