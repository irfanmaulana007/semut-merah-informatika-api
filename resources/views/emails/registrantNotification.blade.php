<DOCTYPE html>
    <html lang="en-US">
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    </head>
    <body>
        <img src="{{ asset('images/logo.png') }}" alt="logo">

        <p>Halo {{ $data['name'] }},</p>

        <p>Terima kasih telah melakukan pendaftaran menjadi peserta <b>{{ $event->name }}</b></p>
        <p>Untuk link seminar online akan kami informasikan lebih lanjut melalui email yang berbeda dengan mempertimbangakn kuota dari jumlah peserta yang melakukan pendaftaran.</p>
        <p>Terima Kasih</p>

        <br><br>
        <footer>
            <small>&copy;2019 Semut Merah Informatika</small>
        </footer>
    </body>
</html>