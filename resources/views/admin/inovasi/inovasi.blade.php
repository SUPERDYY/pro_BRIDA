@extends('layout.template_admin')

@section('content')
    <div class="card">
        <h5 class="card-header d-flex justify-content-between align-items-center">
            Data inovasi
            <div>
                <a class="btn btn-secondary  me-2" href="{{ route('inovasi.pdf') }}">
                    <i class="bx bx-printer"></i>PDF
                </a>

                <a type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addNewAddresstambah"> +Add
                </a>

                <button type="button" class="btn btn-warning" id="type-warning">
                    Warning
                </button>
            </div>



        </h5>

        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Inovasi</th>
                        <th>Bentuk Inovasi</th>
                        <th>Tujuan</th>
                        <th>Manfaat</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php $no = 1; @endphp
                    @foreach ($inovasis as $key => $inovasi)
                        <tr>
                            <td>
                                {{ $no++ }}
                            </td>
                            <td>
                                <span class="fw-medium">{{ $inovasi->nama }}</span>
                            </td>
                            <td>{{ $inovasi->jenis_inovasi }}</td>
                            <td>{{ $inovasi->bentuk_inovasi }}</td>
                            <td>{{ $inovasi->tujuan }}</td>
                            <td>{{ $inovasi->manfaat }}</td>
                            {{-- <td><span class="">{{ $inovasi->tujuan }}</span></td> --}}
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                    <div class="dropdown-menu">

                                        <a type="button" data-bs-toggle="modal"
                                            data-bs-target="#addNewAddressedit{{ $inovasi->id }}" class="dropdown-item"><i
                                                class="bx bx-edit-alt me-2"></i>
                                            Edit</a>

                                        <a class="dropdown-item" href="inovasi/{{ $inovasi->id }}/delete"><i
                                                class="bx bx-trash me-2"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <!-- edit Modal -->
                        <div class="modal fade" id="addNewAddressedit{{ $inovasi->id }}" tabindex="-1"
                            aria-hidden="true">
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
                                                <input value="{{ $inovasi->nama }}" type="text"
                                                    id="formValidationName" class="form-control"
                                                    placeholder=" Masukkan..." name="nama" />
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label" for="formValidationName">Kategori </label>
                                                <input value="{{ $inovasi->kategori }}" type="text"
                                                    id="formValidationName" class="form-control"
                                                    placeholder=" Masukkan..." name="kategori" />
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label" for="formValidationName">Tahapan </label>
                                                <input value="{{ $inovasi->tahapan }}" type="text"
                                                    id="formValidationName" class="form-control"
                                                    placeholder=" Masukkan..." name="tahapan" />
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label" for="formValidationName">Inisiator </label>
                                                <input value="{{ $inovasi->inisiator }}" type="text"
                                                    id="formValidationName" class="form-control"
                                                    placeholder=" Masukkan..." name="inisiator" />
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label" for="formValidationName">jenis_inovasi </label>
                                                <input value="{{ $inovasi->jenis_inovasi }}" type="text"
                                                    id="formValidationName" class="form-control"
                                                    placeholder=" Masukkan..." name="jenis_inovasi" />
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label" for="formValidationName">Bentuk Inovasi </label>
                                                <input value="{{ $inovasi->bentuk_inovasi }}" type="text"
                                                    id="formValidationName" class="form-control"
                                                    placeholder=" Masukkan..." name="bentuk_inovasi" />
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


                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



    <!-- tambah Modal -->
    <div class="modal fade" id="addNewAddresstambah" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-4">
                        <h3 class="address-title">Add New Inovasi</h3>
                    </div>
                    <form method="POST" action="" id="formValidationExamples" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label class="form-label" for="formValidationName">Nama </label>
                            <input type="text" id="formValidationName" class="form-control"
                                placeholder=" Masukkan..." name="nama" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="formValidationName">Kategori </label>
                            <input type="text" id="formValidationName" class="form-control"
                                placeholder=" Masukkan..." name="kategori" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="formValidationName">Tahapan </label>
                            <input type="text" id="formValidationName" class="form-control"
                                placeholder=" Masukkan..." name="tahapan" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="formValidationName">Inisiator </label>
                            <input type="text" id="formValidationName" class="form-control"
                                placeholder=" Masukkan..." name="inisiator" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="formValidationName">jenis_inovasi </label>
                            <input type="text" id="formValidationName" class="form-control"
                                placeholder=" Masukkan..." name="jenis_inovasi" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="formValidationName">Bentuk Inovasi </label>
                            <input type="text" id="formValidationName" class="form-control"
                                placeholder=" Masukkan..." name="bentuk_inovasi" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="formValidationName">Tematik </label>
                            <input type="text" id="formValidationName" class="form-control"
                                placeholder=" Masukkan..." name="tematik" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="formValidationName">Urusan </label>
                            <input type="text" id="formValidationName" class="form-control"
                                placeholder=" Masukkan..." name="urusan" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="formValidationName">Rancangan </label>
                            <input type="text" id="formValidationName" class="form-control"
                                placeholder=" Masukkan..." name="rancangan" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="formValidationName">Waktu Uji Coba </label>
                            <input type="date" id="formValidationName" class="form-control"
                                placeholder=" Masukkan..." name="waktu_ujiCoba" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="formValidationName">Waktu Penerapan </label>
                            <input type="date" id="formValidationName" class="form-control"
                                placeholder=" Masukkan..." name="waktu_penerapan" />
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
                            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                aria-label="Close">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ Add New Address Modal -->
@endsection
