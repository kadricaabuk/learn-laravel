@extends("layouts.front")

@section("css")
@endsection

@section("content")
    <hr>
    İletişim Sayfası
    <hr>
    <div class="col-8 mx-auto">
        <form action="{{ route("contact") }}" method="POST">
            @csrf
            <input type="text" class="form-control" name="fullname">
            <br>
            <input type="text" class="form-control" name="email">
            <br>
            <button class="btn btn-success" type="submit">
                Gönder
            </button>
        </form>
    </div>

    <hr>

    <div class="col-8 mx-auto">
        İletişim Sayfası 2
        <hr>
        <form action="{{ route("user", ["id" => 5, "name" => "kadri"]) }}" method="POST">
            @csrf
            <input type="text" class="form-control" name="fullname">
            <br>
            <input type="text" class="form-control" name="email">
            <br>
            <button class="btn btn-success" type="submit">
                Gönder
            </button>
        </form>
    </div>

    <hr>

    <div class="col-8 mx-auto">
        Support Form
        <hr>
        <form action="{{ route("support-form.support") }}" method="POST">
            @csrf
            <input type="text" class="form-control" name="fullname">
            <br>
            <input type="text" class="form-control" name="email">
            <br>
            <button class="btn btn-success" type="submit">
                Gönder
            </button>
        </form>
    </div>

    <hr>

    <div class="col-8 mx-auto">
        Patch Form
        <hr>
        <form action="{{ route("user.update", ["id" => 9]) }}" method="POST">
            @csrf
            @method('PATCH')

            <input type="text" class="form-control" name="email">
            <br>
            <button class="btn btn-success" type="submit">
                Gönder
            </button>
        </form>
    </div>

    <hr>

    <div class="col-8 mx-auto">
        Put Form
        <hr>
        <form action="{{ route("user.updateAll", ["id" => 9]) }}" method="POST">
            @csrf
            @method('PUT')

            <input type="text" class="form-control" name="fullname">
            <br>
            <input type="text" class="form-control" name="email">
            <br>
            <button class="btn btn-success" type="submit">
                Gönder
            </button>
        </form>
    </div>

    <hr>

    <div class="col-8 mx-auto">
        Delete Form
        <hr>
        <form action="{{ route("user.delete", ["id" => 9]) }}" method="POST">
            @csrf
            @method('DELETE')

{{--            <input type="text" class="form-control" name="fullname">--}}
{{--            <br>--}}
{{--            <input type="text" class="form-control" name="email">--}}
{{--            <br>--}}
            <button class="btn btn-success" type="submit">
                Gönder
            </button>
        </form>
    </div>

@endsection

@section("js")
@endsection
