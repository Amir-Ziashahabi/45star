<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Control Songs</title>
</head>

<body dir="ltr" style="text-align:center;background-color:#fff;">
    <div class="main" style="border: 1px solid #ccc;border-radius:5px;box-shadow:2px 2px 2px #424242;width:50%;background-color:#e3e3e3;margin: 20px auto;padding:20px;">

        <br>
        <div class="postform">

	<p><h3>List of all songs by id, name, artist</h3></p>
	<table>
    
    	<thead>
        	<tr>
            	<td>ID</td>
                <td>Name</td>
                <td>Artist</td>

            </tr>
        </thead>
    	@foreach($songs as $Song)<tr>
        <form method="post" action="">
        	<td>{{ $Song{'id'} }}</td>
            <td>{{ $Song{'name'} }}</td>
            <td>{{ $Song{'artist'} }}</td>
            <td><a href="/54star/public/Song?id={{ $Song{'id'} }}"><h4>Show Info</h4></a></td>
            <td><input name = "ID" value="{{ $Song{'id'} }}" type="hidden"></td>
            <td><input type="submit" value='Delete Song'></td>
            </form>
        </tr>@endforeach
    </table>
    </div>
        <a href="http:/54star/public/admin">بازگشت</a>
    </div>

</body>
</html>