<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>App Tempo</title>
        <link href="{{ url('css/app.css') }}" rel="stylesheet" />
    </head>
    <body>
        <div id="app">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="{{ url('/img/cloud.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="row mt-negative">
                    <div class="col-md-6  mt-40">
                        <forecast-cities/>
                    </div>
                    <div class="col-md-6  mt-40">
                        <forecast-cities forecast="cold"/>
                    </div>
                </div>
                <div class="row mt-40">
                    <div class="col-md-12">
                        <input type="text" >
                    </div>
                </div>
                <div class="row justify-content-between pl-15 pr-15 mb-40">
                        <div class="card col-md-2 mt-40">
                            <div class="header">
                                Terça
                                <div>
                                    12/12/20121
                                </div>
                            </div>
                        </div>

                        <div class="card col-md-2 mt-40">
                            <div class="header">
                                Terça
                                <div>
                                    12/12/20121
                                </div>
                            </div>
                        </div>

                        <div class="card col-md-2 mt-40">
                            <div class="header">
                                Terça
                                <div>
                                    12/12/20121
                                </div>
                            </div>
                        </div>

                        <div class="card col-md-2 mt-40">
                            <div class="header">
                                Terça
                                <div>
                                    12/12/20121
                                </div>
                            </div>
                        </div>

                        <div class="card col-md-2 mt-40">
                            <div class="header">
                                Terça
                                <div>
                                    12/12/20121
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
        <script src="{{ url('js/app.js') }}"></script>
    </body>
</html>
