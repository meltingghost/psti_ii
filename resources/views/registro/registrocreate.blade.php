@extends('layouts.app')
@section('content')
<div class="container">
<form id="content" action="{{ url('/registro') }}" method="POST">
@csrf
<div id="register-personel">
    <div class="register-modal-content">
        <div class="register-modal-header">
            <span class="register-close">&times;</span>
        </div>
        @include('registro.registroform',['modo'=>'Agregar']);
    </div>
</div>
</form>
</div>

@endsection