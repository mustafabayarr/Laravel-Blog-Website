@extends('front.layouts.master')

@section('title','İletişim')

@section('content')
<div class="col-md-8 mx-auto">
    @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif
    <p>Bizimle İletişime Geçin!</p>
    <form method="post" action="{{route('contact.post')}}">
        @csrf
        <div class="control-group">
            <div class="form-group">
                <label>Ad Soyad</label>
                <input type="text" class="form-control" placeholder="Ad Soyad" name="name" required>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Email Addresiniz" name="email" required>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group col-xs-12">
                <label>Konu</label>
                <select class="form-control" name="topic">
                    <option>Bilgi</option>
                    <option>Destek</option>
                    <option>Genel</option>
                </select>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group">
                <label>Mesajınız</label>
                <textarea rows="5" class="form-control" placeholder="Mesajınız" name="message" required></textarea>
            </div>
        </div>
        <br>
        <div id="success"></div>
        <button type="submit" class="btn btn-primary" name="sendMessageButton">Gönder</button>
    </form>
</div>
@endsection
