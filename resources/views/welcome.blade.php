@extends('layouts.app')
@section('content')


    <div class="content">
        <div class="title m-b-md">
            <div class="container mt-5">
                <h2 class="hero-title text-center mb-5">অর্ডারের জন্যে ফর্মটি পূর্ণ করুন</h2>
                @auth
                <form method="post" action="userOrder/{{ Auth::user()->id }} " enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlFile1">অর্ডারের ছবিটি সিলেক্ট করুন</label>
                        <input type="file" name="product_image" class="form-control-file" >
                      </div>
                      <div class="form-group">
                        <label for="quantity">মোট সংখ্যা</label>
                        <input type="test" class="form-control" name="quantity">
                      </div>
                    <button class="btn btn-primary" type="submit">সাবমিট</button>
                </form>
                @endauth

                @guest
                <form>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationDefault01">পুরো নাম</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label for="validationDefault02">ফোন নম্বর</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationDefault05">পুরো ঠিকানা</label>
                            <input type="text" class="form-control" placeholder="হাউস#৩৯৪ (১ম ফ্লোর), Road#৬, DOHS বারিধারা, ঢাকা-১২০৬" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">অর্ডারের ছবিটি সিলেক্ট করুন</label>
                        <input type="file" class="form-control-file" >
                      </div>
                    <button class="btn btn-primary" type="submit">সাবমিট</button>
                </form>
                @endguest
        </div>
    </div>
@endsection

