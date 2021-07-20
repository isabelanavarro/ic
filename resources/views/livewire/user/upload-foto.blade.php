@extends('layouts.app')

@section('content')


<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}

    
    <form action="{{route('upload.foto.user')}}" method="post">
        <input type="file" wire:submit.prevent="storageFoto">
        <button type="submit">Upload</button>
</form>

</div>
@endsection