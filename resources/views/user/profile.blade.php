@extends('layouts.userbase')

@section('title','Yönetici profil')


@section('header')
    @include("user.layout.header")
@endsection

@section('sidebar')
    @include("user.layout.sidebar")
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Kullanıcı Şifre güncelleme</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Profil</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <x-app-layout>
            <div class="max-w-2xl py-10 sm:px-3 ">
                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.update-password-form')
                    </div>

                    <x-section-border/>
                @endif
            </div>
        </x-app-layout>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- partial -->
@endsection
