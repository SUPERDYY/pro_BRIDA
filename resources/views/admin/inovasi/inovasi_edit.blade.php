@extends('layout.template_admin')
@section('content')
   <!-- edit Modal -->
   <div class="modal fade" id="addNewAddressedit{{ $inovasi->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3 class="address-title">Update New Inovasi</h3>
                </div>
                <form method="POST" action="/inovasi/{{ $inovasi->id }}/edit"
                    id="formValidationExamples" class="row g-3">
                    @csrf
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationName">Nama </label>
                        <input value="{{ $inovasi->nama }}" type="text" id="formValidationName"
                            class="form-control" placeholder=" Masukkan..." name="nama" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationName">Kategori </label>
                        <input value="{{ $inovasi->kategori }}" type="text"
                            id="formValidationName" class="form-control" placeholder=" Masukkan..."
                            name="kategori" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationName">Tahapan </label>
                        <input value="{{ $inovasi->tahapan }}" type="text"
                            id="formValidationName" class="form-control" placeholder=" Masukkan..."
                            name="tahapan" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationName">Inisiator </label>
                        <input value="{{ $inovasi->inisiator }}" type="text"
                            id="formValidationName" class="form-control" placeholder=" Masukkan..."
                            name="inisiator" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationName">jenis_inovasi </label>
                        <input value="{{ $inovasi->jenis_inovasi }}" type="text"
                            id="formValidationName" class="form-control" placeholder=" Masukkan..."
                            name="jenis_inovasi" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationName">Bentuk Inovasi </label>
                        <input value="{{ $inovasi->bentuk_inovasi }}" type="text"
                            id="formValidationName" class="form-control" placeholder=" Masukkan..."
                            name="bentuk_inovasi" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationName">Tematik </label>
                        <input value="{{ $inovasi->tematik }}" type="text"
                            id="formValidationName" class="form-control"
                            placeholder=" Masukkan..." name="tematik" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationName">Urusan </label>
                        <input value="{{ $inovasi->urusan }}" type="text"
                            id="formValidationName" class="form-control"
                            placeholder=" Masukkan..." name="urusan" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationName">Rancangan </label>
                        <input value="{{ $inovasi->rancangan }}" type="text"
                            id="formValidationName" class="form-control"
                            placeholder=" Masukkan..." name="rancangan" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationName">Waktu Uji Coba </label>
                        <input value="{{ $inovasi->waktu_ujicoba }}" type="date"
                            id="formValidationName" class="form-control"
                            placeholder=" Masukkan..." name="waktu_ujicoba" />
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="formValidationName">Waktu Penerapan
                        </label>
                        <input value="{{ $inovasi->waktu_penerapan }}" type="date"
                            id="formValidationName" class="form-control"
                            placeholder=" Masukkan..." name="waktu_penerapan" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationBio">Tujuan</label>
                        <input value="{{ $inovasi->tujuan }}" class="form-control"
                            id="formValidationBio" name="tujuan" rows="3"></input>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationBio">Manfaat</label>
                        <input value="{{ $inovasi->manfaat }}" class="form-control"
                            id="formValidationBio" name="manfaat" rows="3"></input>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationBio">Hasil</label>
                        <input value="{{ $inovasi->hasil }}" class="form-control"
                            id="formValidationBio" name="hasil" rows="3"></input>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationBio">Status</label>
                        <input value="{{ $inovasi->status }}" class="form-control"
                            id="formValidationBio" name="status" rows="3"></input>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="/inovasi" class="btn btn-danger">kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/ Add New Address Modal -->
@endsection
