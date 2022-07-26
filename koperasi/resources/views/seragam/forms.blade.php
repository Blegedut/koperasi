<div class="modal fade" id="tambahSeragam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/seragam/store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @php
                        // dd($seragam);
                    @endphp
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="">Jenis Seragam</label>
                            <select name="jenis" id="" class="form-control" required>
                                <option value="">-- Jenis Seragam --</option>
                                <option value="kemeja">Kemeja</option>
                                <option value="pramuka">Pramuka</option>
                                <option value="olahraga">Olahraga</option>
                                <option value="batik">Batik</option>
                                <option value="koko">Koko Muslim</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="">Tanggal</label>
                            <input type="date" name="tanggal" placeholder="Tanggal" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="">Ukuran</label>
                            <select name="ukuran" id="" class="form-control" required>
                                <option value="">-- Ukuran --</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                                <option value="XXXL">XXXL</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="">Harga</label>
                            <input type="text" name="harga" placeholder="Harga" class="form-control">
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
    <div class="modal fade" id="editSeragam{{ $d->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Jadwal Pelajaran</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/seragam/update/' . $d->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="">Hari</label>
                                <select name="jenis" id="" class="form-control" required>
                                    <option value="">-- Pilih Hari --</option>
                                    <option value="kemeja" {{ $d->jenis === 'kemeja' ? 'selected' : '' }}>Kemeja
                                    </option>
                                    <option value="pramuka" {{ $d->jenis === 'pramuka' ? 'selected' : '' }}>Pramuka
                                    </option>
                                    <option value="olahraga" {{ $d->jenis === 'olahraga' ? 'selected' : '' }}>Olahraga
                                    </option>
                                    <option value="batik" {{ $d->jenis === 'batik' ? 'selected' : '' }}>Batik
                                    </option>
                                    <option value="koko" {{ $d->jenis === 'koko' ? 'selected' : '' }}>Koko Muslim
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="">Tanggal</label>
                                <input type="date" name="tanggal" placeholder="Tanggal" class="form-control" value="{{ $d->tanggal}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="">Ukuran</label>
                                <select name="ukuran" id="" class="form-control" required>
                                    <option value="">-- Ukuran Seragam --</option>
                                    <option value="S" {{ $d->jenis === 'S' ? 'selected' : '' }}>S
                                    </option>
                                    <option value="M" {{ $d->jenis === 'M' ? 'selected' : '' }}>M
                                    </option>
                                    <option value="XL" {{ $d->jenis === 'XL' ? 'selected' : '' }}>XL
                                    </option>
                                    <option value="XXL" {{ $d->jenis === 'XXL' ? 'selected' : '' }}>XXL
                                    </option>
                                    <option value="XXXL" {{ $d->jenis === 'XXXL' ? 'selected' : '' }}>XXXL
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="">Harga</label>
                                <input type="text" name="harga" placeholder="Harga" class="form-control" value="{{$d->harga}}">
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endforeach