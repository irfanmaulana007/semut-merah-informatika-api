<DOCTYPE html>
    <html lang="en-US">
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    </head>
    <body>
        <img src="{{ asset('images/logo.png') }}" alt="logo">

        <p>Halo,</p>
        <p>User baru telah mendaftarkan untuk event:</p>

        <table>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><b>{{ $data['name'] }}</b></td>
            </tr>
            <tr>
                <td>Event</td>
                <td>:</td>
                <td><b>{{ $event->name }}</b></td>
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

        <br><br>
        <footer>
            <small>&copy;2019 Semut Merah Informatika</small>
        </footer>
    </body>
</html>