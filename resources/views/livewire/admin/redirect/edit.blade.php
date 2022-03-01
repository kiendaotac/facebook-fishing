<main>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">Sửa thông tin chuyển hướng</h1>
        </div>
    </header>
    <div>
        <div class="md:grid md:gap-6 px-96 py-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="grid gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="type" class="block text-sm font-medium text-gray-700">Loại</label>
                                <select wire:ignore wire:model="type" id="type" name="type" autocomplete="country-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option @if($type == 'video') selected @endif value="video">Videos</option>
                                    <option @if($type == 'image') selected @endif value="image">Images</option>
                                    <option @if($type == 'link') selected @endif value="link">Link</option>
                                </select>
                            </div>
                            @if($type == 'link')
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="last-name" class="block text-sm font-medium text-gray-700">URL</label>
                                    <input type="text" wire:model.debounce.1s="url" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                            @else
                                <div class="col-span-6 sm:col-span-3">
                                    <label class="block text-sm font-medium text-gray-700"> Photo/Video </label>
                                    <div class="mt-1 flex items-center">
                                        <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                            <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z"/>
                                            </svg>
                                        </span>
                                        <label for="file-upload" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 cursor-pointer">
                                            <span>Chọn file</span>
                                            <input wire:model="file" id="file-upload" name="file-upload" type="file" accept="video/*, image/*" class="sr-only">
                                        </label>
                                    </div>
                                </div>
                            @endif
                            <div class="col-span-6 sm:col-span-3">
                                <label for="about" class="block text-sm font-medium text-gray-700"> Dữ liệu bổ sung </label>
                                <div class="mt-1">
                                    <textarea wire:model.debounce.1s="data" rows="5" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Dữ liệu bổ sung"></textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">Thêm các trường thông tin bổ sung ở đây,có thể để trống</p>
                            </div>
                            <div wire:ignore class="col-span-6 sm:col-span-3">
                                <label for="status" class="block text-sm font-medium text-gray-700">Trạng thái</label>
                                <select wire:model="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option @if($status == 'active') selected @endif value="active">Active</option>
                                    <option @if($status == 'inactive') selected @endif value="inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button wire:click="save({{ $redirect->id }})" type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@push('css')
    <link href="https://unpkg.com/@tailwindcss/forms/dist/forms.min.css" rel="stylesheet">
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