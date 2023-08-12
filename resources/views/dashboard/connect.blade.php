
@extends('layouts.master')
@section('css')

    @section('title')
        {{trans('mess.contact')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> {{trans('conect.connect')}}</h4>
            </div>

        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    @foreach($Connects as $Connect)
                        <form action="{{ route('connect.update', 'test') }}" method="post">
                            {{ method_field('PUT') }}
                            @csrf


                            <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{trans('conect.whats')}}</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="whats" value="{{$Connect->whats}}">
                    </div>

                        <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">{{trans('conect.worktime')}}</label>
                        <input type="text" class="form-control" id="exampleFormControlInput2" name="worktime"value="{{$Connect->worktime}}">
                    </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput2" class="form-label">{{trans('conect.open_at')}}</label>
                                <input type="text" class="form-control" id="exampleFormControlInput2" name="open_at"value="{{$Connect->open_at}}">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput2" class="form-label">{{trans('conect.close_at')}}</label>
                                <input type="text" class="form-control" id="exampleFormControlInput2" name="close_at"value="{{$Connect->close_at}}">
                            </div>

                        <div class="mb-3">
                        <label for="exampleFormControlInput3" class="form-label">{{trans('conect.twlinke')}}</label>
                        <input type="text" class="form-control" id="exampleFormControlInput3" name="twlinke"value="{{$Connect->twlinke}}">
                    </div>

                        <div class="mb-3">
                        <label for="exampleFormControlInput4" class="form-label">{{trans('conect.inslinke')}}</label>
                        <input type="text" class="form-control" id="exampleFormControlInput4" name="inslinke"value="{{$Connect->inslinke}}">
                    </div>

                        <div class="mb-3">
                        <label for="exampleFormControlInput5" class="form-label">{{trans('conect.email')}}</label>
                        <input type="email" class="form-control" id="exampleFormControlInput5" name="email"value="{{$Connect->email}}">
                    </div>


                            <div class="col-auto">
                                <button type="submit" class="btn btn-success">{{trans('conect.Confirm')}}</button>
                            </div>

                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')

@endsection
