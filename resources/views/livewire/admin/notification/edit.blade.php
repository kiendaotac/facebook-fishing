<main>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">Sửa thông báo</h1>
        </div>
    </header>
    <div>
        <div class="md:grid md:gap-6 px-96 py-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                <label for="title" class="block text-sm font-medium text-gray-700">Tiêu đề thông báo</label>
                                <input id="title" wire:model.debounce.1s="title" type="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="content" class="block text-sm font-medium text-gray-700">Nội dung thông báo</label>
                                <input id="content" wire:model.debounce.1s="content" type="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="content" class="block text-sm font-medium text-gray-700">Thời gian tự động hiện thông báo</label>
                                <input id="content" wire:model.debounce.1s="time_start" type="number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="content" class="block text-sm font-medium text-gray-700">Thời gian tự động chuyển hướng</label>
                                <input id="content" wire:model.debounce.1s="time_redirect" type="number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                            <label for="status" class="block text-sm font-medium text-gray-700">Trạng thái</label>
                            <select wire:model.debounce.1s="status" id="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="active">Kích hoạt</option>
                                <option value="inactive">Không kích hoạt</option>
                            </select>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button wire:click="editNotification" type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@push('css')
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
@endpush
@push('js')
    <script>
        module.exports = {
            // ...
            plugins: [
                // ...
                require('@tailwindcss/forms'),
            ],
        }
    </script>
@endpush