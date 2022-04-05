<?php

namespace App\Http\Livewire\Admin\Dashboard;

use App\Models\Account;
use App\Models\Log;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Index extends Component
{
    public $access;
    public $deviceCount;
    public $countryCount;
    public $browserCount;
    public $accountCount;
    public $date;

    public function mount(){
        $this->date = now()->format('Y-m-d');
        $this->getData();
    }
    public function render()
    {
        return view('livewire.admin.dashboard.index')->layout('components.layouts.app');
    }

    public function updatedDate($value) {
        $this->date = $value;

        $this->getData();
    }

    protected function getData() {
        $date = Carbon::createFromFormat('Y-m-d', $this->date);

        $logs = Log::whereDate('created_at', $date)->get();

        $this->deviceCount = Log::whereDate('created_at', $date)->select('device', DB::raw('count(*) as total'))
            ->groupBy('device')
            ->get();
        $this->countryCount = Log::whereDate('created_at', $date)->select('country', DB::raw('count(*) as total'))
            ->groupBy('country')
            ->get();
        $this->browserCount = Log::whereDate('created_at', $date)->select('browser', DB::raw('count(*) as total'))
            ->groupBy('browser')
            ->get();
        $this->access = count($logs);

        $this->accountCount = Account::whereDate('created_at', $date)->select('status', DB::raw('count(*) as total'))
            ->groupBy('status')
            ->get();
    }
}
