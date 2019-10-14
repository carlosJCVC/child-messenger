<div class="form-row"> 
    <div class="col-md-12">
        <h3>Ingrese el contenido de su Articulo</b>
    </div>
    
    <div class="col-md-12 mb-3">
        <label name="article_title">Titulo</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">T</span>
            </div>
            <input type="text" name="article_title" class="form-control" placeholder="Escribe el articulo del titulo" value="{{ isset($article) ? $article->article_title : old('article_title') }}" required>

            <div class="valid-feedback">
                Looks good!
            </div>
            
            <div class="invalid-feedback {{ $errors->has('article_title')? 'd-block' : '' }}">
                {{ $errors->has('article_title')? $errors->first('article_title') : 'El Titulo del Articulo es requerido'  }}
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <label name="article_author">Autor</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">A</span>
            </div>
            <input type="text" name="article_author" class="form-control" placeholder="Escribe el nombre del autor" value="{{ isset($article) ? $article->article_author : old('article_author') }}" required>

            <div class="valid-feedback">
                Looks good!
            </div>
                
            <div class="invalid-feedback {{ $errors->has('article_author')? 'd-block' : '' }}">
                {{ $errors->has('article_author')? $errors->first('article_author') : 'El campo de autor es requerido'  }}
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <label name="article_keywords">Palabras Clave</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">P</span>
            </div>
            <input type="text" name="article_keywords" class="form-control" placeholder="Escribe las palabras clave" value="{{ isset($article) ? $article->article_keywords : old('article_keywords') }}" required>

            <div class="valid-feedback">
                Looks good!
            </div>
                
            <div class="invalid-feedback {{ $errors->has('article_keywords')? 'd-block' : '' }}">
                {{ $errors->has('article_keywords')? $errors->first('article_keywords') : 'El campo de Palabras Clave es requerido'  }}
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <label style="margin-bottom: 15px" name="article_content">Contenido</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">C</span>
            </div>
            <textarea name="article_content" id="article_content"class="form-control">{!! isset($article) ? $article->article_content : old('article_content') !!}</textarea>

            <div class="valid-feedback">
                Looks good!
            </div>
                
            <div class="invalid-feedback {{ $errors->has('article_content')? 'd-block' : '' }}">
                {{ $errors->has('article_content')? $errors->first('article_content') : 'El campo de Contenido es requerido'  }}
            </div>
        </div>
    </div>
    <div style="margin-top: 15px" class="col-md-12 mb-3">
        <label name="article_bibliography">Bibliografia</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">B</span>
            </div>
            <input type="text" name="article_bibliography" class="form-control" placeholder="Escribe el articulo del titulo" value="{{ isset($article) ? $article->article_bibliography : old('article_bibliography') }}" required>

            <div class="valid-feedback">
                Looks good!
            </div>
                
            <div class="invalid-feedback {{ $errors->has('article_bibliography')? 'd-block' : '' }}">
                {{ $errors->has('article_bibliography')? $errors->first('article_bibliography') : 'El campo de Bibliografia es requerido'  }}
            </div>
        </div>
    </div>
    
    <div class="col-md-12 mb-3">
        <label name="article_image[]">Imagen</label>
        <div class="image input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">I</span>
            </div>
            <input type="file" class="form-control" name="article_image[]" multiple="true">
        </div>
    </div>                              
</div>