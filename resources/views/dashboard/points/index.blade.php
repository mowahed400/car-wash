@extends('layouts.master')
@section('css')

    @section('title')
        {{ trans('mess.point') }}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('mess.point')}}
    @stop
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">

        <div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <button type="button" class="button x-small" data-toggle="modal" data-target="#exampleModal">
                        {{ trans('mess.add') }}
                    </button>
                    <br><br>

                    <div class="table-responsive">
                        <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                               data-page-length="50"
                               style="text-align: center">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>{{trans('mess.title')}}</th>
                                <th>{{trans('mess.address')}}</th>
                                <th>{{trans('mess.number')}}</th>
                                <th>{{trans('mess.Processes')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 0; ?>
                            @foreach ($Washings as $Washing)
                                <tr>
                                        <?php $i++; ?>
                                    <td>{{ $i }}</td>
                                    <td>{{ $Washing->title }}</td>
                                    <td>{{ $Washing->address }}</td>
                                    <td>{{ $Washing->number }}</td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                data-target="#edit{{ $Washing->id }}"
                                                title="{{ trans('mess.Edit') }}"><i
                                                class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#delete{{ $Washing->id }}"
                                                title="{{ trans('mess.Delete') }}"><i
                                                class="fa fa-trash"></i></button>
                                    </td>
                                </tr>

                                <!-- edit_modal_Grade -->
                                <div class="modal fade" id="edit{{ $Washing->id }}" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                    id="exampleModalLabel">
                                                    {{ trans('mess.edit') }}
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- edit_form -->
                                                <form action="{{route('points.update','test')}}" method="post">
                                                    {{method_field('patch')}}
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="title_ar"
                                                                   class="mr-sm-2">{{ trans('mess.title_ar') }}
                                                                :</label>
                                                            <input id="Name" type="text" name="title_ar"
                                                                   class="form-control"
                                                                   value="{{$Washing->getTranslation('title', 'ar')}}"
                                                                   required>
                                                            <input id="id" type="hidden" name="id" class="form-control"
                                                                   value="{{ $Washing->id }}">
                                                        </div>
                                                        <div class="col">
                                                            <label for="title_en"
                                                                   class="mr-sm-2">{{ trans('mess.title_en') }}
                                                                :</label>
                                                            <input type="text" class="form-control"
                                                                   value="{{$Washing->getTranslation('title', 'en')}}"
                                                                   name="title_en" required>
                                                        </div>
                                                    </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="address_ar"
                                                               class="mr-sm-2">{{ trans('mess.address_ar') }}
                                                            :</label>
                                                        <input id="Name" type="text" name="address_ar"
                                                               class="form-control"
                                                               value="{{$Washing->getTranslation('address', 'ar')}}"
                                                               required>
                                                        <input id="id" type="hidden" name="id" class="form-control"
                                                               value="{{ $Washing->id }}">
                                                    </div>
                                                    <div class="col">
                                                        <label for="address_en"
                                                               class="mr-sm-2">{{ trans('mess.address_en') }}
                                                            :</label>
                                                        <input type="text" class="form-control"
                                                               value="{{$Washing->getTranslation('address', 'en')}}"
                                                               name="address_en" required>
                                                    </div>
                                                </div>
                                                    <div class="form-group">
                                                        <label
                                                            for="exampleFormControlTextarea1">{{ trans('mess.number') }}
                                                            :</label>

                                                        <input type="text" class="form-control" name="number" value=" {{ $Washing->number }}">


                                                    </div>
                                                    <br><br>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">{{ trans('mess.Close') }}</button>
                                                        <button type="submit"
                                                                class="btn btn-success">{{ trans('mess.submit') }}</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- delete_modal_Grade -->
                                <div class="modal fade" id="delete{{ $Washing->id }}" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                    id="exampleModalLabel">
                                                    {{ trans('mess.delete') }}
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('points.destroy','test')}}" method="post">
                                                    {{method_field('Delete')}}
                                                    @csrf
                                                    {{ trans('mess.Warning') }}
                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                           value="{{ $Washing->id }}">
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">{{ trans('mess.Close') }}</button>
                                                        <button type="submit"
                                                                class="btn btn-danger">{{ trans('mess.submit') }}</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <!-- add_modal_Grade -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                            id="exampleModalLabel">
                            {{ trans('mess.add') }}
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- add_form -->
                        <form action="{{ route('points.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <label for="title_ar"
                                           class="mr-sm-2">{{ trans('mess.title_ar') }}
                                        :</label>
                                    <input id="Name" type="text" name="title_ar" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="title_en"
                                           class="mr-sm-2">{{ trans('mess.title_en') }}
                                        :</label>
                                    <input type="text" class="form-control" name="title_en" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="address_ar"
                                           class="mr-sm-2">{{ trans('mess.address_ar') }}
                                        :</label>
                                    <input id="Name" type="text" name="address_ar" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="title_en"
                                           class="mr-sm-2">{{ trans('mess.address_en') }}
                                        :</label>
                                    <input type="text" class="form-control" name="address_en" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label
                                    for="exampleFormControlTextarea1">{{ trans('mess.number') }}
                                    :</label>
                                <input type="text" class="form-control" name="number" required>
                            </div>
                            <br><br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">{{ trans('mess.Close') }}</button>
                        <button type="submit"
                                class="btn btn-success">{{ trans('mess.submit') }}</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>

    </div>

    <!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
@endsection
