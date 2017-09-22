@extends('layouts.admin')

@section('title')
  All Users
@endsection


@section('content')
        <div class="col s8" style="background-color: white;padding-left: 20px;padding-right: 20px;margin-top: 1%;">
                    <table class="responsive-table highlight bordered">
                        <thead>
                            <tr>
                                <th>Group Name</th>
                                <th>Member's Name</th>
                                <th>Email Address</th>
                                <th>Phone Number</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($viewusers as $viewuser)
                            <tr>
                                <td>{{$viewuser->tname}}</td>
                                <td>{{$viewuser->fname}} {{ $viewuser->sname}}</td>
                                <td>{{$viewuser->email}}</td>
                                <td>{{$viewuser->tel}}</td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
@endsection