<main>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">Sửa thông tin mật khẩu: {{ $blacklist->content }}</h1>
        </div>
    </header>
    <div>
        <div class="md:grid md:gap-6 px-96 py-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="company-website" class="block text-sm font-medium text-gray-700"> Thay đổi mật khẩu </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm"> Mật khẩu </span>
                                    <input wire:model.debounce.1s="password" type="text" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Mật khẩu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button wire:click="updatePassword" type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
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