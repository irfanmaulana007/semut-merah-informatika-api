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

        <footer>
            &copy;2019 Semut Merah Informatika 
        </footer>
    </body>
</html>