<div class="modal fade" id="tambahSiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/siswa/store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @php
                        // dd($seragam);
                    @endphp
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="">Nama</label>
                            <input type="text" name="nama" placeholder="Nama" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="">NIS</label>
                            <input type="text" name="nis" placeholder="NIS" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="">NISN</label>
                            <input type="text" name="nisn" placeholder="NISN" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="">Jurusan</label>
                            <select name="jurusan" id="" class="form-control" required>
                                <option value="">-- Pilih Jurusan --</option>
                                <option value="RPL">RPL</option>
                                <option value="AKL_I">AKL I</option>
                                <option value="AKL_II">AKL II</option>
                                <option value="BDP_I">BDP I</option>
                                <option value="BDP_II">BDP II</option>
                                <option value="OTKP_I">OTKP I</option>
                                <option value="OTKP_II">OTKP II</option>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>



@foreach ($data as $d)
    <div class="modal fade" id="editSiswa{{ $d->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/siswa/update/' . $d->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @php
                            // dd($seragam);
                        @endphp
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="">Nama</label>
                                <input type="text" name="nama" placeholder="Nama" class="form-control"
                                    value=" {{ $d->nama }} ">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="">NIS</label>
                                <input type="text" name="nis" placeholder="NIS" class="form-control"
                                    value=" {{ $d->nis }} ">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="">NISN</label>
                                <input type="text" name="nisn" placeholder="NISN" class="form-control"
                                    value=" {{ $d->nisn }} ">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="">Jurusan</label>
                                <select name="jurusan" id="" class="form-control" required>
                                    <option value="">-- Pilih Jurusan --</option>
                                    <option value="RPL" {{ $d->RPL === 'RPL' ? 'selected' : '' }}>RPL</option>
                                    <option value="AKL_I" {{ $d->AKL_I === 'AKL_I' ? 'selected' : '' }}>AKL I</option>
                                    <option value="AKL_II" {{ $d->AKL_II === 'AKL_II' ? 'selected' : '' }}>AKL II
                                    </option>
                                    <option value="BDP_I" {{ $d->BDP_I === 'BDP_I' ? 'selected' : '' }}>BDP I</option>
                                    <option value="BDP_II" {{ $d->BDP_II === 'BDP_II' ? 'selected' : '' }}>BDP II
                                    </option>
                                    <option value="OTKP_I" {{ $d->OTKP_I === 'OTKP_I' ? 'selected' : '' }}>OTKP I
                                    </option>
                                    <option value="OTKP_II" {{ $d->OTKP_II === 'OTKP_II' ? 'selected' : '' }}>OTKP II
                                    </option>
                                </select>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
