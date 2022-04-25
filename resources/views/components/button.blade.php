<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-zinc-500 hover:bg-zinc-400 active:bg-zinc-600 focus:border-zinc-600 ring-gray-300 inline-flex items-center px-4 py-2 border border-dark rounded-pill font-semibold text-s text-black uppercase tracking-widest focus:outline-none focus:ring disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

<!-- Style Attribute bawaan, semua color nya di keluarin -->
{{-- inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 --}}