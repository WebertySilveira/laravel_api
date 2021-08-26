@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('messages.store') }}" method="post">
        <h3>Envie-nos uma Mensagem</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="name" 
                        class="form-control" placeholder="Pnolan Sgkr">
                </div>
                <div class="form-group">
                    <input type="text" name="phone" id="phone"    
                        class="form-control" placeholder="+99 9 9999-9999">
                </div>
                <div class="form-group">
                    <input type="submit" name="btnSubmit" 
                        class="btnContact" value="Enviar Mensagem">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <textarea name="message" maxlength="140" 
                        class="form-control" placeholder="Sua mensagem" style="width: 100%; height: 150px;"></textarea>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
