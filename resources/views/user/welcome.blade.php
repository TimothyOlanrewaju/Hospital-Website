<section class="lg:h-[30rem]">
@foreach($welcome->last() ? [$welcome->last()] : [] as $welcomes)
    <div class="max-w-screen-2xl justify-center items-center text-center flex flex-col gap-4 mt-2 md:flex-row lg:h-screen lg:gap-2 lg:pl-32 lg:mb-0">
        <div>
            <h1 class="text-4xl font-extrabold mb-4 leading-none tracking-tight md:text-3xl dark:text-white">{{$welcomes->title}}</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 md:text-lg lg:mb-8 lg:text-xl dark:text-gray-400">{{$welcomes->message}}</p>
            <a href="{{url('WhoWeAre')}}" class="bg-green-500 py-2 px-4 w-full text-white hover:bg-green-700 rounded-lg transition 1s ease-in-out ">Read More</a>
        </div>
        <div class="lg:h-screen lg:w-full">
            <img src="welcomeimage/{{$welcomes->image}}" alt="" data-aos="fade-left" data-aos-duration="700" class="object-contain lg:h-3/4 lg:w-full">
        </div>
    </div>
    @endforeach

</section>

