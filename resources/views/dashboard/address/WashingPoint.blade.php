
@extends('layouts.master')
@section('css')

    @section('title')
        empty
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">

        <div class="row" style="padding:10px;margin:10px ">
            <div class="col-sm-6">
                <div class="row wow fadeInUp" style="justify-content: right ">
                    <div class="price-footer" style="margin-left:10px">
                        <a class="btn btn-success" data-toggle="modal" href="#exampleModal2">{{trans('conect.Confirm')}}</a>
                    </div>

            </div>
        </div>
    </div>

    <!-- breadcrumb -->
@endsection
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">{{trans('conect.title')}}</th>
            <th scope="col">{{trans('conect.address')}}</th>
            <th scope="col">{{trans('conect.number')}}</th>
            <th scope="col">{{trans('conect.process')}}</th>

        </tr>
        </thead>
        <tbody>
        @foreach($Washings as $Washing)
        <tr>

            <td>{{$Washing->title}}</td>
            <td>{{$Washing->address}}</td>
            <td>{{$Washing->number}}</td>
            <td style="text-align: center">
                <div class="row wow fadeInUp" style="justify-content: right ">
                    <div class="price-footer" style="margin-left:10px">
                        <a class="btn btn-info" data-toggle="modal" href="#exampleModal">{{trans('conect.Confirm')}}</a>
                    </div>


                    <span>
                    <form action="{{route('Washing.destroy',$Washing->id)}}" method="post">

                        @csrf
                        @method('DELETE')
                        <button type="submit"class="btn btn-danger">{{trans('conect.Confirm')}}</button>
                    </form>
                </span>
                    </div>
            </td>
        </tr>
        </tbody>
        @endforeach
    </table>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4> Book Now</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <!-- add_form -->
                    @foreach($Washings as $Washing)
                    <form action="{{ route('Washing.update',$Washing->id) }}" method="post">
                        {{ method_field('PUT') }}
                        @csrf

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">{{trans('conect.whats')}}</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="{{$Washing->title}}">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">{{trans('conect.worktime')}}</label>
                            <input type="text" class="form-control" id="exampleFormControlInput2" name="address"value="{{$Washing->address}}">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput3" class="form-label">{{trans('conect.twlinke')}}</label>
                            <input type="text" class="form-control" id="exampleFormControlInput3" name="number"value="{{$Washing->number}}">
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">CLose</button>
                            <button type="submit" class="btn btn-success">Book</button>
                        </div>
                    </form>
                    @endforeach

                        <div class="form-group">
                            <div class="container mt-5">
                                <div class="dropdown" id="car-brand">
                                    <div class="btn-group dropright">

                                    </div>
                                </div>
                            </div>
                        </div>


                </div>
            </div>

        </div>

    </div>

    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4> Book Now</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <!-- add_form -->
                    @foreach($Washings as $Washing)
                    <form action="{{ route('Washing.store') }}" method="post">

                        @csrf

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">{{trans('conect.whats')}}</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="title"  placeholder="enter your title">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">{{trans('conect.worktime')}}</label>
                            <input type="text" class="form-control" id="exampleFormControlInput2" name="address"placeholder="enter your address">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput3" class="form-label">{{trans('conect.twlinke')}}</label>
                            <input type="text" class="form-control" id="exampleFormControlInput3" name="number"placeholder="enter your number">
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-custom" data-dismiss="modal">close</button>
                            <button type="submit" class="btn btn-custom">submit</button>
                        </div>
                    </form>
                    @endforeach

                        <div class="form-group">
                            <div class="container mt-5">
                                <div class="dropdown" id="car-brand">
                                    <div class="btn-group dropright">

                                    </div>
                                </div>
                            </div>
                        </div>


                </div>
            </div>

        </div>

    </div>


@endsection
@section('js')

@endsection

