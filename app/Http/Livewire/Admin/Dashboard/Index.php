<?php

namespace App\Http\Livewire\Admin\Dashboard;

use App\Models\Log;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Index extends Component
{
    public int $access;
    public $deviceCount;
    public $countryCount;
    public $browserCount;
    public function mount(){
        $logs = Log::whereDate('created_at', Carbon::today())->get();
        $this->deviceCount = Log::select('device', DB::raw('count(*) as total'))
            ->groupBy('device')
            ->get();
        $this->countryCount = Log::select('country', DB::raw('count(*) as total'))
            ->groupBy('country')
            ->get();
        $this->browserCount = Log::select('browser', DB::raw('count(*) as total'))
            ->groupBy('browser')
            ->get();
        $this->access = count($logs);
    }
    public function render()
    {
        return view('livewire.admin.dashboard.index')->layout('components.layouts.app');
    }
}
