@extends('layouts.backend.index')

@section('title','MyBlog | Dashboard')
@section('content')
<div class="content">
<div class="row">
          <div class="col-12">
            <div class="card card-chart">
              <div class="card-header ">
                <div class="row">
                  <div class="col-sm-6 text-left">
                    <!-- <h5 class="card-category">Total Shipments</h5> -->
                    <h2 class="card-title">Hello User {{ Auth::user()->name}}</h2>
                  </div>
                 
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartBig1"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>
@endsection
