<?php

namespace App\Livewire\Pages\Admin\Pages\Docs;

use App\Models\Document;
use Illuminate\Support\Str;
use Livewire\Component;

class Index extends Component
{
    public function create()
    {
        $id = Document::insertGetId([
            'title' => 'New Document',
            'body' => null, 
            'url' => Str::random(10),
        ]);

        return $this->redirect(route('admin.docs.view', ['id' => $id]), navigate: true);
    }

    public function status($id, $status)
    {
        Document::find($id)->update([
            'status' => $status
        ]);

        return back()->with('success', 'Update Status Document Succssefly');
    }

    public function delete($id)
    {
        Document::find($id)->delete();
        return back()->with('success', 'Delete Document Succssefly');
    }

    public function render()
    {
        $Docs = Document::whereNull('plugin_id')->get();

        return view('pages.admin.pages.docs.index', ['Docs' => $Docs])
            ->layout('pages.admin.layouts.layout')
            ->title('Docs');
    }
}
