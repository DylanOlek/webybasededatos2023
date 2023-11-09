<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="code"></script>
</head>
<body>
    <?php include 'menu.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-12 card p-4">
                <form action="">
                    <div class="form-group">
                        <label for="nombre">Materia</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Teclea la materia">
                    </div>
                    <div class="class-group">
                        <label for="semestre">Semestre</label>
                        <input type="number" class="form-control" name="semestre" placeholder="Teclea el semestre">
                    </div><br>
                    <div class="form-group">
                    <label for="especialidad">Especialidad</label>
                        <select name="especialidad" class="form-control">
                            <option value="">Selecciona una especialidad</option>
                            <option value="PROGRAMACION">Programacion</option>
                            <option value="CONTABILIDAD">Contabilidad</option>
                            <option value="ELECTRONICA">Electronica</option>
                            <option value="CONSTRUCCION">Construccion</option>
                            <option value="OFIMATICA">Ofimatica</option>
                        </select>
                    </div><br>
                    <div>
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        <a href="ConsultarMaterias.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script src="js/bootstrap.js"></script>
</body>
</html>