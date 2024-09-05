@extends('base.base')

@section('content')

<div class="w-full mx-auto relative h-screen isolate overflow-hidden">
    <img src="https://lazada-com.oss-ap-southeast-1.aliyuncs.com/static/image/home-hero_x1.webp" alt="Hero" class="absolute inset-0 -z-10 h-full w-full object-cover object-center md:object-center">
    <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
        <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
        <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="h-full items-end justify-center flex items-end pb-20">
        <div class="flex flex-col items-center">
            <p class="tracking-tight text-white text-3xl text-center inline-block bg-gradient-to-r from-orange-500 to-pink-500 text-white font-bold p-2">SETTING THE PACE</p>
            <p class="tracking-tight text-white text-3xl text-center inline-block bg-gradient-to-r from-orange-500 to-pink-500 text-white font-bold p-2">FOR A RETAIL REVOLUTION</p>
        </div>
    </div>
</div>


<div class="w-full py-24 flex justify-center">
    <div class=" w-3/5 text-justify">
        Lazada's constantly evolving technology, logistics and payments infrastructure connects this vast and diverse region, and offers Southeast Asia a shopping experience that is safe, seamless and enjoyable. At Lazada, nothing stands still. As the demands of discerning shoppers and ambitious retailers continue to grow, we’re always a few steps ahead.
    </div>
</div>

<div class="w-full ">
    <h1 class="mb-16 tracking-tight text-white text-3xl sm:ms-32 text-center sm:inline-block bg-gradient-to-r from-orange-500 to-pink-500 text-white font-bold p-2">Our Core Pillars</h1>
    <div class="grid grid-cols-1 lg:grid-cols-3 flex justify-items-center">


        <div class="p-5 pt-12 pb-12 w-full bg-orange-300 text-red-950">
            <div class="grid grid-cols-8 gap-8">
                <div class="col-start-2 col-span-5">
                    <div class="text-2xl font-semibold">Logistics</div>
                    <div class="text-2xl font-normal mt-2">WE GET IT THERE</div>

                </div>
                <div class="text-6xl col-span-1 text-end font-bold items-center">1</div>
                <div class="col-start-2 col-span-6 text-md text-justify">
                    With end-to-end logistics capabilities and complete control over our supply chain, virtually any product is a click away. We have fulfillment centres across 17 Southeast Asian cities, and our investment in warehouses, sorting centres, and digital technologies complement our partner network and our cross-border and last mile arrangements in each country.
                </div>
            </div>
        </div>

        <div class="p-5 pt-12 pb-12 w-full bg-orange-500 text-white">
            <div class="grid grid-cols-8 gap-8">
                <div class="col-start-2 col-span-5">
                    <div class="text-2xl font-semibold ">Technology</div>
                    <div class="text-2xl font-normal mt-2">A SMARTER WAY
                        TO SHOP</div>
                </div>
                <div class="text-6xl col-span-1 text-end font-bold items-center">2</div>
                <div class="col-start-2 col-span-6 text-md text-justify">
                    At Lazada, we harness both existing and emerging technologies to redefine the retail experience. Leveraging data in real time allows us to quickly adapt to changing demands and conditions. We connect consumers to brands, create customised experiences, and have evolved into a retail destination that customers come to for both shopping and entertainment. And we continue to push the boundaries. Project Voyager, our technology stack jointly developed with Alibaba, powers Lazada with the most scalable and competitive product and technology solutions for the next decade.
                </div>
            </div>
        </div>


        <div class="p-5 pt-12 pb-12 w-full bg-orange-700 text-white">
            <div class="grid grid-cols-8 gap-8">
                <div class="col-start-2 col-span-5">
                    <div class="text-2xl font-semibold">Payments</div>
                    <div class="text-2xl font-normal mt-2">SAFE, SEAMLESS TRANSACTIONS</div>
                </div>
                <div class="text-6xl col-span-1 text-end font-bold items-center text-orange-400">3</div>
                <div class="col-start-2 col-span-6 text-md text-justify">
                    Ensuring secure and seamless transactions guides the development of Southeast Asia’s most secure payments and financial services infrastructure. In a region still at varying stages of e-payment and eCommerce adoption, we’ve evolved a suite of options that cater to existing preferences while easing customers into digital payments through intuitive solutions they can trust.
                </div>
            </div>
        </div>


    </div>
</div>

<div class="w-full h-screen lg:block hidden" style="background: linear-gradient(to right, white 25%, white 37%, #D3003E 37%, #D3003E 75%);">
    <div class="grid grid-cols-10 h-screen lg:absolute items-center">
        <div class="col-span-10 lg:col-start-2 lg:col-span-4 justify-center flex">
            <img src="https://lazada-com.oss-ap-southeast-1.aliyuncs.com/11-lazada_business.jpg" class="h-72">
        </div>
        <div class="ms-8 lg:col-span-4 col-span-8 text-justify">
            <p class="mb-16 tracking-tight text-3xl text-center inline-block bg-gradient-to-r from-orange-500 to-pink-500 text-white font-bold p-2">Our Business</p>
            <p class="mb-8 tracking-tight ms-3 text-xl text-white font-bold">Cross-Border</p>
            <p class="mb-16 tracking-tight ms-3 text-md text-white ">With a mission to bring the world to Southeast Asia and provide a gateway for Southeast Asian brands to reach international consumers, Lazada’s cross-border business features homegrown brands and sellers from markets that include China, Hong Kong SAR, Korea, Japan, the United States, and Europe. Through our Global Collection channel, Lazada offers a wide assortment of products across various categories, including fashion, electronics, and sports and outdoors. Alibaba’s technology infrastructure and unrivalled logistics network gets purchases to customers within seven days of placing an order.
            </p>

        </div>
    </div>
</div>
<div class="w-full h-auto pb-12 pt-12 lg:hidden" style="background-color: #D3003E;">
    <div class="grid grid-cols-10 items-center">
        <div class="col-span-10 justify-center flex">
            <img src="https://lazada-com.oss-ap-southeast-1.aliyuncs.com/11-lazada_business.jpg" class="h-72">
        </div>

        <div class="ms-8 col-span-8 text-justify mt-12 ">
            <p class="mb-5 tracking-tight text-3xl text-center inline-block bg-gradient-to-r from-orange-500 to-pink-500 text-white font-bold p-2">Our Business</p>
            <p class="mb-8 tracking-tight ms-3 text-xl text-white font-bold">Cross-Border</p>
            <p class="mb-16 tracking-tight ms-3 text-md text-white ">With a mission to bring the world to Southeast Asia and provide a gateway for Southeast Asian brands to reach international consumers, Lazada’s cross-border business features homegrown brands and sellers from markets that include China, Hong Kong SAR, Korea, Japan, the United States, and Europe. Through our Global Collection channel, Lazada offers a wide assortment of products across various categories, including fashion, electronics, and sports and outdoors. Alibaba’s technology infrastructure and unrivalled logistics network gets purchases to customers within seven days of placing an order.
            </p>

        </div>
    </div>
</div>

@endsection