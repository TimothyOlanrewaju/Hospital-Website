<section class="fixed z-50 w-full mb-40">
    <nav class="bg-white border-gray-200 py-2.5 dark:bg-gray-900">
        <div class="flex items-center justify-center space-x-10 md:justify-end lg:justify-end">
            <div class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                <span>+234 80 3234 56789</span>
            </div>
            <div class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4"><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/></svg>
                <span><a href="mailto:info@fMckeffi.gov.ng" class="hover:text-green-400">info@fmckeffi.gov.ng</a></span>
            </div>
        </div>
        
        <hr>
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
            <a href="{{ url('/') }}" class="flex items-center">
                <img src="images/fmc_logo.jpg" class="mr-3" alt="" />
            </a>
            <div class="flex items-center lg:order-2">
                <a href="{{route('login')}}" class="text-white bg-green-500 hover:bg-green-700 focus:ring-4 focus:ring-green-500 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0">Login</a>
                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                    
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="{{ url('/') }}" class="block py-2 pl-3 pr-4 text-white bg-green-500 rounded lg:bg-transparent lg:text-green-500 lg:p-0 dark:text-white" aria-current="page">Home</a>
                    </li>
                    <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-700 rounded hover:bg-green-200 hover:text-green-500 md:hover:bg-transparent md:border-0 md:hover:text-green-400 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">About Us <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
  </svg></button>
            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                  <li>
                  <a href="{{url('WhoWeAre')}}" class="text-gray-700 block  px-4 py-2 text-sm  border-l-2 border-green-700 lg:hover:text-green-500 hover:bg-green-200">Who We Are</a>
                </li>
                  <li>
                  <a href="{{url('our_history')}}" class="text-gray-700 block px-4 py-2 text-sm  border-l-2 border-green-700 lg:hover:text-green-500 hover:bg-green-200">Our History</a>
                    </li>
                  <li>
                  <a href="{{url('tmc_members')}}" class="text-gray-700 block px-4 py-2 text-sm  border-l-2 border-green-700 lg:hover:text-green-500 hover:bg-green-200">Top Management Committee</a>
                </li>
                @if(Route::has('login'))
                @auth
                <li>
                  <a href="{{url('sop')}}" class="text-gray-700 block px-4 py-2 text-sm  border-l-2 border-green-700 lg:hover:text-green-500 hover:bg-green-200">Standard Operating Protocol</a>
                </li>
                
                else
                <a href="{{route('login')}}" class="text-white bg-green-500 hover:bg-green-700 focus:ring-4 focus:ring-green-500 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0">Login</a>

                @endauth
                @endif
                </ul>
               </div>
        </li>
                    <li>
                        <a href="{{url('contact')}}" class="block focus:text-green-500 py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-500 lg:p-0 ">Contact Us</a>
                    </li>
        
                    <li>
                        <a href="{{url('our_services')}}" class="block focus:text-green-500 py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-500 lg:p-0 ">Services</a>
                    </li>
                    <li>
                        <a href="{{url('career')}}" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-500 lg:p-0 ">Career</a>
                    </li>
                    @if  (Route::has('login'))@auth
                    <li><a href="{{url('my_appointment')}}" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-500 lg:p-0 " >Appointment History</a></li>
                        @else
                        @endauth
                        @endif

                    <li>
                        <a href="{{url('latest_news')}}" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-500 lg:p-0 ">Latest News</a>
                    </li>
                    <li>
                        <a href="{{url('programs')}}" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-500 lg:p-0 ">Programs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>