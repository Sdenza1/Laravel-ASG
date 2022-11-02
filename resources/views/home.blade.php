@extends('template')

@section('title', 'GSLC 1')

@section('content')
    <div>
        @for ($i = 1; $i <= 12; $i++)
            @if ($i < 12 )
               <p> {{$i}} WORD : Belum <p>
            @elseif ($i == 12)
                <p> LAST WORD : Sudah </p>
            @endif
        @endfor
    </div>
@endsection
