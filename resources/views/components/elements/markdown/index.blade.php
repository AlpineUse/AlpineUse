
<div class="w-full prose text-start text-dark dark:text-light dark:prose-invert">
    {!! Illuminate\Support\Str::markdown(File::get(resource_path($path))) !!}
</div>