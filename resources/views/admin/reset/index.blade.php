<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Aiges</title>
        <!-- CSS -->
        <link
            rel="stylesheet"
            href="{{ asset('css/assets2/bootstrap/css/bootstrap.min.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{
                asset('css/assets2/font-awesome/css/font-awesome.min.css')
            }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('css/assets2/css/form-elements.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('css/assets2/css/style.css') }}"
        />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link
            rel="shortcut icon"
            href="{{ asset('css/assets2/ico/favicon.png') }}"
        />
        <link
            rel="apple-touch-icon-precomposed"
            sizes="144x144"
            href="{{
                asset('css/assets2/ico/apple-touch-icon-144-precomposed.png')
            }}"
        />
        <link
            rel="apple-touch-icon-precomposed"
            sizes="114x114"
            href="{{
                asset('css/assets2/ico/apple-touch-icon-114-precomposed.png')
            }}"
        />
        <link
            rel="apple-touch-icon-precomposed"
            sizes="72x72"
            href="{{
                asset('css/assets2/ico/apple-touch-icon-72-precomposed.png')
            }}"
        />
        <link 
            rel="apple-touch-icon-precomposed"
            href="{{
                asset('css/assets2/ico/apple-touch-icon-57-precomposed.png')
            }}"
        />
    </head>

    <body class="hold-transition login-page" style="background-color: #d2d6de">
        <!-- Top content -->
        <div class="login-box">
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <!--div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>
                              <strong>CENTRO ESCOLAR CATOLICO SANTA MARIA DEL CAMINO</strong>
                            </h1>
                            <div class="description">
                              <p></p>
                            </div>
                        </div>
                    </div-->


                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                                <img src="{{ asset('/imagenes/recursosrpt/logosistemapequeno.png')}}" class="user-image" alt="User Image" style="height: auto">

                                <div class="form-top">
                                   <p align="center"><span class="label label-warning">SOLICITUD DE ENVIO DE CONTRASEÑA</span>
                                      
                                   </p>
                                    <p align="center">
                                      Por favor ingrese su nombre de usuario en el siguiente espacio para continuar
                                    </p>
                                </div>
                                
                            </div>
                            <div class="form-bottom">
                                <form
                                    role="form"
                                    action="reset"
                                    method="POST"
                                    class="login-form">
                                    @csrf
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username" >
                                          Usuario: </label>
                                        <input
                                            id="name"
                                            type="text"
                                            name="username"
                                            class="form-username form-control"
                                            placeholder="Digite el usuario"
                                            required autofocus
                                        />
                                    </div>
                                    <button type="submit" class="btn">
                                      Recuperar contraseña
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Javascript -->
        <script src="{{
                asset('css/assets2/js/jquery-1.11.1.min.js')
            }}"></script>
        <script src="{{
                asset('css/assets2/bootstrap/js/bootstrap.min.js')
            }}"></script>
        <!--script src="{{
                asset('css/assets2/js/jquery.backstretch.min.js')
            }}"></script-->
        <script src="{{ asset('css/assets2/js/scripts.js') }}"></script>

        <!--[if lt IE 10]>
            <script src="css/assets2/js/placeholder.js"></script>
        <![endif]-->
    </body>
</html>
