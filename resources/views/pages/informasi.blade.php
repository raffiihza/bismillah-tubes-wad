@extends('layouts.app')

@section('content')
    <div class="flex flex-col pb-8">
        <x-announcement />

        <div class="m-8">
            <textarea name="" id="informasi-textfield" cols="30" rows="20"></textarea>
            <div class="p-8 flex items-center justify-end">
                <button class="bg-neutral-content px-5 py-2">
                    <i class="bi bi-trash"></i>
                    <span class="uppercase">
                        hapus
                    </span>
                </button>
                <div class="divider divider-horizontal"></div>
                <button id="send-button" class="bg-success px-5 py-2">
                    <i class="bi bi-send text-white"></i>
                    <span class="uppercase">
                        KIRIM
                    </span>
                </button>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#informasi-textfield'))
        .catch(error => {
            console.error(error);
        });
</script>
@endpush
