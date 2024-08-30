     <!-- cards -->
     <div class="card w-full px-6 py-6 mx-auto">
        <!-- row 1 -->
        <div class=" mb-10 gap-10">
          <!-- card1 -->
          <div class="w-full max-w-full mb-6 xl:mb-0 row-span-3">
            <div class="relative flex py-6 flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                      <p class="mb-0 font-sans text-xl font-semibold leading-normal">Pengguna Baru</p>
                      <h5 class="mb-0 font-bold text-xl">
                        1000
                        <span class="text-sm leading-normal font-weight-bolder text-lime-500">+55%</span>
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            {{ $slot }}
          </div>
