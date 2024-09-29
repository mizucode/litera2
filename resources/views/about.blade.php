<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h1 class="text-xl">About Me</h1>
    <form action="/logout" method="post">
        @csrf
        <button type="submit"
            class="block w-full py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logout</button>
    </form>
</x-layout>
