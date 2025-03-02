<?php

namespace App\Livewire\Pages\Admin\Pages\Plugins;

use App\Models\Document;
use App\Models\Plugin;
use Illuminate\Support\Str;
use Livewire\Component;

class Index extends Component
{
    public function create()
    {
        $id = Plugin::insertGetId([
            'name' => 'New Document',
            'body' => null,
            'url' => Str::random(10),
        ]);

        return $this->redirect(route('admin.plugins.view', ['id' => $id]), navigate: true);
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
        return back()->with('success', 'Delete Document Succssefly');
    }

    public function render()
    {
        $plugins = Plugin::all();

        return view('pages.admin.pages.plugins.index', ['plugins' => $plugins])
            ->layout('pages.admin.layouts.layout')
            ->title('Plugins');
    }
}
