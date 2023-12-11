@php
    $edit = !is_null($dataTypeContent->getKey());
    $add  = is_null($dataTypeContent->getKey());
@endphp

@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_title', __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular'))

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i>
        {{ __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular') }}
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content edit-add container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered">
                    <!-- form start -->
                    <form role="form"
                            class="form-edit-add"
                            action="{{ $edit ? route('voyager.'.$dataType->slug.'.update', $dataTypeContent->getKey()) : route('voyager.'.$dataType->slug.'.store') }}"
                            method="POST" enctype="multipart/form-data">
                        <!-- PUT Method if we are editing -->
                        @if($edit)
                            {{ method_field("PUT") }}
                        @endif

                        <!-- CSRF TOKEN -->
                        {{ csrf_field() }}

                        <div class="panel-body">

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Adding / Editing -->
                            @php
                                $dataTypeRows = $dataType->{($edit ? 'editRows' : 'addRows' )};
                                $x=0;
                            @endphp

                            @foreach($dataTypeRows as $row)
                                <!-- GET THE DISPLAY OPTIONS -->
                                @php
                                    $display_options = $row->details->display ?? NULL;
                                    if ($dataTypeContent->{$row->field.'_'.($edit ? 'edit' : 'add')}) {
                                        $dataTypeContent->{$row->field} = $dataTypeContent->{$row->field.'_'.($edit ? 'edit' : 'add')};
                                    }
                                    $x=$x+1;
                                @endphp
                                @if (isset($row->details->legend) && isset($row->details->legend->text))
                                    <legend class="text-{{ $row->details->legend->align ?? 'center' }}" style="background-color: {{ $row->details->legend->bgcolor ?? '#f0f0f0' }};padding: 5px;">{{ $row->details->legend->text }}</legend>
                                @endif
                                 @if ($row->getTranslatedAttribute('display_name') =="Retour-Heure d'arrivée"||$row->getTranslatedAttribute('display_name') =="Retour-Heure de départ"||$row->getTranslatedAttribute('display_name') =="Retour-numéro de vol"||$row->getTranslatedAttribute('display_name') =="Aller -Heure d'arrivée"||$row->getTranslatedAttribute('display_name') =="Aller - Heure de départ"||$row->getTranslatedAttribute('display_name') =="Aller-numéro de vol"|| $row->getTranslatedAttribute('display_name') =="arriver à la ville" ||  $row->getTranslatedAttribute('display_name') =="Date du vol de retour" ||$row->getTranslatedAttribute('display_name')=="Ville de départ" || $row->getTranslatedAttribute('display_name')=="La date du vol aller")
                             
                                 @elseif($row->getTranslatedAttribute('display_name') =="prix adulte"||$row->getTranslatedAttribute('display_name') =="prix Child"||$row->getTranslatedAttribute('display_name')=="prix Bebes")
                                 <div class="form-group @if($row->type == 'hidden') hidden @endif col-md-4 {{ $errors->has($row->field) ? 'has-error' : '' }}" @if(isset($display_options->id)){{ "id=$display_options->id" }}@endif>
                                    {{ $row->slugify }}
                                    <label class="control-label" for="name">{{ $row->getTranslatedAttribute('display_name') }}</label>
                                    @include('voyager::multilingual.input-hidden-bread-edit-add')
                                    @if (isset($row->details->view))
                                        @include($row->details->view, ['row' => $row, 'dataType' => $dataType, 'dataTypeContent' => $dataTypeContent, 'content' => $dataTypeContent->{$row->field}, 'action' => ($edit ? 'edit' : 'add'), 'view' => ($edit ? 'edit' : 'add'), 'options' => $row->details])
                                    @elseif ($row->type == 'relationship')
                                        @include('voyager::formfields.relationship', ['options' => $row->details])
                                    @else
                                        {!! app('voyager')->formField($row, $dataType, $dataTypeContent) !!}
                                    @endif

                                    @foreach (app('voyager')->afterFormFields($row, $dataType, $dataTypeContent) as $after)
                                        {!! $after->handle($row, $dataType, $dataTypeContent) !!}
                                    @endforeach
                                    @if ($errors->has($row->field))
                                        @foreach ($errors->get($row->field) as $error)
                                            <span class="help-block">{{ $error }}</span>
                                        @endforeach
                                    @endif
                                </div> 
                                
                                @else 
                                <div class="form-group @if($row->type == 'hidden') hidden @endif col-md-6 {{ $errors->has($row->field) ? 'has-error' : '' }}" @if(isset($display_options->id)){{ "id=$display_options->id" }}@endif>
                                    {{ $row->slugify }}
                                    <label class="control-label" for="name">{{ $row->getTranslatedAttribute('display_name') }}</label>
                                    @include('voyager::multilingual.input-hidden-bread-edit-add')
                                    @if (isset($row->details->view))
                                        @include($row->details->view, ['row' => $row, 'dataType' => $dataType, 'dataTypeContent' => $dataTypeContent, 'content' => $dataTypeContent->{$row->field}, 'action' => ($edit ? 'edit' : 'add'), 'view' => ($edit ? 'edit' : 'add'), 'options' => $row->details])
                                    @elseif ($row->type == 'relationship')
                                        @include('voyager::formfields.relationship', ['options' => $row->details])
                                    @else
                                        {!! app('voyager')->formField($row, $dataType, $dataTypeContent) !!}
                                    @endif

                                    @foreach (app('voyager')->afterFormFields($row, $dataType, $dataTypeContent) as $after)
                                        {!! $after->handle($row, $dataType, $dataTypeContent) !!}
                                    @endforeach
                                    @if ($errors->has($row->field))
                                        @foreach ($errors->get($row->field) as $error)
                                            <span class="help-block">{{ $error }}</span>
                                        @endforeach
                                    @endif
                                </div> 
                                 @endif
               
                            @endforeach
                      

                        </div><!-- panel-body -->
                   
                        <div class="panel-footer">
                            <div class="direction">
                            </div>
                        
                           
                         
                            @section('submit-buttons')
                                <button type="submit" class="btn btn-primary save">{{ __('voyager::generic.save') }}</button>
                            @stop
                            @yield('submit-buttons')
                        </div>
                    </form>

                    <iframe id="form_target" name="form_target" style="display:none"></iframe>
                    <form id="my_form" action="{{ route('voyager.upload') }}" target="form_target" method="post"
                            enctype="multipart/form-data" style="width:0;height:0;overflow:hidden">
                        <input name="image" id="upload_file" type="file"
                                 onchange="$('#my_form').submit();this.value='';">
                        <input type="hidden" name="type_slug" id="type_slug" value="{{ $dataType->slug }}">
                        {{ csrf_field() }}
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-danger" id="confirm_delete_modal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><i class="voyager-warning"></i> {{ __('voyager::generic.are_you_sure') }}</h4>
                </div>

                <div class="modal-body">
                    <h4>{{ __('voyager::generic.are_you_sure_delete') }} '<span class="confirm_delete_name"></span>'</h4>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                    <button type="button" class="btn btn-danger" id="confirm_delete">{{ __('voyager::generic.delete_confirm') }}</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete File Modal -->
    @if ($edit)
        <input type="hidden" id="directioninput" value="{{ $dataTypeContent->direction }}">
        <input type="hidden" id="arrivetimeinput" value="{{ $dataTypeContent->arrivetime }}">
        <input type="hidden" id="departtimeinput" value="{{ $dataTypeContent->departtime  }}">
        <input type="hidden" id="arrivedateinput" value="{{ $dataTypeContent->arrivedate  }}">
        <input type="hidden" id="arrivecityinput" value="{{ $dataTypeContent->arrivecity  }}">
        <input type="hidden" id="departcityinput" value="{{ $dataTypeContent->departcity  }}">
        <input type="hidden" id="arrivetime2input" value="{{ $dataTypeContent->arrivetime2 }}">
        <input type="hidden" id="departtime2input" value="{{ $dataTypeContent->departtime2  }}">
        <input type="hidden" id="departdateinput" value="{{ $dataTypeContent->departdate  }}">
        <input type="hidden" id="flightnogoinput" value="{{ $dataTypeContent->flightnogo  }}">
        <input type="hidden" id="flightnoreturninput" value="{{ $dataTypeContent->flightnoreturn  }}">
    @endif
@stop

@section('javascript')
    <script>
        var params = {};
        var $file;

        function deleteHandler(tag, isMulti) {
          return function() {
            $file = $(this).siblings(tag);

            params = {
                slug:   '{{ $dataType->slug }}',
                filename:  $file.data('file-name'),
                id:     $file.data('id'),
                field:  $file.parent().data('field-name'),
                multi: isMulti,
                _token: '{{ csrf_token() }}'
            }

            $('.confirm_delete_name').text(params.filename);
            $('#confirm_delete_modal').modal('show');
          };
        }

        $('document').ready(function () {
            $('.toggleswitch').bootstrapToggle();

            //Init datepicker for date fields if data-datepicker attribute defined
            //or if browser does not handle date inputs
            $('.form-group input[type=date]').each(function (idx, elt) {
                if (elt.hasAttribute('data-datepicker')) {
                    elt.type = 'text';
                    $(elt).datetimepicker($(elt).data('datepicker'));
                } else if (elt.type != 'date') {
                    elt.type = 'text';
                    $(elt).datetimepicker({
                        format: 'L',
                        extraFormats: [ 'YYYY-MM-DD' ]
                    }).datetimepicker($(elt).data('datepicker'));
                }
            });

            @if ($isModelTranslatable)
                $('.side-body').multilingual({"editing": true});
            @endif

            $('.side-body input[data-slug-origin]').each(function(i, el) {
                $(el).slugify();
            });

            $('.form-group').on('click', '.remove-multi-image', deleteHandler('img', true));
            $('.form-group').on('click', '.remove-single-image', deleteHandler('img', false));
            $('.form-group').on('click', '.remove-multi-file', deleteHandler('a', true));
            $('.form-group').on('click', '.remove-single-file', deleteHandler('a', false));

            $('#confirm_delete').on('click', function(){
                $.post('{{ route('voyager.'.$dataType->slug.'.media.remove') }}', params, function (response) {
                    if ( response
                        && response.data
                        && response.data.status
                        && response.data.status == 200 ) {

                        toastr.success(response.data.message);
                        $file.parent().fadeOut(300, function() { $(this).remove(); })
                    } else {
                        toastr.error("Error removing file.");
                    }
                });

                $('#confirm_delete_modal').modal('hide');
            });
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>


@if (!$edit)
<script> 
        
$('select[name="direction"]').on('change', function() {
var direction=this.value;
 
if(direction=="Go_and_Return"){
    // alert('kkkk');
    $('.direction').html(`
    <div class="Go_and_Return  " >
                                <div class="row"  style="border: 1px #2d72ae;  border-style: solid;
                              padding: 10px;
                              background-color: #d9d7d7;">
                                 <h4>Aller - Retour </h4>   
                             <div class="row " style="margin: 10px;">
                                 <h5>Aller</h5>
                                <div class=" form-group col-md-4 ">
                                 <label class="control-label" for="name">Ville de départ</label>
                                       <input type="text" class="form-control" name="departcity" placeholder="Ville de départ" value="">
                                    </div>
                                    <div class="form-group col-md-4 ">
                                        <label class="control-label" for="name">arriver à la ville</label>
                                              <input type="text" class="form-control" name="arrivecity" placeholder="arriver à la ville" value="">
                                           </div>
                                           <div class="form-group col-md-4  ">
                                            <label class="control-label" for="name">La date du vol aller</label>
                                                  <input type="date" class="form-control" name="arrivedate" placeholder="La date du vol aller" value="">
                                               </div>
                                               <div class="form-group col-md-4  ">
                                                <label class="control-label" for="name">Aller - Heure de départ</label>
                                                      <input type="text" class="form-control" name="departtime" placeholder="Aller - Heure de départ" value="">
                                                   </div>
                                                   <div class="form-group col-md-4  ">
                                                    <label class="control-label" for="name">Aller -Heure d'arrivée</label>
                                                          <input type="text" class="form-control" name="arrivetime" placeholder="Aller -Heure d'arrivée" value="">
                                                       </div>
                                                       <div class="form-group col-md-4  ">
                                                <label class="control-label" for="name">Aller-numéro de vol</label>
                                                      <input type="text" class="form-control" name="flightnogo" placeholder="Retour-Heure d'arrivée" value="">
                                                   </div>
                             </div>         
                             <div class="row " style="margin: 10px;">
                                <h5>Retour</h5>
                                <div class="form-group col-md-4 ">
                                    <label class="control-label" for="name">arriver à la ville</label>
                                          <input type="text" readonly class="form-control" name="arrivecity2" placeholder="arriver à la ville" value="">
                                       </div>
                                <div class=" form-group col-md-4 ">
                                    <label class="control-label" for="name">Ville de départ</label>
                                          <input type="text"readonly class="form-control" name="departcity22" placeholder="Ville de départ" value="">
                                       </div>
                                       <div class="form-group col-md-4 ">
                                        <label class="control-label" for="name">Date du vol de retour</label>
                                              <input type="date" class="form-control" name="departdate" placeholder="Date du vol de retour" value="">
                                           </div>
                                           <div class="form-group col-md-4  ">
                                            <label class="control-label" for="name">Retour-Heure de départ</label>
                                                  <input type="text" class="form-control" name="departtime2" placeholder="Retour-Heure de départ" value="">
                                               </div>
                                               <div class="form-group col-md-4  ">
                                                <label class="control-label" for="name">Retour-Heure d'arrivée</label>
                                                      <input type="text" class="form-control" name="arrivetime2" placeholder="Retour-Heure d'arrivée" value="">
                                                   </div>
                                                   <div class="form-group col-md-4  ">
                                                <label class="control-label" for="name">Retour-numéro de vol</label>
                                                      <input type="text" class="form-control" name="flightnoreturn" placeholder="Retour-Heure d'arrivée" value="">
                                                   </div>   
                            </div>
                                </div>
                   </div>`);
}else if(direction=="Go"){
    $('.direction').html(`   <div class="Go "  >
                                <div class="row"  style="border: 1px #2d72ae;  border-style: solid;
                              padding: 10px;
                              background-color: #d9d7d7;">
                                 <h4>Aller </h4>   
                             <div class="row " style="margin: 10px;">
                              
                                <div class=" form-group col-md-4 ">
                                 <label class="control-label" for="name">Ville de départ</label>
                                       <input type="text" class="form-control" name="departcity" placeholder="Ville de départ" value="">
                                    </div>
                                    <div class="form-group col-md-4 ">
                                        <label class="control-label" for="name">arriver à la ville</label>
                                              <input type="text" class="form-control" name="arrivecity" placeholder="arriver à la ville" value="">
                                           </div>
                                           <div class="form-group col-md-4  ">
                                            <label class="control-label" for="name">La date du vol aller</label>
                                                  <input type="date" class="form-control" name="arrivedate" placeholder="La date du vol aller" value="">
                                               </div>
                                               <div class="form-group col-md-4  ">
                                                <label class="control-label" for="name">Aller - Heure de départ</label>
                                                      <input type="text" class="form-control" name="departtime" placeholder="Aller - Heure de départ" value="">
                                                   </div>
                                                   <div class="form-group col-md-4  ">
                                                    <label class="control-label" for="name">Aller -Heure d'arrivée</label>
                                                          <input type="text" class="form-control" name="arrivetime" placeholder="Aller -Heure d'arrivée" value="">
                                                       </div>
                                                       <div class="form-group col-md-4  ">
                                                <label class="control-label" for="name">Aller-numéro de vol</label>
                                                      <input type="text" class="form-control" name="flightnogo" placeholder="Retour-Heure d'arrivée" value="">
                                                   </div>
                             </div>         
                             
                                </div>
                            </div>`);
}else{
    $('.direction').html(` <div class="Return  " >
                                <div class="row"  style="border: 1px #2d72ae;  border-style: solid;
                              padding: 10px;
                              background-color: #d9d7d7;">
                                 <h4>Retour </h4>   
                                 
                             <div class="row " style="margin: 10px;">
                        
                                <div class="form-group col-md-4 ">
                                    <label class="control-label" for="name">arriver à la ville</label>
                                          <input type="text"  class="form-control" name="arrivecity" placeholder="arriver à la ville" value="">
                                       </div>
                                <div class=" form-group col-md-4 ">
                                    <label class="control-label" for="name">Ville de départ</label>
                                          <input type="text" class="form-control" name="departcity" placeholder="Ville de départ" value="">
                                       </div>
                                       <div class="form-group col-md-4 ">
                                        <label class="control-label" for="name">Date du vol de retour</label>
                                              <input type="date" class="form-control" name="departdate" placeholder="Date du vol de retour" value="">
                                           </div>
                                           <div class="form-group col-md-4  ">
                                            <label class="control-label" for="name">Retour-Heure de départ</label>
                                                  <input type="text" class="form-control" name="departtime2" placeholder="Retour-Heure de départ" value="">
                                               </div>
                                               <div class="form-group col-md-4  ">
                                                <label class="control-label" for="name">Retour-Heure d'arrivée</label>
                                                      <input type="text" class="form-control" name="arrivetime2" placeholder="Retour-Heure d'arrivée" value="">
                                                   </div>
                                                   <div class="form-group col-md-4  ">
                                                <label class="control-label" for="name">Retour-numéro de vol</label>
                                                      <input type="text" class="form-control" name="flightnoreturn" placeholder="Retour-Heure d'arrivée" value="">
                                                   </div>
                            </div>
                                </div>
                            </div>`);
}


});
$('document').ready(function () {
   
    $('.direction').html(`
    <div class="Go_and_Return" >
                                <div class="row"  style="border: 1px #2d72ae;  border-style: solid;
                              padding: 10px;
                              background-color: #d9d7d7;">
                                 <h4>Aller - Retour </h4>   
                             <div class="row " style="margin: 10px;">
                                 <h5>Aller</h5>
                                <div class=" form-group col-md-4 ">
                                 <label class="control-label" for="name">Ville de départ</label>
                                       <input type="text" class="form-control" name="departcity" placeholder="Ville de départ" value="">
                                    </div>
                                    <div class="form-group col-md-4 ">
                                        <label class="control-label" for="name">arriver à la ville</label>
                                              <input type="text" class="form-control" name="arrivecity" placeholder="arriver à la ville" value="">
                                           </div>
                                           <div class="form-group col-md-4  ">
                                            <label class="control-label" for="name">La date du vol aller</label>
                                                  <input type="date" class="form-control" name="arrivedate" placeholder="La date du vol aller" value="">
                                               </div>
                                               <div class="form-group col-md-4 ">
                                                <label class="control-label" for="name">Aller - Heure de départ</label>
                                                      <input type="text" class="form-control" name="departtime" placeholder="Aller - Heure de départ" value="">
                                                   </div>
                                                   <div class="form-group col-md-4 ">
                                                    <label class="control-label" for="name">Aller -Heure d'arrivée</label>
                                                          <input type="text" class="form-control" name="arrivetime" placeholder="Aller -Heure d'arrivée" value="">
                                                       </div>
                                                       <div class="form-group col-md-4  ">
                                                <label class="control-label" for="name">Aller-numéro de vol</label>
                                                      <input type="text" class="form-control" name="flightnogo" placeholder="Retour-Heure d'arrivée" value="">
                                                   </div>
                             </div>         
                             <div class="row " style="margin: 10px;">
                                <h5>Retour</h5>
                                <div class="form-group col-md-4 ">
                                    <label class="control-label" for="name">arriver à la ville</label>
                                          <input type="text" readonly class="form-control" name="arrivecity2" placeholder="arriver à la ville" value="">
                                       </div>
                                <div class=" form-group col-md-4 ">
                                    <label class="control-label" for="name">Ville de départ</label>
                                          <input type="text"readonly class="form-control" name="departcity22" placeholder="Ville de départ" value="">
                                       </div>
                                       <div class="form-group col-md-4 ">
                                        <label class="control-label" for="name">Date du vol de retour</label>
                                              <input type="date" class="form-control" name="departdate" placeholder="Date du vol de retour" value="">
                                           </div>
                                           <div class="form-group col-md-4 ">
                                            <label class="control-label" for="name">Retour-Heure de départ</label>
                                                  <input type="text" class="form-control" name="departtime2" placeholder="Retour-Heure de départ" value="">
                                               </div>
                                               <div class="form-group col-md-4  ">
                                                <label class="control-label" for="name">Retour-Heure d'arrivée</label>
                                                      <input type="text" class="form-control" name="arrivetime2" placeholder="Retour-Heure d'arrivée" value="">
                                                   </div>
                                                   <div class="form-group col-md-4  ">
                                                <label class="control-label" for="name">Retour-numéro de vol</label>
                                                      <input type="text" class="form-control" name="flightnoreturn" placeholder="Retour-Heure d'arrivée" value="">
                                                   </div>
                            </div>
                                </div>
                   </div>`);
});
$('input[name="departcity"]').on('change', function() {
$('input[name="departcity22"]').val(this.value);

});
$('input[name="arrivecity"]').on('change', function() {
$('input[name="arrivecity2"]').val(this.value);

});


    </script>
@endif
@if ($edit)
<script> 
    $('document').ready(function () {
        
        // alert('dedit');
        var directioninput=  $('#directioninput').val();
        var arrivetimeinput=  $('#arrivetimeinput').val();
        var departtimeinput=  $('#departtimeinput').val();
        var arrivedateinput=  $('#arrivedateinput').val();
        var arrivecityinput=  $('#arrivecityinput').val();
        var departcityinput=  $('#departcityinput').val();
        var arrivetime2input=  $('#arrivetime2input').val();
        var departtime2input=  $('#departtime2input').val();
        var departdateinput=  $('#departdateinput').val();
        var flightnogoinput =  $('#flightnogoinput ').val();
        var flightnoreturninput=  $('#flightnoreturninput').val();
     if(directioninput=="Go_and_Return"){
            // alert('d'+directioninput);
               $('.direction').html(`
                <div class="Go_and_Return form-group " >
                                <div class="row"  style="border: 1px #2d72ae;  border-style: solid;
                              padding: 10px;
                              background-color: #d9d7d7;">
                                 <h4>Aller - Retour </h4>   
                             <div class="row " style="margin: 10px;">
                                 <h5>Aller</h5>
                                <div class=" form-group col-md-4 ">
                                 <label class="control-label" for="name">Ville de départ</label>
                                       <input type="text" class="form-control" name="departcity" placeholder="Ville de départ" value="`+departcityinput+`">
                                    </div>
                                    <div class="form-group col-md-4 ">
                                        <label class="control-label" for="name">arriver à la ville</label>
                                              <input type="text" class="form-control" name="arrivecity" placeholder="arriver à la ville" value="`+arrivecityinput+`">
                                           </div>
                                           <div class="form-group col-md-4  ">
                                            <label class="control-label" for="name">La date du vol aller</label>
                                                  <input type="date" class="form-control" name="arrivedate" placeholder="La date du vol aller" value="`+arrivedateinput+`">
                                               </div>
                                               <div class="form-group col-md-4  ">
                                                <label class="control-label" for="name">Aller - Heure de départ</label>
                                                      <input type="text" class="form-control" name="departtime" placeholder="Aller - Heure de départ" value="`+departtimeinput+`">
                                                   </div>
                                                   <div class="form-group col-md-4  ">
                                                    <label class="control-label" for="name">Aller -Heure d'arrivée</label>
                                                          <input type="text" class="form-control" name="arrivetime" placeholder="Aller -Heure d'arrivée" value="`+arrivetimeinput+`">
                                                       </div>
                                                       <div class="form-group col-md-4  ">
                                                <label class="control-label" for="name">Aller-numéro de vol</label>
                                                      <input type="text" class="form-control" name="flightnogo" placeholder="Retour-Heure d'arrivée" value="`+flightnogoinput+`">
                                                   </div>
                             </div>         
                             <div class="row " style="margin: 10px;">
                                <h5>Retour</h5>
                                <div class="form-group col-md-4 ">
                                    <label class="control-label" for="name">arriver à la ville</label>
                                          <input type="text" readonly class="form-control" name="arrivecity2" placeholder="arriver à la ville" value="`+arrivecityinput+`">
                                       </div>
                                <div class=" form-group col-md-4 ">
                                    <label class="control-label" for="name">Ville de départ</label>
                                          <input type="text"readonly class="form-control" name="departcity22" placeholder="Ville de départ" value="`+departcityinput+`">
                                       </div>
                                       <div class="form-group col-md-4 ">
                                        <label class="control-label" for="name">Date du vol de retour</label>
                                              <input type="date" class="form-control" name="departdate" placeholder="Date du vol de retour" value="`+departdateinput+`">
                                           </div>
                                           <div class="form-group col-md-4  ">
                                            <label class="control-label" for="name">Retour-Heure de départ</label>
                                                  <input type="text" class="form-control" name="departtime2" placeholder="Retour-Heure de départ" value="`+departtime2input+`">
                                               </div>
                                               <div class="form-group col-md-4 ">
                                                <label class="control-label" for="name">Retour-Heure d'arrivée</label>
                                                      <input type="text" class="form-control" name="arrivetime2" placeholder="Retour-Heure d'arrivée" value="`+arrivetime2input+`">
                                                   </div>
                                                   <div class="form-group col-md-4  ">
                                                <label class="control-label" for="name">Retour-numéro de vol</label>
                                                      <input type="text" class="form-control" name="flightnoreturn" placeholder="Retour-Heure d'arrivée" value="`+flightnoreturninput+`">
                                                   </div>
                            </div>
                                </div>
                   </div>`);
     }else{
          if(directioninput=="Go"){
        $('.direction').html(`   <div class="Go form-group 
                            " >
                                <div class="row"  style="border: 1px #2d72ae;  border-style: solid;
                              padding: 10px;
                              background-color: #d9d7d7;">
                                 <h4>Aller </h4>   
                             <div class="row " style="margin: 10px;">
                              
                                <div class=" form-group col-md-4 ">
                                 <label class="control-label" for="name">Ville de départ</label>
                                       <input type="text" class="form-control" name="departcity" placeholder="Ville de départ" value="`+departcityinput+`">
                                    </div>
                                    <div class="form-group col-md-4 ">
                                        <label class="control-label" for="name">arriver à la ville</label>
                                              <input type="text" class="form-control" name="arrivecity" placeholder="arriver à la ville" value="`+arrivecityinput+`">
                                           </div>
                                           <div class="form-group col-md-4  ">
                                            <label class="control-label" for="name">La date du vol aller</label>
                                                  <input type="date" class="form-control" name="arrivedate" placeholder="La date du vol aller" value="`+arrivedateinput+`">
                                               </div>
                                               <div class="form-group col-md-4  ">
                                                <label class="control-label" for="name">Aller - Heure de départ</label>
                                                      <input type="text" class="form-control" name="departtime" placeholder="Aller - Heure de départ" value="`+departtimeinput+`">
                                                   </div>
                                                   <div class="form-group col-md-4  ">
                                                    <label class="control-label" for="name">Aller -Heure d'arrivée</label>
                                                          <input type="text" class="form-control" name="arrivetime" placeholder="Aller -Heure d'arrivée" value="`+arrivetimeinput+`">
                                                       </div>
                                                       <div class="form-group col-md-4  ">
                                                <label class="control-label" for="name">Aller-numéro de vol</label>
                                                      <input type="text" class="form-control" name="flightnogo" placeholder="Retour-Heure d'arrivée" value="`+flightnogoinput+`">
                                                   </div>
                             </div>         
                             
                                </div>
                            </div>`);
     }else{
      $('.direction').html(` <div class="Return form-group " >
                                <div class="row"  style="border: 1px #2d72ae;  border-style: solid;
                              padding: 10px;
                              background-color: #d9d7d7;">
                                 <h4>Retour </h4>   
                                 
                             <div class="row " style="margin: 10px;">
                        
                                <div class="form-group col-md-4 ">
                                    <label class="control-label" for="name">arriver à la ville</label>
                                          <input type="text" readonly class="form-control" name="arrivecity" placeholder="arriver à la ville" value="`+arrivecityinput+`">
                                       </div>
                                <div class=" form-group col-md-4 ">
                                    <label class="control-label" for="name">Ville de départ</label>
                                          <input type="text"readonly class="form-control" name="departcity" placeholder="Ville de départ" value="`+departcityinput+`">
                                       </div>
                                       <div class="form-group col-md-4 ">
                                        <label class="control-label" for="name">Date du vol de retour</label>
                                              <input type="date" class="form-control" name="departdate" placeholder="Date du vol de retour" value="`+departdateinput+`">
                                           </div>
                                           <div class="form-group col-md-4  ">
                                            <label class="control-label" for="name">Retour-Heure de départ</label>
                                                  <input type="text" class="form-control" name="departtime2" placeholder="Retour-Heure de départ" value="`+departtime2input+`">
                                               </div>
                                               <div class="form-group col-md-4 ">
                                                <label class="control-label" for="name">Retour-Heure d'arrivée</label>
                                                      <input type="text" class="form-control" name="arrivetime2" placeholder="Retour-Heure d'arrivée" value="`+arrivetime2input+`">
                                                   </div>
                                                   <div class="form-group col-md-4  ">
                                                <label class="control-label" for="name">Retour-numéro de vol</label>
                                                      <input type="text" class="form-control" name="flightnoreturn" placeholder="Retour-Heure d'arrivée" value="`+flightnoreturninput+`">
                                                   </div>
                            </div>
                                </div>
                            </div>`);
   }
     }

        });  



                
$('select[name="direction"]').on('change', function() {
var direction=this.value;
// alert('dedit');
var directioninput=  $('#directioninput').val();
        var arrivetimeinput=  $('#arrivetimeinput').val();
        var departtimeinput=  $('#departtimeinput').val();
        var arrivedateinput=  $('#arrivedateinput').val();
        var arrivecityinput=  $('#arrivecityinput').val();
        var departcityinput=  $('#departcityinput').val();
        var arrivetime2input=  $('#arrivetime2input').val();
        var departtime2input=  $('#departtime2input').val();
        var departdateinput=  $('#departdateinput').val();
        var flightnogoinput =  $('#flightnogoinput ').val();
        var flightnoreturninput=  $('#flightnoreturninput').val();
        if(direction=="Go_and_Return"){
            //  alert('d'+direction);
               $('.direction').html(`
                <div class="Go_and_Return form-group " >
                                <div class="row"  style="border: 1px #2d72ae;  border-style: solid;
                              padding: 10px;
                              background-color: #d9d7d7;">
                                 <h4>Aller - Retour </h4>   
                             <div class="row " style="margin: 10px;">
                                 <h5>Aller</h5>
                                <div class=" form-group col-md-4 ">
                                 <label class="control-label" for="name">Ville de départ</label>
                                       <input type="text" class="form-control" name="departcity" placeholder="Ville de départ" value="`+departcityinput+`">
                                    </div>
                                    <div class="form-group col-md-4 ">
                                        <label class="control-label" for="name">arriver à la ville</label>
                                              <input type="text" class="form-control" name="arrivecity" placeholder="arriver à la ville" value="`+arrivecityinput+`">
                                           </div>
                                           <div class="form-group col-md-4  ">
                                            <label class="control-label" for="name">La date du vol aller</label>
                                                  <input type="date" class="form-control" name="arrivedate" placeholder="La date du vol aller" value="`+arrivedateinput+`">
                                               </div>
                                               <div class="form-group col-md-4  ">
                                                <label class="control-label" for="name">Aller - Heure de départ</label>
                                                      <input type="text" class="form-control" name="departtime" placeholder="Aller - Heure de départ" value="`+departtimeinput+`">
                                                   </div>
                                                   <div class="form-group col-md-4  ">
                                                    <label class="control-label" for="name">Aller -Heure d'arrivée</label>
                                                          <input type="text" class="form-control" name="arrivetime" placeholder="Aller -Heure d'arrivée" value="`+arrivetimeinput+`">
                                                       </div>
                                                       <div class="form-group col-md-4  ">
                                                <label class="control-label" for="name">Aller-numéro de vol</label>
                                                      <input type="text" class="form-control" name="flightnogo" placeholder="Retour-Heure d'arrivée" value="`+flightnogoinput+`">
                                                   </div>
                             </div>         
                             <div class="row " style="margin: 10px;">
                                <h5>Retour</h5>
                                <div class="form-group col-md-4 ">
                                    <label class="control-label" for="name">arriver à la ville</label>
                                          <input type="text" readonly class="form-control" name="arrivecity2" placeholder="arriver à la ville" value="`+arrivecityinput+`">
                                       </div>
                                <div class=" form-group col-md-4 ">
                                    <label class="control-label" for="name">Ville de départ</label>
                                          <input type="text"readonly class="form-control" name="departcity22" placeholder="Ville de départ" value="`+departcityinput+`">
                                       </div>
                                       <div class="form-group col-md-4 ">
                                        <label class="control-label" for="name">Date du vol de retour</label>
                                              <input type="date" class="form-control" name="departdate" placeholder="Date du vol de retour" value="`+departdateinput+`">
                                           </div>
                                           <div class="form-group col-md-4  ">
                                            <label class="control-label" for="name">Retour-Heure de départ</label>
                                                  <input type="text" class="form-control" name="departtime2" placeholder="Retour-Heure de départ" value="`+departtime2input+`">
                                               </div>
                                               <div class="form-group col-md-4 ">
                                                <label class="control-label" for="name">Retour-Heure d'arrivée</label>
                                                      <input type="text" class="form-control" name="arrivetime2" placeholder="Retour-Heure d'arrivée" value="`+arrivetime2input+`">
                                                   </div>
                                                   <div class="form-group col-md-4  ">
                                                <label class="control-label" for="name">Retour-numéro de vol</label>
                                                      <input type="text" class="form-control" name="flightnoreturn" placeholder="Retour-Heure d'arrivée" value="`+flightnoreturninput+`">
                                                   </div>
                            </div>
                                </div>
                   </div>`);
     }else{
        // alert('d'+direction);
          if(direction=="Go"){
        $('.direction').html(`   <div class="Go form-group 
                            " >
                                <div class="row"  style="border: 1px #2d72ae;  border-style: solid;
                              padding: 10px;
                              background-color: #d9d7d7;">
                                 <h4>Aller </h4>   
                             <div class="row " style="margin: 10px;">
                              
                                <div class=" form-group col-md-4 ">
                                 <label class="control-label" for="name">Ville de départ</label>
                                       <input type="text" class="form-control" name="departcity" placeholder="Ville de départ" value="`+departcityinput+`">
                                    </div>
                                    <div class="form-group col-md-4 ">
                                        <label class="control-label" for="name">arriver à la ville</label>
                                              <input type="text" class="form-control" name="arrivecity" placeholder="arriver à la ville" value="`+arrivecityinput+`">
                                           </div>
                                           <div class="form-group col-md-4  ">
                                            <label class="control-label" for="name">La date du vol aller</label>
                                                  <input type="date" class="form-control" name="arrivedate" placeholder="La date du vol aller" value="`+arrivedateinput+`">
                                               </div>
                                               <div class="form-group col-md-4  ">
                                                <label class="control-label" for="name">Aller - Heure de départ</label>
                                                      <input type="text" class="form-control" name="departtime" placeholder="Aller - Heure de départ" value="`+departtimeinput+`">
                                                   </div>
                                                   <div class="form-group col-md-4  ">
                                                    <label class="control-label" for="name">Aller -Heure d'arrivée</label>
                                                          <input type="text" class="form-control" name="arrivetime" placeholder="Aller -Heure d'arrivée" value="`+arrivetimeinput+`">
                                                       </div>
                                                       <div class="form-group col-md-4  ">
                                                <label class="control-label" for="name">Aller-numéro de vol</label>
                                                      <input type="text" class="form-control" name="flightnogo" placeholder="Retour-Heure d'arrivée" value="`+flightnogoinput+`">
                                                   </div>
                             </div>         
                             
                                </div>
                            </div>`);
     }else{
      $('.direction').html(` <div class="Return form-group " >
                                <div class="row"  style="border: 1px #2d72ae;  border-style: solid;
                              padding: 10px;
                              background-color: #d9d7d7;">
                                 <h4>Retour </h4>   
                                 
                             <div class="row " style="margin: 10px;">
                        
                                <div class="form-group col-md-4 ">
                                    <label class="control-label" for="name">arriver à la ville</label>
                                          <input type="text" readonly class="form-control" name="arrivecity" placeholder="arriver à la ville" value="`+arrivecityinput+`">
                                       </div>
                                <div class=" form-group col-md-4 ">
                                    <label class="control-label" for="name">Ville de départ</label>
                                          <input type="text"readonly class="form-control" name="departcity" placeholder="Ville de départ" value="`+departcityinput+`">
                                       </div>
                                       <div class="form-group col-md-4 ">
                                        <label class="control-label" for="name">Date du vol de retour</label>
                                              <input type="date" class="form-control" name="departdate" placeholder="Date du vol de retour" value="`+departdateinput+`">
                                           </div>
                                           <div class="form-group col-md-4  ">
                                            <label class="control-label" for="name">Retour-Heure de départ</label>
                                                  <input type="text" class="form-control" name="departtime2" placeholder="Retour-Heure de départ" value="`+departtime2input+`">
                                               </div>
                                               <div class="form-group col-md-4 ">
                                                <label class="control-label" for="name">Retour-Heure d'arrivée</label>
                                                      <input type="text" class="form-control" name="arrivetime2" placeholder="Retour-Heure d'arrivée" value="`+arrivetime2input+`">
                                                   </div>
                                                   <div class="form-group col-md-4  ">
                                                <label class="control-label" for="name">Retour-numéro de vol</label>
                                                      <input type="text" class="form-control" name="flightnoreturn" placeholder="Retour-Heure d'arrivée" value="`+flightnoreturninput+`">
                                                   </div>
                            </div>
                                </div>
                            </div>`);
   }
     }


});

$('input[name="departcity"]').on('change', function() {
$('input[name="departcity22"]').val(this.value);

});
$('input[name="arrivecity"]').on('change', function() {
$('input[name="arrivecity2"]').val(this.value);

});
</script>
@endif
@stop
