@extends('layouts.app')

@section('content')


<!-- Booking Start -->
<div class="container-fluid my-5 px-0">
    <div class="video wow fadeInUp" data-wow-delay="0.1s">
        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/fyI410zm2_A?loop=1" data-bs-target="#videoModal">
            <span></span>
        </button>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/fyI410zm2_A?loop=1" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h1 class="text-white mb-4">Emergency Plumbing Service</h1>
        <h3 class="text-white mb-0">24 Hours 7 Days a Week</h3>
    </div>
    <div class="container position-relative wow fadeInUp" data-wow-delay="0.1s" style="margin-top: -6rem;">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="bg-light text-center p-5">
                    <h1 class="mb-4">Book For A Service</h1>

                    <form method="POST" action="{{ url('bookingsave') }}">
                        @csrf

                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" id="name" name="name" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" id="email" name="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" id="address" name="address" class="form-control border-0" placeholder="Address" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" id="worker_name" name="worker_name"class="form-control border-0" placeholder="Worker Name" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6" >
                                <select class="form-select border-0" style="height: 55px;">
                                    <option selected>Select A Service</option>
                                    <option value="1">Domestic Service</option>

                                    <option value="2">Plumber Service</option>
                                    <option value="3">children Care Taker Service</option>
                                    <option value="4">Patient Care Taker Service</option>
                                    <option value="5">Gardener Service</option>
                                    <option value="6">Painter Service</option>
                                    <option value="7">Electrician Service</option>


                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="date" id="date"  name="date" data-target-input="nearest">
                                    <input type="text"
                                        class="form-control border-0 datetimepicker-input"
                                        placeholder="Service Date" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0" id="special" name="special" placeholder="Special Request"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Booking End -->


@endsection





