@extends('layouts.nav')
@section('content')
<div class="row">
    <div class="col-md-12 col-lg-12 mb-3">
       <div class="row row-cols-1">
          <div class="overflow-hidden d-slider1">
             <ul  class="p-0 m-0 mb-2 swiper-wrapper justify-content-center">
                <!-- Atas -->
                <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="600">
                   <div class="card-body">
                      <div class="progress-widget">
                         <div id="circle-progress-01" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="{{$jumKost}}" data-type="percent">
                            <svg class="card-slie-arrow icon-24" width="24"  viewBox="0 0 24 24">
                               <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                            </svg>
                         </div>
                         <div class="progress-detail">
                            <p  class="mb-2">Data Kos</p>
                            <h4 class="counter">{{$jumKost}}</h4>
                         </div>
                      </div>
                   </div>
                </li>
                <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="600">
                   <div class="card-body">
                      <div class="progress-widget">
                         <div id="circle-progress-02" class="text-center circle-progress-01 circle-progress circle-progress-info" data-min-value="0" data-max-value="100" data-value="{{$jumkriteria}}" data-type="percent">
                            <svg class="card-slie-arrow icon-24" width="24" viewBox="0 0 24 24">
                               <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                            </svg>
                         </div>
                         <div class="progress-detail">
                            <p  class="mb-2">Kriteria</p>
                            <h4 class="counter">{{$jumkriteria}}</h4>
                         </div>
                      </div>
                   </div>
                </li>
                <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="600">
                   <div class="card-body">
                      <div class="progress-widget">
                         <div id="circle-progress-03" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="{{$jumhimpunan}}" data-type="percent">
                            <svg class="card-slie-arrow icon-24" width="24" viewBox="0 0 24 24">
                               <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                            </svg>
                         </div>
                         <div class="progress-detail">
                            <p  class="mb-2">Himpunan</p>
                            <h4 class="counter">{{$jumhimpunan}}</h4>
                         </div>
                      </div>
                   </div>
                </li>
             </ul>
             <div class="swiper-button swiper-button-next"></div>
             <div class="swiper-button swiper-button-prev"></div>
          </div>
       </div>
    </div>
    <div class="col-md-12 col-lg-12">
       <div class="row">
          <div class="col-md-12 col-lg-12">
             <div class="overflow-hidden card" data-aos="fade-up" data-aos-delay="600">
                <div class="p-0 card-body">
                   <div class="mt-4 table-responsive">
                      <table id="basic-table" class="table mb-0 table-striped" role="grid">
                         <thead>
                            <tr>
                               <th>Nama Kost</th>
                               <th>No Hp</th>
                               <th>Alamat</th>
                               <th>Hasil</th>
                            </tr>
                         </thead>
                         <tbody>
                            @foreach ($hasil as $item)
                            <tr>
                               <td>{{$item['nama_kost']}}</td>
                               <td>{{$item['no_hp']}}</td>
                               <td>{{$item['alamat']}}</td>
                               <td >{{$item['hasil']}}</td>
                            </tr>
                            @endforeach
                            <!-- <td>
                               <div class="iq-media-group iq-media-group-1">
                                  <a href="#" class="iq-media-1">
                                     <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                  </a>
                                  <a href="#" class="iq-media-1">
                                     <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                  </a>
                                  <a href="#" class="iq-media-1">
                                     <div class="icon iq-icon-box-3 rounded-pill">MM</div>
                                  </a>
                               </div>
                            </td> -->
                            <!-- <td>
                               <div class="mb-2 d-flex align-items-center">
                                  <h6>60%</h6>
                               </div>
                               <div class="shadow-none progress bg-soft-primary w-100" style="height: 4px">
                                  <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                               </div>
                            </td> -->
                         </tbody>
                      </table>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
