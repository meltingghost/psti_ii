@extends('layouts.app')
@section('content')
<div class="container">
<form id="content" action="{{ url('/control') }}" method="POST">
    @csrf
<div id="register-personel">
    <div class="register-modal-content">
        <div class="register-modal-header">
            <span class="register-close">&times;</span>
        </div>
        @include('control.controlform',['modo'=>'Agregar']);
    </div>
</div>
</form>
</div>
@endsection