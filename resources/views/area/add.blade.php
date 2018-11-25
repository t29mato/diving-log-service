@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="/area/add" method="post">
                    {{ csrf_field() }}
                        <table>
                            <tr>
                                <th>AreaName </th>
                                <td><input type="text" name="name" value=""></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td><input type="submit" value="send"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
