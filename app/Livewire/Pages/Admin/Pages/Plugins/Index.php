<?php

namespace App\Livewire\Pages\Admin\Pages\Plugins;

use App\Models\Plugin;
use Livewire\Component;

class Index extends Component
{
    public function create()
    {
        $id = Plugin::insertGetId([
            'name' => 'New Plugin',
            'desc' => 'Description here',
            "status" => "non-active",
        ]);

        $this->redirect(route('admin.plugins.view', ['id' => $id]));
    }

    public function status($id, $status)
    {
        Plugin::find($id)->update([
            'status' => $status
        ]);

        return back()->with('success', 'Update Status Plugin Succssefly');
    }

    public function delete($id)
    {
        Plugin::find($id)->delete();

        $this->redirect(route('admin.plugins.index'));
    }

    public function render()
    {
        $plugins = Plugin::all();

        return view('pages.admin.pages.plugins.index', ['plugins' => $plugins])
            ->layout('pages.admin.layouts.layout')
            ->title('Plugins');
    }
}
