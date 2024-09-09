@extends('base.base')

@section('content')

<div class="w-full h-full">

    <div class="grid xl:grid-cols-2 grid-cols-1 dark:bg-gray-800">
        <div class="justify-center flex mt-4 xl:mt-0">
            <img src="https://lazada-com.oss-ap-southeast-1.aliyuncs.com/37-department-thumbnail.jpg" class="w-2/4 xl:w-full">
        </div>
        <form action="{{ route('contact') }}" method="get" class="grid grid-cols-12 grid-rows-5 mt-12 gap-4 ">

            <div class="col-start-2 col-span-5">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="col-start-7 col-span-5">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="col-start-2 col-span-5">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="col-start-7 col-span-5">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Telepon</label>
                <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>

            <div class="col-start-2 col-span-10 ">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pesan</label>
                <input type="text" id="base-input" class="bg-gray-50 border h-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>

            <div class="col-start-2 col-span-3 mt-12">
                <button type="submit" class="bg-lime-400 hover:bg-lime-600 dark:bg-lime-700 dark:hover:dark:bg-lime-900 transition duration-150 text-white font-bold py-2 px-4 rounded">Kirim Pesan</button>
            </div>
        </form>

    </div>


</div>


@endsection