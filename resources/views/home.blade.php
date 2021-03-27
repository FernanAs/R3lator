@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="row posr">
            <div class="col-lg-12">
                <div class="home-content">
                    <div class="home-text text-center">
                        <h2 class="fyh">Find Your Dream Home</h2>
                        <p class="sll">Start Looking thru Our Listings</p>
                    </div>
                    <div class="nav-center text-center">
                        <ul class="nav nav-pills">
                            <li><a class="nav-link active" href="#">Buy</a></li>
                            <li><a class="nav-link active" href="#">Rent</a></li>
                        </ul>
                    </div>
                    <div class="outer-form">
                        <div class="inner-form">
                            <div class="input-field first-wrap">
                                <input id="search" type="text" placeholder="Enter Keyword..." />
                            </div>
                            <div class="input-field second-wrap">
                                <select data-trigger="" name="choices-single-defaul">
                                    <option placeholder="">Property Category</option>
                                    <option>Apartment</option>
                                    <option>Condo</option>
                                    <option>Family Homes</option>
                                    <option>Modern Villa</option>
                                    <option>Town House</option>
                                </select>
                            </div>
                            <div class="input-field third-wrap">
                                <select data-trigger="" name="choices-single-defaul">
                                    <option placeholder="">Location</option>
                                    <option>Paris</option>
                                    <option>New York</option>
                                    <option>Los Angeles</option>
                                    <option>Houston</option>
                                    <option>Maimi</option>
                                </select>
                            </div>
                            <div class="input-field fouth-wrap">
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">
                                                <p>
                                                    <label for="amount">Price range:</label>
                                                    <input type="text" id="amount" readonly style=" color:#f6931f; font-weight:bold;">
                                                </p>

                                                <!--div style="font-size:10px;"-->
                                                <div id="slider-range"></div>
                                                <!--/div-->
                                            </a></li>
                            </div>
                            <div class="input-field fifth-wrap">
                                <button class="btn-search" type="button">SEARCH</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection