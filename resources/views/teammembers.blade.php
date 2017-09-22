@extends('layouts.teamlead')

@section('title')
  My Team Members
@endsection


@section('content')
        <div class="col s8" style="background-color: white;padding-left: 20px;padding-right: 20px;margin-top: 1%;">
                    <table class="responsive-table highlight bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach ($bookings as $mybooking)
                            
                                

                                <td>{{ $mybooking->User->fname}} {{ $mybooking->User->sname}}</td>
                                <td>{{ $mybooking->User->email}}</td>
                                <td>{{ $mybooking->User->tel}}</td>
                                
                                <td style="cursor: pointer;"><a class="modal-trigger" href="#modal4" style="color: red;">Delete User</td>

                            </tr>
                                @endforeach

                                
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection