<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css">
        img {
            display: block;
            max-width:400px;
            max-height:600px;
            width: auto;
            height: auto;
        }
    </style>
  </head>
  <body>
    <div class="container">

        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">

                <!-- <div class="form-group">
                    <label for="input">Stamp:</label>
                    <div>
                        <select name="" id="input" class="form-control">
                            <option value="lowerRight">lowerRight</option>
                            <option value="lowerLeft">lowerLeft</option>
                        </select>
                    </div>
                </div> -->
                <button type="button" class="btn btn-default" id="apply">Apply</button>

            </div>

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <div id="composite-image">
                    <img src="/img/degree.jpg">
                </div>                
            </div>
        </div>
        
        
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/watermark.js"></script>
    <script src="js/stamp.js"></script>
    <script type="text/javascript">
        // function lowerRight() {
        //     console.log('I am called lowerRight');
        // }
        // function lowerLeft() {
        //     console.log('I am called lowerLeft');
        // }

        // function lowerRight() {
        //     var image1 = watermark(['/img/degree.jpg', '/img/watermark1.png'])
        //         .image(watermark.image.lowerRight())
        //         .then(function (img) {
        //             $('#composite-image').html(img);
        //         });

        //     console.log(image1);
        // }

        // function lowerLeft() {
        //     watermark(['/img/degree.jpg', '/img/watermark1.png'])
        //         .image(watermark.image.lowerLeft())
        //         .then(function (img) {
        //             $('#composite-image').html(img);
        //         });
        // }

        $('#apply').click(function() {
            // var position = $('select').val();        
            var x = 20;
            // watermark(['/img/degree.jpg', '/img/watermark1.png'])
            //     .image(function (degree, stamp) {
            //         var context = degree.getContext('2d');
            //         context.save();

            //         context.globalAlpha = 0.5;
            //         context.drawImage(stamp, 10, 10);

            //         context.restore();
            //         return degree;
            //     })
            //     .load(['/img/watermark2.png'])
            //     .image(watermark.image.lowerRight(0.5))
            //     .render()
            //     .image(watermark.text.upperRight('watermark.js', '48px monospace', '#fff', 0.5))
            //     .then(function (img) {
            //         $('#composite-image').html(img);
            //     });

            watermark(['img/degree.jpg'])
              .image(watermark.text.center('', '200px monospace', '#000', 1))
              .then(function (img) {
                $('#composite-image').html(img);
              });
        });
    </script>

  </body>
</html>