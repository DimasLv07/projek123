@extends('layout.layout')

@section('content')
    <div class="profile-container border-[0.5px] border-[#1F1F1F] py-[24px] px-[36px]">
        <h1 class="mb-[12px] font-[600] text-[24px] ops text-[#1F1F1F]">Profil Saya</h1>
        <hr class="mb-[24px]">
        <div class="flex justify-between items-start mb-[19px]">
            <div>
                <p class="text-[#737373] text-[20px] font-[400] ops">Biodata</p>
                <p class="text-[#737373] text-[16px] font-[300]">Berikan informasi anda agar orang lain dapat mengenal anda.
                </p>
            </div>
            <div class="rounded-[3.5px] bg-[#0081FF] py-[10px] px-[33px]">
                <p class="ops font-[700] text-[14px] text-white"><a href="">Edit Profil</a></p>
            </div>
        </div>
        <div class="flex mb-[27px]">
            <label class="mr-[24px] text-[18px] ops font-[600] text-[#1F1F1F]" for="namaInput">Nama Lengkap</label>
            <input class=" border rounded  py-1 w-[533px] px-3" id="namaInput" type="text" placeholder="Username">
        </div>
        <div class="flex mb-[48px]">
            <p class="w-[126px] text-right mr-[24px] text-[18px] ops font-[600] text-[#1F1F1F]">Foto Profile</p>
            <div class="mr-[12px] p-[24px] profil-rgba">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                    <path
                        d="M24 8C26.1217 8 28.1566 8.84285 29.6569 10.3431C31.1571 11.8434 32 13.8783 32 16C32 18.1217 31.1571 20.1566 29.6569 21.6569C28.1566 23.1571 26.1217 24 24 24C21.8783 24 19.8434 23.1571 18.3431 21.6569C16.8429 20.1566 16 18.1217 16 16C16 13.8783 16.8429 11.8434 18.3431 10.3431C19.8434 8.84285 21.8783 8 24 8ZM24 28C32.84 28 40 31.58 40 36V40H8V36C8 31.58 15.16 28 24 28Z"
                        fill="white" />
                </svg>
            </div>
            <div class="">

                <p
                    class="inline-block mb-[8.5px] rounded-[3.5px] bg-[#0081FF] py-[10px] px-[33px] ops font-[700] text-[14px] text-white">
                    Edit Profil</p>

                <p class="text-[12px] font-[300] ops text-[#737373]">Ukuran maksimal file 2 mb</p>
            </div>

        </div>

        <h1 class="mb-[12px] font-[600] text-[24px] ops text-[#1F1F1F]">Kelas Saya</h1>
        <hr class="mb-[24px]">
        <div class="grid grid-cols-4 gap-9">
            <div class="">
                <div class="h-[102.5px] w-[241px] bg-[url('{{ asset('images/product-cover-5.png') }}')] bg-center	">

                </div>
                <h1 class="text-[#252B42] text-[16px] font-[700] ops mt-[8.5px] mb-[12px]">Ultimate Adobe Photoshop
                    Training: From Beginner to Pro</h1>
                <div class="flex justify-between mb-[12px]">
                    <p class="text-[12px] font-[400] mts text-[#737373]">Graphic Deisgn</p>
                    <div class="flex items-center ">
                        <p class="text-[12px] font-[700] mts text-[#FF7E00] mr-[3.5px]">Lanjutkan</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12"
                            fill="none">
                            <g clip-path="url(#clip0_365_160)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.689428 0.259534C0.733883 0.220139 0.786695 0.188883 0.844837 0.167557C0.902979 0.146231 0.96531 0.135254 1.02826 0.135254C1.09121 0.135254 1.15354 0.146231 1.21168 0.167557C1.26982 0.188883 1.32264 0.220139 1.36709 0.259534L7.11001 5.33586C7.15458 5.37516 7.18994 5.42184 7.21406 5.47323C7.23819 5.52463 7.25061 5.57972 7.25061 5.63537C7.25061 5.69101 7.23819 5.7461 7.21406 5.7975C7.18994 5.84889 7.15458 5.89557 7.11001 5.93487L1.36709 11.0112C1.27723 11.0906 1.15535 11.1353 1.02826 11.1353C0.901173 11.1353 0.779291 11.0906 0.689428 11.0112C0.599564 10.9318 0.549079 10.824 0.549079 10.7117C0.549079 10.5994 0.599564 10.4916 0.689428 10.4122L6.09447 5.63537L0.689428 0.858541C0.64486 0.819245 0.609499 0.772564 0.585373 0.72117C0.561247 0.669776 0.548828 0.61468 0.548828 0.559037C0.548828 0.503395 0.561247 0.448299 0.585373 0.396905C0.609499 0.345511 0.64486 0.29883 0.689428 0.259534Z"
                                    fill="#FF7E00" />
                            </g>
                            <defs>
                                <clipPath id="clip0_365_160">
                                    <rect width="7" height="11" fill="white"
                                        transform="translate(0.548828 0.135254)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>

                </div>
                <div class="mb-[4px] relative  w-full">
                    <div class="border-[0.5px] center">

                    </div>
                    <div class="h-[3px]  w-[50%] bg-[#FF7E00]">

                    </div>
                </div>

                <p class="text-[10px] font-[400] mts text-[#737373]">50% SELESAI</p>
            </div>
            <div class="">
                <div class="h-[102.5px] w-[241px] bg-[url('{{ asset('images/product-cover-5.png') }}')] bg-center	">

                </div>
                <h1 class="text-[#252B42] text-[16px] font-[700] ops mt-[8.5px] mb-[12px]">Ultimate Adobe Photoshop
                    Training: From Beginner to Pro</h1>
                <div class="flex justify-between mb-[12px]">
                    <p class="text-[12px] font-[400] mts text-[#737373]">Graphic Deisgn</p>
                    <div class="flex items-center ">
                        <p class="text-[12px] font-[700] mts text-[#FF7E00] mr-[3.5px]">Lanjutkan</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12"
                            fill="none">
                            <g clip-path="url(#clip0_365_160)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.689428 0.259534C0.733883 0.220139 0.786695 0.188883 0.844837 0.167557C0.902979 0.146231 0.96531 0.135254 1.02826 0.135254C1.09121 0.135254 1.15354 0.146231 1.21168 0.167557C1.26982 0.188883 1.32264 0.220139 1.36709 0.259534L7.11001 5.33586C7.15458 5.37516 7.18994 5.42184 7.21406 5.47323C7.23819 5.52463 7.25061 5.57972 7.25061 5.63537C7.25061 5.69101 7.23819 5.7461 7.21406 5.7975C7.18994 5.84889 7.15458 5.89557 7.11001 5.93487L1.36709 11.0112C1.27723 11.0906 1.15535 11.1353 1.02826 11.1353C0.901173 11.1353 0.779291 11.0906 0.689428 11.0112C0.599564 10.9318 0.549079 10.824 0.549079 10.7117C0.549079 10.5994 0.599564 10.4916 0.689428 10.4122L6.09447 5.63537L0.689428 0.858541C0.64486 0.819245 0.609499 0.772564 0.585373 0.72117C0.561247 0.669776 0.548828 0.61468 0.548828 0.559037C0.548828 0.503395 0.561247 0.448299 0.585373 0.396905C0.609499 0.345511 0.64486 0.29883 0.689428 0.259534Z"
                                    fill="#FF7E00" />
                            </g>
                            <defs>
                                <clipPath id="clip0_365_160">
                                    <rect width="7" height="11" fill="white"
                                        transform="translate(0.548828 0.135254)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>

                </div>
                <div class="mb-[4px] relative  w-full">
                    <div class="border-[0.5px] center">

                    </div>
                    <div class="h-[3px]  w-[50%] bg-[#FF7E00]">

                    </div>
                </div>

                <p class="text-[10px] font-[400] mts text-[#737373]">50% SELESAI</p>
            </div>
            <div class="">
                <div class="h-[102.5px] w-[241px] bg-[url('{{ asset('images/product-cover-5.png') }}')] bg-center	">

                </div>
                <h1 class="text-[#252B42] text-[16px] font-[700] ops mt-[8.5px] mb-[12px]">Ultimate Adobe Photoshop
                    Training: From Beginner to Pro</h1>
                <div class="flex justify-between mb-[12px]">
                    <p class="text-[12px] font-[400] mts text-[#737373]">Graphic Deisgn</p>
                    <div class="flex items-center ">
                        <p class="text-[12px] font-[700] mts text-[#FF7E00] mr-[3.5px]">Lanjutkan</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12"
                            fill="none">
                            <g clip-path="url(#clip0_365_160)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.689428 0.259534C0.733883 0.220139 0.786695 0.188883 0.844837 0.167557C0.902979 0.146231 0.96531 0.135254 1.02826 0.135254C1.09121 0.135254 1.15354 0.146231 1.21168 0.167557C1.26982 0.188883 1.32264 0.220139 1.36709 0.259534L7.11001 5.33586C7.15458 5.37516 7.18994 5.42184 7.21406 5.47323C7.23819 5.52463 7.25061 5.57972 7.25061 5.63537C7.25061 5.69101 7.23819 5.7461 7.21406 5.7975C7.18994 5.84889 7.15458 5.89557 7.11001 5.93487L1.36709 11.0112C1.27723 11.0906 1.15535 11.1353 1.02826 11.1353C0.901173 11.1353 0.779291 11.0906 0.689428 11.0112C0.599564 10.9318 0.549079 10.824 0.549079 10.7117C0.549079 10.5994 0.599564 10.4916 0.689428 10.4122L6.09447 5.63537L0.689428 0.858541C0.64486 0.819245 0.609499 0.772564 0.585373 0.72117C0.561247 0.669776 0.548828 0.61468 0.548828 0.559037C0.548828 0.503395 0.561247 0.448299 0.585373 0.396905C0.609499 0.345511 0.64486 0.29883 0.689428 0.259534Z"
                                    fill="#FF7E00" />
                            </g>
                            <defs>
                                <clipPath id="clip0_365_160">
                                    <rect width="7" height="11" fill="white"
                                        transform="translate(0.548828 0.135254)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>

                </div>
                <div class="mb-[4px] relative  w-full">
                    <div class="border-[0.5px] center">

                    </div>
                    <div class="h-[3px]  w-[50%] bg-[#FF7E00]">

                    </div>
                </div>

                <p class="text-[10px] font-[400] mts text-[#737373]">50% SELESAI</p>
            </div>
            <div class="">
                <div class="h-[102.5px] w-[241px] bg-[url('{{ asset('images/product-cover-5.png') }}')] bg-center	">

                </div>
                <h1 class="text-[#252B42] text-[16px] font-[700] ops mt-[8.5px] mb-[12px]">Ultimate Adobe Photoshop
                    Training: From Beginner to Pro</h1>
                <div class="flex justify-between mb-[12px]">
                    <p class="text-[12px] font-[400] mts text-[#737373]">Graphic Deisgn</p>
                    <div class="flex items-center ">
                        <p class="text-[12px] font-[700] mts text-[#FF7E00] mr-[3.5px]">Lanjutkan</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12"
                            fill="none">
                            <g clip-path="url(#clip0_365_160)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.689428 0.259534C0.733883 0.220139 0.786695 0.188883 0.844837 0.167557C0.902979 0.146231 0.96531 0.135254 1.02826 0.135254C1.09121 0.135254 1.15354 0.146231 1.21168 0.167557C1.26982 0.188883 1.32264 0.220139 1.36709 0.259534L7.11001 5.33586C7.15458 5.37516 7.18994 5.42184 7.21406 5.47323C7.23819 5.52463 7.25061 5.57972 7.25061 5.63537C7.25061 5.69101 7.23819 5.7461 7.21406 5.7975C7.18994 5.84889 7.15458 5.89557 7.11001 5.93487L1.36709 11.0112C1.27723 11.0906 1.15535 11.1353 1.02826 11.1353C0.901173 11.1353 0.779291 11.0906 0.689428 11.0112C0.599564 10.9318 0.549079 10.824 0.549079 10.7117C0.549079 10.5994 0.599564 10.4916 0.689428 10.4122L6.09447 5.63537L0.689428 0.858541C0.64486 0.819245 0.609499 0.772564 0.585373 0.72117C0.561247 0.669776 0.548828 0.61468 0.548828 0.559037C0.548828 0.503395 0.561247 0.448299 0.585373 0.396905C0.609499 0.345511 0.64486 0.29883 0.689428 0.259534Z"
                                    fill="#FF7E00" />
                            </g>
                            <defs>
                                <clipPath id="clip0_365_160">
                                    <rect width="7" height="11" fill="white"
                                        transform="translate(0.548828 0.135254)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>

                </div>
                <div class="mb-[4px] relative  w-full">
                    <div class="border-[0.5px] center">

                    </div>
                    <div class="h-[3px]  w-[50%] bg-[#FF7E00]">

                    </div>
                </div>

                <p class="text-[10px] font-[400] mts text-[#737373]">50% SELESAI</p>
            </div>
        </div>

        <h1 class="mb-[12px] font-[600] text-[24px] ops text-[#1F1F1F] mt-[55px]">Sertifikat Saya</h1>
        <hr class="mb-[24px]">

        <div class="grid grid-cols-4 gap-9">
            <div class="">
                <div class="h-[102.5px] w-[241px] bg-[url('{{ asset('images/product-cover-5.png') }}')] bg-center	">

                </div>
                <h1 class="text-[#252B42] text-[16px] font-[700] ops mt-[8.5px] mb-[12px]">Ultimate Adobe Photoshop
                    Training: From Beginner to Pro</h1>

            </div>
            <div class="">
                <div class="h-[102.5px] w-[241px] bg-[url('{{ asset('images/product-cover-5.png') }}')] bg-center	">

                </div>
                <h1 class="text-[#252B42] text-[16px] font-[700] ops mt-[8.5px] mb-[12px]">Ultimate Adobe Photoshop
                    Training: From Beginner to Pro</h1>

            </div>

        </div>


    </div>
@endsection
