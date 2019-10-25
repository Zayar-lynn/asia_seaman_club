<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>testing</title>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>
<body>

	<form id="data">
		{{csrf_field()}}
		<input type="file" id="aa" name="aa">
		<input type="text" id="bb" name="bb">
		<input type="submit" value="submit">
	</form>
	
	<script>
		$('#data').on('submit',function (e)
        {
            e.preventDefault();
            var updateData = new FormData(this);
            // updateData.delete('aa');
            // updateData.append('aa','hello');
            //console.log(updateData.get('aa'));

            $.ajax
            ({
                type: 'GET',
                // url: "http://localhost/asia_seaman_club/public/api/test",
                url: "../api/test",
                data:updateData,
                cache:false,
                processData: false,
                contentType: false,
                success: function(data){
                    console.log(data);
                }
            });
        });
	</script>
</body>
</html>