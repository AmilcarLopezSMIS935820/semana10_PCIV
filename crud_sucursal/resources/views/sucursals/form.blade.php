<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY">
    </script>
    
    <style>
        .init{
            margin-top: 45px;
        }
        .footer{
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #9C27B0;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body class="init">

    <div class="card">
        <div class="container" style="padding-top:30px; padding-bottom:30px; box-shadow: 0 0 10px rgb(68, 171, 255);">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="nombre_sucursal">Nombre de la sucursal:</label>
                    <input type="text" name="nombre_sucursal" value="{{isset($sucursal->nombre_sucursal)?$sucursal->nombre_sucursal:''}}" class="form-control">
                </div>
                
                
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="gerente">Gerente:</label>
                            <input type="text" name="gerente" value="{{isset($sucursal->gerente)?$sucursal->gerente:''}}" class="form-control">
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="departamento">Departamento:</label>
                            <input type="text" name="departamento" value="{{isset($sucursal->departamento)?$sucursal->departamento:''}}" class="form-control">
                        </div>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="ciudad">Ciudad:</label>
                            <input type="text" name="ciudad" value="{{isset($sucursal->ciudad)?$sucursal->ciudad:''}}" class="form-control">
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="telefono">Telefono:</label>
                            <input type="text" name="telefono" value="{{isset($sucursal->telefono)?$sucursal->telefono:''}}" class="form-control">                
                        </div>
                    </div>
                </div>
                <hr>
            </div>
           <div class="row">
               <div class="col-md-3"></div>
               <div class="col-md-3">
                   <button type="submit" class="btn btn-success" style="width: 100%; font-weight:bold;">Guardar</button>
               </div>
               <div class="col-md-3"> 
                   <a href="{{url('/sucursal/')}}" class="btn btn-primary" style="width:100%; font-weight:bold;">Regresar</a>
               </div>
               <div class="col-md-3"></div>
           </div> 
        </div>
    </div>

</body>
</html>