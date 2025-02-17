@extends('layout.template_admin')
@section('content')
    <!-- FormValidation -->
    <div class="col-12">
        <div class="card">
            <h5 class="card-header">form Inovasi</h5>
            <div class="card-body">

                <form  method="POST" action="" id="formValidationExamples" class="row g-3">
                    @csrf
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationName">Nama </label>
                        <input  type="text" id="formValidationName" class="form-control" placeholder=" Masukkan..."
                            name="nama" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationName">Kategori </label>
                        <input  type="text" id="formValidationName" class="form-control" placeholder=" Masukkan..."
                            name="kategori" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationName">Tahapan </label>
                        <input  type="text" id="formValidationName" class="form-control" placeholder=" Masukkan..."
                            name="tahapan" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationName">Inisiator </label>
                        <input  type="text" id="formValidationName" class="form-control" placeholder=" Masukkan..."
                            name="inisiator" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationName">jenis_inovasi </label>
                        <input  type="text" id="formValidationName" class="form-control" placeholder=" Masukkan..."
                            name="jenis_inovasi" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationName">Bentuk Inovasi </label>
                        <input  type="text" id="formValidationName" class="form-control" placeholder=" Masukkan..."
                            name="bentuk_inovasi" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationName">Tematik </label>
                        <input  type="text" id="formValidationName" class="form-control" placeholder=" Masukkan..."
                            name="tematik" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationName">Urusan </label>
                        <input  type="text" id="formValidationName" class="form-control" placeholder=" Masukkan..."
                            name="urusan" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationName">Rancangan </label>
                        <input  type="text" id="formValidationName" class="form-control" placeholder=" Masukkan..."
                            name="rancangan" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationName">Waktu Uji Coba </label>
                        <input  type="date" id="formValidationName" class="form-control" placeholder=" Masukkan..."
                            name="waktu_ujiCoba" />
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="formValidationName">Waktu Penerapan </label>
                        <input  type="date" id="formValidationName" class="form-control" placeholder=" Masukkan..."
                            name="waktu_penerapan" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationBio">Tujuan</label>
                        <textarea class="form-control" id="formValidationBio" name="tujuan" rows="3"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationBio">Manfaat</label>
                        <textarea class="form-control" id="formValidationBio" name="manfaat" rows="3"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationBio">Hasil</label>
                        <textarea class="form-control" id="formValidationBio" name="hasil" rows="3"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationBio">Status</label>
                        <textarea class="form-control" id="formValidationBio" name="status" rows="3"></textarea>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /FormValidation -->
@endsection
