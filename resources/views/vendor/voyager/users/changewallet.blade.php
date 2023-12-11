@extends('voyager::master')

@section('page_title','change wallet')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_header')
    <h1 class="page-title">
        <i class="@if ($_GET['type']==1)
        glyphicon glyphicon-plus
        @else
        glyphicon glyphicon-minus
        @endif"></i>
        @if ($_GET['type']==1)
        dépôt sur compte

            
        @else
        retirer du compte   
        @endif
       </h1>
       <br>
       <h1 class="page-title" style="font-size: 12px;padding-top: 5px;">name: {{ $user->name }} {{ $user->lname }}</h1>
@stop

@section('content')
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
        <form class="form-edit-add" role="form" action="@if  ($_GET['type']==1)
        {{ route('deposit') }}
        @else
        {{ route('withdraw') }}
        @endif" method="POST" enctype="multipart/form-data" autocomplete="off">
            {{ csrf_field() }}
              <div class="form-group">
            <label for="lname">  montant actuel  : {{ $user->wallet }}</label>
        </div>
        <div class="form-group">
            <label for="amount">@if  ($_GET['type']==1)
                le montant ajouté 
            @else
            le montant retiré 
            @endif</label>
            <input type="number" class="form-control" id="amount" name="amount" placeholder="">
            <input type="hidden" name="id" value="{{ $_GET['id'] }}" />
        </div>

        <div class="form-group">
            <label for="amount">Note about the reason</label>
            <textarea  class="form-control" id="note" name="note" placeholder="add note">
            </textarea>
        </div>
        <button  type="submit" class="btn btn-sm btn-primary pull-right view">
          <span class="">@if  ($_GET['type']==1)
            verser
          @else
          se désister 
          @endif</span>
        </button>
        </form>
    </div>
    </div>
</div>
</div>
</div>
@stop

@section('javascript')
    <script>
        $('document').ready(function () {
            $('.toggleswitch').bootstrapToggle();
        });
    </script>
@stop
