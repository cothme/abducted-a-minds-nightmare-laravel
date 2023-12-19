<x-layout>
    <div class="@container">
        <div class="@container">
            <div class="flex flex-col bg-abductedblack mx-auto m-4 ml-4 mr-4 @6xl:w-[625px] @6xl:mx-auto">
                <div class="flex flex-col @2xl:flex-row">
                    <img src="{{ asset('local_images/cothme.jpg') }}" alt="" class="w-32 h-32 m-4 rounded-full self-center">
                    <div class="text-white m-4">
                        <div class="text-white mb-8 text-4xl text-center md:text-start">
                            <h1>{{ $user->name }}</h1>
                        </div>
                        <div class="text-2xl lg:text-2xl text-center grid grid-cols-3 gap-10 mr-4">
                            <div class="flex flex-col"><p class="text-abductedpink">Posts</p><p>100</p></div>
                            <div class="flex flex-col"><p class="text-abductedpink">Followers</p><p>2000</p></div>
                            <div class="flex flex-col"><p class="text-abductedpink">Following</p><p>3000</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</x-layout>