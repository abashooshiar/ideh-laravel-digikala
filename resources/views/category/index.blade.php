@extends('layouts.admin')

@section('content')
    <div class="panel">
        <div class="header">
            Kategorieverwaltung
            <a href="{{url('admin/category')}}"><span class="fa fa-backward"
                                                      style="float: right">zurück(temp)</span></a>

        </div>
        @include('include.item_table', ['count'=>$trash_cat_count, 'route'=>'admin/category' ,'title'=>'Kategorie'])

        <div class="panel_content">
            @include('include.Alert')
            <?php    $i = (isset($_GET['page'])) ? (($_GET['page'] - 1) * 6) : 0; ?>
            <form method="post" id="data_form">
                @csrf
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Reihe</th>
                        <th>Kategoriename</th>
                        <th>Kategorie Elternteil</th>
                        <th>Einsatz</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($category as $key=>$value)
                        @php $i++; @endphp
                        <tr>
                            <td>
{{--                                @if($value->trashed())--}}
                                <input type="checkbox" name="category_id[]" class="check_box" value="{{$value->id}}">
{{--                                @endif--}}
                            </td>
                            <td>{{replace_number($i)}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->getParent->name}}</td>
                            <td>
                                @if(!$value->trashed())
                                    <a href="{{url('admin/category/'.$value->id.'/edit')}}"><span
                                            class="fa fa-edit" data-toggle="tooltip" data-placement="bottom"
                                            title="bearbeiten"></span></a>
                                @endif
                                @if($value->trashed())
                                    <span data-toggle="tooltip" data-placement="bottom" title="Restore"
                                          onclick="restore_row('{{url('admin/category/'.$value->id)}}','{{Session::token()}}','Möchten Sie Restaurieren?')"
                                          class="fa fa-reply" aria-hidden="true"
                                          style="color: #0056b3; cursor: pointer;"></span>
                                @endif
                                @if(!$value->trashed())
                                    <span data-toggle="tooltip" data-placement="bottom" title="Papierkorb"
                                          onclick="del_row('{{url('admin/category/'.$value->id)}}','{{Session::token()}}','Möchten Sie in den Papierkorb verschieben?')"
                                          class="fa fa-trash" aria-hidden="true"
                                          style="color: #fa5252; cursor: pointer;"></span>

                                @else
                                    <span data-toggle="tooltip" data-placement="bottom" title="Löschen von Datenbanken"
                                          onclick="del_row('{{url('admin/category/'.$value->id)}}','{{Session::token()}}','Möchten Sie die Kategorie wirklich Löschen?')"
                                          class="fa fa-trash" aria-hidden="true"
                                          style="cursor: pointer;"></span>
                                @endif
                            </td>
                        </tr>
                    @endforeach

                    @if(sizeof($category) == 0)
                        <tr>
                            <td colspan="6">Es ist kein Datensatz zum Anzeigen vorhanden</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </form>
            {{$category->links()}}
        </div>
    </div>
@endsection
