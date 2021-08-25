<?php
    use App\Http\Controllers\TinController;
    use App\Http\Controllers\GuimailController;
?>
<style>
    .contact-page-form h2{
        color: blue;
        margin: 30px 0 0 0;
        font-size: 1.5rem;
    }

    .contact_cc_name input[type='text'], textarea{
        margin: 10px 0;
        padding: 6px;
        background-color: white;
        text-transform: none;
        letter-spacing: 1px;
        font-size: 1.2rem;
        border: 1px solid darkkhaki;
    }

    .comments_form input[type="submit"]{
        width: 120px;
        height: 40px;
        background: darkgoldenrod;
        color: azure;
    }
</style>
@extends('layout')
@section('noidungchinh')
<div class="contact-page-form">
    <h2>LIÊN HỆ VỚI CHÚNG TÔI</h2>
    <div class="comments_form">
        <form action="{{action([TinController::class, 'lienhe'])}}" method="post">
            {{csrf_field()}}
            <div class="contact_cc_name">
                <input type="text" name="name" placeholder="Tên của bạn" required/>
                <input type="text" name="email" placeholder="Email của bạn" required/>
                <input type="text" name="phone" placeholder="Số điện thoại của bạn" required/>
            </div>
            <textarea name="content" cols="30" rows="10" placeholder="Nội dung liên hệ"></textarea>
            <input name="submit" type="submit" value="Gửi liên hệ"/>
        </form>
    </div>
</div>
@endsection