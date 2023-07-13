@extends('layouts.user')

@section('content')
    <div class="flex flex-row items-center justify-center">
        <div class="flex flex-col w-6/12 px-3">
            <span class="font-semibold">Welcome to Cashier</span>
            <span class="text-sm text-gray-500">Chose the Category</span>
        </div>
        <div class="flex flex-col w-6/12">
            <div class="flex flex-row bg-white items-center rounded-lg py-3">
                <input type="text" class="h-5 text-sm items-center w-full ms-3" placeholder="search" />
            </div>
        </div>
    </div>
    <div class="flex flex-row mt-7 py-3 justify-center ">
        <div class="w-full max-w-screen-md flex flex-row gap-x-5  justify-evenly">
            <div
                class="flex flex-col justify-center items-center gap-y-3 border border-gray-300 rounded-lg py-3 w-32
                h-36 cursor-pointer duration-500 hover:bg-orange-100">
                <img src="/images/soda.png" alt="My Image" />
                <span class="text-sm text-gray-500 mt-4">All Drink</span>
            </div>
            <div
                class="flex flex-col justify-center items-center gap-y-3 border border-gray-300 rounded-lg py-3 w-32
                h-36 cursor-pointer duration-500 hover:bg-orange-100">
                <img src="/images/soda.png" alt="My Image" />
                <span class="text-sm text-gray-500 mt-4">All Drink</span>
            </div>
            <div
                class="flex flex-col justify-center items-center gap-y-3 border border-gray-300 rounded-lg py-3 w-32
                h-36 cursor-pointer duration-500 hover:bg-orange-100">
                <img src="/images/soda.png" alt="My Image" />
                <span class="text-sm text-gray-500 mt-4">All Drink</span>
            </div>
            <div
                class="flex flex-col justify-center items-center gap-y-3 border border-gray-300 rounded-lg py-3 w-32
                h-36 cursor-pointer duration-500 hover:bg-orange-100">
                <img src="/images/soda.png" alt="My Image" />
                <span class="text-sm text-gray-500 mt-4">All Drink</span>
            </div>
            <div
                class="flex flex-col justify-center items-center gap-y-3 border border-gray-300 rounded-lg py-3 w-32
                h-36 cursor-pointer duration-500 hover:bg-orange-100">
                <img src="/images/soda.png" alt="My Image" />
                <span class="text-sm text-gray-500 mt-4">All Drink</span>
            </div>
        </div>
    </div>
    <div class="flex flex-col py-3 px-5 gap-y-3">
        <div class="flex flex-row justify-between inline">
            <span class='text-xl text-gray-700'>Choose Menu</span>
            <span class='text-sm text-gray-500'>13 Result</span>
        </div>
        <div class="flex flex-wrap justify-start gap-x-5 gap-y-4 py-3 overflow-y-auto max-h-96">
            <div class="flex flex-col bg-white border border-gray-300 rounded-lg py-3 w-72 duration-150">

                <div class="flex flex-row h-full">
                    <div class="flex px-2 py-1 w-6/12">
                        <img class='rounded-lg h-full'
                            src="https://ds393qgzrxwzn.cloudfront.net/resize/m600x500/cat1/img/images/0/Xd3Gwy2Dif.jpg"
                            alt="My Image" />
                    </div>
                    <div class="flex flex-col px-2 w-6/12 gap-y-3">
                        <div class="flex flex-wrap ">
                            <p class='text-[15px] text-gray-700 leading-tight '> Amercano Coffe Late</p>
                        </div>
                        <div class="flex flex-col gap-y-1">
                            <p class='text-[10px] text-gray-500 leading-tight '> Amercano Coffe Late With Passion Of Each
                                bean</p>

                        </div>
                        <div class="flex flex-row py-1">
                            <span
                                class="text-[12px] bg-custom-orange text-white px-2 py-1 rounded-md inline-block min-w-min">Rp.
                                12.000</span>
                        </div>
                    </div>

                </div>
                <div class="flex flex-row">

                    <div class="flex flex-col px-2 py-3 w-6/12">
                        <span class='text-gray-500 text-sm'>Sugar</span>
                        <div class="flex flex-row py-3 gap-x-3">
                            <div class="flex flex-col text-center">
                                <input type="radio" class="form-radio text-indigo-600 h-4 w-5" name="sugar"
                                    value="30%" />
                                <span class=" text-[#D3756B] text-[13px]">30%</span>
                            </div>
                            <div class="flex flex-col text-center">
                                <input type="radio" class="form-radio text-indigo-600 h-4 w-5" name="sugar"
                                    value="30%" />
                                <span class=" text-[#D3756B] text-[13px]">30%</span>
                            </div>
                            <div class="flex flex-col text-center">
                                <input type="radio" class="form-radio text-indigo-600 h-4 w-5" name="sugar"
                                    value="30%" />
                                <span class=" text-[#D3756B] text-[13px]">30%</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col px-2 py-3 w-6/12">
                        <span class='text-gray-500 text-sm'>Ice</span>
                        <div class="flex flex-row py-3 gap-x-3">
                            <div class="flex flex-col text-center">
                                <input type="radio" class="form-radio text-indigo-600 h-4 w-5" name="sugar"
                                    value="30%" />
                                <span class=" text-[#D3756B] text-[13px]">30%</span>
                            </div>
                            <div class="flex flex-col text-center">
                                <input type="radio" class="form-radio text-indigo-600 h-4 w-5" name="sugar"
                                    value="30%" />
                                <span class=" text-[#D3756B] text-[13px]">30%</span>
                            </div>
                            <div class="flex flex-col text-center">
                                <input type="radio" class="form-radio text-indigo-600 h-4 w-5" name="sugar"
                                    value="30%" />
                                <span class=" text-[#D3756B] text-[13px]">30%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row py-2 px-2">
                    <button onClick={onClickAdd}
                        class="bg-orange-500 hover:bg-orange-300 duration-150 rounded-3xl px-2 py-2 text-white text-sm w-full">
                        Add To Billing
                    </button>

                </div>



            </div>
            <div class="flex flex-col bg-white border border-gray-300 rounded-lg py-3 w-72 duration-150">

                <div class="flex flex-row h-full">
                    <div class="flex px-2 py-1 w-6/12">
                        <img class='rounded-lg h-full'
                            src="https://ds393qgzrxwzn.cloudfront.net/resize/m600x500/cat1/img/images/0/Xd3Gwy2Dif.jpg"
                            alt="My Image" />
                    </div>
                    <div class="flex flex-col px-2 w-6/12 gap-y-3">
                        <div class="flex flex-wrap ">
                            <p class='text-[15px] text-gray-700 leading-tight '> Amercano Coffe Late</p>
                        </div>
                        <div class="flex flex-col gap-y-1">
                            <p class='text-[10px] text-gray-500 leading-tight '> Amercano Coffe Late With Passion Of Each
                                bean</p>

                        </div>
                        <div class="flex flex-row py-1">
                            <span
                                class="text-[12px] bg-custom-orange text-white px-2 py-1 rounded-md inline-block min-w-min">Rp.
                                12.000</span>
                        </div>
                    </div>

                </div>
                <div class="flex flex-row">

                    <div class="flex flex-col px-2 py-3 w-6/12">
                        <span class='text-gray-500 text-sm'>Sugar</span>
                        <div class="flex flex-row py-3 gap-x-3">
                            <div class="flex flex-col text-center">
                                <input type="radio" class="form-radio text-indigo-600 h-4 w-5" name="sugar"
                                    value="30%" />
                                <span class=" text-[#D3756B] text-[13px]">30%</span>
                            </div>
                            <div class="flex flex-col text-center">
                                <input type="radio" class="form-radio text-indigo-600 h-4 w-5" name="sugar"
                                    value="30%" />
                                <span class=" text-[#D3756B] text-[13px]">30%</span>
                            </div>
                            <div class="flex flex-col text-center">
                                <input type="radio" class="form-radio text-indigo-600 h-4 w-5" name="sugar"
                                    value="30%" />
                                <span class=" text-[#D3756B] text-[13px]">30%</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col px-2 py-3 w-6/12">
                        <span class='text-gray-500 text-sm'>Ice</span>
                        <div class="flex flex-row py-3 gap-x-3">
                            <div class="flex flex-col text-center">
                                <input type="radio" class="form-radio text-indigo-600 h-4 w-5" name="sugar"
                                    value="30%" />
                                <span class=" text-[#D3756B] text-[13px]">30%</span>
                            </div>
                            <div class="flex flex-col text-center">
                                <input type="radio" class="form-radio text-indigo-600 h-4 w-5" name="sugar"
                                    value="30%" />
                                <span class=" text-[#D3756B] text-[13px]">30%</span>
                            </div>
                            <div class="flex flex-col text-center">
                                <input type="radio" class="form-radio text-indigo-600 h-4 w-5" name="sugar"
                                    value="30%" />
                                <span class=" text-[#D3756B] text-[13px]">30%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row py-2 px-2">
                    <button onClick={onClickAdd}
                        class="bg-orange-500 hover:bg-orange-300 duration-150 rounded-3xl px-2 py-2 text-white text-sm w-full">
                        Add To Billing
                    </button>

                </div>



            </div>
            <div class="flex flex-col bg-white border border-gray-300 rounded-lg py-3 w-72 duration-150">

                <div class="flex flex-row h-full">
                    <div class="flex px-2 py-1 w-6/12">
                        <img class='rounded-lg h-full'
                            src="https://ds393qgzrxwzn.cloudfront.net/resize/m600x500/cat1/img/images/0/Xd3Gwy2Dif.jpg"
                            alt="My Image" />
                    </div>
                    <div class="flex flex-col px-2 w-6/12 gap-y-3">
                        <div class="flex flex-wrap ">
                            <p class='text-[15px] text-gray-700 leading-tight '> Amercano Coffe Late</p>
                        </div>
                        <div class="flex flex-col gap-y-1">
                            <p class='text-[10px] text-gray-500 leading-tight '> Amercano Coffe Late With Passion Of Each
                                bean</p>

                        </div>
                        <div class="flex flex-row py-1">
                            <span
                                class="text-[12px] bg-custom-orange text-white px-2 py-1 rounded-md inline-block min-w-min">Rp.
                                12.000</span>
                        </div>
                    </div>

                </div>
                <div class="flex flex-row">

                    <div class="flex flex-col px-2 py-3 w-6/12">
                        <span class='text-gray-500 text-sm'>Sugar</span>
                        <div class="flex flex-row py-3 gap-x-3">
                            <div class="flex flex-col text-center">
                                <input type="radio" class="form-radio text-indigo-600 h-4 w-5" name="sugar"
                                    value="30%" />
                                <span class=" text-[#D3756B] text-[13px]">30%</span>
                            </div>
                            <div class="flex flex-col text-center">
                                <input type="radio" class="form-radio text-indigo-600 h-4 w-5" name="sugar"
                                    value="30%" />
                                <span class=" text-[#D3756B] text-[13px]">30%</span>
                            </div>
                            <div class="flex flex-col text-center">
                                <input type="radio" class="form-radio text-indigo-600 h-4 w-5" name="sugar"
                                    value="30%" />
                                <span class=" text-[#D3756B] text-[13px]">30%</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col px-2 py-3 w-6/12">
                        <span class='text-gray-500 text-sm'>Ice</span>
                        <div class="flex flex-row py-3 gap-x-3">
                            <div class="flex flex-col text-center">
                                <input type="radio" class="form-radio text-indigo-600 h-4 w-5" name="sugar"
                                    value="30%" />
                                <span class=" text-[#D3756B] text-[13px]">30%</span>
                            </div>
                            <div class="flex flex-col text-center">
                                <input type="radio" class="form-radio text-indigo-600 h-4 w-5" name="sugar"
                                    value="30%" />
                                <span class=" text-[#D3756B] text-[13px]">30%</span>
                            </div>
                            <div class="flex flex-col text-center">
                                <input type="radio" class="form-radio text-indigo-600 h-4 w-5" name="sugar"
                                    value="30%" />
                                <span class=" text-[#D3756B] text-[13px]">30%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row py-2 px-2">
                    <button onClick={onClickAdd}
                        class="bg-orange-500 hover:bg-orange-300 duration-150 rounded-3xl px-2 py-2 text-white text-sm w-full">
                        Add To Billing
                    </button>

                </div>



            </div>

        </div>

    </div>
@endsection
