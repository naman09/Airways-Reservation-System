<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
        <title>Creating Footer</title>
        <style>
            .footer-colors{
                background-color: #222;
                color:#b2b2b2;
            }
            .reset{
               
                margin:0px;
                padding:0px;
            }
            .list-inline2{
                list-style: none;
                text-align: center;
                margin-top:10px;
                padding: 0px;
            }
            .list-inline2 li{
                display:inline;
                padding-right:10px;
            }
            li a{
                color:#b2b2b2;
            }
            li a:hover{
                color:white; 
                text-decoration:none;   
            }
            .right-bottom-footer{
                text-align: center;
                margin-top:10px;
                margin-bottom:10px;
            }
            .list-inline2 li:not(:first-child):before{
                content: '|';
                padding:0px 10px;
            }
            
        </style>
    </head>
    <body>
        <div>
            <p>dwad</p>
        </div>
        <footer class="reset footer-colors">
            <div class="container ">
                <div class="row">
                    <div class="col-md-8">
                        <ul class="list-inline2">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Contacts</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 right-bottom-footer">© Copyright VentureSky 2018</div>
                </div>
            </div>
        </footer>
    </body>
</html>