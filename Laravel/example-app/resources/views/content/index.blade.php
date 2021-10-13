@extends('layouts.master')

@section('zoeker1')
    <div id="zoeker1" class="card" style="width:400px">
        <div class="card-body">
            <h4 class="card-title">John Doe</h4>
            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
            <a href="{{route('item',
                ["id" => 1, "naam" => "John Doe", "beschrijving" => "Some example text some example text. John Doe is an architect and engineer."])}}"
               class="btn btn-primary">Details</a>
        </div>
    </div>
    <hr>
@endsection
@section('zoeker2')
    <div id="zoeker2" class="card" style="width:400px">
        <div class="card-body">
            <h4 class="card-title">Jane Doe</h4>
            <p class="card-text">Some example text some example text. Jane Doe is an architect and engineer</p>
            <a href="{{route('item',
                ["id" => 2, "naam" => "Jane Doe", "beschrijving" => "Some example text some example text. John Doe is an architect and engineer."])}}"
               class="btn btn-primary">Details</a>
        </div>
    </div>
    <hr>
@endsection
@section('zoeker3')
    <div id="zoeker3" class="card" style="width:400px">
        <div class="card-body">
            <h4 class="card-title">Thierry Klougbo</h4>
            <p class="card-text">Some example text some example text. Thierry Klougbo is an architect and engineer</p>
            <a href="{{route('item',
                ["id" => 3, "naam" => "Thierry Klougbo", "beschrijving" => "Some example text some example text. John Doe is an architect and engineer."])}}"
               class="btn btn-primary">Details</a>
        </div>
    </div>
    <hr>
@endsection
