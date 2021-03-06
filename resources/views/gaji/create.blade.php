@extends('layouts.master')

@section('title')
  Form Gaji
@endsection

@section('content')
  <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="/gaji/save" method="post" id="form">
              {{ csrf_field() }}
              <div class="box-body">

                <div class="before">
                  <div class="form-group">
                    <label for="nip" class="col-sm-2 control-label">NIP Pegawai</label>

                    <div class="col-sm-5">
                      <select class="form-control select2" name="nip" id="nip">
                        <option selected disabled>Pilih Pegawai</option>
                        @foreach ($pegawai as $item)
                          <option value="{{$item->nip}}">{{$item->nip}} / {{$item->nama}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                
                <div class="after" style="display: none;">

                  <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Nama Pegawai</label>

                    <div class="col-sm-5">
                      <input type="hidden" name="id" class="form-control" readonly="yes" id="id">
                      <input type="text" name="nama" class="form-control" readonly="yes" id="nama">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="golongan" class="col-sm-2 control-label" >Golongan Pegawai</label>

                    <div class="col-sm-1">
                      <input type="text" name="golongan" class="form-control" readonly="yes" id="golongan">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="gaji" class="col-sm-2 control-label">Gaji Pokok</label>

                    <div class="col-sm-4">
                      <input type="text" name="gaji" class="form-control money" id="gaji">
                    </div>
                  </div>

                </div>
                

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="/gaji" class="btn btn-warning">Batal</a>
                <button type="submit" class="btn btn-info" id="btn-submit">Submit</button>     
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
@endsection

@section('js')
  @include('gaji.script')
@endsection