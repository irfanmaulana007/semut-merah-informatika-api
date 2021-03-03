<DOCTYPE html>
    <html lang="en-US">
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    </head>
    <body>
        <img src="{{ asset('images/logo.png') }}" alt="logo">

        <p>Hi <b>{{ $data['name'] }}</b>,</p>
        <p>Pesanan anda telah dibuat dengan detail:</p>

        <table>
            <tr>
                <td>Occupation</td>
                <td>:</td>
                <td><b>{{ $occupation }}</b></td>
            </tr>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><b>{{ $data['name'] }}</b></td>
            </tr>
            <tr>
                <td>Company</td>
                <td>:</td>
                <td><b>{{ $data['company'] }}</b></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><b>{{ $data['email'] }}</b></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>:</td>
                <td><b>{{ $data['phone'] }}</b></td>
            </tr>
        </table>

        <br>
        <p>Silahkan melakukan pembayaran ke:</p>
        <table>
            <tr>
                <td>BCA</td>
                <td>:</td>
                <td><b>7750961945 (a/n Irwan Cahyana)</b></td>
            </tr>
            <tr>
                <td>Notes (Booking Code)</td>
                <td>:</td>
                <td><b>{{ $data['code'] }}</b></td>
            </tr>
            <tr>
                <td>Total</td>
                <td>:</td>
                <td><b>@currencyFormat((int) $payment_amount)</b></td>
            </tr>
        </table>
        <p><i>*Harap menuliskan booking code pada keterangan pembayaran.</i></p>
        <p><i>*Pembayaran harus dilakukan dalam 1x24 jam.</i></p>
        <br>
        <p>Setelah melakukan pembayaran <b>harap mengirimkan email konfirmasi </b>ke:</p>
        <table>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><b>training@semutmerah-analytics.com</b></td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>:</td>
                <td><b>Konfirmasi Pembayaran Training SMI</b></td>
            </tr>
            <tr>
                <td>Total</td>
                <td>:</td>
                <td><b>@currencyFormat((int) $payment_amount)</b></td>
            </tr>
            <tr>
                <td>Bank</td>
                <td>:</td>
                <td><b></b></td>
            </tr>
            <tr>
                <td>Rekening Atas Nama</td>
                <td>:</td>
                <td><b></b></td>
            </tr>
        </table>

        <p><i>*Harap melampirkan bukti transfer pada email tersebut.</i></p>

        <br>
        <p>Silahkan kontak kami di 085159091137 (Whatsapp) untuk informasi lebih lanjut.</p>

        <br><br>
        <footer>
            <small>&copy;2019 Semut Merah Informatika</small>
        </footer>
    </body>
</html>