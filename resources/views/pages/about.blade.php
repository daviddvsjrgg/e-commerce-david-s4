@extends('layouts.master')



@section('title', "About Us")



@section('content')

<div class="div justify-content-center uwu mt-5">

    <img class="rounded-circle uwu" alt="avatar1" src="{{ asset('img/about.png') }}" />

</div>



<div class="uwu">

    <h1 class="text-muted mt-5">David Dwiyanto</h1>

    <div class="container">

        <div class="row">

            <div class="col text-muted">

                <p>Application Made by : David Dwiyanto </p>

                <a href="https://www.instagram.com/davidek_rl/" target="_blank" class="btn btn-info">Instagram</a>

            </div>

        </div>

    </div>

</div>

@endSection()
