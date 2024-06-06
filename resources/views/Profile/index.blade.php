
@extends('layout.app')
@section('content')
<div class="block justify-between page-header md:flex">
    <div>
        <h3 class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold"> Profile</h3>
    </div>
    <ol class="flex items-center whitespace-nowrap min-w-0">
        <li class="text-[0.813rem] ps-[0.5rem]">
        <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
            Pages
            <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
        </a>
        </li>
        <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 " aria-current="page">
            Profile
        </li>
    </ol>
</div>
<!-- Page Header Close -->

<!-- Start::row-1 -->
<div class="grid grid-cols-12 gap-x-6">
    <div class="xxl:col-span-4 xl:col-span-12 col-span-12">
        <div class="box overflow-hidden">
            <div class="box-body !p-0">
                <div class="sm:flex items-start p-6      main-profile-cover">
                    <div>
                        <span class="avatar avatar-xxl avatar-rounded me-4">
                            <img src="{{ asset('assets/images/faces/9.jpg') }}" alt="">
                        </span>
                    </div>
                    <div class="flex-grow main-profile-info">
                        <div class="flex items-center !justify-between">
                            <h6 class="font-semibold mb-1 text-white text-[1rem]">{{ $user['name'] }}</h6>
                        
                        </div>
                        <p class="mb-1 !text-white  opacity-[0.7]">{{ $user['username'] }}</p>
                        <p class="text-[0.75rem] text-white mb-6 opacity-[0.5]">
                            <span class="me-4 inline-flex"><i class="ri-building-line me-1 align-middle"></i>{{ $user['address']['city'] }}</span>
                            <span class="inline-flex"><i class="ri-map-pin-line me-1 align-middle"></i>{{ $user['address']['street'] }}</span>
                        </p>
                        <div class="flex mb-0">
                            <div class="me-6">
                                <p class="font-bold text-[1.25rem] text-white text-shadow mb-0">{{ $numberOfAlbums }}</p>
                                <p class="mb-0 text-[.6875rem] opacity-[0.5] text-white">Albums</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                <div class="p-6 border-b border-dashed dark:border-defaultborder/10">
                    <p class="text-[.9375rem] mb-2 me-6 font-semibold">Contact Information :</p>
                    <div class="text-[#8c9097] dark:text-white/50">
                        <p class="mb-2">
                            <span class="avatar avatar-sm avatar-rounded me-2 bg-light text-[#8c9097] dark:text-white/50">
                                <i class="ri-mail-line align-middle text-[.875rem] text-[#8c9097] dark:text-white/50"></i>
                            </span>
                            {{ $user['email'] }}
                        </p>
                        <p class="mb-2">
                            <span class="avatar avatar-sm avatar-rounded me-2 bg-light text-[#8c9097] dark:text-white/50">
                                <i class="ri-phone-line align-middle text-[.875rem] text-[#8c9097] dark:text-white/50"></i>
                            </span>
                            {{ $user['phone'] }}
                        </p>
                        <p class="mb-0">
                            <span class="avatar avatar-sm avatar-rounded me-2 bg-light text-[#8c9097] dark:text-white/50">
                                <i class="ri-map-pin-line align-middle text-[.875rem] text-[#8c9097] dark:text-white/50"></i>
                            </span>
                            {{ $user['website'] }}
                        </p>
                    </div>
                </div>
               
                
            </div>
        </div>
    </div>
    <div class="xxl:col-span-8 xl:col-span-12 col-span-12">
        <div class="grid grid-cols-12 gap-x-6">
            <div class="xl:col-span-12 col-span-12">
                <div class="box">
                    <div class="box-body !p-0">
                        <div class="!p-4 border-b dark:border-defaultborder/10 border-dashed md:flex items-center justify-between">
                            <nav class="-mb-0.5 sm:flex md:space-x-6 rtl:space-x-reverse pb-2">
                                <a class="w-full sm:w-auto flex active hs-tab-active:font-semibold  hs-tab-active:text-white hs-tab-active:bg-primary rounded-md py-2 px-4 text-primary text-sm" href="javascript:void(0);" id="activity-tab" data-hs-tab="#activity-tab-pane" aria-controls="activity-tab-pane">
                                    <i class="ri-gift-line  align-middle inline-block me-1"></i>Albums
                                </a>
                                
                            </nav>
                            
                        </div>
                        <div class="!p-4">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane show active fade !p-0 !border-0" id="activity-tab-pane"
                                    role="tabpanel" aria-labelledby="activity-tab" tabindex="0">
                                   
                                        
                                    
                                    <div class="grid grid-cols-12 sm:gap-x-6 gap-y-6">
                                        @foreach ($albums as $album)
                                        <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 col-span-12">
                                            
                                            <a href="build/assets/images/media/media-40.jpg" class="glightbox card" data-gallery="gallery1">
                                                <img src="{{ asset('assets/images/media/media-40.jpg') }}" alt="image" class="rounded-md w-full">
                                                <p>{{ $album['title'] }}</p>
                                            </a>
                                           
                                        </div>
                                        @endforeach
                                        <div class="col-span-12">
                                            <div class="text-center mt-6">
                                                <button type="button" class="ti-btn ti-btn-primary !font-medium">Show All</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection