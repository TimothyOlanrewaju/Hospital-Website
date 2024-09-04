<section>
    <div class="max-w-screen-xl px-4 py-8 mx-auto text-center justify-center lg:py-24 lg:px-6">
        <div class="max-w-screen-md mx-auto py-4">
            <h1 class="text-3xl font-extrabold">We offer different services to improve your health</h1>
            <img src="./images/section-img.png" alt="" class="mx-auto">
            <p class="text-gray-500">We are committed to serve and care</p>
        </div>
    <div class="max-w-screen-xl justify-center items-center text-center gap-4 flex flex-col md:flex-row lg:flex-row ">
    @foreach($who_we_are->last() ? [$who_we_are->last()] : [] as $post)
        <div class="flex-1 pb-4">
            <h1 class="text-2xl font-extrabold">{{$post->title}}</h1>
            <p>{{$post->message}}</p>    
        </div>
        @endforeach

        <div class="flex-1">
        <iframe width="425" height="315" src="https://www.youtube.com/embed/5sNrOsdgB9E?si=by1Xf2b9bsS4qlA-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    </div>
    </div>
</section>