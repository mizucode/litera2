<x-canvas>
    <section class="bg-gray-50 dark:bg-gray-900 mt-5 sm:p-5">
        <div class="mx-auto max-w-screen-xl">
            <!-- Start coding here -->
            <div class="bg-white px-4 py-4 dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div
                    class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="w-full md:w-1/2">
                        <h1 class="font-bold text-2xl">Total Laporan Saya</h1>
                    </div>
                </div>
                <!-- Responsive Table Wrapper -->
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">Judul</th>
                                <th scope="col" class="px-4 py-3">Status</th>
                                <th scope="col" class="px-4 py-3 pl-32">Edit Laporan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $post->title }}
                                    </th>


                                    <td class="px-2 py-3 ">
                                        @if ($post->status === 'disetujui')
                                            <div class="py-2 px-2 bg-green-500 text-white text-center rounded-md">
                                                Disetujui</div>
                                        @elseif($post->status === 'tidak_disetujui')
                                            <div class="py-2 px-2 bg-red-500 text-white text-center rounded-md">Tidak
                                                Disetujui</div>
                                        @else
                                            <div class="py-2 px-2 bg-gray-400 text-white text-center rounded-md">Dalam
                                                Proses</div>
                                        @endif
                                    </td>
                                    <td class="py-3 px-4 pl-32">

                                        <a href="/dashboard/posts/delete/{{ $post->slug }}/edit"
                                            class="py-2 px-4 w-32 block bg-blue-500 text-white text-center rounded-md">
                                            Edit
                                        </a>
                                        <form action="/dashboard/posts/delete/{{ $post->slug }}" method="post"
                                            class="mt-2">
                                            @method('delete') @csrf
                                            <button onclick="return confirm('Yakin Ingin Hapus Laporan?')"
                                                class="py-2 px-4 w-32 bg-red-500 text-white text-center rounded-md">
                                                Hapus</button>
                                        </form>

                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

</x-canvas>
