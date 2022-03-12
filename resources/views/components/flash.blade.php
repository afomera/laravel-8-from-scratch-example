@if (session()->has('success'))
    <div
        x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 5000)"
        x-show="show"
        class="fixed bottom-3 right-3 bg-blue-500 border border-blue-700 text-white px-4 py-3 rounded"
    >
        {{ session('success')}}
    </div>
@endif
