@extends('admins.layout.template')

@section('title', 'PWH | Management Loker')

@section('content')
    <h1 class="fs-1 mb-5">Management Loker</h1>
    <div class="d-flex mb-3">
        <a href={{ route('admin.loker.tambah') }} class="btn btn-primary ms-auto">Tambah</a>
    </div>
    <div class="d-flex flex-column flex-lg-row flex-wrap gap-3">
        @foreach ($loker as $l)
            @php
                $originalString = htmlspecialchars_decode($l->deskripsi_loker);
                $maxCharacters = 100;
                $truncatedString = Str::limit($originalString, $maxCharacters, '...');
            @endphp    
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $l->nama_loker }}</h5>
                    <p class="card-text">
                        @php
                            echo $truncatedString;
                        @endphp
                    </p>
                    <a href="{{ route('admin.loker.edit', $l->id) }}" class="btn btn-warning">
                        <div class="d-flex align-items-center gap-2">
                            <span class="fas fa-pencil"></span>
                            <span>Edit</span>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
