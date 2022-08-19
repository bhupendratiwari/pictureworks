<!DOCTYPE HTML>
<html>
<head>
    <title>User Data</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
</head>
<body class="is-preload">
<div id="wrapper">
    <section id="main">
       <table width="100%" border="1">
           <thead>
               <tr>
                   <td colspan="4" align="right">
                        <input type="button" value="Create New Comment" onclick="window.location.href='/create'">
                   </td>
               </tr>
               <tr>
                   <th>Id</th>
                   <th>Name</th>
                   <th>Comment</tg>
                   <th>Action</tf>
               </tr>
           </thead>
           <tbody>
               <?php foreach($users as $row) { ?>
                <tr>
                    <td align="center"><a href="/show/<?=$row->id?>" title="View Comment"><?=$row->id?></a></td>
                    <td><?=$row->name?></td>
                    <td><?=$row->comments?></td>
                    <td>
                        <input type="button" value="Edit" onclick="window.location.href='/edit/<?=$row->id?>'">&nbsp;
                        <input type="button" value="Delete" onclick="window.location.href='/destroy/<?=$row->id?>'">
                    </td>
                </tr>
               <?php } ?>
           </tbody>
       </table>
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