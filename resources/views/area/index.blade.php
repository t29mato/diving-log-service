@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <p><a href="/area/add">追加する</a></p>
                    @foreach ($param as $item)
                        {{ $item->user_id }}
                        {{ $item->id }}
                        {{ $item->name }}
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
