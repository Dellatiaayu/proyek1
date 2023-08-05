<body onload="javascript:window.print()" style="margin:0 auto; width: 1000px;">
    <div style="margin-left:20px"></div>


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
                        </div>
                        <div align="right">
                            <font size="3">Kode Pos. 45521</font>
                        </div>
                    </div>
                </div>
            </td><br>
        </tr>
    </table>
    <hr>

    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <div align="right">
                <font size="4">Kuningan, <?php echo date('d F Y'); ?></font>
            </div><p></p>
            <td>
                <div class="row">
                    <div class="col">
                        <div align="left">
                            <font size="4">Nomor : {{ rand(100, 999) }}/2/{{ date('Y') }}/Rehsos</font>
                        </div>
                        <div align="left">
                            <font size="4">Sifat : Penting</font>
                        </div>
                        <div align="left">
                            <font size="4">Lampiran : -</font>
                        </div>
                        <div align="left">
                            <font size="4">Hal : Bantuan Pemulangan Orang Terlantar di Perjalanan</font>
                        </div>
                    </div><p>
                    <div class="col">
                        <div align="left">
                            <font size="4">Kepada,</font>
                        </div>
                        <div align="left">
                            <font size="4">Yth. Kepala Dinas Perhubungan </font>
                        </div>
                        <div align="left">
                            <font size="4">Kabupaten Kuningan</font>
                        </div>
                        <div align="left">
                            <font size="4">Di Tempat</font>
                        </div>
                    </div>
                </div>
                <p></p>
                <div class="col">
                    <font size="4"> Berdasarkan keterangan dan dokumen yang mendukung perihal orang terlantar yang datang ke Dinas Sosial Kabupaten Kuningan, saat ini dalam keadaan terlantar diperjalanan dengan alasan tertentu.</font>
                </div>
                <div class="col">
                    <font size="4"> Sehubungan dengan hal tersebut, dengan ini kami mohon bantuan bapak/ibu untuk dapat membantu melanjutkan perjalanan ke daerah asal yang dituju, dengan identitas sebagai berikut :</font>
                </div>
            </td>
        </tr>
    </table>
    <p></p>


    <table style="border: 1px solid gray;" width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <th style="border: 1px solid gray; padding: 3px 5px;">No</th>
            <th style="border: 1px solid gray; padding: 3px 5px;">Tanggal Kedatangan</th>
            <th style="border: 1px solid gray; padding: 3px 5px;">NIK</th>
            <th style="border: 1px solid gray; padding: 3px 5px;">Nama</th>
            <th style="border: 1px solid gray; padding: 3px 5px;">Tanggal Lahir</th>
            <th style="border: 1px solid gray; padding: 3px 5px;">Alamat</th>
            <th style="border: 1px solid gray; padding: 3px 5px;">Jenis PMKS</th>
            <th style="border: 1px solid gray; padding: 3px 5px;">Asal/Kiriman </th>
            <th style="border: 1px solid gray; padding: 3px 5px;">Alasan</th>
        </tr>

        @foreach ($data as $item)
            <tr>
                <td style="border: 1px solid gray; padding: 3px 5px;">{{ ++$i }}</td>
                <td style="border: 1px solid gray; padding: 3px 5px;">{{ $item->tgl_dtg }}</td>
                <td style="border: 1px solid gray; padding: 3px 5px;">{{ $item->dataot->nik }}</td>
                <td style="border: 1px solid gray; padding: 3px 5px;">{{ $item->dataot->nama }}</td>
                <td style="border: 1px solid gray; padding: 3px 5px;">{{ $item->dataot->ttl }}</td>
                <td style="border: 1px solid gray; padding: 3px 5px;">{{ $item->dataot->alamat }}</td>
                <td style="border: 1px solid gray; padding: 3px 5px;">{{ $item->jenis }}</td>
                <td style="border: 1px solid gray; padding: 3px 5px;">{{ $item->kiriman }}</td>
                <td style="border: 1px solid gray; padding: 3px 5px;">{{ $item->alasan }}</td>
            </tr>
        @endforeach
    </table><p></p>

    <div class="col">
        <font size="4">Demikian agar maklum dan atas bantuan serta kerjasamanya disampaikan terima kasih.</font>
    </div>

    <p>&nbsp;</p>

    <table align="right" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <center>A.n KEPALA DINAS SOSIAL </center>
                <center>KABUPATEN KUNINGAN</center>
                <center>KABIB REHSOS</center>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <center>SUHRI, SE</center>
                <center>NIP. 19650909 199003 1003</center>
            </td>
        </tr>
    </table>

</body>
