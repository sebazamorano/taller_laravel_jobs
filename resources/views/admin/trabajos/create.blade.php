<div class="row">
    <div class="col-lg-12">
        <form class="form-horizontal" action="" method="POST">
            <div class="form-group">
                <label for="inputTitulo" class="col-sm-2 control-label">Titulo</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="titulo" id="inputTitulo" placeholder="Titulo">
                </div>
            </div>
            <div class="form-group">
                <label for="descripcion" class="col-sm-2 control-label">Descripción</label>
                <div class="col-sm-10">
                    <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="beneficios" class="col-sm-2 control-label">Beneficios</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" name="beneficios" id="beneficios" placeholder="Beneficios"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="ambienteTrabajo" class="col-sm-2 control-label">Ambiente Trabajo</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" name="ambiente_trabajo" id="ambienteTrabajo" placeholder=""></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="sueldo" class="col-sm-2 control-label">Sueldo</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="sueldo" id="sueldo" placeholder="Sueldo">
                </div>
            </div>
            <div class="form-group">
                <label for="sueldo" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" id="email" placeholder="email">
                </div>
            </div>
            <div class="form-group">
                <label for="ciudad" class="col-sm-2 control-label">Ciudad</label>
                <div class="col-sm-10">
                    <input type="ciudad" class="form-control" name="ciudad" id="ciudad" placeholder="ciudad">
                </div>
            </div>
            <div class="form-group">
                <label for="pais" class="col-sm-2 control-label">Pais</label>
                <div class="col-sm-10">
                    <input type="pais" class="form-control" name="pais" id="pais" placeholder="pais">
                </div>
            </div>

            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
            </label>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
            </label>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
            </label>

            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
            </label>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
            </label>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
            </label>

            <label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
            </label>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Crear Trabajo</button>
                </div>
            </div>
        </form>
    </div>
</div>