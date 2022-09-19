@extends('teacher.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Course Enroll Info</h4>

                    <p class="card-title-desc">{{Session::get('message')}}</p>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Course Title</th>
                            <th>Starting Date</th>
                            <th>Total enroll Student</th>
                            <th>Payment Complete Student</th>
                            <th>Payment Incomplete Student</th>

                        </tr>
                        </thead>


                        <tbody>
                        @foreach($result as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item['title']}}</td>
                                <td>{{$item['starting_date']}}</td>
                                <td>{{$item['total']}}</td>
                                <td>{{$item['Complete']}}</td>
                                <td>{{$item['Pending']}}</td>


                                <td>
                                    <a href="" class="btn btn-primary btn-sm" title="View Detail">
                                        <i class="fa fa-book-open"></i>
                                    </a>

                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
