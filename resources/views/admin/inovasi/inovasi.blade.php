@extends('layout.template_admin')
@section('content')
    <div class="card">
        <h5 class="card-header d-flex justify-content-between align-items-center">
            Data inovasi
            <div>
                <a class="btn btn-secondary  me-2" href="{{ route('inovasi.pdf') }}">
                    <i class="bx bx-printer"></i>PDF
                </a>

                <a class="btn btn-success" href="/inovasi_create">
                    <i class="bx bx-plus"></i>Add Data
                </a>
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

                                        <a class="dropdown-item" href="inovasi/{{ $inovasi->id }}/edit"><i
                                                class="bx bx-edit-alt me-2"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="inovasi/{{ $inovasi->id }}/delete"><i class="bx bx-trash me-2"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
