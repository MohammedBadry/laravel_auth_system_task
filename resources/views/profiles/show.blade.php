@extends('layouts.app')

@section('template_title')
    {{ $user->name }}'s Profile
@endsection

@section('template_fastload_css')
    #map-canvas{
        min-height: 300px;
        height: 100%;
        width: 100%;
    }
@endsection

@php
    $currentUser = Auth::user()
@endphp

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <div class="card">
                    <div class="card-header">
                        {{ trans('profile.showProfileTitle',['username' => $user->name]) }}
                    </div>
                    <div class="card-body">

                        <img src="@if ($user->profile->avatar_status == 1) {{ $user->profile->avatar }} @else {{ Gravatar::get($user->email) }} @endif" alt="{{ $user->name }}" class="user-avatar">

                        <dl class="user-info">
                            <dt>
                                {{ trans('profile.showProfileUsername') }}
                            </dt>
                            <dd>
                                {{ $user->name }}
                            </dd>

                            <dt>
                                {{ trans('profile.showProfileFirstName') }}
                            </dt>
                            <dd>
                                {{ $user->first_name }}
                            </dd>

                            @if ($user->last_name && ($currentUser->id == $user->id || $currentUser->hasRole('admin')))
                                <dt>
                                    {{ trans('profile.showProfileLastName') }}
                                </dt>
                                <dd>
                                    {{ $user->last_name }}
                                </dd>
                            @endif

                            @if ($user->email && ($currentUser->id == $user->id || $currentUser->hasRole('admin')))
                                <dt>
                                    {{ trans('profile.showProfileEmail') }}
                                </dt>
                                <dd>
                                    {{ $user->email }}
                                </dd>
                            @endif

                            @if ($user->profile)

                                @if ($user->profile->bio && ($currentUser->id == $user->id || $currentUser->hasRole('admin')))
                                    <dt>
                                        {{ trans('profile.showProfileBio') }}
                                    </dt>
                                    <dd>
                                        {{ $user->profile->bio }}
                                    </dd>
                                @endif

                            @endif

                        </dl>

                        @if ($user->profile)
                            @if ($currentUser->id == $user->id)
                                {!! HTML::icon_link(URL::to('/profile/'.$currentUser->name.'/edit'), 'fa fa-fw fa-cog', trans('titles.editProfile'), array('class' => 'btn btn-small btn-info btn-block')) !!}
                            @endif
                        @else
                            <p>
                                {{ trans('profile.noProfileYet') }}
                            </p>
                            {!! HTML::icon_link(URL::to('/profile/'.$currentUser->name.'/edit'), 'fa fa-fw fa-plus ', trans('titles.createProfile'), array('class' => 'btn btn-small btn-info btn-block')) !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer_scripts')

    @if(config('settings.googleMapsAPIStatus'))
        @include('scripts.google-maps-geocode-and-map')
    @endif

@endsection
