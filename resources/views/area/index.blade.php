@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <p><a href="/area/add">新規追加</a></p>
                    @foreach ($param as $item)
                        {{ $item->user_id }}
                        {{ $item->id }}
                        {{ $item->name }}
                        <a href="/area/edit?id={{ $item->id }}">編集</a>
                        <a href="/area/delete?id={{ $item->id }}">削除</a>
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
