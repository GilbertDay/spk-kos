@extends('layouts.nav')
@section('content')
<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div>
       <div class="row">
          <div class="col-sm-12">
             <div class="card">
                <!-- button add start -->
                <div class="card-header d-flex justify-content-between flex-wrap">
                    <div class="header-title">
                        <h4 class="card-title mb-0">Data Kos</h4>
                    </div>
                    <div class="">
                        <a href="#" class=" text-center btn btn-primary btn-icon mt-lg-0 mt-md-0 mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop-2">
                            <i class="btn-inner">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </i>
                            <span>Tambah Data Kos</span>
                        </a>
                        <div class="modal fade" id="staticBackdrop-2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Kos</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="/addData" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="text" class="form-label">Nama Kos</label>
                                                <input type="text" class="form-control text-light" name="nama_kost" placeholder="Nama Kos">
                                            </div>
                                            <div class="form-group">
                                                <label for="text" class="form-label">No Telp</label>
                                                <input type="text" class="form-control text-light" name="no_hp" placeholder="No Telp">
                                            </div>
                                            <div class="form-group">
                                                <label for="text" class="form-label">Alamat</label>
                                                <input type="text" class="form-control text-light" name="alamat" placeholder="No Telp">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Biaya</label>
                                                <div >
                                                    <select class="form-control text-light" name="biaya">
                                                    @foreach($biaya as $data)
                                                        <option value="{{$data['keterangan']}}">{{$data['keterangan']}}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Jarak</label>
                                                <div >
                                                    <select class="form-control text-light" name="jarak">
                                                    @foreach($jarak as $data)
                                                        <option value="{{$data['keterangan']}}">{{$data['keterangan']}}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Fasilitas</label>
                                                <div >
                                                    <select class="form-control text-light" name="fasilitas">
                                                    @foreach($fasilitas as $data)
                                                        <option value="{{$data['keterangan']}}">{{$data['keterangan']}}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Luas Kamar</label>
                                                <div >
                                                    <select class="form-control text-light" name="luas_kamar">
                                                    @foreach($luas as $data)
                                                        <option value="{{$data['keterangan']}}">{{$data['keterangan']}}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="text-start mt-2">
                                                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- button add end -->
                <div class="card-body px-0">
                   <div class="table-responsive">
                      <table id="user-list-table" class="table table-striped" role="grid" data-bs-toggle="data-table">
                         <thead>
                            <tr class="ligth">
                                <th>Nama</th>
                                <th>No Hp</th>
                                <th>Alamat</th>
                                <th>Biaya</th>
                                <th>Jarak</th>
                                <th>Fasilitas</th>
                                <th>Luas Kamar</th>
                               <th style="min-width: 100px">Action</th>
                            </tr>
                         </thead>
                         <tbody>
                             @foreach ($dataKost as $item)
                            <tr>
                                <td>{{$item['nama_kost']}}</td>
                                <td>{{$item['no_hp']}}</td>
                                <td>{{$item['alamat']}}</td>
                                <td>{{$item['biaya']}}</td>
                                <td>{{$item['jarak']}}</td>
                                <td>{{$item['fasilitas']}}</td>
                                <td >{{$item['luas_kamar']}}</td>
                                <td>
                                    <div class="flex align-items-center list-user-action">
                                        <a href="#" class="btn btn-sm btn-icon btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{$item->id_kost}}">
                                            <i class="btn-inner">
                                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </i>
                                        </a>
                                        <div class="modal fade" id="staticBackdrop-{{$item->id_kost}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Edit Data Kos</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="/editData/{{$item->id_kost}}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="text" class="form-label">Nama Kos</label>
                                                                <input type="text" class="form-control text-light" name="nama_kost" value="{{$item['nama_kost']}}" placeholder="Nama Kos">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="text" class="form-label">No Telp</label>
                                                                <input type="text" class="form-control text-light" name="no_hp" value="{{$item['no_hp']}}" placeholder="No Telp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="text" class="form-label">Alamat</label>
                                                                <input type="text" class="form-control text-light" name="alamat" value="{{$item['alamat']}}" placeholder="No Telp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label">Biaya</label>
                                                                <div >
                                                                    <select class="form-control text-light" name="biaya" >
                                                                        <option selected disabled value="{{$item['biaya']}}">{{$item['biaya']}}</option>
                                                                    @foreach($biaya as $data)
                                                                        <option value="{{$data['keterangan']}}">{{$data['keterangan']}}</option>
                                                                    @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label">Jarak</label>
                                                                <div >
                                                                    <select class="form-control text-light" name="jarak">
                                                                        <option selected disabled value="{{$item['jarak']}}">{{$item['jarak']}}</option>
                                                                    @foreach($jarak as $data)
                                                                        <option value="{{$data['keterangan']}}">{{$data['keterangan']}}</option>
                                                                    @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label">Fasilitas</label>
                                                                <div >
                                                                    <select class="form-control text-light" name="fasilitas">
                                                                        <option selected disabled value="{{$item['fasilitas']}}">{{$item['fasilitas']}}</option>
                                                                    @foreach($fasilitas as $data)
                                                                        <option value="{{$data['keterangan']}}">{{$data['keterangan']}}</option>
                                                                    @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label">Luas Kamar</label>
                                                                <div >
                                                                    <select class="form-control text-light" name="luas_kamar">
                                                                        <option selected disabled value="{{$item['luas_kamar']}}">{{$item['luas_kamar']}}</option>
                                                                    @foreach($luas as $data)
                                                                        <option value="{{$data['keterangan']}}">{{$data['keterangan']}}</option>
                                                                    @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="text-start mt-2">
                                                                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        <a class="btn btn-sm btn-icon btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" href="/hapus/datakos/{{$item['id_kost']}}" aria-label="Delete" data-bs-original-title="Delete">
                                            <span class="btn-inner">
                                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                                <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            </span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
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
