
<html class="no-js">
<head>
	<title>TEST THE World</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/component.css" />
    <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
</head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="assets/js/spark-md5.min.js"></script>
</head>
<body>
    <div>
        <div class="content">
        <div class="box">
            <input type="file" name="file-5[]" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
            <label for="file-5"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Choose a file&hellip;</span></label>
        </div>
        <script>
        $(document).ready(function(){
            $('#upload').bind("click",function(){
                var imgVal = $('#file-5').val();
                if(imgVal!='')
                {
                    var x = document.getElementById('file-5');
                    var blobSlice = File.prototype.slice || File.prototype.mozSlice || File.prototype.webkitSlice,
                    file = x.files[0],
                    chunkSize = 2097152,                             // Read in chunks of 2MB
                    chunks = Math.ceil(file.size / chunkSize),
                    currentChunk = 0,
                    spark = new SparkMD5.ArrayBuffer(),
                    fileReader = new FileReader();
                    fileReader.onload = function (e) {
                            console.log('read chunk nr', currentChunk + 1, 'of', chunks);
                        spark.append(e.target.result);                   // Append array buffer
                        currentChunk++;

                        if (currentChunk < chunks) {
                            loadNext();
                        } else {
                            console.log('finished loading');
                            var hash = spark.end();
                            console.info('computed hash', hash);  // Compute hash
                            $.post('/post.php', {hash: hash, name:file.name, size:file.size, type:file.type}, function(response) {
                                // Log the response to the console
                                console.log("Response: "+response);
																window.location = response;
                            });
                        }
                    };

                    fileReader.onerror = function () {
                        console.warn('oops, something went wrong.');
                    };

                    function loadNext() {
                        var start = currentChunk * chunkSize,
                        end = ((start + chunkSize) >= file.size) ? file.size : start + chunkSize;

                        fileReader.readAsArrayBuffer(blobSlice.call(file, start, end));
                    }

                    loadNext();

                }
                else
                {
                    alert('Please select a file!!');
                }
            });
        });
</script>
<script src="assets/js/custom-file-input.js"></script>
<button id='upload'>Upload</button>
</div>


</body>
</html>
