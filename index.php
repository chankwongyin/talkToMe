<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Talk To Me | Chan Kwong Yin</title>
    <link rel=" stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <header>
                    <h1>Talk To Me</h1>
                    <h2>Created by CHAN Kwong Yin</h2>
                </header>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">

                <div class="card post" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                        <hr>
                        <div class="row margin-bottom-5 vertical-center">
                            <div class="col-3">
                                <span class="font-size-12 username"><strong>testname</strong></span>
                            </div>
                            <div class="col-9 comment vertical-center">
                                <div class="comment">
                                    <span class="font-size-12 comment">testcontent</span>
                                </div>
                            </div>
                        </div>
                        <form action="" method="get">
                            <div class="form-group">
                                <input type="text" class="form-control" id="username" placeholder="Your name"
                                    maxlength="20">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="comment" rows="1"
                                    placeholder="Add a comment"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Comment</button>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-3"> </div>

        </div>
    </div>
</body>

</html>