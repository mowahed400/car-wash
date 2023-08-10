
@extends('layouts.master')
@section('css')

    @section('title')
        empty
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

        </tr>
        </tbody>
        @endforeach
    </table>
@endsection
@section('js')

@endsection

