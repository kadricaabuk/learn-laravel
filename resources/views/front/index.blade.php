@extends("layouts.front")


@section("css")
@endsection

@section("content")

    <x-article>
        <x-slot:title2>Makale2</x-slot:title2>
        <x-slot name="title">Makale 1</x-slot>
        <hr>
        <x-slot name="content">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi culpa debitis dolorum, eaque eum ipsum odit officia placeat reprehenderit velit voluptatibus? At atque dolor earum inventore nam non voluptas.
        </x-slot>

    </x-article>

@endsection

@section("js")
@endsection
