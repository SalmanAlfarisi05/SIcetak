<aside id="logo-sidebar"
    class="fixed left-0 top-0 z-40 w-52 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <a href="{{ route('dashboard') }}" class="flex items-center justify-center mb-5">
            <img src="https://sticker.my.id/wp-content/uploads/2023/09/cropped-LOGO-MYID-watermark.png" class="h-10"
                alt="Flowbite Logo" />

        </a>
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('dashboard') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path
                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path
                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            @if (Auth::user()->role == 'management')
                <li>
                    <a href="{{ route('order.index') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg viewBox="0 0 24 24" class="w-5 h-5 fill-gray-400" enable-background="new 0 0 24 24">
                            <g id="Transaction-Filled">
                                <path d="M14,11V8H1V4h13V1l7,5L14,11z M3,18l7,5v-3h13v-4H10v-3L3,18z"></path>
                            </g>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Data Order</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pengeluaran.index') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg viewBox="0 0 24 24" class="w-5 h-5 fill-gray-400" enable-background="new 0 0 24 24">
                            <g id="Transaction-Filled">
                                <path d="M14,11V8H1V4h13V1l7,5L14,11z M3,18l7,5v-3h13v-4H10v-3L3,18z"></path>
                            </g>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Pengeluaran</span>
                    </a>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 1024 1024">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M406.162286 94.061714l12.653714 65.316572a365.933714 365.933714 0 0 0-267.264 501.540571l-61.220571 25.892572a432.420571 432.420571 0 0 1 315.830857-592.749715z m-193.828572 757.028572l42.569143-51.2a364.105143 364.105143 0 0 0 233.764572 84.48c87.771429 0 170.642286-31.012571 236.251428-86.528l43.008 50.761143A430.665143 430.665143 0 0 1 488.594286 950.857143a430.665143 430.665143 0 0 1-276.260572-99.766857z m426.422857-666.331429a135.68 135.68 0 1 1 7.753143-68.754286 432.713143 432.713143 0 0 1 268.873143 332.8c1.462857 9.069714 2.706286 21.065143 3.803429 35.986286a31.451429 31.451429 0 0 1-31.451429 33.718857 34.889143 34.889143 0 0 1-34.816-32.329143 366.153143 366.153143 0 0 0-214.162286-301.348571z m-126.464 29.403429a78.555429 78.555429 0 1 0 0-157.037715 78.555429 78.555429 0 0 0 0 157.037715z m-320.658285 672.914285a135.68 135.68 0 1 1 0-271.286857 135.68 135.68 0 0 1 0 271.36z m0-57.051428a78.555429 78.555429 0 1 0 0-157.110857 78.555429 78.555429 0 0 0 0 157.110857z m640.731428 57.051428a135.68 135.68 0 1 1 0-271.286857 135.68 135.68 0 0 1 0 271.36z m0-57.051428a78.555429 78.555429 0 1 0 0-157.110857 78.555429 78.555429 0 0 0 0 157.110857z"></path></g>
                        </svg>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Operasional</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="dropdown-example" class="hidden py-2 space-y-2 border border-gray-600 rounded-lg my-2 px-3">
                        <li>
                            <a href="{{ route('bahan.index') }}"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <svg viewBox="0 0 512 512" class="w-5 h-5 fill-gray-400"
                                    enable-background="new 0 0 24 24">
                                    <path
                                        d="M192,7.10542736e-15 L384,110.851252 L384,332.553755 L192,443.405007 L1.42108547e-14,332.553755 L1.42108547e-14,110.851252 L192,7.10542736e-15 Z M127.999,206.918 L128,357.189 L170.666667,381.824 L170.666667,231.552 L127.999,206.918 Z M42.6666667,157.653333 L42.6666667,307.920144 L85.333,332.555 L85.333,182.286 L42.6666667,157.653333 Z M275.991,97.759 L150.413,170.595 L192,194.605531 L317.866667,121.936377 L275.991,97.759 Z M192,49.267223 L66.1333333,121.936377 L107.795,145.989 L233.374,73.154 L192,49.267223 Z"
                                        id="Combined-Shape"> </path>
                                </svg>
                                <span class="flex-1 ms-3 whitespace-nowrap">Bahan</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('laminasi.index') }}"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <svg viewBox="0 0 100 100" class="w-5 h-5 fill-gray-400 stroke-gray-400"
                                    enable-background="new 0 0 24 24">
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M50.049 16.035a4.725 2.593 0 0 0-3.39.76L1.382 41.64a4.725 2.593 0 0 0 0 3.668l45.275 24.845a4.725 2.593 0 0 0 6.684 0L98.617 45.31a4.725 2.593 0 0 0 0-3.668L53.342 16.795a4.725 2.593 0 0 0-3.293-.76zM4.727 52.857l-3.344 1.834a4.725 2.593 0 0 0 0 3.668l45.275 24.846a4.725 2.593 0 0 0 6.684 0L98.617 58.36a4.725 2.593 0 0 0-.002-3.668l-3.342-1.834l-6.683 3.666l.004.002L50 77.705l-38.596-21.18l.004-.002l-6.681-3.666z">
                                        </path>
                                    </g>
                                </svg>
                                <span class="flex-1 ms-3 whitespace-nowrap">Laminasi</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('cutting.index') }}"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <svg viewBox="0 0 491.52 491.52" class="w-5 h-5 fill-gray-400"
                                    enable-background="new 0 0 24 24">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g>
                                            <g>
                                                <path
                                                    d="M381.493,144.079c-0.04-0.103-0.072-0.214-0.118-0.313c-0.065-0.105-0.13-0.21-0.184-0.31 c-0.227-0.406-0.683-1.262-1.012-1.591l-44.875-44.877c-0.353-0.353-1.06-0.744-1.633-1.042c-0.104-0.057-0.218-0.126-0.332-0.194 c-0.134-0.056-0.277-0.099-0.418-0.148c-0.491-0.176-1.015-0.293-1.545-0.316c-0.909-0.041-1.789,0.155-2.428,0.783 l-92.952,92.951c-4.669,4.676-7.556,10.868-8.345,17.921c-0.078,0.73-0.082,1.484-0.098,2.245 c-0.259,11.017,3.959,21.281,11.555,28.874c1.534,1.532,3.272,2.865,4.924,4.073c0.796,0.589,1.604,1.099,2.428,1.609 c6.387,4.01,13.571,5.972,20.751,5.885c1.262-0.024,2.081-0.024,2.875-0.107l0.005-0.004c7.125-0.776,13.363-3.663,18.055-8.347 l92.952-92.951c0.51-0.51,0.718-1.198,0.769-1.92c0.004-0.058,0.026-0.113,0.028-0.177 C381.91,145.439,381.745,144.731,381.493,144.079z">
                                                </path>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <rect x="366.012" y="72.399"
                                                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 39.0435 295.6373)"
                                                    width="20.751" height="56.58"></rect>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M331.97,41.584L69.392,304.157c-3.892,3.892-3.892,10.224,0,14.115l13.347,13.348l129.353-129.352 c0.162-0.951,0.469-1.838,0.683-2.768c0.239-1.024,0.454-2.053,0.755-3.05c0.442-1.466,1.005-2.865,1.582-4.26 c0.361-0.875,0.674-1.77,1.087-2.616c0.732-1.5,1.608-2.908,2.5-4.311c0.416-0.656,0.763-1.353,1.214-1.984 c1.415-1.987,2.974-3.875,4.717-5.619l92.956-92.951c0.993-0.995,2.111-1.809,3.277-2.538c0.289-0.182,0.577-0.356,0.876-0.521 c1.184-0.654,2.412-1.217,3.709-1.609c0.117-0.034,0.24-0.047,0.357-0.078c1.221-0.343,2.481-0.542,3.76-0.645 c0.329-0.028,0.65-0.058,0.982-0.068c1.392-0.045,2.794,0.021,4.198,0.26c0.032,0.004,0.064,0,0.095,0.004l17.53-17.527 L331.97,41.584z">
                                                </path>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M128.431,388.682l124.774-124.778c-5.347-1.389-10.483-3.529-15.262-6.529c-1.142-0.707-2.296-1.452-3.425-2.284 c-2.056-1.508-4.473-3.368-6.771-5.666c-7.155-7.153-12.117-16.05-14.551-25.541L88.42,348.664 c-1.569,1.569-3.625,2.353-5.681,2.353c-2.056,0-4.112-0.784-5.681-2.353l-4.676-4.679l-57.96,57.972l31.983,89.563l86.788-86.716 l-4.758-4.759C125.296,396.906,125.296,391.82,128.431,388.682z">
                                                </path>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M415.113,124.726l-17.49,17.483v0.008c0.273,1.496,0.356,2.997,0.298,4.488c-0.008,0.212-0.027,0.416-0.041,0.628 c-0.099,1.419-0.307,2.824-0.701,4.182c-0.01,0.033-0.013,0.069-0.022,0.103c-0.394,1.329-0.967,2.593-1.64,3.808 c-0.157,0.285-0.322,0.557-0.494,0.833c-0.736,1.183-1.557,2.315-2.564,3.322l-92.951,92.953 c-1.753,1.755-3.653,3.322-5.653,4.742c-0.607,0.433-1.276,0.763-1.904,1.165c-1.44,0.916-2.891,1.815-4.435,2.563 c-0.823,0.399-1.693,0.7-2.543,1.048c-1.437,0.594-2.878,1.166-4.388,1.618c-0.973,0.29-1.979,0.497-2.98,0.727 c-0.96,0.22-1.878,0.535-2.861,0.7L145.477,394.363l13.347,13.346c3.892,3.885,10.224,3.9,14.117,0l262.573-262.581 L415.113,124.726z">
                                                </path>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M455.688,21.41c-28.547-28.547-74.999-28.547-103.546,0l-8.811,8.811l26.082,26.083l51.38,51.379l26.083,26.083 l8.812-8.812C484.234,96.409,484.234,49.956,455.688,21.41z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <span class="flex-1 ms-3 whitespace-nowrap">Cutting</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="{{ route('users.index') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg viewBox="0 0 24 24" class="w-5 h-5 fill-gray-400 " enable-background="new 0 0 24 24">
                            <g id="SVGRepo_iconCarrier">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5 9.5C5 7.01472 7.01472 5 9.5 5C11.9853 5 14 7.01472 14 9.5C14 11.9853 11.9853 14 9.5 14C7.01472 14 5 11.9853 5 9.5Z">
                                </path>
                                <path
                                    d="M14.3675 12.0632C14.322 12.1494 14.3413 12.2569 14.4196 12.3149C15.0012 12.7454 15.7209 13 16.5 13C18.433 13 20 11.433 20 9.5C20 7.567 18.433 6 16.5 6C15.7209 6 15.0012 6.2546 14.4196 6.68513C14.3413 6.74313 14.322 6.85058 14.3675 6.93679C14.7714 7.70219 15 8.5744 15 9.5C15 10.4256 14.7714 11.2978 14.3675 12.0632Z">
                                </path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.64115 15.6993C5.87351 15.1644 7.49045 15 9.49995 15C11.5112 15 13.1293 15.1647 14.3621 15.7008C15.705 16.2847 16.5212 17.2793 16.949 18.6836C17.1495 19.3418 16.6551 20 15.9738 20H3.02801C2.34589 20 1.85045 19.3408 2.05157 18.6814C2.47994 17.2769 3.29738 16.2826 4.64115 15.6993Z">
                                </path>
                                <path
                                    d="M14.8185 14.0364C14.4045 14.0621 14.3802 14.6183 14.7606 14.7837V14.7837C15.803 15.237 16.5879 15.9043 17.1508 16.756C17.6127 17.4549 18.33 18 19.1677 18H20.9483C21.6555 18 22.1715 17.2973 21.9227 16.6108C21.9084 16.5713 21.8935 16.5321 21.8781 16.4932C21.5357 15.6286 20.9488 14.9921 20.0798 14.5864C19.2639 14.2055 18.2425 14.0483 17.0392 14.0008L17.0194 14H16.9997C16.2909 14 15.5506 13.9909 14.8185 14.0364Z">
                                </path>
                            </g>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
                    </a>
                </li>
                <li>
            @endif
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
            this.closest('form').submit();"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 24 24">
                            <g id="SVGRepo_iconCarrier">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16.125 12C16.125 11.5858 15.7892 11.25 15.375 11.25L4.40244 11.25L6.36309 9.56944C6.67759 9.29988 6.71401 8.8264 6.44444 8.51191C6.17488 8.19741 5.7014 8.16099 5.38691 8.43056L1.88691 11.4306C1.72067 11.573 1.625 11.7811 1.625 12C1.625 12.2189 1.72067 12.427 1.88691 12.5694L5.38691 15.5694C5.7014 15.839 6.17488 15.8026 6.44444 15.4881C6.71401 15.1736 6.67759 14.7001 6.36309 14.4306L4.40244 12.75L15.375 12.75C15.7892 12.75 16.125 12.4142 16.125 12Z">
                                </path>
                                <path
                                    d="M9.375 8C9.375 8.70219 9.375 9.05329 9.54351 9.3055C9.61648 9.41471 9.71025 9.50848 9.81946 9.58145C10.0717 9.74996 10.4228 9.74996 11.125 9.74996L15.375 9.74996C16.6176 9.74996 17.625 10.7573 17.625 12C17.625 13.2426 16.6176 14.25 15.375 14.25L11.125 14.25C10.4228 14.25 10.0716 14.25 9.8194 14.4185C9.71023 14.4915 9.6165 14.5852 9.54355 14.6944C9.375 14.9466 9.375 15.2977 9.375 16C9.375 18.8284 9.375 20.2426 10.2537 21.1213C11.1324 22 12.5464 22 15.3748 22L16.3748 22C19.2032 22 20.6174 22 21.4961 21.1213C22.3748 20.2426 22.3748 18.8284 22.3748 16L22.3748 8C22.3748 5.17158 22.3748 3.75736 21.4961 2.87868C20.6174 2 19.2032 2 16.3748 2L15.3748 2C12.5464 2 11.1324 2 10.2537 2.87868C9.375 3.75736 9.375 5.17157 9.375 8Z">
                                </path>
                            </g>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Log Out</span>
                    </a>
                </form>
            </li>
        </ul>
    </div>
</aside>
