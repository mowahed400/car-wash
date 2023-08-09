@extends('layouts.master')
@section('css')

@section('title')
    {{trans('mess.mess')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> {{trans('mess.mess')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item active">{{trans('mess.mess')}}</li>
            </ol>
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

{{--                <button type="button" class="button x-small" data-toggle="modal" data-target="#exampleModal">--}}
{{--                    {{ trans('GradesTrans.AddGrade') }}--}}
{{--                </button>--}}
{{--                <br><br>--}}

                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                    <tr>
                        <th style="width: 5%">{{trans('mess.carname')}}</th>
                        <th style="width: 5%">{{trans('mess.type')}}</th>
                        <th style="width: 5%">{{trans('mess.brand')}}</th>
                        <th style="width: 5%">{{trans('mess.color')}}</th>
                        <th style="width: 5%">{{trans('mess.platnumber')}}</th>
                        <th style="width: 5%">{{trans('mess.image')}}</th>
                        <th style="width: 5%">{{trans('mess.action')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($mess as $mes)

                            <tr>


                                <td style="text-align: center">
                                     <p class="fw-normal mb-1">{{$mes->carname}}</p>

                                </td>


                                <td style="text-align: center">
                                    <p class="fw-normal mb-1">{{$mes->cartype}}</p>

                                </td>


                                <td style="text-align: center">
                                    <p class="fw-normal mb-1">{{$mes->carbrand}}</p>

                                </td>


                                <td style="text-align: center">
                                    <p class="fw-normal mb-1">{{$mes->color}}</p>

                                </td>



                                <td style="text-align: center">
                                    <p class="fw-normal mb-1">{{$mes->carplatnumber}}</p>

                                </td>


                        <td style="text-align: center">
                            <img src="{{asset('assets/images/'.$mes->image)}}" width="80" height="80" class="img img-responsive">


                        </td>
                        <td style="text-align: center">
{{--                            <form action="{{route('ServeProvide.destroy',$mes->id)}}" method="post">--}}
{{--                                @csrf--}}
{{--                                @method('DELETE')--}}
{{--                                <button type="submit"class="btn btn-danger"><i class="fa-light fa-trash fa-beat"></i></button>--}}
{{--                            </form>--}}
{{--                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"--}}
{{--                                    data-target="#delete{{ $mes->id }}"--}}
{{--                                    title="Edit"><i--}}
{{--                                    class="fa fa-trash"></i></button>--}}
                        </td>
                                <div class="modal fade" id="edit{{ $mes->id }}" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                    id="exampleModalLabel">
                                                Edit
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- edit_form -->
{{--                                                <form action="{{ route('ServeProvide.update', 'test') }}" method="post" enctype="multipart/form-data">--}}
                                                    {{ method_field('patch') }}
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="name"
                                                                   class="mr-sm-2">Service Name
                                                                :</label>
                                                            <input id="name" type="text" name="name_ar"
                                                                   class="form-control"
                                                                   value="{{ $mes->name }}"
                                                            >
                                                            <input id="id" type="hidden" name="id" class="form-control"
                                                                   value="{{ $mes->id }}">
                                                        </div>


                                                        <div class="col-md-6">
                                                            <label for="image"
                                                                   class="mr-sm-2">Logo
                                                            </label>
                                                            <input type="file" class="form-control" name="photo">
                                                            <img class="custom_img" src="{{asset('assets/images/'.$mes->image)}}" width="60" height="60">

                                                        </div>
                                                    </div>


                                                    <br><br>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">{{ trans('aboutus_trans.Close') }}</button>
                                                        <button type="submit"
                                                                class="btn btn-success">{{ trans('aboutus_trans.submit') }}</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    {{--<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"--}}
    {{--     aria-hidden="true">--}}
    {{--    <div class="modal-dialog" role="document">--}}
    {{--        <div class="modal-content">--}}
    {{--            <div class="modal-header">--}}
    {{--                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">--}}
    {{--                    {{ trans('mess.add') }}--}}
    {{--                </h5>--}}
    {{--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
    {{--                    <span aria-hidden="true">&times;</span>--}}
    {{--                </button>--}}
    {{--            </div>--}}
    {{--         --}}
    {{--        </div>--}}
    {{--    </div>--}}

    {{--</div>--}}
<!-- row closed -->
@endsection
@section('js')

@endsection
