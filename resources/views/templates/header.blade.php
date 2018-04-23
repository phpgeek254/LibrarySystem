<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="description" content="juakalismart.co.ke">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}"/>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Reem+Kufi" rel="stylesheet">
    @include('assets.css')
    @yield('css')
    @include('assets.laravel_user')

</head>