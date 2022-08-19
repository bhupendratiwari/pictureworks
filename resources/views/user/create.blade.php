<!DOCTYPE HTML>
<html>
<head>
    <title>User Card</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
</head>
<body class="is-preload">
<div id="wrapper">
    <section id="main">
    @if($errors->any())
        <div class="alert alert-danger">
            <p><strong>Opps Something went wrong</strong></p>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif
        <form method="post" action="/store">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <table width="50%" border="1">
                <tbody>
                        <tr>
                            <td>Name: </td><td><input type="text" value="" name="name"></td>
                        </tr>
                        <tr>
                            <td>Comment: </td><td><textarea name="comments" rows="4" cols="50"></textarea></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" value="Submit">&nbsp;
                                <input type="reset" value="Reset">
                            </td>
                        </tr>
                </tbody>
            </table>
        </form>
    </section>
    <footer id="footer">
        <ul class="copyright">
            <li>&copy; Pictureworks</li>
        </ul>
    </footer>

</div>
<script>
    if ('addEventListener' in window) {
        window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
        document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
    }
</script>
</body>
</html>