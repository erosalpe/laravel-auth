@extends('layouts.basic')

@section('title', 'Benvenuto | Dashboard')
@vite('resources/js/app.js')
@section('style')
    
@endsection

@section('main')
    
    <nav>
        <ul>
            <li>
                <a href="/login">Login</a>
            </li>
            <li>
                <a href="/register">Register</a>
            </li>
        </ul>
    </nav>

@endsection


