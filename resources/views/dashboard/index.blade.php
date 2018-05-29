<?php use App\Fly01\Models\Blog\Setting;?>

@extends('layouts.dashboard')
@section('title',('Dashboard Fly01'))

@section('content')
     <router-link v-show="showActionButton"
                 to="/dashboard/posts/create"
                 class="fixed-action-btn btn-floating btn-large waves-effect waves-light blue tooltipped hide-on-med-and-down"
                 data-position="left" data-delay="50" :data-tooltip="$trans('create')">
        <i class="material-icons">mode_edit</i>
    </router-link>
    <div class="col s12 m12 l10">
        <circular-loader id="main-pPublish
        reloader" size="tiny" :loading="store.loading" class="right"></circular-loader>
        <router-view></router-view>
    </div>
@endsection

@section('extrascript')
<script>
    window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
            'config' => Setting::all(),
            'isProduction' => env('APP_ENV') === 'prod' || env('APP_ENV') === 'production'
    ]) !!};
    window.dictionary = {!! json_encode(trans('app')) !!};
</script>
<script src="{{ url('js/dashboard.js') }}"></script>
@endsection