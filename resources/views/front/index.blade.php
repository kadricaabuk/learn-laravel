@extends("layouts.front")


@section("css")
@endsection

@section("content")



    <form action="" method="POST">
        @csrf
{{--        @method("DELETE")--}}
        @auresMethod('put')

        <input type="text" name="fullname">
        <button type="submit">Gönder</button>
    </form>


    <hr>
    <hr>
    <hr>
    <hr>
    <hr>

    <hr>
    içerik alanı
    <hr>
    Gelen Yaş: {{ $age ?? @$person -> age}}
    <hr>
    Gelen Isim: {{ $name ?? @$person -> name }}
    <hr>
    @if(isset($person) && isset($person -> age))
        @switch($person -> age)
            @case(10)
                Çocuk
                @break
            @case(20)
                Genç
                @break
            @default
                Yaşlandın
        @endswitch
    @else
        gelmedi
    @endif
    <hr>
@endsection

@section("js")
@endsection
