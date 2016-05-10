<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>A Survey for UPM Academics</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
          integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <!-- jquery is required by bootstrap -->
    <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="css/magicsuggest.css" rel="stylesheet">
    <script src="js/magicsuggest.js"></script>
    <script src="js/data.js"></script>
</head>
<body>
<div class="jumbotron">
    <div class="container">
        <p>&nbsp;</p>
        <h2>Rapid Survey on R&D Disciplines in UPM</h2>
        <p>Deputy Vice Chancellor's Office (Research and Innovation)</p>
        <p><a class="btn btn-primary btn-lg" href="info" role="button">Learn More &raquo;</a></p>
    </div>
</div>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">A Survey for UPM Academics</a>
        </div>
    </div>
</nav>
<!-- Main jumbotron for a primary marketing message or call to action -->
            <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form class="form-horizontal" role="form" method="post" action="http://172.16.61.45/forseo?">
                    <fieldset>
                        <input type="hidden" name="_token" value="ueHwkdskHO9m0NjaE9DjZkbK3gWcl6f9H5A0mrjg">
                        <input type="hidden" name="querystring" id="querystring" class="form-control" value="" />
                        <input type="hidden" name="ip" id="ip" class="form-control" value="10.103.10.80" />
                        <div class="form-group">
                            <label for="staffid" class="col-sm-3 control-label required">Staff ID</label>
                            <div class="col-sm-9" placement="top" data-toggle="tooltip" data-placement="auto"
                                 title="Your UPM staff ID">
                                <input type="text" class="form-control" id="staffid" name="staffid"
                                       placeholder="eg. A05410"
                                       value=""/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label required" data-toggle="tooltip"
                                   data-placement="auto"
                                   title="Author names that you have used in your publications! eg.
                                   Faridah Mohamed Arshad; F. M. Arshad; Faridah, M. A.;
                                       Faridah Mohd Arshad; Faridah Mohd. Arshad; Faridah FM">Author
                                Names</label>
                            <div class="col-sm-9" data-toggle="tooltip" data-placement="top"
                                 title="Author names that you have used in your publications.">
                                <input type="text" class="form-control" id="authornames" name="authornames"
                                       placeholder="eg. Faridah Mohamed Arshad; F. M. Arshad; Faridah, M. A.;
                                       Faridah Mohd Arshad; Faridah Mohd. Arshad; Faridah FM"
                                       value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label required">Fields of Research (FOR)</label>
                            <div class="col-sm-9" placement="top" data-toggle="tooltip" data-placement="auto"
                                 title="FORs classify R&D activities according to their scientific and academic
                                 disciplines (see MRDCS 6th Ed. 2011 MOSTI/MASTIC). You may choose more than ONE FOR"
                                   value="">
                                <input type="text" class="form-control" id="forarea" name="forarea"
                                       placeholder="Type to search or select from this dropdown list..." />
                            </div>
                        </div>
                        <script>
                            var f = $('#forarea').magicSuggest({
                                value: [],
                                data: 'for.html',
                                placeholder: 'Select...',
                                allowFreeEntries: false,
                                selectionPosition: 'bottom',
                                selectionStacked: true,
                                valueField: 'id',
                                displayField: 'name'
                            });
                            $(f).on('selectionchange', function(e,m){
                                $('[data-toggle="tooltip"]').tooltip('hide');
                            });
                            //f.setData(fdata);
                        </script>
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">Socio-economic Objectives (SEO)</label>
                            <div class="col-sm-9" placement="top" placeholder="eg. Education, Banking"
                                 data-toggle="tooltip" data-placement="auto"
                                 title="SEOs categorize R&D activities according to their purposes or benefits to economic,
                                 social, environmental, technological sectors or scientific domain (see MRDCS 6th Ed.
                                 2011 MOSTI/MASTIC). You may choose more than ONE SEO.">
                                <input type="text" class="form-control" id="seo" name="seo"
                                       placeholder="Type to search or select from this dropdown list..." />
                            </div>
                        </div>
                        <script>
                            var s = $('#seo').magicSuggest({
                                data: '/seo.html',
                                placeholder: 'Select...',
                                allowFreeEntries: false,
                                selectionPosition: 'bottom',
                                selectionStacked: true,
                                value: [],
                            });
                            $(s).on('selectionchange', function(e,m){
                                $('[data-toggle="tooltip"]').tooltip('hide');
                            });
                            //s.setData(sdata);
                        </script>

                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">Comments</label>
                            <div class="col-sm-9" placement="top" placeholder="" data-toggle="tooltip"
                                     data-placement="auto" title="Your comments are welcome.">
                                <input type="text" class="form-control" id="comments" name="comments" placeholder=""
                                       value=""/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="message" class="col-sm-3 control-label"></label>
                            <div class="col-sm-9">
                                <input type="hidden" name="_token" value="ueHwkdskHO9m0NjaE9DjZkbK3gWcl6f9H5A0mrjg">
                                <input id="submit" name="submit" type="submit" value="Submit"
                                       class="btn btn-primary">
                                <input id="reset" name="reset" type="reset" value="Clear" class="btn btn-warning">
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            tipped = $('[data-toggle="tooltip"]').tooltip();

        });
    </script>
    <style>
        .required:after {
            content: '*';
            color: red;
            padding-left: 5px;
        }
        .tooltip.in {
            opacity: .8;
            filter: alpha(opacity=80);
        }
    </style>
<hr />
<div class="container">
    <footer>
        <p>&copy; 2016 Universiti Putra Malaysia. All rights reserved.</p>
    </footer>
</div> <!-- /container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>

