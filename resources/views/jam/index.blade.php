@extends('layouts.master', ["title" => $title ?? "Dashboard"])

@push('style')

@endpush

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="mb-3">Form input paremeter</h5>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No. Urut</th>
                            <th width="250">Parameter Proses</th>
                            <th width="120">Source Data</th>
                            <th width="120">Tipe Param</th>
                            <th>Input Form</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>QR Pegawai</td>
                            <td>manual input</td>
                            <td>Character</td>
                            <td>
                                <input type="text" name="pegawai" id="pegawai" class="form-control" autofocus>
                            </td>
                        </tr>
                        <tr id="form-por" class="d-none">
                            <td>02</td>
                            <td>No POR</td>
                            <td>manual input</td>
                            <td>Character</td>
                            <td>
                                <input type="text" name="por" id="por" class="form-control">
                            </td>
                        </tr>
                        <tr id="form-mesin" class="d-none">
                            <td>03</td>
                            <td>QR Mesin</td>
                            <td>manual input</td>
                            <td>Character</td>
                            <td>
                                <input type="text" name="machine" id="machine" class="form-control">
                            </td>
                        </tr>
                        <tr class="d-none form-input-por">
                            <td>04</td>
                            <td>Isi tangki vessel dengan filter water melalui gronfa</td>
                            <td>manual input</td>
                            <td>Optional</td>
                            <td>
                                <select name="" id="" class="form-control">
                                    <option value="">-- Select Option --</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="d-none form-input-por">
                            <td>04-01</td>
                            <td>Jumlah air (Flowmeter)</td>
                            <td></td>
                            <td>Numeric</td>
                            <td>
                                <input type="number" name="" id="" class="form-control">
                            </td>
                        </tr>
                        <tr class="d-none form-input-por">
                            <td>05</td>
                            <td>
                                Masukkan citric acid, sodium sitrat dan vitasweet/sucralose yang sudah
                                dilarutkan dengan sedikit air, ke dalam tangki gronfa dan aduk hingga
                                larut selama + 5 menit.
                                Alert akan muncul apabila lebih dari 5 menit
                            </td>
                            <td></td>
                            <td>Optional</td>
                            <td>
                                <select name="" id="" class="form-control">
                                    <option value="">-- Select Option --</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="d-none form-input-por">
                            <td>05-01</td>
                            <td>Waktu mulai pengadukan gronfa</td>
                            <td>potensio/panel</td>
                            <td>Datetime</td>
                            <td>
                                <input type="date" name="" id="" class="form-control" disabled>
                            </td>
                        </tr>
                        <tr class="d-none form-input-por">
                            <td>05-02</td>
                            <td>Waktu selesai pengadukan gronfa</td>
                            <td></td>
                            <td>Datetime</td>
                            <td>
                                <input type="date" name="" id="" class="form-control" disabled>
                            </td>
                        </tr>
                        <tr class="d-none form-input-por">
                            <td>06</td>
                            <td>Transfer produk yang ada di dalam Gronfa ke dalam Vessel secara
                                bertahap. Pastikan alat penyaring sudah terpasang.
                                Campurkan RM aduk hingga tercampur merata.</td>
                            <td>manual input</td>
                            <td>Optional</td>
                            <td>
                                <select name="" id="" class="form-control">
                                    <option value="">-- Select Option --</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="d-none form-input-por">
                            <td>07</td>
                            <td>Campurkan RM aduk hingga tercampur merata.</td>
                            <td>manual input</td>
                            <td>Optional</td>
                            <td>
                                <select name="" id="" class="form-control">
                                    <option value="">-- Select Option --</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="d-none form-input-por">
                            <td>08</td>
                            <td>Pastikan TS: 31-32%</td>
                            <td>manual input</td>
                            <td>Optional</td>
                            <td>
                                <select name="" id="" class="form-control">
                                    <option value="">-- Select Option --</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="d-none form-input-por">
                            <td>08-01</td>
                            <td>Pengukuran TS awal</td>
                            <td>manual alat di produksi</td>
                            <td>Numeric</td>
                            <td>
                                <input type="number" name="" id="" class="form-control">
                            </td>
                        </tr>
                        <tr class="d-none form-input-por">
                            <td>09</td>
                            <td>
                                Panaskan hingga suhu 85-95 °C, aduk hingga terlihat matang dan pastikan pengecekan manual alat di produks
                                Alert akan muncul di suhu 95 C
                                TS: 36-38%
                            </td>
                            <td>manual alat di produksi</td>
                            <td>Optional</td>
                            <td>
                                <select name="" id="" class="form-control">
                                    <option value="">-- Select Option --</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="d-none form-input-por">
                            <td>09-01</td>
                            <td>Waktu mulai pemanasan vessel</td>
                            <td>panel thermocontrol</td>
                            <td>Datetime</td>
                            <td>
                                <input type="date" name="" id="" class="form-control" disabled>
                            </td>
                        </tr>
                        <tr class="d-none form-input-por">
                            <td>09-02</td>
                            <td>Waktu selesai pemanasan vessel</td>
                            <td>panel thermocontrol</td>
                            <td>Datetime</td>
                            <td>
                                <input type="date" name="" id="" class="form-control" disabled>
                            </td>
                        </tr>
                        <tr class="d-none form-input-por">
                            <td>09-03</td>
                            <td>Suhu akhir vessel</td>
                            <td>input manual</td>
                            <td>Numeric</td>
                            <td>
                                <input type="number" name="" id="" class="form-control">
                            </td>
                        </tr>
                        <tr class="d-none form-input-por">
                            <td>09-04</td>
                            <td>Pengukuran TS akhir</td>
                            <td>manual alat di produksi</td>
                            <td>Numeric</td>
                            <td>
                                <input type="number" name="" id="" class="form-control">
                            </td>
                        </tr>
                        <tr class="d-none form-input-por">
                            <td>10</td>
                            <td>Lakukan Pendinginan Dengan Air Biasa, Masukkan flavor pada suhu 80 °C</td>
                            <td>manual input</td>
                            <td>Optional</td>
                            <td>
                                <select name="" id="" class="form-control">
                                    <option value="">-- Select Option --</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="d-none form-input-por">
                            <td>10-01</td>
                            <td>Waktu mulai pendinginan</td>
                            <td>panel thermocontrol</td>
                            <td>Datetime</td>
                            <td>
                                <input type="date" name="" id="" class="form-control" disabled>
                            </td>
                        </tr>
                        <tr class="d-none form-input-por">
                            <td>10-02</td>
                            <td>Waktu selesai pendinginan</td>
                            <td>panel thermocontrol</td>
                            <td>Datetime</td>
                            <td>
                                <input type="date" name="" id="" class="form-control" disabled>
                            </td>
                        </tr>
                        <tr class="d-none form-input-por">
                            <td>11</td>
                            <td>
                                Lakukan Tapping Pada Suhu 75 °C Ke dalam kemasan yang telah
                                disanitasi. (disemprot dengan alcohol 70%).
                            </td>
                            <td>panel thermocontrol</td>
                            <td>Datetime</td>
                            <td>
                                <input type="date" name="" id="" class="form-control">
                            </td>
                        </tr>
                        <tr class="d-none form-input-por">
                            <td>11-01</td>
                            <td>
                                Suhu tapping out
                            </td>
                            <td>manual input</td>
                            <td>Numeric</td>
                            <td>
                                <input type="number" name="" id="" class="form-control">
                            </td>
                        </tr>
                        <tr class="d-none form-input-por">
                            <td>11-02</td>
                            <td>
                                Sanitasi kemasan
                            </td>
                            <td>manual input</td>
                            <td>Optional</td>
                            <td>
                                <select name="" id="" class="form-control">
                                    <option value="">-- Select Option --</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="d-none form-input-por">
                            <td>11-03</td>
                            <td>
                                Waktu mulai tapping
                            </td>
                            <td>manual input</td>
                            <td>Datetime</td>
                            <td>
                                <input type="date" name="" id="" class="form-control">
                            </td>
                        </tr>
                        <tr class="d-none form-input-por">
                            <td>11-04</td>
                            <td>
                                Waktu selesai tapping
                            </td>
                            <td>manual input</td>
                            <td>Datetime</td>
                            <td>
                                <input type="date" name="" id="" class="form-control">
                            </td>
                        </tr>

                        <tr class="d-none form-input-por">
                            <td>12</td>
                            <td>
                                Catat hasil produksi
                            </td>
                            <td>manual input</td>
                            <td>none</td>
                            <td>
                                <input type="text" name="" id="" class="form-control">
                            </td>
                        </tr>
                        <tr class="d-none form-input-por">
                            <td>12-01</td>
                            <td>
                                Kemasan 1
                            </td>
                            <td>manual input</td>
                            <td>Character</td>
                            <td>
                                <input type="text" name="" id="" class="form-control">
                            </td>
                        </tr>
                        <tr class="d-none form-input-por">
                            <td>12-02</td>
                            <td>
                                Kemasan 2
                            </td>
                            <td>manual input</td>
                            <td>Character</td>
                            <td>
                                <input type="text" name="" id="" class="form-control">
                            </td>
                        </tr>
                        <tr class="d-none form-input-por">
                            <td>12-03</td>
                            <td>
                                Hasil Produksi Kemasan WIP (Dalam Angka)
                            </td>
                            <td>manual input</td>
                            <td>Numeric</td>
                            <td>
                                <input type="number" name="" id="" class="form-control">
                            </td>
                        </tr>
                        <tr class="d-none form-input-por">
                            <td>12-04</td>
                            <td>
                                Hasil Produksi Kemasan FG (Dalam Angka)
                            </td>
                            <td>manual input</td>
                            <td>Numeric</td>
                            <td>
                                <input type="number" name="" id="" class="form-control">
                            </td>
                        </tr>

                        <tr class="d-none form-input-por">
                            <td>13</td>
                            <td>
                                Pelaksana Produksi
                            </td>
                            <td>manual input</td>
                            <td>Character</td>
                            <td>
                                <input type="text" name="" id="" class="form-control">
                            </td>
                        </tr>
                        <tr class="d-none form-input-por">
                            <td>13-01</td>
                            <td>
                                Loading :
                            </td>
                            <td>manual input</td>
                            <td>Character</td>
                            <td>
                                <input type="text" name="" id="" class="form-control">
                            </td>
                        </tr>
                        <tr class="d-none form-input-por">
                            <td>13-02</td>
                            <td>
                                Tapping :
                            </td>
                            <td>manual input</td>
                            <td>Character</td>
                            <td>
                                <input type="text" name="" id="" class="form-control">
                            </td>
                        </tr>
                        <tr class="d-none form-input-por">
                            <td>13-03</td>
                            <td>
                                Operator Produksi
                            </td>
                            <td>manual input</td>
                            <td>Numeric</td>
                            <td>
                                <input type="number" name="" id="" class="form-control">
                            </td>
                        </tr>

                        <tr class="d-none form-input-por">
                            <td>14</td>
                            <td>
                                Rework / Perbaikan
                            </td>
                            <td>manual input</td>
                            <td>none</td>
                            <td>
                                <input type="text" name="" id="" class="form-control">
                            </td>
                        </tr>
                        <tr class="d-none form-input-por">
                            <td>14-01</td>
                            <td>
                                Produk :
                            </td>
                            <td>manual input</td>
                            <td>Character</td>
                            <td>
                                <input type="text" name="" id="" class="form-control">
                            </td>
                        </tr>
                        <tr class="d-none form-input-por">
                            <td>14-02</td>
                            <td>
                                No Batch :
                            </td>
                            <td>manual input</td>
                            <td>Character</td>
                            <td>
                                <input type="text" name="" id="" class="form-control">
                            </td>
                        </tr>
                        <tr class="d-none form-input-por">
                            <td>14-03</td>
                            <td>
                                Jumlah
                            </td>
                            <td>manual input</td>
                            <td>Numeric</td>
                            <td>
                                <input type="number" name="" id="" class="form-control">
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4"></td>
                            <td class="text-right">
                                <button type="button" class="btn btn-secondary">Submit</button>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

@push('script')
<script>
    $(document).ready(function() {
        let localPor = localStorage.getItem("por");
        let localMesin = localStorage.getItem("mesin");
        let localForm = localStorage.getItem("form-input-por");

        if (localPor === "true" && JSON.parse(localPor)) {
            $("#form-por").removeClass("d-none");
        }

        if (localMesin === "true" && JSON.parse(localMesin)) {
            $("#form-mesin").removeClass("d-none");
        }

        if (localForm === "true" && JSON.parse(localForm)) {
            $(".form-input-por").removeClass("d-none");
        }

        $("#pegawai").on("keypress", function(event) {
            if (event.which === 13) {
                event.preventDefault();
                let pegawai = $(this).val();

                if (pegawai == "iqbal") {
                    // Send ajax for request the employeement

                    $("#form-por").removeClass("d-none")
                    localStorage.setItem("por", true)
                }
            }
        });

        $("#por").on("keypress", function(event) {
            if (event.which === 13) {
                event.preventDefault();
                let por = $(this).val();

                if (por == "123") {
                    // Send ajax for request the employeement

                    $("#form-mesin").removeClass("d-none")
                    localStorage.setItem("mesin", true)
                }
            }
        });

        $("#machine").on("keypress", function(event) {
            if (event.which === 13) {
                event.preventDefault();
                let machine = $(this).val();

                if (machine == "1234") {
                    // Send ajax for request the employeement

                    $(".form-input-por").removeClass("d-none")
                    localStorage.setItem("form-input-por", true)
                }
            }
        });
    })
</script>
@endpush