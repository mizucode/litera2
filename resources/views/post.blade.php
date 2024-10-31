<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="py-8 max-w-screen-md">

        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="">
            By sadasndkjasd
            <a href="/posts?author={{ $post->author->username }}"
                class="hover:underline text-base text-gray-500 ">{{ $post->author->name }}</a>
            inasdasd
            <a href="/posts?category={{ $post->category->slug }}"
                class="hover:underline text-base text-gray-500 ">{{ $post->category->slug }}</a>
            |
            {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">
            {{ $post['body'] }}
        </p>
        <a href="/dashboard/posts/" class="font-medium text-blue-500 hover:underline"> &laquo; Back To Post</a>
        <p>{{ $post->image }}</p>
        @if (Auth::check() && Auth::user()->role === 'admin')
            <form action="{{ route('posts.updateStatus', $post->id) }}" method="POST" class="mt-4">
                @csrf
                @method('PUT')
                <label for="status" class="block mb-2 text-sm font-medium text-gray-700">Change Status</label>
                <select name="status" id="status" class="border-gray-300 rounded-md">
                    <option value="disetujui" {{ $post->status === 'disetujui' ? 'selected' : '' }}>Disetujui</option>
                    <option value="tidak_disetujui" {{ $post->status === 'tidak_disetujui' ? 'selected' : '' }}>Tidak
                        Disetujui</option>
                    <option value="dalam_proses" {{ $post->status === 'dalam_proses' ? 'selected' : '' }}>Dalam Proses
                    </option>
                </select>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                    Update Status
                </button>
            </form>
        @endif
        <img src="storage/post/{{ $post->image }}" alt="sadawd">
    </article>
</x-layout>
