<section>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">Dashboard</h1>
        </div>
    </header>
    <main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <!-- Replace with your content -->
            <!-- This example requires Tailwind CSS v2.0+ -->
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="bg-white">
                <div>
                    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Thống kê ngày</h2>
                    <input type="date" wire:model="date" />
                    <p class="mt-4 text-gray-500">Các thông số thống kê.</p>

                    <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Số người truy cập trong ngày</dt>
                            <dd class="mt-2 text-sm text-gray-500">{{ $access }}</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Thống kê loại thiết bị</dt>
                            @foreach($deviceCount as $device)
                                <dd class="mt-2 text-sm text-gray-500">{{$device->device}}: {{ $device->total }}</dd>
                            @endforeach
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Thống kê quốc gia</dt>
                            @foreach($countryCount as $country)
                                <dd class="mt-2 text-sm text-gray-500">{{$country->country}}: {{ $country->total }}</dd>
                            @endforeach
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Thống kê trình duyệt</dt>
                            @foreach($browserCount as $browser)
                                <dd class="mt-2 text-sm text-gray-500">{{$browser->browser}}: {{ $browser->total }}</dd>
                            @endforeach
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Thống kê số lượng account</dt>
                            @foreach($accountCount as $count)
                                <dd class="mt-2 text-sm text-gray-500">{{$count->status == 'active' ? 'Chưa download' : 'Đã download'}}: {{ $count->total }}</dd>
                            @endforeach
                        </div>
                    </dl>
                </div>
            </div>
            <!-- /End replace -->
        </div>
    </main>
</section>