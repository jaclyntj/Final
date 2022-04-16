@extends('layouts.adminLTE')

@section('title', 'Selamat Datang')

@section('breadcrumb')
  <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item active"><a href="/">Home</a></li>
  </ol>
@endsection

@section('content')
    <h1>Halaman Dashboard</h1>
    <p>Hello, <b>Admin</b>.  Selamat datang di sistem informasi Sekolah Buddhis Jayanti.</p>
@endsection

@section('content-1')
<div class='row'>
  <div class="col-lg-4 col-6">
    <div class="small-box bg-info">
      <div class="inner">
        <h3>17</h3>
        <p>Comments</p>
      </div>
      <div class="icon">
        <i class="fas fa-comments"></i>
      </div>
      <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>

  <div class="col-lg-4 col-6">
    <div class="small-box bg-success">
      <div class="inner">
        <h3>164</h3>
        <p>Page Views</p>
      </div>
      <div class="icon">
        <i class="fas fa-chart-pie"></i>
      </div>
      <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>

  <div class="col-lg-4 col-6">
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>26</h3>
        <p>Unique Visitors</p>
      </div>
      <div class="icon">
        <i class="fas fa-users"></i>
      </div>
      <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
  <div class="card">
  <div class="card-header">
  <h5 class="card-title">Monthly Recap Report</h5>
  <div class="card-tools">
  <button type="button" class="btn btn-tool" data-card-widget="collapse">
  <i class="fas fa-minus"></i>
  </button>
  <div class="btn-group">
  <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
  <i class="fas fa-wrench"></i>
  </button>
  <div class="dropdown-menu dropdown-menu-right" role="menu">
  <a href="#" class="dropdown-item">Area Chart</a>
  <a href="#" class="dropdown-item">Line Chart</a>
  <a href="#" class="dropdown-item">Pie Chart</a>
  </div>
  </div>
  <button type="button" class="btn btn-tool" data-card-widget="remove">
  <i class="fas fa-times"></i>
  </button>
  </div>
</div>
<div class="card-body">
  <div class="row">
  <div class="col-md-8">
   <p class="text-center">
  <strong>01 March 2022 - 31 March 2022</strong>
  </p>
  <div class="chart">
    <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
  </div>
  </div>
  
  <div class="col-md-4">
    <span></span>
    <div class="progress-group">
    Comments
    <span class="float-right"><b>60</b>/100</span>
    <div class="progress progress-sm">
      <div class="progress-bar bg-primary" style="width: 60%"></div>
    </div>
    </div>
  
    <div class="progress-group">
    Page Views
    <span class="float-right"><b>777</b>/1000</span>
    <div class="progress progress-sm">
      <div class="progress-bar bg-danger" style="width: 75%"></div>
    </div>
    </div>
  
    <div class="progress-group">
    Visitors
    <span class="float-right"><b>500</b>/600</span>
    <div class="progress progress-sm">
      <div class="progress-bar bg-success" style="width: 85%"></div>
    </div>
    </div>
  
    <div class="progress-group">
    Send Inquiries
    <span class="float-right"><b>22</b>/50</span>
    <div class="progress progress-sm">
      <div class="progress-bar bg-warning" style="width: 50%"></div>
    </div>
    </div>
  </div>
  </div>
  </div>
@endsection