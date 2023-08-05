<body onload="javascript:window.print()" style="margin:0 auto; width: 1000px;">
    <div style="margin-left:20px"></div>

    {{-- onload="javascript:window.print()" --}}
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <div class="row">
                    <div class="col">
                        <div>
                            <img src="{{ asset('Assets/img/logo.png') }}" style="width: 14%; float: left;">
                        </div>
                    </div>
                    <div class="col">
                        <div align="center">
                            <font size="4">PEMERINTAH DAERAH KABUPATEN KUNINGAN</font>
                        </div>
                        <div align="center">
                            <font size="7">DINAS SOSIAL</font>
                        </div>
                        <div align="center">
                            <font size="4">Jl. Siliwangi No. 26 Telp/Fax : 02328907720</font>
                        </div>
                        <div align="center">
                            <font size="4">KASTURI - KUNINGAN</font>
                        </div><br>
                    </div>
                </div>
            </td>
        </tr>
    </table>
    <hr>

    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <div class="col">
                    <center>
                        <font size="6">Laporan Pendataan Orang Terlantar</font>
                    </center>
                    <p></p>
                </div>
                <div class="col">
                    @if (isset($req['bulan']) && isset($req['status']))
    <div class="text-center">
        <font size="4">Laporan Berikut Berdasarkan Bulan
            <span id="formattedMonth">{{ $req['bulan'] }}</span>
            dan Status {{ $req['status'] }}</font>
    </div>
@endif

@if (isset($req['bulan']) && !isset($req['status']))
    <div class="text-center">
        <font size="4">Laporan Berikut Berdasarkan Bulan
            <span id="formattedMonth">{{ $req['bulan'] }}</span>
        </font>
    </div>
@endif

@if (!isset($req['bulan']) && isset($req['status']))
    <div class="text-center">
        <font size="4">Laporan Berikut Berdasarkan Status {{ $req['status'] }}
        </font>
    </div>
@endif

                </div>
            </td>
        </tr>
    </table>
    <p></p>


    <table style="border: 1px solid gray;" width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <th style="border: 1px solid gray; padding: 3px 5px;">No</th>
            <th style="border: 1px solid gray; padding: 3px 5px;">NIK</th>
            <th style="border: 1px solid gray; padding: 3px 5px;">Nama</th>
            <th style="border: 1px solid gray; padding: 3px 5px;">Tanggal Lahir</th>
            <th style="border: 1px solid gray; padding: 3px 5px;">Alamat</th>
            <th style="border: 1px solid gray; padding: 3px 5px;">Jenis PMKS</th>
            <th style="border: 1px solid gray; padding: 3px 5px;">Tanggal Kedatangan</th>
            <th style="border: 1px solid gray; padding: 3px 5px;">Alasan</th>
            <th style="border: 1px solid gray; padding: 3px 5px;">Status</th>
        </tr>

        @foreach ($laporans as $laporan)
            <tr>
                <td style="border: 1px solid gray; padding: 3px 5px;">{{ ++$i }}</td>
                <td style="border: 1px solid gray; padding: 3px 5px;">{{ $laporan->dataot->nik }}</td>
                <td style="border: 1px solid gray; padding: 3px 5px;">{{ $laporan->dataot->nama }}</td>
                <td style="border: 1px solid gray; padding: 3px 5px;">{{ $laporan->dataot->ttl }}</td>
                <td style="border: 1px solid gray; padding: 3px 5px;">{{ $laporan->dataot->alamat }}</td>
                <td style="border: 1px solid gray; padding: 3px 5px;">{{ $laporan->jenis }}</td>
                <td style="border: 1px solid gray; padding: 3px 5px;">{{ $laporan->tgl_dtg }}</td>
                <td style="border: 1px solid gray; padding: 3px 5px;">{{ $laporan->alasan }}</td>
                <td style="border: 1px solid gray; padding: 3px 5px;">{{ $laporan->status }}</td>
            </tr>
        @endforeach
    </table>

    <p>&nbsp;</p>

    <table align="right" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <center>Cirebon, <?php echo date('d F Y'); ?></center>
            </td>
        </tr>
        <tr>
            <td>
                <center>A.n KEPALA DINAS SOSIAL KABUPATEN KUNINGAN KABIB REHSOS</center>
                <p>&nbsp;</p>
                <center>SUHRI, SE</center>
            </td>
        </tr>
    </table>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var bulanElement = document.getElementById('formattedMonth');
            if (bulanElement) {
                var bulanString = bulanElement.textContent;
                var monthNames = [
                    'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                    'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
                ];

                // Ubah string bulan menjadi format bulan jika sesuai dengan array monthNames
                if (bulanString.length === 2 && bulanString >= '01' && bulanString <= '12') {
                    var formattedBulan = monthNames[parseInt(bulanString, 10) - 1];
                    bulanElement.textContent = formattedBulan;
                }
            }
        });
    </script>
</body>
