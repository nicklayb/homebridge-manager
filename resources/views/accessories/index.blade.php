@extends('layout.index')
@section('content')
<div class="row">
    @foreach ($accessories as $key => $accessory)
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h2>{{$accessory->getName()}}</h2>
                </div>
                <div class="panel-footer text-center">
                    <button type="button" name="button" class="btn btn-default">On</button>
                    <button type="button" name="button" class="btn btn-default">Off</button>
                </div>
            </div>
        </div>
    @endforeach
        <div class="col-md-3">
            <div class="panel panel-default" style="opacity:0.5">
                <div class="panel-heading text-center">
                    <h2>+</h2>
                </div>
                <div class="panel-footer text-center">
                    <button type="button" name="button" class="btn btn-default">Ajouter</button>
                </div>
            </div>
        </div>
</div>
@endsection
