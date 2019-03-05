<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Détail sur la approvisionnement </h4>
    </div>
    <div class="modal-body">
        <div class="row">
            {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('commandes.store')]) !!}

                
                <div class="col-md-12">
                    
                    <style>
                        .col-md-9 label {
                            margin-bottom: 10px
                        }
                    </style>
                    <div class="col-md-9">
                        <label>
                            <strong>Titre:</strong> {{$commande->nom}}
                        </label>
                        <br>
                        
                        <label>
                           
                            <strong>Produit:</strong> {{$commande->produit_id}}
                            
                            
                        </label>
                        <br>
                        <label>
                            <strong>Quantite:</strong> {{$commande->quantite}}
                        </label>
                        <br>
                        <label>
                            <strong>Fournisseur:</strong> {{$commande->fournisseur_id}}
                        </label>
                        <br>
                        <label>
                            <strong>Est elle livrer?:</strong> {{$commande["etat"] == 1 ? 'OUI' : 'NON'}}
                    
                        </label>
                        
                    </div>
                </div>
                
               
                <div class="col-md-12">
                <strong>Date de creation :</strong> {{$commande->created_at}}
                </div>
                <div class="col-md-12">
                        <br>
                        <label>  <strong>Ajouter par :</strong> @foreach($users as $user)
                        @if($commande->user_id ==$user['id'])
                       {{ $user->name }}
                       @endif
                       @endforeach
                    </label>
                        </div>
                

            <div class="m-b-0">
                <div class="col-sm-offset-3 col-sm-9">

                </div>
            </div>
            <div class="col-md-12" style="border:0px;text-align: right;margin-top: 20px">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button>

            </div>

        </div>

    </div>

</div>  