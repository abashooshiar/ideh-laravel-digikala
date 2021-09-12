@extends('layouts.admin')

@section('content')
    <div class="panel">
        <div class="header">
            Kategorie "{{$category->name}}" bearbeiten
        </div>
        <div class="panel_content">
            {!! Form::model($category,['url' => 'admin/category/'.$category->id,'files'=>true]) !!}
            {{method_field('PUT')}}
            <div class="form-group">
                {{Form::label('name','Kategorie Name')}}
                {{Form::text('name',null,['class'=>'form-control'])}}
                @if($errors->has('name'))
                    <span class="has_error">{{$errors->first('name')}}</span>
                @endif
            </div>
            <div class="form-group">
                {{Form::label('ename','Englisch Name')}}
                {{Form::text('ename',null,['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('search_url','url')}}
                {{Form::text('search_url',null,['class'=>'form-control'])}}
                @if($errors->has('search_url'))
                    <span class="has_error">{{$errors->first('search_url')}}</span>
                @endif
            </div>

            <div class="form-group">
                {{Form::label('parent_id', 'Kategorie Auswahl')}}
                <select name="parent_id" class="selectpicker auto_width">
                    <?php
                    foreach ($parent_cat as $key => $name):
                        if (strstr($name, "Hauptkategorie")) {
                            echo '<option value="' . $key . '" style="background: #ffffff;">' . $name . '</option>';
                        } elseif (strstr($name, "+")) {
                            $name = str_replace('+', '', $name);
                            echo '<option value="' . $key . '" style="background: #b0c3f8;">&nbsp;&nbsp;&nbsp;&nbsp;' . $name . '</option>';
                        } elseif (strstr($name, "*")) {
                            $name = str_replace('*', '', $name);
                            echo '<option value="' . $key . '" style="background: #d1dbf5;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $name . '</option>';
                        } else {
                            echo '<option value="' . $key . '" style="background: #90affa;">' . $name . '</option>';
                        }
                    endforeach;
                    ?>
                </select>
            </div>
            <div class="form-group">
                <input type="file" name="pic" id="pic" onchange="loadFile(event)" style="display: none">
                {{Form::label('pic','Foto ausw&auml;hlen')}}
                <img src="{{url('files/images/upload_pic_100_2.png')}}" onclick="select_file()" width="150" id="output">
                @if($errors->has('pic'))
                    <span class="has_error">{{$errors->first('pic')}}</span>
                @endif
            </div>
            <div class="form-group">
                {{Form::label('notShow','Nicht in der Hauptliste anzeigen')}}
                {{Form::checkbox('notShow',false)}}
            </div>

            <button class="btn btn-primary">Kategorie bearbeiten</button>
            {!! Form::close() !!}
        </div>
    </div>

@endsection
