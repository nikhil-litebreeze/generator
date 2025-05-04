@extends ('backend.layouts.app')

@section ('title', trans('generator::labels.modules.management') . ' | ' . trans('generator::labels.modules.create'))

@section('page-header')
    <h1>
        {{ trans('generator::labels.modules.management') }}
        <small>{{ trans('generator::labels.modules.create') }}</small>
    </h1>
@endsection

@section('content')

    {{ html()->form()->open() }}

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('generator::labels.modules.create') }}</h3>

                <div class="box-tools pull-right">
                    @include('generator::partials.modules-header-buttons')
                </div><!--box-tools pull-right-->
            </div><!-- /.box-header -->

            {{-- Including Form blade file --}}
            <div class="box-body">
                <div class="form-group">
                    @include("generator::form")
                    <div class="edit-form-btn">
                    {{ html()->a(route('admin.modules.index', []), trans('buttons.general.cancel'))->class('btn btn-danger btn-md') }}
                    {{ html()->input('submit')->value(trans('buttons.general.crud.create')) }}
                    <div class="clearfix"></div>
                </div>
            </div>
        </div><!--box-->
    </div>
    {{ html()->form()->close() }}
@endsection
