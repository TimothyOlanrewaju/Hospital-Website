<section class="max-w-screen-2xl px-4 py-8 mx-auto lg:px-6 lg:py-5">
    <h1 class="text-2xl font-extrabold text-center pb-3">Latest News</h1>
    @foreach($posts->chunk(3) as $chunk)
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 py-3 lg:py-3">
        @foreach($chunk as $post)
        <div class="p-6 py-3 mx-auto text-center text-gray-900 bg-white border border-gray-100 rounded-lg shadow-lg shadow-green-500 dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
            <div class="flex justify-center items-center w-90 h-40 lg:h-56 overflow-hidden">
                <img src="/blogimage/{{$post->image}}" alt="" class="object-scale-down w-full h-full">
            </div>
            <div class="text-left mt-4">
                <h1 class="text-xl font-bold"><a href="blog-single.html">{{$post->title}}</a></h1>
                <p>{{ substr($post->message, 0, 50) }}{{ strlen($post->message) > 50 ? "..." : "" }}</p>
                <button class="bg-green-500 text-white mt-3 py-2 px-4 rounded-lg hover:bg-green-700 transition:0.5s ease-in-out"><a href="{{url('post_details',$post->id)}}">Read More</a></button>
                <p>Post by <b>{{$post->name}}</b></p>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach
</section>
