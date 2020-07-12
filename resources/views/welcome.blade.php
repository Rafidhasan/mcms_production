@extends('layouts.app')
@section('content')


    <div class="content">
        <div class="title m-b-md">
            <div class="container mt-5">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <h2 class="hero-title text-center mb-5">অর্ডারের জন্যে ফর্মটি পূর্ণ করুন</h2>
                @auth
                <form method="post" action="userOrder/{{ Auth::user()->id }} " enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="product_image">অর্ডারের ছবিটি সিলেক্ট করুন</label>
                        <input type="file" name="product_image" class="form-control-file" required>
                      </div>
                      <div class="form-group">
                        <label for="quantity">মোট সংখ্যা</label>
                        <input type="text" class="form-control" name="quantity" required>
                      </div>
                    <button class="btn btn-primary" type="submit">সাবমিট</button>
                </form>
                @endauth

                @guest
                <form method="post" action="guestOrder"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="name">পুরো নাম</label>
                            <input name="name" type="text" class="form-control" required>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label for="phone_no">ফোন নম্বর</label>
                            <input name="phone_no" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-8 mb-3">
                            <label for="address">পুরো ঠিকানা</label>
                            <input name="address" type="text" class="form-control" placeholder="হাউস#৩৯৪ (১ম ফ্লোর), Road#৬, DOHS বারিধারা, ঢাকা-১২০৬" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="link">ফেসবুক প্রোফাইল লিংক</label>
                            <input name="link" type="text"  placeholder="https://www.facebook.com/username/"  class="form-control" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="quantity">মোট সংখ্যা</label>
                            <input name="quantity" type="test" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="product_image">অর্ডারের ছবিটি সিলেক্ট করুন</label>
                            <input type="file" name="product_image" class="form-control-file" required>
                          </div>
                    </div>
                    <button class="btn btn-primary" type="submit">সাবমিট</button>
                </form>
                @endguest
        </div>
    </div>
@endsection

