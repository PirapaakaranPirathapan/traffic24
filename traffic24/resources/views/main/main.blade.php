@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <div class="card" style="width: 10rem;">
                    <img src="{{('assets/images/service-vehicles.png')}}" class="card-img-top" alt="Sunset Over the Sea"/>
                    <div class="card-body" style="text-align: center">
                      <p class="card-text">Vehicle</p>
                    </div>
                  </div>
            </div>
            <div class="col-sm-2">
                <div class="card" style="width: 10rem;">
                    <img src="{{('assets/images/service-license.png')}}" class="card-img-top" alt="Sunset Over the Sea"/>
                    <div class="card-body" style="text-align: center">
                      <p class="card-text">Driving License</p>
                    </div>
                  </div>
            </div>
            <div class="col-sm-2">
                <div class="card" style="width: 10rem;">
                    <img src="{{('assets/images/service-technical.png')}}" class="card-img-top" alt="Sunset Over the Sea"/>
                    <div class="card-body" style="text-align: center">
                      <p class="card-text">Technical</p>
                    </div>
                  </div>
            </div>
            <div class="col-sm-2">
                <div class="card" style="width: 10rem;">
                    <img src="{{('assets/images/service-eservices.png')}}" class="card-img-top" alt="Sunset Over the Sea"/>
                    <div class="card-body" style="text-align: center">
                      <p class="card-text">E-Services</p>
                    </div>
                  </div>
            </div>

            <div class="col-sm-4">
                <div class="card text-center">
                    <div class="card-header">Live News</div>
                    <div class="card-body">
                      <h5 class="card-title">News 01</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                  </div>
            </div>
            
        </div>
    </div>
@endsection