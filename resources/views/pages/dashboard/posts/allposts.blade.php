<x-canvas>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="py-4 px-4 mx-auto  lg:px-6">
        <div class="mx-auto max-w-screen-md sm:text-center">

            <h1>Semua Laporan</h1>
        </div>
    </div>



    @forelse ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">

            <a href="/posts/{{ $post['slug'] }}">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">
                    {{ $post['title'] }}
                </h2>
            </a>
            <div class="">
                By
                <a href="/posts?author={{ $post->author->username }}"
                    class="hover:underline text-base text-gray-500">{{ $post->author->name }}</a>
                in
                <a href="/posts?category={{ $post->category->slug }}"
                    class="hover:underline text-base text-gray-500">{{ $post->category->slug }}</a>
                |
                {{ $post->created_at->diffForHumans() }}
            </div>
            <p class="my-4 font-light">
                {{ Str::limit($post['body'], 150) }}
            </p>
            <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read More
                &raquo;</a>
        </article>

    @empty
        <div class="flex justify-center items-center flex-col">
            <p class="font-semibold text-xl my-4 ">Artikle Tidak Ditemukan</p>
            <a href="/posts" class="text-blue-500 hover:underline">Kembali ke postingan</a>
        </div>
    @endforelse

    {{ $posts->links() }}
</x-canvas>
