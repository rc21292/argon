@extends('admin.layouts.app')

@section('content')
<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col-xl-5">
      <div class="card">
        <div class="card-header bg-transparent">
          <div class="row align-items-center">
            <div class="col">
              <h6 class="text-uppercase text-muted ls-1 mb-1">Notifications</h6>
              <h5 class="h3 mb-0">Latest</h5>
            </div>
          </div>
        </div>
        <div class="card-body">
          <table class="table align-items-center table-flush">
            <tbody>
              <tr>
                <th scope="row">
                  <p class="text-primary">Gurmeet Singh</p> has Subscribed to the Bronze Plan
                </th>

              </tr>
              <tr>
                <th scope="row">
                  <p class="text-primary">Ramesh Mishra</p> is waiting for Verification of his shop.
                </th>

              </tr>
              <tr>
                <th scope="row">
                  <p class="text-primary">Avneet Mathur</p> has Subscribed to the Silver Plan
                </th>

              </tr>
              <tr>
                <th scope="row">
                  <p class="text-primary">Vinay Arora</p> is waiting for Verification of his shop.
                </th>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-xl-7">
      <div class="card bg-default">
        <div class="card-header bg-transparent">
          <div class="row align-items-center">
            <div class="col">
              <h6 class="text-light text-uppercase ls-1 mb-1">Analytics Graph</h6>
              <h5 class="h3 text-white mb-0">Order</h5>
            </div>
            <div class="col">
              <ul class="nav nav-pills justify-content-end">
                <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales-dark" data-update='{"data":{"datasets":[{"data":[0, 20, 10, 30, 15, 40, 20, 60, 60]}]}}' data-prefix="$" data-suffix="k">
                  <a href="#" class="nav-link py-2 px-3 active" data-toggle="tab">
                    <span class="d-none d-md-block">Month</span>
                    <span class="d-md-none">M</span>
                  </a>
                </li>
                <li class="nav-item" data-toggle="chart" data-target="#chart-sales-dark" data-update='{"data":{"datasets":[{"data":[0, 20, 5, 25, 10, 30, 15, 40, 40]}]}}' data-prefix="$" data-suffix="k">
                  <a href="#" class="nav-link py-2 px-3" data-toggle="tab">
                    <span class="d-none d-md-block">Week</span>
                    <span class="d-md-none">W</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="card-body">
          <!-- Chart -->
          <div class="chart">
            <!-- Chart wrapper -->
            <canvas id="chart-sales-dark" class="chart-canvas"></canvas>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- Footer -->
  <footer class="footer pt-0">
    <div class="row align-items-center justify-content-lg-between">
      <div class="col-lg-6">
        <div class="copyright text-center  text-lg-left  text-muted">
          &copy; 2020 <a href="https://www.n2rtechnologies.com/" class="font-weight-bold ml-1" target="_blank">N2R Technologies Private Limited</a>
        </div>
      </div>
      <div class="col-lg-6">
        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
          <li class="nav-item">
            <a href="https://www.n2rtechnologies.com/about-us" class="nav-link" target="_blank">About Us</a>
          </li>
          <li class="nav-item">
            <a href="https://www.n2rtechnologies.com/blog/ecommerce-blogs" class="nav-link" target="_blank">Blog</a>
          </li>
          <li class="nav-item">
            <a href="https://www.n2rtechnologies.com/contact-us" class="nav-link" target="_blank">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </footer>
</div>
@endsection