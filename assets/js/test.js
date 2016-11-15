$(document).ready(function(){
  var isAdvancedUpload = function() {
    var div = document.createElement('div');
    return (('draggable' in div) || ('ondragstart' in div && 'ondrop' in div)) && 'FormData' in window && 'FileReader' in window;
  }();
  var $form = $('.box');
  $label = $form.find('label');
  $input = $form.find( 'input[type="file"]');
  var droppedFiles = false;
  var showFiles = function( files )
  {
    $label.text( files.length > 1 ? ( $input.attr( 'data-multiple-caption' ) || '' ).replace( '{count}', files.length ) : files[ 0 ].name );
  };

  $input.on( 'change', function(e){
    droppedFiles = e.target.files;
    showFiles(droppedFiles);
    console.log(droppedFiles[0]);
  });

  if (isAdvancedUpload) {
    $form.addClass('has-advanced-upload');

    $form.on('drag dragstart dragend dragover dragenter dragleave drop', function(e) {
      e.preventDefault();
      e.stopPropagation();
    })
    .on('dragover dragenter', function() {
      $form.addClass('is-dragover');
    })
    .on('dragleave dragend drop', function() {
      $form.removeClass('is-dragover');
    })
    .on('drop', function(e) {
    droppedFiles = e.originalEvent.dataTransfer.files; // the files that were dropped
    showFiles(droppedFiles);
    console.log(droppedFiles[0]);
  });
    //initiate hashing and sent post data
    $("#uploader").on("click", function(e){
      if(droppedFiles === false){
        alert('Please select a file!!');
        return false;
      }
      else{
        console.log('in hash');
        var blobSlice = File.prototype.slice || File.prototype.mozSlice || File.prototype.webkitSlice,
            file = droppedFiles[0],
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
                        var json = JSON.parse(response);
                        console.log("Response: "+json.success);
                        if(json.success == '1')
                        {
                          window.location = 'verfy.iikjii.me/index.php#history';
                        }
                        else
                        {
                          alert('This file has already existed!! \nHash: '+json.hash+'\nAt time: '+json.timestamp);
                        }
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
      return false;
    });

  }
});
