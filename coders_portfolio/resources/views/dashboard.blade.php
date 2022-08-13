<x-app-layout>
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root" x-data="{ openSidebar: false, openUserResponsiveDropdown: false, openUserDropdown: false, openNotification: false }">
        <!-- sidebar -->
        @include('partials.sidebar')
        <div class="relative md:ml-64 bg-blueGray-50">
            <!-- navbar -->
            @include('partials.main-nav')
            <!-- Header -->
            <div class="relative bg-pink-600 md:pt-32 pb-32 pt-12">
                <div class="px-4 md:px-10 mx-auto w-full">
                    <div>
                        <!-- Card stats -->
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4">
                                        <div class="flex flex-wrap">
                                            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                                <h5 class="text-gray-400 uppercase font-bold text-xs">
                                                    Traffic
                                                </h5>
                                                <span class="font-semibold text-xl text-gray-700">
                                                    350,897
                                                </span>
                                            </div>
                                            <div class="relative w-auto pl-4 flex-initial">
                                                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500">
                                                    <i class="far fa-chart-bar"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-sm text-gray-400 mt-4">
                                            <span class="text-emerald-500 mr-2">
                                            <i class="fas fa-arrow-up"></i> 3.48%
                                            </span>
                                            <span class="whitespace-nowrap">
                                            Since last month
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4">
                                        <div class="flex flex-wrap">
                                            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                                <h5 class="text-gray-400 uppercase font-bold text-xs">
                                                    New users
                                                </h5>
                                                <span class="font-semibold text-xl text-gray-700">
                                                    2,356
                                                </span>
                                            </div>
                                            <div class="relative w-auto pl-4 flex-initial">
                                                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-orange-500">
                                                    <i class="fas fa-chart-pie"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-sm text-gray-400 mt-4">
                                            <span class="text-red-500 mr-2">
                                            <i class="fas fa-arrow-down"></i> 3.48%
                                            </span>
                                            <span class="whitespace-nowrap">
                                            Since last week
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4">
                                        <div class="flex flex-wrap">
                                            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                                <h5 class="text-gray-400 uppercase font-bold text-xs">
                                                    Sales
                                                </h5>
                                                <span class="font-semibold text-xl text-gray-700">
                                                    924
                                                </span>
                                            </div>
                                            <div class="relative w-auto pl-4 flex-initial">
                                                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-pink-500">
                                                    <i class="fas fa-users"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-sm text-gray-400 mt-4">
                                            <span class="text-orange-500 mr-2">
                                            <i class="fas fa-arrow-down"></i> 1.10%
                                            </span>
                                            <span class="whitespace-nowrap">
                                            Since yesterday
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4">
                                        <div class="flex flex-wrap">
                                            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                                <h5 class="text-gray-400 uppercase font-bold text-xs">
                                                    Performance
                                                </h5>
                                                <span class="font-semibold text-xl text-gray-700">
                                                    49,65%
                                                </span>
                                            </div>
                                            <div class="relative w-auto pl-4 flex-initial">
                                                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-lightBlue-500">
                                                    <i class="fas fa-percent"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-sm text-gray-400 mt-4">
                                            <span class="text-emerald-500 mr-2">
                                            <i class="fas fa-arrow-up"></i> 12%
                                            </span>
                                            <span class="whitespace-nowrap">
                                            Since last month
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-4 md:px-10 mx-auto w-full -m-24">
                <div class="flex flex-wrap">
                    <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
                        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-gray-800">
                            <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                                <div class="flex flex-wrap items-center">
                                    <div class="relative w-full max-w-full flex-grow flex-1">
                                        <h6 class="uppercase text-gray-100 mb-1 text-xs font-semibold">
                                            Overview
                                        </h6>
                                        <h2 class="text-white text-xl font-semibold">
                                            Sales value
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 flex-auto">
                                <!-- Chart -->
                                <div class="relative" style="height:350px">
                                    <canvas id="line-chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full xl:w-4/12 px-4">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                            <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                                <div class="flex flex-wrap items-center">
                                    <div class="relative w-full max-w-full flex-grow flex-1">
                                        <h6 class="uppercase text-gray-400 mb-1 text-xs font-semibold">
                                            Performance
                                        </h6>
                                        <h2 class="text-gray-700 text-xl font-semibold">
                                            Total orders
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 flex-auto">
                                <!-- Chart -->
                                <div class="relative" style="height:350px">
                                    <canvas id="bar-chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap mt-4">
                    <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                            <div class="rounded-t mb-0 px-4 py-3 border-0">
                                <div class="flex flex-wrap items-center">
                                    <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                        <h3 class="font-semibold text-base text-gray-700">
                                            Page visits
                                        </h3>
                                    </div>
                                    <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                                        <button class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none transition focus:outline-none mr-1 mb-1" type="button">
                                            See all
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="block w-full overflow-x-auto">
                                <!-- Projects table -->
                                <table class="items-center w-full bg-transparent border-collapse">
                                    <thead>
                                        <tr>
                                            <th class="px-6 bg-blueGray-50 text-gray-500 align-middle border border-solid border-gray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                Page name
                                            </th>
                                            <th class="px-6 bg-blueGray-50 text-gray-500 align-middle border border-solid border-gray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                Visitors
                                            </th>
                                            <th class="px-6 bg-blueGray-50 text-gray-500 align-middle border border-solid border-gray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                Unique users
                                            </th>
                                            <th class="px-6 bg-blueGray-50 text-gray-500 align-middle border border-solid border-gray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                Bounce rate
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                                /argon/
                                            </th>
                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                4,569
                                            </td>
                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                340
                                            </td>
                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                <i class="fas fa-arrow-up text-emerald-500 mr-4"></i>
                                                46,53%
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            /argon/index.html
                                            </th>
                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            3,985
                                            </td>
                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            319
                                            </td>
                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class="fas fa-arrow-down text-orange-500 mr-4"></i>
                                            46,53%
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            /argon/charts.html
                                            </th>
                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            3,513
                                            </td>
                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            294
                                            </td>
                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class="fas fa-arrow-down text-orange-500 mr-4"></i>
                                            36,49%
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            /argon/tables.html
                                            </th>
                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            2,050
                                            </td>
                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            147
                                            </td>
                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class="fas fa-arrow-up text-emerald-500 mr-4"></i>
                                            50,87%
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            /argon/profile.html
                                            </th>
                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            1,795
                                            </td>
                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            190
                                            </td>
                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class="fas fa-arrow-down text-red-500 mr-4"></i>
                                            46,53%
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="w-full xl:w-4/12 px-4">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                            <div class="rounded-t mb-0 px-4 py-3 border-0">
                                <div class="flex flex-wrap items-center">
                                    <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                        <h3 class="font-semibold text-base text-gray-700">
                                            Social traffic
                                        </h3>
                                    </div>
                                    <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                                        <button class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 transition" type="button">
                                            See all
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="block w-full overflow-x-auto">
                                <!-- Projects table -->
                                <table class="items-center w-full bg-transparent border-collapse">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="px-6 bg-blueGray-50 text-gray-500 align-middle border border-solid border-gray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                Referral
                                            </th>
                                            <th class="px-6 bg-blueGray-50 text-gray-500 align-middle border border-solid border-gray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                Visitors
                                            </th>
                                            <th
                                            class="px-6 bg-blueGray-50 text-gray-500 align-middle border border-solid border-gray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                                            style="min-width:140px"
                                            ></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                                Facebook
                                            </th>
                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                1,480
                                            </td>
                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                <div class="flex items-center">
                                                    <span class="mr-2">60%</span>
                                                    <div class="relative w-full">
                                                        <div class="overflow-hidden h-2 text-xs flex rounded bg-red-200">
                                                            <div style="width:60%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                                Facebook
                                            </th>
                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                5,480
                                            </td>
                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                <div class="flex items-center">
                                                    <span class="mr-2">70%</span>
                                                    <div class="relative w-full">
                                                        <div class="overflow-hidden h-2 text-xs flex rounded bg-emerald-200">
                                                            <div style="width:70%"  class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-emerald-500"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                                Google
                                            </th>
                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                4,807
                                            </td>
                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                <div class="flex items-center">
                                                    <span class="mr-2">80%</span>
                                                    <div class="relative w-full">
                                                        <div class="overflow-hidden h-2 text-xs flex rounded bg-purple-200">
                                                            <div style="width:80%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-purple-500"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                                Instagram
                                            </th>
                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                3,678
                                            </td>
                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                <div class="flex items-center">
                                                    <span class="mr-2">75%</span>
                                                    <div class="relative w-full">
                                                        <div class="overflow-hidden h-2 text-xs flex rounded bg-lightBlue-200">
                                                            <div class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-lightBlue-500 w-3/4"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            twitter
                                            </th>
                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            2,645
                                            </td>
                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <div class="flex items-center">
                                                <span class="mr-2">30%</span>
                                                <div class="relative w-full">
                                                <div class="overflow-hidden h-2 text-xs flex rounded bg-orange-200">
                                                    <div
                                                    style="width:30%"
                                                    class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-emerald-500"
                                                    ></div>
                                                </div>
                                                </div>
                                            </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                @include('partials.main-footer')
            </div>
        </div>
    </div>
</x-app-layout>
