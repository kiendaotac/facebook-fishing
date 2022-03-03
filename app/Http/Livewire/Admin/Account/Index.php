<?php

namespace App\Http\Livewire\Admin\Account;

use App\Models\Account;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $accounts = Account::query()->latest()->paginate(10);
        return view('livewire.admin.account.index', compact('accounts'))->layout('components.layouts.app');
    }

    public function download()
    {
        $accounts = Account::where('status', 'active')->get();
        $content = "";

        foreach ($accounts as $account){
            $username       = $account->username;
            $password       = $account->password;
            $time           = $account->created_at->format('d/m/Y - H:i:s');
            $address        = $account->address;
            $content .= "$username|$password|$time|$address\n";
        }

        $fileName = "account-".date("Y-m-d-H-i-s").".txt";
        Account::query()->update(['status' => 'inactive']);
        return response()->streamDownload(function () use ($content) {
            echo $content;
        }, $fileName);
    }
}
