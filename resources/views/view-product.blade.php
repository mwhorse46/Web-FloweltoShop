@extends('layouts.template')

@section('header')
    <x-header />
@endsection

@section('content')
    <div class="container-fluid">
        <div class="text-center">
            <h3>Our Hand Bouquet (gift)</h3>
        </div>
        <div class="mt-2 pt-2">
            <form>
                <div class="form-row">
                    <div class="form-group">
                        <select name="" class="form-control" id="searchType">
                            <option value="name" selected>Name</option>
                            <option value="price">Price</option>
                        </select>
                    </div>
                    <div class="form-group ml-2 pl-2">
                        <input type="text" class="form-control" id="txtSearch" placeholder="Search">
                    </div>
                    <div class="mx-2 px-2">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="row row-cols-4 row-cols-xs-1 row-cols-sm-2 mt-2 justify-content-center">
            <x-flower-card />
            <x-flower-card />
            <x-flower-card />
            <x-flower-card />
            <x-flower-card />
            <x-flower-card />
            <x-flower-card />
            <x-flower-card />
        
        </div>
    
    </div>
@endsection