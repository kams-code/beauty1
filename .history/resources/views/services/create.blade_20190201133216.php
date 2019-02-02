<style>
   label{
       text-align:left;
   }
</style>
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Ajouter un service</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('services.store'),'files'=>true]) !!}
            
            <div class="col-md-12" style="padding: 0px">
                <center>
                    <img id="imgpreview" src="/images/camera_icon.png" style="width: 100px;cursor: pointer;" required>
                    <input id="inputimage" type="file" name="imageup" accept="images/*" style="display: none;" required>

                </center>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('code','Code*') !!}</label>
                <div class="col-sm-12">
                    {!! Form::text('code',null, ['class' => 'form-control','required']) !!}
                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('nom','Nom*') !!}</label>
                <div class="col-sm-12">
                    {!! Form::text('nom',null, ['class' => 'form-control','required']) !!}
                </div>
            </div>
       
           
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('montant','Montant*') !!}</label>
                <div class="col-sm-12">
                    {!! Form::number('montant',null, ['class' => 'form-control','required']) !!}
                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('categorie_id','Categorie') !!}</label>
                <div class="col-sm-12">
                {!! Form::select('categorie_id',$categories,null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-12" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('user_id','Employe') !!}</label>
                <div class="col-sm-6">
                {{-- {!! Form::select('users[]', $users, null, ['class' => 'form-control','multiple'=>'multiple']) !!} --}}
               <select class="select2 form-control" multiple="multiple" data-placeholder="Choose a Country...">
                <option value="test 1">&nbsp;test 1</option>
                <option value="test 1">&nbsp;test 1</option>
                <option value="test 1">&nbsp;test 1</option>
                <option value="test 1">&nbsp;test 1</option>
                      @foreach($users as $user)
                      dd(u)
                                              <option value="test 1">&nbsp;test 1</option>
                                              
                      @endforeach
                </select>
                </div>
            </div>
          
           
            <div class="col-md-12" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('description','Description*') !!}</label>
                <div class="col-sm-12">
                    <textarea class="form-control" name="description" required></textarea>
                </div>
            </div>
         

            <div class="m-b-0">
                <div class="col-sm-offset-3 col-sm-9">

                </div>
            </div>
            <div class="col-md-12" style="border:0px;text-align: right;margin-top: 20px">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button>
                <button class="btn btn-primary">Enregistrer</button>
            </div>
            {!! Form::close() !!}
        </div>

    </div>

</div>